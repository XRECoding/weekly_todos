<div class="container-flex border pb-2 pt-2 pl-3 pr-3">
    <button class="btn float-start m-0 p-0" name="back" id="back">
        <h5 class="mb-0">Weekly Todos</h5>
        <h6>Anmeldevorgang</h6>
    </button>
    <button class="btn float-right m-0 p-0" name="add" id="add" onclick="javascript:actionInsert();">
        <i class="bi bi-plus-circle" style="font-size:40px;"></i>
    </button>
</div>

<div class="container-flex m-3" id="draggablePanelList" name="draggablePanelList">
    <?php
        foreach ($entries as $categories=>$category) {
            echo '<div class="btn-lg btn-block border" onclick="javascript:actionUpdate('.$category["categoryID"].');" id="'.$category["categoryID"].'">'.$category["designation"].'</div>';
        }
    ?>
</div>
