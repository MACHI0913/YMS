<?php
// Include config file
require_once "config.php";


session_start();
if(isset($_POST['save']))
{
    $carrierid = $_POST['carrtypeid']; 
    $carrName = $_POST['carrtypename'];
    
    $query = "UPDATE carrier_type SET Carr_type_name ='$carrName' WHERE Carr_type_ID = '$carrierid'";
    $result = mysqli_query($mysqli, $query);
    
    if($result)
    {
        $_SESSION['status'] = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Carrier UPDATED.... Carrier Name: " .$carrName. "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span></button></div>";
        header("Location: carrier_type.php");
    }
    else
    {
        $_SESSION['status'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Error!</strong> Unable to UPDATE Carrier Type information.... Carrier Name: " .$carrName. "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button>
        </div>";
        header("Location: carrier_type.php");
    }
}
?>