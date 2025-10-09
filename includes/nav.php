<!-- Navbar Start -->
<style>
    /* Navbar Dropdown Styles */
    .nav-item {
        position: relative;
        /* important for dropdown positioning */
    }

    /* Desktop Dropdown */
    @media(min-width:1025px) {
        .nav-item>.dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            min-width: 220px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            padding: 8px 0;
            list-style: none;
            z-index: 1000;
        }

        .nav-item:hover>.dropdown-menu {
            display: block;
        }

        .dropdown-menu li a {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            color: #334155;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s;
        }

        .dropdown-menu li a i {
            margin-right: 10px;
        }

        .dropdown-menu li a:hover {
            background: #f1f5f9;
            color: #3b82f6;
            padding-left: 25px;
        }
    }

    /* Mobile Dropdown */
    @media(max-width:1024px) {

        /* Mobile menu container */
        #mobileMenu {
            display: none;
            /* hidden by default, toggle via JS */
            flex-direction: column;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            /* background: rgba(255, 255, 255, 0.95); */
            background: white;
            padding: 20px;
            border-radius: 0 0 12px 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        #mobileMenu.active {
            display: flex;
        }

        /* Mobile dropdown items */
        .nav-item>.dropdown-menu {
            display: none;
            flex-direction: column;
            padding-left: 10px;
            margin: 5px 0;
            border-radius: 6px;
            background: rgba(255, 255, 255, 0.05);
        }

        .nav-item>.dropdown-menu.active {
            display: flex;
        }

        .dropdown-menu li a {
            color: black;
            padding: 8px 12px;
        }

        .dropdown-menu li a:hover {
            background: rgba(255, 255, 255, 0.1);
            color: #3b82f6;
            padding-left: 20px;
        }
    }

    /* Sticky Navbar for desktop */
    @media(min-width:1025px) {
        #navbar-sticky {
            position: sticky;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9999;
            /* ensure it's above everything */
            background: white;
            /* optional: background so content doesn't show through */
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            /* optional: subtle shadow */
        }

        .nav-link {

            padding: .25rem .200rem !important;

        }
    }
</style>

<header id="navbar-sticky" class="navbar nav-dark relative z-50">
    <div class="container">
        <nav class="flex items-center justify-between relative">

            <!-- Logo -->
            <a href="." class="logo">
                <img src="./img/logo-2.png" class="h-12 logo-dark" alt="SEU Logo">
                <img src="./img/logo-2.png" class="h-12 logo-light" alt="SEU Logo">
            </a>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden flex items-center">
                <button id="mobileMenuBtn" class="inline-flex items-center justify-center h-9 w-12 rounded-md border border-gray-300 bg-slate-300/30">
                    <i class="uil uil-bars text-2xl"></i>
                </button>
            </div>

            <!-- Navigation Menu -->
            <div id="mobileMenu" class="hidden lg:flex lg:items-center lg:justify-center lg:mx-auto lg:mt-0">
                <ul class="navbar-nav flex flex-col lg:flex-row lg:space-x-6">
                    <li class="nav-item"><a class="nav-link" href="./#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="./#procedure">Application Procedure</a></li>
                    <li class="nav-item"><a class="nav-link" href="./#information">Information</a></li>
                    <li class="nav-item"><a class="nav-link" href="./#payment">Payment</a></li>
                    <li class="nav-item"><a class="nav-link" href="./#faq">FAQ</a></li>

                    <!-- Dropdown -->
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link flex justify-between items-center">
                            Convocation <i class="uil uil-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="./8th_convocation.php"><i class="uil uil-graduation-cap"></i> 8th Convocation</a></li>
                            <li><a href="./7th_convocation.php"><i class="uil uil-graduation-cap"></i> 7th Convocation</a></li>
                            <li><a href="./6th_convocation.php"><i class="uil uil-graduation-cap"></i> 6th Convocation</a></li>
                            <li><a href="./5th_convocation.php"><i class="uil uil-graduation-cap"></i> 5th Convocation</a></li>
                            <li><a href="./4th_convocation.php"><i class="uil uil-graduation-cap"></i> 4th Convocation</a></li>
                            <li><a href="./3rd_convocation.php"><i class="uil uil-graduation-cap"></i> 3rd Convocation</a></li>
                            <li><a href="./2nd_convocation.php"><i class="uil uil-graduation-cap"></i> 2nd Convocation</a></li>
                            <li><a href="./1st_convocation.php"><i class="uil uil-graduation-cap"></i> 1st Convocation</a></li>
                            <!-- <li><a href="./#departments"><i class="uil uil-graduation-cap"></i> 2nd Convocation</a></li>
                            <li><a href="./#admission-requirements"><i class="uil uil-graduation-cap"></i> 3rd Convocation</a></li> -->
                        </ul>
                    </li>
                </ul>

                <!-- Mobile Location -->
                <div class="lg:hidden flex items-center pt-4 mt-4 border-t border-gray-200">
                    <a href="https://maps.app.goo.gl/GHvH5vafNubSoVtd7" target="_blank" class="nav-btn">
                        <i data-lucide="map-pin" class="h-5 w-5 me-2"></i> Location
                    </a>
                </div>
            </div>

            <!-- Desktop Location -->
            <div class="hidden lg:flex items-center">
                <a href="https://maps.app.goo.gl/GHvH5vafNubSoVtd7" target="_blank" class="nav-btn">
                    <i data-lucide="map-pin" class="h-5 w-5 me-2"></i> Location
                </a>
            </div>

        </nav>
    </div>
</header>

<!-- Scripts -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Mobile Menu Toggle
        const mobileBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('active');
        });

        // Mobile Dropdown Toggle
        const dropdownLinks = document.querySelectorAll('.nav-item > a');

        dropdownLinks.forEach(link => {
            const dropdown = link.nextElementSibling;
            if (dropdown && dropdown.classList.contains('dropdown-menu')) {
                link.addEventListener('click', function(e) {
                    if (window.innerWidth <= 1024) {
                        e.preventDefault();
                        dropdown.classList.toggle('active');
                    }
                });
            }
        });
    });
</script>
<!-- Navbar End -->