<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/home-admin.css">
    <!-- <link rel="stylesheet" href="./assets/sb-admin-2.css"> -->
    <link rel="stylesheet" href="./assets/componentstyle.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Quản lý đơn hàng</title>
</head>

<body>
    <div class="sidebar close">
        <div class="logo-details">
            <span class="logo_header ">Quản lý đơn hàng</span>
        </div>
        <ul class="nav-links">
            <li> <a href="#"> <i class="fas fa-chart-line"></i> <span class="link_name">Dashboard</span> </a></li>
            <li> <a href="index.php?action=quanlydonhang"> <i class="fas fa-shipping-fast"></i> <span class="link_name">Quản lý đơn hàng</span></a>
            </li>
            <li> <a href="#"> <i class="fas fa-users-cog"></i><span class="link_name">Quản lý nhân viên</span> </a> </li>
            <li> <a href="#"> <i class="far fa-cogs"></i> <span class="link_name">Cài đặt</span></a></li>
            <!-- <li>
                <div class="profile-details">
                    <div class="profile-content"></div>
                    <div class="name-job">
                        <div class="profile_name">luatnq</div>
                        <div class="job">Dev</div>
                    </div>
                    <i class='bx bx-log-out'></i>
                </div>
            </li> -->
        </ul>
    </div>

    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
        </div>
        <?php
        include("./admin/config/connect.php");
        include("./modules/main.php");
        ?>
    </section>
    <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement;
                arrowParent.classList.toggle("showMenu");
            });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });
    </script>
    <script src="./js/chart.js"></script>
</body>

</html>