<?php
// Include config file
require_once "config.php";


session_start();
if(isset($_POST['save']))
{
    $carrierid = $_POST['carrid'];   
    $carrName = $_POST['carrname'];
    $carrType = $_POST['carr_type'];
    $carrLogo = $_FILES["carr_logo"]["name"];

    $query = "UPDATE carrier SET Carrier_name ='$carrName', Carrier_type_id ='$carrType' WHERE Carrier_ID = '$carrierid'";
    $result = mysqli_query($mysqli, $query);
    
    if($result)
    {
        $_SESSION['status'] = "Carrier Added Succesfully: " .$carrierid. ", " .$carrName. " and " .$carrType;
            header("Location: carriers.php");
    }
    else
    {
        $_SESSION['status'] = "Unable to UPDATE Carrier info: " .$carrierid. ", " .$carrName. " and " .$carrType;
        header("Location: carriers.php");
    }

}
    
?>
