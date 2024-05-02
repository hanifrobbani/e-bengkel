<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ini adalah dashboard untuk mengelola jasa service dan produk penjualan pada website e-bengkel">
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('styles/dashboard.css') }}">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
            .sidebar{
                height: 100vh;
            }
        }
        

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
    </style>


    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('styles/dashboard.css') }}" rel="stylesheet">
</head>

<header class="navbar sticky-top bg-primary flex-md-nowrap p-0" data-bs-theme="primary">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-5 text-white" href="#">E-Bengkel</a>
    <ul class="navbar-nav flex-row d-md-none">
        <li class="nav-item text-nowrap">
            <button class="nav-link text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
                <i class="bi bi-search me-3" style="font-size: 20px;"></i>
            </button>
        </li>
        <li class="nav-item text-nowrap">
            <button class="nav-link text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list me-3 mb-2" style="font-size: 25px;"></i>
            </button>
        </li>
    </ul>
    <div id="navbarSearch" class="navbar-search w-100 collapse">
        <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
            <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="sidebarMenuLabel">E-Bengkel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/dashboard">
                                <i class="bi bi-house-fill mb-3 me-2" style="font-size: 20px;"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/transaksi">
                                <i class="bi bi-currency-dollar mb-3 me-2" style="font-size: 20px;"></i>
                                Transaksi
                            </a>

                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/product">
                                <i class="bi bi-cart-fill mb-3 me-2" style="font-size: 20px;"></i>
                                Product
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="/dashboard/product">
                            <i class="bi bi-cart-fill mb-3 me-2" style="font-size: 20px;"></i>
                                Product
                            </a>
                            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                <li>
                                    <a href="forms-elements.html" class="nav-link">
                                        <span>Produk Masuk</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/dashboard/jenis" class="nav-link">
                                        <span>jenis SparePart</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/dashboard/product" class="nav-link">
                                        <span>Data SparePart</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/customer">
                                <i class="bi bi-people-fill mb-3 me-2" style="font-size: 20px;"></i>
                                Customers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/report">
                                <i class="bi bi-graph-up mb-3 me-2" style="font-size: 20px;"></i>
                                Reports
                            </a>
                        </li>
                    </ul>

                    <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
                            <span>Saved reports</span>
                            <a class="link-secondary" href="#" aria-label="Add a new report">
                                <svg class="bi">
                                    <use xlink:href="#plus-circle" />
                                </svg>
                            </a>
                        </h6>
                        <ul class="nav flex-column mb-auto">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    <svg class="bi">
                                        <use xlink:href="#file-earmark-text" />
                                    </svg>
                                    Current month
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    <svg class="bi">
                                        <use xlink:href="#file-earmark-text" />
                                    </svg>
                                    Last quarter
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    <svg class="bi">
                                        <use xlink:href="#file-earmark-text" />
                                    </svg>
                                    Social engagement
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    <svg class="bi">
                                        <use xlink:href="#file-earmark-text" />
                                    </svg>
                                    Year-end sale
                                </a>
                            </li>
                        </ul> -->

                    <hr class="my-3">

                    <ul class="nav flex-column mb-auto">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/setting">
                                <i class="bi bi-gear-fill mb-3 me-2" style="font-size: 20px;"></i>
                                Settings
                            </a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="nav-link btn btn-link d-flex align-items-center gap-2" style="background: none; border: none;">
                                    <i class="bi bi-door-open-fill mb-3 me-2" style="font-size: 20px;"></i>

                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        @yield('container')
    </div>
</div>

<script src="{{ asset('js/dashboard.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script>

<script src="{{ asset('js/dashboard.js') }}"></script>

<script>
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
</script>