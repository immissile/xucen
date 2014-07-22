<?php
  /**
   * Functions
   *
   * Author: missile
   */

   /**
    * 获取title
    */
  function missile_title(){
    if(is_home()){
      bloginfo('name');
      echo ' - ';
      bloginfo('description');
    }elseif(is_category()){
      single_post_title();
      echo ' - ';
      bloginfo('name');
    }elseif(is_single() || is_page()){
      single_post_title();
    }elseif(is_search()){
      echo '搜索结果';
      echo ' - ';
      bloginfo('name');
    }else{
      wp_title(true);
    }
   }

   // 输出js
   function missile_js($name){
    echo bloginfo('stylesheet_directory') . '/js/' . $name . '.js';
   }

   // 输出css
   function missile_css($name){
    echo bloginfo('stylesheet_directory') . '/' . $name . '.css';
   }

   // 输出img
   function missile_img($name){
    echo bloginfo('stylesheet_directory') . '/images/' . $name;
   }

   // 配置菜单
   function missile_menu(){
    $args = array(
      'theme_location' => 'header-menu',
      //'theme_location' => 'primary',
      'menu' => '',
      'container' => 'div',
      'container_class' => 'menu-{menu slug}-container',
      'container_id' => '',
      'menu_class' => 'menu',
      'menu_id' => '',
      'echo' => true,
      'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      'depth' => 0,
      'walker' => '',
      'sort_column' => 'menu_order'
    );
    return wp_nav_menu($args);
   }
?>
