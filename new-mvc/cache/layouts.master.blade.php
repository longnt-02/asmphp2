<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title><?php echo $this->yieldContent('title'); ?></title>

 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="<?php echo \htmlentities(BASE_URL??'', ENT_QUOTES, 'UTF-8', false); ?>public/plugins/fontawesome-free/css/all.min.css">
 <!-- overlayScrollbars -->
 <link rel="stylesheet" href="<?php echo \htmlentities(BASE_URL??'', ENT_QUOTES, 'UTF-8', false); ?>public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
 <!-- Theme style -->
 <link rel="stylesheet" href="<?php echo \htmlentities(BASE_URL??'', ENT_QUOTES, 'UTF-8', false); ?>public/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">

{{-- Header --}}
@extends('layouts.header')
{{-- End Header --}}

 {{-- Sitebar --}}
 @extends('layouts.sitebar')
 {{-- End Sitebar --}}

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <section class="content-header">
 <div class="container-fluid">
 <div class="row mb-2">
 <div class="col-sm-6">
 <h1><?php echo $this->yieldContent('content-title'); ?></h1>
 </div>
 <div class="col-sm-6">
 <!-- <ol class="breadcrumb float-sm-right">
 <li class="breadcrumb-item"><a href="#">Home</a></li>
 <li class="breadcrumb-item"><a href="#">Layout</a></li>
 <li class="breadcrumb-item active">Fixed Layout</li>
 </ol> -->
 </div>
 </div>
 </div><!-- /.container-fluid -->
 </section>

 <!-- Main content -->
 <section class="content">

 <div class="container-fluid">
 <div class="row">
 <div class="col-12">
 <!-- Default box -->
 <?php echo $this->yieldContent('content'); ?>
 <!-- /.card -->
 </div>
 </div>
 </div>
 </section>
 <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

{{-- Footer --}}
@extends('layouts.footer')
{{-- End footer --}}
 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
 <!-- Control sidebar content goes here -->
 </aside>
 <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo \htmlentities(BASE_URL??'', ENT_QUOTES, 'UTF-8', false); ?>public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo \htmlentities(BASE_URL??'', ENT_QUOTES, 'UTF-8', false); ?>public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo \htmlentities(BASE_URL??'', ENT_QUOTES, 'UTF-8', false); ?>public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo \htmlentities(BASE_URL??'', ENT_QUOTES, 'UTF-8', false); ?>public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo \htmlentities(BASE_URL??'', ENT_QUOTES, 'UTF-8', false); ?>public/dist/js/demo.js"></script>
</body>
</html>
