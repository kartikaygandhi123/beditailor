<?php

session_start();

// Database configuration
$servername = "localhost"; // Change as needed
$username = "u754798798_root"; // Change as needed
$password = "#Pgckot999"; // Change as needed
$dbname = "u754798798_measurement_db"; // Change as necessary

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collecting and validating input
$fields = [
'txtId',
'txtName',
'txtAddress',
'txtPhone',
'txtShirtLength',
'txtShirtChest',
'txtShirtWaist',
'txtShirtHip',
'txtShirtShoulder',
'txtShirtSleeveFull',
'txtShirtSleeveHalf',
'txtShirtCollarBan',
'txtShirtNeckFront',
'txtShirtNeckBack',
'cmbShirtFrontPlate',
'txtShirtPlateSize',
'cmbShirtBackPlate',
'txtShirtGhera',
'txtSalwarLength',
'txtSalwarBottom',
'cmbSalwarBelt',
'txtPajamiLength',
'txtPajamiHip',
'txtPajamiBottom',
'txtPlazoLength',
'txtPlazoHip',
'txtPlazoWaist',
'txtPlazoBottom',
'txtPantFormalLength',
'txtPantFormalHalfLength',
'txtPantFormalHip',
'txtPantFormalWaist',
'txtPantFormalThigh',
'txtPantFormalKnee',
'txtPantFormalBottom',
'txtPantFormalPocket',
'txtPantFormalBelt',
'txtPantFormalPlate',
'txtShirtFormalLength',
'txtShirtFormalChest',
'txtShirtFormalWaist',
'txtShirtFormalShoulder',
'txtShirtFormalSleeveFull',
'txtShirtFormalSleeveHalf',
'txtShirtFormalCollar',
'txtShirtFormalCuff',
'cmbShirtFormalPlate',
'cmbShirtFormalPatti',
'cmbShirtFormalCut'
];

$data = [];
foreach ($fields as $field) {
    if (isset($_POST[$field]) && !empty(trim($_POST['txtId']))) {
        $data[$field] = $conn->real_escape_string(trim($_POST[$field]));
    } else {
        $_SESSION['status'] = "Unique Id is Required";
        header("Location: ladies.php");

        die("Error: Field $field is required.");
    }
}

// Prepare and bind
$sql = "INSERT INTO measurements_ladies (" . implode(", ", array_keys($data)) . ") VALUES ('" . implode("', '", array_values($data)) . "')";
if ($conn->query($sql) === TRUE) {

    $_SESSION['status'] = "New record created successfully";
    header("Location: ladies.php");
} else {

    $_SESSION['status'] = "Error: " . $sql . "<br>" . $conn->error;

    header("Location: ladies.php");
}

// Close connection
$conn->close();


?>