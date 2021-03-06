<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php echo base_url() ?>assets/build/images/logoAB.png" type="image/ico" />

  <title>ABPluss Car</title>
  <!-- Bootstrap -->
  <link href="<?php echo base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <!-- datatables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.7/css/select.dataTables.min.css">
  <!-- Font Awesome -->
  <link href="<?php echo base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?php echo base_url() ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- jQuery custom content scroller -->
  <link href="<?php echo base_url() ?>assets/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css"
    rel="stylesheet" />
  <!-- iCheck -->
  <link href="<?php echo base_url() ?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- bootstrap-progressbar -->
  <link href="<?php echo base_url() ?>assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"
    rel="stylesheet">
  <!-- Datatables -->
  <link href="<?php echo base_url() ?>assets/pagination/uikit.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.uikit.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css"
    rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"
    rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"
    rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"
    rel="stylesheet">
  <!-- <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css"> -->
  <!-- bootstrap-datetimepicker -->
  <link href="<?php echo base_url() ?>assets/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css"
    rel="stylesheet">
  <!-- Custom Theme Style -->
  <link href="<?php echo base_url() ?>assets/build/css/custom.min.css" rel="stylesheet">
  <!-- images custom -->
  <link href="<?php echo base_url() ?>assets/build/css/images.css" rel="stylesheet">
  <!-- Loading custom -->
  <link href="<?php echo base_url() ?>assets/loading/loading.css" rel="stylesheet">
  <!-- pagination -->
  <link href="<?php echo base_url() ?>assets/pagination/pagination.css" rel="stylesheet">
  <!-- ABAnalytic -->
  <link href="<?php echo base_url() ?>assets/analytic/analytic.css" rel="stylesheet">
  <!-- gallery upload -->
  <link href="<?php echo base_url() ?>assets/build/css/upload.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <style type="text/css">
    /* Search 4 - appear looking glass */
    .demo-4 {
      overflow: hidden;
      width: 300px;
      vertical-align: middle;
      white-space: nowrap;
      /* position: relative; */
    }

    .demo-4 input#search {
      width: 285px;
      height: 50px;
      background: rgba(0, 0, 0, 0.3);
      border: none;
      font-size: 10pt;
      float: left;
      color: #ffffff;
      padding-left: 15px;

      -webkit-transition: all .55s ease;
      -moz-transition: all .55s ease;
      -ms-transition: all .55s ease;
      -o-transition: all .55s ease;
      transition: all .55s ease;
    }

    .demo-4 input#search::-webkit-input-placeholder {
      color: #ffffff;
    }

    .demo-4 input#search:-moz-placeholder {
      /* Firefox 18- */
      color: #ffffff;
    }

    .demo-4 input#search::-moz-placeholder {
      /* Firefox 19+ */
      color: #ffffff;
    }

    .demo-4 input#search:-ms-input-placeholder {
      color: #ffffff;
    }

    .demo-4 button.icon {
      border: none;
      background: #E6E6FA;
      height: 50px;
      width: 50px;
      color: #4f5b66;
      opacity: 0;
      font-size: 10pt;
      -webkit-transition: all .55s ease;
      -moz-transition: all .55s ease;
      -ms-transition: all .55s ease;
      -o-transition: all .55s ease;
      transition: all .55s ease;
    }

    /* ANIMATION EFFECT SEARCH ENGINE */
    .demo-4:hover button.icon,
    .demo-4:active button.icon,
    .demo-4:focus button.icon {
      outline: none;
      opacity: 1;
      margin-left: -50px;
    }

    img:hover {
      box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
    }

    #image-preview {
      display: none;
      width: 100%;
      height: auto;
    }

    #image-preview-picture {
      display: none;
      width: 300px;
      height: 300px;
    }

    #image-preview2 {
      display: none;
      width: 100%;
      height: auto;
    }

    #image-preview_pp {
      display: none;
      width: 150px;
      height: 150px;
    }

    #image-preview_pp {
      display: none;
      width: 150px;
      height: 150px;
    }

    #chart-js {
      min-width: 310px;
      height: 400px;
      margin-bottom: 50px;
    }

    .tile-stats h2 {
      margin-top: 10px;
      margin-bottom: 10px;
      margin-right: 10px;
      margin-left: 20px;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      font-size: 20px;
    }
  </style>
</head>