<!doctype html>
<html  lang="ru">
<head>
<link href="css/bootstrap.min.css" rel="stylesheet"> 
<link href="css/myStyle.css" rel="stylesheet">
 <script src="js/script.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<!--<script src="js/bootstrap-carousel.js" type="text/javascript"></script>-->
<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow14.js"></script>
    <script>
$('.carousel').carousel();
$(".collapse").collapse();
$('document').ready(function(){
    $('#modal').modal();
});
    </script>




<meta charset="UTF-8">

<title>Главная</title>
</head>
<body >

<div class="container myclass" >
 <div class="row"  id="h_menu">
   <div class="col-md-3 brand"  >
            <p> ТМ «ДІДОВА ПАСІКА»</p>
        </div>
        <div class="col-md-9  id="myTab" >
   
   <div class="container">
                        <button class="navbar-toggle" data-toggle="collapse" data-target="#responce-menu">    
                                     <span class="sr-only"></span>
                                     <span class="icon-bar"></span>
                                     <span class="icon-bar"></span>
                                     <span class="icon-bar"></span>
                                     <span class="icon-bar"></span>
                          </button>
              <div class="menu collapse navbar-collapse" id="responce-menu">
                  <ul class="nav navbar-nav">
                    <li>  <a href="index.php?id=home" >Главная</a></li>
                    <li>  <a href="index.php?id=contacts">Контакты</a></li>
                    <li>  <a href="index.php?id=resepts" >Медовые рецепты</a></li>
					<li>  <a href="index.php?id=products" >Каталог</a></li>    
					<li>  <a href="index.php?id=basket" name="countN">Корзина</a></li>					
					<li>  <a href="index.php?id=about" >О нас</a></li>
                  </ul>
              </div>
            </div>


  </div>
 </div>
     <div class="row">
         <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12" id ="header"> 
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->

		 <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
       <img src="Header/Img_site/med1.jpg" alt="Med" >
      </div>
	  
      <div class="item">
        <img src="Header/Img_site/med2.jpg" alt="Med"  >
      </div>
    
      <div class="item">
        <img src="Header/Img_site/med3.jpg" alt="Med"  >
      </div>
	    <div class="item">
        <img src="Header/Img_site/med4.jpg" alt="Med"  >
      </div>   
    </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
       </div> 

<div class="row"> 
 <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 pull-right" id="content">    

     <?php  
  $id = strip_tags($_GET['id']); 
    switch($id){
        case 'home':  include 'home.php'; break;
        case 'about': include 'about.php'; break;
        case 'resepts': include 'resepts.php'; break;      
        case 'products': include 'products.php'; break;
        case 'contacts': include 'contacts.php'; break;
        case 'basket': include 'basket.php'; break;
        default:
        include 'home.php';
          break;
    }
?>   
    </div>
 </div>
      <div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12  col-lg-12" id ="footer" >    

		 <div class="col-md-4 col-sm-4  col-xs-4 col-lg-4 pull-left adress1"  align="left" >
		<b> Тел.</b>: (050) 908-62-60, (050) 909-84-64 <br>
        <b>E-mail:</b> d1dova_pas1ka@ukr.net</div>
        <div class="col-md-3  col-sm-3 col-xs-3 col-lg-3 pull-right adress2"  > 63601, Украина, Харьковская обл., ПГТ Шевченково,<br> ул. Лермонтова, 17, кв.2  </div>
     </div>
	 </div>
     </div> 
</body>
 
</html>