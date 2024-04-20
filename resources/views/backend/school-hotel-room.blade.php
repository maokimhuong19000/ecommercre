@include('backend.layout.header')

<body>

    @include('backend.layout.left_nav')
    <!-- /# sidebar -->



    <div class="header">
        <div class="pull-left">
            <div class="logo"><a href="{{url('/')}}"><!-- <img src="assets/images/logo.png" alt="" /> --><span>HMN STORE</span></a></div>
            <div class="hamburger sidebar-toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>

        <div class="pull-right p-r-15">
            <ul>
                <li class="header-icon dib"><a href="#search"><i class="ti-search"></i></a></li>
                <li class="header-icon dib"><i class="ti-bell"></i>
                    <div class="drop-down">
                        <div class="dropdown-content-heading">
                            <span class="text-left">Recent Notifications</span>
                        </div>
                        <div class="dropdown-content-body">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Mr. Ajay</div>
                                            <div class="notification-text">5 members joined today </div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Mr. Ajay</div>
                                            <div class="notification-text">likes a photo of you</div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Mr. Ajay</div>
                                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Mr. Ajay</div>
                                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="text-center">
                                    <a href="#" class="more-link">See All</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="header-icon dib"><i class="ti-email"></i>
                    <div class="drop-down">
                        <div class="dropdown-content-heading">
                            <span class="text-left">2 New Messages</span>
                            <a href="email.html"><i class="ti-pencil-alt pull-right"></i></a>
                        </div>
                        <div class="dropdown-content-body">
                            <ul>
                                <li class="notification-unread">
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/1.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Mr. Ajay</div>
                                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                        </div>
                                    </a>
                                </li>

                                <li class="notification-unread">
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Mr. Ajay</div>
                                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Mr. Ajay</div>
                                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Mr. Ajay</div>
                                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="text-center">
                                    <a href="#" class="more-link">See All</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="header-icon dib"><img class="avatar-img" src="assets/images/avatar/1.jpg" alt="" /> <span class="user-avatar"> Ajay <i class="ti-angle-down f-s-10"></i></span>
                    <div class="drop-down dropdown-profile">
                        <div class="dropdown-content-heading">
                            <span class="text-left">Upgrade Now</span>
                            <p class="trial-day">30 Days Trail</p>
                        </div>
                        <div class="dropdown-content-body">
                            <ul>
                                <li><a href="#"><i class="ti-user"></i> <span>Profile</span></a></li>
                                <li><a href="#"><i class="ti-wallet"></i> <span>My Balance</span></a></li>
                                <li><a href="#"><i class="ti-write"></i> <span>My Task</span></a></li>
                                <li><a href="#"><i class="ti-calendar"></i> <span>My Calender</span></a></li>
                                <li><a href="#"><i class="ti-email"></i> <span>Inbox</span></a></li>
                                <li><a href="#"><i class="ti-settings"></i> <span>Setting</span></a></li>
                                <li><a href="#"><i class="ti-help-alt"></i> <span>Help</span></a></li>
                                <li><a href="#"><i class="ti-lock"></i> <span>Lock Screen</span></a></li>
                                <li><a href="#"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>





    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Hotel Room</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div id="main-content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card alert">
                                <div class="card-header pr">
                                    <h4>Add New Room</h4>
                                </div>
                                <form>
                                    <div class="basic-form m-t-20">
                                        <div class="form-group">
                                            <label>Hotel Name</label>
                                            <input type="text" class="form-control border-none input-flat bg-ash" placeholder="">
                                        </div>
                                    </div>
                                    <div class="basic-form m-t-20">
                                        <div class="form-group">
                                            <label>Room Number</label>
                                            <input type="text" class="form-control border-none input-flat bg-ash" placeholder="">
                                        </div>
                                    </div>
                                    <div class="basic-form">
                                        <div class="form-group">
                                            <label>Room Type</label>
                                            <select class="form-control bg-ash border-none">
                                                
                                                <option>A</option>
                                                <option>B</option>
                                                <option>C</option>
                                                <option>D</option>
                                                <option>E</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="basic-form">
                                        <div class="form-group">
                                            <label>Number of Bed</label>
                                            <select class="form-control bg-ash border-none">
                                                
                                                <option>A</option>
                                                <option>B</option>
                                                <option>C</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="basic-form m-t-20">
                                        <div class="form-group">
                                            <label>Cost per Bed</label>
                                            <input type="text" class="form-control border-none input-flat bg-ash" placeholder="$300">
                                        </div>
                                    </div>
                                </form>
                                <button class="btn btn-default btn-lg m-b-10 bg-warning border-none m-r-5 sbmt-btn" type="button">Save</button>
                                <button class="btn btn-default btn-lg m-b-10 m-l-5 sbmt-btn" type="button">Reset</button>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="card alert">
                                <div class="card-header pr">
                                    <h4>Hotel Room List</h4>
                                    <div class="search-action">
                                        <div class="search-type dib">
                                            <input class="form-control input-rounded" placeholder="Search by Hotel" type="text">
                                        </div>
                                        <div class="search-type dib">
                                            <input class="form-control input-rounded" placeholder="Search by Room..." type="text">
                                        </div>
                                        <div class="search-type dib">
                                            <input class="form-control input-rounded" placeholder="Search by bed" type="text">
                                        </div>
                                        <div class="search-type dib">
                                            <input class="form-control input-rounded" placeholder="search" type="text">
                                        </div>
                                    </div>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                            <li class="card-option drop-menu"><i class="ti-settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="link"></i>
                                                <ul class="card-option-dropdown dropdown-menu">
                                                    <li><a href="#"><i class="ti-loop"></i> Update data</a></li>
                                                    <li><a href="#"><i class="ti-menu-alt"></i> Detail log</a></li>
                                                    <li><a href="#"><i class="ti-pulse"></i> Statistics</a></li>
                                                    <li><a href="#"><i class="ti-power-off"></i> Clear ist</a></li>
                                                </ul>
                                            </li>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table student-data-table m-t-20">
                                            <thead>
                                                <tr>
                                                    <th><label><input type="checkbox" value=""></label>Hotel Name</th>
                                                    <th>Room No</th>
                                                    <th>Room Type</th>
                                                    <th>No Of Bed</th>
                                                    <th>Cost Per Bed</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><label><input type="checkbox" value=""></label>Boys-104</td>
                                                    <td>
                                                        204
                                                    </td>
                                                    <td>Big</td>
                                                    <td>
                                                        03
                                                    </td>
                                                    <td>
                                                        $50.00
                                                    </td>
                                                    <td>
                                                        <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                        <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                        <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label><input type="checkbox" value=""></label>Boys-210</td>
                                                    <td>
                                                        204
                                                    </td>
                                                    <td>mediam</td>
                                                    <td>
                                                        03
                                                    </td>
                                                    <td>
                                                        $50.00
                                                    </td>
                                                    <td>
                                                        <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                        <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                        <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label><input type="checkbox" value=""></label>Girls-320</td>
                                                    <td>
                                                        204
                                                    </td>
                                                    <td>Big</td>
                                                    <td>
                                                        03
                                                    </td>
                                                    <td>
                                                        $50.00
                                                    </td>
                                                    <td>
                                                        <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                        <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                        <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label><input type="checkbox" value=""></label>Boys-110</td>
                                                    <td>
                                                        204
                                                    </td>
                                                    <td>Big</td>
                                                    <td>
                                                        03
                                                    </td>
                                                    <td>
                                                        $50.00
                                                    </td>
                                                    <td>
                                                        <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                        <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                        <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label><input type="checkbox" value=""></label>Girls-110</td>
                                                    <td>
                                                        204
                                                    </td>
                                                    <td>mediam</td>
                                                    <td>
                                                        03
                                                    </td>
                                                    <td>
                                                        $50.00
                                                    </td>
                                                    <td>
                                                        <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                        <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                        <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label><input type="checkbox" value=""></label>Boys-110</td>
                                                    <td>
                                                        204
                                                    </td>
                                                    <td>small</td>
                                                    <td>
                                                        03
                                                    </td>
                                                    <td>
                                                        $50.00
                                                    </td>
                                                    <td>
                                                        <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                        <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                        <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label><input type="checkbox" value=""></label>Girls-110</td>
                                                    <td>
                                                        204
                                                    </td>
                                                    <td>Big</td>
                                                    <td>
                                                        03
                                                    </td>
                                                    <td>
                                                        $50.00
                                                    </td>
                                                    <td>
                                                        <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                        <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                        <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label><input type="checkbox" value=""></label>Boys-110</td>
                                                    <td>
                                                        204
                                                    </td>
                                                    <td>Mediam</td>
                                                    <td>
                                                        03
                                                    </td>
                                                    <td>
                                                        $50.00
                                                    </td>
                                                    <td>
                                                        <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                        <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                        <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label><input type="checkbox" value=""></label>Grils-110</td>
                                                    <td>
                                                        204
                                                    </td>
                                                    <td>Big</td>
                                                    <td>
                                                        03
                                                    </td>
                                                    <td>
                                                        $50.00
                                                    </td>
                                                    <td>
                                                        <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                        <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                        <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label><input type="checkbox" value=""></label>Boys-110</td>
                                                    <td>
                                                        204
                                                    </td>
                                                    <td>small</td>
                                                    <td>
                                                        03
                                                    </td>
                                                    <td>
                                                        $50.00
                                                    </td>
                                                    <td>
                                                        <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                        <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                        <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->

                    </div>
                    <!-- /# row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>This dashboard was generated on <span id="date-time"></span> <a href="#" class="page-refresh">Refresh Dashboard</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    @include('backend.layout.footer')