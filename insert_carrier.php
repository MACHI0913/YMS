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
        $_SESSION['status'] = "Image already existis. '.$store.'";
        header("Location: carriers.php");
    }
    else
    {
        $query = "INSERT INTO carrier (Carrier_name, Carrier_type_id, Logo_url) VALUES('$carrName', '$carrType', '$carrLogo')";
        $run = mysqli_query($mysqli, $query);

        if($run)
        {
            move_uploaded_file($_FILES["carrier_logo"]["tmp_name"], "/assets/img/profiles/".$_FILES["carrier_logo"]["name"]);
            $_SESSION['status'] = "Carrier Added Succesfully: " .$carrName. " and " .$carrType;
            header("Location: carriers.php");
        
        }
        else
        {
            $_SESSION['status'] = "Unable to add NEW Carrier info: " .$carrName. " and " .$carrType;
            header("Location: carriers.php");
        }
    }
}
else
{
    echo "all fields required";
}

?>