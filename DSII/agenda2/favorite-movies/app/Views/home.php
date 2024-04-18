<?php echo view('templates/header'); ?>

<div class="container mt-5">
  <h1>Bem vindo ao Favorite Movies</h1>
  <div class="row">
    <?php foreach ($movies as $movie) {
      echo view('movie_card', ['movie' => $movie]);
    } ?>
  </div>
</div>

<?php echo view('templates/footer'); ?>