<?php //子テーマ用関数

//親skins の取得有無の設定
function include_parent_skins(){
  return true; //親skinsを含める場合はtrue、含めない場合はfalse
}

//子テーマ用のビジュアルエディタースタイルを適用
add_editor_style();

//自動改行をさせない
remove_filter('the_content', 'wpautop');
remove_filter( 'the_excerpt', 'wpautop' );

//カテゴリーページURLから「category」を削除
add_filter('user_trailingslashit', 'remcat_function');
function remcat_function($link) {
	return str_replace("/category/", "/", $link);
}
add_action('init', 'remcat_flush_rules');
function remcat_flush_rules() {
	global $wp_rewrite;
	$wp_rewrite->flush_rules();
}
add_filter('generate_rewrite_rules', 'remcat_rewrite');
function remcat_rewrite($wp_rewrite) {
	$new_rules = array('(.+)/page/(.+)/?' => 'index.php?category_name='.$wp_rewrite->preg_index(1).'&paged='.$wp_rewrite->preg_index(2));
	$wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
}

//画像を相対パスで指定
function imagepassshort($arg) {
$content = str_replace('"images/', '"' . get_bloginfo('stylesheet_directory') . '/images/', $arg);
return $content;
}
add_action('the_content', 'imagepassshort');

//カテゴリの投稿を古い順に表示する
function my_pre_get_posts($query) {
    if (is_category()) {
        $query->set('order', 'ASC');
    }
}
add_action('pre_get_posts', 'my_pre_get_posts');

//ビジュアルエディターでrel="noopener noreferrer"自動付加の解除
function tinymce_allow_unsafe_link_target_demo( $mce_init ) {
 $mce_init['allow_unsafe_link_target']=true;
 return $mce_init;
}
add_filter('tiny_mce_before_init','tinymce_allow_unsafe_link_target_demo');

//本文からnoopener noreferrerを取り除く
function remove_noopener_and_noreferrer_demo($the_content){
  $the_content = str_replace(' rel="nofollow noopener noreferrer"', ' rel="nofollow"', $the_content);
  $the_content = str_replace(' rel="noopener noreferrer"', '', $the_content);
  return $the_content;
}
add_filter('the_content', 'remove_noopener_and_noreferrer_demo', 9999);

//アーカイブをインデックスさせない
function my_add_noindex(){ 
    if (is_archive()) {
        echo '<meta name="robots" content="noindex" />';
    }
}
add_action('wp_head', 'my_add_noindex');