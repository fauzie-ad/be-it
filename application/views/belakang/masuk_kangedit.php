<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul ?></title>

    <!-- Keperluan CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/all.css') ?>">

</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-md-5">
                <div class="card-header text-center">
                    Masuk Untuk Kang Edit
                </div>
                <div class="card-header">
                    <?= form_open('otentikasi') ?>
                    <?php if($this->session->flashdata('pesan') !== null) : ?>
                        <div class="alert alert-danger">
                            <?= $this->session->flashdata('pesan') ?>
                        </div>
                    <?php endif ?>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" id="" class="form-control" placeholder="" aria-describedby="inputGroupPrepend" required>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="inputGroupPrepend" required>
                    </div>
                    <button class="btn btn-success">Masuk</button>
                    <?= form_close('') ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Keperluan JS -->
    <script src="<?= base_url('assets/js/bootstrap.js') ?>"></script>
    <script src="<?= base_url('assets/js/all.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery-3.5.0.slim.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/popper.js') ?>"></script>
</body>

</html>