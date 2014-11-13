			<section id="footer">

				<div class="copyright">
					<ul>
                        <li>ROBODRIFT<div class="cienki">2015</div></li>
                        <li><a target="_blank" class="no-border-bottom" href="http://synergia.pwr.wroc.pl/"><img src="<?php echo get_template_directory_uri(); ?>/img/sy-logo.png"/> </a></li>
					</ul>
				</div>
			</section>
<?php wp_footer(); ?>
 <script>
jQuery(document).ready(function () {

jQuery('#demo').click(function (e) {
e.preventDefault();
jQuery('#modal-content').popUpWindow({
size: "large" // large, medium or large
});
});

});</script>
</body>
</html>
