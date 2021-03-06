<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>



<header class="header other-page">
    <div class="navbar-area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">
			  <?php
				the_custom_logo(  );
				?>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                <ul id="nav" class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a href="index.html">Home</a>
                    <ul class="sub-menu">
                      <li><a href="index.html">Home 1</a></li>
                      <li><a href="index2.html">Home 2</a></li>
                      <li><a href="index3.html">Home 3</a></li>
                      <li><a href="index4.html">Home 4</a></li>
                    </ul>
                  </li>
                  <li class="nav-item"><a href="#">Pages</a>
                    <ul class="sub-menu">
                      <li><a href="about-us.html">About Us</a></li>
                      <li><a href="job-list.html">Job List</a></li>
                      <li><a href="job-details.html">Job Details</a></li>
                      <li><a href="resume.html">Resume Page</a></li>
                      <li><a href="privacy-policy.html">Privacy Policy</a></li>
                      <li><a href="faq.html">Faq</a></li>
                      <li><a href="pricing.html">Our Pricing</a></li>
                      <li><a href="404.html">404 Error</a></li>
                      <li><a href="mail-success.html">Mail Success</a></li>
                    </ul>
                  </li>
                  <li class="nav-item"><a href="#">Candidates</a>
                    <ul class="sub-menu">
                      <li><a href="browse-jobs.html">Browse Jobs</a></li>
                      <li><a href="browse-categories.html">Browse Categories</a></li>
                      <li><a href="add-resume.html">Add Resume</a></li>
                      <li><a href="job-alerts.html">Job Alerts</a></li>
                    </ul>
                  </li>
                  <li class="nav-item"><a href="#">Employers </a>
                    <ul class="sub-menu">
                      <li><a href="post-job.html">Add Job</a></li>
                      <li><a href="manage-jobs.html">Manage Jobs</a></li>
                      <li><a href="manage-applications.html">Manage Applications</a></li>
                      <li><a href="manage-resumes.html">Manage Resume</a></li>
                      <li><a href="browse-resumes.html">Browse Resumes</a></li>
                    </ul>
                  </li>
                  <li class="nav-item"><a href="#" class="active">Blog</a>
                    <ul class="sub-menu">
                      <li><a href="blog-grid-sidebar.html" class="active">Blog Grid Sidebar</a>
                      </li>
                      <li><a href="blog-single.html">Blog Single</a></li>
                      <li><a href="blog-single-sidebar.html">Blog Single Sibebar</a></li>
                    </ul>
                  </li>
                  <li class="nav-item"><a href="contact.html">Contact </a> </li>
                </ul>
              </div>

              <div class="button">
                <a href="javacript:" data-toggle="modal" data-target="#login" class="login"><i
                    class="lni lni-lock-alt"></i> Login</a>
                <a href="javacript:" data-toggle="modal" data-target="#signup" class="btn">Sign Up</a>
              </div>
            </nav>

          </div>
        </div>

      </div>

    </div>

  </header>
  <?php 
   echo get_template_part("/template-parts/breadcrumb" );