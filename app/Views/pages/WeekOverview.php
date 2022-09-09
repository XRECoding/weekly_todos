<!-- header -->
<div class="d-flex justify-content-between border pb-2 pt-2 pl-3 pr-3">
    <div>
        <form method="post" action="<?php echo base_url('index.php/WeekOverview/redirectCalendar') ?>">
            <button style="width: 100%; border: none; background: none">
                <h5 class="mb-0"><?php echo $week ?>te Kalenderwoche</h5>
                <h6>vom <?php echo $monday ?> bis <?php echo $sunday ?> </h6>
            </button>
        </form>
    </div>
    <div class="align-self-center">
        <button><i class="bi bi-pie-chart" style="font-size:36px;"></i></button>
        <button><i class="bi bi-gear" style="font-size:36px;"></i></button>
    </div>
</div>

<!-- body -->
<div class="container-flex border p-3 gap-3">
    <form method="post" action="<?php echo base_url('index.php/WeekOverview/button_filter')?>">
    
        <!-- <button class="btn btn-secondary btn-lg btn-block">Montag <br> den <?php echo $monday ?></button> -->
        <!-- <button class="btn btn-secondary btn-lg btn-block text-left">Dienstag <br> den <?php echo $tuesday ?></button> -->

        <button type="submit" name="monday" style="width: 100%; height: 10%" ><b>Montag</b> <br>den <?php echo $monday ?></button>
        &nbsp;
        <button type="submit" name="tuesday" style="width: 100%; height: 10%"><b>Dienstag</b> <br>den <?php echo $tuesday ?></button>
        &nbsp;
        <button type="submit" name="wednesday" style="width: 100%; height: 10%"><b>Mittwoch</b> <br>den <?php echo $wednesday ?></button>
        &nbsp;
        <button type="submit" name="thursday" style="width: 100%; height: 10%"><b>Donnerstag</b> <br>den <?php echo $thursday ?></button>
        &nbsp;
        <button type="submit" name="friday" style="width: 100%; height: 10%"><b>Freitag</b> <br>den <?php echo $friday ?></button>
        &nbsp;
        <button type="submit" name="saturday" style="width: 100%; height: 10%"><b>Samstag</b> <br>den <?php echo $saturday ?></button>
        &nbsp;
        <button type="submit" name="sunday" style="width: 100%; height: 10%"><b>Sonntag</b> <br>den <?php echo $sunday ?></button>
    </form>
</div>


