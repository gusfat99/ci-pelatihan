<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">

    <title><?= $title; ?></title>
  </head>
  <body>
    

  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  		<div class="container">
		  <a class="navbar-brand" href="<?= base_url(); ?>">CI-APP</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item active">
		        <a class="nav-link" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?= base_url(); ?>About">About Me</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?= base_url('mahasiswa') ?>">Mahasiswa</a>
		      </li>
		      
		    </ul>
		  </div>
		</div>
	</nav>