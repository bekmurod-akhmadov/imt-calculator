<?php
session_start();
if (!empty($_GET)){
    $boy = $_GET['boy'] ;
    $gender = $_GET['gender'];
    $boyOfMetr = $boy / 100;
    $ves = $_GET['ves'];
    $res = round($ves / ($boyOfMetr * $boyOfMetr) ,1);
    $new_res = '';
    $m = 0;
    if ($gender === 'fmail'){
        if ($res < 17){
            $ostatka = 18.6 - $res;
            $m = round($ostatka * $boyOfMetr * $boyOfMetr , 1);
            $new_res = "<div class='alert lack_weight'>Haddan tashqari ozg'inlik!<br><span style='color:#e20505;'>Normal holat uchun $m kg vazn olishingiz kerak</span></div>";
        }else if($res >= 17 && $res <= 18.5){
            $ostatka = 18.6 - $res;
            $m = round($ostatka * $boyOfMetr * $boyOfMetr , 1);
            $new_res = "<div class='alert average'>O'rtacha darajadagi ozg'inlik!<br><span style='color:#e20505;'>Normal holat uchun $m kg vazn olishingiz kerak</span></div>";
        }else if($res >= 18.6 && $res <= 24.9){
            $new_res = "<div class='alert ideal'>Ideal holatdagi vazn!</div>";
        }else if ($res >= 25 && $res <= 29.9){
            $ostatka = $res - 24.9;
            $m = round($ostatka * $boyOfMetr * $boyOfMetr , 1);
            $new_res = "<div class='alert level_weight_0'>Ortiqcha vazn!<br><span class='info' style='color:#e20505;'>Normal holat uchun $m kg ozishingiz kerak!</span></div>";
        }else if ($res >= 30 && $res <= 34.9){
            $ostatka = $res - 24.9;
            $m = round($ostatka * $boyOfMetr * $boyOfMetr , 1);
            $new_res = "<div class='alert level_weight_1'>1-darajali semizlik!<br><span class='info' style='color:#e20505;'>Normal holat uchun $m kg ozishingiz kerak!</span></div>";
        }else if ($res >= 35 && $res <= 39.9){
            $ostatka = $res - 24.9;
            $m = round($ostatka * $boyOfMetr * $boyOfMetr , 1);
            $new_res = "<div class='alert level_weight_2'>2-darajali semizlik!<br><span class='info' style='color:#yellow;'>Normal holat uchun $m kg ozishingiz kerak!</span></div>";
        }else if ($res >= 40){
            $ostatka = $res - 24.9;
            $m = round($ostatka * $boyOfMetr * $boyOfMetr , 1);
            $new_res = "<div class='alert level_weight_3'>3-darajali semizlik!<br><span class='info' style='color:#e20505;'>Normal holat uchun $m kg ozishingiz kerak!</span></div>";
        }else{
            $new_res = "<div class='alert alert-secondary'>Bunday kategoriya mavjud emas</div>";
        }
    }else{

        if ($res < 17){
            $ostatka = 18.6 - $res;
            $m = round($ostatka * $boyOfMetr * $boyOfMetr , 1);
            $new_res = "<div class='alert lack_weight'>Haddan tashqari ozg'inlik!<br><span style='color:#e20505;'>Normal holat uchun $m kg vazn olishingiz kerak</span></div>";
        }else if($res >= 17 && $res <= 18.5){
            $ostatka = 18.6 - $res;
            $m = round($ostatka * $boyOfMetr * $boyOfMetr , 1);
            $new_res = "<div class='alert average'>O'rtacha darajadagi ozg'inlik!<br><span style='color:#e20505;'>Normal holat uchun $m kg vazn olishingiz kerak</span></div>";
        }else if($res >= 18.6 && $res <= 24.9){
            $new_res = "<div class='alert ideal'>Ideal holatdagi vazn!</div>";
        }else if ($res >= 25 && $res <= 29.9){
            $ostatka = $res - 24.9;
            $m = round($ostatka * $boyOfMetr * $boyOfMetr , 1);
            $new_res = "<div class='alert level_weight_0'>Ortiqcha vazn!<br><span class='info' style='color:#e20505;'>Normal holat uchun $m kg ozishingiz kerak!</span></div>";
        }else if ($res >= 30 && $res <= 34.9){
            $ostatka = $res - 24.9;
            $m = round($ostatka * $boyOfMetr * $boyOfMetr , 1);
            $new_res = "<div class='alert level_weight_1'>1-darajali semizlik!<br><span class='info' style='color:#e20505;'>Normal holat uchun $m kg ozishingiz kerak!</span></div>";
        }else if ($res >= 35 && $res <= 39.9){
            $ostatka = $res - 24.9;
            $m = round($ostatka * $boyOfMetr * $boyOfMetr , 1);
            $new_res = "<div class='alert level_weight_2'>2-darajali semizlik!<br><span class='info' style='color:#e20505;'>Normal holat uchun $m kg ozishingiz kerak!</span></div>";
        }else if ($res >= 40){
            $ostatka = $res - 24.9;
            $m = round($ostatka * $boyOfMetr * $boyOfMetr , 1);
            $new_res = "<div class='alert level_weight_3'>3-darajali semizlik!<br><span class='info' style='color:#e20505;'>Normal holat uchun $m kg ozishingiz kerak!</span></div>";
        }else{
            $new_res = "<div class='alert alert-secondary'>Bunday kategoriya mavjud emas</div>";
        }
    }


}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                        <h2 class="text-center my-3">Sizning IMT bo'yicha natijangiz.</h2>
                        <form action="">
                            <div class="input_group mb-3">
                                <label class="mb-2" for="boy">Bo'yingiz (sm)</label>
                                <input type="number" id="boy" name="boy" class="form-control" value="<?=!empty($boy) ? $boy : ''?>" readonly>
                            </div>
                            <div class="input_group mb-3">
                                <label class="mb-2" for="ves">Og'irligingiz (kg)</label>
                                <input type="number" id="ves" name="ves" class="form-control" value="<?=!empty($ves) ? $ves : ''?>" readonly>
                            </div>
                            <div class="input_group mb-3">
                                <?=$new_res?>
                            </div>
                            <div class="input_group mb-3">
                                <a href="index.php" class="btn btn-secondary">Qayta hisblash</a>
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