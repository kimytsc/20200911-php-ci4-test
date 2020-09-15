<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="/eliteadmin/images/favicon.png">
        <title><?= view_cell('\App\Controllers\Bootstrap::_title', $this->getData()) ?></title>
        <!-- This page CSS -->
        <!-- chartist CSS -->
        <link href="/assets/morrisjs/morris.css" rel="stylesheet">
        <!-- Vector CSS -->
        <link href="/assets/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
        <!--c3 CSS -->
        <link href="/css/pages/easy-pie-chart.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="/css/style.min.css" rel="stylesheet">
        <!-- Dashboard 1 Page CSS -->
        <link href="/css/pages/dashboard2.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]-->
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="/assets/jquery/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap popper Core JavaScript -->
        <script src="/assets/popper/popper.min.js"></script>
        <script src="/assets/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="/js/perfect-scrollbar.jquery.min.js"></script>
        <!--Wave Effects -->
        <script src="/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="/js/custom.min.js"></script>

        <!-- ============================================================== -->
        <!-- This page plugins -->
        <!-- ============================================================== -->
        <?= $this->renderSection('css') ?>
        <?= $this->renderSection('js') ?>
    </head>
    <body class="skin-blue fixed-layout">
        <?= view_cell('\App\Controllers\Bootstrap::_preloader', $this->getData()) ?>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <?= view_cell('\App\Controllers\Bootstrap::_toolbar', $this->getData()) ?>
            <?= view_cell('\App\Controllers\Bootstrap::_leftSidebar', $this->getData()) ?>
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <?= view_cell('\App\Controllers\Bootstrap::_breadCrumb', $this->getData()) ?>
                    <?= $this->renderSection('content') ?>
                    <?= view_cell('\App\Controllers\Bootstrap::_rightSidebar', $this->getData()) ?>
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
            <?= view_cell('\App\Controllers\Bootstrap::_footer', $this->getData()) ?>
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
    </body>
</html>