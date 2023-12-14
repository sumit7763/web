<?php
    $connector = mysqli_connect("localhost","root","","college");//college is database name
    if ($connector->error){
        exit();
    }
    else{
        // get the user name and password
        $username = $_POST["username"];
        $password = $_POST["password"];
        $user_exists = false;
        /* this code take O(1) time to search for username */
        $sql = "SELECT * FROM `students` WHERE `username` = \"".$username."\" AND `password` = \"".$password."\";";
        $result = mysqli_query($connector, $sql);
		//$sql = "INSERT INTO `students`(`username`, `password`) VALUES (\'anupam\',\'123\');";
        // if username does not exists result will be returned with 0 rows
        if ($result -> num_rows != 0){
            $user_exists = true;
        }

        if ($user_exists){
            echo "welcome " . $username . "<br>";
        }
        else{
            echo "user doest not exixts!!!<br>"; 
        }
    }
?>