<?= form_open('Registration/index', array('role' => 'form')) ?>
    <div class="d-flex justify-content-between border pb-2 pt-2 pl-3 pr-3">
        <div>
            <p class="font-weight-bold mb-0">Weekly Todos</p>
            <p class="font-weight-normal mb-0">Registrierung</p>
        </div>
        <div class="align-self-center">
            <button name="cancel" id="cancel" class="btn m-0 p-0">
                <i class="bi bi-dash-circle" style="font-size:36px;"></i>
            </button>
            <button name="create" id="create" class="btn  m-0 p-0">
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
            <label for="password1">Passwort erstellen:</label>
            <input id="password1" name="password1" type="password" class="form-control <?=(isset($error['password1'])) ? 'is-invalid' : ''?>" value="<?=(isset($_POST['password1'])) ? $_POST['password1'] : ''?>"/>
            <div class="invalid-feedback"><?=(isset($error['password1'])) ? $error['password1'] : ''?></div>
        </div>
        <div class="form-group">
            <label for="password2">Passwort wiederholen:</label>
            <input id="password2" name="password2" type="password" class="form-control <?=(isset($error['password2'])) ? 'is-invalid' : ''?>"/>
            <div class="invalid-feedback"><?=(isset($error['password2'])) ? $error['password2'] : ''?></div>
        </div>
    </div>
<?php echo form_close(); ?>