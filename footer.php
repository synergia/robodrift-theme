<section id="footer">

    <div class="copyright">
        <ul>
            <li>ROBODRIFT
                <div class="cienki">2015</div>
            </li>
            <li><a target="_blank" class="no-border-bottom" href="http://synergia.pwr.wroc.pl/"><img src="<?php echo get_template_directory_uri(); ?>/img/sy-logo.png"/> </a>
            </li>
        </ul>
    </div>
</section>
<?php wp_footer(); ?>
<script>
(function() {
  var cards = document.querySelectorAll(".card.effect__click");
  for ( var i  = 0, len = cards.length; i < len; i++ ) {
    var card = cards[i];
    clickListener( card );
  }

  function clickListener(card) {
    card.addEventListener( "click", function() {
      var c = this.classList;
      c.contains("flipped") === true ? c.remove("flipped") : c.add("flipped");
    });
  }
})();
</script>

</body>

</html>
