<!DOCTYPE html>
<html>
<head>
@isset($title)
<title>{{ $title }} - BIGBIKE</title>
@else
<title>BIGBIKE</title>
@endif
<link rel="stylesheet" href="{{  asset('css/style.css') }}" />
</head>
<body>
