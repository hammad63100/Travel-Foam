<!-- <?php
    // $server = "localhost";
    // $username="root";
    // $password= "";
    // $con = mysqli_connect($server, $username, $password);

    // if (!$con){
    //     die("connection to this database failed due to". mysqli_connect_error());
    // }else{
    // echo"Success Connecting to the DB";
    // } 

    
    

    //  // Check if form is submitted
    //  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     // Use isset() to check if POST variables exist
    //     $name = isset($_POST['name']) ? $_POST['name'] : '';
    //     $fatherName = isset($_POST['fatherName']) ? $_POST['fatherName'] : '';
    //     $age = isset($_POST['age']) ? $_POST['age'] : '';
    //     $email = isset($_POST['email']) ? $_POST['email'] : '';
    //     $phoneNo = isset($_POST['phoneNo']) ? $_POST['phoneNo'] : '';
    //     $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    //     $textarea = isset($_POST['textarea']) ? $_POST['textarea'] : '';

    //     // Your SQL statement
    //     $sql = "INSERT INTO trip (`id`, `name`, `fatherName`, `age`, `email`, `PhoneNo`, `gender`, `textarea`, `datetime`) 
    //             VALUES ('$name', '$fatherName', '$age', '$email', '$phoneNo', '$gender', '$textarea', current_timestamp())";
    //     echo $sql;

    //  }
?> -->

<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "trip"; // Add your database name here

    // Connect to database
    $con = mysqli_connect($server, $username, $password, $database);

    if (!$con){
        die("Connection to this database failed due to " . mysqli_connect_error());
    }

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $name = isset($_POST['name']) ? mysqli_real_escape_string($con, $_POST['name']) : '';
        $fatherName = isset($_POST['fatherName']) ? mysqli_real_escape_string($con, $_POST['fatherName']) : '';
        $age = isset($_POST['age']) ? mysqli_real_escape_string($con, $_POST['age']) : '';
        $email = isset($_POST['email']) ? mysqli_real_escape_string($con, $_POST['email']) : '';
        $phoneNo = isset($_POST['PhoneNo']) ? mysqli_real_escape_string($con, $_POST['PhoneNo']) : ''; // Changed to match HTML form
        $gender = isset($_POST['gender']) ? mysqli_real_escape_string($con, $_POST['gender']) : '';
        $textarea = isset($_POST['textarea']) ? mysqli_real_escape_string($con, $_POST['textarea']) : '';

        // SQL query
        $sql = "INSERT INTO trip (name, fatherName, age, email, PhoneNo, gender, textarea, datetime) 
                VALUES ('$name', '$fatherName', '$age', '$email', '$phoneNo', '$gender', '$textarea', current_timestamp())";
        
        // Execute query
        if(mysqli_query($con, $sql)){
            echo "Data inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    }

    // Close connection
    mysqli_close($con);
?>
