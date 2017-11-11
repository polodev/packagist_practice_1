<?php
$page = 1;
if (isset($_GET['page']) ) {
  $page = $_GET['page'];
}
$post_per_page = 3;
$total_posts = Post::count();
$total_page = ceil( $total_posts / $post_per_page );
$offset = $page * $post_per_page - $post_per_page;
// use Illuminate\Database\Capsule\Manager as Capsule;
// $posts = Capsule::table('posts')->limit(3)->offset(0)->get();
$posts = Post::limit($post_per_page)->offset($offset)->get();
// var_dump(Capsule::getQueryLog());
// die();

require 'views/index.view.php';