<!-- Navbar Start -->
<style>
/* Navbar Dropdown Styles */
.nav-item {
    position: relative; /* Important for dropdown positioning */
}

/* Desktop Dropdown */
@media(min-width:1025px){
    .nav-item > .dropdown-menu {
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

    .nav-item:hover > .dropdown-menu {
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
@media (max-width:1024px){
    .navbar-nav {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: rgba(15,23,42,0.98);
        padding: 20px;
        border-radius: 0 0 12px 12px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        z-index: 1000;
    }

    .navbar-nav.active {
        display: flex;
    }

    .nav-item > .dropdown-menu {
        position: static;
        background: rgba(255,255,255,0.05);
        box-shadow: none;
        margin-left: 20px;
        display: none;
        width: calc(100% - 40px);
        padding: 5px 0;
        border-radius: 6px;
    }

    .nav-item > .dropdown-menu.active {
        display: block;
    }

    .dropdown-menu li a {
        color: rgba(255,255,255,0.9);
    }

    .dropdown-menu li a:hover {
        background: rgba(255,255,255,0.1);
        color: #3b82f6;
        padding-left: 20px;
    }
}
</style>

<header id="navbar-sticky" class="navbar nav-dark">
    <div class="container">
        <nav>
            <!-- Logo -->
            <a href="." class="logo">
                <img src="./img/logo-2.png" class="h-12 logo-dark" alt="SEU Logo">
                <img src="./img/logo-2.png" class="h-12 logo-light" alt="SEU Logo">
            </a>

            <!-- Mobile Menu Toggle -->
            <div class="lg:hidden flex items-center ms-auto px-2.5">
                <button id="mobileMenuBtn" class="inline-flex items-center justify-center h-9 w-12 rounded-md border border-gray-300 bg-slate-300/30">
                    <i class="uil uil-bars text-2xl"></i>
                </button>
            </div>

            <!-- Navigation Menu -->
            <div id="mobileMenu" class="navbar-nav lg:flex lg:items-center lg:justify-center lg:mx-auto lg:mt-0 hidden">
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
                            <li><a href="./#about"><i class="uil uil-university"></i> About SEU</a></li>
                            <li><a href="./#departments"><i class="uil uil-building"></i> Departments</a></li>
                            <li><a href="./#admission-requirements"><i class="uil uil-clipboard-notes"></i> Admission Requirements</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Mobile Location -->
                <div class="lg:hidden flex items-center pt-4 mt-4 border-t border-gray-200">
                    <a href="https://maps.app.goo.gl/GHvH5vafNubSoVtd7" target="_blank" class="nav-btn"><i data-lucide="map-pin" class="h-5 w-5 me-2"></i> Location</a>
                </div>
            </div>

            <!-- Desktop Location -->
            <div class="hidden lg:flex items-center">
                <a href="https://maps.app.goo.gl/GHvH5vafNubSoVtd7" target="_blank" class="nav-btn"><i data-lucide="map-pin" class="h-5 w-5 me-2"></i> Location</a>
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
        link.addEventListener('click', function(e){
            if(window.innerWidth <= 1024){
                const dropdown = this.nextElementSibling;
                if(dropdown && dropdown.classList.contains('dropdown-menu')){
                    e.preventDefault();
                    dropdown.classList.toggle('active');
                }
            }
        });
    });
});
</script>
<!-- Navbar End -->
