<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width">
<link rel="shortcut icon" href="/favicon.ico">
<title>SiteMinder Diagnostics Page</title>

<meta name="description" content="SiteMinder Diagnostics Page">
<meta name="keywords" content="">

<meta name="gaSiteName" content="corporate">
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900' rel='stylesheet' type='text/css'>


<link rel="stylesheet" type="text/css" media="screen" href="DerpCss.css" />
<style>
td {
  border: 1px solid black;
}
</style>
</head>

<body>

<H2>SiteMinder Diagnostics Page</H2>
<p>

<table>
<tr><td colspan="2"><b>Apache Request Headers</b></td></tr>
<?php foreach (apache_request_headers() as $name => $value) : ?>
    <tr><td><?=$name?></td><td><?=$value?></td></tr>
<?php endforeach; ?>

</table>

<hr></hr>

<table border="1">
<tr><td colspan="2"><b>HTTP Response Headers</b></td></tr>
<?php foreach ($_SERVER as $header => $code) : ?>
  <tr><td><?=$header?></td><td><?=$code?></td></tr>
<?php endforeach; ?>
</table>
</body>
</html>