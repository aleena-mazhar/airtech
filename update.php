<?php
include 'connect.php';

$id = $_GET['updateid'] ?? null;
if (!$id) {
    header("Location: display.php");
    exit();
}

$document = $collection->findOne(['id' => (int)$id]);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['semester']) && !empty($_POST['competition_name'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $semester = $_POST['semester'];
        $competition_name = $_POST['competition_name'];

        $result = $collection->updateOne(
            ['id' => (int)$id],
            ['$set' => [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'semester' => $semester,
                'competition_name' => $competition_name,
            ]]
        );

        if ($result->getModifiedCount() == 1) {
            header("Location: display.php");
            exit();
        } else {
            $errorMessage = "Error: Document was not updated";
        }
    } else {
        $errorMessage = "Error: All fields are required. Please enter the required data.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
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
<div class="container">
    <h2>Update User</h2>
    <?php if (isset($errorMessage)): ?>
        <p class='error'><?= $errorMessage ?></p>
    <?php endif; ?>
    <form method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $document['name'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $document['email'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?= $document['phone'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="semester" class="form-label">Semester:</label>
            <input type="text" class="form-control" id="semester" name="semester" value="<?= $document['semester'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="competition_name" class="form-label">Competition Name:</label>
            <input type="text" class="form-control" id="competition_name" name="competition_name" value="<?= $document['competition_name'] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>