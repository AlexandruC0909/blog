<?php $title = 'Mon blog'; ob_start(); ?>



<div class="container">
<?php while ($data = $posts->fetch()):?>
      <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="index.php?action=post&amp;id=<?= $data['id'] ?>">
              <h2 class="post-title ">
                <?= htmlspecialchars($data['title']) ?>
              </h2>
              <h3 class="post-subtitle block-with-text">
                <?= nl2br($data['content']) ?>
              </h3>
            </a>
            <p class="post-meta">le <?= $data['creation_date_fr'] ?></p>
          </div>
            <hr>
        </div>
      </div>
<?php endwhile;     $posts->closeCursor();?>
</div>

<?php $content = ob_get_clean(); require 'template.php' ; ?>