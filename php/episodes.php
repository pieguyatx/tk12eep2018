<?php

echo "<p>Hello world!</p>";

include 'config.php';

$host_name = DB_HOST;
$database = DB_NAME;
$user_name = DB_USER;
$password = DB_PASS;

// $connect = mysql_connect($host_name, $user_name, $password, $database);
// if (mysql_errno()) {
//     die('<p>Failed to connect to MySQL: '.mysql_error().'</p>');
// } else {
//     echo '<p>Connection to MySQL server successfully established.</p >';
// }

// $pdo = new PDO('mysql:host=DB_HOST;dbname=DB_NAME;charset=utf8', DB_USER, DB_PASS);

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Episode ID</th><th>Season</th><th>Episode</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

try {
    $conn = new PDO("mysql:host=$host_name;dbname=$database", $user_name, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT episode_id, season_id, episode_id_season FROM episodes"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>