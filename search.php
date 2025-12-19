<?php 
    $server = "localhost";
    $username = "php";
    $password = "Ross1234";
    $database = "search";

    $conn = mysqli_connect($server, $username, $password, $database);

    if (!$conn) {
	    die("Connection Failed: {mysqli_connect_error()}");
	}

    $IP = htmlspecialchars($_SERVER["REMOTE_ADDR"]);
    $search = htmlspecialchars($_GET["q"]);

    $sql_insert = "insert into search (ip,search)
        values ({$IP},{$search});";

    $sql_insert_result = mysqli_query($conn,$sql_insert);

    mysqli_close($conn);

    header("Location: https://www.google.com/search?q={$search}");
?>