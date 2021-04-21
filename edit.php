<?php 
        include 'resources/functionComponents/db_conn.php';
        include 'resources/functionComponents/select.php';
        include 'resources/formFunctions/updateForm.php';
        $info = singlegetAgendaData($_GET['id']);

?>

<!DOCTYPE HTML>
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


    <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 bg-white shadow m-5 p-3">
            <form method="post">
            <div class="form-group row mb-2">
                    <label class="col-sm-2 col-form-label">Gamenaam</label>
                    <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="<?=$info['GameNaam'] ?>" readonly>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-sm-2 col-form-label">Datum & Tijd</label>
                    <div class="col-sm-10">
                        <input name="updateInfo[]" type="datetime-local" class="form-control" value="<?php echo date('Y-m-d\TH:i:s', strtotime($info['datum_tijd'])) ?>">
                    </div>
                </div>
            <div class="form-group row mb-2">
                    <label class="col-sm-2 col-form-label">Uitlegger</label>
                    <div class="col-sm-10">
                        <input name="updateInfo[]" type="text" class="form-control" value="<?= $info['Uitlegger']?>">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-sm-2 col-form-label">Spelers</label>
                    <div class="col-sm-10">
                        <input name="updateInfo[]" type="text" class="form-control" value="<?= $info['Spelers']?>">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <button name="" type="submit" class="w-100 btn btn-primary">Update</button>
                    </div>
                </div>
              
            </form>
        </div>
    </div>
    </div>




    <?php include('resources/pageComponents/footer.php')?>
</body>

</html>