<?php


function success(array $data){

    $rdata["status"] = "success";
    $rdata["data"] =$data;
    //header("Content-Type:text/json");
    //echo json_encode($rdata);
    return $rdata;
}


function error($message){

    $data["status"] = "error";
    $data["message"] = $message;
    return $data;
}