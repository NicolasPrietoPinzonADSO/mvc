<?php
include_once "welcomeHeader.php";
?>
<main>
    <section class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card mt-4">
                    <div class="card-header text-center">
                        <?php echo $data['welcome'] ?>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-2 d-md-flex justify-content-center align-items-center">
                            <a href="<?php echo URL ?>/login" class="btn btn-primary">Ingreso al sistema</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include_once "footer.php";
?>