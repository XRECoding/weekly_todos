<?= form_open('Login/index', array('role' => 'form')) ?>
    <div class="d-flex justify-content-between border pb-2 pt-2 pl-3 pr-3">
        <div>
            <h5 class="mb-0">Weekly Todos</h5>
            <h6>Anmeldevorgang</h6>
        </div>
        <div class="align-self-center">
            <button type="create" name="create" id="btnCreate" class="btn m-0 p-0">
                <i class="bi bi-plus-circle" style="font-size:36px;"></i>
            </button>
            <button type="save" name="save" id="btnSave" class="btn m-0 p-0">
            <i class="bi bi-check-circle" style="font-size:36px;"></i>
            </button>
        </div>
    </div>


    <div class="container-flex border rounded-lg m-3 p-3">
        <div class="form-group">
            <label for="email">E-Mail Adresse:</label>
            <input id="email" name="email" type="text" class="form-control"/>
            <div class="invalid-feedback"><?=(isset($error['email'])) ? $error['email'] : ''?></div>
        </div>
        <div class="form-group">
            <label for="password">Passwort:</label>
            <input id="password" name="password" type="password" class="form-control"/>
            <div class="invalid-feedback"><?=(isset($error['password'])) ? $error['password'] : ''?></div>
        </div>
    </div>
<?php echo form_close(); ?>