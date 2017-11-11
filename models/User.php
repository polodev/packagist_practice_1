<?php
use Illuminate\Database\Eloquent\Model;
class User extends Model {
  /**
   * Fields that can be mass assigned.
   *
   * @var array
   */
  protected $guarded = [];
  protected $table = 'users';
  public function posts()
  {
    return $this->hasMany(Post::class);
  }
}