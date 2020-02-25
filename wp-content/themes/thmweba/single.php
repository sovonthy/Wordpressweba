 <!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name');?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
</head>
<body>
    <header>
        <div class="container">
            <h1><?php bloginfo('name');?></h1>
            <span><?php bloginfo('description');?></span>
        </div>
    </header>
    <div class="container">
        <?php if(have_posts()):?>
        <?php the_post();?>
        <div class="title">
         <a href="<?php the_permalink();?>"><?php the_title();?></a> 
            <p> Writen by: <?php the_author();?>
            Date: <?php the_date();?></p>
        </div>
        
       <?php else:
        echo "the post no found";
       endif;
       ?>  
        <?php if(has_post_thumbnail()): ?>
        <?php the_post_thumbnail();?>
        <?php else: echo "no found";?>
        <?php endif;?>
        <?php the_content();?>
      
    </div>
    <footer>
       
       <p>&copy Copy by sovanthy</p>
   </footer>
</body>
</html>