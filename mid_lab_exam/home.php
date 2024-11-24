<center?php
session_start();
if (!isset($_SESSION['xyz'])) {
    header('location: login.html');
}
?>

<html>
<head>
   <center> <title>This is HOME Page</title></center>
</head>
<body>
        <h1>Welcome Home!</h1>
        <a href='login.html' > logout </a>
</body>
</html>