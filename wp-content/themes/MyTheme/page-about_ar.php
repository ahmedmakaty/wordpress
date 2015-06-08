<?php
/****
Template Name: Arabic About Page
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
                      <h1 class="ACS11">شركة المسلة لتصنيع ملحقات الكابلات</h1>
                      <p class="ACS12"><?php the_field('description');?>شركة المسلة لتصنيع ملحقات الكابلات ، نستخدم خطوط لوريم ابسوم</p>
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
                              <h4>الرؤية</h4>
                            </div>
                          </div>
                          <h3 class="ACS211">شركة المسلة لتصنيع ملحقات الكابلات ، نستخدم خطوط لوريم ابسوم  ، نستخدم خطوط لوريم ابسوم </h3>
                          <!-- Mission -->
                          <div class="ACS21M">
                          <div class="col-md-1">
                            <img src="<?php print THEMEROOT;?>/img/About/Mission.png" alt="Masalla Mission"> </div>
                            <div class="col-md-11">
                              <h4>مهمتنا</h4>
                            </div>
                          </div>
                          <h3 class="ACS211">شركة المسلة لتصنيع ملحقات الكابلات ، نستخدم خطوط لوريم ابسوم  ، نستخدم خطوط لوريم ابسوم </h3>
                        </div>
                      </div>
                    </div>
                    <div class="row ACS33">
                      <div class="col-md-offset-4 col-md-2 ACS331">
                        <img src="<?php print THEMEROOT;?>/img/About/products.png" alt="Masalla prodcuts">
                        <h4>منتجاتنا</h4>
                      </div>
                      <div class="col-md-2 ACS332">
                        <img src="<?php print THEMEROOT;?>/img/About/partners.png" alt="Masalla prartners">
                        <h4>شركاء النجاح</h4>
                      </div> 
                    </div>
                  </div>
                </div>
              </section>
              <!--  -->


<?php get_footer("ar");?>