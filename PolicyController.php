<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");

    include_once "Database.php";
    include_once "Policy.php";

    $database = new Database();
    $db = $database->connect();

    $policy = new Policy($db);
    
    $result = $policy->read();

    if($result->rowCount() > 0) {
        $response = array();
        $response['data'] = array();

        foreach ($result as $row) {
            $data = array(
                'customer_name' => $row['name'],
                'customer_address' => $row['address'],
                'premium' => $row['premium'],
                'policy_type' => $row['type'],
                'insurer_name' => $row['insurer_name']
            );

            array_push($response['data'], $data);
        }

        echo json_encode($response);
    } else {
        echo json_encode(array('message' => 'No policy found!'));
    }

?>