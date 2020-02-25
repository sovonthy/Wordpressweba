<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name');?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <div class="containers">
            <h1><?php bloginfo('name');?></h1>
            <span><?php bloginfo('description');?></span>
            <?php wp_nav_menu();?>
        </div>
    </header>
    <div class="container">
        <?php if(have_posts()):?>
      <?php  while(have_posts()):?>
        <?php the_post();?>
        <div class="title">
         <a href="<?php the_permalink();?>"><?php the_title();?></a> 
            <p> Writen by: <?php the_author();?>
            Date: <?php the_date();?></p>
     
        </div>
           <!-- check post that where in category -->
        <?php
         $caters = get_the_category();
         $output = "";
          if($caters){
          foreach($caters as $cater){
          $output = '<a href="'.get_category_link($cater->term_id).'">'.$cater->cat_name.'</a>';
         }
         }
         echo $output;
       ?>
       <?php endwhile;?>
       <?php else:
        echo "the post no found";
       endif;
       ?>  
        <?php if(has_post_thumbnail()): ?>
        <?php the_post_thumbnail();?>
        <?php else: echo "no found";?>
   
        <?php endif;?>
        
        <?php the_excerpt();?>
        <a class="btn btn-info" href="<?php the_permalink();?>">Read more...</a> 
    </div>

   
    
   
</body>
</html>