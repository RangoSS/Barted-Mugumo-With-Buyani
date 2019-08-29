<?php
 include "hedds.php";

?>

<link rel="stylesheet" type="text/css" href="css/gallary.css">
<div class="container">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="gallery-title">Select your College menus (select lists):</h1>
             <div align="center" style="border-style:solid ">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">Acounting Science</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">Agriculture & Environmental Scrience</button>
            <button class="btn btn-default filter-button" data-filter="spray">Education</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Law</button>
            <button class="btn btn-default filter-button" data-filter="spray">Science & Engeneering</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Graduate Of Leadership</button>
           
            <!------------------drop down------------------------------------>
             <!-- Example single danger button -->
             
            <!---------------------------------------------------------------->
        </div>
        </div>
        <br>
        <p></p>

            <div class="myAll gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>
        </div>
    </div>
</section>






















































<br><br><br><br>
<script type="text/javascript">
	
$(document).ready(function(){
  
 $.ajax({
  
  url:"http://localhost/SLIM_BARTER_API/public/api/books",
  method:"GET",
  dataType:'text',
  success:function(response){
    
    var results=JSON.parse(response);
      console.log(results);
     /*var output="";
    $.each(results,function(){
       
      // output+="<"
    }); */
  }
});


});	



</script>



<script type="text/javascript" src="js/gallary.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>