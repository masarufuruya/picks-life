</div>
<!-- /#main -->
<?php get_sidebar(); ?>

<div class="clear"></div>
<!-- /.cler -->
</div>
<!-- /#wrap-in -->

</div>
<!-- /#wrap -->
</div>
<!-- /#container -->
<div id="footer">
  <div id="footer-in">
    <div id="gadf"> </div>
    <h3><a href="<?php echo home_url(); ?>/">
      <?php wp_title(''); ?>
      </a></h3>
    <h4><a href="<?php echo home_url(); ?>/">
      <?php bloginfo('description'); ?>
      </a></h4>
<!--著作権リンク-->
     <p class="stinger"><a href="http://stinger3.com" rel="nofollow">WordPress-Theme STINGER3</a></p>
    <p class="copy">Copyright&copy;
      <?php bloginfo('name');?>
      ,
      <?php the_date('Y');?>
      All Rights Reserved.</p>
  </div>
  <!-- /#footer-in --> 
</div>
<?php wp_footer(); ?>
<!-- ページトップへ戻る -->
<div id="page-top"><a href="#wrapper">PAGE TOP ↑</a></div>

<!-- ページトップへ戻る　終わり --> 
<!---js切り替え--->
<?php if(is_mobile()) { ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/smartbase.js"></script>
<?php 
}else{
?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/base.js"></script>
<?php
}
?>
<!-- ここにsns02 削除済み -->
<?php if ( function_exists('wp_is_mobile') && wp_is_mobile() ) :?>
<?php else: ?>
<?php endif; ?>
<!-- ここまでsns02 -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.4&appId=1571767006398134";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body></html>
