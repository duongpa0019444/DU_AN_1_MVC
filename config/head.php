<?php if(!isset($_SESSION['admin'])): ?>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Porto - Bootstrap eCommerce Template</title>
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Porto - Bootstrap eCommerce Template">
        <meta name="author" content="SW-THEMES">

        <!-- Plugins CSS File -->
        <link rel="stylesheet" href="<?=BASE_URL?>/assets/Client/css/bootstrap.min.css">

        <!-- Main CSS File -->
        <link rel="stylesheet" href="<?=BASE_URL?>/assets/Client/css/demo4.min.css">
        <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>/assets/Client/vendor/fontawesome-free/css/all.min.css">

        <link rel="stylesheet" href="<?=BASE_URL?>/assets/Client/css/style.css">
        <link rel="stylesheet" href="<?=BASE_URL?>/assets/Client/css/style.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

        <link href="https://cdn.jsdelivr.net/npm/notyf/notyf.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/notyf/notyf.min.js"></script>

    </head>
<?php else: ?>
    <!-- Mirrored from techzaa.in/larkon/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Oct 2024 06:27:43 GMT -->
    <head>
        <!-- Title Meta -->
        <meta charset="utf-8" />
        <title>Dashboard | Larkon - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully responsive premium admin dashboard template" />
        <meta name="author" content="Techzaa" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Vendor css (Require in all Page) -->
        <link href="<?=BASE_URL?>/assets/Admin/css/vendor.min.css" rel="stylesheet" type="text/css" />

        <!-- Icons css (Require in all Page) -->
        <link href="<?=BASE_URL?>/assets/Admin/css/icons.min.css" rel="stylesheet" type="text/css" />

        <!-- App css (Require in all Page) -->
        <link href="<?=BASE_URL?>/assets/Admin/css/app.min.css" rel="stylesheet" type="text/css" />

        <!-- Theme Config js (Require in all Page) -->
        <script src="<?=BASE_URL?>/assets/Admin/js/config.js"></script>
    </head>
<?php endif ?>