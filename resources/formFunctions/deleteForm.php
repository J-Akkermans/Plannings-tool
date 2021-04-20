<?php 



function delete($id){
        $pbo = dbConn();
        $sth = $pbo->prepare("DELETE FROM agenda
        WHERE id = :id");
        $sth->execute(array(':id'=>$id));

}


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    delete($_POST['inputVeld']);


}

