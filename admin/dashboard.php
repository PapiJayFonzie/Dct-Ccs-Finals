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
            background-color: #ffffff; /* Sidebar background color */
            color: blue;
            display: flex;
            flex-direction: column;
            border-right: 1px solid #ddd;
        }
        .sidebar .header {
            background-color: black; /* Black background for the header */
            color: white; /* White text color */
            padding: 10px; /* Adjusted padding */
            text-align: center;
            font-size: 0.9rem; /* Reduced font size */
        }
        .sidebar a {
            text-decoration: none;
            color: blue; /* Make links blue */
            padding: 10px 15px;
            display: flex;
            align-items: center;
            font-size: 0.9rem; /* Adjusted font size for smaller text */
        }
        .sidebar a:hover {
            background-color: #f0f0f0; /* Highlight link on hover with a light gray */
        }
        .sidebar a i {
            margin-right: 10px;
        }
        .sidebar .spacer {
            margin: 15px 0; /* Add vertical space between links */
        }
        .main-content {
            flex-grow: 1;
            padding: 20px; /* Add more padding around the content */
        }
        h4 {
            margin-top: 40px; /* Adjust spacing above the dashboard title */
            display: block; /* Ensure it behaves like a block-level element */
        }
        .row .card {
            margin-top: 15px; /* Add space below the dashboard row */
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="header">
            Student Management System
        </div>
        <a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="#"><i class="fas fa-book"></i> Subjects</a>
        <a href="#"><i class="fas fa-user-graduate"></i> Students</a>
        <div class="spacer"></div> <!-- Spacer for additional space -->
        <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <div class="main-content">
        <h4>Dashboard</h4>
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
