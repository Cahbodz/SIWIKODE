<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="shortcut icon" href="../img/icon.png">

<style type="text/css">
	section{
		background-image: url('../../img/images.jpg')
	}
	.container{
		height: 100%;
		width: 100%;
		background-color: #57c894;
		opacity: 0.9;
	}

	h2{
		margin-left: 180px;
		padding: 30px;
	}
	.detail img{
		padding: 20px;
		width: 200px;
	}
	.fasilitas{
		
		height: 350px;
	}

	.alamat{
		width: 50%;
		float: left;
	}
	.peta{
		height: 100%;
		width: 50%;
		float: right;

	}
	.testimoni{
		
		
	}
	.testimoni img{
		width: 10%;
	}
	.testimoni p{
		width: 50%;
		float: right;
	}
	.gmr{
		width: 170px;
		height: 200px;
		float: left;
	}
	.gmr img{
		width: 100%;
	}
	.gmr p{
		text-align: center;
		margin-right: 40px;
	}
	/*scc hover*/
		.hovereffect {
width:200px;
height:130px;
overflow:hidden;
position:relative;
text-align:center;
cursor:default;
}

.hovereffect .overlay {
width:200px;
height:100%;
position:absolute;
overflow:hidden;
top:0;
left:0;
opacity:0;
background-color:rgba(0,0,0,0.5);
-webkit-transition:all .4s ease-in-out;
transition:all .4s ease-in-out
}

.hovereffect img {
display:block;
position:relative;
-webkit-transition:all .4s linear;
transition:all .4s linear;
}

.hovereffect h2 {
text-transform:uppercase;
color:#fff;
text-align:center;
position:relative;
font-size:17px;
background:rgba(0,0,0,0.6);
-webkit-transform:translatey(-100px);
-ms-transform:translatey(-100px);
transform:translatey(-100px);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
padding:10px;
}

.hovereffect a.info {
text-decoration:none;
display:inline-block;
text-transform:uppercase;
color:#fff;
border:1px solid #fff;
background-color:transparent;
opacity:0;
filter:alpha(opacity=0);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
margin:50px 0 0;
padding:7px 14px;
}

.hovereffect a.info:hover {
box-shadow:0 0 5px #fff;
}

.hovereffect:hover img {
-ms-transform:scale(1.2);
-webkit-transform:scale(1.2);
transform:scale(1.2);
}

.hovereffect:hover .overlay {
opacity:1;
filter:alpha(opacity=100);
}

.hovereffect:hover h2,.hovereffect:hover a.info {
opacity:1;
filter:alpha(opacity=100);
-ms-transform:translatey(0);
-webkit-transform:translatey(0);
transform:translatey(0);
}

.hovereffect:hover a.info {
-webkit-transition-delay:.2s;
transition-delay:.2s;
}
	/*batas css hover*/
</style>

<section class="detail">
	<div class="container">
		<div class="row offset-1">
			<p style="margin-left: 700px;"><a href="<?php echo base_url(); ?>index.php/kuliner"> Home</a> /<a href="<?php echo base_url(); ?>index.php/kuliner"> Wisuda kuliner</a> / Detail</p>
			<h2>Daftar Wisata kuliner Kota Depok</h2>
			<div class="col-sm-2">
			<div class="hovereffect">
		        <img src="../../img/kuliner1.jpg">
		        <div class="overlay">
		           <a class="info" href="#">Takarajima</a>
		        </div>
		    </div>
			</div>

			<div class="col-sm-2">
			<div class="hovereffect">
		       	<img src="../../img/kuliner2.jpg">
		        <div class="overlay">
		           <a class="info" href="#">Rumah Lobster Depok</a>
		        </div>
		    </div>
			</div>

			<div class="col-sm-2">
			<div class="hovereffect">
		       	<img src="../../img/kuliner3.jpg">
		        <div class="overlay">
		           <a class="info" href="#">Dino Burger & Rice Steak</a>
		        </div>
		    </div>
			</div>

			<div class="col-sm-2">
			<div class="hovereffect">
		       	<img src="../../img/kuliner4.jpg">
		        <div class="overlay">
		           <a class="info" href="#">Waroeng SS</a>
		        </div>
		    </div>
			</div>
			

			<div class="col-sm-2">
			<div class="hovereffect">
		       	<img src="../../img/kuliner5.jpg">
		        <div class="overlay">
		           <a class="info" href="#">Hanamasa</a>
		        </div>
		    </div>
			</div>
		</div>
</section>
<section class="fasilitas">
	<div class="container">
		<div class="row">
			<div class="row text-center">
				<div class="col-sm-5 offset-1">
					<h5 style="margin-top: 50px;">Deskripsi Fasilitas</h5>
					<p align="justify">
						Ingin makan bersama keluarga namun dengan suasana yang berbeda? Bisa banget, loh. Bagi kalian yang tinggal di sekitaran Jabodetabek, kalian bisa mengunjungi tempat makan di Depok. Sebab, daerah yang berada di perbatasan selatan Kota Jakarta ini, memiliki tempat kuliner yang tak kalah enaknya dari kota-kota besar lainnya.

						Untuk kamu yang sedang mencari tempat makan sekaligus berkumpul bersama keluarga, Depok menawarkan banyak pilihan. Berikut ini Seruni berikan rekomendasi tempat makan di depok yang cocok dikunjungi bersama keluarga.</p>
				</div>
				<div class="col-sm-5">
					<div class="alamat">
						<h5 style="margin-top: 50px;">Alamat dan Peta Lokasi</h5>
						<p align="justify">Depok, sebagai kota yang berada strategis di tengah-tengah Bogor dan Jakarta membuat pertumbuhannya kian pesat setiap hari.</p>
					</div>
					<div class="peta" style="margin-top: 50px; ">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126881.52702125291!2d106.74775700510098!3d-6.387843816602953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e95620a297d3%3A0x1cfd4042316fb217!2sKota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1608129579295!5m2!1sid!2sid" width="300" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 
					</div>
				</div>

			</div>

		</div>
	</div>
</section>
<section class="testimoni">
	<div class="container">
		<div class="row">
			<h5 align="center" style="margin-bottom: 20px;">Testimoni & Komentar</h5>
			<div class="col-sm-4">
				<div class="gmr">
					<p>Ayu Ting-ting</p>
					<img src="../../img/ayu.jpg">
				</div>
				<p align="justify">Untuk masalah harga kalian tidak perlu khawatir. Untuk bisa makan di tempat ini kalian hany perlu merogoh kocek mulai dari Rp14.000 untuk makanan dan Rp8.000 untuk minuman.</p>
			</div>
			<div class="col-sm-4">
				<div class="gmr">
					<p>Aditya Zoni</p>
					<img src="../../img/zoni.jpg">
				</div>
				<p align="justify">Untuk masalah harga kalian tidak perlu khawatir. Untuk bisa makan di tempat ini kalian hany perlu merogoh kocek mulai dari Rp14.000 untuk makanan dan Rp8.000 untuk minuman.</p>
			</div>
			<div class="col-sm-4">
				<div class="gmr">
					<p>Arafah Rianti</p>
					<img src="../../img/arafah.jpg">
				</div>
				<p align="justify">Untuk masalah harga kalian tidak perlu khawatir. Untuk bisa makan di tempat ini kalian hany perlu merogoh kocek mulai dari Rp14.000 untuk makanan dan Rp8.000 untuk minuman.</p>
			</div>
		</div>
	</div>
</section>


</head>
</html>
