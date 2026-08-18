<?php

// Admin dashboard PHP code will go here later

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Restaurant Dashboard - Chatta-Fatta</title>

    <link rel="stylesheet" href="restaurant-index.css">

</head>


<body>


<!-- ==============================
     SIDEBAR
     ============================== -->

<aside class="sidebar">

    <div class="logo">

        <a href="index.php">
            🍴 Chatta-Fatta
        </a>

        <p>Restaurant Panel</p>

    </div>


    <!-- Navigation -->

    <nav class="sidebar-nav">

        <p class="nav-title">MAIN</p>

        <a href="index.php" class="nav-item active">
            <span>📊</span>
            Dashboard
        </a>


        <a href="orders.php" class="nav-item">
            <span>📦</span>
            Manage Orders
        </a>


       


        <p class="nav-title">FOOD MANAGEMENT</p>


        <a href="add-food.php" class="nav-item">
            <span>➕</span>
            Add Food
        </a>


        <a href="food.php" class="nav-item">
            <span>🍔</span>
            Manage Food
        </a>


        <a href="add-categories.php" class="nav-item">
            <span>📂</span>
            Add Category
        </a>


        <a href="categories.php" class="nav-item">
            <span>🗂️</span>
            Categories
        </a>


        <p class="nav-title">BUSINESS</p>


        <a href="customers.php" class="nav-item">
            <span>👥</span>
            Customers
        </a>


        <a href="reports.php" class="nav-item">
            <span>📈</span>
            Sales & Reports
        </a>


        <a href="restaurant-profile.php" class="nav-item">
            <span>🏪</span>
            Restaurant Profile
        </a>


        <a href="notifications.php" class="nav-item">
            <span>🔔</span>
            Notifications
            <span class="badge notification">3</span>
        </a>

    </nav>


    <!-- Logout -->

    <div class="sidebar-bottom">

        <a href="logout.php" class="logout-btn">
            🚪 Logout
        </a>

    </div>

</aside>



<!-- ==============================
     MAIN CONTENT
     ============================== -->

