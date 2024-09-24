<?php
session_start();
 
if (!isset($_SESSION['loggedIn']) || !$_SESSION['loggedIn']) {
    header("Location: login.php");
    exit();
}
 
$uploadDir = 'uploads/';
 
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['photo'])) {
    $file = $_FILES['photo'];
 
    if ($file['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $file['tmp_name'];
        $fileName = $file['name'];
        $destination = $uploadDir . basename($fileName);
 
        if (move_uploaded_file($fileTmpPath, $destination)) {
            $_SESSION['message'] = "File uploaded successfully!";
        } else {
            $_SESSION['message'] = "Failed to move uploaded file.";
        }
    } else {
        $_SESSION['message'] = "Error uploading file.";
    }
}
 
$uploadedFiles = [];
if (is_dir($uploadDir)) {
    $uploadedFiles = array_diff(scandir($uploadDir), ['.', '..']);
}
 
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard</title>
<link rel="stylesheet" href="dashboard.css">
</head>
<body>
<header>
<h1>Dashboard</h1>
</header>
 
    <section>
<nav>
<ul>
<li><a href="dashboard.php?action=logout" class="logout-button">Logout</a></li>
</ul>
</nav>
 
        <article>
<p>Welcome, <?php echo htmlspecialchars($_SESSION['uname']); ?>!</p>
 
            <form action="dashboard.php" method="post" enctype="multipart/form-data">
<label for="photo" style="font-weight: bold;">Upload Photo:</label>
<input type="file" name="photo" id="photo">
<input type="submit" value="Upload">
</form>
 
            <?php if (isset($_SESSION['message'])): ?>
<div class="message"><?php echo htmlspecialchars($_SESSION['message']); ?></div>
<?php unset($_SESSION['message']); ?>
<?php endif; ?>
 
            <h2>Uploaded Photos</h2>
<div class="gallery">
<?php foreach ($uploadedFiles as $file): ?>
<div class="photo">
<img src="<?php echo $uploadDir . htmlspecialchars($file); ?>" alt="">
<p><?php echo htmlspecialchars($file); ?></p>
</div>
<?php endforeach; ?>
</div>
</article>
</section>
 
    <footer>
<p>Footer</p>
</footer>
</body>
</html>