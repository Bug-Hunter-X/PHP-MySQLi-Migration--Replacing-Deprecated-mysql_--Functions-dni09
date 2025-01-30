This code snippet demonstrates a common error in PHP related to the usage of the `mysql_*` functions, which are deprecated and insecure.

```php
$link = mysql_connect('localhost', 'user', 'password');
if (!$link) {
die('Could not connect: ' . mysql_error());
}
mysql_select_db('database', $link);

$result = mysql_query("SELECT * FROM users", $link);
while ($row = mysql_fetch_array($result)) {
    echo $row['username'] . "<br>";
}

mysql_close($link);
```