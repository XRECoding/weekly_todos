<?= form_open('Settings/btnAction', array('role' => 'form')) ?>
    <div class="d-flex justify-content-between border pb-2 pt-2 pl-3 pr-3">
        <button class="btn m-0 p-0" name="btnBac" id="btnBac">
            <h5 class="mb-0">Weekly Todos</h5>
            <h5 class="mb-0">Einstellungen</h6>
        </button>
    </div>


    <div class="container-flex p-3">
        <button class="btn-lg btn-block text-left" name="btnCat">Kategorien</button>
        <button class="btn-lg btn-block text-left" name="btnLog">Abmelden</button>
    </div>
<?php echo form_close(); ?>