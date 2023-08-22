<style>
    .social-icons.social-icons-clean-with-border li a {
        background-color: #333;
        border: 1px solid #333;
    }

    a.active {
        text-align: center;
    }
</style>

<?php

// get page title
$page_title = basename($_SERVER['PHP_SELF'], '.php');

// echo $page_title;



?>

<header id="header" class="header-effect-shrink"
    data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 85}">
    <div class="header-body border-top-0">
        <div class="header-top header-top-default header-top-borders border-bottom-0 bg-color-light">
            <div class="container">
                <div class="header-row">
                    <div class="header-column justify-content-between">
                        <div class="header-row">
                            <nav class="header-nav-top w-100 w-md-50pct w-xl-100pct">
                                <ul class="nav nav-pills d-inline-flex custom-header-top-nav-background pe-5">
                                    <li class="nav-item py-2 d-inline-flex z-index-1">
                                        <span class="d-flex align-items-center p-0">
                                            <span>
                                                <img width="25" src="img/icons/phone.svg" alt="Phone Icon" data-icon
                                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                                            </span>
                                            <a class="text-color-light text-decoration-none font-weight-semibold text-3-5 ms-2"
                                                href="tel:18002332025" data-cursor-effect-hover="plus"
                                                data-cursor-effect-hover-color="light">91723 31567
                                            </a>
                                        </span>
                                        <span class="font-weight-normal align-items-center px-0 d-none d-xl-flex ms-3">
                                            <span>
                                                <img width="25" src="img/icons/email.svg" alt="Email Icon" data-icon
                                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                                            </span>
                                            <a class="text-color-light text-decoration-none font-weight-semibold text-3-5 ms-2"
                                                href="mailto:info@laxmisolar.com" data-cursor-effect-hover="plus"
                                                data-cursor-effect-hover-color="light">sanjivaniwirenet@gmail.com</a>
                                        </span>
                                    </li>
                                </ul>
                            </nav>
                            <div class="d-flex align-items-center w-100" style="justify-content: flex-end;">
                                <ul
                                    class="social-icons social-icons-clean social-icons-clean-with-border social-icons-medium social-icons-icon-light">
                                    <li class="social-icons-facebook"><a
                                            href="#" target="_blank"
                                            title="Facebook" data-cursor-effect-hover="fit"><i
                                                class="fab fa-facebook-f"></i></a></li>

                                    <li class="social-icons-instagram"><a
                                            href="#" target="_blank"
                                            title="Instagram" data-cursor-effect-hover="fit">
                                            <!-- <i class="fab fa-instagram"></i> -->
                                            <i class="fab fa-instagram"></i>
                                        </a></li>
                                </ul>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container" style="height: 117px;">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="index.php">
                                <img alt="Sanjivani Industries" width="130" height="61" src="img/logo1.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end w-100">
                    <div class="header-row">
                        <div class="header-nav header-nav-links order-2 order-lg-1">
                            <div
                                class="header-nav-main header-nav-main-square header-nav-main-text-capitalize header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="nav-link <?php if ($page_title == 'index') {
                                                echo 'active';
                                            } ?> " href="index.php">
                                                Home
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="nav-link dropdown-toggle <?php if ($page_title == 'about' || $page_title == 'team' || $page_title == 'awards' || $page_title == 'laxmi-solar-csr') {
                                                echo 'active';
                                            } ?>" href="about.php">
                                                About
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="about.php" class="dropdown-item">About the Group</a>
                                                </li>
                                                <li>
                                                    <a href="team.php" class="dropdown-item">The Team</a>
                                                </li>
                                                <li>
                                                    <a href="awards.php" class="dropdown-item">Awards and
                                                        Accreditation</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="nav-link dropdown-toggle <?php
                                            if ($page_title == 'laxmi-pumps' || $page_title == 'laxmi-solar-water-heater' || $page_title == 'laxmi-flour-mill' || $page_title == 'laxmi-solar-induction-motor') {
                                                echo 'active';
                                            }
                                            ?>" href="#">
                                                Products
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="vibrating-screen.php"class="dropdown-item">Vibrating Screen</a>
                                                </li>

                                                <li>
                                                    <a href="woven-wire-mesh.php" class="dropdown-item">
                                                    Woven Wire Mesh</a>
                                                </li>
                                                </li>

                                                <li>
                                                    <a href="perforated-sheet.php" class="dropdown-item">
                                                    Perforated Sheet</a>
                                                </li>
                                                <li>
                                                    <a href="chain-link-fence.php" class="dropdown-item">Chain Link Fence</a>
                                                </li>

                                                <li>
                                                    <a href="mosquito-mesh-screen.php"
                                                        class="dropdown-item">Mosquito Mesh Screen</a>
                                                </li>

                                            </ul>
                                        </li>

                                        <li class="d-lg-none">
                                            <a class="nav-link <?php

                                            if ($page_title == 'contact') {
                                                echo 'active';
                                            }
                                            ?>" href="contact.php">
                                                Contact
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="header-column header-column-search justify-content-end align-items-center d-flex w-auto flex-row">
                    <a href="contact.php"
                        class="btn btn-dark custom-btn-style-1 font-weight-semibold text-3-5 btn-px-3 py-2 ws-nowrap ms-4 d-none d-lg-block"
                        data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light"><span>Contact
                            Us</span></a>
                    <div class="header-nav-features header-nav-features-no-border">
                        <div class="header-nav-feature header-nav-features-search d-inline-flex">


                        </div>
                    </div>
                    <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                        data-bs-target=".header-nav-main nav">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
</div>
</header>