<main class="main-content">


    <!-- Top Header -->

    <header class="top-header">

        <div>

            <h1>Dashboard</h1>

            <p>
                Welcome back! Here's what's happening with your restaurant today.
            </p>

        </div>


        <div class="admin-profile">

            <div class="notification-icon">
                🔔
                <span>3</span>
            </div>


            <div class="profile-info">

                <strong>Restaurant Admin</strong>


                <small>Administrator</small>
                <!-- <a href="restaurant-login.php">Login</a> -->

            </div>


            <div class="profile-avatar">
                RA
            </div>

        </div>

    </header>



    <!-- ==============================
         QUICK ACTIONS
         ============================== -->

    <section class="quick-section">

        <h2>Quick Actions</h2>


        <div class="quick-actions">

            <a href="add-food.php" class="quick-card">

                <div class="quick-icon purple">
                    🍔
                </div>

                <div>
                    <h3>Add Food</h3>
                    <p>Add a new food item</p>
                </div>

            </a>


            <a href="add-categories.php" class="quick-card">

                <div class="quick-icon orange">
                    📂
                </div>

                <div>
                    <h3>Add Category</h3>
                    <p>Create a food category</p>
                </div>

            </a>


            <a href="live-orders.php" class="quick-card">

                <div class="quick-icon red">
                    🔴
                </div>

                <div>
                    <h3>Live Orders</h3>
                    <p>View incoming orders</p>
                </div>

            </a>


            <a href="reports.php" class="quick-card">

                <div class="quick-icon green">
                    📈
                </div>

                <div>
                    <h3>View Reports</h3>
                    <p>Check restaurant sales</p>
                </div>

            </a>

        </div>

    </section>



    <!-- ==============================
         STATISTICS
         ============================== -->

    <section class="stats-section">


        <div class="stat-card">

            <div class="stat-icon purple">
                📦
            </div>

            <div>

                <p>Total Orders</p>

                <h2>128</h2>

                <span class="positive">
                    ↑ 12.5%
                </span>

                <small>
                    vs last month
                </small>

            </div>

        </div>



        <div class="stat-card">

            <div class="stat-icon green">
                💰
            </div>

            <div>

                <p>Total Revenue</p>

                <h2>Rs. 84,500</h2>

                <span class="positive">
                    ↑ 8.2%
                </span>

                <small>
                    vs last month
                </small>

            </div>

        </div>



        <div class="stat-card">

            <div class="stat-icon orange">
                🍔
            </div>

            <div>

                <p>Total Food Items</p>

                <h2>42</h2>

                <span class="neutral">
                    5 new
                </span>

                <small>
                    this month
                </small>

            </div>

        </div>



        <div class="stat-card">

            <div class="stat-icon blue">
                👥
            </div>

            <div>

                <p>Total Customers</p>

                <h2>356</h2>

                <span class="positive">
                    ↑ 15.4%
                </span>

                <small>
                    vs last month
                </small>

            </div>

        </div>

    </section>



    <!-- ==============================
         ORDER DASHBOARD
         ============================== -->

    <section class="dashboard-grid">


        <!-- Recent Orders -->

        <div class="dashboard-card orders-card">

            <div class="card-header">

                <div>

                    <h2>Recent Orders</h2>

                    <p>Latest restaurant orders</p>

                </div>

                <a href="orders.php">
                    View All
                </a>

            </div>


            <div class="table-container">

                <table>

                    <thead>

                        <tr>

                            <th>Order ID</th>

                            <th>Customer</th>

                            <th>Items</th>

                            <th>Amount</th>

                            <th>Status</th>

                        </tr>

                    </thead>


                    <tbody>

                        <tr>

                            <td>
                                #CF1025
                            </td>

                            <td>
                                Saphal
                            </td>

                            <td>
                                3 Items
                            </td>

                            <td>
                                Rs. 850
                            </td>

                            <td>
                                <span class="status preparing">
                                    Preparing
                                </span>
                            </td>

                        </tr>


                        <tr>

                            <td>
                                #CF1024
                            </td>

                            <td>
                                Ram
                            </td>

                            <td>
                                2 Items
                            </td>

                            <td>
                                Rs. 560
                            </td>

                            <td>
                                <span class="status delivered">
                                    Delivered
                                </span>
                            </td>

                        </tr>


                        <tr>

                            <td>
                                #CF1023
                            </td>

                            <td>
                                Hari
                            </td>

                            <td>
                                4 Items
                            </td>

                            <td>
                                Rs. 1,250
                            </td>

                            <td>
                                <span class="status pending">
                                    Pending
                                </span>
                            </td>

                        </tr>


                        <tr>

                            <td>
                                #CF1022
                            </td>

                            <td>
                                Anish
                            </td>

                            <td>
                                1 Item
                            </td>

                            <td>
                                Rs. 350
                            </td>

                            <td>
                                <span class="status cancelled">
                                    Cancelled
                                </span>
                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>



        <!-- Live Orders -->

        <div class="dashboard-card live-card">

            <div class="card-header">

                <div>

                    <h2>🔴 Live Orders</h2>

                    <p>Orders requiring attention</p>

                </div>

                <a href="live-orders.php">
                    View All
                </a>

            </div>


            <div class="live-orders">


                <div class="live-order">

                    <div class="order-info">

                        <strong>
                            #CF1025
                        </strong>

                        <span>
                            Saphal • 3 items
                        </span>

                    </div>


                    <div class="order-time">
                        5 min ago
                    </div>


                    <span class="status preparing">
                        Preparing
                    </span>

                </div>



                <div class="live-order">

                    <div class="order-info">

                        <strong>
                            #CF1026
                        </strong>

                        <span>
                            Bikash • 2 items
                        </span>

                    </div>


                    <div class="order-time">
                        2 min ago
                    </div>


                    <span class="status pending">
                        New
                    </span>

                </div>



                <div class="live-order">

                    <div class="order-info">

                        <strong>
                            #CF1027
                        </strong>

                        <span>
                            Ramesh • 5 items
                        </span>

                    </div>


                    <div class="order-time">
                        Just now
                    </div>


                    <span class="status pending">
                        New
                    </span>

                </div>

            </div>


            <a href="live-orders.php" class="manage-orders">
                Manage Live Orders →
            </a>

        </div>

    </section>



    <!-- ==============================
         LOWER SECTION
         ============================== -->

    <section class="lower-grid">


        <!-- Popular Food -->

        <div class="dashboard-card">

            <div class="card-header">

                <div>

                    <h2>Popular Food</h2>

                    <p>Best selling items</p>

                </div>

                <a href="foods.php">
                    Manage Food
                </a>

            </div>


            <div class="food-list">


                <div class="food-item">

                    <div class="food-image">
                        🍕
                    </div>

                    <div class="food-info">

                        <strong>
                            Chicken Pizza
                        </strong>

                        <span>
                            Pizza • 45 orders
                        </span>

                    </div>

                    <strong>
                        Rs. 450
                    </strong>

                </div>



                <div class="food-item">

                    <div class="food-image">
                        🍔
                    </div>

                    <div class="food-info">

                        <strong>
                            Chicken Burger
                        </strong>

                        <span>
                            Burger • 38 orders
                        </span>

                    </div>

                    <strong>
                        Rs. 280
                    </strong>

                </div>



                <div class="food-item">

                    <div class="food-image">
                        🍜
                    </div>

                    <div class="food-info">

                        <strong>
                            Chowmein
                        </strong>

                        <span>
                            Noodles • 32 orders
                        </span>

                    </div>

                    <strong>
                        Rs. 220
                    </strong>

                </div>

            </div>

        </div>



        <!-- Restaurant Status -->

        <div class="dashboard-card restaurant-status">

            <div class="card-header">

                <div>

                    <h2>Restaurant Status</h2>

                    <p>Current restaurant information</p>

                </div>

            </div>


            <div class="status-box">

                <div>

                    <strong>
                        Restaurant is Open
                    </strong>

                    <p>
                        Accepting new orders
                    </p>

                </div>


                <div class="online-dot"></div>

            </div>


            <div class="restaurant-info">

                <div>
                    <span>📍 Location</span>
                    <strong>Kathmandu, Nepal</strong>
                </div>


                <div>
                    <span>🕐 Opening Hours</span>
                    <strong>10:00 AM - 10:00 PM</strong>
                </div>


                <div>
                    <span>⭐ Rating</span>
                    <strong>4.8 / 5</strong>
                </div>

            </div>


            <a href="restaurant-profile.php"
               class="profile-button">

                Manage Restaurant Profile

            </a>

        </div>

    </section>


</main>


</body>

</html>