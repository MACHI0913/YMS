<?php
// Include config file
require_once "config.php";


session_start();
if(isset($_POST['save']))
{
    $carrierid = $_POST['carrid'];   
    $carrName = $_POST['carrname'];
    $carrType = $_POST['carrier_type'];
    $carrLogo = $_FILES["carr_logo"]["name"];

    $query = "UPDATE carrier SET Carrier_name ='$carrName', Carrier_type_id ='$carrType' WHERE Carrier_ID = '$carrierid'";
    $result = mysqli_query($mysqli, $query);
    
    if($result)
    {
        $_SESSION['status'] = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Carrier information UPDATED. Carrier ID: " .$carrierid. ", Carrier Name: " .$carrName. 
        " and Carrier Type: " .$carrType. "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span></button></div>";
        header("Location: carriers.php");
    }
    else
    {
        $_SESSION['status'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Error!</strong> Unable to UPDATE Carrier information. Carrier ID: " .$carrierid. ", Carrier Name: " .$carrName. 
        " and Carrier Type: " .$carrType. "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button>
        </div>";
        header("Location: carriers.php");
    }

}
    
?>
