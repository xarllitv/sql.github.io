<?php
require('header.php');
?>
<html>
<head>
 <title> Кафе "Чайка"</title>
 </head>
 <body>
 
<h1>Лабораторная работа 1 по теме передача данных из формы в основную программу и их последующая обработка</h1>
 
<h2>Кафе "Ростик"</h2>
<h3>Форма заказа</h3>
<form action="processorder.php" method=post>
<table border=0>
<tr bgcolor=#CCCCCC>
 <td width=150>товар</td>
 <td width=15>Количество</td>
</tr>
<tr>
 <td>Танго</td>
 <td align="center"><input type="text" value = "0" name="tireqty" size= "3" maxlength="3"></td>
</tr>
<tr>
 <td>Шаурма</td>
 <td align= "center"><input type="text" value = "0" name="oilqty" size="3" maxlength="3"></td>
</tr>
<td>Соль</td>
 <td align= "center"><input type="text" value = "0" name="oilqty" size="3" maxlength="3"></td>
</tr>
<tr>
 <td>Чай</td>
 <td align="center"><input type="text" value = "0" name="sparkqty" size= "3" maxlength="3"></td>
</tr>
<tr>
 <td>Как вы нашли наше кафе "Ростик?"</td>
 <td><select name="find">
  <option value = "Не выбрано">Выберите
  <option value = "я регулярный дотер">я регулярный дотер
  <option value = "В телевизионной передаче 'Одиум выезжают на подиум'">в телевизионной передаче "Одиум выезжают на подиум"
  <option value = "В телефонном справочнике виртус про">в телефонном справочнике виртус про
<option value = "(кто-то) порекомендовал 'Ромзисс'">(кто-то) порекомендовал "Рамзесс"
</select>
</td>
</tr>
<tr>
 <td colspan="2" align="center"><input type="submit" value= "отправить заказ"></td>
</tr>
</table>
</form>
</body>
</html>
<?php
require('footer.php');
?>
