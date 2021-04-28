<?php
    function selectAll(){
        $pdo = dbConn();
        $sth = $pdo->prepare("SELECT * FROM `gamelijst`");
        $sth->execute();
        $data = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    function selectIndiviual($id){
        $pdo = dbConn();
        $sth = $pdo->prepare("SELECT * FROM `gamelijst` where id=:id");
        $sth->execute(array('id'=> $id));
        $data = $sth->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    function countRow(){
        $pbo = dbConn();
        $sth = $pbo->prepare("SELECT count(id) as aantal FROM `agenda`");
        $sth->execute();
        $data = $sth->fetch(PDO::FETCH_ASSOC);
        return $data = $data['aantal'];
    }

    function getAgendaData(){
        $pbo = dbConn();
        $sth = $pbo->prepare("SELECT agenda.*, gamelijst.name as GameNaam, gamelijst.image FROM gamelijst INNER JOIN agenda ON (agenda.Gameid=gamelijst.id)");
        $sth->execute();
        $data = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    function singlegetAgendaData($id){
        $pbo = dbConn();
        $sth = $pbo->prepare("SELECT agenda.*, gamelijst.name as GameNaam, gamelijst.image FROM gamelijst INNER JOIN agenda ON (agenda.Gameid=gamelijst.id) where agenda.id=:id");
        $sth->execute(array(':id'=> $id));
        $data = $sth->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    function selectEndTime($id){
        $pbo = dbConn();
        $sth = $pbo->prepare("SELECT ADDTIME(agenda.datum_tijd, SEC_TO_TIME((gamelijst.explain_minutes + gamelijst.play_minutes) *60)) AS tijd FROM gamelijst INNER JOIN agenda ON (agenda.Gameid=gamelijst.id) where agenda.id=:id");
        $sth->execute(array(':id'=> $id));
        $data = $sth->fetch();
        return $data;
    }

