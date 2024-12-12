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
                    <span><a class='genric-btn primary-border small' href='data2_ladies.php'>View Data</a></span>

                     </div>";
                    unset($_SESSION['status']);
                }
                ?>

                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Measurements</h2>
                    </div>
                    <div class="col-lg-11 offset-lg-1">
                        
                    <form class="form-contact " action="update_measurement_ladies.php" method="POST" id="" novalidate="novalidate">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($data['id']); ?>">
                        <!-- Shirt (Suit) Measurements -->
                              <div class="row">
                              <div class="col-sm-2">
                             <div class="form-group">
                                 <label for="txtId">ID</label>
                                 <input class="form-control valid" name="txtId" id="txtId" type="text" value="<?php echo htmlspecialchars($data['txtId']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ID'" placeholder="ID">
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
                                 <input class="form-control valid" name="txtPhone" id="txtPhone" type="text"  value="<?php echo htmlspecialchars($data['txtPhone']); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" placeholder="Phone">
                             </div>
                         </div>
         <div class="col-12">
             <h2 class="contact-title">Shirt (Suit)</h2>
         </div>
         
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtShirtLength">Length</label>
                 <input class="form-control" name="txtShirtLength" id="txtShirtLength" type="text" value="<?php echo htmlspecialchars($data['txtShirtLength']); ?>" placeholder="Shirt Length">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtShirtChest">Chest</label>
                 <input class="form-control" name="txtShirtChest" id="txtShirtChest" type="text" value="<?php echo htmlspecialchars($data['txtShirtChest']); ?>" placeholder="Shirt Chest">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtShirtWaist">Waist</label>
                 <input class="form-control" name="txtShirtWaist" id="txtShirtWaist" type="text" value="<?php echo htmlspecialchars($data['txtShirtWaist']); ?>" placeholder="Shirt Waist">
             </div>
         </div>
         <div class="form-group">
                        <label for="txtShirtHip">Hip</label>
                        <input class="form-control" name="txtShirtHip" id="txtShirtHip" type="text" value="<?php echo htmlspecialchars($data['txtShirtHip']); ?>" placeholder="Shirt Hip">
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtShirtShoulder">Shoulder</label>
                 <input class="form-control" name="txtShirtShoulder" id="txtShirtShoulder" type="text" value="<?php echo htmlspecialchars($data['txtShirtShoulder']); ?>" placeholder="Shirt Shoulder">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtShirtSleeveFull">Sleeve Full</label>
                 <input class="form-control" name="txtShirtSleeveFull" id="txtShirtSleeveFull" type="text" value="<?php echo htmlspecialchars($data['txtShirtSleeveFull']); ?>" placeholder="Shirt Sleeve Full">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtShirtSleeveHalf">Sleeve Half</label>
                 <input class="form-control" name="txtShirtSleeveHalf" id="txtShirtSleeveHalf" type="text" value="<?php echo htmlspecialchars($data['txtShirtSleeveHalf']); ?>" placeholder="Shirt Sleeve Half">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtShirtCollarBan">Collar Ban</label>
                 <input class="form-control" name="txtShirtCollarBan" id="txtShirtCollarBan" type="text" value="<?php echo htmlspecialchars($data['txtShirtCollarBan']); ?>" placeholder="Shirt Collar/Ban">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtShirtNeckFront">Neck Front</label>
                 <input class="form-control" name="txtShirtNeckFront" id="txtShirtNeckFront" type="text" value="<?php echo htmlspecialchars($data['txtShirtNeckFront']); ?>" placeholder="Shirt Neck Front">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtShirtNeckBack">Neck Back</label>
                 <input class="form-control" name="txtShirtNeckBack" id="txtShirtNeckBack" type="text" value="<?php echo htmlspecialchars($data['txtShirtNeckBack']); ?>" placeholder="Shirt Neck Back">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="cmbShirtFrontPlate">Front Plate</label>
                 <select class="form-control" name="cmbShirtFrontPlate" id="cmbShirtFrontPlate">
                     <option value="">Please Select</option>
                     <option value="Side" <?php echo (isset($data['cmbShirtFrontPlate']) && $data['cmbShirtFrontPlate'] == 'Side') ? 'selected' : ''; ?>>Side</option>
                     <option value="Full" <?php echo (isset($data['cmbShirtFrontPlate']) && $data['cmbShirtFrontPlate'] == 'Full') ? 'selected' : ''; ?>>Full</option>
                 </select>
             </div>
         </div>
         <div class="col-sm-2">
                    <div class="form-group">
                        <label for="txtShirtPlateSize">Plate Size</label>
                        <input class="form-control" name="txtShirtPlateSize" id="txtShirtPlateSize" type="text" value="<?php echo htmlspecialchars($data['txtShirtPlateSize']); ?>" placeholder="Shirt Plate Size">
                    </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="cmbShirtBackPlate">Back Plate</label>
                 <select class="form-control" name="cmbShirtBackPlate" id="cmbShirtBackPlate">
                     <option value="">Please Select</option>
                     <option value="Yes" <?php echo (isset($data['cmbShirtBackPlate']) && $data['cmbShirtBackPlate'] == 'Yes') ? 'selected' : ''; ?>>Yes</option>
                     <option value="No" <?php echo (isset($data['cmbShirtBackPlate']) && $data['cmbShirtBackPlate'] == 'No') ? 'selected' : ''; ?>>No</option>
                 </select>
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtShirtGhera">Ghera</label>
                 <input class="form-control" name="txtShirtGhera" id="txtShirtGhera" type="text" value="<?php echo htmlspecialchars($data['txtShirtGhera']); ?>" placeholder="Shirt Ghera">
             </div>
         </div>
          </div>

         <!-- Salwar Measurements -->
         <div class="row">
         <div class="col-12">
             <h2 class="contact-title">Salwar</h2>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtSalwarLength">Length</label>
                 <input class="form-control" name="txtSalwarLength" id="txtSalwarLength" type="text" value="<?php echo htmlspecialchars($data['txtSalwarLength']); ?>" placeholder="Salwar Length">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtSalwarBottom">Bottom</label>
                 <input class="form-control" name="txtSalwarBottom" id="txtSalwarBottom" type="text" value="<?php echo htmlspecialchars($data['txtSalwarBottom']); ?>" placeholder="Salwar Bottom">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="cmbSalwarBelt">Belt</label>
                 <select class="form-control" name="cmbSalwarBelt" id="cmbSalwarBelt">
                     <option value="">Please Select</option>
                     <option value="With Belt" <?php echo (isset($data['cmbSalwarBelt']) && $data['cmbSalwarBelt'] == 'With Belt') ? 'selected' : ''; ?>>With Belt</option>
                     <option value="Without Belt" <?php echo (isset($data['cmbSalwarBelt']) && $data['cmbSalwarBelt'] == 'Without Belt') ? 'selected' : ''; ?>>Without Belt</option>
                 </select>
             </div>
         </div>
          </div>

          <!-- Pajami Measurements -->
          <div class="row">
         <div class="col-12">
             <h2 class="contact-title">Pajami</h2>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtPajamiLength">Length</label>
                 <input class="form-control" name="txtPajamiLength" id="txtPajamiLength" type="text" value="<?php echo htmlspecialchars($data['txtPajamiLength']); ?>" placeholder="Pajami Length">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtPajamiHip">Hip</label>
                 <input class="form-control" name="txtPajamiHip" id="txtPajamiHip" type="text" value="<?php echo htmlspecialchars($data['txtPajamiHip']); ?>" placeholder="Pajami Hip">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtPajamiHip">Bottom</label>
                 <input class="form-control" name="txtPajamiBottom" id="txtPajamiBottom" type="text" value="<?php echo htmlspecialchars($data['txtPajamiBottom']); ?>" placeholder="Pajami Bottom">
             </div>
         </div>
         </div>

          <!-- Plazo Measurements -->
         <div class="row">
         <div class="col-12">
             <h2 class="contact-title">Plazo</h2>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtPlazoLength">Length</label>
                 <input class="form-control" name="txtPlazoLength" id="txtPlazoLength" type="text" value="<?php echo htmlspecialchars($data['txtPlazoLength']); ?>"  placeholder="Plazo Length">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtPlazoHip">Hip</label>
                 <input class="form-control" name="txtPlazoHip" id="txtPlazoHip" type="text" value="<?php echo htmlspecialchars($data['txtPlazoHip']); ?>" placeholder="Plazo Hip">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtPlazoWaist">Waist</label>
                 <input class="form-control" name="txtPlazoWaist" id="txtPlazoWaist" type="text" value="<?php echo htmlspecialchars($data['txtPlazoWaist']); ?>" placeholder="Plazo Waist">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtPlazoBottom">Bottom</label>
                 <input class="form-control" name="txtPlazoBottom" id="txtPlazoBottom" type="text" value="<?php echo htmlspecialchars($data['txtPlazoBottom']); ?>" placeholder="Plazo Bottom">
             </div>
         </div>
         <div class="col-sm-2">
                    <div class="form-group">
                        <label for="cmbPlazoSideZip">Side Zip</label>
                        <select class="form-control" name="cmbPlazoSideZip" id="cmbPlazoSideZip">
                            <option value="">Please Select</option>
                            <option value="Yes" <?php echo (isset($data['cmbPlazoSideZip']) && $data['cmbPlazoSideZip'] == 'Yes') ? 'selected' : ''; ?>>Yes</option>
                            <option value="No" <?php echo (isset($data['cmbPlazoSideZip']) && $data['cmbPlazoSideZip'] == 'No') ? 'selected' : ''; ?>>No</option>
                        </select>
                     </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="cmbPlazoSidePocket">Side Pocket</label>
                        <select class="form-control" name="cmbPlazoSidePocket" id="cmbPlazoSidePocket">
                            <option value="">Please Select</option>
                            <option value="1" <?php echo (isset($data['cmbPlazoSidePocket']) && $data['cmbPlazoSidePocket'] == '1') ? 'selected' : ''; ?>>1</option>
                            <option value="2" <?php echo (isset($data['cmbPlazoSidePocket']) && $data['cmbPlazoSidePocket'] == '2') ? 'selected' : ''; ?>>2</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="cmbPlazoBelt">Belt</label>
                        <select class="form-control" name="cmbPlazoBelt" id="cmbPlazoBelt">
                            <option value="">Please Select</option>
                            <option value="Front Belt Back Lastic" <?php echo (isset($data['cmbPlazoBelt']) && $data['cmbPlazoBelt'] == 'Front Belt Back Lastic') ? 'selected' : ''; ?>>Front Belt Back Lastic</option>
                            <option value="Full Lastic" <?php echo (isset($data['cmbPlazoBelt']) && $data['cmbPlazoBelt'] == 'Full Lastic') ? 'selected' : ''; ?>>Full Lastic</option>
                        </select>
                    </div>
                </div>
         </div>

          <!-- Pant Formal Measurements -->
        <div class="row">
         <div class="col-12">
             <h2 class="contact-title">Pant Formal</h2>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtPantFormalLength">Length</label>
                 <input class="form-control" name="txtPantFormalLength" id="txtPantFormalLength" type="text" value="<?php echo htmlspecialchars($data['txtPantFormalLength']); ?>" placeholder="Pant Formal Length">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtPantFormalHalfLength">Half Length</label>
                 <input class="form-control" name="txtPantFormalHalfLength" id="txtPantFormalHalfLength" type="text" value="<?php echo htmlspecialchars($data['txtPantFormalHalfLength']); ?>" placeholder="Pant Formal Half Length">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtPantFormalHip">Hip</label>
                 <input class="form-control" name="txtPantFormalHip" id="txtPantFormalHip" type="text" value="<?php echo htmlspecialchars($data['txtPantFormalHip']); ?>" placeholder="Pant Formal Hip">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtPantFormalWaist">Waist</label>
                 <input class="form-control" name="txtPantFormalWaist" id="txtPantFormalWaist" type="text" value="<?php echo htmlspecialchars($data['txtPantFormalWaist']); ?>" placeholder="Pant Formal Waist">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtPantFormalThigh">Thigh</label>
                 <input class="form-control" name="txtPantFormalThigh" id="txtPantFormalThigh" type="text" value="<?php echo htmlspecialchars($data['txtPantFormalThigh']); ?>" placeholder="Pant Formal Thigh">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtPantFormalKnee">Knee</label>
                 <input class="form-control" name="txtPantFormalKnee" id="txtPantFormalKnee" type="text" value="<?php echo htmlspecialchars($data['txtPantFormalKnee']); ?>" placeholder="Pant Formal Knee">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtPantFormalBottom">Bottom</label>
                 <input class="form-control" name="txtPantFormalBottom" id="txtPantFormalBottom" type="text" value="<?php echo htmlspecialchars($data['txtPantFormalBottom']); ?>" placeholder="Pant Formal Bottom">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtPantFormalPocket">Pocket</label>
                 <input class="form-control" name="txtPantFormalPocket" id="txtPantFormalPocket" type="text" value="<?php echo htmlspecialchars($data['txtPantFormalPocket']); ?>" placeholder="Pant Formal Pocket">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtPantFormalBelt">Belt</label>
                 <input class="form-control" name="txtPantFormalBelt" id="txtPantFormalBelt" type="text" value="<?php echo htmlspecialchars($data['txtPantFormalBelt']); ?>" placeholder="Pant Formal Belt">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtPantFormalPlate">Plate</label>
                 <input class="form-control" name="txtPantFormalPlate" id="txtPantFormalPlate" type="text" value="<?php echo htmlspecialchars($data['txtPantFormalPlate']); ?>" placeholder="Pant Formal Plate">
             </div>
         </div>
        </div>

        <!-- Shirt Formal Measurements -->
        <div class="row">
         <div class="col-12">
             <h2 class="contact-title">Shirt Formal</h2>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtShirtFormalLength">Length</label>
                 <input class="form-control" name="txtShirtFormalLength" id="txtShirtFormalLength" type="text" value="<?php echo htmlspecialchars($data['txtShirtFormalLength']); ?>" placeholder="Shirt Formal Length">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtShirtFormalChest">Chest</label>
                 <input class="form-control" name="txtShirtFormalChest" id="txtShirtFormalChest" type="text" value="<?php echo htmlspecialchars($data['txtShirtFormalChest']); ?>" placeholder="Shirt Formal Chest">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtShirtFormalWaist">Waist</label>
                 <input class="form-control" name="txtShirtFormalWaist" id="txtShirtFormalWaist" type="text" value="<?php echo htmlspecialchars($data['txtShirtFormalWaist']); ?>" placeholder="Shirt Formal Waist">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtShirtFormalShoulder">Shoulder</label>
                 <input class="form-control" name="txtShirtFormalShoulder" id="txtShirtFormalShoulder" type="text" value="<?php echo htmlspecialchars($data['txtShirtFormalShoulder']); ?>" placeholder="Shirt Formal Shoulder">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtShirtFormalShoulder">Sleeve Full</label>
                 <input class="form-control" name="txtShirtFormalSleeveFull" id="txtShirtFormalSleeveFull" type="text" value="<?php echo htmlspecialchars($data['txtShirtFormalSleeveFull']); ?>" placeholder="Shirt Formal Sleeve Full">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtShirtFormalShoulder">Sleeve Half</label>
                 <input class="form-control" name="txtShirtFormalSleeveHalf" id="txtShirtFormalSleeveHalf" type="text" value="<?php echo htmlspecialchars($data['txtShirtFormalSleeveHalf']); ?>" placeholder="Shirt Formal Sleeve Half">
             </div>
         </div>
     
          <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtShirtFormalCollar">Collar</label>
                 <input class="form-control" name="txtShirtFormalCollar" id="txtShirtFormalCollar" type="text" value="<?php echo htmlspecialchars($data['txtShirtFormalCollar']); ?>" placeholder="Shirt Formal Collar">
             </div>
          </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="txtShirtFormalCuff">Cuff</label>
                 <input class="form-control" name="txtShirtFormalCuff" id="txtShirtFormalCuff" type="text" value="<?php echo htmlspecialchars($data['txtShirtFormalCuff']); ?>" placeholder="Shirt Formal Cuff">
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="cmbShirtFormalPlate">Plate</label>
                 <select class="form-control" name="cmbShirtFormalPlate" id="cmbShirtFormalPlate">
                     <option value="">Please Select</option>
                     <option value="Yes" <?php echo (isset($data['cmbShirtFormalPlate']) && $data['cmbShirtFormalPlate'] == 'Yes') ? 'selected' : ''; ?>>Yes</option>
                     <option value="No" <?php echo (isset($data['cmbShirtFormalPlate']) && $data['cmbShirtFormalPlate'] == 'No') ? 'selected' : ''; ?>>No</option>
                     <option value="Box" <?php echo (isset($data['cmbShirtFormalPlate']) && $data['cmbShirtFormalPlate'] == 'Box') ? 'selected' : ''; ?>>Box</option>
                    </select>
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="cmbShirtFormalPatti">Patti</label>
                 <select class="form-control" name="cmbShirtFormalPatti" id="cmbShirtFormalPatti">
                     <option value="">Please Select</option>
                     <option value="With Belt" <?php echo (isset($data['cmbShirtFormalPatti']) && $data['cmbShirtFormalPatti'] == 'With Belt') ? 'selected' : ''; ?>>With Belt</option>
                     <option value="Without Belt" <?php echo (isset($data['cmbShirtFormalPatti']) && $data['cmbShirtFormalPatti'] == 'Without Belt') ? 'selected' : ''; ?>>Without Belt</option>
                 </select>
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group">
                 <label for="cmbShirtFormalCut">Cut</label>
                 <select class="form-control" name="cmbShirtFormalCut" id="cmbShirtFormalCut">
                     <option value="">Please Select</option>
                     <option value="With Belt" <?php echo (isset($data['cmbShirtFormalCut']) && $data['cmbShirtFormalCut'] == 'With Belt') ? 'selected' : ''; ?>>With Belt</option>
                     <option value="Without Belt" <?php echo (isset($data['cmbShirtFormalCut']) && $data['cmbShirtFormalCut'] == 'Without Belt') ? 'selected' : ''; ?>>Without Belt</option>
                 </select>
             </div>
         </div>
        </div>
        <!-- Submit Button -->
       
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