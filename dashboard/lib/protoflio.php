<?php 


function addNewPro($img ,$desc ,$user_id) {
    $con = mysqli_connect("localhost", "root", "", "fs8_blog");

    $sql = "INSERT INTO `protofolio` (`img` , `description` , `user_id` ) VALUES ('$img' , '$desc' , '$user_id')";

    mysqli_query($con, $sql);

    $res = mysqli_affected_rows($con);

    if ($res == 1) {
    return true;
    
    } else {
        return false;
    }
}


function GetProtoflios(){
    $con = mysqli_connect("localhost", "root", "", "fs8_blog");

    $sql = "SELECT * FROM `userprotofolio`";
    
    $q = mysqli_query($con, $sql);

    $projects = [];
    while($res = mysqli_fetch_assoc($q)){

        $projects[]  =  $res;
    
}
return $projects;
}



function deletePro($pro_id) {
    $con = mysqli_connect("localhost", "root", "", "fs8_blog");

    $sql = "DELETE FROM `protofolio` WHERE `id` = $pro_id";

    mysqli_query($con, $sql);

    $res = mysqli_affected_rows($con);

    if ($res == 1) {
    return true;
    
    } else {
        return false;
    }
}


function GetProtoflioByID($id){
    $con = mysqli_connect("localhost", "root", "", "fs8_blog");

    $sql = "SELECT * FROM `userprotofolio` WHERE `id` = $id";
    
    $q = mysqli_query($con, $sql);

    $res= mysqli_fetch_assoc($q);

    return $res;    
}


function UpdatePro($id , $desc , $img) {
    $con = mysqli_connect("localhost", "root", "", "fs8_blog");

    $sql = "UPDATE `protofolio` SET `description` = '$desc' ";

    if(!empty($img)){
        $sql .= "  , `img` = '$img' ";  
    }
        $sql .=  "WHERE `id` = $id";

    
    mysqli_query($con, $sql);

    $res = mysqli_affected_rows($con);

    if ($res == 1) {
    return true;
    
    } else {
        return false;
    }
}