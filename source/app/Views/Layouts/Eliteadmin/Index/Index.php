<?php $getData = $this->getData(); ?>
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
        <title><?= $getData['title'] ?? 'Elite Admin Template - The Ultimate Multipurpose admin template' ?></title>
        <!-- This page CSS -->
        <!-- chartist CSS -->
        <link href="/assets/morrisjs/morris.css" rel="stylesheet">
        <!--Toaster Popup message CSS -->
        <link href="/assets/toast-master/css/jquery.toast.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="/css/style.min.css" rel="stylesheet">
        <!-- Dashboard 1 Page CSS -->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]-->
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
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
        <?= $this->renderSection('css') ?>
        <?= $this->renderSection('js') ?>
    </head>
    <body class="skin-blue fixed-layout">
        <? $this->include('Layouts/Eliteadmin/Index/preloader') ?>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <?= $this->include('Layouts/Eliteadmin/Index/topbar') ?>
            <?= $this->include('Layouts/Eliteadmin/Index/leftSidebar') ?>
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <div class="container-fluid">
                    <?= $this->include('Layouts/Eliteadmin/Index/breadCrumb') ?>
                    <?= $this->renderSection('content') ?>
                    <?= $this->include('Layouts/Eliteadmin/Index/rightSidebar') ?>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
            <?= $this->include('Layouts/Eliteadmin/Index/footer') ?>
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
    </body>
</html>