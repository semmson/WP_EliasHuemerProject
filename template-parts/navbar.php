<!-- Nav -->
    <nav id="nav">
        <?php 
            wp_nav_menu([
                "theme_location" => "main-massively-menu",
                "menu_class" => "links",
                'container'=> "ul"
            ]);
        ?>
        <!-- <ul class="links">
            <li class="active"><a href="/">This is Massively</a></li>
            <li><a href="generic.html">Generic Page</a></li>
            <li><a href="elements.html">Elements Reference</a></li>
        </ul> -->
        <ul class="icons">
            <li><a target="_blank" href="https://www.youtube.com/watch?v=0a7zjnjoraA&ab_channel=EliasHuemer" class="icon brands alt fa-youtube"><span class="label">Youtube</span></a></li>
            <!-- <li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li> -->
            <li><a target="_blank" href="https://www.instagram.com/eliashuemerproject/" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a target="_blank" href="#" class="icon brands alt fa-spotify"><span class="label">Spotify</span></a></li>
        </ul>
    </nav>