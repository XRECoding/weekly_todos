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


//\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ GOOD //\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

    function actionUpdate(categoryID) {
        $.ajax({
            type: "POST",
            url: baseurl + "/Categories/selectCategory",
            data: {
                categoryID: categoryID
            },
            dataType: "json",
            success: function (data) {
                $('#designation').val(data.designation);
                $('#save').attr("onclick", "javascript:updateCategory(" + categoryID + ");");
                $('#example').modal();
            },
            error: function (request, status, error) {
                alert("AJAX Error: " + error);
            }
        });
    }

    function updateCategory(categoryID) {
        $.ajax({
            type: "POST",
            url: baseurl + "/Categories/updateCategory",
            data: {
                categoryID: categoryID,
                designation: $('#designation').val()
            },
            success: function (data) {
                $('#' + categoryID).html($('#designation').val());
            },
            error: function (request, status, error) {
                alert("AJAX Error: " + error);
            }
        });
    }

//\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ GOOD //\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
</script>