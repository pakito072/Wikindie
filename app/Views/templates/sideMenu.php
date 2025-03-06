<!--begin::Aside-->
<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
  data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
  data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
  data-kt-drawer-toggle="#kt_aside_mobile_toggle">
  <!--begin::Brand-->
  <div class="aside-logo flex-column-auto" id="kt_aside_logo">
    <!--begin::Logo-->
    <a href="<?= base_url('/') ?>">
      <img alt="Logo" src="<?= base_url('assets/media/logos/logo-1') ?>" class="h-45px logo" />
    </a>
    <!--end::Logo-->
    <!--begin::Aside toggler-->
    <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
      data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
      data-kt-toggle-name="aside-minimize">
      <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
      <span class="svg-icon svg-icon-1 rotate-180">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path opacity="0.5"
            d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
            fill="black" />
          <path
            d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
            fill="black" />
        </svg>
      </span>
      <!--end::Svg Icon-->
    </div>
    <!--end::Aside toggler-->
  </div>
  <!--end::Brand-->
  <!--begin::Aside menu-->
  <div class="aside-menu flex-column-fluid">
    <!--begin::Aside Menu-->
    <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
      data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
      data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu"
      data-kt-scroll-offset="0">
      <!--begin::Menu-->
      <div
        class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
        id="#kt_aside_menu" data-kt-menu="true">

        <!-- Dashboard -->
        <div class="menu-item">
          <a class="menu-link" href="<?= base_url('/') ?>">
            <span class="menu-icon">
              <i class="fas fa-home"></i>
            </span>
            <span class="menu-title">Dashboard</span>
          </a>
        </div>

        <div class="menu-item">
          <div class="menu-content pt-8 pb-2">
            <span class="menu-section text-muted text-uppercase fs-8 ls-1">User Page</span>
          </div>
        </div>

        <!-- View Cats -->
        <div class="menu-item">
          <a class="menu-link" href="<?= base_url('viewCats') ?>">
            <span class="menu-icon">
              <i class="fas fa-cat"></i>
            </span>
            <span class="menu-title">View Cats</span>
          </a>
        </div>

        <!-- Favorites (Users) -->
        <div class="menu-item">
          <a class="menu-link" href="<?= base_url('favorites') ?>">
            <span class="menu-icon">
              <i class="fas fa-heart"></i>
            </span>
            <span class="menu-title">Favorites</span>
          </a>
        </div>

        <!-- My Adoptions (Users) -->
        <div class="menu-item">
          <a class="menu-link" href="<?= base_url('myAdoptions') ?>">
            <span class="menu-icon">
              <i class="fas fa-paw"></i>
            </span>
            <span class="menu-title">My Adoptions</span>
          </a>
        </div>

        <!-- Profile -->
        <div class="menu-item">
          <a class="menu-link" href="<?= base_url('profile') ?>">
            <span class="menu-icon">
              <i class="fas fa-user"></i>
            </span>
            <span class="menu-title">Profile</span>
          </a>
        </div>

        <div class="menu-item">
          <div class="menu-content pt-8 pb-2">
            <span class="menu-section text-muted text-uppercase fs-8 ls-1">CatiGo Page</span>
          </div>
        </div>

        <?php if ($role_id == 1 || 2) : ?>
        <!-- Manage Cats (Managers & Admins) -->
        <div class="menu-item">
          <a class="menu-link" href="<?= base_url('manageCats') ?>">
            <span class="menu-icon">
              <i class="fas fa-edit"></i>
            </span>
            <span class="menu-title">Manage Cats</span>
          </a>
        </div>

        <!-- Adoption Requests (Managers & Admins) -->
        <div class="menu-item">
          <a class="menu-link" href="<?= base_url('manageAdoptions') ?>">
            <span class="menu-icon">
              <i class="fas fa-clipboard-list"></i>
            </span>
            <span class="menu-title">Manage Adoption</span>
          </a>
        </div>

        <div class="menu-item">
          <div class="menu-content pt-8 pb-2">
            <span class="menu-section text-muted text-uppercase fs-8 ls-1">Admin Page</span>
          </div>
        </div>
        <?php endif; ?>

        <?php if ($role_id == 1) : ?>
        <!-- Manage Users (Only Admins) -->
        <div class="menu-item">
          <a class="menu-link" href="<?= base_url('manageUsers') ?>">
            <span class="menu-icon">
              <i class="fas fa-users"></i>
            </span>
            <span class="menu-title">Manage Users</span>
          </a>
        </div>

        <!-- Manage Roles (Only Admins) -->
        <div class="menu-item">
          <a class="menu-link" href="<?= base_url('manageRoles') ?>">
            <span class="menu-icon">
              <i class="fas fa-user-shield"></i>
            </span>
            <span class="menu-title">Manage Roles</span>
          </a>
        </div>
        <?php endif; ?>    

        <div class="menu-item">
          <div class="menu-content">
            <div class="separator mx-1 my-4"></div>
          </div>
        </div>

        <!-- Events -->
        <div class="menu-item">
          <a class="menu-link" href="<?= base_url('calendar') ?>">
            <span class="menu-icon">
              <i class="fas fa-calendar-alt"></i>
            </span>
            <span class="menu-title">Calendar</span>
          </a>
        </div>

      </div>
      <!--end::Menu-->
    </div>
    <!--end::Aside Menu-->
  </div>
  <!--end::Aside menu-->
  <!--begin::Footer-->
  <div class="aside-footer flex-column-auto pt-5 pb-7 px-5 cursor-pointer" id="kt_aside_footer">
    <!--begin::User-->
    <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
      <!--begin::Menu wrapper-->
      <div class="symbol symbol-30px symbol-md-40px" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end"
        data-kt-menu-trigger="click">
        <img src="assets/media/avatars/150-26.jpg" alt="user" />
      </div>
      <div class="d-flex flex-column ms-5">
        <span class="fw-bold text-gray-700 fs-6 text-hover-primary" id="user-name">Insertar Nombre</span>
      </div>
      <!--begin::Menu-->
      <!--end::Menu-->
      <!--end::Menu wrapper-->
    </div>
    <!--end::User -->
  </div>
  <!--end::Footer-->
</div>
<!--end::Aside-->