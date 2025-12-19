<?php 
    $server = "localhost";
    $username = "php";
    $password = "Ross1234";
    $database = "order_info";

    $conn = mysqli_connect($server, $username, $password, $database);

    if (!$conn) {
	    die("Connection Failed: {mysqli_connect_error()}");
	}

    if(isset($_GET["q"])){
        $IP = htmlspecialchars($_SERVER["REMOTE_ADDR"]);
        $search = htmlspecialchars($_GET["q"]);
        $sql_insert = "insert into search (ip,search)
            values ('{$IP}','{$search}');";
    }
    else {
        $log = htmlspecialchars($_GET["srch"]);
        $sql_insert = "insert into logs (log)
            values ('{$log}');";
    }

    $sql_insert_result = mysqli_query($conn,$sql_insert);

    mysqli_close($conn);

    if(isset($_GET["q"])){
        header("Location: https://www.google.com/search?q={$search}");
    }
?>