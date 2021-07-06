<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
include "../vendor/autoload.php";

use W1020\HTML\A;
use W1020\HTML\Br;

$a = new A();
echo $a->setHref("table.php")->setInnerText("Пример с таблицей")->html();
$br = new Br();
echo $br->html();
echo $a->setHref("pagination.php")->setInnerText("Пример с навигацией")->html();

?>
<!--<a href="table.php">Primer Tablici</a><br>-->
<!--<a href="pagination.php">Primer Pagination</a>-->
</body>
</html>