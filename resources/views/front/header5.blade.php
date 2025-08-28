<!--====== Start Hero Section ======-->
<header class="header-area header-three">
            <!--====== Header Top Bar ======-->
            <div class="header-top-bar pt-30 pb-30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 d-none d-xl-block">
                            <!--====== Site Branding ======-->
                            <div class="site-brading">
                              <a href="{{ url('/') }}" class="brand-logo">
    <img src="{{ asset('assets/images/logo.jpg') }}" alt="Logo buyan">
</a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-12">
                            <!--====== Information Wrapper ======-->
                            <div class="information-wrapper">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="single-info-item-two">
                                            <div class="inner-info">
                                                <div class="icon">
                                                    <i class="far fa-map-marker-alt"></i>
                                                </div>
                                                <div class="info">
                                                    <span class="title">Alamat</span>
                                                    <h5>Jl. Wisata Alam Danau Buyan, Pancasari, Kec. Sukasada, Kabupaten Buleleng, Bali</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-info-item-two">
                                            <div class="inner-info">
                                                <div class="icon">
                                                    <i class="far fa-envelope"></i>
                                                </div>
                                                <div class="info">
                                                    <span class="title">Email </span>
                                                    <h5><a href="mailto:support@gmail.com">buyan.adventure@gmail.com</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-info-item-two">
                                            <div class="inner-info">
                                                <div class="icon">
                                                    <i class="far fa-phone-plus"></i>
                                                </div>
                                                <div class="info">
                                                    <span class="title">Telephone</span>
                                                    <h5><a href="tel:+000(123)45688">081338803189 </a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== Header Navigation ======-->
            <div class="header-navigation navigation-white">
                <div class="nav-overlay"></div>
                <div class="container-fluid">
                    <div class="primary-menu black-bg">
                        <!--====== Site Branding ======-->
                       
                        <!--====== Nav Menu ======-->
                        <div class="nav-menu">
                            <!--====== Site Branding ======-->
                            
                            <!--=== Nav Search ===-->
                            <div class="nav-search mb-30 d-block d-xl-none ">
                                <form>
                                    <div class="form_group">
                                        <input type="email" class="form_control" placeholder="Search Here" name="email" required>
                                        <button class="search-btn"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <!--====== Main Menu ======-->
                            <nav class="main-menu">
                         
                            @include('front.menu')
                            </nav>
                            <!--====== Menu Button ======-->
                            <div class="menu-button mt-40 d-xl-none">
                                <a href="contact.php" class="main-btn secondary-btn">Book Now<i class="fas fa-paper-plane"></i></a>
                            </div>
                        </div>
                        <!--====== Nav Right Item ======-->
                        <div class="nav-right-item">
                            <!-- <div class="lang-dropdown">
                                <select class="wide">
                                    <option value="English">English</option>
                                    <option value="French">French</option>
                                </select>
                            </div> -->
                            <div class="menu-button d-xl-block d-none">
                                <a href="contact.php" class="main-btn primary-btn">Book Now<i class="fas fa-paper-plane"></i></a>
                            </div>
                            <div class="navbar-toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header><!--====== End Header ======-->