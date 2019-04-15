<?php
include('db_connect.php');
//error_reporting(0);

$query_upozila = "SELECT * FROM `upazilas` WHERE 1 ORDER BY name ASC";
$results_upozila = mysqli_query($db, $query_upozila);

$row_upozila = mysqli_fetch_assoc($results_upozila);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ajax</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="style.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">

        <!--Jquery CDN-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>

    </head><!--/head-->
    <body>
    <br><br>
        <div class="form-group row jumbotron">
            <label for="district" class="col-sm-3 col-form-label">২.৩ উপজেলা</label>
            <div class="col-sm-3">
                <select class="form-control" id="dhaka_thana" name="upozila">
                    <?php
                    while ($row_upozila = mysqli_fetch_assoc($results_upozila)){
                        //echo $row['name']."<br>";
                        echo "<option value=".$row_upozila['name'].">".$row_upozila['name']."</option>";
                    }
                    ?>

                </select>
            </div>
        </div>
    <script type="text/javascript">
        $("#dhaka_thana").chosen();
    </script>
    </body>
</html>