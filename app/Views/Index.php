<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 col-5">
        <div class="card">
            <div class="card-header bg-success p-2 text-dark bg-opacity-50 text-white text-center">
                LOGIN
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <?php if(session()->getFlashdata('error')){?>
                        <div class="alert alert-warning">
                            <?php echo session()->getFlashdata('error')?>
                        </div>
                    <?php } ?>
                <div class="mb-3">
                    <label for="MasukkanUsername" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo session()->getFlashdata('username')?>" id="MasukkanUsername" placeholder="Masukkan Username...">
                </div>
                <div class="mb-3">
                    <label for="MasukkanPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="MasukkanPassword" placeholder="Masukkan Password...">
                </div>
                <div class="mb-3">
                    <input type="submit" name="auth" class="btn btn-primary" value="LOGIN">
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>