<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            height: 100vh;
            margin: 0;
        }
        .sidebar {
            width: 220px;
            background-color: #343a40;
            color: darkblue;
            display: flex;
            flex-direction: column;
            padding-top: 20px;
        }
        .sidebar a {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            display: flex;
            align-items: center;
        }
        .sidebar a:hover {
            background-color: darkblue;
        }
        .sidebar a i {
            margin-right: 10px;
        }
        .main-content {
            flex-grow: 1;
            padding: 10px;
        }
        /* Add margin for spacing between titles */
        h7.text-center {
            margin-bottom: 20px; /* Adjust the value for the desired spacing */
        }
        h {
            margin-top: 30px; /* Add some space above the dashboard title */
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h7 class="text-center">Student Management System</h7>
        <a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="#"><i class="fas fa-book"></i> Subjects</a>
        <a href="#"><i class="fas fa-user-graduate"></i> Students</a>
        <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <div class="main-content">
        <h>Dashboard</h>
        <div class="row">
            <div class="col-md-3">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">Number of Subjects:</div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo 3; // Replace with dynamic data ?>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">Number of Students:</div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo 2; // Replace with dynamic data ?>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-header">Number of Failed Students:</div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo 0; // Replace with dynamic data ?>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Number of Passed Students:</div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo 1; // Replace with dynamic data ?>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
