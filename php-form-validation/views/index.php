<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/vendors/bootstrap/css/bootstrap.min.css"/>
</head>
<body>
    <div class="container">
        <div class="mt-3 mb-3">
            <a class="btn btn-primary" href="index.php?controller=employee&action=create">Create new employee</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Action</th>
                </tr>
            </thead>

        <?php 
            if (count($employees) > 0):
                foreach($employees as $employee): ?>
                    <tr>
                        <td><?php echo $employee['id']; ?></td>
                        <td><?php echo $employee['firstname']; ?></td>
                        <td><?php echo $employee['lastname']; ?></td>
                        <td>
                            <!-- <a href="?controller=employee&action=view&id=<?php echo $employee['id'] ?>">View</a> -->
                            <!-- <a href="?controller=employee&action=edit&id=<?php echo $employee['id'] ?>">Edit</a>
                            <a href="?controller=employee&action=delete&id=<?php echo $employee['id'] ?>" onclick="return confirm('Are you sure')">Delete</a> -->
                        </td>
                    </tr>
                <?php endforeach;
            endif;
        ?>

        </table>
    </div>
</body>
</html>
