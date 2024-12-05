<?php
// Database connection
$servername = "localhost"; // Change as needed
$username = "u754798798_root"; // Change as needed
$password = "#Pgckot999"; // Change as needed
$dbname = "u754798798_measurement_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'] ?? null;

if ($id) {
    $stmt = $conn->prepare("SELECT * FROM measurements_ladies WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    if (!$data) {
        echo "No data found for this ID.";
        exit();
    }
} else {
    echo "ID is not set.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   </head>
<body>
<?php
header('Content-Type: application/xls');
header('Content-Disposition: attachment; filename="ladiesmeasure.xls"');
?>
       <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-2">
                <div class="card">
                    <div class="card-header">
                        <h4>Measurement Details</h4>
                        </div>
                    <div class="card-body">
                        <div class="row">

                        <table class="table" style="border: 1px solid black; border-collapse: collapse;">


                            <?php foreach ($data as $field => $value): ?>
                                <?php if ($field != 'id'): ?> <!-- Check if the field is not 'id' -->
                                    <tr>
                                    <td style="border: 1px solid black; padding: 5px;"><?php echo substr(ucfirst(str_replace("_", " ", $field)), 3); ?></td>
                                    <td style="border: 1px solid black; padding: 5px;"><?php echo htmlspecialchars($value); ?></td>
                                </tr>
                                    <?php endif; ?>
                            <?php endforeach; ?>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>