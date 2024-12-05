<?php
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

// Get the ID from the URL parameter
$id = $_GET['id'] ?? null;

if ($id) {
    // Fetch data for the specific ID
    $stmt = $conn->prepare("SELECT * FROM measurements WHERE id = ?");
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

<!Doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bedi Tailors|Gents</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="./assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css/slicknav.css">
    <link rel="stylesheet" href="./assets/css/flaticon.css">
    <link rel="stylesheet" href="./assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="./assets/css/gijgo.css">
    <link rel="stylesheet" href="./assets/css/animate.min.css">
    <link rel="stylesheet" href="./assets/css/animated-headline.css">
    <link rel="stylesheet" href="./assets/css/magnific-popup.css">
    <link rel="stylesheet" href="./assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="./assets/css/themify-icons.css">
    <link rel="stylesheet" href="./assets/css/slick.css">
    <link rel="stylesheet" href="./assets/css/nice-select.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
        .row {
            margin-bottom: 27px;
        }

        .contact-title {
            font-size: 23px;
        }
    </style>
</head>

<body>

    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <!-- <img src="./assets/img/logo/loder.png" alt=""> -->
                    <h2>Bedi Tailors</h2>
                </div>
            </div>
        </div>
    </div>

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




    <main>
        <!--?  Contact Area start  -->
        <section class="contact-section">
            <div class="container">
                <?php
                if (isset($_SESSION['status'])) {

                    echo "<div class='alert alert-warning' role='alert'> <p>" . $_SESSION['status'] . "</p>
                    <span><a class='genric-btn primary-border small' href='data2.php'>View Data</a></span>

                     </div>";
                    unset($_SESSION['status']);
                }
                ?>

                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Measurements</h2>
                    </div>
                    <div class="col-lg-11 offset-lg-1">
                        <form class="form-contact " id="editForm" method="POST" action="update_measurement.php">
                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($data['id']); ?>">

                            <div class="row">
                            <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtId">ID</label>
                                        <input class="form-control valid" name="txtId" id="txtId" type="text" value="<?php echo htmlspecialchars($data['txtId']); ?>">

                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtName">Name</label>
                                        <input class="form-control valid" name="txtName" id="txtName" type="text" value="<?php echo htmlspecialchars($data['txtName']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" placeholder="Name">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtAddress">Address</label>
                                        <input class="form-control valid" name="txtAddress" id="txtAddress" type="text" value="<?php echo htmlspecialchars($data['txtAddress']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" placeholder="Address">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtPhone">Phone</label>
                                        <input class="form-control valid" name="txtPhone" id="txtPhone" type="text" value="<?php echo htmlspecialchars($data['txtPhone']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" placeholder="Phone">
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-12">
                                    <h2 class="contact-title">Coat</h2>
                                </div>
                               

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtCoatLength">Coat Length</label>
                                        <input class="form-control valid" name="txtCoatLength" id="txtCoatLength" type="text" value="<?php echo htmlspecialchars($data['txtCoatLength']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Coat Length'" placeholder="Coat Length">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtCoatChest">Coat Chest</label>
                                        <input class="form-control valid" name="txtCoatChest" id="txtCoatChest" type="text" value="<?php echo htmlspecialchars($data['txtCoatChest']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Coat Chest'" placeholder="Coat Chest">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtCoatStomach">Coat Stomach</label>
                                        <input class="form-control valid" name="txtCoatStomach" id="txtCoatStomach" type="text" value="<?php echo htmlspecialchars($data['txtCoatStomach']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Coat Stomach'" placeholder="Coat Stomach">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtCoatHip">Coat Hip</label>
                                        <input class="form-control valid" name="txtCoatHip" id="txtCoatHip" type="text" value="<?php echo htmlspecialchars($data['txtCoatHip']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Coat Hip'" placeholder="Coat Hip">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtCoatShoulder">Coat Shoulder</label>
                                        <input class="form-control valid" name="txtCoatShoulder" id="txtCoatShoulder" type="text" value="<?php echo htmlspecialchars($data['txtCoatShoulder']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Coat Shoulder'" placeholder="Coat Shoulder">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtCoatSleeve">Coat Sleeve</label>
                                        <input class="form-control valid" name="txtCoatSleeve" id="txtCoatSleeve" type="text" value="<?php echo htmlspecialchars($data['txtCoatSleeve']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Coat Sleeve'" placeholder="Coat Sleeve">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="cmbCoatStyle">Coat Style</label>
                                        <select class="form-control valid" id="cmbCoatStyle" name="cmbCoatStyle">
                                            <option value="">Please Select</option>
                                            <option value="2 BUTTON" <?php echo (isset($data['cmbCoatStyle']) && $data['cmbCoatStyle'] == '2 BUTTON') ? 'selected' : ''; ?>>2 BUTTON</option>
                                            <option value="3 BUTTON" <?php echo (isset($data['cmbCoatStyle']) && $data['cmbCoatStyle'] == '3 BUTTON') ? 'selected' : ''; ?>>3 BUTTON</option>
                                            <option value="NEHRU STYLE" <?php echo (isset($data['cmbCoatStyle']) && $data['cmbCoatStyle'] == 'NEHRU STYLE') ? 'selected' : ''; ?>>NEHRU STYLE</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="cmbCoatCollar">Coat Collar</label>
                                        <select class="form-control valid" id="cmbCoatCollar" name="cmbCoatCollar">
                                            <option value="">Please Select</option>
                                            <option value="DOUBLE PRESS" <?php echo (isset($data['cmbCoatCollar']) && $data['cmbCoatCollar'] == 'DOUBLE PRESS') ? 'selected' : ''; ?>>DOUBLE PRESS</option>
                                            <option value="SINGLE PRESS" <?php echo (isset($data['cmbCoatCollar']) && $data['cmbCoatCollar'] == 'SINGLE PRESS') ? 'selected' : ''; ?>>SINGLE PRESS</option>
                                            <option value="Gown Collar" <?php echo (isset($data['cmbCoatCollar']) && $data['cmbCoatCollar'] == 'Gown Collar') ? 'selected' : ''; ?>>Gown Collar</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="cmbCoatCut">Coat Cut</label>
                                        <select class="form-control valid" id="cmbCoatCut" name="cmbCoatCut">
                                            <option value="">Please Select</option>
                                            <option value="BACK Cut" <?php echo (isset($data['cmbCoatCut']) && $data['cmbCoatCut'] == 'BACK Cut') ? 'selected' : ''; ?>>BACK Cut</option>
                                            <option value="SIDE Cut" <?php echo (isset($data['cmbCoatCut']) && $data['cmbCoatCut'] == 'SIDE Cut') ? 'selected' : ''; ?>>SIDE Cut</option>
                                            <option value="NO Cut" <?php echo (isset($data['cmbCoatCut']) && $data['cmbCoatCut'] == 'NO Cut') ? 'selected' : ''; ?>>NO Cut</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <h2 class="contact-title">Jacket</h2>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="cmbJacketStyle">Jacket Style</label>
                                        <select class="form-control valid" id="cmbJacketStyle" name="cmbJacketStyle">
                                            <option value="">Please Select</option>
                                            <option value="V-NECK" <?php echo (isset($data['cmbJacketStyle']) && $data['cmbJacketStyle'] == 'V-NECK') ? 'selected' : ''; ?>>V-NECK</option>
                                            <option value="NEHRU STYLE" <?php echo (isset($data['cmbJacketStyle']) && $data['cmbJacketStyle'] == 'NEHRU STYLE') ? 'selected' : ''; ?>>NEHRU STYLE</option>
                                            <option value="DOUBLE BREAST" <?php echo (isset($data['cmbJacketStyle']) && $data['cmbJacketStyle'] == 'DOUBLE BREAST') ? 'selected' : ''; ?>>DOUBLE BREAST</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtJacketBan">Jacket Ban</label>
                                        <input class="form-control valid" name="txtJacketBan" id="txtJacketBan" type="text" value="<?php echo htmlspecialchars($data['txtJacketBan']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Jacket Ban'" placeholder="Jacket Ban">
                                    </div>
                                </div>
                            </div>




                            <div class="row">
                                <div class="col-12">
                                    <h2 class="contact-title">Pant</h2>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtPantLength">Pant Length</label>
                                        <input class="form-control valid" name="txtPantLength" id="txtPantLength" type="text" value="<?php echo htmlspecialchars($data['txtPantLength']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pant Length'" placeholder="Pant Length">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtPantInnerLength">Pant Inner Length</label>
                                        <input class="form-control valid" name="txtPantInnerLength" id="txtPantInnerLength" type="text" value="<?php echo htmlspecialchars($data['txtPantInnerLength']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pant Inner Length'" placeholder="Pant Inner Length">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtPantHip">Pant Hip</label>
                                        <input class="form-control valid" name="txtPantHip" id="txtPantHip" type="text" value="<?php echo htmlspecialchars($data['txtPantHip']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pant Hip'" placeholder="Pant Hip">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtPantWaist">Pant Waist</label>
                                        <input class="form-control valid" name="txtPantWaist" id="txtPantWaist" type="text" value="<?php echo htmlspecialchars($data['txtPantWaist']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pant Waist'" placeholder="Pant Waist">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtPantThigh">Pant Thigh</label>
                                        <input class="form-control valid" name="txtPantThigh" id="txtPantThigh" type="text" value="<?php echo htmlspecialchars($data['txtPantThigh']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pant Thigh'" placeholder="Pant Thigh">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtPantKnee">Pant Knee</label>
                                        <input class="form-control valid" name="txtPantKnee" id="txtPantKnee" type="text" value="<?php echo htmlspecialchars($data['txtPantKnee']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pant Knee'" placeholder="Pant Knee">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtPantBottom">Pant Bottom</label>
                                        <input class="form-control valid" name="txtPantBottom" id="txtPantBottom" type="text" value="<?php echo htmlspecialchars($data['txtPantBottom']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pant Bottom'" placeholder="Pant Bottom">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="cmbPantPocket">Pant Pocket</label>
                                        <select class="form-control valid" id="cmbPantPocket" name="cmbPantPocket">
                                            <option value="">Please Select</option>
                                            <option value="Side" <?php echo (isset($data['cmbPantPocket']) && $data['cmbPantPocket'] == 'Side') ? 'selected' : ''; ?>>Side</option>
                                            <option value="cross"  <?php echo (isset($data['cmbPantPocket']) && $data['cmbPantPocket'] == 'cross') ? 'selected' : ''; ?>>cross</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="cmbPantPlate">Pant Plate</label>
                                        <select class="form-control valid" id="cmbPantPlate" name="cmbPantPlate">
                                            <option value="">Please Select</option>
                                            <option value="No" <?php echo (isset($data['cmbPantPlate']) && $data['cmbPantPlate'] == 'No') ? 'selected' : ''; ?>>No</option>
                                            <option value="1" <?php echo (isset($data['cmbPantPlate']) && $data['cmbPantPlate'] == '1') ? 'selected' : ''; ?>>1</option>
                                            <option value="2" <?php echo (isset($data['cmbPantPlate']) && $data['cmbPantPlate'] == '2') ? 'selected' : ''; ?>>2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="contact-title">Shirt</h2>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtShirtLength">Shirt Length</label>
                                        <input class="form-control valid" name="txtShirtLength" id="txtShirtLength" type="text" value="<?php echo htmlspecialchars($data['txtShirtLength']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Shirt Length'" placeholder="Shirt Length">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtShirtChest">Shirt Chest</label>
                                        <input class="form-control valid" name="txtShirtChest" id="txtShirtChest" type="text" value="<?php echo htmlspecialchars($data['txtShirtChest']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Shirt Chest'" placeholder="Shirt Chest">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtShirtStomach">Shirt Stomach</label>
                                        <input class="form-control valid" name="txtShirtStomach" id="txtShirtStomach" type="text" value="<?php echo htmlspecialchars($data['txtShirtStomach']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Shirt Stomach'" placeholder="Shirt Stomach">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtShirtShoulder">Shirt Shoulder</label>
                                        <input class="form-control valid" name="txtShirtShoulder" id="txtShirtShoulder" type="text" value="<?php echo htmlspecialchars($data['txtShirtShoulder']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Shirt Shoulder'" placeholder="Shirt Shoulder">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtShirtSleeveFull">Shirt Sleeve Full</label>
                                        <input class="form-control valid" name="txtShirtSleeveFull" id="txtShirtSleeveFull" type="text" value="<?php echo htmlspecialchars($data['txtShirtSleeveFull']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Shirt Sleeve Full'" placeholder="Shirt Sleeve Full">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtShirtSleeveHalf">Shirt Sleeve Half</label>
                                        <input class="form-control valid" name="txtShirtSleeveHalf" id="txtShirtSleeveHalf" type="text" value="<?php echo htmlspecialchars($data['txtShirtSleeveHalf']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Shirt Sleeve Half'" placeholder="Shirt Sleeve Half">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtShirtCollar">Shirt Collar</label>
                                        <input class="form-control valid" name="txtShirtCollar" id="txtShirtCollar" type="text" value="<?php echo htmlspecialchars($data['txtShirtCollar']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Shirt Collar'" placeholder="Shirt Collar">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtShirtCuff">Shirt Cuff</label>
                                        <input class="form-control valid" name="txtShirtCuff" id="txtShirtCuff" type="text" value="<?php echo htmlspecialchars($data['txtShirtCuff']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Shirt Cuff'" placeholder="Shirt Cuff">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="cmbShirtBackPlate">Shirt Back Plate</label>
                                        <select class="form-control valid" id="cmbShirtBackPlate" name="cmbShirtBackPlate">
                                            <option value="">Please Select</option>
                                            <option value="YES" <?php echo (isset($data['cmbShirtBackPlate']) && $data['cmbShirtBackPlate'] == 'YES') ? 'selected' : ''; ?>>YES</option>
                                            <option value="NO" <?php echo (isset($data['cmbShirtBackPlate']) && $data['cmbShirtBackPlate'] == 'NO') ? 'selected' : ''; ?>>NO</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="cmbShirtPatti">Shirt Patti</label>
                                        <select class="form-control valid" id="cmbShirtPatti" name="cmbShirtPatti">
                                            <option value="">Please Select</option>
                                            <option value="INSIDE" <?php echo (isset($data['cmbShirtPatti']) && $data['cmbShirtPatti'] == 'INSIDE') ? 'selected' : ''; ?>>INSIDE</option>
                                            <option value="OUTSIDE" <?php echo (isset($data['cmbShirtPatti']) && $data['cmbShirtPatti'] == 'OUTSIDE') ? 'selected' : ''; ?>>OUTSIDE</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="cmbShirtCut">Shirt Cut</label>
                                        <select class="form-control valid" id="cmbShirtCut" name="cmbShirtCut">
                                            <option value="">Please Select</option>
                                            <option value="STRAIGHT" <?php echo (isset($data['cmbShirtCut']) && $data['cmbShirtCut'] == 'STRAIGHT') ? 'selected' : ''; ?>>STRAIGHT</option>
                                            <option value="AMERICAN" <?php echo (isset($data['cmbShirtCut']) && $data['cmbShirtCut'] == 'AMERICAN') ? 'selected' : ''; ?>>AMERICAN</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="cmbShirtShoulderClip">Shirt Shoulder Clip</label>
                                        <select class="form-control valid" id="cmbShirtShoulderClip" name="cmbShirtShoulderClip">
                                            <option value="">Please Select</option>
                                            <option value="YES" <?php echo (isset($data['cmbShirtShoulderClip']) && $data['cmbShirtShoulderClip'] == 'YES') ? 'selected' : ''; ?>>YES</option>
                                            <option value="NO" <?php echo (isset($data['cmbShirtShoulderClip']) && $data['cmbShirtShoulderClip'] == 'NO') ? 'selected' : ''; ?>>NO</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="cmbShirtAbovePocket">Shirt Above Pocket</label>
                                        <select class="form-control valid" id="cmbShirtAbovePocket" name="cmbShirtAbovePocket">
                                            <option value="">Please Select</option>
                                            <option value="ONE" <?php echo (isset($data['cmbShirtAbovePocket']) && $data['cmbShirtAbovePocket'] == 'ONE') ? 'selected' : ''; ?>>ONE</option>
                                            <option value="TWO" <?php echo (isset($data['cmbShirtAbovePocket']) && $data['cmbShirtAbovePocket'] == 'TWO') ? 'selected' : ''; ?>>TWO</option>
                                            <option value="NO" <?php echo (isset($data['cmbShirtAbovePocket']) && $data['cmbShirtAbovePocket'] == 'NO') ? 'selected' : ''; ?>>NO</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtShirtF1">F1</label>
                                        <input class="form-control valid" name="txtShirtF1" id="txtShirtF1" type="text" value="<?php echo htmlspecialchars($data['txtShirtF1']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'F1'" placeholder="F1">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtShirtF2">F2</label>
                                        <input class="form-control valid" name="txtShirtF2" id="txtShirtF2" type="text" value="<?php echo htmlspecialchars($data['txtShirtF2']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'F2'" placeholder="F2">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtShirtF3">F3</label>
                                        <input class="form-control valid" name="txtShirtF3" id="txtShirtF3" type="text" value="<?php echo htmlspecialchars($data['txtShirtF3']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'F3'" placeholder="F3">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtShirtB1">B1</label>
                                        <input class="form-control valid" name="txtShirtB1" id="txtShirtB1" type="text" value="<?php echo htmlspecialchars($data['txtShirtB1']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'B1'" placeholder="B1">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtShirtB2">B2</label>
                                        <input class="form-control valid" name="txtShirtB2" id="txtShirtB2" type="text" value="<?php echo htmlspecialchars($data['txtShirtB2']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'B2'" placeholder="B2">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtShirtB3">B3</label>
                                        <input class="form-control valid" name="txtShirtB3" id="txtShirtB3" type="text" value="<?php echo htmlspecialchars($data['txtShirtB3']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'B3'" placeholder="B3">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <h2 class="contact-title">Kurta</h2>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtKurtaLength">Kurta Length</label>
                                        <input class="form-control valid" name="txtKurtaLength" id="txtKurtaLength" type="text" value="<?php echo htmlspecialchars($data['txtKurtaLength']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kurta Length'" placeholder="Kurta Length">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtKurtaChest">Kurta Chest</label>
                                        <input class="form-control valid" name="txtKurtaChest" id="txtKurtaChest" type="text" value="<?php echo htmlspecialchars($data['txtKurtaChest']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kurta Chest'" placeholder="Kurta Chest">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtKurtaStomach">Kurta Stomach</label>
                                        <input class="form-control valid" name="txtKurtaStomach" id="txtKurtaStomach" type="text" value="<?php echo htmlspecialchars($data['txtKurtaStomach']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kurta Stomach'" placeholder="Kurta Stomach">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtKurtaShoulder">Kurta Shoulder</label>
                                        <input class="form-control valid" name="txtKurtaShoulder" id="txtKurtaShoulder" type="text" value="<?php echo htmlspecialchars($data['txtKurtaShoulder']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kurta Shoulder'" placeholder="Kurta Shoulder">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtKurtaSleeve">Kurta Sleeve</label>
                                        <input class="form-control valid" name="txtKurtaSleeve" id="txtKurtaSleeve" type="text" value="<?php echo htmlspecialchars($data['txtKurtaSleeve']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kurta Sleeve'" placeholder="Kurta Sleeve">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtKurtaCollar">Kurta Collar</label>
                                        <input class="form-control valid" name="txtKurtaCollar" id="txtKurtaCollar" type="text" value="<?php echo htmlspecialchars($data['txtKurtaCollar']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kurta Collar'" placeholder="Kurta Collar">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtKurtaCuff">Kurta Cuff</label>
                                        <input class="form-control valid" name="txtKurtaCuff" id="txtKurtaCuff" type="text" value="<?php echo htmlspecialchars($data['txtKurtaCuff']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kurta Cuff'" placeholder="Kurta Cuff">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="cmbKurtaFrontPlate">Kurta Front Plate</label>
                                        <select class="form-control valid" id="cmbKurtaFrontPlate" name="cmbKurtaFrontPlate">
                                            <option value="">Please Select</option>
                                            <option value="YES" <?php echo (isset($data['cmbKurtaFrontPlate']) && $data['cmbKurtaFrontPlate'] == 'YES') ? 'selected' : ''; ?>>YES</option>
                                            <option value="NO" <?php echo (isset($data['cmbKurtaFrontPlate']) && $data['cmbKurtaFrontPlate'] == 'NO') ? 'selected' : ''; ?>>NO</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="cmbKurtaPocketSide">Kurta Pocket Side</label>
                                        <select class="form-control valid" id="cmbKurtaPocketSide" name="cmbKurtaPocketSide">
                                            <option value="">Please Select</option>
                                            <option value="1" <?php echo (isset($data['cmbKurtaPocketSide']) && $data['cmbKurtaPocketSide'] == '1') ? 'selected' : ''; ?>>1</option>
                                            <option value="2" <?php echo (isset($data['cmbKurtaPocketSide']) && $data['cmbKurtaPocketSide'] == '2') ? 'selected' : ''; ?>>2</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="cmbKurtaShoulderClip">Kurta Shoulder Clip</label>
                                        <select class="form-control valid" id="cmbKurtaShoulderClip" name="cmbKurtaShoulderClip">
                                            <option value="">Please Select</option>
                                            <option value="YES" <?php echo (isset($data['cmbKurtaShoulderClip']) && $data['cmbKurtaShoulderClip'] == 'YES') ? 'selected' : ''; ?>>YES</option>
                                            <option value="NO" <?php echo (isset($data['cmbKurtaShoulderClip']) && $data['cmbKurtaShoulderClip'] == 'NO') ? 'selected' : ''; ?>>NO</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="cmbKurtaFrontPocket">Kurta Front Pocket</label>
                                        <select class="form-control valid" id="cmbKurtaFrontPocket" name="cmbKurtaFrontPocket">
                                            <option value="">Please Select</option>
                                            <option value="1" <?php echo (isset($data['cmbKurtaFrontPocket']) && $data['cmbKurtaFrontPocket'] == '1') ? 'selected' : ''; ?>>1</option>
                                            <option value="2" <?php echo (isset($data['cmbKurtaFrontPocket']) && $data['cmbKurtaFrontPocket'] == '2') ? 'selected' : ''; ?>>2</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="cmbKurtaPocketFlap">Kurta Pocket Flap</label>
                                        <select class="form-control valid" id="cmbKurtaPocketFlap" name="cmbKurtaPocketFlap">
                                            <option value="">Please Select</option>
                                            <option value="YES" <?php echo (isset($data['cmbKurtaPocketFlap']) && $data['cmbKurtaPocketFlap'] == 'YES') ? 'selected' : ''; ?>>YES</option>
                                            <option value="NO" <?php echo (isset($data['cmbKurtaPocketFlap']) && $data['cmbKurtaPocketFlap'] == 'NO') ? 'selected' : ''; ?>>NO</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="cmbKurtaStyle">Kurta Style</label>
                                        <select class="form-control valid" id="cmbKurtaStyle" name="cmbKurtaStyle">
                                            <option value="">Please Select</option>
                                            <option value="PUNJABI" <?php echo (isset($data['cmbKurtaStyle']) && $data['cmbKurtaStyle'] == 'PUNJABI') ? 'selected' : ''; ?>>PUNJABI</option>
                                            <option value="BENGALI" <?php echo (isset($data['cmbKurtaStyle']) && $data['cmbKurtaStyle'] == 'BENGALI') ? 'selected' : ''; ?>>BENGALI</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <h2 class="contact-title">Pajama</h2>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtPajamaLength">Pajama Length</label>
                                        <input class="form-control valid" name="txtPajamaLength" id="txtPajamaLength" type="text" value="<?php echo htmlspecialchars($data['txtPajamaLength']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pajama Length'" placeholder="Pajama Length">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtPajamaHip">Pajama Hip</label>
                                        <input class="form-control valid" name="txtPajamaHip" id="txtPajamaHip" type="text" value="<?php echo htmlspecialchars($data['txtPajamaHip']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pajama Hip'" placeholder="Pajama Hip">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtPajamaWaist">Pajama Waist</label>
                                        <input class="form-control valid" name="txtPajamaWaist" id="txtPajamaWaist" type="text" value="<?php echo htmlspecialchars($data['txtPajamaWaist']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pajama Waist'" placeholder="Pajama Waist">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtPajamaBottom">Pajama Bottom</label>
                                        <input class="form-control valid" name="txtPajamaBottom" id="txtPajamaBottom" type="text" value="<?php echo htmlspecialchars($data['txtPajamaBottom']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pajama Bottom'" placeholder="Pajama Bottom">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="cmbPajamaPlates">Pajama Plates</label>
                                        <select class="form-control valid" id="cmbPajamaPlates" name="cmbPajamaPlates">
                                            <option value="">Please Select</option>
                                            <option value="ONE" <?php echo (isset($data['cmbPajamaPlates']) && $data['cmbPajamaPlates'] == 'ONE') ? 'selected' : ''; ?>>ONE</option>
                                            <option value="TWO" <?php echo (isset($data['cmbPajamaPlates']) && $data['cmbPajamaPlates'] == 'TWO') ? 'selected' : ''; ?>>TWO</option>
                                            <option value="NO" <?php echo (isset($data['cmbPajamaPlates']) && $data['cmbPajamaPlates'] == 'NO') ? 'selected' : ''; ?>>NO</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="cmbPajamaStyle">Pajama Style</label>
                                        <select class="form-control valid" id="cmbPajamaStyle" name="cmbPajamaStyle">
                                            <option value="">Please Select</option>
                                            <option value="PANTCUT" <?php echo (isset($data['cmbPajamaStyle']) && $data['cmbPajamaStyle'] == 'PANTCUT') ? 'selected' : ''; ?>>PANTCUT</option>
                                            <option value="PANT STYLE" <?php echo (isset($data['cmbPajamaStyle']) && $data['cmbPajamaStyle'] == 'PANT STYLE') ? 'selected' : ''; ?>>PANT STYLE</option>
                                            <option value="SADA" <?php echo (isset($data['cmbPajamaStyle']) && $data['cmbPajamaStyle'] == 'SADA') ? 'selected' : ''; ?>>SADA</option>
                                            <option value="PANT CUT + MIANI" <?php echo (isset($data['cmbPajamaStyle']) && $data['cmbPajamaStyle'] == 'PANT CUT + MIANI') ? 'selected' : ''; ?>>PANT CUT + MIANI</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="cmbPajamaLastic">Pajama Lastic</label>
                                        <select class="form-control valid" id="cmbPajamaLastic" name="cmbPajamaLastic">
                                            <option value="">Please Select</option>
                                            <option value="YES" <?php echo (isset($data['cmbPajamaLastic']) && $data['cmbPajamaLastic'] == 'YES') ? 'selected' : ''; ?>>YES</option>
                                            <option value="NO"  <?php echo (isset($data['cmbPajamaLastic']) && $data['cmbPajamaLastic'] == 'NO') ? 'selected' : ''; ?>>NO</option>
                                            <option value="FRONT BELT BACK LASTIC"  <?php echo (isset($data['cmbPajamaLastic']) && $data['cmbPajamaLastic'] == 'FRONT BELT BACK LASTIC') ? 'selected' : ''; ?>>FRONT BELT BACK LASTIC</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">Update</button>
                        <a href="data2.php" class="btn btn-secondary">Cancel</a>

                    </div>
                    </form>
                </div>

            </div>



            </div>
        </section>
        <!-- Contact Area End -->
    </main>



    <footer>
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>

<?php
$stmt->close();
$conn->close();
?>