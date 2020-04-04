<?php

require("./env/config.php");

// Check connection
if ($conn->connect_error) {
?>
<h2 style="color:red">DB NOT CONNECTED</h2>
<?php
    die("Connection failed: " . $conn->connect_error);

}
//echo "Connected successfully";
?>

<h2 style="color:green">DB connected</h2>


<?php
$query = $conn->query("desc table anagtab;");

var_dump($query);

$conn->close();

 ?>
