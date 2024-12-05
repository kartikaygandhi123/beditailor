<?php
session_start();
// Database connection
$servername = "localhost"; // Change as needed
$username = "u754798798_root"; // Change as needed
$password = "#Pgckot999"; // Change as needed
$dbname = "u754798798_measurement_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Escaping variables for SQL injection protection
$txtId = $conn->real_escape_string($_POST['txtId']);
$txtName = $conn->real_escape_string($_POST['txtName']);
$txtAddress = $conn->real_escape_string($_POST['txtAddress']);
$txtPhone = $conn->real_escape_string($_POST['txtPhone']);
$txtShirtLength = $conn->real_escape_string($_POST['txtShirtLength']);
$txtShirtChest = $conn->real_escape_string($_POST['txtShirtChest']);
$txtShirtWaist = $conn->real_escape_string($_POST['txtShirtWaist']);
$txtShirtHip = $conn->real_escape_string($_POST['txtShirtHip']);
$txtShirtShoulder = $conn->real_escape_string($_POST['txtShirtShoulder']);
$txtShirtSleeveFull = $conn->real_escape_string($_POST['txtShirtSleeveFull']);
$txtShirtSleeveHalf = $conn->real_escape_string($_POST['txtShirtSleeveHalf']);
$txtShirtCollarBan = $conn->real_escape_string($_POST['txtShirtCollarBan']);
$txtShirtNeckFront = $conn->real_escape_string($_POST['txtShirtNeckFront']);
$txtShirtNeckBack = $conn->real_escape_string($_POST['txtShirtNeckBack']);
$cmbShirtFrontPlate = $conn->real_escape_string($_POST['cmbShirtFrontPlate']);
$txtShirtPlateSize = $conn->real_escape_string($_POST['txtShirtPlateSize']);
$cmbShirtBackPlate = $conn->real_escape_string($_POST['cmbShirtBackPlate']);
$txtShirtGhera = $conn->real_escape_string($_POST['txtShirtGhera']);
$txtSalwarLength = $conn->real_escape_string($_POST['txtSalwarLength']);
$txtSalwarBottom = $conn->real_escape_string($_POST['txtSalwarBottom']);
$cmbSalwarBelt = $conn->real_escape_string($_POST['cmbSalwarBelt']);
$txtPajamiLength = $conn->real_escape_string($_POST['txtPajamiLength']);
$txtPajamiHip = $conn->real_escape_string($_POST['txtPajamiHip']);
$txtPajamiBottom = $conn->real_escape_string($_POST['txtPajamiBottom']);
$txtPlazoLength = $conn->real_escape_string($_POST['txtPlazoLength']);
$txtPlazoHip = $conn->real_escape_string($_POST['txtPlazoHip']);
$txtPlazoWaist = $conn->real_escape_string($_POST['txtPlazoWaist']);
$txtPlazoBottom = $conn->real_escape_string($_POST['txtPlazoBottom']);
$txtPantFormalLength = $conn->real_escape_string($_POST['txtPantFormalLength']);
$txtPantFormalHalfLength = $conn->real_escape_string($_POST['txtPantFormalHalfLength']);
$txtPantFormalHip = $conn->real_escape_string($_POST['txtPantFormalHip']);
$txtPantFormalWaist = $conn->real_escape_string($_POST['txtPantFormalWaist']);
$txtPantFormalThigh = $conn->real_escape_string($_POST['txtPantFormalThigh']);
$txtPantFormalKnee = $conn->real_escape_string($_POST['txtPantFormalKnee']);
$txtPantFormalBottom = $conn->real_escape_string($_POST['txtPantFormalBottom']);
$txtPantFormalPocket = $conn->real_escape_string($_POST['txtPantFormalPocket']);
$txtPantFormalBelt = $conn->real_escape_string($_POST['txtPantFormalBelt']);
$txtPantFormalPlate = $conn->real_escape_string($_POST['txtPantFormalPlate']);
$txtShirtFormalLength = $conn->real_escape_string($_POST['txtShirtFormalLength']);
$txtShirtFormalChest = $conn->real_escape_string($_POST['txtShirtFormalChest']);
$txtShirtFormalWaist = $conn->real_escape_string($_POST['txtShirtFormalWaist']);
$txtShirtFormalShoulder = $conn->real_escape_string($_POST['txtShirtFormalShoulder']);
$txtShirtFormalSleeveFull = $conn->real_escape_string($_POST['txtShirtFormalSleeveFull']);
$txtShirtFormalSleeveHalf = $conn->real_escape_string($_POST['txtShirtFormalSleeveHalf']);
$txtShirtFormalCollar = $conn->real_escape_string($_POST['txtShirtFormalCollar']);
$txtShirtFormalCuff = $conn->real_escape_string($_POST['txtShirtFormalCuff']);
$cmbShirtFormalPlate = $conn->real_escape_string($_POST['cmbShirtFormalPlate']);
$cmbShirtFormalPatti = $conn->real_escape_string($_POST['cmbShirtFormalPatti']);
$cmbShirtFormalCut = $conn->real_escape_string($_POST['cmbShirtFormalCut']);

