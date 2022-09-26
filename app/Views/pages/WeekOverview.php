<!-- header -->
<div class="d-flex justify-content-between border pb-2 pt-2 pl-3 pr-3">
    <button class="btn m-0 p-0" onclick="javascript:calendarPicker()">
        <h5 class="mb-0"><?php echo $week ?>te Kalenderwoche</h5>
        <h6><?php echo $monday ?> bis <?php echo $sunday ?></h6>
    </button>
    <div class="align-self-center">
        <a href="#">                                                         <!--  TODO set proper reference -->
            <button class="btn m-0 p-0" name="statistics" id="statistics">
                <i class="bi bi-pie-chart" style="font-size:36px;"></i>

            </button>
        </a>
        <div class="align-self-center">                                                <!--  TODO set proper reference -->
            <button class="btn m-0 p-0" name="statistics" id="statistics">
                <i class="bi bi-pie-chart" style="font-size:36px;"></i>
            </button>                                      <!--  TODO set proper reference -->
            <button class="btn m-0 p-0" name="settings" id="settings">
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

<!-- Javascript TODO decide where to store JS Code -->
<script>
    function calendarPicker(){
        $('#calenderPickerModal').modal();
    }
</script>

<!-- Modal -->
<div class="modal fade" id="calenderPickerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Choose a date</h5>
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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
        </div>
    </div>
</div>


