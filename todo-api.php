<?php

require_once("./config.php");
require_once("./classes/TodoDB.php");
require_once("./log.php");

header("Content-Type: application/json");


switch ($_SERVER["REQUEST_METHOD"]) {
    case "GET":
        // Get Todo's (READ)
        $todo_items = $todoDB->getTodos();
        echo json_encode($todo_items);
        write_log("READ", $todo_items);
        break;
    case "POST":
        // Get data from the input stream.
        $input = file_get_contents('php://input');

        // Decode JSON input data into PHP array.
        $data = json_decode($input, true);

        $result = $todoDB->createTodo($data['text']);

        // check if result returned by createTodo is a statement or an error
        if ($result instanceof PDOStatement) {
            // statement executed successfully
            echo json_encode(['status' => 'success']);
            write_log("POST", $data);
        } else {
            // error occurred
            echo json_encode(['status' => 'failure']);
            write_log("POST FAILED", $data, $result); // write error message from the database into the log
        }
        break;
    case "PUT":
        // Change Todo (UPDATE)

        // Get data from the input stream.
        $input = file_get_contents('php://input');

        // Decode JSON input data into PHP array.
        $data = json_decode($input, true);

        $result = $todoDB->updateTodo($data['id']);

        // Tell the client the success of the operation.
        if ($result instanceof PDOStatement) {
            // statement executed successfully
            echo json_encode(['status' => 'success']);
            write_log("PUT", $data);
        } else {
            // error occurred
            echo json_encode(['status' => 'failure']);
            write_log("PUT FAILED", $data, $result);
        }
        break;
    case "DELETE":
        // Remove Todo (DELETE)

        // Get the data from the php input stream.
        $data = json_decode(file_get_contents('php://input'), true);

        $result = $todoDB->deleteTodo($data['id']);

        if ($result instanceof PDOStatement) {
            // statement executed successfully
            echo json_encode(['status' => 'success']);
            write_log("DELETE", $data);
        } else {
            // error occurred
            echo json_encode(['status' => 'failure']);
            write_log("DELETE FAILED", $data, $result);
        }
        break;
}

?>