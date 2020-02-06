<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Aplikasi Koperasi">
    <link rel="shortcut icon" href="<?php echo base_url('images/koperasi.png');?>">
    <title>Aplikasi Koperasi </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('vendors/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('vendors/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('vendors/nprogress/nprogress.css');?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('build/css/custom.min.css');?>" rel="stylesheet">
  </head>

  <script>
	function startTime() {
		var today = new Date();
		var d = today.getDate();
		var mo = today.getMonth();
		var y = today.getFullYear();
		var h = today.getHours();
		var m = today.getMinutes();
		var month = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"];
		//var s = today.getSeconds();
		m = checkTime(m);
		//s = checkTime(s);
		document.getElementById('waktu').innerHTML =
		d + " " + month[mo] + " " + y + "   " + h + ":" + m ;
		var t = setTimeout(startTime, 15000);
	}
	function checkTime(i) {
		if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
		return i;
    }
</script>