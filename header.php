<?php
require 'db.class.php';
$DB = new DB('');
?><!DOCTYPE html>
<html>
<head>
	<title>Ecommerce template</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./css/style.css" type="text/css" media="screen" charset="utf-8">
</head>

<body>

<div id="header">
	<div class="wrap">
		<div class="menu">
				<a href="#" class="logo">Shoppi</a>
				<h1>The best online store, for real.</h1>
				<ul class="panier">
					<li class="caddie"><a href="#">Caddie</a></li>
					<li class="items">
						ITEMS
						<span>13</span>
					</li>
					<li class="total">
						TOTAL
						<span>1320.09 €</span>
					</li>
				</ul>
		</div>
	</div>
</div>

<div id="subheader">
	<div class="wrap">
		<h2>Welcome visitor you can <a href="#">login</a> or <a href="#">create an account</a> .</h2>
	</div>
</div>


<div id="wrap">

	<div id="menu">
		<ul class="wrap">
			<li> <a href="#">All Categories</a> </li>
			<li> <a href="#">Electronics</a> </li>
			<li> <a href="#">Fashion</a> </li>
			<li> <a href="#">Entertainement</a> </li>
			<li> <a href="#">Motors</a> </li>
			<li> <a href="#">Outdoors</a> </li>
			<li> <a href="#">Gift</a> </li>
			<li> <a href="#">Jewelry</a> </li>
			<li> <a href="#">Shoes</a> </li>
			<li> <a href="#">Computers</a> </li>
		</ul>
	</div>
	<div id="ariane">
		<div class="wrap">		You are right here : Home » <a href="#">Electronics</a>
		</div>
    </div>
    <div id="main" class="clearfix">