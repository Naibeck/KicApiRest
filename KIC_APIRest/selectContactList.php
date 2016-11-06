<?php
/**
 * Created by PhpStorm.
 * User: stelvi
 * Date: 11/5/2016
 * Time: 8:32 PM
 */

include 'conn.php';
//Select data from database
//echo $_POST;
$kic_user_id = $_POST['kic_user_id'];

//$kic_user_id = 55;
$getData = "select * from kic_relationship_tb where kic_user_id='$kic_user_id'";
$qur = $connection->query($getData);

while($r = mysqli_fetch_assoc($qur)){

    $msg[] = array("contact_alias" => $r['contact_alias'],"contact_desc" => $r['contact_desc']);
}
$json = $msg;

header('application/x-www-form-urlencoded');
echo json_encode($json);

@mysqli_close($conn);

?>