<!--begin::Aside-->
<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
  data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
  data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
  data-kt-drawer-toggle="#kt_aside_mobile_toggle">
  <!--begin::Brand-->
  <div class="aside-logo flex-column-auto" id="kt_aside_logo">
    <!--begin::Logo-->
    <a href="<?= base_url('/') ?>">
      <img alt="Logo" src="<?= base_url('assets/media/logos/logoPrin.png') ?>" class="h-25px logo" />
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
        <div class="menu-item">
          <a class="menu-link " href="<?= base_url('/') ?>">
            <span class="menu-icon">
              <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
              <span class="svg-icon svg-icon-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                  <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                  <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                  <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
            <span class="menu-title">Dashboard</span>
          </a>
        </div>

        <div class="menu-item">
          <div class="menu-content pt-8 pb-2">
            <span class="menu-section text-muted text-uppercase fs-8 ls-1">Reader</span>
          </div>
        </div>
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
          <span class="menu-link">
            <span class="menu-icon">
              <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
              <span class="svg-icon svg-icon-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path
                    d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z"
                    fill="black" />
                  <path d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z" fill="black" />
                  <path opacity="0.3"
                    d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z"
                    fill="black" />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
            <span class="menu-title">Features(Comming Soon)</span>
            <span class="menu-arrow"></span>
          </span>
          <div class="menu-sub menu-sub-accordion menu-active-bg">
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
              <span class="menu-link">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Profile</span>
                <span class="menu-arrow"></span>
              </span>
              <div class="menu-sub menu-sub-accordion menu-active-bg">
                <div class="menu-item">
                  <a class="menu-link" href="<?= base_url('overview') ?>">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Overview</span>
                  </a>
                </div>
                <div class="menu-item">
                  <a class="menu-link" href="../../demo1/dist/pages/profile/projects.html">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Projects</span>
                  </a>
                </div>
                <div class="menu-item">
                  <a class="menu-link" href="../../demo1/dist/pages/profile/campaigns.html">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Campaigns</span>
                  </a>
                </div>
                <div class="menu-item">
                  <a class="menu-link" href="../../demo1/dist/pages/profile/documents.html">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Documents</span>
                  </a>
                </div>
                <div class="menu-item">
                  <a class="menu-link" href="../../demo1/dist/pages/profile/connections.html">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Connections</span>
                  </a>
                </div>
                <div class="menu-item">
                  <a class="menu-link" href="../../demo1/dist/pages/profile/activity.html">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Activity</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
          <span class="menu-link">
            <span class="menu-icon">
              <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
              <span class="svg-icon svg-icon-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path
                    d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                    fill="black" />
                  <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black" />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
            <span class="menu-title">Account</span>
            <span class="menu-arrow"></span>
          </span>
          <div class="menu-sub menu-sub-accordion menu-active-bg">
            <div class="menu-item">
              <a class="menu-link" href="<?= base_url('viewProfile') ?>">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">View</span>
              </a>
            </div>
            <div class="menu-item">
              <a class="menu-link" href="<?= base_url('settingsProfile') ?>">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Settings</span>
              </a>
            </div>
          </div>
        </div>

        <div class="menu-item">
          <div class="menu-content pt-8 pb-2">
            <span class="menu-section text-muted text-uppercase fs-8 ls-1">Author</span>
          </div>
          <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
            <span class="menu-link">
              <span class="menu-icon">
                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                <span class="svg-icon svg-icon-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path
                      d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                      fill="black" />
                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black" />
                  </svg>
                </span>
                <!--end::Svg Icon-->
              </span>
              <span class="menu-title">Articles</span>
              <span class="menu-arrow"></span>
            </span>
            <div class="menu-sub menu-sub-accordion menu-active-bg">
              <div class="menu-item">
                <a class="menu-link" href="<?= base_url('viewArticles') ?>">
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                  <span class="menu-title">View</span>
                </a>
              </div>
              <div class="menu-item">
                <a class="menu-link" href="<?= base_url('guides') ?>">
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                  <span class="menu-title">Guides</span>
                </a>
              </div>
              <div class="menu-item">
                <a class="menu-link" href="<?= base_url('news') ?>">
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                  <span class="menu-title">News</span>
                </a>
              </div>
              <div class="menu-item">
                <a class="menu-link" href="<?= base_url('reviews') ?>">
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                  <span class="menu-title">Reviews</span>
                </a>
              </div>
              <div class="menu-item">
                <a class="menu-link" href="<?= base_url('recommendations') ?>">
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                  <span class="menu-title">Recommendations(Under Maintenance)</span>
                </a>
              </div>
              <div class="menu-item">
                <a class="menu-link" href="<?= base_url('tags') ?>">
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                  <span class="menu-title">Tags</span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="menu-item">
          <div class="menu-content pt-8 pb-2">
            <span class="menu-section text-muted text-uppercase fs-8 ls-1">Admin</span>
          </div>
        </div>

        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
          <span class="menu-link">
            <span class="menu-icon">
              <!--begin::Svg Icon | path: icons/duotune/general/gen051.svg-->
              <span class="svg-icon svg-icon-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path opacity="0.3"
                    d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                    fill="black" />
                  <path
                    d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z"
                    fill="black" />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
            <span class="menu-title">User Management</span>
            <span class="menu-arrow"></span>
          </span>
          <div class="menu-sub menu-sub-accordion">
            <div class="menu-item">
              <a class="menu-link" href="<?= base_url('userList') ?>">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">User List</span>
              </a>
            </div>
            <div class="menu-item">
              <a class="menu-link" href="<?= base_url('rolesList') ?>">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Role List</span>
              </a>
            </div>
            <div class="menu-item">
              <a class="menu-link" href="../../demo1/dist/apps/user-management/permissions.html">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Permissions</span>
              </a>
            </div>
          </div>
        </div>
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
          <span class="menu-link">
            <span class="menu-icon">
              <!--begin::Svg Icon | path: icons/duotune/graphs/gra006.svg-->
              <span class="svg-icon svg-icon-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path
                    d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z"
                    fill="black" />
                  <path opacity="0.3"
                    d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z"
                    fill="black" />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
            <span class="menu-title">Support Center(Comming Soon)</span>
            <span class="menu-arrow"></span>
          </span>
          <div class="menu-sub menu-sub-accordion">
            <div class="menu-item">
              <a class="menu-link" href="../../demo1/dist/apps/support-center/overview.html">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Overview</span>
              </a>
            </div>
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
              <span class="menu-link">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Tickets</span>
                <span class="menu-arrow"></span>
              </span>
              <div class="menu-sub menu-sub-accordion">
                <div class="menu-item">
                  <a class="menu-link" href="../../demo1/dist/apps/support-center/tickets/list.html">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Tickets List</span>
                  </a>
                </div>
                <div class="menu-item">
                  <a class="menu-link" href="../../demo1/dist/apps/support-center/tickets/view.html">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">View Ticket</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="menu-item">
          <a class="menu-link" href="<?= base_url('fetchEvents')?>">
            <span class="menu-icon">
              <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
              <span class="svg-icon svg-icon-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path opacity="0.3"
                    d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                    fill="black" />
                  <path
                    d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                    fill="black" />
                  <path
                    d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                    fill="black" />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
            <span class="menu-title">Calendar</span>
          </a>
        </div>
        <div class="menu-item">
          <div class="menu-content">
            <div class="separator mx-1 my-4"></div>
          </div>
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
        <span class="fw-bold text-gray-700 fs-6 text-hover-primary" id="user-name">Nombre de Usuario</span>
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