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
	<base href="<?= base_url() ?>">
	<title>Sign in</title>
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
	<link rel="shortcut icon" href="<?= base_url('/assets/media/logos/favicon') ?>" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="<?= base_url('assets/plugins/global/plugins.bundle.css') ?>" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/css/style.bundle.css') ?>" rel="stylesheet" type="text/css" />

	<!--end::Global Stylesheets Bundle-->

</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-body">
	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Authentication - Sign-in -->
		<div class="d-flex flex-column flex-lg-row flex-column-fluid">
			<!--begin::Aside-->
			<?php include APPPATH . 'Views/templates/aside.php'; ?>
			<!--end::Aside-->
			<!--begin::Body-->
			<div class="d-flex flex-column flex-lg-row-fluid py-10">
				<!--begin::Content-->
				<div class="d-flex flex-center flex-column flex-column-fluid">
					<!--begin::Wrapper-->
					<div class="w-lg-500px p-10 p-lg-15 mx-auto">
						<!--begin::Form-->
						<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="post" action="<?= base_url('signIn') ?>">
							<!--begin::Heading-->
							<div class="text-center mb-10">
								<!--begin::Title-->
								<h1 class="text-dark mb-3">Log in to Wikindie</h1>
								<!--end::Title-->
								<!--begin::Link-->
								<div class="text-gray-400 fw-bold fs-4">New Here?
									<a href="<?= base_url('signUp') ?>" class="link-primary fw-bolder ">Create an
										Account</a>
								</div>
								<!--end::Link-->
							</div>
							<!--begin::Heading-->
							<?php if (session()->get('error')): ?>
								<p style="color: red;"><?= session()->get('error') ?></p>
							<?php endif; ?>
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label fs-6 fw-bolder text-dark">Email</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input class="form-control form-control-lg form-control-solid" type="text" name="email"
									autocomplete="off" />
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack mb-2">
									<!--begin::Label-->
									<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
									<!--end::Label-->
									<!--begin::Link-->
									<a href="<?= base_url('forgotPassword') ?>" class="link-primary fs-6 fw-bolder ">Forgot
										Password ?</a>
									<!--end::Link-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Input-->
								<input class="form-control form-control-lg form-control-solid" type="password" name="password"
									autocomplete="off" />
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="text-center">
								<!--begin::Submit button-->
								<button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-custom w-100 mb-5">
									<span class="indicator-label">Continue</span>
									<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
								<!--end::Submit button-->
								<!--begin::Separator-->
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
					<!--begin::Links-->
					<div class="d-flex flex-center fw-bold fs-6">
						<a href="https://keenthemes.com" class="text-muted text-hover-primary px-2" target="_blank">About</a>
						<a href="https://keenthemes.com/support" class="text-muted text-hover-primary px-2"
							target="_blank">Support</a>
					</div>
					<!--end::Links-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Body-->
		</div>
		<!--end::Authentication - Sign-in-->
	</div>
	<!--end::Main-->
	<script>var hostUrl = "assets/";</script>
	<!--begin::Javascript-->
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="<?= base_url('assets/plugins/global/plugins.bundle.js') ?>"></script>
	<script src="<?= base_url('assets/js/scripts.bundle.js') ?>"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Page Custom Javascript(used by this page)-->
	<!--end::Page Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>