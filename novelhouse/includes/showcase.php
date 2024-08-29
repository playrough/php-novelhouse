<div class="showcase">
    <div class="section-padding">
        <div class="container">

            <?php if (empty($books)) { ?>

                <h3 class="section-heading">Xin lỗi bạn, chưa có tiểu thuyết cho thể loại này!</h3>

            <?php } else { ?>

                <h3 class="section-heading">
                    <?= $heading ?>
                </h3>
                <div class="row">
                    <?php if ($carousel && count($books) >= 3) : ?>
                        <div class="col col-4">
                            <?php include("showcase/carousel/carousel.php") ?>
                        </div>
                        <div class="col col-8">
                            <?php
                            $col = 'col-3';
                            include("showcase/bookshelf/bookshelf.php") ?>
                        </div>
                    <?php else : ?>
                        <div class="col col-12">
                            <?php
                            $col = 'col-2-5';
                            include("showcase/bookshelf/bookshelf.php") ?>
                        </div>
                    <?php endif ?>
                    <div class="col col-12">
                        <div class="pagination">
                        
                                <ul class="pagination-list">
                                    <!-- JAVASCRIPT INSERT -->
                                </ul>
                         
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>
    </div>
</div>

<script src="assets/js/page-navigation.js"></script>
<script>
    initializePagination(<?= $limitPage ?>);
</script>