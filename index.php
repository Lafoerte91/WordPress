<?php 

if(is_404(  )) { // 
  get_header('special'); // заголовок сайта
} else {
  get_header(); // заголовок сайта
}

if(have_posts(  )) : // проверка на наличие постов
  while(have_posts(  )) : the_post(  ); // перебор постов
    if(has_post_thumbnail()) { // если есть миниатюра
      the_post_thumbnail(); // миниатюра
    }
    if(function_exists('the_custom_logo') && 'has_custom_logo') { // если есть логотип 
      the_custom_logo(); // логотип
    } else {
      echo '<h1>' . get_bloginfo('name') . '</h1>';
    }
    the_title('<h1>', '</h1>'); // заголовок поста
    the_content(); // содержание поста
    if(is_single(  )) { // если это один пост
      the_author(); // автор поста
      the_time( ); // дата создания поста
    } else if(is_home(  )) { // если это главная страница
      echo 'Да, это is_home()'; // сообщение о главной странице
    }
  endwhile;
else:
  _e('Sorry, no posts matched your criteria.', 'yg1'); // сообщение об отсутствии постов
endif;

get_template_part('template-parts/header/top'); // шапка
get_search_form(); // форма поиска
get_sidebar(); // сайдбар
get_footer(); // подвал
?>

