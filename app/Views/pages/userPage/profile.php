<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
	<base href="<?= base_url('') ?>">
	<title><?= isset($view_name) ? $view_name : 'Default Title' ?></title>
	<meta name="description"
		content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
	<meta name="keywords"
		content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta charset="utf-8" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title"
		content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
	<meta property="og:url" content="https://keenthemes.com/metronic" />
	<meta property="og:site_name" content="Keenthemes | Metronic" />
	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
	<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="<?= base_url('assets/plugins/global/plugins.bundle.css'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/css/style.bundle.css'); ?>" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
	class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
	style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
			<!--begin::Aside-->
			<?php include APPPATH . 'Views/templates/sideMenu.php'; ?>
			<!--end::Aside-->
			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<!--begin::Header-->
				<?php include APPPATH . 'Views/templates/header.php'; ?>
				<!--end::Header-->
				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<!--begin::Post-->
					<div class="post d-flex flex-column-fluid" id="kt_post">
						<!--begin::Container-->
						<div id="kt_content_container" class="container-xxl">
							<!--begin::Navbar-->
							<div class="card mb-5 mb-xl-10">
								<div class="card-body pt-9 pb-0">
									<!--begin::Details-->
									<div class="d-flex flex-wrap flex-sm-nowrap mb-3">
										<!--begin: Pic-->
										<div class="me-7 mb-4">
											<!-- En la sección de detalles del usuario -->
											<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
												<img src="<?= $user['avatar'] ?>" alt="avatar" id="profile-avatar" />
											</div>
										</div>
										<!--end::Pic-->

										<!--begin::Info-->
										<div class="flex-grow-1">
											<!--begin::Title-->
											<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
												<!--begin::User-->
												<div class="d-flex flex-column">
													<!--begin::Username-->
													<div class="d-flex align-items-center mb-2">
														<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">
															<?= esc($user['username']) ?>
														</a>
													</div>
													<!--end::Username-->
												</div>
												<!--end::User-->
											</div>
											<!--end::Title-->

											<!--begin::Stats-->
											<div class="d-flex flex-wrap flex-stack">
												<!--begin::Wrapper-->
												<div class="d-flex flex-column flex-grow-1 pe-8">
													<!--begin::Stats-->
													<div class="d-flex flex-wrap">
														<!--begin::Stat (Favoritos)-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
															<div class="d-flex align-items-center">
																<span class="svg-icon svg-icon-3 svg-icon-success me-2">
																	<!-- SVG de favoritos -->
																</span>
																<div class="fs-2 fw-bolder" data-kt-countup="true"
																	data-kt-countup-value="<?= $user['favorites_count'] ?>">0</div>
															</div>
															<div class="fw-bold fs-6 text-gray-400">Favorites</div>
														</div>
														<!--end::Stat-->

														<!--begin::Stat (Adopciones)-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
															<div class="d-flex align-items-center">
																<span class="svg-icon svg-icon-3 svg-icon-danger me-2">
																	<!-- SVG de adopciones -->
																</span>
																<div class="fs-2 fw-bolder" data-kt-countup="true"
																	data-kt-countup-value="<?= $user['adoptions_count'] ?>">0</div>
															</div>
															<div class="fw-bold fs-6 text-gray-400">Adoptions</div>
														</div>
														<!--end::Stat-->
													</div>
													<!--end::Stats-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Stats-->
										</div>
										<!--end::Info-->
									</div>
									<!--end::Details-->
									<!--begin::Navs-->
									<div class="d-flex overflow-auto h-55px">
										<ul
											class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder flex-nowrap">
											<!--begin::Nav item-->
											<li class="nav-item">
												<a class="nav-link text-active-primary me-6 active"
													href="<?= base_url('profile') ?>">Overview</a>
											</li>
											<!--end::Nav item-->
										</ul>
									</div>
									<!--begin::Navs-->
								</div>
							</div>
							<!--end::Navbar-->
							<!-- Modal -->
							<div class="modal fade" id="kt_modal_edit_profile" tabindex="-1" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<div class="modal-content">
										<!--begin::Modal header-->
										<div class="modal-header" id="kt_modal_edit_profile_header">
											<h2 class="fw-bolder">Edit Profile</h2>
										</div>
										<!--end::Modal header-->

										<!--begin::Modal body-->
										<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
											<!--begin::Form-->
											<form id="kt_modal_edit_profile_form" action="<?= base_url('profile/update') ?>" method="post">
												<?= csrf_field() ?>
												<input type="hidden" name="id" value="<?= session('id') ?>">

												<div class="fv-row mb-7">
													<label class="fw-bold fs-6 mb-2">Avatar</label>
													<div class="d-flex flex-wrap">
														<?php foreach (glob(FCPATH . 'assets/media/cats/*.jpg') as $image): ?>
															<div class="symbol symbol-50px me-3 mb-3">
																<img src="<?= base_url('assets/media/cats/' . basename($image)) ?>" alt="cat"
																	class="cursor-pointer"
																	onclick="selectAvatar('<?= base_url('assets/media/cats/' . basename($image)) ?>')">
															</div>
														<?php endforeach; ?>
													</div>
													<input type="hidden" name="avatar" id="selected-avatar" value="<?= $user['avatar'] ?>">
												</div>

												<!-- Username -->
												<div class="fv-row mb-7">
													<label class="required fw-bold fs-6 mb-2">Username</label>
													<input type="text" name="username" class="form-control form-control-solid"
														value="<?= esc($user['username']) ?>" required />
												</div>

												<!-- Email -->
												<div class="fv-row mb-7">
													<label class="required fw-bold fs-6 mb-2">Email</label>
													<input type="email" name="email" class="form-control form-control-solid"
														value="<?= esc($user['email']) ?>" required />
												</div>

												<!-- Role (solo lectura si no se permite cambiar) -->
												<div class="fv-row mb-7">
													<label class="fw-bold fs-6 mb-2">Role</label>
													<input type="text" class="form-control form-control-solid"
														value="<?= esc($user['role_name']) ?>" disabled />
												</div>

												<!-- Current Password -->
												<div class="fv-row mb-7">
													<label class="required fw-bold fs-6 mb-2">Current Password</label>
													<div class="input-group">
														<input type="password" name="current_password" class="form-control form-control-solid"
															placeholder="Enter current password" required />
														<span class="input-group-text">
															<i class="fas fa-eye" id="toggleCurrentPassword" style="cursor: pointer;"></i>
														</span>
													</div>
												</div>

												<!-- New Password -->
												<div class="fv-row mb-7">
													<label class="fw-bold fs-6 mb-2">New Password</label>
													<div class="input-group">
														<input type="password" name="new_password" class="form-control form-control-solid"
															placeholder="Leave blank to keep current" />
														<span class="input-group-text">
															<i class="fas fa-eye" id="toggleNewPassword" style="cursor: pointer;"></i>
														</span>
													</div>
												</div>

												<!-- Confirm Password -->
												<div class="fv-row mb-7">
													<label class="fw-bold fs-6 mb-2">Confirm New Password</label>
													<div class="input-group">
														<input type="password" name="confirm_password" class="form-control form-control-solid"
															placeholder="Confirm new password" />
														<span class="input-group-text">
															<i class="fas fa-eye" id="toggleConfirmPassword" style="cursor: pointer;"></i>
														</span>
													</div>
												</div>

												<!-- Actions -->
												<div class="text-center pt-15">
													<button type="button" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
													<button type="submit" class="btn btn-primary">
														<span class="indicator-label">Save</span>
														<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span>
														</span>
													</button>
												</div>
											</form>
											<!--end::Form-->
										</div>
										<!--end::Modal body-->
									</div>
								</div>
							</div>
							<!--begin::details View-->
							<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
								<!--begin::Card header-->
								<div class="card-header cursor-pointer">
									<!--begin::Card title-->
									<div class="card-title m-0">
										<h3 class="fw-bolder m-0">Profile Details</h3>
									</div>
									<!--end::Card title-->
									<!--begin::Action-->
									<a href="javascript:void(0)" class="btn btn-primary align-self-center" data-bs-toggle="modal"
										data-bs-target="#kt_modal_edit_profile">
										Edit Profile
									</a>
									<!--end::Action-->
								</div>
								<!--begin::Card header-->
								<!--begin::CardBody-->
								<div class="card-body border-top p-9">
									<!--begin::Username-->
									<div class="row mb-7">
										<label class="col-lg-4 fw-bold text-muted">Username</label>
										<div class="col-lg-8">
											<span class="fw-bolder fs-6 text-gray-800"><?= esc($user['username']) ?></span>
										</div>
									</div>
									<!--end::Username-->

									<!--begin::Email-->
									<div class="row mb-7">
										<label class="col-lg-4 fw-bold text-muted">Email</label>
										<div class="col-lg-8">
											<span class="fw-bolder fs-6 text-gray-800"><?= esc($user['email']) ?></span>
										</div>
									</div>
									<!--end::Email-->

									<!--begin::Role-->
									<div class="row mb-7">
										<label class="col-lg-4 fw-bold text-muted">Role</label>
										<div class="col-lg-8">
											<span class="fw-bolder fs-6 text-gray-800"><?= esc($user['role_name']) ?></span>
										</div>
									</div>
									<!--end::Role-->

									<!--begin::Creation Date-->
									<div class="row mb-7">
										<label class="col-lg-4 fw-bold text-muted">Created At</label>
										<div class="col-lg-8">
											<span
												class="fw-bolder fs-6 text-gray-800"><?= date('d M Y, H:i A', strtotime($user['created_at'])) ?></span>
										</div>
									</div>
									<!--end::Creation Date-->

									<!--begin::Update Date-->
									<div class="row mb-7">
										<label class="col-lg-4 fw-bold text-muted">Last Update</label>
										<div class="col-lg-8">
											<span
												class="fw-bolder fs-6 text-gray-800"><?= date('d M Y, H:i A', strtotime($user['updated_at'])) ?></span>
										</div>
									</div>
									<!--end::Update Date-->

									<!--begin::Password-->
									<div class="row mb-7">
										<label class="col-lg-4 fw-bold text-muted">Password</label>
										<div class="col-lg-8">
											<span class="fw-bolder fs-6 text-gray-800">
												********
											</span>
										</div>
									</div>
									<!--end::Password-->
								</div>
								<!--end::CardBody-->
							</div>

							<!--end::details View-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Post-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<?php include(APPPATH . 'Views/templates/footer.php'); ?>
				<!--end::Footer-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Root-->

	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
		<span class="svg-icon">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
				<path
					d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
					fill="black" />
			</svg>
		</span>
		<!--end::Svg Icon-->
	</div>
	<!--end::Scrolltop-->
	<!--end::Main-->
	<!--begin::Javascript-->
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="<?= base_url('assets/plugins/global/plugins.bundle.js') ?>"></script>
	<script src="<?= base_url('assets/js/scripts.bundle.js') ?>"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Page Custom Javascript(used by this page)-->
	<script src="<?= base_url('assets/js/ownJs/profile.js') ?>"></script>
	<!--end::Page Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>