<html>
<head>
    <meta charset="utf-8"/>
</head>
<body>
<?php
$connection = @new mysqli('localhost', 'adi', 'adiadi', 'acme');
if ($connection->connect_error) {
    echo "Something went wrong: " . $connection->connect_error;
} else {
    //Direct command
    $sql = <<<SQLCommand
    insert into acmetable (`name`) VALUES ('Andrei')
SQLCommand;
    $connection->query($sql);
    //Prepared command
    $nameToInsert = 'Bob';
    $sql = <<<SQLCommand
    insert into acmetable (`name`) VALUES (?)
SQLCommand;
    $statement = $connection->prepare($sql);
    $statement->bind_param('s', $nameToInsert);
    $statement->execute();


    //Prepare a select
    $name = '';
    $id = '';
    $price = '';
    $quantity = '';
    $prefix = '%о';
    $statement = $connection->prepare('select `id`, `name`, `price`, `quantity` from acmeproducts where `name` LIKE ?');
    $statement->bind_param('s', $prefix);
    $statement->bind_result($id, $name, $price, $quantity);
    $statement->execute();
    while ($statement->fetch()) {
        echo "$id - $name - $price - $quantity <br/>";
    }
    $connection->close();

}
?>
</body>
</html>