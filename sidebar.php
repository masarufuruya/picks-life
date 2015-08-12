<div id="side">
  <div class="sidead">
<?php if(is_mobile()) { ?>
<?php } else { ?>
<?php get_template_part('ad');?>
<?php } ?>
  </div>
  <?php get_search_form(); ?>
	<div class="profile">
     	<h4 class="menu_underh2">自己紹介</h4>
        <div class="profile-content">
            <img src="http://pickslife.me/wp-content/uploads/2015/08/11802072_10153227877868248_1366826932_n.jpg" alt="profile.jpg" width="200px" style="margin-bottom:10px;"></img>
			<p style="margin-bottom:0px;">古家 大(ふるや まさる)</p>
			<p style="margin-bottom:0px;"><a href="https://www.facebook.com/masaru.furuya.1">facebookプロフィール</a></p>
			<p>
				<a href="https://twitter.com/enzerubank" class="twitter-follow-button" data-show-count="true" data-lang="ja">@enzerubankさんをフォロー</a>
			</p>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			<p>1990年生まれの埼玉出身。フロッピーディスクをギリギリ授業で使っていた世代。<p>
			<p>職業はWebエンジニア。PHPのWebアプリ開発や趣味でIPhoneアプリを作ってます。</p>
			<p>世界中回りながら、働く男になることが目標！</p>
        </div>
    </div>

  <div class="kizi02"> 
    <!--最近のエントリ-->
    <h4 class="menu_underh2">最近の投稿</h4>
    <div id="topnews">
      <div>
<?php
$args = array(
    'posts_per_page' => 5,
);
$st_query = new WP_Query($args);
?>

<?php if( $st_query->have_posts() ): ?>
    <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>
<dl><dt><span><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
        <?php if ( has_post_thumbnail() ): // サムネイルを持っているときの処理 ?>
    <?php the_post_thumbnail( 'thumb100' ); ?>
<?php else: // サムネイルを持っていないときの処理 ?>
    <img src="<?php echo get_template_directory_uri(); ?>/images/no-img.png" alt="no image" title="no image" width="100" height="100" />
        <?php endif; ?>
        </a></span></dt><dd><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>

<p><?php echo mb_substr( strip_tags( stinger_noshotcode( $post->post_content ) ), 0, 35 ) . ''; ?></p>
</dd>
<p class="clear"></p>
</dl>
    <?php endwhile; ?>
<?php else: ?>
    <p>記事はありませんでした</p>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
        <p class="motto"> <a href="<?php echo home_url(); ?>/">→もっと見る</a></p>
      </div>
    </div>
    <!--/最近のエントリ-->
    <div class="fb-page" data-href="https://www.facebook.com/pages/PicksLife/376070932550957" data-width="350" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pages/PicksLife/376070932550957"><a href="https://www.facebook.com/pages/PicksLife/376070932550957">PicksLife</a></blockquote></div></div>
    <div id="twibox">
      <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
      <?php endif; ?>
    </div>
  </div>
  <!--/kizi--> 
  <!--アドセンス-->
  <div id="ad1">
    <div style="text-align:center;">
      <?php get_template_part('scroll-ad');?>
    </div>
  </div>
</div>
<!-- /#side -->
