<?php
if (!empty($_GET)){
    $boy = $_GET['boy'];
    $ves = $_GET['ves'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/calc.ico">
    <link rel="icon" type="./img/calc.ico" sizes="32x32" href="/img/calc.png">
    <link rel="icon" type="./img/calc.ico" sizes="16x16" href="/img/calc.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="img/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Asosiy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://akhmadov-bekmurod.netlify.app/">Biz haqimizda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="table.php">Jadvalni ko'rish</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<section class="main_page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center my-3">Parametrlarni kiriting.</h2>
                        <form action="result.php">
                            <div class="input_group mb-3">
                                <label class="mb-2" for="gender">Jinsingiz</label>
                                <select name="gender" id="gender" class="form-select" required>
                                    <option value="mail">Erkak</option>
                                    <option value="fmail">Ayol</option>
                                </select>
                            </div>
                            <div class="input_group mb-3">
                                <label class="mb-2" for="boy">Bo'yingiz (sm)</label>
                                <input type="number" id="boy" required name="boy" class="form-control">
                            </div>
                            <div class="input_group mb-3">
                                <label class="mb-2" for="ves">Og'irligingiz (kg)</label>
                                <input type="number" id="ves" required name="ves" class="form-control">
                            </div>
                            <div class="input_group mb-3">
                                <button class="btn btn-primary">Natijani ko'rish</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>