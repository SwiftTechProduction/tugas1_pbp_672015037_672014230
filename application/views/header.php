<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="FaberNainggolan">
        <title><?= $title ?></title>
        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">


    </head>

    <body>
        <!-- Static navbar -->
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <a class="navbar-brand" href="<?= site_url('AnggotaController/') ?>"><i class="glyphicon glyphicon-home"></i>Data Anggota Pelayanan</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?= site_url('AnggotaController/') ?>"><i class="glyphicon glyphicon-download"></i>Download Data (.CSV)</a></li>
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="<?php echo base_url('login/logout') ?>" title="Logout"><i class="glyphicon glyphicon-log-out"></i>Logout</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
