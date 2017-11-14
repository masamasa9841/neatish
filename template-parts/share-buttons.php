<?php
/**
 * The template Shre-buttons.
 *
 * @package neatish
 * @author Masaya Okawa
 * @license GPL-2.0+
 */

?>

<ul class="web-logo-font snsb clearfix snsbs">

	<!-- twitter -->
	<li class="twitter-btn-icon">
		<a href="//twitter.com/share?text=<?php echo esc_html( get_the_title() ); ?>&amp;url=<?php echo esc_url( get_the_permalink() ); ?>" class="twitter-btn-icon-link">
			<span class="icon-twitter"></span>
		</a>
	</li>

	<!-- facebook -->
	<li class="facebook-btn-icon">
		<a href="//www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php echo esc_url( get_the_title() ); ?>"
		class="facebook-btn-icon-link">
			<span class="icon-facebook"></span>
			<span class="social-count facebook-count"></span>
		</a>
	</li>

	<!-- google -->
	<!-- <li class="google-plus-btn-icon">
		<a href="#" class="google-plus-btn-icon-link">
			<span class="icon-googleplus"></span>
		</a>
	</li> -->

	<!-- Hatena -->
	<li class="hatena-btn">
		<a href=<?php echo esc_url( get_hatebu_url( get_permalink() ) ); ?>
		target="blank"
		class="hatena-btn-icon-link hatena-bookmark-button"
		title="<?php the_title(); ?>"
		data-hatena-bookmark-layout="simple">
			<span class="icon-hatena"></span>
			<span class="social-count hatebu-count"></span>
		</a>
	</li>

	<!-- pecket -->
	<li class="pocket-btn-icon">
		<a href="//getpocket.com/edit?url=<?php the_permalink(); ?>" class="pocket-btn-icon-link">
			<span class="icon-pocket">
		</a>
	</li>

	<!-- LINE -->
	<li class="line-btn-icon">
		<a href="//lineit.line.me/share/ui?url=<?php the_permalink(); ?>" class="line-btn-icon-link">
			<span class="icon-line">
		</a>
	</li>

	<!-- feedly -->
	<!-- <li class="feedly-btn-icon">
		<a href="/feedly.com/index.html#subscription%2Ffeed%2F<?php esc_url( bloginfo( 'rss2_url' ) ); ?>"
		class="feedly-btn-icon-link">
			<span class="icon-feedly">
		</a>
	</li> -->

</ul>
<div style="clear:both;"></div>
