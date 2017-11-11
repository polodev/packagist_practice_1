<?php
require 'vendor/autoload.php';
require 'core/db.php';
use Illuminate\Database\Capsule\Manager as Capsule;
//order matters
Capsule::schema()->dropIfExists('post_category');
Capsule::schema()->dropIfExists('posts');
Capsule::schema()->dropIfExists('users');
Capsule::schema()->dropIfExists('categories');

