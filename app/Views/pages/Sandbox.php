<!-- Start Input-Group to toggle password -->
<label for="test1">Passwort wiederholen:</label>
<div class="input-group mb-3">
    <input id="test1" name="test1" type="password" class="form-control">
    <div class="input-group-append">
        <button class="btn btn-outline-secondary" onclick="javascript:testus();" type="button">
            <i class="bi bi-eye"></i>
        </button>
    </div>
</div>

<script>
    function testus() {
        $('#test1').attr("type", "text");
    }
</script>
<!-- End Input-Group to toggle password -->