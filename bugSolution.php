The following code demonstrates a secure and updated version using the `mysqli_*` functions:

```php
$link = new mysqli('localhost', 'user', 'password', 'database');
if ($link->connect_error) {
die('Connect Error: ' . $link->connect_error);
}

$result = $link->query("SELECT * FROM users");
if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo $row['username'] . "<br>";
    }
    $result->free_result();
} else {
    echo "Error: " . $link->error;
}

$link->close();
```

This revised code uses object-oriented approach, which offers better control and error handling.  For added security against SQL injection, consider using prepared statements.