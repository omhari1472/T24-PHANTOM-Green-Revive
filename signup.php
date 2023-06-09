

<?php
if (isset($_POST['submit'])) {
    // Retrieve the form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // $address = $_POST["address"];

    // Establish a database connection
    $host = 'localhost';  // replace with your host
    $user = 'root';  // replace with your database username
    $password = '';  // replace with your database password
    $database = 'greenrevive';  // replace with your database name

    $conn = mysqli_connect($host, $user, $password, $database);

    // Check if the connection was successful
    if (!$conn) {
        die('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    // Perform the query
    // $query = "INSERT INTO SIGNUP (email, password) VALUES ('$email', '$password')";
    $query = "INSERT INTO SIGNUP (email, password, confirmPassword) VALUES ('$email', '$password', '$confirmPassword')";
    $result = mysqli_query($conn, $query);
    

    // Check if the query was successful
    if ($result) {
        // echo "YOur Form Has been Filled successfully.";
        // echo "Our vendor will pick up the waste shortly.";
        $msg = " Your Form Has been Filled successfully. Our vendor will pick up the waste shortly";

    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<section class="signup-section">
        <div class="signupinput">
            <h2>Register</h2>
            <h3>Create Your Account</h3>
            <div class="parent-container">
                <form action="#" method="POST" class="left-side">
                    <div class="row">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="col-12 shadow" placeholder="Username">
                    </div>
                    <div class="row">
                        <label for="firstName">Email</label>
                        <input type="email" name="email" class="col-12 shadow" placeholder="example@gmail.com">
                    </div>
                    <div class="row">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="col-12 shadow" placeholder="********">
                    </div>
                    <div class="row">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" name="confirmPassword" class="col-12 shadow" placeholder="********">
                    </div>
                    <div id="msg">
                        <?php echo $msg; ?>
                    </div>
                    <div class="row checkbox">
                        <span>
                            <div class="text-element">Already Have an Account?</div>
                        </span>
                        <a href="./login.php">Login</a>
                    </div>
                    <div class="row">
                    </div>
                    <input type="submit" name="submit" value="Register">
                    <!-- <button class="cta-btn loginbutton" name="submit">Register</button> -->
                    <div class="or">
                        <hr> or <hr>
                    </div>
                    <button class="cta-btn loginbutton" name="googlelogin">Google Login</button>
                </form>
            </div>
        </div>
        <div class="signupimg">
            <img src="./assets/img/signup.png" alt="">
            <h2>Welcome back to the <br>
                world of<br>
                <h1>
                    Green Revive!
                </h1>
            </h2>
        </div>
    </section>

</body>
</html>

