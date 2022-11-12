<?php 
$id_user = $this->session->userdata('id_user');
$level = $this->session->userdata('level');
$info = $this->m_general->info($id_user);
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url('assets')?>/css/style.css">

  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="icon/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="icon/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="icon/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="icon/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="icon/apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="icon/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="icon/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="icon/apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="icon/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="icon/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="icon/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="icon/favicon-128.png" sizes="128x128" />
  <meta name="application-name" content="&nbsp;"/>
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="icon/mstile-144x144.png" />
  <meta name="msapplication-square70x70logo" content="icon/mstile-70x70.png" />
  <meta name="msapplication-square150x150logo" content="icon/mstile-150x150.png" />
  <meta name="msapplication-wide310x150logo" content="icon/mstile-310x150.png" />
  <meta name="msapplication-square310x310logo" content="icon/mstile-310x310.png" />


  <title>linachotel.com</title>
</head>
<body>

  <div class="navbar-title">
   <span class="head1">Linac</span><span class="head2">Hotel</span>
   <a href="index.html"><img style="width: 60px" src="<?=base_url()?>/images/linac.png" alt=""></a>
   <p>Kenyamanan Anda <span class="underline">Kepuasan Kami</span></p>
 </div>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url()?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('about_us')?>">About Us</a>
      </li>
      <?php 
      if($level==1){
        ?>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('user')?>">Data User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('apartement')?>">Data Penginapan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('order/verification')?>">Data Pesanan</a>
        </li>
      <?php }elseif($level==2){
        ?>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('order/apartements')?>">Pemesanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('order/my')?>">Pesanan Saya</a>
        </li>
        <?php
      } ?>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="account nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php if(isset($id_user)){ echo $info->nama; }else{ echo "AKUN"; } ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?php if(isset($id_user)){
            ?>
          <a class="dropdown-item" href="<?=base_url('account/profile')?>">Profil</a>
          <a class="dropdown-item" href="<?=base_url('account/logout')?>">Keluar</a>
        <?php }else{
          ?>
          <a class="dropdown-item" href="<?=base_url('account/login')?>">Login</a>
          <a class="dropdown-item" href="<?=base_url('account/register')?>">Register</a>
          <?php
        }?>
        </div>
      </li>
    </ul>
  </div>
</nav>
<div style="min-height: 520px">