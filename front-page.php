<?php get_header(); ?>

    <div class="container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>

              <?php endwhile; endif; ?>
            </div>
      

  </div>

  <ul class="home">
    <li>
  <a href="http://localhost/han-solo-wp/contact/"><h1>Home<h1></a>
</li>
</ul>
    <style>

    img {
      margin: 3px;
      padding-top: 5px;
      padding-left: 10px;
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
  text-align: center;
  padding: 10px;
  align-content: center;
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
