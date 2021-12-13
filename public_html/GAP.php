<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'GalacticArmyPersonnel';
    
    $conn = mysqli_connect($servername, $username, $password, $db);
    
    if (!conn) {
        die("connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SSELCT * FROM employees";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        echo "These area employees: \n";
        foreach ($result as $employee){
            echo "ID: " . $employee['id'] . "<br>";
            echo "Name: " . $employee['name'] . "<br>";
            echo "Position: " . $employee['position'] . "<br>";
            echo "Salary: " . $employee['salary'] . "<br>";
            echo "Rank: " . $employee['rank'] . "<br>";
        }
    } else {
        echo "There are 0 resutls";
    }
?>
