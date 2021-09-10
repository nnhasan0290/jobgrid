<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio
 */
?>



  <footer class="footer">
   

    <div class="footer-middle">
      <div class="container">
        <div class="row">
           <div class="col-lg-4 col-md-6 col-12">
             <div class="f-about single-footer">
                <div class="logo">
                  <a href="index.html"><?php echo the_custom_logo(  );?></a>
                </div>
                <?php
                get_sidebar('sidebar-1' );
                ?>
              </div>
            </div>


          <div class="col-lg-8 col-12">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12">
                <div class="single-footer f-link">
                    <?php 
                      if(is_active_sidebar( 'footer_second_left_id' )){
                        dynamic_sidebar( 'footer_second_left_id' );
                      }
                    ?>
                </div>          
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="single-footer f-link">
                  <?php 
                    if(is_active_sidebar( 'footer_third_left_id' )){
                      dynamic_sidebar( 'footer_third_left_id' );
                    }
                  ?>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 col-12">
                  <div class="single-footer newsletter">
                      <?php 
                        if(is_active_sidebar( 'footer_last_id' )){
                          dynamic_sidebar( 'footer_last_id' );
                        }
                      ?>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
