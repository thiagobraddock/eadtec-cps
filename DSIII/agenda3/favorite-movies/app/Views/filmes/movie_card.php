<div class="col-md-4 mb-3">
  <div class="card">
    <img src="<?= $movie['imageUrl']; ?>" class="card-img-top" alt="<?= $movie['movieTitle']; ?>">
    <div class="card-body">
      <h5 class="card-title"><?= $movie['movieTitle']; ?></h5>
      <p class="card-text">
        Ano: <?= $movie['releaseYear']; ?><br>
        Categoria(s): <?= implode(', ', $movie['categories']); ?><br>
        Avaliação: <?= $movie['rating']; ?>/5
      </p>
    </div>
  </div>
</div>