<?php
/****
Template Name: Arabic Contact Page
*/
?>

<?php get_header(); ?>

 <!--  Contact Us starts Here -->


           <div class="row contactPage">
            <div class="container">
              <div class="col-md-offset-2 col-md-5">
                <h1 class="ContactHeader">
                  تواصل معنا
                </h1>
                  <p class="Hwhite"> 
                    سوف يقوم احد ممثلين الشركة بالتواصل معكم :)
                  </p>

                <!-- contact form  here -->
<!--  Contact Us starts Here -->


      <!-- contact form  here -->
      <div class="col-md-11 ">
      <form action="mail.php" role="form" style="padding-right:10px;"  method="post">

        <div class="form-group">

          <input type="text" class="form-control" id="name" name="name" placeholder="الاسم">
        </div>

        <div class="form-group">

          <input type="email" class="form-control" id="email" name="email" placeholder="البريد الالكترونى">
        </div>
        <br />
        <div class="form-group">
          <div class="col-sm-10">
            <div class="checkbox Hwhite">
              <label><input type="checkbox" id="checkbox1" />Wanted to ask about our products ?</label>
            </div>
          </div>
        </div>

        <div class="form-group" id="product" style="display:none;">
          <label for="product_type_select"></label>
          <select class="form-control" name="product_type" id="sel1">
            <option value="" disabled selected>Select Peoduct type</option>
            <option>Petrol</option>
            <option>Electric</option>
          </select>
        </div>

        <!-- Petrol form -->

        <div class="form-group petrolclass" id="petrol_type_select" style="display:none;">
          <label for="sel2"></label>
          <select class="form-control" name="petrol_product_type"  id="sel2">
            <option value="" disabled selected>Select your option</option>
            <option>Cold applied tapes</option>
            <option>Heat shrinkable sleeves</option>
            <option>Cathodic protection</option>
          </select>
        </div>

        <div class="petrolclass" id="cat" style="display:none;">
          <div class="form-group">
            <label for="usr"></label>
            <input type="number" class="form-control" id="mat" placeholder="" name="Maximum Applied Temp">
          </div>  
          <div class="form-group">
            <label for="pld"></label>
            <input type="text" class="form-control" id="pld" name="Pipeline diameter"> 
          </div>  
          <div class="form-group">
            <label for="pc"></label>
            <input type="text" class="form-control" id="pc" name="Pipeline coating">
          </div>
        </div>

        <div class="petrolclass" id="hss" style="display:none;">
          <div class="form-group">
            <label for="usr"></label>
            <input type="number" class="form-control" id="mat" placeholder="" name="Maximum Applied Temp">
          </div>  
          <div class="form-group">
            <label for="usr"></label>
            <input type="text" class="form-control" id="pld" name="Pipeline diameter">
          </div>  
          <div class="form-group">
            <label for="usr"></label>
            <input type="text" class="form-control" id="pld" name="Pipeline coating">
          </div>
        </div>


        <!-- Electric form -->



        <div class="form-group electricclass" id="electric_type_select" style="display:none;">
          <label for="sel3"></label>
          <select class="form-control" id="sel3" name="electric_product_type">
            <option value="" disabled selected>Select your option</option>
            <option>Lug</option>
            <option>Connector</option>
            <option>Heat Shrinkable Termination</option>
            <option>Heat shrinkable  joints</option>
            <option>Bus bar insulation</option>
            <option>Hydruallic crimper</option>
            <option>Earthing system</option>
            <option>Lightening system</option>
            <option>Tie wraps</option>
            <option>Glands</option>
            <option>Heat tracing</option>
            <option>Tank insulation</option>
            <option>Leak detection</option>
          </select>

        </div>

        <div class="electricclass" id="lug" style="display:none;">
          <div class="form-group">
            <label for="cz"></label>
            <input type="number" class="form-control" id="cz" placeholder="" name="Cable size">
          </div>  
          <div class="form-group">
            <label for="bd"></label>
            <input type="text" class="form-control" id="bd" name="Bolt diameter">
          </div>
          <div class="form-group ">
            <label for="sel4"></label>
            <select class="form-control" id="sel4" name="Type">
              <option value="" disabled selected>Select your option</option>
              <option>Bimetal</option>
              <option>Copper</option>
              <option>Aluminum</option>
            </select>
          </div>
          <div class="form-group" id="copper_sel" style="display:none;">
            <label for="sel5" ></label>
            <select class="form-control" id="sel5" name="Copper Type">
             <option value="" disabled selected>Select your option</option>
             <option>Din</option>
             <option>Standard</option>
           </select>
         </div>
       </div>

       <div class="electricclass" id="connector" style="display:none;">
        <div class="form-group">
          <label for="czc"></label>
          <input type="number" class="form-control" id="czc" placeholder="" name="Cable size">
        </div>  
        <div class="form-group ">
          <label for="sel6"></label>
          <select class="form-control" id="sel6" name="Type">
            <option value="" disabled selected>Select your option</option>
            <option>Copper</option>
            <option>Aluminum</option>
          </select>
        </div> 
      </div>

      <div class="electricclass" id="hst" style="display:none;">
        <div class="form-group">
          <label for="usr"></label>
          <input type="number" class="form-control" id="mat" placeholder="" name="Cable size">
        </div>  
        <div class="form-group">
          <label for="pld"></label>
          <input type="text" class="form-control" id="pld">
        </div>  
        <div class="form-group ">
          <label for="sel7"></label>
          <select class="form-control" id="sel7" name="Type">
            <option value="" disabled selected>Select your option</option>
            <option>Single</option>
            <option>3 Phase</option>
          </select>
        </div>
        <div class="form-group ">
          <label for="sel8"></label>
          <select class="form-control" id="sel8" name="Voltage">
            <option value="" disabled selected>Select your option</option>
            <option>LV</option>
            <option>MV</option>
            <option>HV</option>
          </select>
        </div>
        <div class="form-group ">
          <label for="sel9"></label>
          <select class="form-control" id="sel9" name="Cable Metal"> 
            <option value="" disabled selected>Select your option</option>
            <option>Copper</option>
            <option>Aluminum</option>
            <option>Bimetal</option>
          </select>
        </div> 
        <div class="form-group ">
          <label for="sel10"></label>
          <select class="form-control" id="sel10" name="SD Type">
            <option value="" disabled selected>Select your option</option>
            <option>Indoor</option>
            <option>Outdoor</option>
          </select>
        </div>
        <div class="form-group">
         <label for="commenthst"></label>
         <textarea class="form-control" rows="2" id="commenthst" name="Special"></textarea>
       </div>
     </div>

     <div class="electricclass" id="hsj" style="display:none;">
      <div class="form-group">
        <label for="usr"></label>
        <input type="number" class="form-control" id="mat" placeholder="" name="Cable size">
      </div>    
      <div class="form-group ">
        <label for="sel11"></label>
        <select class="form-control" id="sel11" name="Type">
          <option value="" disabled selected>Select your option</option>
          <option>Single</option>
          <option>3 Phase</option>
        </select>
      </div>
      <div class="form-group ">
        <label for="sel12"></label>
        <select class="form-control" id="sel12" name="Voltage">
          <option value="" disabled selected>Select Voltage option</option>
          <option>LV</option>
          <option>MV</option>
          <option>HV</option>
        </select>
      </div>
      <div class="form-group ">
        <label for="sel13"></label>
        <select class="form-control" id="sel13" name="Cable Metal">
          <option value="" disabled selected>Select your option</option>
          <option>Copper</option>
          <option>Aluminum</option>
          <option>Bimetal</option>
        </select>
      </div> 
      <div class="form-group ">
        <label for="sel14"></label>
        <select class="form-control" id="sel14" name="SD Type">
          <option value="" disabled selected>Select your option</option>
          <option>Armored</option>
          <option>Not</option>
        </select>
      </div>
      <div class="form-group">
       <label for="commenthsj"></label>
       <textarea class="form-control" rows="2" id="commenthsj" name="Special"></textarea>
     </div>
   </div>

   <div class="electricclass" id="bbi" style="display:none;">
    <div class="form-group">
     <label for="bardim"></label>
     <textarea class="form-control" rows="2" id="bardim" name="Bar dimensions"></textarea>
   </div>
 </div>



 <textarea class="form-control" rows="5" id="comment" placeholder="Additional Info or Another product" name="Message"></textarea>
 <br />

 <div class="div col-md-9 contactbuttoncenter">
  <button type="button" class="btn contactButton btn-primary btn-lg">
    Send
  </button> 
</div>

</form >
</div>
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


<?php get_footer("ar"); ?>
