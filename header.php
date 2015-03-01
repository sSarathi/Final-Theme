<?php  
//this section is for header
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <?php wp_head(); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>no title</title>  
  </head>
  <body <?php body_class(); ?>>


    
    <header>
      <div class="blog-masthead">
       <div class="container">
          <nav class="blog-nav">
            <?php $args=array(
                  'theme_location' => 'Primary'
                ); ?>
                <?php wp_nav_menu( $args ); ?>
          </nav>
        </div>
      </div>  
    </header>