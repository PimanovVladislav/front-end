<?php
if ($_POST['sex'] == 'мужской')
{
$res = $_POST['height']/2;
}
else
{
	$res = $_POST['height']/3;
}

echo "$res";

?>