<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loginpage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="img/clock.png"alt="">
                <div class="text">
                    <b class="text-1 poppins">Mencatat kehadiran siswa yang <br>
                        terlambat menjadi lebih mudah dengan LateTrack. </b>
                </div>
            </div>
        </div>
        <div class="forms">
            <div class="form-content row">
                <div class="lg-form col-md-6 col-lg-6">
                    <div class="title">Login</div>
                    <h3 class="hello">Selamat datang kembali!</h3>
                    <p class="desc">Silakan masuk untuk mengakses akun Anda.</p>
                    <form action="#">
                        <div class="input-boxs">
                            <div class="wave-group">
                                <input required="" type="text" class="inpute" name="email">
                                <span class="bar"></span>
                                <label class="labeltest">
                                    <span class="label-char" style="--index: 0">E</span>
                                    <span class="label-char" style="--index: 1">m</span>
                                    <span class="label-char" style="--index: 2">a</span>
                                    <span class="label-char" style="--index: 3">i</span>
                                    <span class="label-char" style="--index: 4">l</span>
                                </label>
                            </div>
                            <div class="wave-group2">
                                <input required="" type="password" class="inpute" name="password">
                                <span class="bar"></span>
                                <label class="labeltest">
                                    <span class="label-char" style="--index: 0">P</span>
                                    <span class="label-char" style="--index: 1">a</span>
                                    <span class="label-char" style="--index: 2">s</span>
                                    <span class="label-char" style="--index: 3">s</span>
                                    <span class="label-char" style="--index: 4">w</span>
                                    <span class="label-char" style="--index: 5">o</span>
                                    <span class="label-char" style="--index: 6">r</span>
                                    <span class="label-char" style="--index: 7">d</span>
                            </div>
                            <div class="text"><a href="#">Forgot password?</a></div>
                            <div class="btn input-box">
                                <input type="submit" onclick="window.location.href='landingpage.php'" value="Login">
                            </div>
                            <div class="text reg-txt">Belum punya akun? <label class="llabel" for="flip">Daftar
                                    disini!</label></div>
                        </div>
                    </form>
                </div>
                <div class="reg-form col-lg-6 col-md-6">
                    <div class="title">Register</div>
                    <h3 class="hello"> Selamat datang!</h3>
                    <p class="desc">Silakan daftar untuk membuat akun baru.</p>
                    <form action="#">
                        <div class="input-boxs">
                            <div class="wave-group">
                                <input required="" type="text" class="inpute" name="username">
                                <span class="bar"></span>
                                <label class="labeltest">
                                    <span class="label-char" style="--index: 0">U</span>
                                    <span class="label-char" style="--index: 1">s</span>
                                    <span class="label-char" style="--index: 2">e</span>
                                    <span class="label-char" style="--index: 3">r</span>
                                    <span class="label-char" style="--index: 4">n</span>
                                    <span class="label-char" style="--index: 5">a</span>
                                    <span class="label-char" style="--index: 6">m</span>
                                    <span class="label-char" style="--index: 7">e</span>
                                </label>
                            </div>
                            <div class="wave-group">
                                <input required="" type="text" class="inpute" name="email">
                                <span class="bar"></span>
                                <label class="labeltest">
                                    <span class="label-char" style="--index: 0">E</span>
                                    <span class="label-char" style="--index: 1">m</span>
                                    <span class="label-char" style="--index: 2">a</span>
                                    <span class="label-char" style="--index: 3">i</span>
                                    <span class="label-char" style="--index: 4">l</span>
                                </label>
                            </div>
                            <div class="wave-group">
                                <input required="" type="password" class="inpute" name="password">
                                <span class="bar"></span>
                                <label class="labeltest">
                                    <span class="label-char" style="--index: 0">P</span>
                                    <span class="label-char" style="--index: 1">a</span>
                                    <span class="label-char" style="--index: 2">s</span>
                                    <span class="label-char" style="--index: 3">s</span>
                                    <span class="label-char" style="--index: 4">w</span>
                                    <span class="label-char" style="--index: 5">o</span>
                                    <span class="label-char" style="--index: 6">r</span>
                                    <span class="label-char" style="--index: 7">d</span>
                                </label>
                            </div>
                            <div class="btn input-box">
                                <input type="submit" onclick="window.location.href='landingpage.php'" value="Register">
                            </div>
                            <div class="text reg-txt">Sudah punya akun? <label class="llabel" for="flip">Login
                                    Sekarang</label></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>