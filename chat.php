<?php

require_once "./config.php";

if (isset($_POST["name"]) && isset($_POST["msg"]) && isset($_POST["movie_id"])) {
    $name = $_POST["name"];
    $mg = $_POST["msg"];
    $movie_id = $_POST["movie_id"];
    $stmt = $db->prepare("INSERT INTO messages(user, message, movie_id, created_at) VALUES(?, ?, ?, ?)");
    $stmt->execute(array($name, $mg, $movie_id, date("Y-m-d H:i:s")));

    error_log("Message: " . $mg . " from " . $name . " to movie " . $movie_id, 3, "./logs/chat.log");

} elseif (isset($_GET["id"]) && isset($_GET["movie_id"])) {
    $id = $_GET["id"];
    $movie_id = $_GET["movie_id"];

    error_log("Requesting message for " . $id . " to movie " . $movie_id, 3, "./logs/chat.log");

    $stmt = $db->prepare("select * from messages where id>? AND movie_id=? ORDER BY id ASC LIMIT 10");
    $stmt->execute(array($id, $movie_id));
    $listArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($listArray);
} else {
    // $stmt = $db->prepare("select * from messages ");
    // $stmt->execute(array($id, $movie_id));
    // $listArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // echo json_encode($listArray);
}
