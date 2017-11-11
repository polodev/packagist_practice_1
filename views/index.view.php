<?php 
var_dump($posts);
die();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Posts</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css"/>
</head>
<body class="bg-info">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <?php foreach($posts as $post): ?>
          <div class="card">
            <div class="card-header">
              <h2><?= $post->title; ?></h2>
            </div>
            <div class="card-body">
              <p><?php echo $post->content; ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="col-md-4">
        
      </div>
    </div>
  </div>

</body>
</html>