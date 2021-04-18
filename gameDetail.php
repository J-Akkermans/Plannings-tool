<?php 
    include 'resources/functionComponents/db_conn.php';
    include 'resources/functionComponents/select.php';
    include 'resources/contentFunctions/listItemFunction.php';
    include 'resources/formFunctions/addForm.php';
    $data = selectIndiviual($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/extraStyle.css">
    <title>Home</title>
</head>

<body class="bg-main">
    <?php include('resources/pageComponents/nav.php')?>
    <div class="container my-4">
        <div class="card mb-3 shadow">
            <div class="card-header d-flex justify-content-between">
                <h1><?=$data['name']?></h1>
                 <button type="button" id="afspraakKnop" class="btn btn-success">Maak afspraak!</button>
                 <button type="button" id="cancelKnop" class="btn btn-danger d-none">Annuleer</button>
            </div>
            <div class="d-flex my-2 justify-content-center">
                <?php include('resources/pageComponents/addMeeting.php')?>
            </div>
            <?php include('resources/pageComponents/contentDivDetail.php')?>
            <div class="card-body">
                <h5 class="card-title"><?=$data['name']; ?></h5>
                <p class="card-text"><?= strip_tags($data['description']) ?></p>

            </div>
            <div class="card-footer text-muted d-flex justify-content-around">
                <div>
                    <ul>
                        <li class="list-group-item  bg-transparent border-0">
                            <h2>Skills</h2>
                        </li>
                        <?=sortDotComma($data['skills']) ?>
                    </ul>
                </div>

                <?php if($data['expansions'] != null){?>
                <div>
                    <ul>
                        <li class="list-group-item  bg-transparent border-0">
                            <h2>Uitbreidingspakketen</h2>
                        </li>
                        <?=sortDotComma($data['expansions']) ?>
                    </ul>
                </div>
                <?php }?>
                <div>
                    <ul>
                        <li class="list-group-item  bg-transparent border-0">
                            <h2>Spelers</h2>
                        </li>
                        <li class="list-group-item  bg-transparent border-0"><span class="fw-bold">Minimum
                                spelers:</span> <?=$data['min_players'] ?></li>
                        <li class="list-group-item  bg-transparent border-0"><span class="fw-bold">Maximum
                                spelers:</span> <?=$data['max_players'] ?></li>
                    </ul>
                </div>
                <ul>
                    <li class="list-group-item  bg-transparent border-0">
                        <h2>Speeltijd</h2>
                    </li>
                    <li class="list-group-item  bg-transparent border-0"><span class="fw-bold">Uitleg minuten:</span>
                        <?=$data['explain_minutes'] ?></li>
                    <li class="list-group-item  bg-transparent border-0"><span class="fw-bold">Speel minuten:</span>
                        <?=$data['play_minutes'] ?></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    <?php include('resources/pageComponents/footer.php')?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <?=$scriptTest ?>
    <script>
   $(document).ready(function() {
        $("#afspraakKnop").click(function() {
            if (!$("#contentDiv").hasClass("d-none")) {
                $("#contentDiv,#afspraakKnop").addClass("d-none");
                $("#formDiv, #cancelKnop").removeClass("d-none");
            }
        });
        $("#cancelKnop").click(function() {
            if ($("#contentDiv").hasClass("d-none")) {
                $("#contentDiv,#afspraakKnop").removeClass("d-none");
                $("#formDiv, #cancelKnop").addClass("d-none");
            }
        });
        
    });
    </script>
</body>

</html>