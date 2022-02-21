<?php
// Include config file
require_once "config.php";

session_start();
if(isset($_POST['Add_carrtype']))
{
    
    $carrName = $_POST['carrtype_name'];
    
    $query = "INSERT INTO carrier_type (Carr_type_name) VALUES('$carrName')";
    $run = mysqli_query($mysqli, $query);

    if($run)
    {
        $_SESSION['status'] = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Carrier Type ADDED.... Carrier Name: " .$carrName. "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span></button></div>";
        header("Location: carrier_type.php");
    }
    else
    {
        $_SESSION['status'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Error!</strong> Unable to ADD Carrier Type information.... Carrier Name: " .$carrName. "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button>
        </div>";
        header("Location: carrier_type.php");
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