@extends('dashboard.index')
@section('contant')

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Connections</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Account Settings</a>
                                    </li>
                                    <li class="breadcrumb-item active">Connection
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-pills mb-2">
                            <!-- account -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{asset('dashboard.acoount-setting-conction.blade')}}">
                                    <i data-feather="user" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Account</span>
                                </a>
                            </li>



                            <!-- connection -->
                            <li class="nav-item">
                                <a class="nav-link active" href="page-account-settings-connections.html">
                                    <i data-feather="link" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Connections</span>
                                </a>
                            </li>
                        </ul>

                        <!-- connection -->

                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="card">
                                    <div class="card-header border-bottom">
                                        <h4 class="card-title">Connected accounts</h4>
                                    </div>
                                    <div class="card-body pt-2">
                                        <p>Display content from your connected accounts on your site</p>

                                        <!-- Connections -->
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="../../../app-assets/images/icons/social/google.png" alt="google" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex align-item-center justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0">Google</p>
                                                    <span>Calendar and contacts</span>
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                    <div class="form-check form-switch form-check-primary">
                                                        <input type="checkbox" class="form-check-input" id="checkboxGoogle" checked />
                                                        <label class="form-check-label" for="checkboxGoogle">
                                                            <span class="switch-icon-left"><i data-feather="check"></i></span>
                                                            <span class="switch-icon-right"><i data-feather="x"></i></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="../../../app-assets/images/icons/social/slack.png" alt="slack" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex align-item-center justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0">Slack</p>
                                                    <span>Communication</span>
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                    <div class="form-check form-switch form-check-primary">
                                                        <input type="checkbox" class="form-check-input" id="checkboxSlack" />
                                                        <label class="form-check-label" for="checkboxSlack">
                                                            <span class="switch-icon-left"><i data-feather="check"></i></span>
                                                            <span class="switch-icon-right"><i data-feather="x"></i></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="../../../app-assets/images/icons/social/github.png" alt="github" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex align-item-center justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0">Github</p>
                                                    <span>Manage your Git repositories</span>
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                    <div class="form-check form-switch form-check-primary">
                                                        <input type="checkbox" class="form-check-input" id="checkboxGithub" checked />
                                                        <label class="form-check-label" for="checkboxGithub">
                                                            <span class="switch-icon-left"><i data-feather="check"></i></span>
                                                            <span class="switch-icon-right"><i data-feather="x"></i></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="../../../app-assets/images/icons/social/mailchimp.png" alt="mailchimp" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex align-item-center justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0">Mailchimp</p>
                                                    <span>Email marketing service</span>
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                    <div class="form-check form-switch form-check-primary">
                                                        <input type="checkbox" class="form-check-input" id="checkboxMailchimp" />
                                                        <label class="form-check-label" for="checkboxMailchimp">
                                                            <span class="switch-icon-left"><i data-feather="check"></i></span>
                                                            <span class="switch-icon-right"><i data-feather="x"></i></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="../../../app-assets/images/icons/social/asana.png" alt="asana" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex align-item-center justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0">Asana</p>
                                                    <span>Communication</span>
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                    <div class="form-check form-switch form-check-primary">
                                                        <input type="checkbox" class="form-check-input" id="checkboxAsana" />
                                                        <label class="form-check-label" for="checkboxAsana">
                                                            <span class="switch-icon-left"><i data-feather="check"></i></span>
                                                            <span class="switch-icon-right"><i data-feather="x"></i></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Connections -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="card">
                                    <div class="card-header border-bottom">
                                        <h4 class="card-title">Social accounts</h4>
                                    </div>
                                    <div class="card-body pt-2">
                                        <p>Display content from social accounts on your site</p>
                                        <!-- Social Accounts -->
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="../../../app-assets/images/icons/social/facebook.png" alt="facebook" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0">Facebook</p>
                                                    <span>Not Connected</span>
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                    <button type="button" class="btn btn-icon btn-outline-secondary">
                                                        <i data-feather="link" class="font-medium-3"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="../../../app-assets/images/icons/social/twitter.png" alt="twitter" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0">Twitter</p>
                                                    <a href="https://twitter.com/pixinvent" target="_blank">@pixinvent</a>
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                    <button type="button" class="btn btn-icon btn-outline-secondary">
                                                        <i data-feather="x" class="font-medium-3"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="../../../app-assets/images/icons/social/linkedin.png" alt="instagram" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0">Linkedin</p>
                                                    <a href="https://www.linkedin.com/company/pixinvent" target="_blank"> @pixinvent </a>
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                    <button type="button" class="btn btn-icon btn-outline-secondary">
                                                        <i data-feather="x" class="font-medium-3"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="../../../app-assets/images/icons/social/dribbble.png" alt="dribbble" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0">Dribbble</p>
                                                    <span>Not Connected</span>
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                    <button type="button" class="btn btn-icon btn-outline-secondary">
                                                        <i data-feather="link" class="font-medium-3"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="../../../app-assets/images/icons/social/behance.png" alt="behance" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0">Behance</p>
                                                    <span>Not Connected</span>
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                    <button type="button" class="btn btn-icon btn-outline-secondary">
                                                        <i data-feather="link" class="font-medium-3"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Social Accounts -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--/ connection -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>





    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
<!-- END: Body-->


@endsection
