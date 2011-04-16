<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
    <label class="hidden" for="s">Buscar por: </label>

    <div>
        <input type="search" value="<?php the_search_query(); ?>" name="s" id="s"/>
        <input type="submit" id="searchsubmit" value="Buscar" />
    </div>
</form>
