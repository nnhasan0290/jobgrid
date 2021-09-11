<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio
 */

get_header();
?>

	<main id="primary" class="site-main">
		

	<section class="section latest-news-area blog-list">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-7 col-12">
          <div class="row">
           <?php 
		    while(have_posts(  )){the_post(  );
			  get_template_part( 'template-parts/post-content' );
			}  
		   ?>
          </div>

          <div class="pagination center">
            <ul class="pagination-list">
              <li><a href="#"><i class="lni lni-chevron-left"></i></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="lni lni-chevron-right"></i></a></li>
            </ul>
          </div>

        </div>
        <aside class="col-lg-4 col-md-5 col-12">
          <div class="sidebar">
            <div class="widget search-widget">
              <h5 class="widget-title"><span>Search This Site</span></h5>
              <form action="#">
                <input type="text" placeholder="Search Here...">
                <button type="submit"><i class="lni lni-search-alt"></i></button>
              </form>
            </div>
            <div class="widget popular-feeds">
              <h5 class="widget-title"><span>Popular Feeds</span></h5>
              <div class="popular-feed-loop">
                <div class="single-popular-feed">
                  <div class="feed-desc">
                    <h6 class="post-title"><a href="#">Tips to write an impressive resume online for
                        beginner</a></h6>
                    <span class="time"><i class="lni lni-calendar"></i> 05th Nov 2023</span>
                  </div>
                </div>
                <div class="single-popular-feed">
                  <div class="feed-desc">
                    <h6 class="post-title"><a href="#">10 most important SEO focus areas for
                        colleges
                        and universities</a></h6>
                    <span class="time"><i class="lni lni-calendar"></i> 24th March 2023</span>
                  </div>
                </div>
                <div class="single-popular-feed">
                  <div class="feed-desc">
                    <h6 class="post-title"><a href="#">7 things you should never say to your boss in
                        your joblife</a></h6>
                    <span class="time"><i class="lni lni-calendar"></i> 30th Jan 2023</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="widget categories-widget">
              <h5 class="widget-title"><span>Categories</span></h5>
              <ul class="custom">
                <li>
                  <a href="#">Announcement<span>26</span></a>
                </li>
                <li>
                  <a href="#">Indeed Events<span>30</span></a>
                </li>
                <li>
                  <a href="#">Tips & Tricks<span>71</span></a>
                </li>
                <li>
                  <a href="#">Experiences<span>56</span></a>
                </li>
                <li>
                  <a href="#">Case Studies<span>15</span></a>
                </li>
                <li>
                  <a href="#">Labor Market News<span>12</span></a>
                </li>
                <li>
                  <a href="#">HR Best Practices<span>17</span></a>
                </li>
              </ul>
            </div>
            <div class="widget popular-tag-widget">
              <h5 class="widget-title"><span>Popular Tags</span></h5>
              <div class="tags">
                <a href="#">Jobpress</a>
                <a href="#">Design</a>
                <a href="#">HR</a>
                <a href="#">Recruiter</a>
                <a href="#">Interview</a>
                <a href="#">Employee</a>
                <a href="#">Labor</a>
                <a href="#">Salary</a>
                <a href="#">Consult</a>
                <a href="#">Business</a>
                <a href="#">Candidates</a>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </section>

	</main><!-- #main -->

<?php
get_footer();


require_once get_template_directory(  ).'/inc/sidebar_register.php';
