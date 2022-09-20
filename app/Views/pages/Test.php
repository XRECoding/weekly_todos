<div class="d-flex justify-content-between border pb-2 pt-2 pl-3 pr-3">
    <div>
        <h5 class="mb-0">Monats Auswahl</h5>
        <h6>Placeholder</h6>
    </div>
    <div class="align-self-center">
        <i class="bi bi-check-circle" style="font-size:36px;"></i>
        <i class="bi bi-dash-circle" style="font-size:36px;"></i>
    </div>
</div>

<!--
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
    $( function() {
        $( "#datepicker" ).datepicker();
    } );
</script>
<p>Date: <input type="text" id="datepicker"></p>
-->
<div class="container">
    <div class="column">
        <h1>All Tasks</h1>
        <div class="list-group-item" draggable="true">Wash Clothes</div>
        <div class="list-group-item" draggable="true">Take a stroll outside</div>
        <div class="list-group-item" draggable="true">Design Thumbnail</div>
        <div class="list-group-item" draggable="true">Attend Meeting</div>
        <div class="list-group-item" draggable="true">Fix workshop</div>
        <div class="list-group-item" draggable="true">Visit the zoo</div>
        <button id="save_insert" class="btn btn-success btn-block" data-dismiss="modal">Speichern</button>
    </div>
    <div class="column">
        <h1>In progress</h1>
    </div>
    <div class="column">
        <h1>Paused</h1>
    </div>
    <div class="column">
        <h1>Under Review</h1>
    </div>
    <div class="column">
        <h1>Completed</h1>
    </div>
</div>