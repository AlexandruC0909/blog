<?php $title = 'Mon blog'; ?>


<?php ob_start(); ?>

<div class="card">
  <h4 class="card-header card text-center main-color-bg">
  Vue de l'Administrateur
  </h4>
  <div class="card-body">

    <div class="row">

      <?php $i=0; while($data = $nrPosts->fetch()): $i++; endwhile;  $nrPosts->closeCursor(); ?>

      <div class="col-md-4">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">No Billets</h5>

            <a href="index.php?action=adminListPosts" class="btn btn-primary main-color-bg ">
              <?=$i ; ?>
            </a>
          </div>
        </div>
      </div>

      <?php $i=0; while($data = $nrComments->fetch()): $i++; endwhile; $nrComments->closeCursor(); ?>

      <div class="col-md-4">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title ">No Commentaires</h5>

            <a href="index.php?action=listAllComments" class="btn btn-primary main-color-bg">
              <?= $i; ?>
            </a>
          </div>
        </div>
      </div>
      <?php $i=0; while($data = $nrReportedComments->fetch()): $i++; endwhile; $nrComments->closeCursor(); ?>


      <div class="col-md-4">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">No Commentaires Signalée</h5>
            <a href="index.php?action=listReportedComments" class="btn btn-primary main-color-bg">
              <?= $i ; ?>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="card second-card">
  <h4 class="card-header card text-center main-color-bg">
  Derniers Commentaires
  </h4>
  <div class="card-body latest-comments">
    <table class="table ">
      <thead>
        <tr class="">

          <th scope="col">Author</th>
          <th scope="col">Commentaire</th>
          <th scope="col">Date</th>

        </tr>
      </thead>

      <tbody> 
        <?php 
        for($i=0; $i<= 4; $i++): ($data = $comments->fetch())  ?>

        <tr>
          <td>
            <?= htmlspecialchars($data['author']) ?>
          </td>
          <td>
            <?= nl2br(htmlspecialchars($data['comment'])) ?>
          </td>
          <td>
            <?= $data['comment_date_fr'] ?>
          </td>
        </tr>
        <?php  endfor;  $comments->closeCursor();?>



      </tbody>
    </table>

  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>