<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyHeaderContainerHeight': 80, 'stickyStartAt': 50, 'stickyChangeLogo': false}">
    <div class="header-body border-top-0 bg-primary">
        <div class="header-container container-fluid">
            <div class="header-row">
                <div class="header-column align-items-start justify-content-center">
                    <div class="header-logo z-index-2 col-lg-2 px-0">
                        <a href="{{ url('demo-architecture-2.html') }}">
                            <img alt="Porto" width="123" height="32" src="{{ asset('img/demos/architecture-2/logo.png') }}">
                        </a>
                    </div>
                </div>
                <div class="header-column flex-row justify-content-end justify-content-lg-center">
                    <div class="header-nav header-nav-line header-nav-bottom-line header-nav-bottom-line-effect-1 header-nav-dropdowns-dark header-nav-light-text justify-content-end">
                        <div class="header-nav-main header-nav-main-arrows header-nav-main-mobile-dark header-nav-main-dropdown-no-borders header-nav-main-effect-3 header-nav-main-sub-effect-1">
                            <nav class="collapse">
                            <ul class="nav nav-pills" id="mainNav">
                                <li class="{{ Request::routeIs('home') ? 'active' : '' }}">
                                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                                </li>
                                <li class="{{Request::routeIs('about.us') ? 'active' : ''  }}">
                                    <a href="{{ route('about.us') }}" class="nav-link">About</a>
                                </li>
                                <!-- <li class="{{Request::routeIs('services') ? 'active' : ''   }}">
                                    <a href="{{ route('services')  }}" class="nav-link">Projects</a>
                                </li> -->
                                <li class="dropdown {{ Request::routeIs('services') ? 'active' : ''  }}">
                                    <a href="{{ route('services') }}" class="nav-link dropdown-toggle">Services</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ route('structural.engineering') }}" class="dropdown-item">Structural Engineering</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('demo-architecture-2-services-detail.html') }}" class="dropdown-item">Design & Planning</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('demo-architecture-2-services-detail.html') }}" class="dropdown-item">Interior Design</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('demo-architecture-2-services-detail.html') }}" class="dropdown-item">Exterior Design</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('demo-architecture-2-services-detail.html') }}" class="dropdown-item">Construction Drawings</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- <li class="{{ Request::is('demo-architecture-2-blog.html') ? 'active' : '' }}">
                                    <a href="{{ url('demo-architecture-2-blog.html') }}" class="nav-link">Blog</a>
                                </li> -->
                                <li class="{{ Request::routeIs('contact.us') ? 'active' : '' }}">
                                    <a href="{{ route('contact.us') }}" class="nav-link">Contact</a>
                                </li>
                            </ul>

                            </nav>
                        </div>
                    </div>
                    <div class="header-nav-features ps-0 ms-3">
                        <div class="header-nav-features-search-reveal-container">
                            <div class="header-nav-feature header-nav-features-search header-nav-features-search-reveal d-inline-flex">
                                <a href="#" class="header-nav-features-search-show-icon d-inline-flex text-decoration-none"><i class="icons icon-magnifier header-nav-top-icon text-color-light text-4 font-weight-bold position-relative top-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <button class="btn header-btn-collapse-nav bg-transparent border-0 text-4 position-relative top-2 p-0 ms-4" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                <div class="header-column align-items-end justify-content-center d-none d-lg-flex">
                    <ul class="header-social-icons social-icons social-icons-clean social-icons-icon-light social-icons-medium custom-social-icons-divider">
                        <li class="social-icons-facebook">
                            <a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="social-icons-x">
                            <a href="http://www.x.com/" target="_blank" title="X"><i class="fab fa-x-twitter"></i></a>
 </li>
                        <li class="social-icons-instagram">
                            <a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="social-icons-linkedin">
                            <a href="http://www.linkedin.com/" target="_blank" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>