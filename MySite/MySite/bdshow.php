<?php
ob_start();
session_start();
if(!isset($_SESSION['user'])){
    header("Location: form2.php");

    exit;
}

?>
<html>
<head>
 <title>Страница с контрабандой</title>
 <meta charset="utf-8"/>
</head>
<body>
<p>Привет, <?php echo $_SESSION['user']; ?>, ты на секретной странице!!! :)</p>
<p>Смотри какие у меня есть книги!</p>
<?php 
foreach ($_SESSION['books'] as  $key => $value)
{
    echo $value.'<br>';
}
?>
</body>
</html>