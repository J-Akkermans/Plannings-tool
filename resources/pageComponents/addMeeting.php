<form class="w-75 d-none" id="formDiv" method="post">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Datum & Tijd</label>
        <input type="datetime-local" name="afspraakInput[]" class="form-control" id="exampleInputEmail1">
        <span class="text-danger"><?php echo $err[0]?></span>
    </div>
    <div class="mb-3">
        <label for="uitlegger" class="form-label">Uitlegger</label>
        <input type="text" name="afspraakInput[]" class="form-control" id="uitlegger">
        <span class="text-danger"><?php echo $err[1]?></span>
    </div>
    <div class="mb-3">
        <label for="uitlegger" class="form-label">Spelers</label>
        <input type="text" name="afspraakInput[]" class="form-control" id="uitlegger">
        <span class="text-danger"><?php echo $err[2]?></span>
        <div class="form-text">Zorg dat namen van spelers gesplits zijn door een , <br> <span class="fw-bold">Voorbeeld: Jan,Willem,Freek,Willemijn</span></div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>