<?php
require 'vendor/autoload.php';
require 'migrate-rollback.php';
use Illuminate\Database\Capsule\Manager;
Manager::schema()->create('users', function ($table) {
    $table->increments('id');
    $table->string('name');
    $table->string('email')->unique();
    $table->string('password');
    $table->timestamps();
});
Manager::schema()->create('posts', function ($table) {
  $table->increments('id');
  $table->integer('user_id')->unsigned();
  $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
  $table->string('title');
  $table->text('content');
  $table->text('excerpt');
  $table->timestamps();
});
Manager::schema()->create('categories', function ($table) {
  $table->increments('id');
  $table->string('name');
  $table->timestamps();
});

Manager::schema()->create('post_category', function($table) {
  $table->integer('post_id')->unsigned();
  $table->integer('category_id')->unsigned();
  $table->primary(['post_id', 'category_id']);
  $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
  $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
});




