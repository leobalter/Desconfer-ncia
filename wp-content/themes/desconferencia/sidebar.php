<aside id="sidebar" class="col-02">
    <ul id="sidebarWidgets">

        <li id="search-3" class="widget widget_search">
            <form method="get" id="searchform" action="http://desconferencia.com.br/">
                <label class="hidden" for="s">Buscar por:</label>
                <div>
                    <input type="search" value="" name="s" id="s" placeholder="Digite sua busca">
                    <input type="submit" id="searchsubmit" value="Buscar">
                </div>
            </form>
        </li>

        <li class="widget widget-text">
            <p><a href="#" onclick="return false;">Assine pelo iTunes</a></p>
            <p><a href="#" onclick="return false;" rel="alternate" type="application/rss+xml">Assine via RSS</a></p>
            <form id="formEmail" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=desconferencia', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
                <p>Assine pelo email:</p>
                <p><input type="text" style="width:240px" name="email"></p>
                <input type="hidden" value="desconferencia" name="uri">
                <input type="hidden" name="loc" value="pt_BR">
                <input type="submit" value="Assinar">
            </form>
        </li>

        <?php (function_exists('dynamic_sidebar') && dynamic_sidebar() ); ?>

        <li>
            <fb:like-box href="http://www.facebook.com/pages/Desconfer%C3%AAncia/216265685054595" width="300" show_faces="true" stream="false" header="false"></fb:like-box>
        </li>
    </ul>
</aside>

