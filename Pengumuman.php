<?php
    require_once("content.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pengu;?></title>
    <link rel="icon" href="images/<?=$gambar[0];?>">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="images/<?= $gambar[1];?>" alt="">
        </div>
        <div class="navbar">
            <ul>
                <li><a href="index.php"><?= $nav[0];?></a></li>
                <li><a href="#"><?= $nav[1];?> <i class="fa-solid fa-angles-right"></i></a>
                    <ul>
                        <li><a href="#"><?= $ul[0];?> <i class="fa-solid fa-angles-right"></i></a>
                            <ul>
                                <li><a href="DataFisikSekolah.php"><?= $profil[0];?></a></li>
                                <li><a href="VisiDanMisi.php"><?= $profil[1];?></a></li>
                                <li><a href="SejarahPendidikan.php"><?= $profil[2];?></a></li>
                                <li><a href="StrukturOrganisasi.php"><?= $profil[3];?></a></li>
                            </ul>
                        </li>
                        <li><a href="#"><?= $ul[1];?> <i class="fa-solid fa-angles-right"></i></a>
                            <ul>
                                <li><a href="Perpustakaan.php"><?= $fasilitasa[0];?></a></li>
                                <li><a href="IPA.php"><?= $fasilitasa[1];?></a></li>
                                <li><a href="KOMPUTER.php"><?= $fasilitasa[2];?></a></li>
                                <li><a href="BK.php"><?= $fasilitasa[3];?></a></li>
                            </ul>
                        </li>
                        <li><a href="#"><?= $ul[2];?> <i class="fa-solid fa-angles-right"></i></a>
                            <ul>
                                <li><a href="Pramuka.php"><?= $ekstrakulikuler[0];?></a></li>
                                <li><a href="Karate.php"><?= $ekstrakulikuler[1];?></a></li>
                                <li><a href="Robotika.php"><?= $ekstrakulikuler[2];?></a></li>
                                <li><a href="Dance.php"><?= $ekstrakulikuler[3];?></a></li>
                                <li><a href="TataBoga.php"><?= $ekstrakulikuler[4];?></a></li>
                                <li><a href="SepakBola.php"><?= $ekstrakulikuler[5];?></a></li>
                                <li><a href="Futsal.php"><?= $ekstrakulikuler[6];?></a></li>
                                <li><a href="Basket.php"><?= $ekstrakulikuler[7];?></a></li>
                                <li><a href="Sablon.php"><?= $ekstrakulikuler[8];?></a></li>
                                <li><a href="Renang.php"><?= $ekstrakulikuler[9];?></a></li>
                                <li><a href="StoryTelling.php"><?= $ekstrakulikuler[10];?></a></li>
                                <li><a href="Musik.php"><?= $ekstrakulikuler[11];?></a></li>
                                <li><a href="BTQ.php"><?= $ekstrakulikuler[12];?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#"><?= $nav[2];?> <i class="fa-solid fa-angles-right"></i></a>
                    <ul>
                        <li><a href="Berita.php"><?= $informasi[0];?></a></li>
                        <li><a href="Pengumuman.php"><?= $informasi[1];?></a></li>
                    </ul>
                </li>
                <li><a href="Prestasi.php"><?= $nav[3];?></a></li>
                <li><a href="#"><?= $nav[4];?> <i class="fa-solid fa-angles-right"></i></a>
                    <ul class="bar">
                        <li><a href="Guru.php"><?= $akademik[0];?></a></li>
                        <li><a href="Karyawan.php"><?= $akademik[1];?></a></li>
                    </ul>
                </li>
                <li><a href="Galeri.php"><?= $nav[6];?></a></li>
                <li><a href="Kalender.php"><?= $nav[5];?></a></li>
                <li><a href="Kontak.php"><?= $nav[9];?></a></li>
            </ul>
        </div>
        <div class="nav">
            <div class="sum">
                <details>
                    <summary>
                    <div class="logo">
                        <img src="images/<?= $pgri?>" alt="">
                        <h3><?= $judul[0];?></h3>
                    </div>
                    <i class="fa-solid fa-bars"></i>
                </summary>
                    <ul>
                    <li><a href="index.php"><?= $nav[0];?></a></li>
                    <li><a href="#"><?= $nav[1];?> <i class="fa-solid fa-angles-right"></i></a>
                        <ul>
                            <li><a href="#"><?= $ul[0];?> <i class="fa-solid fa-angles-right"></i></a>
                                <ul>
                                    <li><a href="DataFisikSekolah.php"><?= $profil[0];?></a></li>
                                    <li><a href="VisiDanMisi.php"><?= $profil[1];?></a></li>
                                    <li><a href="SejarahPendidikan.php"><?= $profil[2];?></a></li>
                                    <li><a href="StrukturOrganisasi.php"><?= $profil[3];?></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><?= $ul[1];?> <i class="fa-solid fa-angles-right"></i></a>
                                <ul>
                                    <li><a href="Perpustakaan.php"><?= $fasilitasa[0];?></a></li>
                                    <li><a href="IPA.php"><?= $fasilitasa[1];?></a></li>
                                    <li><a href="KOMPUTER.php"><?= $fasilitasa[2];?></a></li>
                                    <li><a href="BK.php"><?= $fasilitasa[3];?></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><?= $ul[2];?> <i class="fa-solid fa-angles-right"></i></a>
                                <ul>
                                    <li><a href="Pramuka.php"><?= $ekstrakulikuler[0];?></a></li>
                                    <li><a href="Karate.php"><?= $ekstrakulikuler[1];?></a></li>
                                    <li><a href="Robotika.php"><?= $ekstrakulikuler[2];?></a></li>
                                    <li><a href="Dance.php"><?= $ekstrakulikuler[3];?></a></li>
                                    <li><a href="TataBoga.php"><?= $ekstrakulikuler[4];?></a></li>
                                    <li><a href="SepakBola.php"><?= $ekstrakulikuler[5];?></a></li>
                                    <li><a href="Futsal.php"><?= $ekstrakulikuler[6];?></a></li>
                                    <li><a href="Basket.php"><?= $ekstrakulikuler[7];?></a></li>
                                    <li><a href="Sablon.php"><?= $ekstrakulikuler[8];?></a></li>
                                    <li><a href="Renang.php"><?= $ekstrakulikuler[9];?></a></li>
                                    <li><a href="StoryTelling.php"><?= $ekstrakulikuler[10];?></a></li>
                                    <li><a href="Musik.php"><?= $ekstrakulikuler[11];?></a></li>
                                    <li><a href="BTQ.php"><?= $ekstrakulikuler[12];?></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><?= $nav[2];?> <i class="fa-solid fa-angles-right"></i></a>
                        <ul>
                            <li><a href="Berita.php"><?= $informasi[0];?></a></li>
                            <li><a href="Pengumuman.php"><?= $informasi[1];?></a></li>
                        </ul>
                    </li>
                    <li><a href="Prestasi.php"><?= $nav[3];?></a></li>
                    <li><a href="#"><?= $nav[4];?> <i class="fa-solid fa-angles-right"></i></a>
                        <ul class="bar">
                            <li><a href="Guru.php"><?= $akademik[0];?></a></li>
                            <li><a href="Karyawan.php"><?= $akademik[1];?></a></li>
                        </ul>
                    </li>
                    <li><a href="Galeri.php"><?= $nav[6];?></a></li>
                    <li><a href="Kalender.php"><?= $nav[5];?></a></li>
                    <li><a href="Kontak.php"><?= $nav[9];?></a></li>
                </ul>
                </details>
            </div>
        </div>
        <div class="main">
            <div class="main-kiri">
                <div class="main-kiri-1">
                    <h3><?= $subjudul[0];?></h3>
                    <img src="images/<?= $gambar[2];?>" alt="">
                </div>
                <div class="main-kiri-2">
                    <h3><?= $subjudul[1];?></h3>
                    <marquee scrollamount="3" direction="up"><strong><p><?= $berita[0];?></p></strong></marquee>
                </div>
                <div class="main-kiri-3">
                    <h3><?= $subjudul[2];?></h3>
                    <h4><?= $angka[0];?></h4>
                </div>
            </div>
            <div class="main-tengah">
                <div class="main-tengah-1">
                    <img src="images/<?= $gambar[6];?>" alt="">
                </div>
                <div class="main-tengah-2">
                    <h3><?= $pengumuman[0];?></h3>
                    <small><?= $waktu[0]?></small>
                    <div class="inline">
                        <img src="images/<?= $pengugm[0];?>" alt="">
                        <p><?= $pengumumanisi[0];?></p>
                    </div>
                </div>
                <div class="main-tengah-3">
                <h3><?= $pengumuman[1];?></h3>
                <small><?= $waktu[0]?></small>
                    <div class="inline">
                        <img src="images/<?= $pengugm[1];?>" alt="">
                        <p><?= $pengumumanisi[1];?></p>
                    </div>
                </div>
                <div class="main-tengah-4">
                <h3><?= $pengumuman[2];?></h3>
                <small><?= $waktu[0]?></small>
                    <div class="inline">
                        <img src="images/<?= $pengugm[2];?>" alt="">
                        <p><?= $pengumumanisi[2];?></p>
                    </div>
                </div>
                <div class="main-tengah-5">
                <h3><?= $pengumuman[3];?></h3>
                <small><?= $waktu[0]?></small>
                    <div class="inline">
                        <img src="images/<?= $pengugm[3];?>" alt="">
                        <p><?= $pengumumanisi[3];?></p>
                    </div>
                </div>
                <div class="main-tengah-6">
                <h3><?= $pengumuman[4];?></h3>
                <small><?= $waktu[0]?></small>
                    <div class="inline">
                        <p><?= $pengumumanisi[4];?></p>
                    </div>
                </div>
            </div>
            <div class="main-kanan">
                <div class="main-kanan-1">
                    <h3><?= $subjudul[3];?></h3>
                    <a href="https://x.com/smppgri9sda"><img src="images/<?= $medsos[0];?>" alt=""></a>
                    <a href="https://www.facebook.com/profile.php?id=100011596478337"><img src="images/<?= $medsos[1];?>" alt=""></a>
                    <a href="https://workspaceupdates.googleblog.com/2023/04/new-community-features-for-google-chat-and-an-update-currents%20.html"><img src="images/<?= $medsos[2];?>" alt=""></a>
                    <a href="#"><img src="images/<?= $medsos[3];?>" alt=""></a>
                    <a href="https://www.smppgri9-sda.sch.id/feeds/posts/default"><img src="images/<?= $medsos[4];?>" alt=""></a>
                    <a href="#"><img src="images/<?= $medsos[5];?>" alt=""></a>
                </div>
                <div class="main-kanan-2">
                    <h3><?= $subjudul[4];?></h3>
                    <img src="images/<?= $gambar[4];?>" alt="">
                    <p><?= $kalimat[5];?></p>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer-1">
                <h3><?= $subjudul[5];?></h3>
                <ul>
                    <li><a href="https://www.kemdikbud.go.id/" target="_blank"><?= $ket[0];?></a></li>
                    <li><a href="https://dindik.jatimprov.go.id/" target="_blank"><?= $ket[1];?></a></li>
                    <li><a href="https://dispendik.sidoarjokab.go.id/template-1/" target="_blank"><?= $ket[2];?></a></li>
                </ul>
            </div>
            <div class="footer-2">
                <h3><?= $subjudul[6];?></h3>
            </div>
            <div class="footer-3">
                <h3><?= $subjudul[7];?></h3>
                <h2><?= $ket[3];?></h2>
                <p><?= $ket[4];?></p>
                <img src="images/<?= $gambar[5];?>" alt="">
            </div>
            <div class="footer-4">
                <h3><?= $subjudul[8];?></h3>
                <p><?= $ket[5];?></p>
                <p><?= $ket[6];?></p>
                <p><?= $ket[7];?></p>
                <p><?= $ket[8];?></p>
                <p><?= $ket[9];?></p>
                <p><?= $ket[10];?></p>
            </div>
            <div class="bawah">
                <div class="bawah-1">
                    <footer><?= $footer;?></footer>
                </div>
                <div class="bawah-2">
                    <small><?= $credit;?></small>
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/da9e385bd4.js" crossorigin="anonymous"></script>
</body>
</html>