<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Hostel Management System</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@400;700&display=swap" rel="stylesheet">

  </head>
  <body onscroll="changecolor()">

    <script type="text/javascript">
    function rtohome(){
      window.location.href ="index.php";
    }
    function change(){
      window.location.href ="registration.php";
    }
    window.onscroll=function(){
      var top=window.scrollY;
      if(top>=50){
        document.getElementById("Nav1").style.backgroundColor = "white";
        document.getElementById("linkcolor").style.color = "black";
        document.getElementById("linkcolor1").style.color = "black";
        document.getElementById("linkcolor2").style.color = "black";
        document.getElementById("linkcolor3").style.color = "black";
      }
      else{
        document.getElementById("Nav1").style.backgroundColor = "transparent";
        document.getElementById("linkcolor").style.color = "white";
        document.getElementById("linkcolor1").style.color = "white";
        document.getElementById("linkcolor2").style.color = "white";
        document.getElementById("linkcolor3").style.color = "white";
      }
    }

    </script>


<div class="Nav" id="Nav1">
  <div class="NavbarContainer">
    <img src="images\images.png" alt="" class="NavLogo" onclick="rtohome()">
    <div class="MobileIcon">
    <i class="fa fa-bars"></i>
    </div>
    <ul class="NavMenu ">
      <li class="NavItem"><a id="linkcolor" on class="NavLinks" href="#about">About</a></li>
      <li class="NavItem"><a id="linkcolor1" class="NavLinks"  href="admin\adminlogin.php">Admin</a></li>
      <li class="NavItem"><a id="linkcolor2" class="NavLinks" href="aboutme.php">Contact Us</a></li>
      <li class="NavItem"><a id="linkcolor3" class="NavLinks" href="signin.php">Sign in</a></li>
      
        <li class="NavItem"><a id="linkcolor4" class="NavLinks" href="security.php">security</a></li>
     

    
    </ul>
    <div class="NavBtn">
      <button type="button" name="button" class="NavBtnLink"  onclick="change()">Signup</button>
    </div>

  </div>
</div>

<!-- Hero section -->
<div class="HeroContainer">
  <div class="HeroBg">
  	<img src="images/b.jpeg" height="794 px" width="1500 px">
 <!--   <video muted autoplay="autoplay" loop class="VideoBg">
  <source src="videos/VID_20230713_182249_403.mp4" type="video/mp4">
</video>  -->
  </div>
<div class="HeroContent">
  <h1 class="HeroH1">Hostel Management System</h1>
  <div class="HeroBtnWrapper">
<button type="button" name="button" class="NavBtnLink"  onclick="change()">Get Started</button>
  </div>
</div>

</div>



<!-- infosection1 -->

<div class="InfoContainer" id="about" style="background-color: #F9EBDF;" >
<div class="InfoWrapper">

<div class="InfoRow">
<div class="Column1">
<div class="TextWrapper">
<p class="TopLine">World class facilities</p>
<h1 class="Heading">Best facilities with less prices</h1>
<p class="Subtitle">Cherish your hostel life with our hostels</p>
<div class="BtnWrap">
<a href="pricing.php"><button type="button" name="button" class="NavBtnLink">Check Blocks</button></a>
</div>
</div>
</div>

<div class="Column2">
<div class="ImgWrap">
<img class="Img" src="images/g.jpg" alt="">
</div>
</div>
</div>
</div>

</div>




<!-- infosection2 -->

<div class="InfoContainer" style="background-color: #F9EBDF;">
<div class="InfoWrapper">

<div class="InfoRow" style="grid-template-areas:'col1 col2' ;">
<div class="Column1">
<div class="TextWrapper">
<p class="TopLine">Best food</p>
<h1 class="Heading">Unlimited variety of dishes</h1>
<p class="Subtitle">Taste dishes across the world </p>
<div class="BtnWrap">
<a href="#"><button type="button" name="button" class="NavBtnLink">Check Menu</button></a>
</div>
</div>
</div>

<div class="Column2">
<div class="ImgWrap">
<img class="Img" src="images/h.jpg" height="300 px" width="100 px">
</div>
</div>


</div>
</div>

</div>

<!-- footer 

<div class="FooterContainer" id="contact">
<div class="FooterWrap">
  <div class="FooterLinksContainer">
    <div class="FooterLinksWrapper">
        <div class="FooterLinkItems">
            <h1 class="FooterLinkTitle">About Us</h1>
            <a href="aboutme.php" class="FooterLink">Developers</a>
            <a href="#about" class="FooterLink">Services</a>
            <a href="pricing.php" class="FooterLink">Blocks</a>
         <!--<a href="admin\adminlogin.php" class="FooterLink">Admin</a>   
        </div>
    </div>
  </div>

  <div class="SocialMedia">
    <div class="SocialMediaWrap">
      <a href="#" class="SocialLogo">HMS</a>
      
      
    </div>

  </div>

</div>
</div>
-->


  </body>
</html>
