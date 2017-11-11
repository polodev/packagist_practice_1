<?php
$posts = Post::paginate(3);
require 'views/index.view.php';