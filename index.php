<?php
$title = "Finance Management";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="financereport.css">
    <title>Finance Management</title>
    <link rel="icon" href="SIS-logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">


    <!-- js -->
    <script src="financereport.js"></script>
</head>

<body style="padding:0">
    <header>
        <div class="header-content">
            <img src="SIS-logo.png"    alt="Student Information System Logo">
            <div>   
                <h1>Student Information System</h1>
                <h2>Finance</h2>
            </div>
        </div>
    </header>
    <main class="main">
        <aside class="sidebar">
            <nav aria-label="Main navigation">
                <ul>
                    <li><a href="../finance/"><span class="mdi mdi-account-school-outline"></span><span>Student Fees</span></a>
                    </li>
                    <li><a href="#"><span class="mdi mdi-invoice-list-outline"></span><span>Billing Invoicing</span></a>
                    </li>
                    <li><a href="#"><span class="mdi mdi-certificate-outline"></span> <span>Scholarship</span></a></li>
                    <li><a href="refund.html"><span class="mdi mdi-cash-refund"></span> <span>Refund</span></a></li>
                    <li><a href="#"><span class="mdi mdi-finance"></span> <span>Financial Report</span></a></li>
                    <li><a href="#"><span class="mdi mdi-monitor-eye"></span> <span>Audit Trail</span></a></li>
                </ul>
            </nav>
            <nav aria-label="User options">
                <ul>
                    <li ><a href="#"><span class="mdi mdi-logout"></span> <span>Logout</span></a></li>
                </ul>
            </nav>
        </aside>
        <section class="content">
            <div class="content-header">
                <button class="js-sidenav-toggle" aria-label="Toggle navigation menu">
                    <span class="mdi mdi-menu">
                        <i class="fa-solid fa-bars"></i>
                    </span>
                </button>
                <h3><?php echo $title ?></h3>
            </div>
            <article class="module-content" style="padding: 0 4rem;">
                <?php include 'finance.report.php'; ?>
            </article>
            
    </main>
    <footer>
        <address>
            <p>For inquiries please contact 000-0000<br>
                Email: sisfinance3220@gmail.com</p>
        </address>
        <p>&copy; 2025 Student Information System<br>All Rights Reserved</p>
    </footer>