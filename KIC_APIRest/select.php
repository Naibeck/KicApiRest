<?php
/**
 * Created by PhpStorm.
 * User: stelvi
 * Date: 11/5/2016
 * Time: 8:32 PM
 */

include 'conn.php';
//Select data from database


$getData = "select * from kic_user_tb";
$qur = $connection->query($getData);

while($r = mysqli_fetch_assoc($qur)){

    $msg[] = array("ext_id" => $r['ext_id'], "ext_desc_id" => $r['ext_desc_id'], "create_timestamp" => $r['create_timestamp']);
}
$json = $msg;

header('content-type: application/json');
echo json_encode($json);

@mysqli_close($conn);

?>