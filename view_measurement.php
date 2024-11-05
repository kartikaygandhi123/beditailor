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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Measurement</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <style>
        .table td,
        .table th {
            padding: 8px;
            vertical-align: middle;
        }

        .card {

            margin: auto;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .table th {
            width: 30%;
            text-align: left;
            font-weight: 600;
        }

        .table-responsive {
            max-height: 600px;
            overflow: visible;
        }
    </style>
</head>

<body>
    <header>
        <div class="header-area header_area">
            <div class="main-header">
                <div class="header-bottom header-sticky">
                    <div class="logo">
                        <a href="index.html">
                            <h2>Bedi Tailors</h2>
                        </a>
                    </div>
                    <div class="header-left d-flex f-right align-items-center">
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="dashboard.html">Dashboard</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right-btn f-right d-none d-lg-block ml-30">
                            <a href="#" class="header-btn">Visit Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Measurement Details</h2>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display table table-bordered">
                        <thead>
                            <th>Measurements</th>
                            <th>Details</th>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $field => $value): ?>
                                <tr>
                                    <td><?php echo ucfirst(str_replace("_", " ", $field)); ?></td>
                                    <td><?php echo htmlspecialchars($value); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "order": [],
                lengthMenu: [10, 25, 50, 'All'],
                dom: 'Bfrtip',
                buttons: [
                    'print'
                ]
            });
        });
    </script>
</body>

</html>