<?php $firstThreeBook = array_slice($books, 0, 3); ?>

<div class="showcase-carousel">
    <div class="carousel-pictures">

        <?php foreach ($firstThreeBook as $index => $book) :
            include("picture.php");
        endforeach ?>

    </div>
    <div class="carousel-descs">

        <?php foreach ($firstThreeBook as $index => $book) :
            include("desc.php");
        endforeach ?>

    </div>
</div>

<script src="assets/js/carousel.js"></script>