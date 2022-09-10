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

<div class="d-flex justify-content-between border pb-2 pt-2 pl-3 pr-3">
    <button class="btn m-0 p-0" name="XXX" id="XXX">
        <h5 class="mb-0">Weekly Todos</h5>
        <h6>Anmeldevorgang</h6>
    </button>
    <div class="align-self-center">
        <button class="btn m-0 p-0" name="signup" id="signup">
            <i class="bi bi-pie-chart" style="font-size:36px;"></i>
        </button>
        <button class="btn m-0 p-0" name="signin" id="signin">
            <i class="bi bi-gear" style="font-size:36px;"></i>
        </button>
    </div>
</div>



<!-- body -->
<div class="container-flex border p-3 gap-3">
    <form method="post" action="<?php echo base_url('index.php/WeekOverview/button_filter')?>">
        <button class="btn-lg btn-block" name="monday"><b>Montag</b> <br> den <?php echo $monday ?></button>

        <button class="btn-lg btn-block" name="tuesday"><b>Dienstag</b> <br> den <?php echo $tuesday ?></button>

        <button class="btn-lg btn-block" name="wednesday"><b>Mittwoch</b> <br> den <?php echo $wednesday ?></button>

        <button class="btn-lg btn-block" name="thursday"><b>Donnerstag</b> <br> den <?php echo $thursday ?></button>

        <button class="btn-lg btn-block" name="friday"><b>Freitag</b> <br> den <?php echo $friday ?></button>

        <button class="btn-lg btn-block" name="saturday"><b>Samstag</b> <br> den <?php echo $saturday ?></button>

        <button class="btn-lg btn-block" name="sunday"><b>Sonntag</b> <br> den <?php echo $sunday ?></button>
    </form>
</div>


