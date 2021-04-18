<?php 
    include 'resources/functionComponents/db_conn.php';
    include 'resources/functionComponents/select.php';
    include 'resources/contentFunctions/listFunction.php';
    
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
        <?php showList();?>
    </div> 
    <?php include('resources/pageComponents/footer.php')?>
</body>
</html>