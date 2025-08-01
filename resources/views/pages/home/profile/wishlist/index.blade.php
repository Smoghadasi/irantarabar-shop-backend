@extends('layouts.app')
@section('content')
    <!-- start main content -->

    <div class="content">
        <div class="container-fluid">

            <!-- start menu side in mobile -->

            <div class="filter d-lg-none d-block">
                <button class="btn btn-filter-float border-0 main-color-two-bg shadow-box px-4 rounded-3 position-fixed"
                    style="z-index: 999;bottom:90px;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight">
                    <i class="bi bi-funnel font-20 fw-bold text-white"></i>
                    <span class="d-block font-14 text-white">منو</span>
                </button>

                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasRight"
                    aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasRightLabel1">منو</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body py-4">
                        <div class="profile__sidebar">
                            <div class="box__shaped-title">
                                <svg width="230" height="75" viewBox="0 0 230 75" fill="none">
                                    <path
                                        d="M230 0H0V10C26.2258 10.6605 43.6909 20.4901 52.0499 27.9356C60.4088 35.3811 84.5186 61.9259 84.5186 61.9259C101.038 79.219 128.627 79.219 145.146 61.9259C145.146 61.9259 169.146 35.4578 177.549 28.0042C185.953 20.5506 203.675 10.6625 230 10V0Z"
                                        fill="#f4f4f4"></path>
                                    <defs>
                                        <linearGradient id="paint0_linear" x1="115" y1="0" x2="115"
                                            y2="74.8957" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FAFBFB"></stop>
                                            <stop offset="1" stop-color="#F4F6F8"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <div class="box__shaped-title__icon"></div>
                            </div>
                            <div class="profile__sidebar__info">
                                <div>
                                    <div class="profile__sidebar__name bold-text">امیر رضایی</div>
                                    <div class="profile__sidebar__username">09001234567</div>
                                </div>
                            </div>
                            <ul class="profile__sidebar__navigation navbar-nav">

                                <li>
                                    <a href="" class="active">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                                            viewBox="0 0 20 21" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M3.78325 2.1665H6.59991C7.77491 2.1665 8.71658 3.12484 8.71658 4.30067V7.1415C8.71658 8.32484 7.77491 9.27484 6.59991 9.27484H3.78325C2.61658 9.27484 1.66658 8.32484 1.66658 7.1415V4.30067C1.66658 3.12484 2.61658 2.1665 3.78325 2.1665ZM3.78325 11.7246H6.59991C7.77491 11.7246 8.71658 12.6754 8.71658 13.8588V16.6996C8.71658 17.8746 7.77491 18.8329 6.59991 18.8329H3.78325C2.61658 18.8329 1.66658 17.8746 1.66658 16.6996V13.8588C1.66658 12.6754 2.61658 11.7246 3.78325 11.7246ZM16.2167 2.1665H13.4C12.225 2.1665 11.2833 3.12484 11.2833 4.30067V7.1415C11.2833 8.32484 12.225 9.27484 13.4 9.27484H16.2167C17.3833 9.27484 18.3333 8.32484 18.3333 7.1415V4.30067C18.3333 3.12484 17.3833 2.1665 16.2167 2.1665ZM13.4 11.7246H16.2167C17.3833 11.7246 18.3333 12.6754 18.3333 13.8588V16.6996C18.3333 17.8746 17.3833 18.8329 16.2167 18.8329H13.4C12.225 18.8329 11.2833 17.8746 11.2833 16.6996V13.8588C11.2833 12.6754 12.225 11.7246 13.4 11.7246Z"
                                                fill="#BCC1C8"></path>
                                        </svg>
                                        پیشخوان
                                    </a>
                                </li>

                                <li>
                                    <a href="" class="inactive">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="19"
                                            viewBox="0 0 15 19" fill="none">
                                            <path
                                                d="M7.5 12.4756C11.5675 12.4756 15 13.1365 15 15.6865C15 18.2375 11.545 18.875 7.5 18.875C3.43348 18.875 0 18.2141 0 15.664C0 13.1131 3.45505 12.4756 7.5 12.4756ZM7.5 0.125C10.2554 0.125 12.4631 2.3319 12.4631 5.08536C12.4631 7.83883 10.2554 10.0467 7.5 10.0467C4.74553 10.0467 2.53689 7.83883 2.53689 5.08536C2.53689 2.3319 4.74553 0.125 7.5 0.125Z"
                                                fill="#BCC1C8"></path>
                                        </svg>

                                        اطلاعات حساب
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="inactive">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                            viewBox="0 0 19 19" fill="none">
                                            <path
                                                d="M5.155 16.0625C5.94288 16.0625 6.58838 16.7217 6.58838 17.5361C6.58838 18.3408 5.94288 19 5.155 19C4.35762 19 3.71212 18.3408 3.71212 17.5361C3.71212 16.7217 4.35762 16.0625 5.155 16.0625ZM15.8342 16.0625C16.6221 16.0625 17.2676 16.7217 17.2676 17.5361C17.2676 18.3408 16.6221 19 15.8342 19C15.0368 19 14.3913 18.3408 14.3913 17.5361C14.3913 16.7217 15.0368 16.0625 15.8342 16.0625ZM0.739315 0.000113515L0.836053 0.00830139L3.10004 0.356346C3.42279 0.415484 3.6601 0.68597 3.68858 1.01559L3.86894 3.18724C3.89742 3.49844 4.14423 3.73112 4.44799 3.73112H17.2677C17.8468 3.73112 18.2265 3.93471 18.6062 4.38067C18.9859 4.82663 19.0524 5.46649 18.9669 6.04721L18.0651 12.407C17.8943 13.6295 16.8691 14.5302 15.6635 14.5302H5.30707C4.04455 14.5302 3.00037 13.5423 2.89595 12.2626L2.02263 1.69423L0.589246 1.44217C0.209542 1.3743 -0.0562511 0.996205 0.0101971 0.608412C0.0766453 0.211893 0.446857 -0.0508371 0.836053 0.00830139L0.739315 0.000113515ZM14.1447 7.31724H11.5152C11.1165 7.31724 10.8033 7.63717 10.8033 8.04435C10.8033 8.44184 11.1165 8.77146 11.5152 8.77146H14.1447C14.5434 8.77146 14.8566 8.44184 14.8566 8.04435C14.8566 7.63717 14.5434 7.31724 14.1447 7.31724Z"
                                                fill="#BCC1C8"></path>
                                        </svg>

                                        سفارش‌های من
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="inactive">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="22"
                                            viewBox="0 0 15 22" fill="none">
                                            <path
                                                d="M13.9581 3.73557C12.6342 1.45088 10.2827 0.0550679 7.66782 0.00172553C7.55619 -0.000575178 7.44384 -0.000575178 7.33217 0.00172553C4.71728 0.0550679 2.36579 1.45088 1.04186 3.73557C-0.311388 6.07087 -0.348412 8.87603 0.942798 11.2394L6.35215 21.1404C6.35458 21.1448 6.35701 21.1492 6.35952 21.1536C6.59752 21.5672 7.02388 21.8142 7.50008 21.8142C7.97624 21.8142 8.4026 21.5672 8.64055 21.1536C8.64306 21.1492 8.64549 21.1448 8.64792 21.1404L14.0573 11.2394C15.3484 8.87603 15.3114 6.07087 13.9581 3.73557ZM7.49999 9.88456C5.8085 9.88456 4.43238 8.50843 4.43238 6.81694C4.43238 5.12545 5.8085 3.74933 7.49999 3.74933C9.19149 3.74933 10.5676 5.12545 10.5676 6.81694C10.5676 8.50843 9.19153 9.88456 7.49999 9.88456Z"
                                                fill="#BCC1C8"></path>
                                        </svg>

                                        آدرس‌های من
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="inactive">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="19"
                                            viewBox="0 0 14 19" fill="none">
                                            <path
                                                d="M9.68625 0.749512C12.0575 0.749512 13.9738 1.68576 14 4.06576V17.3483C14 17.497 13.965 17.6458 13.895 17.777C13.7812 17.987 13.5887 18.1445 13.3525 18.2145C13.125 18.2845 12.8713 18.2495 12.6613 18.127L6.99125 15.292L1.3125 18.127C1.18212 18.1961 1.0325 18.2408 0.88375 18.2408C0.39375 18.2408 0 17.8383 0 17.3483V4.06576C0 1.68576 1.925 0.749512 4.2875 0.749512H9.68625Z"
                                                fill="#BCC1C8"></path>
                                        </svg>
                                        محصولات ذخیره شده
                                    </a>
                                </li>


                                <li>
                                    <a href="" class="inactive">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19"
                                            viewBox="0 0 18 19" fill="none">
                                            <path
                                                d="M11.25 0.730769C11.25 0.327205 11.5858 0 12 0C12.4142 0 12.75 0.327205 12.75 0.730769V3.65385C12.75 4.05741 12.4142 4.38462 12 4.38462C11.5858 4.38462 11.25 4.05741 11.25 3.65385V0.730769Z"
                                                fill="#BCC1C8"></path>
                                            <path
                                                d="M10.5 1.48669C10.0286 1.46939 9.52917 1.46154 9 1.46154C8.47083 1.46154 7.97136 1.46939 7.5 1.48669V3.65385C7.5 4.46106 6.82841 5.11538 6 5.11538C5.17159 5.11538 4.5 4.46106 4.5 3.65385V1.80908C1.86923 2.36965 0.680603 3.70648 0.231033 6.50449C0.162323 6.93214 0.511826 7.30769 0.956039 7.30769H17.044C17.4882 7.30769 17.8377 6.93214 17.769 6.50449C17.3194 3.70648 16.1308 2.36965 13.5 1.80908V3.65385C13.5 4.46106 12.8284 5.11538 12 5.11538C11.1716 5.11538 10.5 4.46106 10.5 3.65385V1.48669Z"
                                                fill="#BCC1C8"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M9 19C1.58849 19 0 17.4522 0 10.2308C0 9.97083 0.00205994 9.7182 0.00636292 9.4727C0.0132751 9.07993 0.344925 8.76923 0.748123 8.76923H17.2519C17.6551 8.76923 17.9867 9.07993 17.9936 9.4727L17.9957 9.60669L17.9973 9.72605C17.9987 9.85316 17.9995 9.98207 17.9999 10.1128L18 10.2308C18 11.3313 17.9631 12.3001 17.8743 13.1517C17.82 13.1502 17.7566 13.1482 17.6853 13.1458C17.2479 13.1316 16.5169 13.1078 15.8089 13.1589C15.3297 13.1934 14.8134 13.2633 14.3325 13.4029C13.8573 13.5409 13.3636 13.7622 12.9832 14.134C12.2622 14.8387 12.0595 15.8879 11.9958 16.7404C11.9504 17.3469 11.9718 18.0027 11.9879 18.4957C11.9925 18.6383 11.9967 18.7672 11.9987 18.8775C11.1245 18.964 10.1299 19 9 19ZM3.75 11.6923C3.75 11.2887 4.08577 10.9615 4.5 10.9615H6.75C7.16423 10.9615 7.5 11.2887 7.5 11.6923C7.5 12.0959 7.16423 12.4231 6.75 12.4231H4.5C4.08577 12.4231 3.75 12.0959 3.75 11.6923ZM4.5 13.8846C4.08577 13.8846 3.75 14.2118 3.75 14.6154C3.75 15.0189 4.08577 15.3462 4.5 15.3462H6.75C7.16423 15.3462 7.5 15.0189 7.5 14.6154C7.5 14.2118 7.16423 13.8846 6.75 13.8846H4.5Z"
                                                fill="#BCC1C8"></path>
                                            <path
                                                d="M13.4947 18.6535C15.9161 18.1389 17.1172 16.9681 17.6449 14.608C17.6088 14.6069 17.5718 14.6057 17.5338 14.6045C17.0969 14.5902 16.5364 14.5719 15.9197 14.6164C15.5007 14.6466 15.101 14.7048 14.7609 14.8036C14.4151 14.904 14.183 15.0315 14.0455 15.1658C13.7308 15.4734 13.5513 16.0511 13.4918 16.8466C13.4521 17.3774 13.469 17.8743 13.4846 18.3354C13.4883 18.4434 13.4919 18.5495 13.4947 18.6535Z"
                                                fill="#BCC1C8"></path>
                                            <path
                                                d="M5.25 0.730769C5.25 0.327205 5.58577 0 6 0C6.41423 0 6.75 0.327205 6.75 0.730769V3.65385C6.75 4.05741 6.41423 4.38462 6 4.38462C5.58577 4.38462 5.25 4.05741 5.25 3.65385V0.730769Z"
                                                fill="#BCC1C8"></path>
                                        </svg>
                                        تاریخچه اعتبار
                                    </a>
                                </li>
                                <li>
                                    <a href="" rel="nofollow" class="inactive">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 18 18">
                                            <g fill="#AAA" fill-rule="evenodd">
                                                <path fill-rule="nonzero"
                                                    d="M12.238 4.717h-.022V3.712c0-1.748-1.43-3.234-3.175-3.204A3.13 3.13 0 0 0 5.969 3.63v.096c0 .144.118.262.263.262h.839a.263.263 0 0 0 .262-.262v-.03c0-.938.706-1.763 1.645-1.822a1.759 1.759 0 0 1 1.87 1.752v1.087H8.261v.003H5.869a.825.825 0 0 0-.802.821v4.546c0 .455.37.824.825.824h6.342c.455 0 .824-.37.824-.824V5.542a.82.82 0 0 0-.82-.825zM9.554 8.018c-.062.044-.08.092-.08.166.003.333.003.666 0 1.002a.35.35 0 0 1-.19.336.39.39 0 0 1-.583-.336v-.004-1.001c0-.067-.015-.115-.074-.16a.76.76 0 0 1-.252-.938c.148-.325.507-.517.843-.447.377.074.64.38.643.754a.704.704 0 0 1-.307.628z">
                                                </path>
                                                <path
                                                    d="M1.5 12.2h15a1.5 1.5 0 0 1 1.5 1.5v2a1.5 1.5 0 0 1-1.5 1.5h-15A1.5 1.5 0 0 1 0 15.7v-2a1.5 1.5 0 0 1 1.5-1.5zm2.457 1.732a.258.258 0 0 0-.351-.093l-.643.374v-.743a.256.256 0 0 0-.51 0v.743l-.644-.374a.258.258 0 0 0-.35.093c-.07.122-.03.28.092.351l.647.377-.647.377a.258.258 0 0 0-.093.351c.07.122.23.163.351.093l.644-.374v.743a.256.256 0 0 0 .51 0v-.743l.643.374c.122.07.28.03.35-.093a.258.258 0 0 0-.092-.351l-.646-.377.646-.377a.256.256 0 0 0 .093-.351zm1.857 1.452c.07.122.23.163.351.093l.644-.373v.742a.256.256 0 0 0 .51 0v-.742l.643.373c.122.07.28.03.35-.093a.258.258 0 0 0-.091-.35l-.647-.378.647-.377a.258.258 0 0 0 .092-.35.258.258 0 0 0-.351-.093l-.643.373v-.743a.256.256 0 0 0-.51 0v.743l-.644-.37a.258.258 0 0 0-.35.093c-.07.122-.03.28.092.351l.647.377-.647.373a.258.258 0 0 0-.093.351zm4.361 0c.07.122.23.163.351.093l.644-.373v.742a.256.256 0 0 0 .51 0v-.742l.643.373c.122.07.28.03.35-.093a.258.258 0 0 0-.091-.35l-.647-.378.647-.377a.258.258 0 0 0 .092-.35.258.258 0 0 0-.351-.093l-.643.373v-.743a.256.256 0 0 0-.51 0v.743l-.644-.373a.258.258 0 0 0-.35.092c-.07.122-.03.281.092.351l.647.377-.647.377a.258.258 0 0 0-.093.351zm6.182.116h-2.214c-.078 0-.143.053-.143.116v.268c0 .063.065.116.143.116h2.214c.078 0 .143-.053.143-.116v-.268c0-.063-.065-.116-.143-.116z">
                                                </path>
                                            </g>
                                        </svg>
                                        تغییر رمزعبور
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                            viewBox="0 0 17 17" fill="none">
                                            <path
                                                d="M7.97016 0.5C9.95621 0.5 11.576 2.092 11.576 4.052V7.884H6.69226C6.34226 7.884 6.06551 8.156 6.06551 8.5C6.06551 8.836 6.34226 9.116 6.69226 9.116H11.576V12.94C11.576 14.9 9.95621 16.5 7.95388 16.5H3.98993C1.99574 16.5 0.375977 14.908 0.375977 12.948V4.06C0.375977 2.092 2.00388 0.5 3.99807 0.5H7.97016ZM13.6081 5.74016C13.8481 5.49216 14.2401 5.49216 14.4801 5.73216L16.8161 8.06016C16.9361 8.18016 17.0001 8.33216 17.0001 8.50016C17.0001 8.66016 16.9361 8.82016 16.8161 8.93216L14.4801 11.2602C14.3601 11.3802 14.2001 11.4442 14.0481 11.4442C13.8881 11.4442 13.7281 11.3802 13.6081 11.2602C13.3681 11.0202 13.3681 10.6282 13.6081 10.3882L14.8881 9.11616H11.5761V7.88416H14.8881L13.6081 6.61216C13.3681 6.37216 13.3681 5.98016 13.6081 5.74016Z"
                                                fill="#DC3545FF"></path>
                                        </svg>
                                        خروج
                                    </a>
                                </li>





                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end menu side in mobile -->

            <div class="row">
                <div class="col-lg-3 d-lg-block d-none">
                    <div class="profile__sidebar">
                        <div class="box__shaped-title">
                            <svg width="230" height="75" viewBox="0 0 230 75" fill="none">
                                <path
                                    d="M230 0H0V10C26.2258 10.6605 43.6909 20.4901 52.0499 27.9356C60.4088 35.3811 84.5186 61.9259 84.5186 61.9259C101.038 79.219 128.627 79.219 145.146 61.9259C145.146 61.9259 169.146 35.4578 177.549 28.0042C185.953 20.5506 203.675 10.6625 230 10V0Z"
                                    fill="#f4f4f4"></path>
                                <defs>
                                    <linearGradient id="paint0_linear" x1="115" y1="0" x2="115"
                                        y2="74.8957" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FAFBFB"></stop>
                                        <stop offset="1" stop-color="#F4F6F8"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                            <div class="box__shaped-title__icon"></div>
                        </div>
                        <div class="profile__sidebar__info">
                            <div>
                                <div class="profile__sidebar__name bold-text">امیر رضایی</div>
                                <div class="profile__sidebar__username">09001234567</div>
                            </div>
                        </div>
                        <ul class="profile__sidebar__navigation navbar-nav">

                            <li>
                                <a href="" class="active">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                                        viewBox="0 0 20 21" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M3.78325 2.1665H6.59991C7.77491 2.1665 8.71658 3.12484 8.71658 4.30067V7.1415C8.71658 8.32484 7.77491 9.27484 6.59991 9.27484H3.78325C2.61658 9.27484 1.66658 8.32484 1.66658 7.1415V4.30067C1.66658 3.12484 2.61658 2.1665 3.78325 2.1665ZM3.78325 11.7246H6.59991C7.77491 11.7246 8.71658 12.6754 8.71658 13.8588V16.6996C8.71658 17.8746 7.77491 18.8329 6.59991 18.8329H3.78325C2.61658 18.8329 1.66658 17.8746 1.66658 16.6996V13.8588C1.66658 12.6754 2.61658 11.7246 3.78325 11.7246ZM16.2167 2.1665H13.4C12.225 2.1665 11.2833 3.12484 11.2833 4.30067V7.1415C11.2833 8.32484 12.225 9.27484 13.4 9.27484H16.2167C17.3833 9.27484 18.3333 8.32484 18.3333 7.1415V4.30067C18.3333 3.12484 17.3833 2.1665 16.2167 2.1665ZM13.4 11.7246H16.2167C17.3833 11.7246 18.3333 12.6754 18.3333 13.8588V16.6996C18.3333 17.8746 17.3833 18.8329 16.2167 18.8329H13.4C12.225 18.8329 11.2833 17.8746 11.2833 16.6996V13.8588C11.2833 12.6754 12.225 11.7246 13.4 11.7246Z"
                                            fill="#BCC1C8"></path>
                                    </svg>
                                    پیشخوان
                                </a>
                            </li>

                            <li>
                                <a href="" class="inactive">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="19"
                                        viewBox="0 0 15 19" fill="none">
                                        <path
                                            d="M7.5 12.4756C11.5675 12.4756 15 13.1365 15 15.6865C15 18.2375 11.545 18.875 7.5 18.875C3.43348 18.875 0 18.2141 0 15.664C0 13.1131 3.45505 12.4756 7.5 12.4756ZM7.5 0.125C10.2554 0.125 12.4631 2.3319 12.4631 5.08536C12.4631 7.83883 10.2554 10.0467 7.5 10.0467C4.74553 10.0467 2.53689 7.83883 2.53689 5.08536C2.53689 2.3319 4.74553 0.125 7.5 0.125Z"
                                            fill="#BCC1C8"></path>
                                    </svg>

                                    اطلاعات حساب
                                </a>
                            </li>
                            <li>
                                <a href="" class="inactive">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                        viewBox="0 0 19 19" fill="none">
                                        <path
                                            d="M5.155 16.0625C5.94288 16.0625 6.58838 16.7217 6.58838 17.5361C6.58838 18.3408 5.94288 19 5.155 19C4.35762 19 3.71212 18.3408 3.71212 17.5361C3.71212 16.7217 4.35762 16.0625 5.155 16.0625ZM15.8342 16.0625C16.6221 16.0625 17.2676 16.7217 17.2676 17.5361C17.2676 18.3408 16.6221 19 15.8342 19C15.0368 19 14.3913 18.3408 14.3913 17.5361C14.3913 16.7217 15.0368 16.0625 15.8342 16.0625ZM0.739315 0.000113515L0.836053 0.00830139L3.10004 0.356346C3.42279 0.415484 3.6601 0.68597 3.68858 1.01559L3.86894 3.18724C3.89742 3.49844 4.14423 3.73112 4.44799 3.73112H17.2677C17.8468 3.73112 18.2265 3.93471 18.6062 4.38067C18.9859 4.82663 19.0524 5.46649 18.9669 6.04721L18.0651 12.407C17.8943 13.6295 16.8691 14.5302 15.6635 14.5302H5.30707C4.04455 14.5302 3.00037 13.5423 2.89595 12.2626L2.02263 1.69423L0.589246 1.44217C0.209542 1.3743 -0.0562511 0.996205 0.0101971 0.608412C0.0766453 0.211893 0.446857 -0.0508371 0.836053 0.00830139L0.739315 0.000113515ZM14.1447 7.31724H11.5152C11.1165 7.31724 10.8033 7.63717 10.8033 8.04435C10.8033 8.44184 11.1165 8.77146 11.5152 8.77146H14.1447C14.5434 8.77146 14.8566 8.44184 14.8566 8.04435C14.8566 7.63717 14.5434 7.31724 14.1447 7.31724Z"
                                            fill="#BCC1C8"></path>
                                    </svg>

                                    سفارش‌های من
                                </a>
                            </li>
                            <li>
                                <a href="" class="inactive">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="22"
                                        viewBox="0 0 15 22" fill="none">
                                        <path
                                            d="M13.9581 3.73557C12.6342 1.45088 10.2827 0.0550679 7.66782 0.00172553C7.55619 -0.000575178 7.44384 -0.000575178 7.33217 0.00172553C4.71728 0.0550679 2.36579 1.45088 1.04186 3.73557C-0.311388 6.07087 -0.348412 8.87603 0.942798 11.2394L6.35215 21.1404C6.35458 21.1448 6.35701 21.1492 6.35952 21.1536C6.59752 21.5672 7.02388 21.8142 7.50008 21.8142C7.97624 21.8142 8.4026 21.5672 8.64055 21.1536C8.64306 21.1492 8.64549 21.1448 8.64792 21.1404L14.0573 11.2394C15.3484 8.87603 15.3114 6.07087 13.9581 3.73557ZM7.49999 9.88456C5.8085 9.88456 4.43238 8.50843 4.43238 6.81694C4.43238 5.12545 5.8085 3.74933 7.49999 3.74933C9.19149 3.74933 10.5676 5.12545 10.5676 6.81694C10.5676 8.50843 9.19153 9.88456 7.49999 9.88456Z"
                                            fill="#BCC1C8"></path>
                                    </svg>

                                    آدرس‌های من
                                </a>
                            </li>
                            <li>
                                <a href="" class="inactive">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="19"
                                        viewBox="0 0 14 19" fill="none">
                                        <path
                                            d="M9.68625 0.749512C12.0575 0.749512 13.9738 1.68576 14 4.06576V17.3483C14 17.497 13.965 17.6458 13.895 17.777C13.7812 17.987 13.5887 18.1445 13.3525 18.2145C13.125 18.2845 12.8713 18.2495 12.6613 18.127L6.99125 15.292L1.3125 18.127C1.18212 18.1961 1.0325 18.2408 0.88375 18.2408C0.39375 18.2408 0 17.8383 0 17.3483V4.06576C0 1.68576 1.925 0.749512 4.2875 0.749512H9.68625Z"
                                            fill="#BCC1C8"></path>
                                    </svg>
                                    محصولات ذخیره شده
                                </a>
                            </li>


                            <li>
                                <a href="" class="inactive">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19"
                                        viewBox="0 0 18 19" fill="none">
                                        <path
                                            d="M11.25 0.730769C11.25 0.327205 11.5858 0 12 0C12.4142 0 12.75 0.327205 12.75 0.730769V3.65385C12.75 4.05741 12.4142 4.38462 12 4.38462C11.5858 4.38462 11.25 4.05741 11.25 3.65385V0.730769Z"
                                            fill="#BCC1C8"></path>
                                        <path
                                            d="M10.5 1.48669C10.0286 1.46939 9.52917 1.46154 9 1.46154C8.47083 1.46154 7.97136 1.46939 7.5 1.48669V3.65385C7.5 4.46106 6.82841 5.11538 6 5.11538C5.17159 5.11538 4.5 4.46106 4.5 3.65385V1.80908C1.86923 2.36965 0.680603 3.70648 0.231033 6.50449C0.162323 6.93214 0.511826 7.30769 0.956039 7.30769H17.044C17.4882 7.30769 17.8377 6.93214 17.769 6.50449C17.3194 3.70648 16.1308 2.36965 13.5 1.80908V3.65385C13.5 4.46106 12.8284 5.11538 12 5.11538C11.1716 5.11538 10.5 4.46106 10.5 3.65385V1.48669Z"
                                            fill="#BCC1C8"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9 19C1.58849 19 0 17.4522 0 10.2308C0 9.97083 0.00205994 9.7182 0.00636292 9.4727C0.0132751 9.07993 0.344925 8.76923 0.748123 8.76923H17.2519C17.6551 8.76923 17.9867 9.07993 17.9936 9.4727L17.9957 9.60669L17.9973 9.72605C17.9987 9.85316 17.9995 9.98207 17.9999 10.1128L18 10.2308C18 11.3313 17.9631 12.3001 17.8743 13.1517C17.82 13.1502 17.7566 13.1482 17.6853 13.1458C17.2479 13.1316 16.5169 13.1078 15.8089 13.1589C15.3297 13.1934 14.8134 13.2633 14.3325 13.4029C13.8573 13.5409 13.3636 13.7622 12.9832 14.134C12.2622 14.8387 12.0595 15.8879 11.9958 16.7404C11.9504 17.3469 11.9718 18.0027 11.9879 18.4957C11.9925 18.6383 11.9967 18.7672 11.9987 18.8775C11.1245 18.964 10.1299 19 9 19ZM3.75 11.6923C3.75 11.2887 4.08577 10.9615 4.5 10.9615H6.75C7.16423 10.9615 7.5 11.2887 7.5 11.6923C7.5 12.0959 7.16423 12.4231 6.75 12.4231H4.5C4.08577 12.4231 3.75 12.0959 3.75 11.6923ZM4.5 13.8846C4.08577 13.8846 3.75 14.2118 3.75 14.6154C3.75 15.0189 4.08577 15.3462 4.5 15.3462H6.75C7.16423 15.3462 7.5 15.0189 7.5 14.6154C7.5 14.2118 7.16423 13.8846 6.75 13.8846H4.5Z"
                                            fill="#BCC1C8"></path>
                                        <path
                                            d="M13.4947 18.6535C15.9161 18.1389 17.1172 16.9681 17.6449 14.608C17.6088 14.6069 17.5718 14.6057 17.5338 14.6045C17.0969 14.5902 16.5364 14.5719 15.9197 14.6164C15.5007 14.6466 15.101 14.7048 14.7609 14.8036C14.4151 14.904 14.183 15.0315 14.0455 15.1658C13.7308 15.4734 13.5513 16.0511 13.4918 16.8466C13.4521 17.3774 13.469 17.8743 13.4846 18.3354C13.4883 18.4434 13.4919 18.5495 13.4947 18.6535Z"
                                            fill="#BCC1C8"></path>
                                        <path
                                            d="M5.25 0.730769C5.25 0.327205 5.58577 0 6 0C6.41423 0 6.75 0.327205 6.75 0.730769V3.65385C6.75 4.05741 6.41423 4.38462 6 4.38462C5.58577 4.38462 5.25 4.05741 5.25 3.65385V0.730769Z"
                                            fill="#BCC1C8"></path>
                                    </svg>
                                    تاریخچه اعتبار
                                </a>
                            </li>
                            <li>
                                <a href="" rel="nofollow" class="inactive">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 18 18">
                                        <g fill="#AAA" fill-rule="evenodd">
                                            <path fill-rule="nonzero"
                                                d="M12.238 4.717h-.022V3.712c0-1.748-1.43-3.234-3.175-3.204A3.13 3.13 0 0 0 5.969 3.63v.096c0 .144.118.262.263.262h.839a.263.263 0 0 0 .262-.262v-.03c0-.938.706-1.763 1.645-1.822a1.759 1.759 0 0 1 1.87 1.752v1.087H8.261v.003H5.869a.825.825 0 0 0-.802.821v4.546c0 .455.37.824.825.824h6.342c.455 0 .824-.37.824-.824V5.542a.82.82 0 0 0-.82-.825zM9.554 8.018c-.062.044-.08.092-.08.166.003.333.003.666 0 1.002a.35.35 0 0 1-.19.336.39.39 0 0 1-.583-.336v-.004-1.001c0-.067-.015-.115-.074-.16a.76.76 0 0 1-.252-.938c.148-.325.507-.517.843-.447.377.074.64.38.643.754a.704.704 0 0 1-.307.628z">
                                            </path>
                                            <path
                                                d="M1.5 12.2h15a1.5 1.5 0 0 1 1.5 1.5v2a1.5 1.5 0 0 1-1.5 1.5h-15A1.5 1.5 0 0 1 0 15.7v-2a1.5 1.5 0 0 1 1.5-1.5zm2.457 1.732a.258.258 0 0 0-.351-.093l-.643.374v-.743a.256.256 0 0 0-.51 0v.743l-.644-.374a.258.258 0 0 0-.35.093c-.07.122-.03.28.092.351l.647.377-.647.377a.258.258 0 0 0-.093.351c.07.122.23.163.351.093l.644-.374v.743a.256.256 0 0 0 .51 0v-.743l.643.374c.122.07.28.03.35-.093a.258.258 0 0 0-.092-.351l-.646-.377.646-.377a.256.256 0 0 0 .093-.351zm1.857 1.452c.07.122.23.163.351.093l.644-.373v.742a.256.256 0 0 0 .51 0v-.742l.643.373c.122.07.28.03.35-.093a.258.258 0 0 0-.091-.35l-.647-.378.647-.377a.258.258 0 0 0 .092-.35.258.258 0 0 0-.351-.093l-.643.373v-.743a.256.256 0 0 0-.51 0v.743l-.644-.37a.258.258 0 0 0-.35.093c-.07.122-.03.28.092.351l.647.377-.647.373a.258.258 0 0 0-.093.351zm4.361 0c.07.122.23.163.351.093l.644-.373v.742a.256.256 0 0 0 .51 0v-.742l.643.373c.122.07.28.03.35-.093a.258.258 0 0 0-.091-.35l-.647-.378.647-.377a.258.258 0 0 0 .092-.35.258.258 0 0 0-.351-.093l-.643.373v-.743a.256.256 0 0 0-.51 0v.743l-.644-.373a.258.258 0 0 0-.35.092c-.07.122-.03.281.092.351l.647.377-.647.377a.258.258 0 0 0-.093.351zm6.182.116h-2.214c-.078 0-.143.053-.143.116v.268c0 .063.065.116.143.116h2.214c.078 0 .143-.053.143-.116v-.268c0-.063-.065-.116-.143-.116z">
                                            </path>
                                        </g>
                                    </svg>
                                    تغییر رمزعبور
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                        viewBox="0 0 17 17" fill="none">
                                        <path
                                            d="M7.97016 0.5C9.95621 0.5 11.576 2.092 11.576 4.052V7.884H6.69226C6.34226 7.884 6.06551 8.156 6.06551 8.5C6.06551 8.836 6.34226 9.116 6.69226 9.116H11.576V12.94C11.576 14.9 9.95621 16.5 7.95388 16.5H3.98993C1.99574 16.5 0.375977 14.908 0.375977 12.948V4.06C0.375977 2.092 2.00388 0.5 3.99807 0.5H7.97016ZM13.6081 5.74016C13.8481 5.49216 14.2401 5.49216 14.4801 5.73216L16.8161 8.06016C16.9361 8.18016 17.0001 8.33216 17.0001 8.50016C17.0001 8.66016 16.9361 8.82016 16.8161 8.93216L14.4801 11.2602C14.3601 11.3802 14.2001 11.4442 14.0481 11.4442C13.8881 11.4442 13.7281 11.3802 13.6081 11.2602C13.3681 11.0202 13.3681 10.6282 13.6081 10.3882L14.8881 9.11616H11.5761V7.88416H14.8881L13.6081 6.61216C13.3681 6.37216 13.3681 5.98016 13.6081 5.74016Z"
                                            fill="#DC3545FF"></path>
                                    </svg>
                                    خروج
                                </a>
                            </li>





                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">

                    <div class="section-title mb-4">
                        <div class="section-title-title">
                            <h2 class="title-font main-color-two-color h1">محصولات <span class="text-dark">مورد علاقه
                                </span>
                            </h2>
                            <div class="Dottedsquare"></div>
                        </div>
                    </div>

                    <div class="content-box">
                        <div class="container-fluid">
                            <ul class="row gy-3 ps-0">
                                @foreach ($wishlists as $item)
                                    <div class="col-sm-6">
                                        <div class="cart-canvas border rounded-3 p-3">
                                            <div class="row align-items-center">
                                                <div class="col-4 ps-0">
                                                    <img src="{{ asset(env('PRODUCT_IMAGES_UPLOAD_PATH') . $item->product->primary_image) }}"
                                                        width="200" alt="">
                                                </div>
                                                <div class="col-8">
                                                    <a
                                                        href="{{ route('home.products.show', ['product' => $item->product->slug]) }}">
                                                        <h3 class="text-overflow-2 font-16">
                                                            {{ $item->product->name }}
                                                        </h3>
                                                    </a>

                                                    <div
                                                        class="product-box-suggest-price my-2  d-flex align-items-center justify-content-between">
                                                        @if ($item->product->quantity_check)
                                                            @if ($item->product->sale_check)
                                                                <ins class="font-25">
                                                                    {{ number_format($item->product->sale_check->sale_price) }}
                                                                    تومان

                                                                </ins>
                                                                <del class="font-16">
                                                                    {{ number_format($item->product->sale_check->price) }}
                                                                    تومان
                                                                </del>
                                                            @else
                                                                <ins class="new">
                                                                    {{ number_format($item->product->price_check->price) }}
                                                                    تومان
                                                                </ins>
                                                            @endif
                                                        @else
                                                            <div class="not-in-stock">
                                                                <p class="text-white">ناموجود</p>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div
                                                        class="cart-canvas-foot d-flex align-items-center justify-content-between">
                                                        <div class="cart-canvas-delete">
                                                            <a href="{{ route('home.wishlist.remove', ['product' => $item->product->id]) }}"
                                                                class="btn"><i class="bi bi-x"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- end main content -->
@endsection
