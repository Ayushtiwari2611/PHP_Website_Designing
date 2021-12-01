<?php
error_reporting(0);
$insert == false;
if(isset($_POST['name'])){

    // Set Connection Variable
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create Database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to the database failed due to".mysqli_connect_error());
    }
    // echo "Success connecting to the database";

    // Collect Post Variables
    $name = $_POST['name'];
    $section = $_POST['section'];
    $enrollnum = $_POST['enrollnum'];
    $projecttitle = $_POST['projecttitle'];
    $supervisor = $_POST['supervisor'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $description = $_POST['description'];
    $sql = "INSERT INTO `myfirstdb`.`myfirstdb` (`name`, `section`, `enrollnum`, `projecttitle`, `supervisor`, `email`, `phone`, `description`, `dt`) VALUES ('$name', '$section', '$enrollnum', '$projecttitle', '$supervisor', '$email', '$phone', '$description', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully Inserted";

        // Flag for successful insertion
        $insert == true;
    }
    else{
        echo "ERROR : $sql <br> $con->error";
    }
    $con->close();
}
?>

<!-- HTML -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Project Form</title>
    <link rel="stylesheet" href="4_project.css">
</head>

<body>
    <img class="image" src="imge.jpg" alt="Project">
    <div class="container">
        <h1>Academic Project Form</h1>
        <p>Enter your details and submit the form to confirm your participation in the Project.</p>
        <?php
        if ($insert == true){
            echo "<p class='submitMsg'>Thanks for submitting the form </p>";
        }
        ?>
        <form action="4_project.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="section" id="section" placeholder="Enter your section">
            <input type="text" name="enrollnum" id="enrollnum" placeholder="Enter your Enrollment number">
            <input type="text" name="projecttitle" id="projecttitle" placeholder="Enter your Project Title">
            <input type="text" name="supervisor" id="supervisor" placeholder="Enter your Supervisor">
            <input type="text" name="email" id="email" placeholder="Enter your email">
            <input type="number" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Describe your project(in 50 words)"></textarea>
            <br>
            <button class="btn">Submit</button>
        </form>
    </div>
</body>

</html>