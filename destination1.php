 <?php include 'header1.php';?>
<style>

div.polaroid1 {
  width:350px;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

div.text2 {
  text-align: center;
  padding: 10px 10px;
};
        /* The Image container */
.img-hover-zoom {
  height: 300px; /* Modify this according to your need */
  overflow: hidden; /* Removing this will break the effects */
}
        /* Brightness-zoom Container */
.img-hover-zoom--brightness img {
  transition: transform 1s, filter 0.5s ease-in-out;
  transform-origin: center center;
  filter: brightness(90%);
}

/* The Transformation */
.img-hover-zoom--brightness:hover img {
  filter: brightness(110%);
  transform: scale(1);
}
/* Blur-zoom Container */
.img-hover-zoom--blur img {
  transition: transform 1s, filter 2s ease-in-out;
  filter: blur(2px);
  transform: scale(1);
}

/* The Transformation */
.img-hover-zoom--blur:hover img {
  filter: blur(0);
  transform: scale(1);
}
.text {
  position: absolute;
  top: 80%;
  left: 57%;
  transform: translate(-50%, -50%); 
  color:white;
  opacity:0.1;
}
.text:hover {
 
  opacity:1;
  font-size:25px;
}
.img-hover-zoom--zoom-n-pan-h img {
  transition: transform .5s ease-in-out;
  transform: scale(1);
  transform-origin: 100% 0;
}

/* The Transformation */
.img-hover-zoom--zoom-n-pan-h:hover img {
  transform: scale(1) translateX(30%);
}
h3 {
  color: white;
  text-shadow: 2px 2px 4px #666699;
};
</style>
<!--jumbotron-->
<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:400px;overflow:hidden;visibility:hidden;">
<div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
        
            <div>
                <img data-u="image" src="images/abt1.jpg" />
                <!-- short -->
                <h5 style="font-size:20px ;color:white; text-align:center; padding-top:200px; opacity:10;"><strong>Our Destinations</strong><br><i>The gladdest moment in human life is a departure into unknown land</i></h5>
                <!--<p style="font-size:10px; color:white; text-align:center; padding:20px; opacity:10;">Home<span>|</span>About us</p>-->
                <!-- //short-->
            </div>
           </div>
           <script type="text/javascript">jssor_1_slider_init();</script>
          </div> 
<!--//jumbotron-->


<!--<h3 class="title" align="center">OUR DESTINATIONS</h3>
<h5 style="text-align:center;">The gladdest moment in human life is a departure into unknown land</h5>-->
  <section class="service py-lg-4 py-md-3 py-sm-3 py-3" id="service">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <div class="row">
            
			<div class="col-lg-4 col-md-6 col-sm-6 service-grid-wthree text-center">
			 <div class="polaroid1">
			  <div class="img-hover-zoom img-hover-zoom--brightness">
                   <a href="dubai1.php"><img src="images\od1.jpg" alt="5 Terre" style="width:346px;height:250px;"></a>
                    <div class="text2">
				      <p><b>Dubai</b>  is a city and emirate in the United Arab Emirates known for luxury shopping, ultramodern architecture and a lively nightlife scene.</p>
                    <a href="dubai1.php"><h4>Starting from Rs.487235/-</h4>
					</div>
				</div>	
            </div>
		   </div>
		   
              <div class="col-lg-4 col-md-6 col-sm-6 service-grid-wthree text-center">
                <div class="polaroid1">
				 <div class="img-hover-zoom img-hover-zoom--brightness">
                    <a href="hongkong1.php"><img src="images\od2.jpg" alt="Norther Lights" style="width:346px;height:250px;"></a>
                     <div class="text2">
                        <p><b>Hong Kong</b>  in southeastern China.Its densely populated urban centre is a major port and global hub with a skyscraper-studded skyline. </p>
                     <a href="hongkong1.php"><h4>Starting From Rs. 185654/-</h4></a>
					 </div>
				 </div>
                </div>
             </div>

            <div class="col-lg-4 col-md-6 col-sm-6 service-grid-wthree text-center">
              <div class="polaroid1">
			   <div class="img-hover-zoom img-hover-zoom--brightness">
                 <a href="singapore1.php"><img src="images\od3.jpg" alt="5 Terre" style="width:346px;height:250px;"></a>
                   <div class="text2">
                      <p><b> Singapore</b> an island city-state off southern Malaysia, is a global financial center with a tropical climate and multicultural population</p>
                   <a href="singapore1.php"><h4>Starting From  Rs. 232198/-</h4></a>
				   </div>
              </div>
            </div>
			</div>
           <div class="col-lg-4 col-md-6 col-sm-6 service-grid-wthree text-center">
              <div class="polaroid1">
			  <div class="img-hover-zoom img-hover-zoom--brightness">
                 <a href="thailand1.php"><img src="images\od4.jpg" alt="Norther Lights" style="width:346px;height:250px;"></a>
                      <div class="text2">
                         <p><b>Thailand</b> is a Southeast Asian country. It's known for tropical beaches, opulent royal palaces, ancient ruins and ornate temples of Buddha.</p>
                      <a href="thailand1.php"><h4>Starting From Rs.189654/-</h4></a>
					  </div>
              </div>
			  </div>
           </div>

         <div class="col-lg-4 col-md-6 col-sm-6 service-grid-wthree text-center">
             <div class="polaroid1">
			  <div class="img-hover-zoom img-hover-zoom--brightness">
                  <a href="bali1.php"><img src="images\od5.jpg" alt="5 Terre" style="width:346px;height:250px;"></a>
                       <div class="text2">
                           <p><b>Bali</b> is an Indonesian island known for its forested volcanic mountains, iconic rice paddies, beaches and coral reefs & known as the ‘Island of the Gods’</p>
                      <a href="bali1.php"><h4>Starting From Rs.196389/-</h4></a>
					  </div>
					   </div>
             </div>
			 </div>

            <div class="col-lg-4 col-md-6 col-sm-6 service-grid-wthree text-center">
             <div class="polaroid1">
			  <div class="img-hover-zoom img-hover-zoom--brightness">
                <a href="egypt1.php"><img src="images\od6.jpg" alt="Norther Lights" style="width:346.5px;height:250px;"></a>
                   <div class="text2">
                       <p><b>Egypt</b> holiday for its ancient civilization and some of the world’s most famous monuments, including the Giza pyramids, the Great Sphinx.</p>
                   <a href="egypt1.php"><h4>Starting From Rs.169545/-</h4></a>
				   </div>
				   </div>
             </div>
			 </div>
			 
            <div class="col-lg-4 col-md-6 col-sm-6 service-grid-wthree text-center">
              <div class="polaroid1">
			   <div class="img-hover-zoom img-hover-zoom--brightness">
                  <a href="paris1.php"><img src="images\od7.jpg" alt="5 Terre" style="width:346px;height:250px;"></a>
                     <div class="text2">
                       <p><b>Paris</b>  for its  art, fashion, gastronomy and culture. Its 19th-century cityscape is crisscrossed by wide boulevards and the River Seine.</p>
                     <a href="paris1.php"><h4>Starting From Rs.564237/-</h4></a>
					 </div>
					 </div>
              </div>
			  </div>
			  
          <div class="col-lg-4 col-md-6 col-sm-6 service-grid-wthree text-center">
             <div class="polaroid1">
			  <div class="img-hover-zoom img-hover-zoom--brightness">
                <a href="italy1.php"><img src="images\od8.jpg" alt="Norther Lights" style="width:346px;height:250px;"></a>
                   <div class="text2">
                     <p><b>Italy</b>  a European country with a long Mediterranean coastline, has left a powerful mark on Western culture and cuisine.</p>
                  <a href="italy1.php"><h4>Starting From Rs.365290/-</h4></a>
				  </div>
            </div>
			</div>
			</div>
			         <div class="col-lg-4 col-md-6 col-sm-6 service-grid-wthree text-center">
             <div class="polaroid1">
			  <div class="img-hover-zoom img-hover-zoom--brightness">
                  <a href="#"><img src="images\od9.jpg" alt="5 Terre" style="width:346px;height:250px;"></a>
                       <div class="text2">
                           <p><b>Maldives</b> is a tropical nation in the Indian Ocean composed of 26 ring-shaped atolls, which are made up of more than 1,000 coral islands. </p>
                       <a href="#"><h4>Starting From Rs.246891/-</h4></a>
					   </div>
					   </div>
             </div>
			 </div>
     </div>
   </div>
</section>

</body>


  <!--//blog-->
  <?php include 'footer.php';?>