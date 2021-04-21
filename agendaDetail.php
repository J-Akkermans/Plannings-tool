<?php 
        include 'resources/functionComponents/db_conn.php';
        include 'resources/functionComponents/select.php';
        
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
    <div class="jumbotron  p-5 bg-dark">
        <div class="container text-light">
            <h1 class="display-3">Plan je games!</h1>
            <p>Gebruik deze website om al je games te plannen</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Plan je gamedag!</a></p>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="card w-100">
                    <img src="resources/webImg/plan.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-center">Plan!</h5>
                        <div class="card-content d-flex justify-content-center">
                            <span class="circle bg-primary text-center text-light line">1</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
            <div class="card w-100">
                    <img src="resources/webImg/edit.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-center">Bewerk!</h5>
                        <div class="card-content d-flex justify-content-center">
                            <span class="circle bg-primary text-center text-light">2</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
            <div class="card w-100">
                    <img src="resources/webImg/time.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-center">Bekijk je planning!</h5>
                        <div class="card-content d-flex justify-content-center">
                            <span class="circle bg-primary text-center text-light">3</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    <?php include('resources/pageComponents/footer.php')?>
</body>

</html>