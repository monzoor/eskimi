<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="build/css/style.css">

</head>
<body>
    <?php include "partials/header.php" ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 sidebar p-0">
                <?php include "partials/sidebar.php" ?>
            </div>
            <div class="col-10 offset-2">
                <?php include "content/overview/overview.php" ?>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="build/js/app.js"></script>
    <script type="text/javascript" src="build/js/overview.js"></script>

</body>
</html>
