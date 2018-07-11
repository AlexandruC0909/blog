<?php $title = 'Mon blog'; ?>


<?php ob_start(); ?>


<?php while ($data = $posts->fetch()): ?>
<div class="col-lg-12 col-md-12 mx-auto">
    <div class="row ">
        <div class="col-lg-10 col-md-10 mx-auto">
            <h3>
                <a class="link-title" href="index.php?action=adminPost&amp;id=<?= $data['id'] ?>">
                    <?= htmlspecialchars($data['title']) ?>
                </a>
                

            </h3>
            <p class="date-format">
                <em>le
                    <?= $data['creation_date_fr'] ?>
                </em>
            </p>
            <div class="block-with-text-admin">

                <?= nl2br($data['content']) ?>

            </div>
        </div>
        <div class="col-lg-2 col-md-22 mx-auto post-action">
            <div class="post-buttons post-action-buttons">
                <form action="index.php?action=delPost&amp;id=<?= $data['id'] ?>" method="post">
                    <input type='submit' value='Supprimer' class="btn btn-primary main-color-bg" />
                </form>
            </div>
            <div class="post-buttons post-action-button-2">
                <form action="index.php?action=goTomodPost&amp;id=<?= $data['id'] ?>" method="post">
                    <input type='submit' value='Modifier' class="btn btn-primary main-color-bg" />
                </form>
            </div>
        </div>
    </div>
    <hr>
</div>
<?php endwhile; $posts->closeCursor();  ?>
</div>

        


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>