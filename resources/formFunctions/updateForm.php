<?php 
$scriptTest = "";
$verified = false;
function cleanData($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$errorText = "Zorg ervoor dat het onderstaande veld correct is ingevuld. ";
$check = array(false,false,false);
$err = array("", "", "");
$data = array();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $array = $_POST["updateInfo"];
    print_r($array[0]);
    $pdo = dbConn();
    $sth = $pdo->prepare("UPDATE agenda SET datum_tijd=:dateInfo, uitlegger=:uitlegger, spelers=:spelers WHERE id=:id;");
    $sth->bindParam(':id', $id);
    $sth->execute(array(
        ':dateInfo' => date("Y-m-d H:i:s",strtotime($array[0])),
        ':uitlegger' => $array[1],
        ':spelers' =>  $array[2],
        'id' => $_GET['id']
       ));;
}



