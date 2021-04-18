<?php 

    function showList(){
        $counter = 0;
        $divOpen = "<div class='row mb-2'>";
        $divClose = "</div>";
        echo $divOpen;
        foreach(selectAll() as $info){
            if($counter == 2){
                $counter = 0;
                echo $divClose;
                echo $divOpen;
                
            }?>
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <h3 class="mb-0">
                            <a class="text-dark" href="#"><?= $info['name']?></a>
                        </h3>
                        <p class="card-text mb-auto textOverlap"><?= strip_tags($info['description'])?></p>
                        <a href="gameDetail.php?id=<?=$info['id']?>&name=<?=$info['name']?>">Meer informatie!</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block"
                        alt="<?= $info['name']?>" style="width: 200px; height: 250px;"
                        src="resources/dbImg/<?=$info['image']; ?>"
                        data-holder-rendered="true">
                </div>
            </div>
<?php 
    $counter++;
    }
    echo $divClose;
}
 ?>