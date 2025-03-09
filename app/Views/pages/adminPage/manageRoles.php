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
	<title>Manage Roles</title>
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
	<!--begin::Page Vendors Stylesheets(used by this page)-->
	<link href="<?= base_url('assets/plugins/custom/datatables/datatables.bundle.css'); ?>" rel="stylesheet"
		type="text/css" />
	<!--end::Page Vendors Stylesheets-->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
							<!--begin::Card-->
							<div class="card">
								<!--begin::Card header-->
								<div class="card-header border-0 pt-6">
									<!--begin::Card title-->
									<div class="card-title">
									</div>
									<!--begin::Card title-->
									<!--begin::Card toolbar-->
									<div class="card-toolbar">
										<!--begin::Toolbar-->
										<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
											<!--begin::Filter-->
											<button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click"
												data-kt-menu-placement="bottom-end">
												<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
														fill="none">
														<path
															d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
															fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->Filter
											</button>
											
											<!--end::Menu-->
											<!--end::Filter-->
										</div>
										<!--begin::Export-->
										<form method="get" action="" id="exportForm">
											<button type="submit" class="btn btn-light-primary me-3">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)"
															fill="black" />
														<path
															d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z"
															fill="black" />
														<path
															d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z"
															fill="#C4C4C4" />
													</svg>
												</span>
												<!--end::Svg Icon-->Export
											</button>
										</form>
										<!--end::Export-->
										<!--begin::Add user-->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal"
											data-bs-target="#kt_modal_add_user">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
														transform="rotate(-90 11.364 20.364)" fill="black" />
													<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->Add Role</button>
										<!--end::Add user-->
										<!--end::Toolbar-->
										<!--begin::Modal - Add task-->
										<div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
											<!--begin::Modal dialog-->
											<div class="modal-dialog modal-dialog-centered mw-650px">
												<!--begin::Modal content-->
												<div class="modal-content">
													<!--begin::Modal header-->
													<div class="modal-header" id="kt_modal_add_user_header">
														<h2 class="fw-bolder">Add User</h2>
													</div>
													<!--end::Modal header-->
													<!--begin::Modal body-->
													<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
														<!--begin::Form-->
														<form id="kt_modal_add_user_form" class="form" action="<?= base_url('manageUsers') ?>"
															method="post">
															<?= csrf_field() ?>
															<!--begin::Scroll-->
															<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll"
																data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
																data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header"
																data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">

																<!-- Username -->
																<div class="fv-row mb-7">
																	<label class="required fw-bold fs-6 mb-2">Username</label>
																	<input type="text" name="username"
																		class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Enter username"
																		required />
																</div>

																<!-- Email -->
																<div class="fv-row mb-7">
																	<label class="required fw-bold fs-6 mb-2">Email</label>
																	<input type="email" name="email" class="form-control form-control-solid mb-3 mb-lg-0"
																		placeholder="Enter email" required />
																</div>

																<!-- Password -->
																<div class="fv-row mb-7">
																	<label class="required fw-bold fs-6 mb-2">Password</label>
																	<input type="password" name="password"
																		class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Enter password"
																		required />
																</div>

																<!-- Role -->
																<div class="fv-row mb-7">
																	<label class="required fw-bold fs-6 mb-2">Role</label>
																	<select name="role_id" class="form-control form-control-solid mb-3 mb-lg-0" required>
																		<?php foreach ($roles as $role): ?>
																			<option value="<?= $role['id'] ?>"><?= $role['name'] ?></option>
																		<?php endforeach; ?>
																	</select>
																</div>

															</div>
															<!--end::Scroll-->

															<!--begin::Actions-->
															<div class="text-center pt-15">
																<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel"
																	data-bs-dismiss="modal">Discard</button>
																<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
																	<span class="indicator-label">Submit</span>
																	<span class="indicator-progress">Please wait...
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																</button>
															</div>
															<!--end::Actions-->
														</form>
														<!--end::Form-->
													</div>
													<!--end::Modal body-->
												</div>
												<!--end::Modal content-->
											</div>
											<!--end::Modal dialog-->
										</div>
										<!--begin::Modal para Crear/Editar-->
										<div class="modal fade" id="kt_modal_edit_user" tabindex="-1" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered mw-650px">
												<div class="modal-content">
													<div class="modal-header" id="kt_modal_edit_user_header">
														<h2 class="fw-bolder">Edit User</h2>
													</div>
													<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
														<form id="kt_modal_edit_user_form" class="form"
															action="<?= base_url('manageUsers/update') ?>" method="post">
															<?= csrf_field() ?>
															<input type="hidden" name="id" id="edit_user_id">

															<div class="fv-row mb-7">
																<label class="required fw-bold fs-6 mb-2">Username</label>
																<input type="text" name="username" id="edit_username"
																	class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Enter username"
																	required />
															</div>

															<div class="fv-row mb-7">
																<label class="required fw-bold fs-6 mb-2">Email</label>
																<input type="email" name="email" id="edit_email"
																	class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Enter email"
																	required />
															</div>

															<div class="fv-row mb-7">
																<label class="fw-bold fs-6 mb-2">Password</label>
																<input type="password" name="password" id="edit_password"
																	class="form-control form-control-solid mb-3 mb-lg-0"
																	placeholder="Enter password (leave blank to keep current)" />
															</div>

															<div class="fv-row mb-7">
																<label class="required fw-bold fs-6 mb-2">Role</label>
																<select name="role_id" id="edit_role_id"
																	class="form-control form-control-solid mb-3 mb-lg-0" required>
																	<?php foreach ($roles as $role): ?>
																		<option value="<?= $role['id'] ?>"><?= $role['name'] ?></option>
																	<?php endforeach; ?>
																</select>
															</div>

															<div class="text-center pt-15">
																<button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
																<button type="submit" class="btn btn-primary">
																	<span class="indicator-label">Submit</span>
																	<span class="indicator-progress">Please wait...
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																</button>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!--end::Card toolbar-->
								</div>
								<!--end::Card header-->
								<!--begin::Content-->
								<div class="card-body pt-0">
									<!--begin::Table-->
									<!--begin::Table-->
									<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_roles">
										<!--begin::Table head-->
										<thead>
											<tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
												<th class="min-w-125px">
													<a
														href="<?= base_url('manageRoles?column=name&order=' . ($column == 'name' && $order == 'asc' ? 'desc' : 'asc') . '&perPage=' . $perPage . '&' . http_build_query($filters)) ?>">
														Role <?= ($column == 'name') ? ($order == 'asc' ? '↑' : '↓') : '' ?>
													</a>
												</th>
												<th class="min-w-125px">
													<a
														href="<?= base_url('manageRoles?column=created_at&order=' . ($column == 'created_at' && $order == 'asc' ? 'desc' : 'asc') . '&perPage=' . $perPage . '&' . http_build_query($filters)) ?>">
														Created <?= ($column == 'created_at') ? ($order == 'asc' ? '↑' : '↓') : '' ?>
													</a>
												</th>
												<th class="min-w-125px">
													<a
														href="<?= base_url('manageRoles?column=updated_at&order=' . ($column == 'updated_at' && $order == 'asc' ? 'desc' : 'asc') . '&perPage=' . $perPage . '&' . http_build_query($filters)) ?>">
														Updated <?= ($column == 'updated_at') ? ($order == 'asc' ? '↑' : '↓') : '' ?>
													</a>
												</th>
												<th class="text-end min-w-100px">Actions</th>
											</tr>
										</thead>
										<!--end::Table head-->
										<!--begin::Table body-->
										<tbody class="text-gray-600 fw-bold">
											<?php if (isset($roles) && count($roles) > 0): ?>
												<?php foreach ($roles as $role): ?>
													<!--begin::Table row-->
													<tr>
														<!--begin::Role-->
														<td>
															<div class="badge badge-light fw-bolder"><?= esc($role['name']); ?></div>
														</td>
														<!--end::Role-->
														<!--begin::Created At-->
														<td>
															<div><?= esc($role['created_at']); ?></div>
														</td>
														<!--end::Created At-->
														<!--begin::Updated At-->
														<td>
															<div><?= esc($role['updated_at']); ?></div>
														</td>
														<!--end::Updated At-->
														<!--begin::Actions-->
														<td class="text-end">
															<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click"
																data-kt-menu-placement="bottom-end">Actions
																<span class="svg-icon svg-icon-5 m-0">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
																		fill="none">
																		<path
																			d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																			fill="black" />
																	</svg>
																</span>
															</a>
															<div
																class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
																data-kt-menu="true">
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-bs-toggle="modal"
																		data-bs-target="#kt_modal_edit_role" data-id="<?= $role['id'] ?>"
																		data-name="<?= esc($role['name']) ?>"
																		data-description>
																		Edit
																	</a>
																</div>
																<div class="menu-item px-3">
																	<a href="<?= base_url('roles/delete/' . $role['id']) ?>"
																		class="menu-link px-3 disable-role">Delete</a>
																</div>
															</div>
														</td>
														<!--end::Actions-->
													</tr>
													<!--end::Table row-->
												<?php endforeach; ?>
											<?php else: ?>
												<tr>
													<td colspan="5" class="text-center">No records found</td>
												</tr>
											<?php endif; ?>
										</tbody>
										<!--end::Table body-->
									</table>
									<!--end::Table-->
									<!--end::Table-->
									<div class="card-footer">
										<div class="d-flex justify-content-between align-items-center flex-wrap">

											<form method="get" action="<?= base_url('manageRoles') ?>" id="paginationForm"
												class="d-flex align-items-center">
												<input type="hidden" name="column" value="<?= esc($column) ?>">
												<input type="hidden" name="order" value="<?= esc($order) ?>">
												<?php foreach ($filters as $key => $value): ?>
													<input type="hidden" name="<?= esc($key) ?>" value="<?= esc($value) ?>">
												<?php endforeach; ?>
												<label for="perPage" class="fw-bold me-3 mb-0">Items per page:</label>
												<select name="perPage" id="perPage" class="form-select form-select-sm form-select-solid w-75px"
													onchange="document.getElementById('paginationForm').submit();">
													<option value="5" <?= ($perPage == 5) ? 'selected' : '' ?>>5</option>
													<option value="10" <?= ($perPage == 10) ? 'selected' : '' ?>>10</option>
													<option value="15" <?= ($perPage == 15) ? 'selected' : '' ?>>15</option>
													<option value="20" <?= ($perPage == 20) ? 'selected' : '' ?>>20</option>
												</select>
											</form>

											<div class="d-flex align-items-center py-3">
												<?= $pager->links('default', 'myPagination', ['query' => $filters]) ?>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--end::Card-->
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
	<script src="<?= base_url('assets/plugins/global/plugins.bundle.js'); ?>"></script>
	<script src="<?= base_url('assets/js/scripts.bundle.js'); ?>"></script>
	<!--end::Global Javascript Bundle-->

	<!--begin::Page Custom Javascript(used by this page)-->
	<script src="<?= base_url('assets/js/ownJs/manageRoles.js') ?>"></script>
	<?php if (session()->getFlashdata('success')): ?>
		<script>
			toastr.success("<?= session()->getFlashdata('success') ?>", "Success");
		</script>
	<?php endif; ?>

	<?php if (session()->getFlashdata('error')): ?>
		<script>
			toastr.error("<?= session()->getFlashdata('error') ?>", "Error");
		</script>
	<?php endif; ?>
	<!--end::Page Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>