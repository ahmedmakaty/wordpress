<?php
/****
Template Name: About Page
*/
?>

<?php get_header();?>

<!-- About Us content  -->

           <section class="ACS">
            <div class="row ">
              <div class="container">
                <div class="row ACSH">
                  <div class=" col-md-offset-3 col-md-4 ACSM">
                    <div class="ACS1">
                      <h1 class="ACS11">El Massala Co.</h1>
                      <p class="ACS12">This is some description <blockquote>This is a quote</blockquote></p>
                      </div>

                    </div>

                    <div class="col-md-3 ACS13">
                      <img src="<?php print THEMEROOT;?>/img/about/ci1.png" alt="El Masalla logo ">
                    </div>
                  </div>
                  
                  <div class="row ACSC">
                    <div class="col-md-offset-3 col-md-7 ACS2">
                      <div class="ACS21">
                        <!-- Vision -->
                        <div class="ACS21H">
                          <div class="col-md-1">
                            <img src="<?php print THEMEROOT;?>/img/About/vision.png" alt="Masalla Vision"> </div> 
                            <div class="col-md-11">
                              <h4>Vision</h4>
                            </div>
                          </div>
                          <h3 class="ACS211">Ease your shop operations with dependable POS Software</h3>
                          <!-- Mission -->
                          <div class="ACS21M">
                          <div class="col-md-1">
                            <img src="<?php print THEMEROOT;?>/img/About/Mission.png" alt="Masalla Mission"> </div>
                            <div class="col-md-11">
                              <h4>Mission</h4>
                            </div>
                          </div>
                          <h3 class="ACS211">Ease your shop operations with dependable POS Software</h3>
                        </div>
                      </div>
                    </div>
                    <div class="row ACS33">
                      <a href="<?php echo get_permalink('79');?>"><div class="col-md-offset-4 col-md-2 ACS331">
                        <img src="<?php print THEMEROOT;?>/img/About/products.png" alt="Masalla prodcuts">
                        <h4>Products</h4>
                      </div>
                      </a>
                      <a href="<?php echo get_permalink('81');?>"><div class="col-md-2 ACS332">
                        <img src="<?php print THEMEROOT;?>/img/About/partners.png" alt="Masalla prartners">
                        <h4>Partners</h4>
                      </div> 
                      </a>
                    </div>
                  </div>
                </div>
              </section>
              <!--  -->


<?php get_footer();?>