<div class="d-flex justify-content-between border pb-2 pt-2 pl-3 pr-3">
    <button class="btn m-0 p-0 text-left" name="btnBac" id="btnBac">
        <h5 class="mb-0">Weekly Todos</h5>
        <h5 class="mb-0">Kategorien</h5>
    </button>
    <div class="align-self-center">
        <button class="btn float-right m-0 p-0" name="add" id="add" onclick="javascript:actionInsert();">
            <i class="bi bi-plus-circle" style="font-size:32px;"></i>
        </button>
    </div>    
</div>


<div class="column m-3" id="draggablePanelList" name="draggablePanelList">
    <?php
        foreach ($entries as $categories=>$category) {
            echo '<div class="btn-lg btn-block border item" onclick="javascript:actionUpdate('.$category["categoryID"].');" id="'.$category["categoryID"].'" name="'.$category["order"].'">'.($category["order"] + 1).'. '.$category["designation"].'</div>';
        }
    ?>
</div>