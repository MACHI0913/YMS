<?php
// Include config file
require_once "config.php";

session_start();
if(isset($_POST['delete']))
{
    $carrierid = $_POST['carrid'];
    $carrName = $_POST['carrname'];
    $carrType = $_POST['carr_type'];

    $query = "DELETE FROM carrier WHERE Carrier_ID = '$carrierid' ";
    $result = mysqli_query($mysqli, $query);
    
    if($result)
    {
        $_SESSION['status'] = "Carrier DELETED Succesfully: " .$carrierid. ", " .$carrName. " and " .$carrType;
        header("Location: carriers.php");
    }
    else
    {
        $_SESSION['status'] = "Unable to DELETE Carrier: " .$carrierid. ", " .$carrName. " and " .$carrType;
        header("Location: carriers.php");
    }
}


?>