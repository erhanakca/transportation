<?php require 'inc/DBprovider.php';?>

<?php include 'header.php';?>

<?php  $döndür = $database->query("SELECT * FROM user_information")->fetchAll(PDO::FETCH_ASSOC);?>

<?php $getir = $database->query("SELECT * FROM admin_giris")->fetch(PDO::FETCH_ASSOC); ?>

<?php if ($getir['admin'] == $_POST['admin'] || $getir['password'] == $_POST['password']): ?>

<?php if ($döndür != null): ?>

    <div class="container mt-5">
        <div class="row row justify-content-center">
            <ul class="list-group col-sm-6 col-6 col-lg-6">
                <table class="table table-bordered border-info">
                    <thead style="color: orangered">
                    <tr>
                        <th scope="col">TARİH</th>
                        <th scope="col">İSİM</th>
                        <th scope="col">SOYİSİM</th>
                        <th scope="col">TELEFON</th>
                        <th scope="col">MAİL</th>
                    </tr>
                    </thead>

                    <?php foreach ($döndür as $item): ?>
                        <thead>
                        <tr>
                            <th><?php echo $item['date']?></th>
                            <th><?php echo $item['name']?></th>
                            <th><?php echo $item['surname']?></th>
                            <th><?php echo $item['phone']?></th>
                            <th><?php echo $item['email']?></th>
                        </tr>
                        </thead>
                    <?php endforeach;?>
                </table>
                <a class="btn btn-primary" href="db_delete.php">DELETE</a>
            </ul>
        </div>
    </div>

<?php else:?>
    <div class="container mt-5">
        <div class="row row justify-content-center">
            <div class="col-md-8">
                <h1 style="color: orangered">DATABASEDE GÖSTERİLECEK BİLGİ YOK!!!</h1>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php else: header("Location: adminkontrol.php"); ?>

<?php endif; ?>




