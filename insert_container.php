<?php
// Include config file
require_once "config.php";

session_start();
if(isset($_POST['Add_container']))
{
    //$arrival = $_POST['arrival_date'];
    $contnum = $_POST['container_num'];
    $carrType = $_POST['carrier_type'];
    $location = $_POST['location'];
    $loadst = $_POST['Load_st'];
    $contdesc = $_POST['Cont_desc'];

    mysqli_query($mysqli, "SET AUTOCOMMIT=0");
    mysqli_query($mysqli, "START TRANSACTION");
    $insert1= "INSERT INTO container (Container_num, Carrier_ID) VALUES ('$contnum', '$carrType')";
    $run1= mysqli_query($mysqli, $insert1);
    $insert2= "INSERT INTO container_info (Container_ID, Load_status_ID, Cont_desc_ID, Current_loc_ID) 
    VALUES (LAST_INSERT_ID(),'$loadst', '$contdesc', '$location')";
    $run2= mysqli_query($mysqli, $insert2);
    
    if($run1 && $run2)
    {
        $query4 ="UPDATE container SET container.Cont_info_ID = LAST_INSERT_ID() FROM container
        INNER JOIN container_info WHERE container.Container_ID= container_info.Container_ID";
        /*SET container.Cont_info_ID = container_info.Cont_info_ID  FROM container
        INNER JOIN container_info ON container.Container_ID= container_info.Container_ID";*/
        $run4 = mysqli_query($mysqli, $query4);
        if($run4)
        { 
            mysqli_query($mysqli, "COMMIT");
            $_SESSION['status'] = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Success!</strong> Container Added. Container Name: " .$contnum. " and Arrival Date: " .$arrival. "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span></button></div>";
            header("Location: containers.php");
        }
        else
        {
            echo "query4 didn't work";
            mysqli_query($mysqli, "ROLLBACK");
        }
    }
    else
    {
        mysqli_query($mysqli, "ROLLBACK");
        $_SESSION['status'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Error!</strong> Unable to UPDATE Container information. Container Name: " .$contnum. " and Arrival Date: " .$arrival. "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button>
        </div>";
        header("Location: containers.php");
    }
    //mysqli_query($mysqli, "SET AUTOCOMMIT=1");
}
else
{
    $_SESSION['status'] = "<div class='alert alert-dark alert-dismissible fade show' role='alert'>
    <strong>All fields required!</strong> You should check in on some of those fields below. <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button>
    </div>
    </div>
   ";
}

?>