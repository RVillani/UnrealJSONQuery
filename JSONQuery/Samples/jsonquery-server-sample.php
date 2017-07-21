<?php

$post_json = json_decode(file_get_contents('php://input'));

$response_json = new stdClass();
$response_json->info = "This script returns some types of JSON properties and the JSON sent from Unreal as a sub-object.";
$response_json->boolean = true;
$response_json->integer = 1;
$response_json->float = 2.0;
$response_json->null = null;
$response_json->object = $post_json;

echo json_encode($response_json);

?>