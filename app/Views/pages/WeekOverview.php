<!-- header -->
    <div class="d-flex justify-content-between border pb-2 pt-2 pl-3 pr-3">
        <div>
            <button name="back" id="back" class="btn m-0 p-0 pr-2">
                <i class="bi-calendar-week" style="font-size:32px;" onclick="javascript:calendarPicker()"></i>
            </button>
            <button class="btn m-0 p-0">
                <h5 class="mb-0"><?php echo $week ?>te Kalenderwoche</h5>
                <h6 class="mb-0"><?php echo $monday ?> bis <?php echo $sunday ?></h6>
            </button>
        </div>

        <div class="align-self-center">
            <form method="post" action="<?php echo base_url('index.php/WeekOverview/redirect_filter')?>">
                <button class="btn m-0 p-0" name="statistics" id="statistics">
                    <i class="bi bi-pie-chart" style="font-size:32px;"></i>
                </button>
                <button class="btn m-0 p-0" name="categories" id="categories">
                    <i class="bi bi-gear" style="font-size:32px;"></i>
                </button>
            </form>
        </div> 
    </div>


<!-- body -->
<div class="container-flex border p-3 gap-3">
        <form method="post" action="<?php echo base_url('index.php/WeekOverview/button_filter')?>">
            <button class="btn-md btn-block" name="monday" value="<?php echo $monday ?>"><b>Montag</b> <br> den <?php echo $monday ?></button>

            <button class="btn-md btn-block" name="tuesday" value="<?php echo $tuesday ?>"><b>Dienstag</b> <br> den <?php echo $tuesday ?></button>

            <button class="btn-md btn-block" name="wednesday" value="<?php echo $wednesday ?>"><b>Mittwoch</b> <br> den <?php echo $wednesday ?></button>

            <button class="btn-md btn-block" name="thursday" value="<?php echo $thursday ?>"><b>Donnerstag</b> <br> den <?php echo $thursday ?></button>

            <button class="btn-md btn-block" name="friday" value="<?php echo $friday ?>"><b>Freitag</b> <br> den <?php echo $friday ?></button>

            <button class="btn-md btn-block" name="saturday" value="<?php echo $saturday ?>"><b>Samstag</b> <br> den <?php echo $saturday ?></button>

            <button class="btn-md btn-block" name="sunday" value="<?php echo $sunday ?>"><b>Sonntag</b> <br> den <?php echo $sunday ?></button>
        </form>

        <!-- Modal -->
        <div class="modal fade" id="calenderPickerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Wähle ein Datum aus</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--  Modal Body   -->
                        <form action="<?php echo base_url('index.php/WeekOverview/pickDate')?>" method="post">
                            <container>
                                <!-- inline CSS to override bootstrap small sized datepicker -->
                                <style>
                                    .datepicker, .table-condensed {
                                        width: 100%;
                                        height: 100%;
                                    }
                                </style>
                                <!-- datepicker -->
                                <input id="dateInput" name="dateInput" class="form-control">
                                <div id="my-datepicker""></div>

                    <!-- create the datepicker with JS -->
                    <script>
                        $("#my-datepicker").datepicker().on('changeDate', function (e) {
                            $("#dateInput").val(e.format("dd.mm.yyyy"));
                        });
                    </script>
                    </container>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Schließen</button>
                    <button type="submit" class="btn btn-primary">Bestätigen</button>
                </div>
            </div>
        </div>
</div>