<?php

include __DIR__ . "/../../database/db.php";

?>


<main class="d-flex justify-content-center align-items-center">
  <!-- containeer-cards  -->
  <div id="containerCards" class="d-flex justify-content-between align-items-start flex-wrap">
    <!-- singola card -->
    <?php foreach( $arrayMovie as $key => $el) { ?>
      <div class="cardItem text-white d-flex flex-column justify-content-center align-items-center gap-3 rounded px-2 py-3 mb-4">
        <img class="img-fluid" src="<?php echo $el->poster ?>" >
        <div class="d-flex flex-column justify-content-start align-items-center">
          <span class="movieTitle"><?php echo $el->name ?></span>
          <span><?php echo $el->year_of_release ?></span>
          <span>Directed by <?php echo "<strong>$el->director</strong>"?></span>
          <div>
            <span><strong>Genere:</strong></span>
            <?php foreach( $arrayMovie[$key]->category as $el) { ?>
              <?php echo $el->categoria ?>
            <?php } ?>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</main>