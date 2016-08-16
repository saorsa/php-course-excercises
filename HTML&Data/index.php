<?php
$variable = 0;
?>
<!doctype html>
<html>
<head>
    <META http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Заглавие на моята страница</title>
</head>
<body>
<h2>Избор на филтър</h2>
<form method="post" action="ReceiveOrder.php" enctype="multipart/form-data">
    <label for="amount">Филтрирай по колона amount</label>
    <input type="checkbox" name="amount" id="amount"/><br/>
    <label for="search">Търси стойност в таблицата</label>
    <input type="text" name="search" id="search" /><br/>
    <h1>Изглед</h1>
    <input type="radio" name="view" value="Стегнат" id="view1"/> <label for="view1">Стегнат</label><br/>
    <input type="radio" name="view" value="Разширен" id="view2"/><label for="view2">Разширен</label><br/>
    <input type="radio" name="view" value="Подробен" id="view3"/><label for="view3">Подробен</label><br/>
    <br/>
    <label for="region">Регион</label>
    <select name="region" id="region">
        <option value="Bansko">Банско</option>
        <option value="Sofia" selected="selected">София</option>
        <option value="Burgas">Бургас</option>
    </select>
    <br/>
    <label for="description">Описание на заявката</label>
    <br/>
    <textarea name="description" id="description" rows="4" cols="100">

    </textarea>
    <br/>
    <label for="file">Качете екселски файл</label>
    <input type="file" name="excelFile" id="excelFile"/>
    <input type="submit" value="Запази"/>
</form>
</body>
</html>