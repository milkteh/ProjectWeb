<?php
// Establish connection to your MySQL database
$servername = "localhost";
$username = "root"; // default username for XAMPP
$password = ""; // default password for XAMPP
$database = "fivestardb"; // Name of your database
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect data from your form or elsewhere
$Id = $_POST['id'];
$patientName = $_POST['patient_name']; // Example: Assuming your form field is named 'patient_name'
$dateOfBirth = $_POST['date_of_birth'];
$Address = $_POST['address'];
$contactnumber = $_POST['contact_number'];
$dateofadmission = $_POST['date_of_admission'];
$expectedduedate= $_POST['expeected_due_date'];
$deliverytype = $_POST['delivery_type'];
$deliverydate = $_POST['delivery_date'];
$deliverytime = $_POST['delivery_time'];
$deliveryweight = $_POST['delivery_weight'];
$medicalcondition = $_POST['medical_condition'];
$allergies = $_POST['allergies'];
$medications = $_POST['medications'];
$previouspregnancies = $_POST['previous_pregnancies'];
$complications= $_POST['complications'];



// SQL query to insert data into the table
$sql = "INSERT INTO chart (patient_name, date_of_birth, address, contact_number, date_of_admission, expected_due_date, delivery_type, delivery_date, delivery_time, delivery_weight, medical_conditions, allergies, medications, previous_pregnancies, complications)
VALUES ('$patientName', '$dateOfBirth', '$address', '$contactNumber', '$dateOfAdmission', '$expectedDueDate', '$deliveryType', '$deliveryDate', '$deliveryTime', '$deliveryWeight', '$medicalConditions', '$allergies', '$medications', '$previousPregnancies', '$complications')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>