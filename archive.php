<?php get_header(); ?>
<section id="content" role="main">
  <header class="header">
    <h1 class="entry-title"><?php 
    if ( is_day() ) { printf( __( 'Daily Archives: %s', 'blankslate' ), get_the_time( get_option( 'date_format' ) ) ); }
    elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'blankslate' ), get_the_time( 'F Y' ) ); }
    elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'blankslate' ), get_the_time( 'Y' ) ); }
    else { _e( 'Archives', 'blankslate' ); }
    ?></h1>
  </header>
<?php 
  while ( have_posts() ) {
    the_post();
    get_template_part( 'entry' );
  }
  get_template_part( 'nav', 'below' );
?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
