<html>

<!-- Start Header -------------------------------------------------------------------------------------------------------------->
<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    
    <!-- Title -->
    <?php echo '<title>', $title, '</title>'; ?>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" >
    <link href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="https://unpkg.com/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js" integrity="sha512-zYXldzJsDrNKV+odAwFYiDXV2Cy37cwizT+NkuiPGsa9X1dOz04eHvUWVuxaJ299GvcJT31ug2zO4itXBjFx4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <style>
.container {
    font-family: "Trebuchet MS", sans-serif;
    display: flex;
    gap: 30px;
}
.column {
    flex-basis: 20%;
    background: #ddd;
    min-height: 90vh;
    padding: 5px;
    border-radius: 10px;
}
.column h1 {
    text-align: center;
    font-size: 22px;
}
.list-group-item {
    background: #fff;
    margin: 20px;
    padding: 20px;
    border-radius: 5px;
    cursor: pointer;
}
</style>
</head>
<!-- End Header ---------------------------------------------------------------------------------------------------------------->

<!-- Start Body ---------------------------------------------------------------------------------------------------------------->
<body>
