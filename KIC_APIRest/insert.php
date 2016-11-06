<?php
/**
 * Created by PhpStorm.
 * User: stelvi
 * Date: 11/5/2016
 * Time: 7:06 PM
 */

include 'conn.php';
$request = $_SERVER['REQUEST_METHOD'];
$ext_id = $_POST['ext_id'];
$ext_desc_id = $_POST['ext_desc_id'];
$create_timestamp = $_POST['create_timestamp'];
echo "ext_id";
echo "$request";
echo $ext_id;

echo "POST e qui fffffffffffffff";
echo $_POST;
/**

$ext_id = "GM1010101";
$ext_desc_id = "GMail";
$create_timestamp = "11/23/2016 15:45:34";
 */




$sql = "INSERT INTO `kic_db`.`kic_user_tb` (`ext_id`, `ext_desc_id`, `create_timestamp`) VALUES ('$ext_id', '$ext_desc_id', '$create_timestamp');";

if ($connection->query($sql)) {
    $msg = array("ext_id" =>1 , "msg" => "RIS");
} else {
    echo "ERROR MESSAGE : " . $sql . "<br>" . mysqli_error($connection);
}

$json = $msg;

//header('content-type: application/json');

header('application/x-www-form-urlencoded');
echo json_encode($json);


@mysqli_close($conn);

?>