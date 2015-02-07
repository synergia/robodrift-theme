<?php global $dm_settings; ?>




<section id="header" class="dark" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" data-anchor-target="#header">

    <div class="impreza-na-fb">
        <a href="<?php echo $dm_settings['fb'] ?>" class="icon fa-facebook"><span class="label">Facebook</span></a>

    </div>


    <header>
        <h1><?php bloginfo( 'name' ); ?></h1>
    </header>
    <footer>
        <ul id="nav">
            <li><a href="#first">O Zawodach</a>
            </li>
            <li><a href="#second">Kategorie</a>
            </li>
            <li><a href="/work/">Work</a>
            </li>
            <li><a href="/clients/">Clients</a>
            </li>
            <li><a href="/contact/">Contact</a>
            </li>
        </ul>
    </footer>
</section>

    <script type="text/javascript">
        ( function( $ ) {
    // Init Skrollr
    var s = skrollr.init();
} )( jQuery );
    </script>
