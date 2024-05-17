<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Input</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="expand">
            <div class="d-flex align-items-center justify-content-start"
                style="height: 50px; justify-content: center; background-color: #3B84A3">
                <button class="toggle-btn" type="button">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">TimelyTrace</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        
                        <i class="fa-solid fa-house"></i>
                        <span style="font-weight: 600;">Dasbor</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <span style="font-weight: 600;">Input</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-clipboard-list"></i>
                        <span style="font-weight: 600;">Catatan</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-gear"></i>
                        <span style="font-weight: 600;">Setting</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span style="font-weight: 600;">Logout</span>
                </a>
            </div>
        </aside>

        <div class="main" style="background-color: #EEEEEE">
            <div class="nullbar"></div>
            <h4 class="ms-4 mt-3 mb-4">Data Siswa Terlambat</h4>
            <div class="container">
                <div class="upper-line"
                    style="width: 100%; height: 10px; background-color:#AAD7D9; border-radius: 10px 10px 0 0;"></div>
                <table class="table table-bordered m-2 " style="width: 98%;">
                    <tr class="text-center">
                        <th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>no Absen</th>
                        <th>Tanggal Terlambat</th>
                        <th>Alasan</th>
                        <th colspan="2">Action</th>
                    </tr>
                    <tr>
                        <th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>no Absen</th>
                        <th>Tanggal Terlambat</th>
                        <th>Alasan</th>
                        <td class="text-end" style="border-right: none; width: 92px"><a href="#" class="btn btn-warning">Edit<i class="bi bi-pencil-square"></i></a></td>
                        <td style="border-left: none"><a href="#" class="btn btn-danger">Hapus<i class="bi bi-trash-fill"></i></a></td>
                    </tr>
                </table>

                <?php
                include "koneksi.php";
                $query="SELECT * FROM tb_input";
                $no=1;
                $jum=mysqli_num_rows($hasil);
                echo "Banyak data : ".$jum."<br>";

                while ($data=mysqli_num_rows($hasil)) {
                ?>
                    <tr>
                    <td><?php echo $data['nis'];?></td>
                    <td><?php echo $data['nama'];?></td>
                    <td><?php echo $data['absen'];?></td>
                    <td><?php echo $data['tanggal'];?></td>
                    <td><a href="detail.php?nis=<?php echo $data['nis']; ?>">Detail</a></td>
                    <td><a href="form_update.php?nis=<?php echo $data['nis']; ?>">Detail</a></td>
                    <td><a href="delete.php?nis=<?php echo $data['nis']; ?>"onclick="return confirm('apakah anda yakin?')">Detail</a></td>
                </tr>
                <?php
                }
                ?>
                <!--
                <form action=" #" method="post" class="sidebar-form">
                                <p class="m-3" style="font-weight: 600; color: #635151">Input Daftar Siswa Terlambat</p>
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-4 col-form-label">Nama Siswa</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            style="background-color: #EEEEEE;" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kelas" class="col-sm-4 col-form-label">Kelas</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="kelas" name="kelas"
                                            style="background-color: #EEEEEE;">
                                            <option value="X RPL A">X RPL A</option>
                                            <option value="X RPL B">X RPL B</option>
                                            <option value="X RPL C">X RPL C</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="absen" class="col-sm-4 col-form-label">No Absen</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="absen" name="absen"
                                            style="background-color: #EEEEEE;">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tanggal" class="col-sm-4 col-form-label">Tanggal keterlambatan</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="tanggal" name="tanggal"
                                            style="background-color: #EEEEEE;" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alasan" class="col-sm-4 col-form-label">Alasan</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" id="alasan" name="alasan"
                                            style="background-color: #EEEEEE;"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-8 offset-sm-10">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                                </form>
            </div>-->
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
        <script>
            const hamBurger = document.querySelector(".toggle-btn");

            hamBurger.addEventListener("click", function () {
                document.querySelector("#sidebar").classList.toggle("expand");
            });
        </script>

</body>

</html>