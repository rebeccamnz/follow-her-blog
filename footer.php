
<footer class="bottom_down">
	<div class="container-fluid"> 
		<div class="row">
			<div class="col-md-6 hidden-lg">
		         <ul class ="list-inline text-center orange_clair">
		              <li class="sousmenufooter"><a href="#" target="_blank"><i class="centre fa fa-map-marker white"></i></a></li>
		                  <!-- redirige vers une page Google Map où je me géolocalise-->
		              <li class="sousmenufooter"><a href="http://www.facebook.com/projet.followher" target="_blank"> <i class="fa fa-facebook"></i> </a> </li>
		              <li class="sousmenufooter" data-uk-tooltip title="Twitter"><a href="https://twitter.com/projetfollowher" target="_blank"><i class="fa fa-twitter"></i></a></li>
		              <li class="sousmenufooter"><a href=#> <i class="fa fa-envelope-o"></i> </a></li>
		                  <!-- permet d'envoyer un mail -->   
		              <li> 
		                <div class="dropdown">
		                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
		                      <i class="fa fa-cog orange_clair"></i>
		                      <span class="caret"></span>
		                    </button>
		                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
		                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">FR</a></li>
		                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ANG</a></li>
		                    </ul>
		                </div>
		              </li>
		            <!-- <li class="sousmenu"><a href=#>ANG</a></li>
		            <li class="sousmenu"><a href=#>FR</a></li> -->
		         </ul>
		    </div>
		    <div class="col-md-6"> 
		    	<p class="copyright"> 2014 © FOLLOW'HER | ALL RIGHTS RESERVED| PROJET.FOLLOWHER@GMAIL.COM </p> 
		    </div>
		</div>
	</div>
</footer>


<!-- Including Bootstrap JS (with its jQuery dependency) so that dynamic components work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="global.js"></script>

 <?php
   /* Always have wp_footer() just before the closing </body>
    * tag of your theme, or you will break many plugins, which
    * generally use this hook to reference JavaScript files.
    */
    wp_footer();
?>



</body>
</html>