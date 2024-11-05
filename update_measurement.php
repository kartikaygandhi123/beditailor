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
$txtCoatLength = $conn->real_escape_string($_POST['txtCoatLength']);
$txtCoatChest = $conn->real_escape_string($_POST['txtCoatChest']);
$txtCoatStomach = $conn->real_escape_string($_POST['txtCoatStomach']);
$txtCoatHip = $conn->real_escape_string($_POST['txtCoatHip']);
$txtCoatShoulder = $conn->real_escape_string($_POST['txtCoatShoulder']);
$txtCoatSleeve = $conn->real_escape_string($_POST['txtCoatSleeve']);
$cmbCoatStyle = $conn->real_escape_string($_POST['cmbCoatStyle']);
$cmbCoatCollar = $conn->real_escape_string($_POST['cmbCoatCollar']);
$cmbCoatCut = $conn->real_escape_string($_POST['cmbCoatCut']);
$cmbJacketStyle = $conn->real_escape_string($_POST['cmbJacketStyle']);
$txtJacketBan = $conn->real_escape_string($_POST['txtJacketBan']);
$txtPajamaLength = $conn->real_escape_string($_POST['txtPajamaLength']);
$txtPajamaHip = $conn->real_escape_string($_POST['txtPajamaHip']);
$txtPajamaWaist = $conn->real_escape_string($_POST['txtPajamaWaist']);
$txtPajamaBottom = $conn->real_escape_string($_POST['txtPajamaBottom']);
$cmbPajamaPlates = $conn->real_escape_string($_POST['cmbPajamaPlates']);
$cmbPajamaStyle = $conn->real_escape_string($_POST['cmbPajamaStyle']);
$cmbPajamaLastic = $conn->real_escape_string($_POST['cmbPajamaLastic']);
$txtPantLength = $conn->real_escape_string($_POST['txtPantLength']);
$txtPantInnerLength = $conn->real_escape_string($_POST['txtPantInnerLength']);
$txtPantHip = $conn->real_escape_string($_POST['txtPantHip']);
$txtPantWaist = $conn->real_escape_string($_POST['txtPantWaist']);
$txtPantThigh = $conn->real_escape_string($_POST['txtPantThigh']);
$txtPantKnee = $conn->real_escape_string($_POST['txtPantKnee']);
$txtPantBottom = $conn->real_escape_string($_POST['txtPantBottom']);
$cmbPantPocket = $conn->real_escape_string($_POST['cmbPantPocket']);
$cmbPantPlate = $conn->real_escape_string($_POST['cmbPantPlate']);
$txtShirtLength = $conn->real_escape_string($_POST['txtShirtLength']);
$txtShirtChest = $conn->real_escape_string($_POST['txtShirtChest']);
$txtShirtStomach = $conn->real_escape_string($_POST['txtShirtStomach']);
$txtShirtShoulder = $conn->real_escape_string($_POST['txtShirtShoulder']);
$txtShirtSleeveFull = $conn->real_escape_string($_POST['txtShirtSleeveFull']);
$txtShirtSleeveHalf = $conn->real_escape_string($_POST['txtShirtSleeveHalf']);
$txtShirtCollar = $conn->real_escape_string($_POST['txtShirtCollar']);
$txtShirtCuff = $conn->real_escape_string($_POST['txtShirtCuff']);
$cmbShirtBackPlate = $conn->real_escape_string($_POST['cmbShirtBackPlate']);
$cmbShirtPatti = $conn->real_escape_string($_POST['cmbShirtPatti']);
$cmbShirtCut = $conn->real_escape_string($_POST['cmbShirtCut']);
$cmbShirtShoulderClip = $conn->real_escape_string($_POST['cmbShirtShoulderClip']);
$cmbShirtAbovePocket = $conn->real_escape_string($_POST['cmbShirtAbovePocket']);
$txtKurtaLength = $conn->real_escape_string($_POST['txtKurtaLength']);
$txtKurtaChest = $conn->real_escape_string($_POST['txtKurtaChest']);
$txtKurtaStomach = $conn->real_escape_string($_POST['txtKurtaStomach']);
$txtKurtaShoulder = $conn->real_escape_string($_POST['txtKurtaShoulder']);
$txtKurtaSleeve = $conn->real_escape_string($_POST['txtKurtaSleeve']);
$txtKurtaCollar = $conn->real_escape_string($_POST['txtKurtaCollar']);
$txtKurtaCuff = $conn->real_escape_string($_POST['txtKurtaCuff']);
$cmbKurtaFrontPlate = $conn->real_escape_string($_POST['cmbKurtaFrontPlate']);
$cmbKurtaPocketSide = $conn->real_escape_string($_POST['cmbKurtaPocketSide']);
$cmbKurtaShoulderClip = $conn->real_escape_string($_POST['cmbKurtaShoulderClip']);
$cmbKurtaFrontPocket = $conn->real_escape_string($_POST['cmbKurtaFrontPocket']);
$cmbKurtaPocketFlap = $conn->real_escape_string($_POST['cmbKurtaPocketFlap']);
$cmbKurtaStyle = $conn->real_escape_string($_POST['cmbKurtaStyle']);
$id = (int)$_POST['id']; // Cast $id as an integer

