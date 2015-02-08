<?php global $dm_settings; ?>




<section id="header" class="dark" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" data-anchor-target="#header">

    <div class="impreza-na-fb">
        <a href="<?php echo $dm_settings['fb'] ?>" class="icon fa-facebook"><span class="label">Facebook</span></a>

    </div>


    <header data-center="bottom: 200px; opacity: 1"
                data-top="bottom: 1200px; opacity: 0"
                data-anchor-target="#header h1">
        <h1><?php bloginfo( 'name' ); ?></h1>
    </header>
    <footer>
        <div class="nav-container">
        <nav>
            <ul>
                <li><a href="#first">O Zawodach</a>
                </li>
                <li><a href="#second">Reguły</a>
                </li>
                <li><a href="#nagrody">Nagrody</a>
                </li>
                <li><a href="/rejestracja">Rejestraja</a>
                </li>
                <li><a href="#sponsorowane">Organizatorzy</a>
                </li>
            </ul>
        </nav>
        </div>
    </footer>
</section>

    <script type="text/javascript">
        ( function( $ ) {
    // Init Skrollr
    var s = skrollr.init();
} )( jQuery );
    </script>
