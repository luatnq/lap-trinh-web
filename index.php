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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
    <title>Quản lý đơn hàng</title>
</head>

<body>
    <div class="sidebar close">
        <div class="logo-details">
        <div class="row logo_header" style="height: 50px;">
            <div class="col" style="display: contents;">
            <img src="./img/download.png" alt="" style="width: 50px;border-radius: 26px;" class="d-inline-block align-text-top"> 
              <span>Luật lợn</span>  
            </div>  
  </div>
  <div class="row logo_header1" style="height: 50px;">
            <div class="col" style="display: contents;">
            <img src="./img/download.png" alt="" style="width: 50px;border-radius: 26px;" class="d-inline-block align-text-top"> 
            </div>  
  </div>

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
            <div class="row" style="width: 100%;">
                <div class="col" style="display: flex;">
                    <i class='bx bx-menu'></i>
                    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Nhập từ tìm kiếm ..." aria-label="Search">
        <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
      </form>   
                </div>
                <div class="col" style="text-align: right;align-self: center;">
                    <i class="fas fa-info-circle" style="font-size: 25px;margin-right: 20px;"  id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"></i>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>

                        <i class="fas fa-map-marked-alt" style="font-size: 25px;margin-right: 20px;" id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-expanded="false"></i>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                            <li><a class="dropdown-item" href="#">Action2</a></li>
                            <li><a class="dropdown-item" href="#">Another action2</a></li>
                            <li><a class="dropdown-item" href="#">Something else here2</a></li>
                        </ul>

                        <i class="fas fa-wrench" style="font-size: 25px;margin-right: 20px;" id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-expanded="false"></i>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                            <li><a class="dropdown-item" href="#">Action2</a></li>
                            <li><a class="dropdown-item" href="#">Another action2</a></li>
                            <li><a class="dropdown-item" href="#">Something else here2</a></li>
                        </ul>

                        <i class="fas fa-user-edit" style="font-size: 25px;margin-right: 20px;" id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-expanded="false"></i>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                            <li><a class="dropdown-item" href="#">Action2</a></li>
                            <li><a class="dropdown-item" href="#">Another action2</a></li>
                            <li><a class="dropdown-item" href="#">Something else here2</a></li>
                        </ul>

                        <i class="fas fa-grip-vertical" style="font-size: 25px;margin-right: 20px;" id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-expanded="false"></i>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                            <li><a class="dropdown-item" href="#">Action2</a></li>
                            <li><a class="dropdown-item" href="#">Another action2</a></li>
                            <li><a class="dropdown-item" href="#">Something else here2</a></li>
                        </ul>
                </div>
            </div>


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