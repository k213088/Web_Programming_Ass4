<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <?php 
        session_start();
        if(isset($_SESSION['username'])) {
            echo '<h2>Welcome, ' . $_SESSION['username'] . '!</h2>';
            
            echo '<form action="add_entry.php" method="POST">';
            echo '<div class="form-group">';
            echo '<label for="name">Name</label>';
            echo '<input type="text" class="form-control" id="name" name="name" required>';
            echo '</div>';
            echo '<div class="form-group">';
            echo '<label for="phone">Phone</label>';
            echo '<input type="text" class="form-control" id="phone" name="phone" required>';
            echo '</div>';
            echo '<button type="submit" class="btn btn-primary">Add Entry</button>';
            echo '</form>';

            

            echo '<a href="logout.php" class="btn btn-danger mt-3">Logout</a>';
        } else {
            header("Location: login.php");
            exit();
        }
        ?>
    </div>
</body>
</html>
