<?php 
include('admin/dbc.php');
include('admin/function.php');

// Retrieve form data
$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$fatherName = $_POST['fatherName'];
$fatherContact = $_POST['fatherContact'];
$graduationCourse = $_POST['graduationCourse'];
$graduationPercentage = $_POST['graduationPercentage'];
$location = $_POST['location'];

// Escape special characters to prevent SQL injection
$name = $conn->real_escape_string($name);
$contact = $conn->real_escape_string($contact);
$email = $conn->real_escape_string($email);
$fatherName = $conn->real_escape_string($fatherName);
$fatherContact = $conn->real_escape_string($fatherContact);
$graduationCourse = $conn->real_escape_string($graduationCourse);
$graduationPercentage = $conn->real_escape_string($graduationPercentage);
$location = $conn->real_escape_string($location);

// Generate and execute the INSERT query
$sql = "INSERT INTO applicant_data (name, contact, email, father_name, father_contact, graduation_course, graduation_percentage, location) 
        VALUES ('$name', '$contact', '$email', '$fatherName', '$fatherContact', '$graduationCourse', '$graduationPercentage', '$location')";

if ($conn->query($sql) === TRUE) { ?>
    <script>alert('Thank You! We will get back to you soon');window.location.href = 'gd-pi-session.php';</script>
<?php } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

?>
