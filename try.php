
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        email: <input type="text" name="email">
        Password: <input type="text" name="password">
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    // Retrieve the form data
    $email = $_POST['email'];
    $password = $_POST['password'];

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
    $query = "INSERT INTO SIGNUP (email, password) VALUES ('$email', '$password')";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
}
?>
