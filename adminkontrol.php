<?php include 'header.php';?>

<?php session_start(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-4 mx-auto text-justify mt-2"">
        <div class="mb-3">
            <form method="POST" action="db_detail.php">
                <div class="mb-4 pt-3">
                    <input type="text" name="admin" class="form-control" placeholder="Kullanıcı Adı">
                </div>
                <div class="mb-4">
                    <input type="password" name="password" class="form-control" placeholder="Şifre">
                </div>
                <button type="submit" class="btn btn-warning col-md-5 mx-auto text-justify mt-2 ">Giriş Yap</button>
            </form>
        </div>
    </div>
</div>
</div>







