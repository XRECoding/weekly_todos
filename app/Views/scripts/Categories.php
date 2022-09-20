<script>
    let baseurl = '<?= base_url()?>';
    let move = false;

    function testus() {
        var items = $("#draggablePanelList").children();
            alert("HELLO");

        $.each(items, function(index, value) {

           
            if ($(value).attr('name') != $(value).index()) {
                alert($(value).attr('name') + " <= Old || New => " + $(value).index());
                $(value).html(($(value).index() + 1) + ". " + $(value).html().slice(3)); // TODO: Must be changed
                        $(value).attr('name', $(value).index());
 /*
                $.ajax({
                    type: "POST",
                    url: baseurl + "/Categories/updateOrder",
                    data: {
                        categoryID: $(value).attr('id'),
                        order: $(value).index()
                    },
                    success: function () {
                        $(value).html(($(value).index() + 1) + ". " + $(value).html().slice(3)); // TODO: Must be changed
                        $(value).attr('name', $(value).index());
                    },
                    error: function (request, status, error) {
                        alert("AJAX Error: " + error);
                    }
                });
                */
            }
                    
        });
    }


//\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ Start Call Modal //\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

    function actionInsert() {
        $('#designation_insert').val(null);
        $('#save_insert').attr("onclick", "javascript:insertCategory();");

        $('#modal_insert').modal();
    }

    function actionUpdate(categoryID) {
        if (move == false) {
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
        move = false;
    }


//\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ Start Call Database //\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

    function insertCategory() {
        $.ajax({
            type: "POST",
            url: baseurl + "/Categories/insertCategory",
            data: {
                designation: $('#designation_insert').val(),
                order: $('#draggablePanelList').children().length
            },
            dataType: "json",
            success: function (categoryID) {
                $('#draggablePanelList').append('<div class="btn-lg btn-block border" onclick="javascript:actionUpdate('+categoryID+');" id="'+categoryID+'" name="'+($('#draggablePanelList').children().length)+'">' + ($('#draggablePanelList').children().length + 1) + ". " + $('#designation_insert').val()+'</div>');
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
                $('#' + categoryID).html((parseInt($('#' + categoryID).attr("name")) +1) + ". " + $('#designation_edit').val());
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
                testus();
            },
            error: function (request, status, error) {
                alert("AJAX Error:" + error);
            }
        });
    }


//\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ End Call Database //\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

</script>