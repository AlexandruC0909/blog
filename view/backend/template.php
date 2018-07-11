<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8" />

  <title>
    <?= $title ?>
  </title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <link href="public/css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="index.php?action=goToAdminPreview">Espace Administrateur</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarSupportedContent"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav mr-auto">
    </ul>
    <ul class="navbar-nav nav navbar-right">
      <li class="nav-item active ">
      <a class="nav-link" href="index.php">Blog
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php?action=logOut">Déconnexion</a>
      </li>
    </ul>
  </div>
</nav>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-5"><i class="fas fa-cog "></i> Gérer votre blog </h1>

    </div>
  </div>
  <section id='main'>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group">
            <a href="index.php?action=goToAdminPreview" class="list-group-item list-group-item-action active main-color-bg "><i class="fas fa-cog fas-dashbord"></i>Tableau de Bord</a>

            <a href="index.php?action=goToAddPost" class="list-group-item list-group-item-action d-flex  align-items-center"><i class="fas fa-pencil-alt"></i>Nouveau Billet </a>

            <a href="index.php?action=adminListPosts" class="list-group-item list-group-item-action d-flex  align-items-center"><i class="fas fa-file"></i>Billets
            </a>
            <a href="index.php?action=listAllComments" class="list-group-item list-group-item-action d-flex  align-items-center"><i class="fas fa-edit"></i>Commentaires
            </a>
            <a href="index.php?action=listReportedComments" class="list-group-item list-group-item-action d-flex  align-items-center"><i class="fas fa-exclamation-triangle"></i>Commentaires Signalée
            </a>

          </div>
        </div>
        <div class="col-md-9">
          <?= $content ?>
        </div>
      </div>
    </div>
  </section>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>   

  <script src="public/js/bootstrap.min.js"></script>
  <script src="public/js/script.js"></script>
  <script src="public/js/tinymce/js/jquery.min.js"></script>
  <script src="public/js/tinymce/plugin/tinymce/tinymce.min.js"></script>
  <script src="public/js/tinymce/plugin/tinymce/init-tinymce.js"></script>
</body>

</html>