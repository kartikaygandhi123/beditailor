<?php
// Database connection
$servername = "localhost"; // Change as needed
$username = "root"; // Change as needed
$password = ""; // Change as needed
$dbname = "measurements_db"; // Change to your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all entries
$sql = "SELECT * FROM measurements ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Measurements Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <style>
        .table th, .table td {
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <div class="progress-table-wrap">
        <div class="progress-table">

        <h2 class="mb-4">Measurements Dashboard</h2>
        <table id="measurementsTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Coat Length</th>
                    <th>Coat Chest</th>
                    <th>Coat Stomach</th>
                    <th>Coat Hip</th>
                    <th>Coat Shoulder</th>
                    <th>Coat Sleeve</th>
                    <th>Coat Style</th>
                    <th>Coat Collar</th>
                    <th>Coat Cut</th>
                    <th>Jacket Style</th>
                    <th>Jacket Band</th>
                    <th>Pajama Length</th>
                    <th>Pajama Hip</th>
                    <th>Pajama Waist</th>
                    <th>Pajama Bottom</th>
                    <th>Pajama Plates</th>
                    <th>Pajama Style</th>
                    <th>Pajama Lastic</th>
                    <th>Pant Length</th>
                    <th>Pant Inner Length</th>
                    <th>Pant Hip</th>
                    <th>Pant Waist</th>
                    <th>Pant Thigh</th>
                    <th>Pant Knee</th>
                    <th>Pant Bottom</th>
                    <th>Pant Pocket</th>
                    <th>Pant Plate</th>
                    <th>Shirt Length</th>
                    <th>Shirt Chest</th>
                    <th>Shirt Stomach</th>
                    <th>Shirt Shoulder</th>
                    <th>Shirt Sleeve Full</th>
                    <th>Shirt Sleeve Half</th>
                    <th>Shirt Collar</th>
                    <th>Shirt Cuff</th>
                    <th>Shirt Back Plate</th>
                    <th>Shirt Patti</th>
                    <th>Shirt Cut</th>
                    <th>Shirt Shoulder Clip</th>
                    <th>Shirt Above Pocket</th>
                    <th>Kurta Length</th>
                    <th>Kurta Chest</th>
                    <th>Kurta Stomach</th>
                    <th>Kurta Shoulder</th>
                    <th>Kurta Sleeve</th>
                    <th>Kurta Collar</th>
                    <th>Kurta Front Plate</th>
                    <th>Kurta Pocket Side</th>
                    <th>Kurta Shoulder Clip</th>
                    <th>Kurta Front Pocket</th>
                    <th>Kurta Pocket Flap</th>
                    <th>Kurta Style</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while($data = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($data['id']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtName']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtAddress']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtPhone']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtCoatLength']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtCoatChest']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtCoatStomach']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtCoatHip']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtCoatShoulder']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtCoatSleeve']); ?></td>
                            <td><?php echo htmlspecialchars($data['cmbCoatStyle']); ?></td>
                            <td><?php echo htmlspecialchars($data['cmbCoatCollar']); ?></td>
                            <td><?php echo htmlspecialchars($data['cmbCoatCut']); ?></td>
                            <td><?php echo htmlspecialchars($data['cmbJacketStyle']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtJacketBan']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtPajamaLength']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtPajamaHip']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtPajamaWaist']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtPajamaBottom']); ?></td>
                            <td><?php echo htmlspecialchars($data['cmbPajamaPlates']); ?></td>
                            <td><?php echo htmlspecialchars($data['cmbPajamaStyle']); ?></td>
                            <td><?php echo htmlspecialchars($data['cmbPajamaLastic']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtPantLength']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtPantInnerLength']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtPantHip']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtPantWaist']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtPantThigh']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtPantKnee']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtPantBottom']); ?></td>
                            <td><?php echo htmlspecialchars($data['cmbPantPocket']); ?></td>
                            <td><?php echo htmlspecialchars($data['cmbPantPlate']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtShirtLength']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtShirtChest']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtShirtStomach']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtShirtShoulder']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtShirtSleeveFull']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtShirtSleeveHalf']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtShirtCollar']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtShirtCuff']); ?></td>
                            <td><?php echo htmlspecialchars($data['cmbShirtBackPlate']); ?></td>
                            <td><?php echo htmlspecialchars($data['cmbShirtPatti']); ?></td>
                            <td><?php echo htmlspecialchars($data['cmbShirtCut']); ?></td>
                            <td><?php echo htmlspecialchars($data['cmbShirtShoulderClip']); ?></td>
                            <td><?php echo htmlspecialchars($data['cmbShirtAbovePocket']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtKurtaLength']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtKurtaChest']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtKurtaStomach']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtKurtaShoulder']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtKurtaSleeve']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtKurtaCollar']); ?></td>
                            <td><?php echo htmlspecialchars($data['txtKurtaFrontPlate']); ?></td>
                            <td><?php echo htmlspecialchars($data['cmbKurtaPocketSide']); ?></td>
                            <td><?php echo htmlspecialchars($data['cmbKurtaShoulderClip']); ?></td>
                            <td><?php echo htmlspecialchars($data['cmbKurtaFrontPocket']); ?></td>
                            <td><?php echo htmlspecialchars($data['cmbKurtaPocketFlap']); ?></td>
                            <td><?php echo htmlspecialchars($data['cmbKurtaStyle']); ?></td>
                            <td>
                                <button class="btn btn-primary edit-btn" data-id="<?php echo $data['id']; ?>">Edit</button>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan="62">No records found</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
                </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Measurement</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editForm" method="POST" action="update_measurement.php">
                    <div class="modal-body">
                        <input type="hidden" name="id" id="measurementId">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="txtName" id="name" >
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="txtAddress" id="address" >
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" name="txtPhone" id="phone" >
                        </div>
                        <div class="form-group">
                            <label for="coatLength">Coat Length</label>
                            <input type="number" class="form-control" name="txtCoatLength" id="coatLength" >
                        </div>
                        <div class="form-group">
                            <label for="coatChest">Coat Chest</label>
                            <input type="number" class="form-control" name="txtCoatChest" id="coatChest" >
                        </div>
                        <div class="form-group">
                            <label for="coatStomach">Coat Stomach</label>
                            <input type="number" class="form-control" name="txtCoatStomach" id="coatStomach" >
                        </div>
                        <div class="form-group">
                            <label for="coatHip">Coat Hip</label>
                            <input type="number" class="form-control" name="txtCoatHip" id="coatHip" >
                        </div>
                        <div class="form-group">
                            <label for="coatShoulder">Coat Shoulder</label>
                            <input type="number" class="form-control" name="txtCoatShoulder" id="coatShoulder" >
                        </div>
                        <div class="form-group">
                            <label for="coatSleeve">Coat Sleeve</label>
                            <input type="number" class="form-control" name="txtCoatSleeve" id="coatSleeve" >
                        </div>
                        <div class="form-group">
                            <label for="cmbCoatStyle">Coat Style</label>
                            <input type="text" class="form-control" name="cmbCoatStyle" id="cmbCoatStyle" >
                        </div>
                        <div class="form-group">
                            <label for="cmbCoatCollar">Coat Collar</label>
                            <input type="text" class="form-control" name="cmbCoatCollar" id="cmbCoatCollar" >
                        </div>
                        <div class="form-group">
                            <label for="cmbCoatCut">Coat Cut</label>
                            <input type="text" class="form-control" name="cmbCoatCut" id="cmbCoatCut" >
                        </div>
                        <div class="form-group">
                            <label for="cmbJacketStyle">Jacket Style</label>
                            <input type="text" class="form-control" name="cmbJacketStyle" id="cmbJacketStyle" >
                        </div>
                        <div class="form-group">
                            <label for="txtJacketBan">Jacket Band</label>
                            <input type="text" class="form-control" name="txtJacketBan" id="txtJacketBan" >
                        </div>
                        <div class="form-group">
                            <label for="txtPajamaLength">Pajama Length</label>
                            <input type="number" class="form-control" name="txtPajamaLength" id="txtPajamaLength" >
                        </div>
                        <div class="form-group">
                            <label for="txtPajamaHip">Pajama Hip</label>
                            <input type="number" class="form-control" name="txtPajamaHip" id="txtPajamaHip" >
                        </div>
                        <div class="form-group">
                            <label for="txtPajamaWaist">Pajama Waist</label>
                            <input type="number" class="form-control" name="txtPajamaWaist" id="txtPajamaWaist" >
                        </div>
                        <div class="form-group">
                            <label for="txtPajamaBottom">Pajama Bottom</label>
                            <input type="number" class="form-control" name="txtPajamaBottom" id="txtPajamaBottom" >
                        </div>
                        <div class="form-group">
                            <label for="cmbPajamaPlates">Pajama Plates</label>
                            <input type="text" class="form-control" name="cmbPajamaPlates" id="cmbPajamaPlates" >
                        </div>
                        <div class="form-group">
                            <label for="cmbPajamaStyle">Pajama Style</label>
                            <input type="text" class="form-control" name="cmbPajamaStyle" id="cmbPajamaStyle" >
                        </div>
                        <div class="form-group">
                            <label for="cmbPajamaLastic">Pajama Lastic</label>
                            <input type="text" class="form-control" name="cmbPajamaLastic" id="cmbPajamaLastic" >
                        </div>
                        <div class="form-group">
                            <label for="txtPantLength">Pant Length</label>
                            <input type="number" class="form-control" name="txtPantLength" id="txtPantLength" >
                        </div>
                        <div class="form-group">
                            <label for="txtPantInnerLength">Pant Inner Length</label>
                            <input type="number" class="form-control" name="txtPantInnerLength" id="txtPantInnerLength" >
                        </div>
                        <div class="form-group">
                            <label for="txtPantHip">Pant Hip</label>
                            <input type="number" class="form-control" name="txtPantHip" id="txtPantHip" >
                        </div>
                        <div class="form-group">
                            <label for="txtPantWaist">Pant Waist</label>
                            <input type="number" class="form-control" name="txtPantWaist" id="txtPantWaist" >
                        </div>
                        <div class="form-group">
                            <label for="txtPantThigh">Pant Thigh</label>
                            <input type="number" class="form-control" name="txtPantThigh" id="txtPantThigh" >
                        </div>
                        <div class="form-group">
                            <label for="txtPantKnee">Pant Knee</label>
                            <input type="number" class="form-control" name="txtPantKnee" id="txtPantKnee" >
                        </div>
                        <div class="form-group">
                            <label for="txtPantBottom">Pant Bottom</label>
                            <input type="number" class="form-control" name="txtPantBottom" id="txtPantBottom" >
                        </div>
                        <div class="form-group">
                            <label for="cmbPantPocket">Pant Pocket</label>
                            <input type="text" class="form-control" name="cmbPantPocket" id="cmbPantPocket" >
                        </div>
                        <div class="form-group">
                            <label for="cmbPantPlate">Pant Plate</label>
                            <input type="text" class="form-control" name="cmbPantPlate" id="cmbPantPlate" >
                        </div>
                        <div class="form-group">
                            <label for="txtShirtLength">Shirt Length</label>
                            <input type="number" class="form-control" name="txtShirtLength" id="txtShirtLength" >
                        </div>
                        <div class="form-group">
                            <label for="txtShirtChest">Shirt Chest</label>
                            <input type="number" class="form-control" name="txtShirtChest" id="txtShirtChest" >
                        </div>
                        <div class="form-group">
                            <label for="txtShirtStomach">Shirt Stomach</label>
                            <input type="number" class="form-control" name="txtShirtStomach" id="txtShirtStomach" >
                        </div>
                        <div class="form-group">
                            <label for="txtShirtShoulder">Shirt Shoulder</label>
                            <input type="number" class="form-control" name="txtShirtShoulder" id="txtShirtShoulder" >
                        </div>
                        <div class="form-group">
                            <label for="txtShirtSleeveFull">Shirt Sleeve Full</label>
                            <input type="number" class="form-control" name="txtShirtSleeveFull" id="txtShirtSleeveFull" >
                        </div>
                        <div class="form-group">
                            <label for="txtShirtSleeveHalf">Shirt Sleeve Half</label>
                            <input type="number" class="form-control" name="txtShirtSleeveHalf" id="txtShirtSleeveHalf" >
                        </div>
                        <div class="form-group">
                            <label for="txtShirtCollar">Shirt Collar</label>
                            <input type="number" class="form-control" name="txtShirtCollar" id="txtShirtCollar" >
                        </div>
                        <div class="form-group">
                            <label for="txtShirtCuff">Shirt Cuff</label>
                            <input type="number" class="form-control" name="txtShirtCuff" id="txtShirtCuff" >
                        </div>
                        <div class="form-group">
                            <label for="cmbShirtBackPlate">Shirt Back Plate</label>
                            <input type="text" class="form-control" name="cmbShirtBackPlate" id="cmbShirtBackPlate" >
                        </div>
                        <div class="form-group">
                            <label for="cmbShirtPatti">Shirt Patti</label>
                            <input type="text" class="form-control" name="cmbShirtPatti" id="cmbShirtPatti" >
                        </div>
                        <div class="form-group">
                            <label for="cmbShirtCut">Shirt Cut</label>
                            <input type="text" class="form-control" name="cmbShirtCut" id="cmbShirtCut" >
                        </div>
                        <div class="form-group">
                            <label for="cmbShirtShoulderClip">Shirt Shoulder Clip</label>
                            <input type="text" class="form-control" name="cmbShirtShoulderClip" id="cmbShirtShoulderClip" >
                        </div>
                        <div class="form-group">
                            <label for="cmbShirtAbovePocket">Shirt Above Pocket</label>
                            <input type="text" class="form-control" name="cmbShirtAbovePocket" id="cmbShirtAbovePocket" >
                        </div>
                        <div class="form-group">
                            <label for="txtKurtaLength">Kurta Length</label>
                            <input type="number" class="form-control" name="txtKurtaLength" id="txtKurtaLength" >
                        </div>
                        <div class="form-group">
                            <label for="txtKurtaChest">Kurta Chest</label>
                            <input type="number" class="form-control" name="txtKurtaChest" id="txtKurtaChest" >
                        </div>
                        <div class="form-group">
                            <label for="txtKurtaStomach">Kurta Stomach</label>
                            <input type="number" class="form-control" name="txtKurtaStomach" id="txtKurtaStomach" >
                        </div>
                        <div class="form-group">
                            <label for="txtKurtaShoulder">Kurta Shoulder</label>
                            <input type="number" class="form-control" name="txtKurtaShoulder" id="txtKurtaShoulder" >
                        </div>
                        <div class="form-group">
                            <label for="txtKurtaSleeve">Kurta Sleeve</label>
                            <input type="number" class="form-control" name="txtKurtaSleeve" id="txtKurtaSleeve" >
                        </div>
                        <div class="form-group">
                            <label for="txtKurtaCollar">Kurta Collar</label>
                            <input type="number" class="form-control" name="txtKurtaCollar" id="txtKurtaCollar" >
                        </div>
                        <div class="form-group">
                            <label for="txtKurtaFrontPlate">Kurta Front Plate</label>
                            <input type="text" class="form-control" name="txtKurtaFrontPlate" id="txtKurtaFrontPlate" >
                        </div>
                        <div class="form-group">
                            <label for="cmbKurtaPocketSide">Kurta Pocket Side</label>
                            <input type="text" class="form-control" name="cmbKurtaPocketSide" id="cmbKurtaPocketSide" >
                        </div>
                        <div class="form-group">
                            <label for="cmbKurtaShoulderClip">Kurta Shoulder Clip</label>
                            <input type="text" class="form-control" name="cmbKurtaShoulderClip" id="cmbKurtaShoulderClip" >
                        </div>
                        <div class="form-group">
                            <label for="cmbKurtaFrontPocket">Kurta Front Pocket</label>
                            <input type="text" class="form-control" name="cmbKurtaFrontPocket" id="cmbKurtaFrontPocket" >
                        </div>
                        <div class="form-group">
                            <label for="cmbKurtaPocketFlap">Kurta Pocket Flap</label>
                            <input type="text" class="form-control" name="cmbKurtaPocketFlap" id="cmbKurtaPocketFlap" >
                        </div>
                        <div class="form-group">
                            <label for="cmbKurtaStyle">Kurta Style</label>
                            <input type="text" class="form-control" name="cmbKurtaStyle" id="cmbKurtaStyle" >
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#measurementsTable').DataTable();

            $('.edit-btn').on('click', function() {
                const row = $(this).closest('tr');
                const data = row.find('td');

                $('#measurementId').val(data[0].innerText);
                $('#name').val(data[1].innerText);
                $('#address').val(data[2].innerText);
                $('#phone').val(data[3].innerText);
                $('#coatLength').val(data[4].innerText);
                $('#coatChest').val(data[5].innerText);
                $('#coatStomach').val(data[6].innerText);
                $('#coatHip').val(data[7].innerText);
                $('#coatShoulder').val(data[8].innerText);
                $('#coatSleeve').val(data[9].innerText);
                $('#cmbCoatStyle').val(data[10].innerText);
                $('#cmbCoatCollar').val(data[11].innerText);
                $('#cmbCoatCut').val(data[12].innerText);
                $('#cmbJacketStyle').val(data[13].innerText);
                $('#txtJacketBan').val(data[14].innerText);
                $('#txtPajamaLength').val(data[15].innerText);
                $('#txtPajamaHip').val(data[16].innerText);
                $('#txtPajamaWaist').val(data[17].innerText);
                $('#txtPajamaBottom').val(data[18].innerText);
                $('#cmbPajamaPlates').val(data[19].innerText);
                $('#cmbPajamaStyle').val(data[20].innerText);
                $('#cmbPajamaLastic').val(data[21].innerText);
                $('#txtPantLength').val(data[22].innerText);
                $('#txtPantInnerLength').val(data[23].innerText);
                $('#txtPantHip').val(data[24].innerText);
                $('#txtPantWaist').val(data[25].innerText);
                $('#txtPantThigh').val(data[26].innerText);
                $('#txtPantKnee').val(data[27].innerText);
                $('#txtPantBottom').val(data[28].innerText);
                $('#cmbPantPocket').val(data[29].innerText);
                $('#cmbPantPlate').val(data[30].innerText);
                $('#txtShirtLength').val(data[31].innerText);
                $('#txtShirtChest').val(data[32].innerText);
                $('#txtShirtStomach').val(data[33].innerText);
                $('#txtShirtShoulder').val(data[34].innerText);
                $('#txtShirtSleeveFull').val(data[35].innerText);
                $('#txtShirtSleeveHalf').val(data[36].innerText);
                $('#txtShirtCollar').val(data[37].innerText);
                $('#txtShirtCuff').val(data[38].innerText);
                $('#cmbShirtBackPlate').val(data[39].innerText);
                $('#cmbShirtPatti').val(data[40].innerText);
                $('#cmbShirtCut').val(data[41].innerText);
                $('#cmbShirtShoulderClip').val(data[42].innerText);
                $('#cmbShirtAbovePocket').val(data[43].innerText);
                $('#txtKurtaLength').val(data[44].innerText);
                $('#txtKurtaChest').val(data[45].innerText);
                $('#txtKurtaStomach').val(data[46].innerText);
                $('#txtKurtaShoulder').val(data[47].innerText);
                $('#txtKurtaSleeve').val(data[48].innerText);
                $('#txtKurtaCollar').val(data[49].innerText);
                $('#txtKurtaFrontPlate').val(data[50].innerText);
                $('#cmbKurtaPocketSide').val(data[51].innerText);
                $('#cmbKurtaShoulderClip').val(data[52].innerText);
                $('#cmbKurtaFrontPocket').val(data[53].innerText);
                $('#cmbKurtaPocketFlap').val(data[54].innerText);
                $('#cmbKurtaStyle').val(data[55].innerText);
                
                $('#editModal').modal('show');
            });
        });
    </script>
</body>
</html>
