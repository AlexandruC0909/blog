<?php $title = 'Mon blog'; ?>
<?php ob_start(); ?>



<form action="index.php?action=modPost&amp;id=<?= $post['id'] ?>" method="post">

<div>

    <label for="title">Titre</label><br />

    <input type="text" id="title" name="title" placeholder="title" value="<?= nl2br($post['title']) ?>"/>

</div>

<div>

    <label for="content">Contenu</label><br />

    <textarea id="content" name="content" class ="tinymce"><?= nl2br($post['content']) ?></textarea>

</div>

<div>

    <button type="submit" class="btn btn-primary main-color-bg">Modifier</button>
</form>







<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>