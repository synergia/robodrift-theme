<?php global $dm_settings; ?>

<section id="header" class="dark" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" data-anchor-target="#header">

    <div class="impreza-na-fb">
        <a href="<?php echo $dm_settings['fb'] ?>" class="icon fa-facebook"><span class="label">Facebook</span></a>

    </div>


    <header>
        <h1><?php bloginfo( 'name' ); ?></h1>
    </header>
    <footer>
        <div class="nav-container">
            <nav class="clearfix">
                <ul class="clearfix">
                    <li><a href="#first">O Zawodach</a>
                    </li>
                    <li><a href="#second">Regulamin</a>
                    </li>
                    <li><a href="#nagrody">Nagrody</a>
                    </li>
                    <li><a href="#organizatorzy">Organizatorzy</a>
                    </li>
                    <li><a href="/rejestracja">Rejestracja</a>
                    </li>
                </ul>
                <a href="#" id="pull"><i class="fa-bars icon"></i></a>
            </nav>
        </div>
    </footer>
</section>

<script type="text/javascript">
    if (!mo()) {
        (function ($) {
            // Init Skrollr
            var s = skrollr.init({
                smoothScrolling: false,
                mobileDeceleration: 0.004
            });
        })(jQuery);
    }
</script>
