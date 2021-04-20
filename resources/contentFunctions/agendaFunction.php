<?php 

foreach (getAgendaData() as $info){
    $dateTime = explode(" ",$info['datum_tijd']);
    $splitMonth = explode("-",$dateTime[0]);
    $monthName = date('M', mktime(0, 0, 0, $splitMonth[1], 10));
    ?>
<div class="row d-flex justify-content-center my-2">
    <div class="col-lg-2  bg-primary">
        <div class="d-flex flex-column align-items-center justify-content-center">
            <span class="display-2 text-white"><?=$splitMonth[2]; ?> </span>
            <span class="fw-bold h2 text-white"><?=$monthName ?></span>
        </div>
    </div>
    <div class="col-lg-4 bg-white ">
        <div class="d-flex flex-column align-items-between justify-content-center h-100">
            <h4><?=$info['GameNaam'] ?></h4>
            <p class="text-muted mb-2"><span class="fw-bold">Tijd</span>
                <?=DATE_FORMAT(new DateTime($dateTime[1]), 'H:i') ?></p>
            <p class="text-muted mb-2"><span class="fw-bold">Uitlegger</span><?=$info['Uitlegger'] ?></p>
            <p class="text-muted mb-2"><span class="fw-bold">Spelers</span><?=$info['Spelers'] ?> </p>
        </div>
    </div>
    <div class="col-lg-2 bg-white d-none d-md-block">
        <section class="d-flex flex-column align-items-center justify-content-center h-100">
            <img class="d-none d-lg-block d-block my-auto" alt="<?= $info['name']?>"
                src="resources/dbImg/<?=$info['image']; ?>" style="height: 100px;">
            <div class="d-flex justify-content-between w-50 mt-3">
                <a href=""><i class="text-primary fas fa-edit display-7"></i></a>
                <a href=""><i class="text-primary fas fa-info-circle display-7"></i></a>
                <form method="post">
                    <input type="hidden" name="inputVeld"value="<?=$info['id']?>">
                    <button class="deze" type="submit" name="delete" onclick="return confirm('Weet jij zeker dat je de afspraak op \n<?php echo DATE_FORMAT(new DateTime($dateTime[0]), 'd/m/y');?> \nMet spelers:\n<?=$info['Spelers'] ?> \n Wilt verwijderen?')">
                        <i class="text-primary fas fa-trash-alt display-7"></i>
                    </button>
                </form>

            </div>
        </section>


        <div>
        </div>
    </div>
</div>

<?php
}

?>