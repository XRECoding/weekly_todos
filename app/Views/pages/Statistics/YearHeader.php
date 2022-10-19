<!-- header -->
<div class="d-flex justify-content-between border pb-2 pt-2 pl-3 pr-3">
    <button class="btn m-0 p-0" onclick="">
        <h5 class="mb-0">Statistiken</h5>
    </button>
    <div class="align-self-center">
        <form method="post" action="<?php echo base_url('index.php/Statistics/button_filter')?>">



            <button class="btn m-0 p-0" name="monthStatistics">
                <i class="bi bi-calendar-minus" style="font-size:36px;"></i>
            </button>

            <button class="btn m-0 p-0" name="yearPrev">
                <i class="bi bi-arrow-left" style="font-size:36px;"></i>
            </button>
            <button class="btn m-0 p-0" name="yearNext">
                <i class="bi bi-arrow-right" style="font-size:36px;"></i>
            </button>



            <button class="btn m-0 p-0" name="settings" id="settings">
                <i class="bi bi-gear" style="font-size:36px;"></i>
            </button>
        </form>
    </div>
</div>