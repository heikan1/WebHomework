<html>
<body>
<?php 
$correctEmail = 'b221210075@sakarya.edu.tr';
$correctPassword = 'b221210075';

if($_POST["email"] == $correctEmail && $_POST["password"] == $correctPassword ){
    Welcome <?php echo $_POST["email"]; ?><br>
    Your password is: <?php echo $_POST["password"]; ?>
}
else{
    
}

?>



</body>
</html>