 <!-- <?php
   // $firstname = $_POST['firstname'];
    //$lastname = $_POST['lastname'];
    //$gender = $_POST['gender'];
    //$email = $_POST['email'];
    //$password = $_POST['password'];
    //$number = $_POST['number'];  -->

//database connection
//$conn = new mysqli('localhost','root','','test1');
//if($conn->connect_error){
  // die('Connection Failed : '.$conn->connect_error);
//}else{
  //  $stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password ,number)
   //    values(? ,? ,? ,? ,? ,?)");
//    $stmt->bind_param("sssssi",$firstName, $lastName, $gender,$email,$password,$number);
//    $stmt->execute()
//    echo "registration successfully...";
//    $stmt->close();
//    $conn->close(); 
// }


// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";

// Create a new MySQLi instance
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the registration form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullName = $_POST["fullName"];
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $city = $_POST["city"];
    $gender = $_POST["gender"];

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO login (fullName, phoneNumber, email, age, city, gender) VALUES (?, ?, ?, ?, ?, ?)");

    // Bind parameters and execute the statement
    $stmt->bind_param("ssssss", $fullName, $phoneNumber, $email, $age, $city, $gender);

    if ($stmt->execute()) {
        // Registration completed
        echo "Registration Successful!";

        // Redirect to the registration page after a delay
        // header("refresh:3; url=registration.php");
        exit;
    } else {
        // An error occurred while storing credentials
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
