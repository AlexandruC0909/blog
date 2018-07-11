<?php $title = 'Mon blog'; ?>


<?php ob_start(); ?>
    

<div class="table-responsive">
<table class="table">
  <thead>
    <tr class="main-color-bg">
      <th scope="col" class="comment-author">Author</th>
      <th scope="col">Content</th>
      <th scope="col" class="comment-date">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>
  <?php while ($data = $comments->fetch()):  { ?>
          <tr>
            
            <td class="comment-author"><?= htmlspecialchars($data['author']) ?></td>
            <td><?= nl2br(htmlspecialchars($data['comment'])) ?></td>
            <td class="comment-date"><?= $data['comment_date_fr'] ?></td>
            <td>    
              <form action="index.php?action=delComment&amp;id=<?= $data['id'] ?>" method="post" >
              <input type='submit' value='Supprimer' class="main-color-bg btn btn-primary delete-button" /></td>
              
            </form>
          </tr>
          <?php  }endwhile;  $comments->closeCursor() ;?>
       
       
        
  </tbody>
</table>
</div>

    <?php $content = ob_get_clean(); require('template.php'); ?>
