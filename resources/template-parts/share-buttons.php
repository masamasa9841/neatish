<script>
jQuery(function(){
  fetch_hatebu_count('<?php the_permalink(); ?>', '.hatebu-count');
});
</script>

<ul class="web-logo-font snsb clearfix snsbs">
  <li class="twitter-btn-icon">
    <a href="//twitter.com/share" class="twitter-btn-icon-link"><span class="icon-twitter"></span></a>
  </li>
  <li class="facebook-btn-icon">
    <a href="#" class="facebook-btn-icon-link"><span class="icon-facebook"></span></a>
  </li>
  <li class="google-plus-btn-icon">
    <a href="#" class="google-plus-btn-icon-link"><span class="icon-googleplus"></span></a>
	</li>

	<li class="hatena-btn">
		<a href="//b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-btn-icon-link" data-hatena-bookmark-title="<?php the_title(); ?>｜<?php bloginfo('name'); ?>">
			<span class="icon-hatena"></span>
			<span class="social-count hatebu-count"></span>
		</a>
		<script type="text/javascript" src="//b.st-hatena.com/js/bookmark_button.js" async="async"></script>
	</li>

  <li class="pocket-btn-icon">
    <a href="#" class="pocket-btn-icon-link"><span class="icon-pocket"></a>
  </li>
  <li class="line-btn-icon">
    <a href="#" class="line-btn-icon-link"><span class="icon-line"></a>
  </li>
  <li class="feedly-btn-icon">
    <a href="#" class="feedly-btn-icon-link"><span class="icon-feedly"></a>
  </li>
</ul>
<div style="clear:both;"></div> <!-- 回り込みの解除 -->
