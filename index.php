<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ANASAYFA </title>
<link rel="stylesheet" href="css/style.css">

<script src="https://kit.fontawesome.com/d99e24aaba.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">

<link rel="stylesheet" href="owl/owl.carousel.min.css">
<link rel="stylesheet" href="owl/owl.theme.default.min.css">
</head>

<body>
    <section id="menu">
    <div id="logo">Paylaştıkça</div>
    <nav>
    <a href=""><i class="fas fa-home ikon"></i>Anasayfa</a>
    <a href=""><i class="fas fa-info ikon"></i>Hakımızda</a>
    <a href=""><i class="fas fa-graduation-cap ikon"></i>Eğitimler</a>
    <a href=""><i class="fas fa-user-friends ikon"></i>Ekip</a>
    <a href=""><i class="fas fa-map-pin ikon"></i>İletişim</a>
   </nav></section>
    <section id="anasayfa"> 
      <div id="black"></div>
      
  
<div id="icerik" 
<b><h2>Paylaştıkça</h2> <b>
<hr width=300 align=left>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
</div>  
</section>
   
   <section id="hakkimizda">
    <h3>Hakkımızda</h3>
   <div id="container">
   <div id="sol">
   <h5 id="h5sol" >Lorem Ipsum is simply dummy text 
   of the printing and typesetting industry. </h5>
   </div>
   
   
   <div id="sag">
   <span>L</span>
   <p id="psag">Lorem Ipsum is simply dummy text of the printing and typesetting industr 
   ywhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
   It has survived not only five centuries,</p>
   </div>
   
 <img src="img/about.jpg"   alt="" class="img-fluid mt100">
 <p  id="pson">Loremasdddddddddddd   dddddddddddddddddddd</p>
 </div>
 </section>
    
    
    
    
    
    
    
    <section id="egitimler">
    
    <div class="container">
    
    <h3>Eğitimler</h3>
     <div class="owl-carousel owl-theme" >
     <div class="card item" data-merge=1.5>
     <img src="img/r2.jpg" alt="" class="img-fluid"><h5 class="baslikcard">HTML5 ve CSS3 Egitimi</h5>
     <p class="cardp">Lorem impsum dolar sit amet, consrctetur adipisicing elit.Animi minus.</p>
     </div>
    
     <div class="card item" data-merge=1.5>
     <img src="img/r2.jpg" alt="" class="img-fluid"><h5 class="baslikcard">PHP Egitimi</h5>
     <p class="cardp">Lorem impsum dolar sit amet, consrctetur adipisicing elit.Animi minus.</p>
     </div>
      <div class="card item" data-merge=1.5>
     <img src="img/r2.jpg" alt="" class="img-fluid"><h5 class="baslikcard">JAVASCRİPT Egitimi</h5>
     <p class="cardp">Lorem impsum dolar sit amet, consrctetur adipisicing elit.Animi minus.</p>
     </div>
    </div>
     </div></section>
     
     
     <section id="iletisim"> 
       <div class="container">
       <h3 id="h3iletisim">İLETİŞİM</h3> 
       <form action="index.php" method="post">
       
       <div id="iletisimopak">
       <div id="formgroup">
       <div id="solform">
       <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
       <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control" >
       </div>
       
       <div id="sagform">
       <input type="email" name="mail" placeholder="E-mail" required class="form-control">
       <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control" >
       </div>
       <textarea name="mesaj" id="" cols="30" placeholder="Mesaj Giriniz" rows="10" required class="form-control"> </textarea>
       
       <input type="submit" value="Gönder">
       
       </div>
       
       <div id="adres">
       <h4 id="adresbaslik"><b>ADRES:</b></h4>
       <P class="adresp">İzzetpaşa Mah.</P>
       <P class="adresp">Kazım Bayer Caddesi </P>
       <P class="adresp">No:123 İspir Apartmanı</P>
       <P class="adresp">+99999999999</P>
       <P class="adresp">200130028@firat.edu.tr</P>
       </div></div>
       <footer>
       <div id="copyright">2022 | TÜM HAKLARI SAKLIDIR</div>
       <div id="socialfooter"><a href="https://github.com/MelihTahaCelik"<i class="fab fa-github" id="g" ></a></div>
       <a href="#menu"><i class="fas fa-angle-up" id="up"></i></a>
       
       
       </footer>
       
       </div></section>
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
    
    
 <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>   
 <script src="owl/owl.carousel.min.js"></script>   
    
    <script src="owl/script.js"></script>

</body>
</html>
<?php
include("baglanti.php");

if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"]))
{ $adsoyad=$_POST["isim"];
  $telefon=$_POST["tel"];
  $email= $_POST["mail"];
  $konu= $_POST["konu"];
  $mesaj=$_POST["mesaj"];
  
  $ekle="INSERT INTO iletisim(adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";
  
	if($baglan->query($ekle)===TRUE){echo"<script>alert('Mesajınız Başarı İle Gönderilmiştir')</script>";}
	else{echo"<script>alert('Mesajınız Gönderilirken Bir Hata Oluştu')</script>";}
	
	}
?>