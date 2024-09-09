<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fnpa
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
   <!--top-bar-->
    <div class="top-bar position-relative z-4 d-none d-lg-block">
        <div class="container-fluid">
            <div class="container py-2">
                <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center">
                    <div class="d-flex mb-lg-0 mb-3 flex-wrap align-items-center justify-content-center justify-content-lg-start gap-4 font-cutsom">
                        <div class="follow-us me-2 border-start ps-4">Follow Us:</div>
                        <a href="https://www.facebook.com/" class=" text-reset">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://twitter.com/" class=" text-reset">
                            <i class="bi bi-twitter-x"></i>
                        </a>
                        <a href="https://www.instagram.com/" class=" text-reset">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com/" class=" text-reset">
                            <i class="bi bi-youtube"></i>
                        </a>
                    </div>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-end gap-2">
                        <a href="mailto:info@fnpa.org.np" class="ps-4 phone-call text-primary">
                            <i class="fa fa-envelope"></i>
                            <span class="text-black ps-2">info@fnpa.org.np</span>
                        </a>
                        <a href="tel:977 1 5910977" class="ps-4 phone-call text-primary">
                            <i class="fa fa-phone"></i>
                            <span class="text-black ps-2">977 1 5910977</span>
                        </a>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light w-100 z-4 tcmenu__wrap">
            <div class="container px-3">
                <a class="navbar-brand" href="<?php echo site_url(''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.svg" alt="fnpa"></a>
                <div class="mobile-nav-toggler d-block d-lg-none btn btn-primary btn-navbar rounded-circle px-2 ms-4 d-flex align-items-center justify-content-center">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_19_537)">
                            <path d="M1.92024 0.143158C0.888516 0.143158 0.0492554 0.982476 0.0492554 2.01414C0.0492554 3.04581 0.888168 3.88507 1.92024 3.88507C2.95231 3.88507 3.79122 3.04581 3.79122 2.01414C3.79122 0.982476 2.95191 0.143158 1.92024 0.143158Z" fill="#ffffff" />
                            <path d="M7.97566 0.143158C6.94399 0.143158 6.10468 0.982476 6.10468 2.01414C6.10468 3.04581 6.94399 3.88507 7.97566 3.88507C9.00738 3.88507 9.84682 3.04581 9.84682 2.01414C9.84682 0.982476 9.00773 0.143158 7.97566 0.143158Z" fill="#ffffff" />
                            <path d="M14.129 3.88513C15.1605 3.88513 16 3.04587 16 2.0142C16 0.982534 15.1612 0.143158 14.129 0.143158C13.0969 0.143158 12.2581 0.982476 12.2581 2.01414C12.2581 3.04581 13.0975 3.88513 14.129 3.88513Z" fill="#ffffff" />
                            <path d="M1.87133 9.88033C2.903 9.88033 3.74249 9.04124 3.74249 8.0094C3.74249 6.97751 2.903 6.13824 1.87133 6.13824C0.839666 6.13824 0 6.97756 0 8.0094C0 9.04124 0.839666 9.88033 1.87133 9.88033Z" fill="#ffffff" />
                            <path d="M7.92677 9.88033C8.95826 9.88033 9.79775 9.04124 9.79775 8.0094C9.79775 6.97751 8.95896 6.13824 7.92677 6.13824C6.89476 6.13824 6.05579 6.97751 6.05579 8.0094C6.05579 9.04124 6.8951 9.88033 7.92677 9.88033Z" fill="#ffffff" />
                            <path d="M14.0807 9.88033C15.1126 9.88033 15.9516 9.04124 15.9516 8.0094C15.9516 6.97751 15.1126 6.13824 14.0807 6.13824C13.0488 6.13824 12.209 6.97751 12.209 8.0094C12.209 9.04124 13.0485 9.88033 14.0807 9.88033Z" fill="#ffffff" />
                            <path d="M1.91412 12.1149C0.882452 12.1149 0.0427856 12.954 0.0427856 13.9859C0.0427856 15.0173 0.882452 15.8568 1.91412 15.8568C2.94578 15.8568 3.78504 15.0177 3.78504 13.9859C3.78504 12.954 2.94578 12.1149 1.91412 12.1149Z" fill="#ffffff" />
                            <path d="M7.9699 12.1149C6.93818 12.1149 6.09857 12.954 6.09857 13.9859C6.09857 15.0173 6.93789 15.8568 7.9699 15.8568C9.00139 15.8568 9.84083 15.0177 9.84083 13.9859C9.84083 12.954 9.00139 12.1149 7.9699 12.1149Z" fill="#ffffff" />
                            <path d="M14.1231 12.1149C13.0916 12.1149 12.2521 12.954 12.2521 13.9859C12.2521 15.0173 13.0916 15.8568 14.1231 15.8568C15.155 15.8568 15.9941 15.0177 15.9941 13.9859C15.9941 12.954 15.1546 12.1149 14.1231 12.1149Z" fill="#ffffff" />
                        </g>
                        <defs>
                            <clipPath id="clip0_19_537">
                                <rect width="16" height="16" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="offcanvas offcanvas-start offcanvas-nav">
                    <div class="offcanvas-header">
                        <a href="index.html" class="text-inverse"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.svg" alt="fnpa"></a>
                    </div>
                    <div class="offcanvas-body pt-0 align-items-center justify-content-between">
                        <div class="tcmenu__navbar-wrap tcmenu__main-menu d-none d-md-none d-lg-flex">
                            <ul class="navbar-nav gap-4 me-auto align-items-lg-center navigation">
                                <li class="nav-item">
                                    <a class="nav-link fw-medium" href="index.html">Home</a>
                                </li>
                                <li class="nav-item dropdown menu-item-has-children">
                                    <a class="nav-link fw-medium" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">About</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="about.html">Background</a></li>
                                        <li><a class="dropdown-item" href="about.html">Objectives</a></li>
                                        <li><a class="dropdown-item" href="message.html">Message of the president</a></li>
                                        <li><a class="dropdown-item" href="committee.html">Central Committee 2024-2026</a></li>
                                        <li><a class="dropdown-item" href="committee.html">Central Committee 2078</a></li>
                                        <li><a class="dropdown-item" href="committee.html">Secretariat 2022</a></li>
                                        <li><a class="dropdown-item" href="committee.html">Central Comittee 2075</a></li>
                                        <li><a class="dropdown-item" href="committee.html">Advisory Member</a></li>
                                        <li><a class="dropdown-item" href="committee.html">Past President</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown menu-item-has-children">
                                    <a class="nav-link fw-medium" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Resource</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="blog.html">News</a></li>
                                        <li><a class="dropdown-item" href="events.html">Events & Activities</a></li>
                                        <li><a class="dropdown-item" href="notice.html">Notice</a></li>
                                        <li><a class="dropdown-item" href="downloads.html">Download</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown menu-item-has-children">
                                    <a class="nav-link fw-medium" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Members</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="committee.html">Founder Members</a></li>
                                        <li><a class="dropdown-item" href="committee.html">Honorary Members</a></li>
                                        <li><a class="dropdown-item" href="committee.html">Commodity Members</a></li>
                                        <li><a class="dropdown-item" href="committee.html">Institutional Members</a></li>
                                        <li><a class="dropdown-item" href="committee.html">Associate Members</a></li>
                                        <li><a class="dropdown-item" href="committee.html">General Members</a></li>
                                        <li><a class="dropdown-item" href="committee.html">District Co-Ordination Members</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-medium" href="gallery.html">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-medium" href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>                    
                        <div class="mt-3 mt-lg-0 d-flex align-items-center">
                            <a href="javascript:void(0)" class="ps-3 pe-2 border-end"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/search.svg" alt="fnpa" />
                            </a>
                            <a href="#" class="btn btn-primary btn-navbar rounded-circle px-2 ms-4 d-flex align-items-center justify-content-center red-btn"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_19_537)">
                                        <path d="M1.92024 0.143158C0.888516 0.143158 0.0492554 0.982476 0.0492554 2.01414C0.0492554 3.04581 0.888168 3.88507 1.92024 3.88507C2.95231 3.88507 3.79122 3.04581 3.79122 2.01414C3.79122 0.982476 2.95191 0.143158 1.92024 0.143158Z" fill="#ffffff" />
                                        <path d="M7.97566 0.143158C6.94399 0.143158 6.10468 0.982476 6.10468 2.01414C6.10468 3.04581 6.94399 3.88507 7.97566 3.88507C9.00738 3.88507 9.84682 3.04581 9.84682 2.01414C9.84682 0.982476 9.00773 0.143158 7.97566 0.143158Z" fill="#ffffff" />
                                        <path d="M14.129 3.88513C15.1605 3.88513 16 3.04587 16 2.0142C16 0.982534 15.1612 0.143158 14.129 0.143158C13.0969 0.143158 12.2581 0.982476 12.2581 2.01414C12.2581 3.04581 13.0975 3.88513 14.129 3.88513Z" fill="#ffffff" />
                                        <path d="M1.87133 9.88033C2.903 9.88033 3.74249 9.04124 3.74249 8.0094C3.74249 6.97751 2.903 6.13824 1.87133 6.13824C0.839666 6.13824 0 6.97756 0 8.0094C0 9.04124 0.839666 9.88033 1.87133 9.88033Z" fill="#ffffff" />
                                        <path d="M7.92677 9.88033C8.95826 9.88033 9.79775 9.04124 9.79775 8.0094C9.79775 6.97751 8.95896 6.13824 7.92677 6.13824C6.89476 6.13824 6.05579 6.97751 6.05579 8.0094C6.05579 9.04124 6.8951 9.88033 7.92677 9.88033Z" fill="#ffffff" />
                                        <path d="M14.0807 9.88033C15.1126 9.88033 15.9516 9.04124 15.9516 8.0094C15.9516 6.97751 15.1126 6.13824 14.0807 6.13824C13.0488 6.13824 12.209 6.97751 12.209 8.0094C12.209 9.04124 13.0485 9.88033 14.0807 9.88033Z" fill="#ffffff" />
                                        <path d="M1.91412 12.1149C0.882452 12.1149 0.0427856 12.954 0.0427856 13.9859C0.0427856 15.0173 0.882452 15.8568 1.91412 15.8568C2.94578 15.8568 3.78504 15.0177 3.78504 13.9859C3.78504 12.954 2.94578 12.1149 1.91412 12.1149Z" fill="#ffffff" />
                                        <path d="M7.9699 12.1149C6.93818 12.1149 6.09857 12.954 6.09857 13.9859C6.09857 15.0173 6.93789 15.8568 7.9699 15.8568C9.00139 15.8568 9.84083 15.0177 9.84083 13.9859C9.84083 12.954 9.00139 12.1149 7.9699 12.1149Z" fill="#ffffff" />
                                        <path d="M14.1231 12.1149C13.0916 12.1149 12.2521 12.954 12.2521 13.9859C12.2521 15.0173 13.0916 15.8568 14.1231 15.8568C15.155 15.8568 15.9941 15.0177 15.9941 13.9859C15.9941 12.954 15.1546 12.1149 14.1231 12.1149Z" fill="#ffffff" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_19_537">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>       
        </nav>
        <!-- Mobile Menu  -->
        <div class="tcmobile__menu">
            <nav class="tcmobile__menu-box">
                <div class="close-btn"><i class="fas fa-times"></i></div>
                <div class="nav-logo">
                    <a class="mobi-logo" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.svg" alt="fnpa"></a>
                </div>
                <div class="tcmobile__search">
                    <form action="#">
                        <input type="text" class="form-control shadow-none" placeholder="Search here...">
                        <button><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/search.svg" alt="fnpa"></button>
                    </form>
                </div>
                <div class="tcmobile__menu-outer">
                </div>
                <div class="tcmobile__menu-bottom">
                    <div class="contact-info">
                        <ul class="list-wrap list-unstyled">
                            <li><a href="mailto:info@fnpajsc.com">contact@fnpajsc.com</a></li>
                            <li><a href="tel:0123456789">(229) 555-0109</a></li>
                        </ul>
                    </div>
                    <div class="social-links">
                        <ul class="list-wrap">
                            <li> 
                                <a href="https://www.facebook.com/" class=" text-reset">
                                    <i class="bi bi-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" class=" text-reset">
                                    <i class="bi bi-twitter-x"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" class=" text-reset">
                                    <i class="bi bi-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/" class=" text-reset">
                                    <i class="bi bi-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="tcmobile__menu-backdrop"></div>
        <!-- End Mobile Menu -->
        <!-- Offcanvas menu -->
        <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions">
            <div class="offcanvas-header mt-3 me-3">
                <button  class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="offCanvas__logo mb-5">
                    <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.svg" alt="Logo"></a>
                </div>
                <div class="offCanvas__side-info mb-4">
                    <div class="contact-list mb-5">
                        <h4>Office Address</h4>
                        <p>123/A, Miranda City Likaoli <br> Prikano, Dope</p>
                    </div>
                    <hr class="mb-5">
                    <div class="contact-list mb-5">
                        <h4>Phone Number</h4>
                        <p>+0989 7876 9865 9</p>
                        <p>+(090) 8765 86543 85</p>
                    </div>
                    <hr class="mb-5">
                    <div class="contact-list mb-5">
                        <h4>Email Address</h4>
                        <p>info@example.com</p>
                        <p>example.mail@hum.com</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Offcanvas menu -->
        <!-- Offcanvas search -->
        <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop">
            <div class="offcanvas-header">
                <button  class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="container">
                    <div class="row">
                        <div class="col-8 col-lg-12">
                            <h3 class="mb-4">What are you looking for?</h3>
                            <div class="input-group mb-3" data-aos="zoom-in">
                                <input type="text" class="form-control" placeholder="Enter Your Keywords" aria-label="Enter Your Keywords" aria-describedby="button-addon2">
                                <button class="btn-primary"  id="button-addon2"><i class="bi bi-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Offcanvas search -->
    </header>


       <div class="tcmenu__navbar-wrap tcmenu__main-menu d-block d-md-block d-lg-none">
        <div class="container">
            <ul class="mobile-men">
                <li class="nav-item">
                    <a class="nav-link fw-medium" href="index.html">Home</a>
                </li>
                <li class="nav-item dropdown menu-item-has-children">
                    <a class="nav-link fw-medium" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">About</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="about.html">Background</a></li>
                        <li><a class="dropdown-item" href="about.html">Objectives</a></li>
                        <li><a class="dropdown-item" href="message.html">Message of the president</a></li>
                        <li><a class="dropdown-item" href="committee.html">Central Committee 2024-2026</a></li>
                        <li><a class="dropdown-item" href="committee.html">Central Committee 2078</a></li>
                        <li><a class="dropdown-item" href="committee.html">Secretariat 2022</a></li>
                        <li><a class="dropdown-item" href="committee.html">Central Comittee 2075</a></li>
                        <li><a class="dropdown-item" href="committee.html">Advisory Member</a></li>
                        <li><a class="dropdown-item" href="committee.html">Past President</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown menu-item-has-children">
                    <a class="nav-link fw-medium" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Resource</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="blog.html">News</a></li>
                        <li><a class="dropdown-item" href="events.html">Events & Activities</a></li>
                        <li><a class="dropdown-item" href="notice.html">Notice</a></li>
                        <li><a class="dropdown-item" href="downloads.html">Download</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium" href="gallery.html">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium" href="contact.html">Contact</a>
                </li>
            </ul>  
        </div>
    </div>