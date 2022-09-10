<?= form_open('Login/index', array('role' => 'form')) ?>
    <div class="d-flex justify-content-between border pb-2 pt-2 pl-3 pr-3">
        <div>
            <h5 class="mb-0">Weekly Todos</h5>
            <h6>Anmeldevorgang</h6>
        </div>
        <div class="align-self-center">
            <button class="btn m-0 p-0" name="signup" id="signup">
                <i class="bi bi-plus-circle" style="font-size:36px;"></i>
            </button>
            <button class="btn m-0 p-0" name="signin" id="signin">
                <i class="bi bi-check-circle" style="font-size:36px;"></i>
            </button>
        </div>
    </div>


    <div class="container-flex border rounded-lg m-3 p-3">
        <div class="form-group">
            <label for="email">E-Mail Adresse:</label>
            <input id="email" name="email" type="text" class="form-control <?=(isset($error['email'])) ? 'is-invalid' : ''?>" value="<?=(isset($_POST['email'])) ? $_POST['email'] : ''?>"/>
            <div class="invalid-feedback"><?=(isset($error['email'])) ? $error['email'] : ''?></div>
        </div>
        <div class="form-group">
            <label for="password">Passwort:</label>
            <input id="password" name="password" type="password" class="form-control <?=(isset($error['password'])) ? 'is-invalid' : ''?>" value="<?=(isset($_POST['password'])) ? $_POST['password'] : ''?>"/>
            <div class="invalid-feedback"><?=(isset($error['password'])) ? $error['password'] : ''?></div>
        </div>
    </div>
<?php echo form_close(); ?>