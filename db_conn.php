<?php
session_start();

if(isset($SESSION['id']) && isset($SESSION ['user_name'])){
    ?>

<!DOCTYPE html>
<html>
    <head>
        <title>HOME</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1> WELCOME,<?php echo $SESSION['user_name'];?></h1>
    <a herf="logout.php">Logout</a>
</body>
</html>
<?php
}
else {
    header ("Location: indext.php");
    exit();
}
?>
