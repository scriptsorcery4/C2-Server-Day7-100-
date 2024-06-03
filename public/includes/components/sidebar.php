    <link rel="stylesheet" href="./public/css/sidebar.css">
</head>
<body>
    <section class='sidebar'>
        <div class='title'>
            <p>C2 - Server</p>
            <div>
                <div class='active-btn'>
                    <i class="bi bi-house-door-fill"></i>
                </div>
                <div class='deactive-btn'>
                    <i class="bi bi-envelope-plus-fill"></i>
                </div>
            </div>
        </div>
        <div class='nav-links'>
            <div class='profile'>
                <div class='avatar'>
                    <i class="bi bi-person-circle"></i>
                    <div>    
                </div>
                </div>
                <div class='details'>
                    <h4><?php echo $_SESSION['admin_username'];?></h4>
                    <p>Life goes on...</p>
                </div>
            </div>
            <div class='links'>
                <h6>BROWSE</h6>
                <ul>
                    <a href="./dashboard.php">
                        <li>
                            <i class="bi bi-house-door-fill"></i>
                            <span>Dashboard</span>

                        </li>
                    </a>
                    <a href="./generatebecon.php">
                        <li>
                            <i class="bi bi-patch-plus-fill"></i>
                            <span>Genetare Beacon</span>
                        </li>
                    </a>
                    <a href="./beacons.php">
                        <li>
                            <i class="bi bi-list-ul"></i>
                            <span>All Beacon</span>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
        <div class='logout'>
            <a href="./logout.php">
                <i class="bi bi-box-arrow-left"></i>
                <span>Logout</span>
            </a>
        </div>
    </section>
</body>
</html>