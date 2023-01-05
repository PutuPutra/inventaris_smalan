<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-SARPRAS SMALAN</title>
    <link rel="stylesheet" href="assets/extensions/simple-datatables/style.css">
    <link rel="stylesheet" href="assets/css/pages/simple-datatables.css">

    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/smalan.png">

    <link rel="stylesheet" href="assets/css/shared/iconly.css">

    <script src="https://kit.fontawesome.com/49b420f669.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a class="me-2" href=" <?= base_url('/') ?>">ADMIN</a>
                            <!-- <h4>E-SARPRAS</h4> -->
                        </div>
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                        opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input  me-0" type="checkbox" id="toggle-dark">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                                </path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">

                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item <?= $sidebar1; ?>">
                            <a href="dashboard" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub <?= $sidebar2; ?>">
                            <a href="#" class='sidebar-link'>
                                <i class="fa-solid fa-laptop"></i>
                                <span>Sarana</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item <?= $submenu1; ?>">
                                    <a href="<?= base_url('komputer') ?>">Komputer</a>
                                </li>
                                <li class="submenu-item <?= $submenu2; ?>">
                                    <a href="component-badge.html">Buku</a>
                                </li>
                                <li class="submenu-item <?= $submenu3; ?>">
                                    <a href="component-badge.html">Papan Tulis</a>
                                </li>
                                <li class="submenu-item <?= $submenu4; ?>">
                                    <a href="component-badge.html">Meja</a>
                                </li>
                                <li class="submenu-item <?= $submenu5; ?>">
                                    <a href="component-badge.html">Kursi</a>
                                </li>
                                <li class="submenu-item <?= $submenu6; ?>">
                                    <a href="component-badge.html">Foto</a>
                                </li>
                                <li class="submenu-item <?= $submenu7; ?>">
                                    <a href="component-badge.html">Spidol</a>
                                </li>
                                <li class="submenu-item <?= $submenu8; ?>">
                                    <a href="component-badge.html">Penghapus</a>
                                </li>
                                <li class="submenu-item <?= $submenu9; ?>">
                                    <a href="component-badge.html">Pena</a>
                                </li>
                                <li class="submenu-item <?= $submenu10; ?>">
                                    <a href="component-badge.html">Penggaris</a>
                                </li>

                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub <?= $sidebar3; ?>">
                            <a href="#" class='sidebar-link'>
                                <i class="fa-solid fa-building"></i>
                                <span>Prasarana</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href=" <?= base_url('#') ?>">Gedung</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href=" <?= base_url('#') ?>">Lapangan</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href=" <?= base_url('#') ?>">Kendaraan</a>
                                </li>

                            </ul>
                        </li>



                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">

                        <div class="col-12 col-md-6 order-md-1 order-last mb-4">
                            <h3><?= $heading; ?></h3>
                            <p class="text-subtitle text-muted"></p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb" style="margin-left: -100px;">

                                    <?php if (in_groups('super_admin')) : ?>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <a href="<?= base_url('account') ?>">
                                            <i class="fa-solid fa-user"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <a href="<?= base_url('settings') ?>">
                                            <i class="fa-solid fa-gear"></i>
                                        </a>
                                    </li>
                                    <?php endif; ?>
                                    <li class="breadcrumb-item">
                                        <a href="<?= base_url('logout') ?>">
                                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                        </a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <?= $this->renderSection('content'); ?>

                <!-- <div class="fixed-bottom">
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>
                            <script>
                            document.write(new Date().getFullYear())
                            </script> &copy; SMAN 9 Bandarlampung
                        </p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span>
                            by
                            <a href="<?= base_url('tentang') ?>">Non Est Ulla</a>
                        </p>
                    </div>
                </div>
            </footer>
        </div> -->
            </div>
        </div>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/app.js"></script>

        <!-- Need: Apexcharts -->
        <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
        <script src="assets/js/pages/dashboard.js"></script>
        <script src="assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
        <script src="assets/js/pages/simple-datatables.js"></script>

</body>

</html>
