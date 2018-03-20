<?php get_header(); ?>

<div class="home">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>

          <?php endwhile; endif; ?> 
</div>


    <style>

    img {
      margin: 10x;
      padding: 10px;
    }
    body {
    background-color: orange;
    color: #111;
}

.home {
  text-align: center;
}


ul {
  display: inline;
}

li {
  display: inline;
  text-decoration: none;
  padding: 10px;
  color: #2d2d2d;
}

a{
  display: inline;
  text-decoration: none;
  padding: 10px;
  color: #2d2d2d;
}

.menu_i a{
  display: inline;
  text-decoration: none;
  padding: 10px;
  float: left;
}

a:hover {
  color: white;
  text-decoration: none;
}

footer {
  display: inline;
}

    </style>
<?php get_footer(); ?>
