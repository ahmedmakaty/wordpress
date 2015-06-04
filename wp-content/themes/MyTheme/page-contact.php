<?php
/****
Template Name: Contact Page
*/
?>

<?php get_header(); ?>

 <!--  Contact Us starts Here -->


           <div class="row contactPage">
            <div class="container">
              <div class="col-md-offset-2 col-md-5">
                <h1 class="ContactHeader">
                  Contact Us
                </h1>

                <!-- contact form  here -->

                <form class="FormStyle clearfix" action="">
                 <div class="col-md-5 ">
                  <input type="Name" class="form-control" id="inputName" placeholder="Name">
                </div>    
                <div class="form-group FS3C">
                  <div class="col-md-9">
                    <input type="Email" class="form-control" id="inputEmail" placeholder=" Email!">
                  </div>  
                  <div class="col-md-9">
                    <input class="form-control" id="inputSubject" placeholder="Subject">
                  </div>
                </div>
                <div class="col-md-9 FS3C">
                  <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                </div>
                <div class="div col-md-9 contactbuttoncenter">
                  <button type="button" class="btn contactButton btn-primary btn-lg">
                    Send
                  </button> 
                </div>
              </form>

            </div>

            <div class="col-md-4">
              <div class="contactinfo">
                <h6>Phone : 01100767010</h6>
                <h6> Email : info@Example.com</h6>
              </div>

              


                <div class="row">
                    <div class="col-lg-12">
                    <h4 id="addresshjs"></h4>
                    <p id="addresspjs"></p>
           <div id="googleMapad1" style="width:100%;height:300px;"></div>
           </div>
           </div>

              <!-- Armia Google maps -->
             <!--  <div role="group" aria-label="..." style="text-align:center;">
                <button type="button" class="btn btn-default" id="address1">Address 1</button>
                <button type="button" class="btn btn-default" id="address2">Address 2</button>
                <button type="button" class="btn btn-default" id="address3">Address 3</button>
              </div>
              <div id="googleMapad1" style="width:100%;height:200px;"></div> -->



            </div>
            
          </div>
        </div>
      </div>



      <!--  -->


<?php get_footer(); ?>
