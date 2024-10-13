<?php

// ウィジェット
function theme_slug_widgets_init() {
  register_sidebar( array(
    'name'  =>  'サイドバー', //ウィジェットの名前
    'id'    =>  'sidebar',    //ウィジェットにつけるid名
  ));
}
add_action('widgets_init', 'theme_slug_widgets_init');

?>