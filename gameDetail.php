<?php 
    include 'resources/functionComponents/db_conn.php';
    include 'resources/functionComponents/select.php';
    include 'resources/contentFunctions/listItemFunction.php';
    $data = selectIndiviual($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/extraStyle.css">
    <title>Home</title>
</head>

<body class="bg-main">
    <?php include('resources/pageComponents/nav.php')?>
    <div class="container my-4">
        <div class="card mb-3 shadow">
        <div class="card-header">
          <h1><?=$data['name']?></h1>
  </div>
            <div class="d-flex justify-content-around my-2">
              <div class="d-none d-xl-block">
                <?=$data['youtube'] ?>
              </div>
                <figure style="display: grid; justify-items: center; align-items: center;">
                    <img class=" alt=" <?= $data['name']?>" style="width: 220px; height: 270px;"
                        src="resources/dbImg/<?=$data['image']; ?>" data-holder-rendered="true">
                </figure>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?=$data['name']; ?></h5>
                <p class="card-text"><?= strip_tags($data['description']) ?></p>

            </div>
            <div class="card-footer text-muted d-flex justify-content-around">
            <div>
              <ul>
                <li class="list-group-item  bg-transparent border-0"><h2>Skills</h2></li>
                <?=sortDotComma($data['skills']) ?>
              </ul>
            </div>

            <?php if($data['expansions'] != null){?>
            <div>
            <ul>
                <li class="list-group-item  bg-transparent border-0"><h2>Uitbreidingspakketen</h2></li>
                <?=sortDotComma($data['expansions']) ?>
              </ul>
            </div>
              <?php }?>
            <div>
            <ul>
                <li class="list-group-item  bg-transparent border-0"><h2>Spelers</h2></li>
                <li class="list-group-item  bg-transparent border-0"><span class="fw-bold">Minimum spelers:</span> <?=$data['min_players'] ?></li>
                <li class="list-group-item  bg-transparent border-0"><span class="fw-bold">Maximum spelers:</span> <?=$data['max_players'] ?></li>
              </ul>
            </div>
            <ul>
                <li class="list-group-item  bg-transparent border-0"><h2>Speeltijd</h2></li>
                <li class="list-group-item  bg-transparent border-0"><span class="fw-bold">Uitleg minuten:</span> <?=$data['explain_minutes'] ?></li>
                <li class="list-group-item  bg-transparent border-0"><span class="fw-bold">Speel minuten:</span> <?=$data['play_minutes'] ?></li>
              </ul>
            </div>
            </div>
        </div>
    </div>
    <?php include('resources/pageComponents/footer.php')?>
</body>

</html>