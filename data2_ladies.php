<?php
session_start();
// Database connection
$servername = "localhost"; // Change as needed
$username = "u754798798_root"; // Change as needed
$password = "#Pgckot999"; // Change as needed
$dbname = "u754798798_measurement_db"; // Change to your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Fetch all entries
$sql = "SELECT * FROM measurements_ladies ORDER BY id DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BEDI TAILORS - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="./assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="manifest" href="site.webmanifest" />
    <link
        rel="shortcut icon"
        type="image/x-icon"
        href="./assets/img/favicon.ico" />

    <!-- CSS here -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="./assets/css/slicknav.css" />
    <link rel="stylesheet" href="./assets/css/flaticon.css" />
    <link rel="stylesheet" href="./assets/css/progressbar_barfiller.css" />
    <link rel="stylesheet" href="./assets/css/gijgo.css" />
    <link rel="stylesheet" href="./assets/css/animate.min.css" />
    <link rel="stylesheet" href="./assets/css/animated-headline.css" />
    <link rel="stylesheet" href="./assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="./assets/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="./assets/css/themify-icons.css" />
    <link rel="stylesheet" href="./assets/css/slick.css" />
    <link rel="stylesheet" href="./assets/css/nice-select.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <style>
      .card{
        box-shadow: 1px 1px 14px;
        padding: 28px;
            }
    </style>
</head>


<body>
    <!-- Header and Navigation -->
    <header>
      <!-- Header Start -->
      <div class="header-area header_area">
        <div class="main-header">
          <div class="header-bottom header-sticky">
            <!-- Logo -->
            <div class="logo">
              <a href="index.html">
                <!-- <img src="./assets/img/logo/logo.png" alt=""> -->
                <h2>Bedi Tailors</h2>
              </a>
            </div>
            <div class="header-left d-flex f-right align-items-center">
              <!-- Main-menu -->
              <div class="main-menu f-right d-none d-lg-block">
                <nav>
                  <ul id="navigation">
                    <li><a href="index.html">Home</a></li>
                    <li>
                      <a href="#">Dashboard</a>
                      <ul class="submenu">
                        <li><a href="data2.php">Gents Data</a></li>
                        <li><a href="data2_ladies.php">Ladies Data</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">measurements</a>
                      <ul class="submenu">
                        <li><a href="gents.php">Gents</a></li>
                        <li><a href="ladies.php">Ladies</a></li>
                        
                      </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                  </ul>
                </nav>
              </div>
              <!-- left Btn -->
              <!-- <div class="header-right-btn f-right d-none d-lg-block ml-30">
                <a href="#" class="header-btn">Visit Us</a>
              </div> -->
            </div>
            <!-- Mobile Menu -->
            <div class="col-12">
              <div class="mobile_menu d-block d-lg-none"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Header End -->
    </header>

    <!-- Dashboard Content -->
    <main>
        <div class="container card mt-5">

            <?php
            if (isset($_SESSION['status'])) {

                echo "<div class='alert alert-warning' role='alert'> <p>" . $_SESSION['status'] . "</p>
                   

                     </div>";
                unset($_SESSION['status']);
            }
            ?>


            <h2 class="text-center mb-4">Ladies Dashboard</h2>
            <div class="table-responsive">
                <table id="dashboardTable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Unique ID</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample Data Rows -->
                        <?php if ($result->num_rows > 0): ?>
                            <?php while ($data = $result->fetch_assoc()): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($data['txtId']); ?></td>
                                    <td><?php echo htmlspecialchars($data['txtName']); ?></td>
                                    <td><?php echo htmlspecialchars($data['txtAddress']); ?></td>
                                    <td><?php echo htmlspecialchars($data['txtPhone']); ?></td>
                                    <td>
                                        <!-- <button class="genric-btn primary circle small edit-btn" data-id="<?php echo $data['id']; ?>">Edit</button> -->
                                        <a href="edit_measurement_ladies.php?id=<?php echo $data['id']; ?>" class="genric-btn primary circle small">Edit</a>

                                        <a href="view_measurement2_ladies.php?id=<?php echo $data['id']; ?>" class="genric-btn info circle small">View</a>

                                        <button class="genric-btn danger circle small" onclick="confirmDelete(<?php echo $data['id']; ?>)">Delete</button>



                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="62">No records found</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"><i class="fas fa-level-up-alt"></i></a>
    </div>






    <!-- JS here -->

    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#dashboardTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'print'
                ]
            });





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
                $('#txtShirtF1').val(data[44].innerText);
                $('#txtShirtF2').val(data[45].innerText);
                $('#txtShirtF3').val(data[46].innerText);
                $('#txtShirtB1').val(data[47].innerText);
                $('#txtShirtB2').val(data[48].innerText);
                $('#txtShirtB3').val(data[49].innerText);
                $('#txtKurtaLength').val(data[50].innerText);
                $('#txtKurtaChest').val(data[51].innerText);
                $('#txtKurtaStomach').val(data[52].innerText);
                $('#txtKurtaShoulder').val(data[53].innerText);
                $('#txtKurtaSleeve').val(data[54].innerText);
                $('#txtKurtaCollar').val(data[55].innerText);
                $('#txtKurtaFrontPlate').val(data[56].innerText);
                $('#cmbKurtaPocketSide').val(data[57].innerText);
                $('#cmbKurtaShoulderClip').val(data[58].innerText);
                $('#cmbKurtaFrontPocket').val(data[59].innerText);
                $('#cmbKurtaPocketFlap').val(data[60].innerText);
                $('#cmbKurtaStyle').val(data[61].innerText);

                $('#editModal').modal('show');
            });




        });

        function confirmDelete(id) {
            if (confirm("Are you sure you want to delete this record?")) {
                window.location.href = 'delete_measurement_ladies.php?id=' + id;
            }
        }
    </script>
</body>

</html>