<!DOCTYPE html>
<html>
   

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <!-- mobile menu -->
        <link rel="stylesheet" href="responsive-nav.css">
  
        <!-- css and js -->
       	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <title>Retour Vers Soi</title>


<script>
$(document).ready(function(){


    var value=true;

    $(".hypnobutton").click(function(){
      
      if (value==true) {
                $('#hid').show(200);
                value=false;
              }
      else{
        $('#hid').hide(200);
                value=true;
      }
    
    });
  });



</script>
<script>
$(document).ready(function(){

  
    

    $(".mobilbutton").click(function(){
      
     
                $('.nav-collapse').toggleClass("hidsmall");
           
      
    });
      
});




</script>

    </head>


<!--Background Image-->

<div class="bimage">
</div>
	



<!--Main-->
	
<div class="allpage">


  <!--Header (nav+title/logo) brought through php-->

	<header> 

 
      <?php include("/title_nav_footer/entete.php") ; ?>

   		<?php include("/title_nav_footer/menusup.php"); ?>  



      <!--Change to outline current page-->

   		<?php 

   				$acceuil = '<em>Acceuil</em>' ;

   		 ?>
   		


   		<?php include("/title_nav_footer/menu1.php"); ?>



	</header>  





<!--Main Content-->

<body>


  <div class="intro">



    <p>
  
      <h3>Un jour,</h3>

      <br>  

      Une très vieille dame, toute courbée et hésitante, gardait son arrière-petite fille dans la ville de Mexico, lorsqu'un puissant tremblement de terre ébranla la ville. Lorsqu'elle s'aperçut que le plafond allait s'effondrer sur le petite fille de deux ans, la vieille dame se précipita vers le piano à queue et le tira fortement au milieu de la pièce afin de protéger sa petite fille.<br>

      Elle retourna ensuite à sa place de sa même démarche si lente et hésitante.<br>

      Ou a-t-elle trouvée cette force afin de tirer ce piano si lourd ?<br>
      
      <br>

      Au fond d'elle-même !

    </p>


    <br>


    <p>

      <strong>L'hypnose thérapeutique</strong> est un moyen très efficace pour nous reconnecter à notre force intérieure afin de nous guérir de nos maux autant physiques que psychologiques et faire grandir notre autonomie, nos aptitudes et notre épanouissement.

    </p>



  </div>


</body>





<!--footer brought through php-->

<footer>
      
  <?php include("/title_nav_footer/pied.php"); ?>

</footer>





<!-- script for mobile menu -->




</div>



</html>