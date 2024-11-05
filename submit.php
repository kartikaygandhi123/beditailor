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
    'txtCoatLength',
    'txtCoatChest',
    'txtCoatStomach',
    'txtCoatHip',
    'txtCoatShoulder',
    'txtCoatSleeve',
    'cmbCoatStyle',
    'cmbCoatCollar',
    'cmbCoatCut',
    'cmbJacketStyle',
    'txtJacketBan',
    'txtPajamaLength',
    'txtPajamaHip',
    'txtPajamaWaist',
    'txtPajamaBottom',
    'cmbPajamaPlates',
    'cmbPajamaStyle',
    'cmbPajamaLastic',
    'txtPantLength',
    'txtPantInnerLength',
    'txtPantHip',
    'txtPantWaist',
    'txtPantThigh',
    'txtPantKnee',
    'txtPantBottom',
    'cmbPantPocket',
    'cmbPantPlate',
    'txtShirtLength',
    'txtShirtChest',
    'txtShirtStomach',
    'txtShirtShoulder',
    'txtShirtSleeveFull',
    'txtShirtSleeveHalf',
    'txtShirtCollar',
    'txtShirtCuff',
    'cmbShirtBackPlate',
    'cmbShirtPatti',
    'cmbShirtCut',
    'cmbShirtShoulderClip',
    'cmbShirtAbovePocket',
    'txtKurtaLength',
    'txtKurtaChest',
    'txtKurtaStomach',
    'txtKurtaShoulder',
    'txtKurtaSleeve',
    'txtKurtaCollar',
    'txtKurtaCuff',
    'cmbKurtaFrontPlate',
    'cmbKurtaPocketSide',
    'cmbKurtaShoulderClip',
    'cmbKurtaFrontPocket',
    'cmbKurtaPocketFlap',
    'cmbKurtaStyle'
];

$data = [];
foreach ($fields as $field) {
    if (isset($_POST[$field]) && !empty(trim($_POST['txtId']))) {
        $data[$field] = $conn->real_escape_string(trim($_POST[$field]));
    } else {
        $_SESSION['status'] = "Unique Id is Required";
        header("Location: gents.php");

        die("Error: Field $field is required.");
    }
}

// Prepare and bind
$sql = "INSERT INTO measurements (" . implode(", ", array_keys($data)) . ") VALUES ('" . implode("', '", array_values($data)) . "')";
if ($conn->query($sql) === TRUE) {

    $_SESSION['status'] = "New record created successfully";
    header("Location: gents.php");
} else {

    $_SESSION['status'] = "Error: " . $sql . "<br>" . $conn->error;

    header("Location: gents.php");
}

// Close connection
$conn->close();
