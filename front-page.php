<?php get_header(); ?>
<!-- Intro -->
    <div id="intro">
        <div class="linkwrapper">          
            <h2><a href="<?= get_home_url()."/music" ?>">Somnambule<span> Coming Soon... </span></a></h2>
            <ul class="actions">
                <li>
                    <div class="buttonwrapper">
                        <a href="<?= get_home_url()."/music" ?>" class="button icon solid solo fa-arrow-down scrolly">Continue</a>
                    </div>
                </li>
            </ul>         
        </div>
        <!-- <p>A free, fully responsive HTML5 + CSS3 site template designed by <a href="https://twitter.com/ajlkn">@ajlkn</a> for <a href="https://html5up.net">HTML5 UP</a><br />
        and released for free under the <a href="https://html5up.net/license">Creative Commons license</a>.</p> -->
        
    </div>

    <!-- Header -->
     
    <!-- Logo -->
		<?php get_template_part("template-parts/logo") ?>

    <!-- Navbar -->
        <?php get_template_part("template-parts/navbar") ?>

    <!-- Main -->
    <div id="main">

        <!-- Featured Post -->
            <!-- <article class="post featured">
                <header class="major">
                    <span class="date">April 25, 2017</span>
                    <h2><a href="#">And this is a<br />
                    massive headline</a></h2>
                    <p>Aenean ornare velit lacus varius enim ullamcorper proin aliquam<br />
                    facilisis ante sed etiam magna interdum congue. Lorem ipsum dolor<br />
                    amet nullam sed etiam veroeros.</p>
                </header>
                <a href="#" class="image main"><img src="<?= get_template_directory_uri() ?>/images/elsn_schmaler.gif" alt="" /></a>
                <ul class="actions special">
                    <li><a href="#" class="button large">Full Story</a></li>
                </ul>
            </article> -->
            

        <!-- Posts -->
            <section class="posts">
                <article>
                    <header>
                        <!-- <span class="date">April 24, 2017</span> -->
                        <h2>Elsn</h2>
                        <h5>Piano, Comp, Bandleader</h5>
                    </header>
                    <a href="https://www.instagram.com/el_iashuemer/?hl=de" target="_blank" class="image fit"><img src="<?= get_template_directory_uri() ?>/images/elsn_lassig_fin.jpg" alt="" /></a>
                    
                    <!-- <ul class="actions special">
                        <li><a href="#" class="button">Full Story</a></li>
                    </ul> -->
                </article>
                <article>
                    <header>
                        <!-- <span class="date">April 22, 2017</span> -->
                        <h2>Almonther Almighty</h2>
                        <h5>Bass</h5>
                    </header>
                    <a href="https://www.instagram.com/almontheralshoufi/?hl=de" target="_blank" class="image fit"><img src="<?= get_template_directory_uri() ?>/images/monty_lassig_fin.jpg" alt="" /></a>
                    
                    <!-- <ul class="actions special">
                        <li><a href="#" class="button">Full Story</a></li>
                    </ul> -->
                </article>
                <article>
                    <header>
                        <!-- <span class="date">April 18, 2017</span> -->
                        <h2>Timsn</h2>
                        <h5>Guitar</h5>
                    </header>
                    <a href="https://www.instagram.com/_nanu33__/?hl=de" target="_blank" class="image fit"><img src="<?= get_template_directory_uri() ?>/images/timmi_lassig_fin.jpg" alt="" /></a>
                    
                    <!-- <ul class="actions special">
                        <li><a href="#" class="button">Full Story</a></li>
                    </ul> -->
                </article>
                <article>
                    <header>
                        <!-- <span class="date">April 14, 2017</span> -->
                        <h2>Dansn</h2>
                        <h5>Drums</h5>
                    </header>
                    <a href="https://www.instagram.com/daniel_semmelrock/?hl=de" target="_blank" class="image fit"><img src="<?= get_template_directory_uri() ?>/images/dans_lassig_fin.jpg" alt="" /></a>
                    
                    <!-- <ul class="actions special">
                        <li><a href="#" class="button">Full Story</a></li>
                    </ul> -->
                    
                </article>
            </section>
            
            <section class="videos">
                <header class="major">
                    <h2>Videos</h2>
                </header>
                <h2>Live at Porgy&Bess Vienna</h2>
                <iframe class="video embeded" src="https://www.youtube.com/embed/0a7zjnjoraA?si=9ZQpk2Me98UKvnrd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                
                <h2>Jazz Nights at Anton Bruckner Privatuniversität</h2>
                <iframe class="video embeded" src="https://www.youtube.com/embed/cUnRZGGv22o?si=f1WyvuCCCikLKmAZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </section>

           
            <section>
                    <blockquote>„A gfierige Partie“</blockquote><h6>- Miles Davis</h6> 
                    <blockquote>„Jahrhundertgruppn“</blockquote><h6>- Jean-Jacques Rousseau</h6>
                    <blockquote>„Kompakt, griffig, gschmackig“</blockquote><h6>- New York Times</h6>
                    <blockquote>„Like a treelegged Andromeda in the nightsky of Linz,<br>floating above the neonreflections of the limelights on the wet pavement.<br>Like nothing else.”</blockquote><h6>- Salvador Dali, Kronen Zeitung</h6>
            </section>
        <!-- Footer -->
            <!-- <footer>
                <div class="pagination">
                    <a href="#" class="previous">Prev</a>
                    <a href="#" class="page active">1</a>
                    <a href="#" class="page">2</a>
                    <a href="#" class="page">3</a>
                    <span class="extra">&hellip;</span>
                    <a href="#" class="page">8</a>
                    <a href="#" class="page">9</a>
                    <a href="#" class="page">10</a>
                    <a href="#" class="next">Next</a>
                </div>
            </footer> -->

    </div>
<?php get_footer(); ?>