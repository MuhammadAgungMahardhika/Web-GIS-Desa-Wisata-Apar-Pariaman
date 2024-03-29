<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Photo Gallery - Mazer Admin Dashboard</title>

	<link rel="stylesheet" href="assets/css/main/app.css">
	<link rel="stylesheet" href="assets/css/main/app-dark.css">
	<link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
	<link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">

</head>

<body>
	<div id="app">
		<div id="sidebar" class="active">
			<div class="sidebar-wrapper active">
				<div class="sidebar-header position-relative">
					<div class="d-flex justify-content-between align-items-center">
						<div class="logo">
							<a href="index.html"><img src="assets/images/logo/logo.svg" alt="Logo" srcset=""></a>
						</div>
						<div class="theme-toggle d-flex gap-2  align-items-center mt-2">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
								<g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
									<path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path>
									<g transform="translate(-210 -1)">
										<path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
										<circle cx="220.5" cy="11.5" r="4"></circle>
										<path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
									</g>
								</g>
							</svg>
							<div class="form-check form-switch fs-6">
								<input class="form-check-input  me-0" type="checkbox" id="toggle-dark">
								<label class="form-check-label"></label>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
								<path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path>
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

						<li class="sidebar-item  ">
							<a href="index.html" class='sidebar-link'>
								<i class="bi bi-grid-fill"></i>
								<span>Dashboard</span>
							</a>
						</li>

						<li class="sidebar-item  has-sub">
							<a href="#" class='sidebar-link'>
								<i class="bi bi-stack"></i>
								<span>Components</span>
							</a>
							<ul class="submenu ">
								<li class="submenu-item ">
									<a href="component-alert.html">Alert</a>
								</li>
								<li class="submenu-item ">
									<a href="component-badge.html">Badge</a>
								</li>
								<li class="submenu-item ">
									<a href="component-breadcrumb.html">Breadcrumb</a>
								</li>
								<li class="submenu-item ">
									<a href="component-button.html">Button</a>
								</li>
								<li class="submenu-item ">
									<a href="component-card.html">Card</a>
								</li>
								<li class="submenu-item ">
									<a href="component-carousel.html">Carousel</a>
								</li>
								<li class="submenu-item ">
									<a href="component-collapse.html">Collapse</a>
								</li>
								<li class="submenu-item ">
									<a href="component-dropdown.html">Dropdown</a>
								</li>
								<li class="submenu-item ">
									<a href="component-list-group.html">List Group</a>
								</li>
								<li class="submenu-item ">
									<a href="component-modal.html">Modal</a>
								</li>
								<li class="submenu-item ">
									<a href="component-navs.html">Navs</a>
								</li>
								<li class="submenu-item ">
									<a href="component-pagination.html">Pagination</a>
								</li>
								<li class="submenu-item ">
									<a href="component-progress.html">Progress</a>
								</li>
								<li class="submenu-item ">
									<a href="component-spinner.html">Spinner</a>
								</li>
								<li class="submenu-item ">
									<a href="component-tooltip.html">Tooltip</a>
								</li>
							</ul>
						</li>

						<li class="sidebar-item  has-sub">
							<a href="#" class='sidebar-link'>
								<i class="bi bi-collection-fill"></i>
								<span>Extra Components</span>
							</a>
							<ul class="submenu ">
								<li class="submenu-item ">
									<a href="extra-component-avatar.html">Avatar</a>
								</li>
								<li class="submenu-item ">
									<a href="extra-component-sweetalert.html">Sweet Alert</a>
								</li>
								<li class="submenu-item ">
									<a href="extra-component-toastify.html">Toastify</a>
								</li>
								<li class="submenu-item ">
									<a href="extra-component-rating.html">Rating</a>
								</li>
								<li class="submenu-item ">
									<a href="extra-component-divider.html">Divider</a>
								</li>
							</ul>
						</li>

						<li class="sidebar-item  has-sub">
							<a href="#" class='sidebar-link'>
								<i class="bi bi-grid-1x2-fill"></i>
								<span>Layouts</span>
							</a>
							<ul class="submenu ">
								<li class="submenu-item ">
									<a href="layout-default.html">Default Layout</a>
								</li>
								<li class="submenu-item ">
									<a href="layout-vertical-1-column.html">1 Column</a>
								</li>
								<li class="submenu-item ">
									<a href="layout-vertical-navbar.html">Vertical Navbar</a>
								</li>
								<li class="submenu-item ">
									<a href="layout-rtl.html">RTL Layout</a>
								</li>
								<li class="submenu-item ">
									<a href="layout-horizontal.html">Horizontal Menu</a>
								</li>
							</ul>
						</li>

						<li class="sidebar-title">Forms &amp; Tables</li>

						<li class="sidebar-item  has-sub">
							<a href="#" class='sidebar-link'>
								<i class="bi bi-hexagon-fill"></i>
								<span>Form Elements</span>
							</a>
							<ul class="submenu ">
								<li class="submenu-item ">
									<a href="form-element-input.html">Input</a>
								</li>
								<li class="submenu-item ">
									<a href="form-element-input-group.html">Input Group</a>
								</li>
								<li class="submenu-item ">
									<a href="form-element-select.html">Select</a>
								</li>
								<li class="submenu-item ">
									<a href="form-element-radio.html">Radio</a>
								</li>
								<li class="submenu-item ">
									<a href="form-element-checkbox.html">Checkbox</a>
								</li>
								<li class="submenu-item ">
									<a href="form-element-textarea.html">Textarea</a>
								</li>
							</ul>
						</li>

						<li class="sidebar-item  ">
							<a href="form-layout.html" class='sidebar-link'>
								<i class="bi bi-file-earmark-medical-fill"></i>
								<span>Form Layout</span>
							</a>
						</li>

						<li class="sidebar-item  has-sub">
							<a href="#" class='sidebar-link'>
								<i class="bi bi-pen-fill"></i>
								<span>Form Editor</span>
							</a>
							<ul class="submenu ">
								<li class="submenu-item ">
									<a href="form-editor-quill.html">Quill</a>
								</li>
								<li class="submenu-item ">
									<a href="form-editor-ckeditor.html">CKEditor</a>
								</li>
								<li class="submenu-item ">
									<a href="form-editor-summernote.html">Summernote</a>
								</li>
								<li class="submenu-item ">
									<a href="form-editor-tinymce.html">TinyMCE</a>
								</li>
							</ul>
						</li>

						<li class="sidebar-item  ">
							<a href="table.html" class='sidebar-link'>
								<i class="bi bi-grid-1x2-fill"></i>
								<span>Table</span>
							</a>
						</li>

						<li class="sidebar-item  has-sub">
							<a href="#" class='sidebar-link'>
								<i class="bi bi-file-earmark-spreadsheet-fill"></i>
								<span>Datatables</span>
							</a>
							<ul class="submenu ">
								<li class="submenu-item ">
									<a href="table-datatable.html">Datatable</a>
								</li>
								<li class="submenu-item ">
									<a href="table-datatable-jquery.html">Datatable (jQuery)</a>
								</li>
							</ul>
						</li>

						<li class="sidebar-title">Extra UI</li>

						<li class="sidebar-item  has-sub">
							<a href="#" class='sidebar-link'>
								<i class="bi bi-pentagon-fill"></i>
								<span>Widgets</span>
							</a>
							<ul class="submenu ">
								<li class="submenu-item ">
									<a href="ui-widgets-chatbox.html">Chatbox</a>
								</li>
								<li class="submenu-item ">
									<a href="ui-widgets-pricing.html">Pricing</a>
								</li>
								<li class="submenu-item ">
									<a href="ui-widgets-todolist.html">To-do List</a>
								</li>
							</ul>
						</li>

						<li class="sidebar-item  has-sub">
							<a href="#" class='sidebar-link'>
								<i class="bi bi-egg-fill"></i>
								<span>Icons</span>
							</a>
							<ul class="submenu ">
								<li class="submenu-item ">
									<a href="ui-icons-bootstrap-icons.html">Bootstrap Icons </a>
								</li>
								<li class="submenu-item ">
									<a href="ui-icons-fontawesome.html">Fontawesome</a>
								</li>
								<li class="submenu-item ">
									<a href="ui-icons-dripicons.html">Dripicons</a>
								</li>
							</ul>
						</li>

						<li class="sidebar-item  has-sub">
							<a href="#" class='sidebar-link'>
								<i class="bi bi-bar-chart-fill"></i>
								<span>Charts</span>
							</a>
							<ul class="submenu ">
								<li class="submenu-item ">
									<a href="ui-chart-chartjs.html">ChartJS</a>
								</li>
								<li class="submenu-item ">
									<a href="ui-chart-apexcharts.html">Apexcharts</a>
								</li>
							</ul>
						</li>

						<li class="sidebar-item  ">
							<a href="ui-file-uploader.html" class='sidebar-link'>
								<i class="bi bi-cloud-arrow-up-fill"></i>
								<span>File Uploader</span>
							</a>
						</li>

						<li class="sidebar-item  has-sub">
							<a href="#" class='sidebar-link'>
								<i class="bi bi-map-fill"></i>
								<span>Maps</span>
							</a>
							<ul class="submenu ">
								<li class="submenu-item ">
									<a href="ui-map-google-map.html">Google Map</a>
								</li>
								<li class="submenu-item ">
									<a href="ui-map-jsvectormap.html">JS Vector Map</a>
								</li>
							</ul>
						</li>

						<li class="sidebar-title">Pages</li>

						<li class="sidebar-item  ">
							<a href="application-email.html" class='sidebar-link'>
								<i class="bi bi-envelope-fill"></i>
								<span>Email Application</span>
							</a>
						</li>

						<li class="sidebar-item  ">
							<a href="application-chat.html" class='sidebar-link'>
								<i class="bi bi-chat-dots-fill"></i>
								<span>Chat Application</span>
							</a>
						</li>

						<li class="sidebar-item active ">
							<a href="application-gallery.html" class='sidebar-link'>
								<i class="bi bi-image-fill"></i>
								<span>Photo Gallery</span>
							</a>
						</li>

						<li class="sidebar-item  ">
							<a href="application-checkout.html" class='sidebar-link'>
								<i class="bi bi-basket-fill"></i>
								<span>Checkout Page</span>
							</a>
						</li>

						<li class="sidebar-item  has-sub">
							<a href="#" class='sidebar-link'>
								<i class="bi bi-person-badge-fill"></i>
								<span>Authentication</span>
							</a>
							<ul class="submenu ">
								<li class="submenu-item ">
									<a href="auth-login.html">Login</a>
								</li>
								<li class="submenu-item ">
									<a href="auth-register.html">Register</a>
								</li>
								<li class="submenu-item ">
									<a href="auth-forgot-password.html">Forgot Password</a>
								</li>
							</ul>
						</li>

						<li class="sidebar-item  has-sub">
							<a href="#" class='sidebar-link'>
								<i class="bi bi-x-octagon-fill"></i>
								<span>Errors</span>
							</a>
							<ul class="submenu ">
								<li class="submenu-item ">
									<a href="error-403.html">403</a>
								</li>
								<li class="submenu-item ">
									<a href="error-404.html">404</a>
								</li>
								<li class="submenu-item ">
									<a href="error-500.html">500</a>
								</li>
							</ul>
						</li>

						<li class="sidebar-title">Raise Support</li>

						<li class="sidebar-item  ">
							<a href="https://zuramai.github.io/mazer/docs" class='sidebar-link'>
								<i class="bi bi-life-preserver"></i>
								<span>Documentation</span>
							</a>
						</li>

						<li class="sidebar-item  ">
							<a href="https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md" class='sidebar-link'>
								<i class="bi bi-puzzle"></i>
								<span>Contribute</span>
							</a>
						</li>

						<li class="sidebar-item  ">
							<a href="https://github.com/zuramai/mazer#donation" class='sidebar-link'>
								<i class="bi bi-cash"></i>
								<span>Donate</span>
							</a>
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
						<div class="col-12 col-md-6 order-md-1 order-last">
							<h3>Photo Gallery</h3>
							<p class="text-subtitle text-muted">Super simple photo gallery</p>
						</div>
						<div class="col-12 col-md-6 order-md-2 order-first">
							<nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active" aria-current="page">Photo Gallery</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<section class="section">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Our Gallery</h5>
								</div>
								<div class="card-body">
									<div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
										<div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
											<a href="#">
												<img class="w-100 active" src="https://images.unsplash.com/photo-1633008808000-ce86bff6c1ed?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyN3x8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" data-bs-target="#Gallerycarousel" data-bs-slide-to="0">
											</a>
										</div>
										<div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
											<a href="#">
												<img class="w-100" src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80" data-bs-target="#Gallerycarousel" data-bs-slide-to="1">
											</a>
										</div>
										<div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
											<a href="#">
												<img class="w-100" src="https://images.unsplash.com/photo-1632951634308-d7889939c125?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0M3x8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" data-bs-target="#Gallerycarousel" data-bs-slide-to="2">
											</a>
										</div>
										<div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
											<a href="#">
												<img class="w-100" src="https://images.unsplash.com/photo-1632949107130-fc0d4f747b26?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw3OHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" data-bs-target="#Gallerycarousel" data-bs-slide-to="3">
											</a>
										</div>
									</div>

									<div class="row mt-2 mt-md-4 gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
										<div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
											<a href="#">
												<img class="w-100 active" src="https://images.unsplash.com/photo-1633008808000-ce86bff6c1ed?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyN3x8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" data-bs-target="#Gallerycarousel" data-bs-slide-to="0">
											</a>
										</div>
										<div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
											<a href="#">
												<img class="w-100" src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80" data-bs-target="#Gallerycarousel" data-bs-slide-to="1">
											</a>
										</div>
										<div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
											<a href="#">
												<img class="w-100" src="https://images.unsplash.com/photo-1632951634308-d7889939c125?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0M3x8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" data-bs-target="#Gallerycarousel" data-bs-slide-to="2">
											</a>
										</div>
										<div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
											<a href="#">
												<img class="w-100" src="https://images.unsplash.com/photo-1632949107130-fc0d4f747b26?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw3OHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" data-bs-target="#Gallerycarousel" data-bs-slide-to="3">
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>

			<div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="galleryModalTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="galleryModalTitle">Our Gallery Example</h5>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<i data-feather="x"></i>
							</button>
						</div>
						<div class="modal-body">

							<div id="Gallerycarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
								<div class="carousel-indicators">
									<button type="button" data-bs-target="#Gallerycarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
									<button type="button" data-bs-target="#Gallerycarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
									<button type="button" data-bs-target="#Gallerycarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
									<button type="button" data-bs-target="#Gallerycarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
								</div>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="https://images.unsplash.com/photo-1633008808000-ce86bff6c1ed?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyN3x8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="https://images.unsplash.com/photo-1632951634308-d7889939c125?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0M3x8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="https://images.unsplash.com/photo-1632949107130-fc0d4f747b26?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw3OHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
									</div>
								</div>
								<a class="carousel-control-prev" href="#Gallerycarousel" role="button" type="button" data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								</a>
								<a class="carousel-control-next" href="#Gallerycarousel" role="button" data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
								</a>
							</div>
						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>

			<footer>
				<div class="footer clearfix mb-0 text-muted">
					<div class="float-start">
						<p>2021 &copy; Mazer</p>
					</div>
					<div class="float-end">
						<p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="https://saugi.me">Saugi</a></p>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<script src="assets/js/app.js"></script>

</body>

</html>