// Build the SQL statement with escaped variables
$sql = "UPDATE measurements SET 
                    txtId = '$txtId', 
                    txtName = '$txtName', 
                    txtAddress = '$txtAddress', 
                    txtPhone = '$txtPhone', 
                    txtCoatLength = '$txtCoatLength', 
                    txtCoatChest = '$txtCoatChest', 
                    txtCoatStomach = '$txtCoatStomach', 
                    txtCoatHip = '$txtCoatHip', 
                    txtCoatShoulder = '$txtCoatShoulder', 
                    txtCoatSleeve = '$txtCoatSleeve', 
                    cmbCoatStyle = '$cmbCoatStyle', 
                    cmbCoatCollar = '$cmbCoatCollar', 
                    cmbCoatCut = '$cmbCoatCut', 
                    cmbJacketStyle = '$cmbJacketStyle', 
                    txtJacketBan = '$txtJacketBan', 
                    txtPajamaLength = '$txtPajamaLength', 
                    txtPajamaHip = '$txtPajamaHip', 
                    txtPajamaWaist = '$txtPajamaWaist', 
                    txtPajamaBottom = '$txtPajamaBottom', 
                    cmbPajamaPlates = '$cmbPajamaPlates', 
                    cmbPajamaStyle = '$cmbPajamaStyle', 
                    cmbPajamaLastic = '$cmbPajamaLastic', 
                    txtPantLength = '$txtPantLength', 
                    txtPantInnerLength = '$txtPantInnerLength', 
                    txtPantHip = '$txtPantHip', 
                    txtPantWaist = '$txtPantWaist', 
                    txtPantThigh = '$txtPantThigh', 
                    txtPantKnee = '$txtPantKnee', 
                    txtPantBottom = '$txtPantBottom', 
                    cmbPantPocket = '$cmbPantPocket', 
                    cmbPantPlate = '$cmbPantPlate', 
                    txtShirtLength = '$txtShirtLength', 
                    txtShirtChest = '$txtShirtChest', 
                    txtShirtStomach = '$txtShirtStomach', 
                    txtShirtShoulder = '$txtShirtShoulder', 
                    txtShirtSleeveFull = '$txtShirtSleeveFull', 
                    txtShirtSleeveHalf = '$txtShirtSleeveHalf', 
                    txtShirtCollar = '$txtShirtCollar', 
                    txtShirtCuff = '$txtShirtCuff', 
                    cmbShirtBackPlate = '$cmbShirtBackPlate', 
                    cmbShirtPatti = '$cmbShirtPatti', 
                    cmbShirtCut = '$cmbShirtCut', 
                    cmbShirtShoulderClip = '$cmbShirtShoulderClip', 
                    cmbShirtAbovePocket = '$cmbShirtAbovePocket', 
                    txtKurtaLength = '$txtKurtaLength', 
                    txtKurtaChest = '$txtKurtaChest', 
                    txtKurtaStomach = '$txtKurtaStomach', 
                    txtKurtaShoulder = '$txtKurtaShoulder', 
                    txtKurtaSleeve = '$txtKurtaSleeve', 
                    txtKurtaCollar = '$txtKurtaCollar', 
                    txtKurtaCuff = '$txtKurtaCuff', 
                    cmbKurtaFrontPlate = '$cmbKurtaFrontPlate', 
                    cmbKurtaPocketSide = '$cmbKurtaPocketSide', 
                    cmbKurtaShoulderClip = '$cmbKurtaShoulderClip', 
                    cmbKurtaFrontPocket = '$cmbKurtaFrontPocket', 
                    cmbKurtaPocketFlap = '$cmbKurtaPocketFlap', 
                    cmbKurtaStyle = '$cmbKurtaStyle'
                WHERE id = $id";

// Execute query and check success
if ($conn->query($sql) === TRUE) {
    // echo "Record updated successfully";
    $_SESSION['status'] = "Record updated successfully";
    header("Location: data2.php");
} else {
    $_SESSION['status'] = "Error updating record";
    header("Location: data2.php");
    // echo "Error updating record: " . $conn->error;
}

// Close connection
$conn->close();
