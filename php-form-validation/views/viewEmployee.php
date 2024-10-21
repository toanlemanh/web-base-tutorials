<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee detail</title>
</head>
<body>
    <div class="container">
        <h1>Employee Detail</h1>
        <div class="row">
            <div class="col">
                <img class="img-fluid" src="https://media.istockphoto.com/id/1337144146/vector/default-avatar-profile-icon-vector.jpg?s=612x612&w=0&k=20&c=BIbFwuv7FxTWvh5S3vB6bkT0Qv8Vn8N5Ffseq84ClGI=" alt="avatar" />
            </div>
            <div class="col">
                <p>First name: <?php $employee["firstname"] ?></p>
                <p>Last name: <?php $employee["lastname"] ?></p>
            </div>
        </div>
    </div>
</body>
</html>