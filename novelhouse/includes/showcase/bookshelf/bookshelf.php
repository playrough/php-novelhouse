<div class="showcase-bookshelf">
    <div class="row">

        <?php foreach ($books as $book) : ?>
            <div class="col <?= $col ?>">

                <?php include('book.php') ?>

            </div>
        <?php endforeach ?>

    </div>
</div>