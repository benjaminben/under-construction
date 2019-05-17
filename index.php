<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <main>
      <img
        title="Under Construction"
        alt="UNDER CONSTRUCTION"
        src="<?php echo get_stylesheet_directory_uri() ?>/under-construction.gif" />
      <a class="admin" href="<?php echo admin_url() ?>">Log In?</a>
    </main>
    <?php wp_footer(); ?>
  </body>
</html>
