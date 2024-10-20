<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Form</title>
    <link rel="stylesheet" href="./public/vendors/bootstrap/css/bootstrap.min.css"/>
</head>
<body>
    <form class="container" method="POST" action="index.php?controller=employee&action=store">
        <div class="form-group">
            <label for="firstname">First name</label>
            <input type="text" name="firstname" id="firstname" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="lastname">Last name</label>
            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div>
            <?php 
                if (count($errors) > 0 )
                    foreach ( $errors as $error ) {
                        echo $error;
                    }
            ?>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
        <button type="button" class="btn btn-primary" onclick="history.go(-1)">Back</button>
    </form>
</body>
</html>