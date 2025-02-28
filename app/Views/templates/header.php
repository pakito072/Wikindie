<!--begin::Header-->
<div id="kt_header" class="header align-items-stretch">
	<!--begin::Container-->
	<div class="container-fluid d-flex align-items-stretch justify-content-between">
		<!--begin::Aside mobile toggle-->
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<!--begin::Page title-->
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend"
				data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
				class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<!--begin::Title-->
				<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">
					<?php echo isset($view_name) ? $view_name : 'View'; ?>
					<!--begin::Separator-->
					<span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
					<!--end::Separator-->
					<!--begin::Breadcrumb-->
					<?php if (isset($breadcrumbs))
						echo $breadcrumbs; ?>
					<!--end::Breadcrumb-->
				</h1>
				<!--end::Title-->
			</div>
			<!--end::Page title-->
		</div>
		<!--end::Aside mobile toggle-->
		<!--begin::Mobile logo-->
		<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 start-0">
			<a href="./index.php" class="d-lg-none">
				<img alt="Logo" src="assets/media/logos/logo-2.svg" class="h-30px" />
			</a>
		</div>
		<!--end::Mobile logo-->

		<a href="<?= base_url('signOut') ?>" class="d-flex align-items-center">
			<button type="button" class="btn btn-danger text-dark  text-hover-primary">
				SignOut
			</button>
		</a>


	</div>
</div>
<!--end::Container-->
<!--end::Header-->