<?php
// Include config file
require_once "config.php";

session_start();
if(isset($_POST['delete']))
{
    $carrierid = $_POST['carrtypeid']; 
    $carrName = $_POST['carrtypename'];

    $query = "DELETE FROM carrier_type WHERE Carr_type_ID = '$carrierid' ";
    $result = mysqli_query($mysqli, $query);
    
    if($result)
    {
        $_SESSION['status'] = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Carrier Type DELETED.... Carrier Type ID: ".$carrierid. "Carrier Name: " 
        .$carrName. "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span></button></div>";
        header("Location: carrier_type.php");
    }
    else
    {
        $_SESSION['status'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Error!</strong> Unable to DELETE Carrier Type information.... Carrier Type ID: ".$carrierid. "Carrier Name: " 
        .$carrName. "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button>
        </div>";
        header("Location: carrier_type.php");
    }
}
?>