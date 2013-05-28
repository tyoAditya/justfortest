<?php

require_once("model/data.php");

$return = null;
try{
    $ArrayURL = split('/', $_SERVER[REQUEST_URI]);
    $id = $ArrayURL[2];
    
    $data = new propertyData();
    
    if (is_object($data) == true) {
        $status = '200 OK';
    }else{
        throw new \Exception('oops');   
    }
    
    $return = $data->getAll($id);
}
catch(\Exception $e){
    // Log Exception
    $status = '500 Internal Server Error';
}

$status_header = "HTTP/1.1 ".$status;
header($status_header);
header("Content-Type: application/json");

echo json_encode( $return );
?>


