<!-- <?php

require_once('libs/smarty/libs/Smarty.class.php');

$db = new PDO('mysql:host=localhost;'.'dbname=db_dragones; charset=utf8', 'root', '');
$query = $db->prepare('SELECT * FROM dragones');
$query->execute();
$dragones = $query->fetchAll(PDO::FETCH_OBJ);

$smarty= new Smarty;
$smarty->assign('titulo', "dragones");
$smarty->assign('dragones', $dragones );
$smarty->display('template/tabla.tpl');

?> -->
