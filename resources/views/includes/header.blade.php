<div class="header-transporent-bg-black">

    <!-- HEADER -->
    <header id="nav" class="header header-1 dark-grey-header">
        <div class="header-wrapper">
            <div class="container-m-30 clearfix">
                <div class="logo-row">

                    <!-- LOGO -->
                    <div class="logo-container-2">
                        <div class="logo-2">
                            <a href="index.html" class="clearfix">
                                <img src="images/logo-white.png" class="logo-img" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <!-- BUTTON -->
                    <div class="menu-btn-respons-container">
                        <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse"
                            data-target="#main-menu .navbar-collapse">
                            <span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- MAIN MENU CONTAINER -->
            <div class="main-menu-container">

                <div class="container-m-30 clearfix">

                    <!-- MAIN MENU -->
                    <div id="main-menu">
                        <div class="navbar navbar-default" role="navigation">

                            <!-- MAIN MENU LIST -->
                            <nav class="collapse collapsing navbar-collapse nav-center">
                                <ul class="nav navbar-nav">

                                    <!-- MENU ITEM -->
                                    <li class="parent current">
                                        <a href="/">
                                            <div class="main-menu-title">HOME</div>
                                        </a>
                                    </li>
                                    <!-- MENU ITEM -->
                                    <li class="parent @yield('about')">
                                        <a href="javascript:;">
                                            <div class="main-menu-title">ABOUT</div>
                                        </a>
                                        <ul class="sub">
                                            <li><a href="{{ url('about#company') }}">COMPANY</a></li>
                                            <li><a href="{{ url('about#visi-misi') }}">VISI & MISI</a></li>
                                            <li><a href="{{ url('about#layanan') }}">LAYANAN</a></li>
                                            <li><a href="{{ url('about#pengalaman') }}">PENGALAMAN</a></li>
                                            <li><a href="{{ url('about#klien') }}">KLIEN</a></li>
                                        </ul>
                                    </li>
                                    <li class="parent">
                                        <a href="{{ url('product') }}">
                                            <div class="main-menu-title">PRODUCT</div>
                                        </a>
                                    </li>
                                    <li class="parent">
                                        <a href="{{ url('pricelist') }}">
                                            <div class="main-menu-title">PRICELIST</div>
                                        </a>
                                    </li>
                                    <li class="parent">
                                        <a href="{{ url('gallery') }}">
                                            <div class="main-menu-title">GALLERY</div>
                                        </a>
                                    </li>
                                    <li class="parent">
                                        <a href="{{ url('contact') }}">
                                            <div class="main-menu-title">CONTACT</div>
                                        </a>
                                    </li>
                                    <!-- MENU ITEM -->

                                </ul>

                            </nav>

                        </div>
                    </div>
                    <!-- END main-menu -->

                </div>
                <!-- END container-m-30 -->

            </div>
            <!-- END main-menu-container -->

            <!-- SEARCH READ DOCUMENTATION -->
            <ul class="cd-header-buttons">
                <li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
            </ul> <!-- cd-header-buttons -->
            <div id="cd-search" class="cd-search">
                <form class="form-search" id="searchForm" action="page-search-results.html" method="get">
                    <input type="text" value="" name="q" id="q" placeholder="Search...">
                </form>
            </div>

        </div>
        <!-- END header-wrapper -->

    </header>

    <!-- STATIC MEDIA IMAGE -->
    <div class="sm-img-bg-fullscr parallax-section" style="background-image: url(template/html/images/arc.jpg)"
        data-stellar-background-ratio="0.5">
        <div class="container sm-content-cont text-center js-height-fullscr">
            <div class="sm-cont-middle">

                <!-- OPACITY container -->
                <div class="opacity-scroll2">

                    <!-- LAYER NR. 1 -->
                    <div class="font-white light-72-wide sm-mb-15 sm-mt-20">
                        <span class="bold">PT. PILAR MOBILE MEDIA</span>
                    </div>

                    <!-- LAYER NR. 2 -->


                    <!-- LAYER NR. 3 -->

                </div>

            </div>
        </div>
        <!-- SCROLL ICON -->
        <div class="local-scroll-cont font-white">
            <a href="#about" class="scroll-down smooth-scroll">
                <div class="icon icon-arrows-down"></div>
            </a>
        </div>
    </div>

</div>
