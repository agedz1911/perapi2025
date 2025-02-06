<header class="main_header_area position-absolute w-100">
    <div class="header-content text-white">
        <div class="container">
            <div class="header-content-inner py-2">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="social-links ">
                            <ul class="m-0 p-0">
                                <li class="d-inline">
                                    <a href="#">
                                        <i class="fa fa-envelope-open border-social rounded-circle text-center"></i>
                                    </a>
                                </li>
                                <li class="d-inline">
                                    <a href="#">
                                        <i class="fa fa-mobile-screen border-social rounded-circle text-center"></i>
                                    </a>
                                </li>
                                <li class="d-inline">
                                    <a href="#">
                                        <i class="fa fa-whatsapp border-social rounded-circle text-center"></i>
                                    </a>
                                </li>
                                <li class="d-inline">
                                    <a href="#">
                                        <i class="fa fa-instagram border-social rounded-circle text-center"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-event-info text-end">
                            <ul class="m-0 p-0">
                                <li class="px-2 border-end border-lightgrey border-opacity-50 d-inline">
                                    <i class="fa fa-phone pe-1"></i>
                                    <small>+62 21 6386 9502 </small>
                                </li>
                                <li class=" px-2 border-end d-inline border-lightgrey border-opacity-50">
                                    <i class="fa fa-envelope-o pe-1"></i>
                                    <small>asmiua2025@pharma-pro.com</small>
                                </li>
                                <li class=" px-2 d-inline ">
                                    <i class="fa fa-whatsapp pe-1"></i>
                                    <small>+62 811 1018 517</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Bar -->
    <div class="header_menu" id="header_menu">

        <nav class="navbar navbar-expand-lg container py-2">
            <div class="row">
                <div class="col-lg-2 col-md-6">
                    <div class="navbar-brand m-0">
                        <img src="assets/images/logo/1.png" alt="Logo" class="w-100">
                    </div>
                </div>
                <div class="col-lg-9 offset-lg-1 col-md-6">
                    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                        <ul class="navbar-nav align-items-center" id="responsive-menu">
                            <li class="nav-item ">
                                <a class="nav-link px-2 my-4 py-0  {{ request()->is('/') ? 'active' : '' }}"
                                    aria-current="page" href="/">Home</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle px-2 my-4 py-0 {{ request()->is('organizing-committee') || request()->is('/welcome-message') || request()->is('/faculties') ? 'active' : '' }}"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Congress Information
                                </a>
                                <ul class="dropdown-menu bg-lightgrey p-0 rounded">
                                    <li><a class="dropdown-item py-3 px-6 text-capitalize black border-0"
                                            href="#">Welcome Message</a></li>
                                    <li><a class="dropdown-item py-3 px-6 text-capitalize black border-0 {{ request()->is('organizing-committee') ? 'text-warning' : '' }}"
                                            href="/organizing-committee" wire:navigate>Organizing Committee</a></li>
                                    <li><a class="dropdown-item py-3 px-6 text-capitalize black border-0"
                                            href="#">Faculties</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle px-2 my-4 py-0" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Scientific Program
                                </a>
                                <ul class="dropdown-menu bg-lightgrey p-0 rounded">
                                    <li><a class="dropdown-item py-3 px-6 text-capitalize black border-0"
                                            href="#">Program at Glance</a></li>
                                    <li><a class="dropdown-item py-3 px-6 text-capitalize black border-0"
                                            href="#">Scientific Schedule </a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-2 my-4 py-0" href="#">Registration</a>
                            </li>
                            <li class="nav-item">
                                <a wire:navigate class="nav-link px-2 my-4 py-0 {{ request()->is('submission') ? 'active' : '' }}"
                                    href="/submission">Submission</a>
                            </li>
                            {{-- <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle px-2 my-4 py-0 {{ request()->is('guideline-abstract') ? 'active' : '' }}"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Submission
                                </a>
                                <ul class="dropdown-menu bg-lightgrey p-0 rounded">
                                    <li><a class="dropdown-item py-3 px-6 text-capitalize black border-0 {{ request()->is('guideline-abstract') ? 'text-warning' : '' }}"
                                            href="/guideline-abstract" wire:navigate>Guideline for Abstract</a></li>
                                    <li><a class="dropdown-item py-3 px-6 text-capitalize black border-0"
                                            href="#">Abstract Submission</a></li>
                                </ul>
                            </li> --}}
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle px-2 my-4 py-0" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Visiting
                                </a>
                                <ul class="dropdown-menu bg-lightgrey p-0 rounded">
                                    <li><a class="dropdown-item py-3 px-6 text-capitalize black border-0"
                                            href="#">Medan, North Sumatra</a></li>
                                    <li><a class="dropdown-item py-3 px-6 text-capitalize black border-0"
                                            href="#">Venue</a></li>
                                </ul>
                            </li>

                        </ul>
                        <!-- <a class="btn" href="#search1">Contact us</a> -->
                    </div>
                </div>

                <div id="slicknav-mobile"></div>
            </div>
        </nav>

        <!-- <div id="search1">
            <button type="button" class="close">×</button>
            <form>
                <input class="form-control form-control-lg rounded" placeholder="Search...">
            </form>
            <button type="button" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div> -->

    </div>
    <!-- Navigation Bar Ends -->
</header>