$id = (int)$_POST['id']; // Cast $id as an integer

// Build the SQL statement with escaped variables
$sql = "UPDATE measurements_ladies SET 
txtId = '$txtId',
txtName = '$txtName',
txtAddress = '$txtAddress',
txtPhone = '$txtPhone',
txtShirtLength = '$txtShirtLength',
txtShirtChest = '$txtShirtChest',
txtShirtWaist = '$txtShirtWaist',
txtShirtHip='$txtShirtHip',
txtShirtShoulder = '$txtShirtShoulder',
txtShirtSleeveFull = '$txtShirtSleeveFull',
txtShirtSleeveHalf = '$txtShirtSleeveHalf',
txtShirtCollarBan = '$txtShirtCollarBan',
txtShirtNeckFront = '$txtShirtNeckFront',
txtShirtNeckBack = '$txtShirtNeckBack',
cmbShirtFrontPlate = '$cmbShirtFrontPlate',
txtShirtPlateSize='$txtShirtPlateSize',
cmbShirtBackPlate = '$cmbShirtBackPlate',
txtShirtGhera = '$txtShirtGhera',
txtSalwarLength = '$txtSalwarLength',
txtSalwarBottom = '$txtSalwarBottom',
cmbSalwarBelt = '$cmbSalwarBelt',
txtPajamiLength = '$txtPajamiLength',
txtPajamiHip = '$txtPajamiHip',
txtPajamiBottom = '$txtPajamiBottom',
txtPlazoLength = '$txtPlazoLength',
txtPlazoHip = '$txtPlazoHip',
txtPlazoWaist = '$txtPlazoWaist',
txtPlazoBottom = '$txtPlazoBottom',
txtPantFormalLength = '$txtPantFormalLength',
txtPantFormalHalfLength = '$txtPantFormalHalfLength',
txtPantFormalHip = '$txtPantFormalHip',
txtPantFormalWaist = '$txtPantFormalWaist',
txtPantFormalThigh = '$txtPantFormalThigh',
txtPantFormalKnee = '$txtPantFormalKnee',
txtPantFormalBottom = '$txtPantFormalBottom',
txtPantFormalPocket = '$txtPantFormalPocket',
txtPantFormalBelt = '$txtPantFormalBelt',
txtPantFormalPlate = '$txtPantFormalPlate',
txtShirtFormalLength = '$txtShirtFormalLength',
txtShirtFormalChest = '$txtShirtFormalChest',
txtShirtFormalWaist = '$txtShirtFormalWaist',
txtShirtFormalShoulder = '$txtShirtFormalShoulder',
txtShirtFormalSleeveFull = '$txtShirtFormalSleeveFull',
txtShirtFormalSleeveHalf = '$txtShirtFormalSleeveHalf',
txtShirtFormalCollar = '$txtShirtFormalCollar',
txtShirtFormalCuff = '$txtShirtFormalCuff',
cmbShirtFormalPlate = '$cmbShirtFormalPlate',
cmbShirtFormalPatti = '$cmbShirtFormalPatti',
cmbShirtFormalCut = '$cmbShirtFormalCut'
WHERE id = $id";

// Execute query and check success
if ($conn->query($sql) === TRUE) {
    // echo "Record updated successfully";
    $_SESSION['status'] = "Record updated successfully";
    header("Location: data2_ladies.php");
} else {
    $_SESSION['status'] = "Error updating record";
    header("Location: data2_ladies.php");
    // echo "Error updating record: " . $conn->error;
}

// Close connection
$conn->close();
