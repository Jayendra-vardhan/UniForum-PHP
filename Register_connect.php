<?php
if(empty($_POST['First_Name']))
{
    $msg = '<font color ="red"><b> Field for First_Name is empty!</b></font>';
    include("Register.php");
    exit;
}

if(empty($_POST['First_Name']))
{
    $msg = '<font color ="red"><b> Field for First_Name is empty!</b></font>';
    include("Register.php");
    exit;
}

else if(empty($_POST['Last_Name']))
{
    $msg = '<font color ="red"><b> Field for Last_Name is empty!</b></font>';
    include("Register.php");
    exit;
}

else if(empty($_POST['Sap_ID']))
{
    $msg = '<font color ="red"><b> Field for Sap_ID is empty!</b></font>';
    include("Register.php");
    exit;
}

else if(empty($_POST['Stream']))
{
    $msg = '<font color ="red"><b> Field for Stream is empty!</b></font>';
    include("Register.php");
    exit;
}

else if(empty($_POST['Email']))
{
    $msg = '<font color ="red"><b> Field for Email is empty!</b></font>';
    include("Register.php");
    exit;
}

else if(empty($_POST['Gender']))
{
    $msg = '<font color ="red"><b> Field for Gender is empty!</b></font>';
    include("Register.php");
    exit;
}

else if(empty($_POST['Username']))
{
    $msg = '<font color ="red"><b> Field for Username is empty!</b></font>';
    include("Register.php");
    exit;
}

else if(empty($_POST['Password']))
{
    $msg = '<font color ="red"><b> Field for Password is empty!</b></font>';
    include("Register.php");
    exit;
}

else if(empty($_POST['Username']))
{
    $msg = '<font color ="red"><b> Field for Mobile is empty!</b></font>';
    include("Register.php");
    exit;
}

else if(empty($_POST['DateOfBirth']))
{
    $msg = '<font color ="red"><b> Field for DateOfBirth is empty!</b></font>';
    include("Register.php");
    exit;
}

else 
{
    define('DB_SERVER','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','1234');
    define('DB_NAME','credentials');
    
    $mysqli = @mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
    if(mysqli_connect_errno())
    {
        echo "Database Connection Failed! ".mysqli_connect_errno();
        exit();
    }

    $query = "INSERT INTO "
}

?>
