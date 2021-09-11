<div class="col-lg-6 col-12">

<div class="single-news wow fadeInUp" data-wow-delay=".3s">
  <div class="image">
    <?php the_post_thumbnail(  );?>
  </div>
  <div class="content-body">
    <h4 class="title"><a href="blog-single.html"><?php the_title();?></a></h4>
    <div class="meta-details">
      <ul>
        <li><a href="#"><i class="lni lni-tag"></i> Job skills</a></li>
        <li><a href="#"><i class="lni lni-calendar"></i><?php the_date();?></a></li>
        <li><a href="#"><i class="lni lni-eye"></i> 55</a></li>
      </ul>
    </div>
    <p><?php the_content(  );?></p>
    <div class="button">
      <a href="blog-single.html" class="btn">Read More</a>
    </div>
  </div>
</div>

</div>