<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Login</h1>
            </div>
        </div>

    <form action="<?php echo site_url('pages/save');?>" method="post">
        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Username</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="Username" placeholder="Masukkan Username....">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Password</label>
            </div>
            <div class="col-lg-6">
                <input type="password" class="form-control" name="password" placeholder="Masukkan Password....">
            </div>
        </div>

        <div>
            <div>
                <button class="btn btn-primary" type="submit">Login</button>
            </div>
        </div>
    </form>
    </div>
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>