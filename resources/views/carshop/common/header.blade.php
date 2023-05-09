<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<!-- Document Meta
    ============================================= -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--IE Compatibility Meta-->
<meta name="author" content="zytheme" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="construction html5 template">
<link href="{{asset('/assets/images/favicon/favicon.ico')}}" rel="icon">

<!-- Fonts
    ============================================= -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CRaleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CUbuntu:300,300i,400,400i,500,500i,700,700i' rel='stylesheet' type='text/css'>

<!-- Stylesheets
    ============================================= -->
<link href="{{asset('/assets/css/external.css')}}" rel="stylesheet">
<link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">
<link href="{{asset('/assets/css/custom.css')}}" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

<!-- Document Title
    ============================================= -->
    @isset($title)
    <title>{{ $title }} - BIGBIKE</title>
    @else
    <title>BIG BIKE HIROSHIMA-JAPAN RENTAL SERVICE</title>
    @endif
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-E9CGR6F5R5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-E9CGR6F5R5');
</script>
<body>

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="wrapper clearfix">