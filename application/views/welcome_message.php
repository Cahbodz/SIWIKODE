<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../img/icon.png">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!-- link fieldset -->
  <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" /> -->
  <!-- Batas fieldset -->
  <!-- <link rel="stylesheet" type="text/css" href="css/styles.css"> -->

  <title>Hello, world!</title>
</head>
<style type="text/css">
  body{
     color: white;
  }
  a{
    text-decoration: none;
  }
section{
  background-image: url('../img/images.jpg')
}
.container{
    
    height: 100%;
    width: 200%;
    background-color: #57c894;
    opacity: 0.9;
  }

 
  img:hover{
    border-radius: 5px;
  }
  section{
    background-color: ;
  }
  nav ul li{
    height: 100%;
  }
  nav ul li:hover{
    border-radius: 90px;
    color: black;
  }
 
  body h1{
    margin-top: 20px;
    margin-bottom: 20px;
  }
  .landing img{
    width: 120px;
    float:left;
    height: 150px;
    box-shadow: 2px 2px 4px #000000;

  }

  .landing img:hover{
    opacity: 0.8;
  }
  .landing h3{
    margin-top: 30px;
    margin-bottom: 30px;
  }
  .landing h5{
    margin-top: 20px;
  }
  .landing p{
    float: right;
    width: 65%;
  }
  footer p{
    text-align: center;
    margin-top: 50px;

  }
</style>
<body>
 <b><h1 align="center" style="color: #57c894; font-family: Times New Roman;">SISTEM INFORMASI WISATA KOTA DEPOK</h1></b>
 <!-- Navbar -->

 <!-- <nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active nav-item" aria-current="page" href="<?php echo base_url(); ?>index.php/Welcome">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo base_url(); ?>index.php/rekreasi">Wisata Rekreasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo base_url(); ?>index.php/kuliner">Wisata Kuliner</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Registrasi
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?php echo base_url() ?>index.php/rekreasi/form">Rekreasi</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url() ?>index.php/kuliner/form">Kuliner</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <ul>
      <li class="nav-item">
        <a class="nav-link active " href=""  >Login</a></li>
      </ul>
    </div>
  </nav>   -->


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown"  style="margin-left: 150px;">
    <ul class="navbar-nav">
      <li class="nav-item active">
      <b>  <a class="nav-link"  href="<?php echo base_url(); ?>index.php/Welcome">Home</a></b>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>index.php/rekreasi"><b>Wisata Rekreasi</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>index.php/kuliner"><b>Wisata Kuliner</b></a>
      </li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <b> Registrasi</b>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?php echo base_url() ?>index.php/rekreasi/form"><b>Rekreasi</b></a></li>
            <li><a class="dropdown-item" href="<?php echo base_url() ?>index.php/kuliner/form"><b>Kuliner</b></a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <b> Login</b>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?php echo base_url() ?>index.php/rekreasi/login"><b>Rekreasi</b></a></li>
            <li><a class="dropdown-item" href="<?php echo base_url() ?>index.php/kuliner/login"><b>Kuliner</b></a></li>
          </ul>
        </li>
    </ul>
    
  </div>
</nav>
  <!-- Batas Navbar -->
  <!-- Section judul -->
  <?php $this->load->view($content);?>

  <footer>
    <h5 align="center" style="color:#57c894; size: 50%; font-family: Times New Roman; margin-top: 50px; ">Develop By Mahasiswa @stt-NF 2019</h5>
  </footer>

  <!-- Batas section judul -->


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  -->
</body>
</html>