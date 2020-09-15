<?= $this->section('css') ?>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
    <!-- Flot Charts JavaScript -->
    <script src="/assets/flot/jquery.flot.js"></script>
    <script src="/assets/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <!--sparkline JavaScript -->
    <script src="/assets/sparkline/jquery.sparkline.min.js"></script>
    <!-- EASY PIE CHART JS -->
    <script src="/assets/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <script src="/assets/jquery.easy-pie-chart/easy-pie-chart.init.js"></script>
    <!-- Vector map JavaScript -->
    <script src="/assets/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="/assets/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Chart JS -->
    <script src="/js/dashboard2.js"></script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Info box -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Site A Traffic</h5>
                    <div class="stats-row m-t-20 m-b-20">
                        <div class="stat-item">
                            <h6>Growth</h6> <b>80.40%</b></div>
                        <div class="stat-item">
                            <h6>Montly</h6> <b>20.40%</b></div>
                        <div class="stat-item">
                            <h6>Daily</h6> <b>5.40%</b></div>
                    </div>
                </div>
                <div id="sparkline8" class="sparkchart"></div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Site B Traffic</h5>
                    <div class="stats-row m-t-20 m-b-20">
                        <div class="stat-item">
                            <h6>Growth</h6> <b>80.40%</b></div>
                        <div class="stat-item">
                            <h6>Montly</h6> <b>20.40%</b></div>
                        <div class="stat-item">
                            <h6>Daily</h6> <b>5.40%</b></div>
                    </div>
                </div>
                <div id="sparkline9" class="sparkchart"></div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Site C Traffic</h5>
                    <div class="stats-row m-t-20 m-b-20">
                        <div class="stat-item">
                            <h6>Growth</h6> <b>80.40%</b></div>
                        <div class="stat-item">
                            <h6>Montly</h6> <b>20.40%</b></div>
                        <div class="stat-item">
                            <h6>Daily</h6> <b>5.40%</b></div>
                    </div>
                </div>
                <div id="sparkline10" class="sparkchart"></div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- ============================================================== -->
    <!-- End Info box -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Map Chart and browser state-->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h5 class="card-title">SITES VISITS</h5>
                            <div id="visitfromworld" style="width:100%!important; height:415px"></div>
                        </div>
                        <div class="col-md-4">
                            <ul class="country-state slimscrollcountry">
                                <li>
                                    <h2>6350</h2> <small>From India</small>
                                    <div class="pull-right">48% <i class="fa fa-level-up text-success"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:48%; height: 6px;"> <span class="sr-only">48% Complete</span></div>
                                    </div>
                                </li>
                                <li>
                                    <h2>3250</h2> <small>From UAE</small>
                                    <div class="pull-right">98% <i class="fa fa-level-up text-success"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:98%; height: 6px;"> <span class="sr-only">98% Complete</span></div>
                                    </div>
                                </li>
                                <li>
                                    <h2>1250</h2> <small>From Australia</small>
                                    <div class="pull-right">75% <i class="fa fa-level-down text-danger"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:75%; height: 6px;"> <span class="sr-only">75% Complete</span></div>
                                    </div>
                                </li>
                                <li>
                                    <h2>1350</h2> <small>From USA</small>
                                    <div class="pull-right">48% <i class="fa fa-level-up text-success"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:48%; height: 6px;"> <span class="sr-only">48% Complete</span></div>
                                    </div>
                                </li>
                                <li>
                                    <h2>350</h2> <small>From UK</small>
                                    <div class="pull-right">68% <i class="fa fa-level-down text-danger"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:68%; height: 6px;"> <span class="sr-only">48% Complete</span></div>
                                    </div>
                                </li>
                            </ul>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12 m-t-20 text-center">
                                    <div class="chart easy-pie-chart-2" data-percent="75"> <span class="percent">75</span>
                                        <br/>
                                        <h4>New Users Visits</h4>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 m-t-20 text-center">
                                    <div class="chart easy-pie-chart-1" data-percent="65"> <span class="percent">75</span>
                                        <br/>
                                        <h4>Returning Users</h4>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 m-t-20 text-center">
                                    <div class="chart easy-pie-chart-3" data-percent="25"> <span class="percent">75</span>
                                        <br/>
                                        <h4>Bounce Rate</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- ============================================================== -->
    <!-- End Sales Chart -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Projects of the Month -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">BROWSER STATS</h5>
                    <table class="table browser m-t-30 no-border">
                        <tbody>
                            <tr>
                                <td style="width:40px"><img src="/eliteadmin/images/browser/chrome-logo.png" alt="logo"></td>
                                <td>Google Chrome</td>
                                <td align="right"><span class="badge badge-pill badge-info">23%</span></td>
                            </tr>
                            <tr>
                                <td><img src="/eliteadmin/images/browser/firefox-logo.png" alt="logo"></td>
                                <td>Mozila Firefox</td>
                                <td align="right"><span class="badge badge-pill badge-success">15%</span></td>
                            </tr>
                            <tr>
                                <td><img src="/eliteadmin/images/browser/safari-logo.png" alt="logo"></td>
                                <td>Apple Safari</td>
                                <td align="right"><span class="badge badge-pill badge-primary">07%</span></td>
                            </tr>
                            <tr>
                                <td><img src="/eliteadmin/images/browser/internet-logo.png" alt="logo"></td>
                                <td>Internet Explorer</td>
                                <td align="right"><span class="badge badge-pill badge-warning">09%</span></td>
                            </tr>
                            <tr>
                                <td><img src="/eliteadmin/images/browser/opera-logo.png" alt="logo"></td>
                                <td>Opera mini</td>
                                <td align="right"><span class="badge badge-pill badge-danger">23%</span></td>
                            </tr>
                            <tr>
                                <td><img src="/eliteadmin/images/browser/internet-logo.png" alt="logo"></td>
                                <td>Microsoft edge</td>
                                <td align="right"><span class="badge badge-pill badge-cyan">09%</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Real chart -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">CPU LOAD</h5>
                    <div class="stats-row m-t-20 m-b-20">
                        <div class="stat-item">
                            <h6>Usage</h6> <b>60GB</b></div>
                        <div class="stat-item">
                            <h6>Space</h6> <b>320 GB</b></div>
                        <div class="stat-item">
                            <h6>CPU</h6> <b>50%</b></div>
                    </div>
                    <div>
                        <div id="placeholder" class="demo-placeholder" style="width:100%; height:330px;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card ">
                <img class="card-img" height="350" src="/eliteadmin/images/big/img1.jpg" alt="Card image">
                <div class="card-img-overlay card-inverse social-profile-first bg-over">
                    <img src="/eliteadmin/images/users/1.jpg" class="img-circle" width="100">
                    <h4 class="card-title text-white">John doe</h4>
                    <h5 class="text-white">info@myadmin.com</h5>
                </div>
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col">
                            <h3 class="m-b-0">12K</h3>
                            <h5 class="font-light">Followers</h5></div>
                        <div class="col">
                            <h3 class="m-b-0">420</h3>
                            <h5 class="font-light">Following</h5></div>
                        <div class="col">
                            <h3 class="m-b-0">128</h3>
                            <h5 class="font-light">Tweets</h5></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Projects of the Month -->
    <!-- ============================================================== -->
<!-- ============================================================== -->
<!-- End Page Content -->
<!-- ============================================================== -->
<?= $this->endSection() ?>
