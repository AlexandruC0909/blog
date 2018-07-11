<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    <?= $title ?>
  </title>


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <link href="public/css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
    crossorigin="anonymous">

  <link rel="stylesheet" href="public/js/bootstrap.min.js">

</head>

<body>

  <?php require "signin.php" ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="index.php">Bonjour</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php if (isset($_SESSION['id']) AND isset($_SESSION['pseudo'])) : ?>
      <ul class="navbar-nav mr-auto">

      </ul>
      <ul class="navbar-nav nav navbar-right">
        <li class="nav-item active">
          <a class="nav-link" href="index.php?action=goToAdminPreview">Espace Administrateur</a>
          <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="index.php?action=logOut">Déconnexion</a>
        </li>

      </ul>

    </div>
    <?php  else:?>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

      </ul>
      <ul class="navbar-nav nav navbar-right">
        <li class="nav-item active">
          <a class="nav-link" href="#login" data-toggle="modal" data-target="#login">S'identifier</a>
        </li>
      </ul>
    </div>
    <?php endif;?>
  </nav>

  <header class="masthead" style="background-image: url('public/img/alaska.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Billet simple pour alaska</h1>
            <span class="subheading">Le blog de Jean Forteroche</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class='scrolltop'>
    <div class='scroll icon'>
      <i class="fas fa-chevron-up fa-2x arrow-up"></i>
      </i>
    </div>
  </div>

    <?= $content ?>


    <script>
      <?php if (isset($_POST['login'])) { ?>

      $(function () {
        $("#join").modal('show');
      });

      <?php } ?>
    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="public/js/login.js"></script>
    <script src="public/js/script.js"></script>
    <script src="public/js/bootstrap.min.js"></script>

</body>

</html>