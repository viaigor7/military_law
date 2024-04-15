<?php
$info = get_field( 'info', 'options');
$socs = get_field( 'socs', 'options');

//print_r($socs);
?>
        <footer>
			<div class="footer">
				<div class="logo-site">
					<?php logo_teme(); ?>
					<a class="logo-lex" href="https://activelex.com/">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Logo-ActiveLex.svg">
					</a>
				</div>
				<a class="hotline" href="tel:1512">
					<span>Гаряча лінія Міноборони</span>
					<span>15-12</span>
				</a>
			</div>
			
			<div class="footer-to">
				<button id="open-block">Задати питання</button>
				<div class="info">
					<?php foreach($info as $inf){ ?>
					<div class="item">
						<a href="<?php echo $inf['link']['url']; ?>" target="<?php echo $inf['link']['target']; ?>" class="content">
							<div class="title"><?php echo $inf['link']['title']; ?></div>
							<div class="text"><?php echo $inf['text']; ?></div>
						</a>
					</div>
					<?php } ?>
				</div>
			</div>
			
			<div class="footer-to footer-socs">
				<div class="info">
					<div class="item socs">
						<?php foreach($socs as $soc){ ?>
							<a href="<?php echo $soc['link']['url']; ?>" target="<?php echo $inf['link']['target']; ?>" class="link-icon">
								<i class="<?php echo $soc['ikon']; ?>"></i>
							</a>
						<?php } ?>
					</div>
				</div>
			</div>
        </footer>
        <div class="question-pop-up" id="pop-up-modal2">
			<div class="bg" onclick="showQuestion();"></div>
			<div class="form-show" id="question-block">
				<div class="q-form">
					<h2>Задати питання</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt="" id="close-block">
					<?php echo do_shortcode('[contact-form-7 id="43837d7" title="Задать вопрос"]');?>
					<div class="contact_us">
						<span>Або зверніться у:</span>
						<div class="soc">
							<a href="http://t.me/ActiveLexbot"><img src="<?php echo get_template_directory_uri(); ?>/img/telegram.svg" alt=""></a>
							<a href="http://tinyurl.com/y2c6bauh"><img src="<?php echo get_template_directory_uri(); ?>/img/viber.svg" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php wp_footer(); ?>

	</body>
</html>
