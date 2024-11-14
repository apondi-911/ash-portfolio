
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center">
            <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand brand-logo" href="index.html"><img src="../../../assets/images/logo.svg" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../../../assets/images/logo-mini.svg" alt="logo" /></a>
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="typcn typcn-th-menu"></span>
                </button>
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <ul class="navbar-nav me-lg-2">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                        <img src="../../../assets/images/faces/face5.jpg" alt="profile" />
                        <span class="nav-profile-name">Apondi Ashley</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item">
                            <i class="typcn typcn-cog-outline text-primary"></i>
                            Settings
                        </a>
                        <a class="dropdown-item">
                            <i class="typcn typcn-eject text-primary"></i>
                            Logout
                        </a>
                    </div>
                </li>
                <li class="nav-item nav-user-status dropdown">
                    <p class="mb-0">Last login was 23 hours ago.</p>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-date dropdown">
                    <a class="nav-link d-flex justify-content-center align-items-center" href="javascript:;">
                        <h6 class="date mb-0">Today : Mar 23</h6>
                        <i class="typcn typcn-calendar"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
                        <i class="typcn typcn-mail mx-0"></i>
                        <span class="count"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                        <p class="mb-0 fw-normal float-start dropdown-header">Messages</p>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="../../../assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis fw-normal">David Grey
                                </h6>
                                <p class="fw-light small-text text-muted mb-0">
                                    The meeting is cancelled
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="../../../assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis fw-normal">Tim Cook
                                </h6>
                                <p class="fw-light small-text text-muted mb-0">
                                    New product launch
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="../../../assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis fw-normal"> Johnson
                                </h6>
                                <p class="fw-light small-text text-muted mb-0">
                                    Upcoming board meeting
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown me-0">
                    <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                        <i class="typcn typcn-bell mx-0"></i>
                        <span class="count"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                        <p class="mb-0 fw-normal float-start dropdown-header">Notifications</p>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                    <i class="typcn typcn-info mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject fw-normal">Application Error</h6>
                                <p class="fw-light small-text mb-0 text-muted">
                                    Just now
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                    <i class="typcn typcn-cog-outline mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject fw-normal">Settings</h6>
                                <p class="fw-light small-text mb-0 text-muted">
                                    Private message
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-info">
                                    <i class="typcn typcn-user mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject fw-normal">New user registration</h6>
                                <p class="fw-light small-text mb-0 text-muted">
                                    2 days ago
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="typcn typcn-th-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <nav class="navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0">
        <div class="navbar-links-wrapper d-flex align-items-stretch">
            <div class="nav-link">
                <a href="javascript:;"><i class="typcn typcn-calendar-outline"></i></a>
            </div>
            <div class="nav-link">
                <a href="javascript:;"><i class="typcn typcn-mail"></i></a>
            </div>
            <div class="nav-link">
                <a href="javascript:;"><i class="typcn typcn-folder"></i></a>
            </div>
            <div class="nav-link">
                <a href="javascript:;"><i class="typcn typcn-document-text"></i></a>
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <ul class="navbar-nav me-lg-2">
                <li class="nav-item ms-0">
                    <h4 class="mb-0">Dashboard</h4>
                </li>
                <li class="nav-item">
                    <div class="d-flex align-items-baseline">
                        <p class="mb-0">Home</p>
                        <i class="typcn typcn-chevron-right"></i>
                        <p class="mb-0">Main Dahboard</p>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-search d-none d-md-block me-0">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." aria-label="search" aria-describedby="search">
                        <div class="input-group-prepend d-flex">
                            <span class="input-group-text" id="search">
                                <i class="typcn typcn-zoom"></i>
                            </span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <i class="typcn typcn-device-desktop menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                        <div class="badge badge-danger">new</div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="typcn typcn-document-text menu-icon"></i>
                        <span class="menu-title">UI Elements</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                        <i class="typcn typcn-film menu-icon"></i>
                        <span class="menu-title">Form elements</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="form-elements">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                        <i class="typcn typcn-chart-pie-outline menu-icon"></i>
                        <span class="menu-title">Charts</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="charts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                        <i class="typcn typcn-th-small-outline menu-icon"></i>
                        <span class="menu-title">Tables</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                        <i class="typcn typcn-compass menu-icon"></i>
                        <span class="menu-title">Icons</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="icons">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="typcn typcn-user-add-outline menu-icon"></i>
                        <span class="menu-title">User Pages</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../../docs/documentation.html">
                        <i class="typcn typcn-mortar-board menu-icon"></i>
                        <span class="menu-title">Documentation</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="row">
                    <div class="col-xl-6 grid-margin stretch-card flex-column">
                        <h5 class="mb-2 text-titlecase mb-4">Status statistics</h5>
                        <div class="row">
                            <div class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <p class="mb-0 text-muted">Transactions</p>
                                            <p class="mb-0 text-muted">+1.37%</p>
                                        </div>
                                        <h4>1352</h4>
                                        <canvas id="transactions-chart" class="mt-auto" height="65"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <div>
                                                <p class="mb-2 text-muted">Sales</p>
                                                <h6 class="mb-0">563</h6>
                                            </div>
                                            <div>
                                                <p class="mb-2 text-muted">Orders</p>
                                                <h6 class="mb-0">720</h6>
                                            </div>
                                            <div>
                                                <p class="mb-2 text-muted">Revenue</p>
                                                <h6 class="mb-0">5900</h6>
                                            </div>
                                        </div>
                                        <canvas id="sales-chart-a" class="mt-auto" height="65"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row h-100">
                            <div class="col-md-6 stretch-card grid-margin grid-margin-md-0">
                                <div class="card">
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <p class="text-muted">Sales Analytics</p>
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h3 class="mb-">27632</h3>
                                            <h3 class="mb-">78%</h3>
                                        </div>
                                        <canvas id="sales-chart-b" class="mt-auto" height="38"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row h-100">
                                            <div class="col-6 d-flex flex-column justify-content-between">
                                                <p class="text-muted">CPU</p>
                                                <h4>55%</h4>
                                                <canvas id="cpu-chart" class="mt-auto"></canvas>
                                            </div>
                                            <div class="col-6 d-flex flex-column justify-content-between">
                                                <p class="text-muted">Memory</p>
                                                <h4>123,65</h4>
                                                <canvas id="memory-chart" class="mt-auto"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 grid-margin stretch-card flex-column">
                        <h5 class="mb-2 text-titlecase mb-4">Income statistics</h5>
                        <div class="row h-100">
                            <div class="col-md-12 stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start flex-wrap">
                                            <div>
                                                <p class="mb-3">Monthly Increase</p>
                                                <h3>67842</h3>
                                            </div>
                                            <div id="income-chart-legend" class="d-flex flex-wrap mt-1 mt-md-0"></div>
                                        </div>
                                        <canvas id="income-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body border-bottom">
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-2 mb-md-0 text-uppercase fw-medium">Overall sales</h6>
                                    <div class="dropdown">
                                        <button class="btn bg-white p-0 pb-1 text-muted btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Last 30 days
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                                            <h6 class="dropdown-header">Settings</h6>
                                            <a class="dropdown-item" href="javascript:;">Action</a>
                                            <a class="dropdown-item" href="javascript:;">Another action</a>
                                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:;">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="daoughnut-chart-sm">
                                    <canvas id="sales-chart-c" class="mt-2"></canvas>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3 mt-4">
                                    <div class="d-flex flex-column justify-content-center align-items-center">
                                        <p class="text-muted">Gross Sales</p>
                                        <h5>492</h5>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-success mb-0">0.5%</p>
                                            <i class="typcn typcn-arrow-up-thick text-success"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center align-items-center">
                                        <p class="text-muted">Purchases</p>
                                        <h5>87k</h5>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-success mb-0">0.8%</p>
                                            <i class="typcn typcn-arrow-up-thick text-success"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center align-items-center">
                                        <p class="text-muted">Tax Return</p>
                                        <h5>882</h5>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-danger mb-0">-04%</p>
                                            <i class="typcn typcn-arrow-down-thick text-danger"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="dropdown">
                                        <button class="btn bg-white p-0 pb-1 pt-1 text-muted btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Last 7 days
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                                            <h6 class="dropdown-header">Settings</h6>
                                            <a class="dropdown-item" href="javascript:;">Action</a>
                                            <a class="dropdown-item" href="javascript:;">Another action</a>
                                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:;">Separated link</a>
                                        </div>
                                    </div>
                                    <p class="mb-0">overview</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                        <div class="row">
                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card newsletter-card bg-gradient-warning">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                            <h5 class="mb-3 text-white">Newsletter</h5>
                                            <form class="form d-flex flex-column align-items-center justify-content-between w-100">
                                                <div class="form-group mb-2 w-100">
                                                    <input type="text" class="form-control" placeholder="email address">
                                                </div>
                                                <button class="btn btn-danger btn-rounded mt-1" type="submit">Subscribe</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 stretch-card">
                                <div class="card profile-card bg-gradient-primary">
                                    <div class="card-body">
                                        <div class="row align-items-center h-100">
                                            <div class="col-md-4">
                                                <figure class="avatar mx-auto mb-4 mb-md-0">
                                                    <img src="assets/images/faces/face20.jpg" alt="avatar">
                                                </figure>
                                            </div>
                                            <div class="col-md-8">
                                                <h5 class="text-white text-center text-md-left">Phoebe Kennedy</h5>
                                                <p class="text-white text-center text-md-left">kennedy@gmail.com</p>
                                                <div class="d-flex align-items-center justify-content-between info pt-2">
                                                    <div>
                                                        <p class="text-white fw-bold">Birth date</p>
                                                        <p class="text-white fw-bold">Birth city</p>
                                                    </div>
                                                    <div>
                                                        <p class="text-white">16 Sep 2019</p>
                                                        <p class="text-white">Netherlands</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body border-bottom">
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-2 mb-md-0 text-uppercase fw-medium">Sales statistics</h6>
                                    <div class="dropdown">
                                        <button class="btn bg-white p-0 pb-1 text-muted btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Last 7 days
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton4">
                                            <h6 class="dropdown-header">Settings</h6>
                                            <a class="dropdown-item" href="javascript:;">Action</a>
                                            <a class="dropdown-item" href="javascript:;">Another action</a>
                                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:;">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <canvas id="sales-chart-d" height="320"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                                    <div>
                                        <p class="mb-2 text-md-center text-lg-left">Total Expenses</p>
                                        <h1 class="mb-0">8742</h1>
                                    </div>
                                    <i class="typcn typcn-briefcase icon-xl text-secondary"></i>
                                </div>
                                <canvas id="expense-chart" height="80"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                                    <div>
                                        <p class="mb-2 text-md-center text-lg-left">Total Budget</p>
                                        <h1 class="mb-0">47,840</h1>
                                    </div>
                                    <i class="typcn typcn-chart-pie icon-xl text-secondary"></i>
                                </div>
                                <canvas id="budget-chart" height="80"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                                    <div>
                                        <p class="mb-2 text-md-center text-lg-left">Total Balance</p>
                                        <h1 class="mb-0">$7,243</h1>
                                    </div>
                                    <i class="typcn typcn-clipboard icon-xl text-secondary"></i>
                                </div>
                                <canvas id="balance-chart" height="80"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="table-responsive pt-3">
                                <table class="table table-striped project-orders-table">
                                    <thead>
                                        <tr>
                                            <th class="ms-5">ID</th>
                                            <th>Project name</th>
                                            <th>Customer</th>
                                            <th>Deadline</th>
                                            <th>Payouts </th>
                                            <th>Traffic</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#D1</td>
                                            <td>Consectetur adipisicing elit </td>
                                            <td>Beulah Cummings</td>
                                            <td>03 Jan 2019</td>
                                            <td>$ 5235</td>
                                            <td>1.3K</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <button type="button" class="btn btn-success btn-sm btn-icon-text me-3">
                                                        Edit
                                                        <i class="typcn typcn-edit btn-icon-append"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                                                        Delete
                                                        <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#D2</td>
                                            <td>Correlation natural resources silo</td>
                                            <td>Mitchel Dunford</td>
                                            <td>09 Oct 2019</td>
                                            <td>$ 3233</td>
                                            <td>5.4K</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <button type="button" class="btn btn-success btn-sm btn-icon-text me-3">
                                                        Edit
                                                        <i class="typcn typcn-edit btn-icon-append"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                                                        Delete
                                                        <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#D3</td>
                                            <td>social capital compassion social</td>
                                            <td>Pei Canaday</td>
                                            <td>18 Jun 2019</td>
                                            <td>$ 4311</td>
                                            <td>2.1K</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <button type="button" class="btn btn-success btn-sm btn-icon-text me-3">
                                                        Edit
                                                        <i class="typcn typcn-edit btn-icon-append"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                                                        Delete
                                                        <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#D4</td>
                                            <td>empower communities thought</td>
                                            <td>Gaynell Sharpton</td>
                                            <td>23 Mar 2019</td>
                                            <td>$ 7743</td>
                                            <td>2.7K</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <button type="button" class="btn btn-success btn-sm btn-icon-text me-3">
                                                        Edit
                                                        <i class="typcn typcn-edit btn-icon-append"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                                                        Delete
                                                        <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#D5</td>
                                            <td> Targeted effective; mobilize </td>
                                            <td>Audrie Midyett</td>
                                            <td>22 Aug 2019</td>
                                            <td>$ 2455</td>
                                            <td>1.2K</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <button type="button" class="btn btn-success btn-sm btn-icon-text me-3">
                                                        Edit
                                                        <i class="typcn typcn-edit btn-icon-append"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                                                        Delete
                                                        <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <?php

            include 'includes/footer.php';
            ?>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>