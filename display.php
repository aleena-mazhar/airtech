<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="main.css">
    <header>
        <div class="container">
            <div class="logo">
                <img src="logo.jpg" alt="AirTech Logo">
              
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="sponsors.php">Sponsors</a></li>
                    <li><a href="menu.php">Menu</a></li>
                  
                </ul>
                <a href="user.php" class="btn">Register Now</a>
            </nav>
        </div>
    </header>
</head>
<body>
<br><br>
<div class="container">
    <button class="btn btn-primary my-5">
        <a href="user.php" class="text-light">Add User</a>
    </button>
    <br><br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Sl No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Semester</th>
                <th scope="col">Competition Name</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $cursor = $collection->find();
        foreach ($cursor as $document) {
            $id = $document['id'];
            $name = $document['name'];
            $email = $document['email'];
            $phone = $document['phone'];
            $semester = $document['semester'];
            $competition_name = $document['competition_name'];
            echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$phone.'</td>
                    <td>'.$semester.'</td>
                    <td>'.$competition_name.'</td>
                    <td>
                        <button class="btn btn-primary">
                            <a href="update.php?updateid='.$id.'" class="text-light">Update</a>
                        </button>
                        <button class="btn btn-danger">
                            <a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a>
                        </button>
                    </td>
                  </tr>';
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>