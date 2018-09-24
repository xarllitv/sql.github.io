<?php
require('header.php');
?>
<htm1>
<head>
<title>Кафе Ростик - Результаты заказа</title>
</head>
<body>
<h1>Лабораторная работа Ne 1 по теме передача данных из формы в основную программу и их последующая обработка</h1>
<h2>Кафе Ростислава</h2>
<h3>Результаты заказа</h3>
<?php
 echo '<p>Заказ обработан в ';
echo date('H:i, jS F');
echo '</p>';

//создать короткие имена переменных
$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];
$find = $_POST['find'];


echo '<p>Список вашего заказа: </p>';
echo $tireqty .' Танго</br>';
echo $oilqty . ' Соль</br>';
echo $sparkqty .' Чай</br>';

$totalqty = 0;
$totalqty = $tireqty + $oilqty + $sparkqty;
echo 'Заказано товаров: '.$totalqty.'</br>';

$totalamount = 0.00;

define('TIREPRICE',100);
define('OILPRICE',10);
define('SPARKPRICE',4);

$totalamount = $tireqty * TIREPRICE
 + $oilqty * OILPRICE
 + $sparkqty * SPARKPRICE;
echo 'Итого: $'.number_format($totalamount,3).'</br>';

 $taxrate = 0.10; // местный налог с продаж составляет 10%
 $totalamount = $totalamount * (1 + $taxrate);
 echo 'Всего, включая налог с продаж: $'. number_format($totalamount,2).'<br>';
 echo 'На вопрос как вы нашли нашу компанию был получен ответ: '. $find;
 ?>
</body>
</html>
<?php
require('footer.php');
?>
