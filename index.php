<?php 

if(have_posts(  )) : // проверка на наличие постов
  while(have_posts(  )) : the_post(  ); // перебор постов
    the_title(); // заголовок поста
    the_content(); // содержание поста
  endwhile;
endif;
?>

