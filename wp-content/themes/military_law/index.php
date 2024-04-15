<?php
get_header();

$baner = get_field('baner');
$blok = get_field('blok');
$blok_2 = get_field('blok_2');
$question = get_field('question');

?>
<main>
	<section>
		<div class="section top">
			<div class="content">
				<?php the_content(); ?>
			</div>
			<div class="content-img">
				<?php the_post_thumbnail( 'full' ); ?>
				<svg class="fon-top" width="285" height="152" viewBox="0 0 285 152" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M0.117432 344L0.117417 0.802399L140.206 0.802393C140.206 0.802393 137.548 9.53417 141.724 18.6456C144.268 24.1961 153.873 23.2013 153.873 23.2013L159.568 23.2013C162.619 18.0372 168.206 14.9062 174.203 14.9984L213.857 15.6085L284.85 15.6085L284.85 344L0.117432 344Z" fill="url(#paint0_linear_409_11676)"/>
				<defs>
				<linearGradient id="paint0_linear_409_11676" x1="0.117424" y1="172.401" x2="284.85" y2="172.401" gradientUnits="userSpaceOnUse">
				<stop stop-color="#EDEBDE"/>
				<stop offset="1" stop-color="#EDEBDE" stop-opacity="0"/>
				</linearGradient>
				</defs>
				</svg>
				<svg class="fon-top fon-top-tu" width="900" height="113" viewBox="0 0 860 113" fill="none" xmlns="http://www.w3.org/2000/svg">
				<rect x="1042.24" y="112.349" width="1041.59" height="111.934" transform="rotate(-180 1042.24 112.349)" fill="url(#paint0_linear_409_11675)"/>
				<defs>
				<linearGradient id="paint0_linear_409_11675" x1="1563.03" y1="112.349" x2="1563.03" y2="224.283" gradientUnits="userSpaceOnUse">
				<stop stop-color="#EDEBDE"/>
				<stop offset="1" stop-color="#EDEBDE" stop-opacity="0"/>
				</linearGradient>
				</defs>
				</svg>
				<svg class="fon-phri" width="148" height="152" viewBox="0 0 148 152" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M147.813 0.320923L145.103 274.155L0.0695223 274.155L0.0695331 28.6148L42.0346 17.9665L48.2657 16.9552C51.6039 16.4134 54.9804 16.1411 58.3623 16.1411L73.7343 16.1411C78.3374 16.1411 82.5452 13.5395 84.6023 9.42164L86.7169 5.18868L147.813 0.320923Z" fill="url(#paint0_linear_434_13997)"/>
				<defs>
				<linearGradient id="paint0_linear_434_13997" x1="145.103" y1="135.495" x2="0.0695441" y2="135.495" gradientUnits="userSpaceOnUse">
				<stop stop-color="#EDEBDE"/>
				<stop offset="1" stop-color="#F9F8F6" stop-opacity="0"/>
				<stop offset="1.0001" stop-color="#F9F8F6" stop-opacity="0"/>
				</linearGradient>
				</defs>
				</svg>
			</div>
		</div>
	</section>
	<section>
		<div class="baner">
			<div class="baner-text"><p><?php echo nl2br($baner['text']); ?></p></div>
			<a href="<?php echo $baner['link']['url']; ?>" class="secondery" target="<?php echo $baner['link']['target']; ?>"><?php echo $baner['link']['title']; ?></a>
		</div>
	</section>
	<section>
		<div class="blok">
			<img src="<?php echo $blok['img']['url']; ?>">
			<div class="blok-content">
				<h3><?php echo $blok['content']['title']; ?></h3>
				<p><?php echo nl2br($blok['content']['text']); ?></p>
				<a href="<?php echo $blok['content']['lihk']['url']; ?>" class="primery" target="<?php echo $blok['content']['lihk']['target']; ?>"><?php echo $blok['content']['lihk']['title']; ?></a>
			</div>
		</div>
	</section>
	<section>
		<div class="blok blok-tu">
			<div class="blok-content">
				<h3><?php echo $blok_2['title']; ?></h3>
				<p><?php echo nl2br($blok_2['text']); ?></p>
			</div>
			<a href="<?php echo $blok_2['lihk']['url']; ?>" class="primery" target="<?php echo $blok_2['lihk']['target']; ?>"><?php echo $blok_2['lihk']['title']; ?></a>
		</div>
	</section>
	<section>
		<div class="question">
			<h3><?php echo $question['title']; ?></h3>
			<div class="question-content">
				<?php foreach($question['questions'] as $questions){ ?>
					<details>
						<summary>
							<?php echo $questions['question_item']; ?>
						</summary>
						<div class="panel">
							<?php echo nl2br($questions['Answer']); ?>
						</div>
					</details>
				<?php } ?>
			</div>
			<div class="question-item">
				<div class="title">Залишились питання?</div>
				<button class="primery" id="question2">Задати питання</button>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
