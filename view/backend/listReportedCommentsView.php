<?php $title = 'Mon blog'; ?>


<?php ob_start(); ?>
<table class="table">
  <thead>
    <tr class="main-color-bg">
      
      <th scope="col" class="comment-author">Comment Author</th>
      <th scope="col">Content</th>
      <th scope="col" class="comment-date">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody> 
 <?php
 while ($data = $reportedComments->fetch())
     {
         
     ?>
    <tr>
      
      <td class="comment-author"><?= htmlspecialchars($data['author']) ?></td>
      <td><?= nl2br(htmlspecialchars($data['comment'])) ?></td>
      <td class="comment-date"><?= $data['comment_date_fr'] ?></td>
       <td class=>  
        <form action="index.php?action=removeReport&amp;id=<?= $data['id'] ?>" method="post" >
        <input type='submit' value='Remove Report' class="btn btn-primary main-color-bg" />
        <div class="post-action-button-2">
         <form action="index.php?action=delReportedComment&amp;id=<?= $data['id'] ?>" method="post" >
        <input type='submit' value='Supprimer' class="btn btn-primary main-color-bg" /></form>
        </div>
        </td>
    </tr>
    <?php
        }
        $reportedComments->closeCursor();
        ?>
  </tbody>
</table>


    <?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>