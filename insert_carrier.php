<?php
// Include config file
require_once "config.php";

session_start();
if(isset($_POST['Add_carrier']))
{
    
    $carrName = $_POST['carrier_name'];
    $carrType = $_POST['carrier_type'];
    $carrLogo = $_FILES["carrier_logo"]["name"];

    if(file_exists("/assets/img/profiles/" .$_FILES["carrier_logo"]["name"]))
    {
        $store = $_FILES["carrier_logo"]["name"];
        $_SESSION['status'] = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Warning!</strong> Image already existis. " .$store. "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button>
        </div>";
        header("Location: carriers.php");
    }
    else
    {
        $query = "INSERT INTO carrier (Carrier_name, Carrier_type_id, Logo_url) VALUES('$carrName', '$carrType', '$carrLogo')";
        $run = mysqli_query($mysqli, $query);

        if($run)
        {
            move_uploaded_file($_FILES["carrier_logo"]["tmp_name"], "/assets/img/profiles/" .$_FILES["carrier_logo"]["name"]);
            $_SESSION['status'] = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Success!</strong> Carrier Added. Carrier Name: " .$carrName. " and Carrier Type: " .$carrType. "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span></button></div>";
            header("Location: carriers.php");
        
        }
        else
        {
            $_SESSION['status'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Error!</strong> Unable to UPDATE Carrier information. Carrier Name: " .$carrName. " and Carrier Type: " .$carrType. "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            </div>";
            header("Location: carriers.php");
        }
    }
}
else
{
    $_SESSION['status'] = "<div class='alert alert-dark alert-dismissible fade show' role='alert'>
    <strong>All fields required!</strong> You should check in on some of those fields below.<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button>
    </div>
    </div>
   ";
}

?>