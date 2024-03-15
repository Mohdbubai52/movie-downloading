<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Dashboard using HTML CSS and JS</title>
    <!-- MATERIAL ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
    rel="stylesheet">
      <!-- STYLE SHEET CSS -->
    <link rel="stylesheet" href="assets/css/admin_css/admin_style.css">
    <link rel="stylesheet" href="assets/css/admin_css/media_queries.css">
</head>
<body class="admin_body">
    <div class="admin-container">
        <aside>
            <div class="admin-top">
                <div class="admin-logo">
                    <img src="./images/logo.png" alt="">
                    <h2>MMB<span class="danger">STORE</span></h2>
                </div>
                <div class="admin-close" id="close_btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
            <div class="admin-sidebar">
                <a href="admin_dashboard">
                    <span class="material-icons-sharp">
                        grid_view
                        </span>
                        <h3>Dashboard</h3>
                </a>
                <a href="tables" class="admin-active- .user-table">
                    <span class="material-icons-sharp">
                        perm_identity
                        </span>
                        <h3>Customers</h3>
                </a>
                <a href="#">
                   <span class="material-icons-sharp">assignment</span>
                        <h3>Order</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        insights
                        </span>
                        <h3>Analytics</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        mail
                        </span>
                        <h3>Messages</h3>
                        <span class="message-count">26</span>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        inventory
                        </span>
                        <h3>Product</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        report
                        </span>
                        <h3>Reports</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        settings
                        </span>
                        <h3>Settings</h3>
                </a>
                <a href="product_upload">
                    <span class="material-icons-sharp">
                        add
                        </span>
                        <h3>Add Product</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        logout
                        </span>
                        <h3>Log Out</h3>
                </a>
            </div>
        </aside>