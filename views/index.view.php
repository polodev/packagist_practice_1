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
          <div class="mt-5 card">
            <div class="card-header">
              <h2><?= $post->title; ?></h2>
            </div>
            <div class="card-body">
              <p><?php echo $post->content; ?></p>
            </div>
          </div>
        <?php endforeach; ?>

        
        <ul class="pagination justify-content-center mt-4">

          <li class="page-item <?= $page < 2 ? 'disabled': '' ?>">
            <a href="/?page=<?= $page - 1 ?>" class="page-link">Previous</a>
          </li>
          <?php for ($i = 1; $i <= $total_page; $i++) : ?>
            <li class="page-item <?= $page == $i ? 'active' : '' ?>">
              <a href="/?page=<?= $i ?>" class="page-link"><?= $i; ?></a>
            </li>
          <?php endfor; ?>
          <li class="page-item <?= $page == $total_page ? 'disabled' : '' ?>">
            <a href="/?page=<?= $page + 1 ?>" class="page-link">Next</a>
          </li>
        </ul>
      </div>
      <div class="col-md-4">
        
      </div>
    </div>
  </div>

</body>
</html>