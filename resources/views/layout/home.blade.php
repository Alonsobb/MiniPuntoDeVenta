<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr" data-theme="light">

<head>
    <meta charset="UTF-8">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/bulma/css/bulma.css">
</head>

<body>
    <div class="sidebar close ">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus bx-menu'></i>
            <span class="logo_name ">Mini Punto de Venta</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="{{ route('home') }}">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Inicio</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{ route('home') }}">Inicio</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ route('productos.view') }}">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="link_name">Productos</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{ route('productos.view') }}">Productos</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('ventas.view') }}">
                    <i class='bx bx-line-chart'></i>
                    <span class="link_name">Ventas</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{ route('ventas.view') }}">Ventas</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ route('pos.view') }}">
                    <i class='bx bx-compass'></i>
                    <span class="link_name">Vender</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{ route('pos.view') }}">Vender</a></li>
                </ul>
            </li>

            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <!--<img src="image/profile.jpg" alt="profileImg">-->
                    </div>
                    <div class="name-job">
                        <div class="profile_name">{{ Auth::user()->name }}</div>
                        <div class="job">Web Desginer</div>
                    </div>
                    <a href="{{ route('logout') }}"><i class='bx bx-log-out'></i></a>
                </div>
            </li>
        </ul>
    </div>
    <section class="home-section ">
        <div class="container pt-6 ">
                @yield('content')
            </div>
    </section>


    <script src="assets/js/sweetalert2.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/datatables.min.js"></script>

    <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
                arrowParent.classList.toggle("showMenu");
            });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");

        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });
    </script>
    @yield('script')
</body>

</html>
