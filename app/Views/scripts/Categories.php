<script>
    let baseurl = '<?= base_url()?>';

    jQuery(function($) {
        var panelList = $('#draggablePanelList');

        panelList.sortable({
            update: function() {
                $('.btn-lg', panelList).each(function(index, elem) {
                    var $listItem = $(elem);
                    newIndex = $listItem.index();
                });
            }
        });
    });


//\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ Start Call Modal //\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

    function actionInsert() {
        $('#designation_insert').val(null);
        $('#save_insert').attr("onclick", "javascript:insertCategory();");

        $('#modal_insert').modal();
    }

    function actionUpdate(categoryID) {
        $.ajax({
            type: "POST",
            url: baseurl + "/Categories/selectCategory",
            data: {
                categoryID: categoryID
            },
            dataType: "json",
            success: function (data) {
                $('#designation_edit').val(data.designation);
                $('#save_edit').attr("onclick", "javascript:updateCategory(" + categoryID + ");");
                $('#delete_edit').attr("onclick", "javascript:deleteCategory("+categoryID+");");

                $('#modal_edit').modal();
            },
            error: function (request, status, error) {
                alert("AJAX Error: " + error);
            }
        });
    }


//\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ Start Call Database //\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

    function insertCategory() {
        $.ajax({
            type: "POST",
            url: baseurl + "/Categories/insertCategory",
            data: {
                designation: $('#designation_insert').val(),
            },
            dataType: "json",
            success: function (categoryID) {
                $('#draggablePanelList').append('<div class="btn-lg btn-block border" onclick="javascript:actionUpdate('+categoryID+');" id="'+categoryID+'">'+$('#designation_insert').val()+'</div>');
            },
            error: function (request, status, error) {
                alert("AJAX Error:" + error);
            }
        });
    }

    function updateCategory(categoryID) {
        $.ajax({
            type: "POST",
            url: baseurl + "/Categories/updateCategory",
            data: {
                categoryID: categoryID,
                designation: $('#designation_edit').val()
            },
            success: function (data) {
                $('#' + categoryID).html($('#designation_edit').val());
            },
            error: function (request, status, error) {
                alert("AJAX Error: " + error);
            }
        });
    }

    function deleteCategory(categoryID) {
        $.ajax({
            type: "POST",
            url: baseurl + "/Categories/deleteCategory",
            data: {
                categoryID: categoryID
            },
            success: function () {
                $('#' + categoryID).remove();
            },
            error: function (request, status, error) {
                alert("AJAX Error:" + error);
            }
        });
    }


//\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ End Call Database //\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

</script>