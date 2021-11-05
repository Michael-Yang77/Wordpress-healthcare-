<!-- sidebar -->
<div id="sidebar" role="complementary">
  <?php get_template_part('button-slide-sidebar-close');//スライドサイドバー用の閉じるボタン ?>
  <?php get_template_part('ad-sidebar');//サイドバートップ広告の呼び出し ?>

  <div id="sidebar-widget">
  <!-- ウイジェット -->
  <?php if ( is_active_sidebar( 'sidebar-1' ) ) :
    dynamic_sidebar( 'sidebar-1' );
  endif;?>
  </div>

<!-- サイドバーにカテゴリー毎に投稿記事一覧を表示させる -->
	<?php
$categories = get_categories();
foreach($categories as $category) :
?>
<div class="category_ttl"><?php echo $category->cat_name; ?></div>
<ul>
<?php
query_posts('cat='.$category->cat_ID);
if (have_posts()) : while (have_posts()) : the_post();
?>
<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
<?php endwhile; endif; ?>
</ul>
<?php endforeach; ?>
	
  <?php if (is_active_sidebar('sidebar-scroll') ): ?>
  <!--スクロール追従領域-->
  <div id="sidebar-scroll">
    <?php dynamic_sidebar('sidebar-scroll');?>
  </div>
  <?php endif; ?>

</div><!-- /#sidebar -->