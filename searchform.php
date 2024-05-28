<form action="/" method="get">
	<label for="search">Найти</label>
	<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
	<input type="submit" value="Поиск" src="<?php bloginfo( 'template_url' ); ?>/images/search.png"/>
</form>