<?php
//Define variables for requested input fields
$comment = "";
$name = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $comment = test_input($_POST["comment"]);
        //connect to databse
        define('DB_SERVER', 'localhost');
        define('DB_USERNAME', 'Pieeer1');
        define('DB_PASSWORD', '456456');
        define('DB_NAME', 'is101');
        /* Attempt to connect to MySQL database */
        $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
        // Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
    
        $sql = "INSERT INTO comments (name, comment) VALUES ('".$name."','".$comment."')";
        
        if ($link->query($sql) === TRUE) {
            
            header("location: ../blog.php");       
        } 
        else {
            echo "Error: " . $sql . "<br>" . $link->error;
                        header("location: ../blog.php");     
        }
    
        $link->close();
}
else {
    //nothing
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>