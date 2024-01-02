<?php 
include "../Database/config/+koneksi.php";
require_once ('../Database/models/database.php');
include "../Database/models/m_teknisi2.php";
//require 'functions2.php';
$connection = new Database($host, $user, $pass, $database);
$tkns2 = new Teknisi2($connection);
ob_start();

    //if (tambahtkns($_POST) > 0) {
    //}else {
       // echo "data gagal ditambahkan!";
    //}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link type="text/css" rel="stylesheet" href="Halaman registrasi teknisi2/css/Style halaman registrasi teknisi2.css"/>
        
        <meta charset="UTF-8">
        <!--Let.browser.know.website.is.optimized.for.mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <title>SERVAILD</title>
    </head> 
    <body>
        <!-- Header Menggunakan Metode CSS GRID -->
        <div class="header-wrapper">
            <!-- PEMBUKA KOLOM KIRI --> 
            <div class="logo-wrapper left center">
                <a href="../Halaman depan/Halaman depan.php"><img src="../../Halaman depan/img/servaild_logo-long_white.png"></a>
            </div>
            <!-- PENUTUP KOLOM BAGIAN KIRI -->
            <!-- PEMBUKA KOLOM KANAN -->
            <div class="navlink-wrapper right">
                <ul>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div   > 
            <!-- PENUTUP KOLOM KANAN -->
        </div>

        <!-- FORM REGISTRASI USER-->
        <div class="content">
            <section class="container-form">
                <header>Silahkan Registrasi</header>
                <?php 
                global $conn;
                if ( isset($_POST["submit"]) ) {
                    if (tambahtkns2($_POST) > 0) {
                        echo '<p class="berhasil">Data berhasil ditambahkan!</p>';
                    } else {
                        echo '<p class="error">Data gagal ditambahkan!</p>';
                    }
                    $mysqli = new mysqli("localhost", "root", "", "servaild");

                    if ($mysqli->connect_error) {
                        die("Connection failed: " . $mysqli->connect_error);
                    }
                    
                    $query = "SELECT * FROM tkns2";
                    $result = $mysqli->query($query);
                    
                    if (!$result) {
                        // Use mysqli_error() with the mysqli connection object
                        $error_message = mysqli_error($mysqli);
                        echo "Query failed: " . $error_message;
                    } else {
                        // Process the result set
                        // ...
                    }
                    
                    // Close the connection when you're done
                    $mysqli->close();
                }
                ?>
                <form action="" class="form" method="post" enctype="multipart/form-data">
                    <div class="input-box address">
                        <label>Alamat</label>
                        <input type="text" name="almt" id="almt" for="almt" placeholder="Masukkan alamat" required />
                        <div class="column">
                            <div class="select-box">
                                <select name="negara" id="negara">
                                    <option hidden>Negara</option>
                                    <option>Indonesia</option>
                                    <option>Amerika</option>
                                    <option>Japan</option>
                                    <option>India</option>
                                </select>
                            </div>
                            <div class="select-box">
                                <select name="kota" id="kota" >
                                    <option hidden>Kota</option>
                                    <option>Bandung</option>
                                    <option>Bogor</option>
                                    <option>Banda Aceh</option>
                                    <option>Langsa</option>
                                    <option>Lhokseumawe</option>
                                    <option>Sabang</option>
                                    <option>Subulussalam</option>
                                    <option>Denpasar</option>
                                    <option>Pangkalpinang</option>
                                    <option>Cilegon</option>
                                    <option>Serang</option>
                                    <option>Tangerang Selatan</option>
                                    <option>Tangerang</option>
                                    <option>Bengkulu</option>
                                    <option>Yogyakarta</option>
                                    <option>Gorontalo</option>
                                    <option>Kota Administrasi Jakarta Barat</option>
                                    <option>Kota Administrasi Jakarta Pusat</option>
                                    <option>Kota Administrasi Jakarta Selatan</option>
                                    <option>Kota Administrasi Jakarta Timur</option>
                                    <option>Kota Administrasi Jakarta Utara</option>
                                    <option>Sungai Penuh</option>
                                    <option>Jambi</option>
                                    <option>Bekasi</option>
                                    <option>Cimahi</option>
                                    <option>Cirebon</option>
                                    <option>Depok</option>
                                    <option>Sukabumi</option>
                                    <option>Tasikmalaya</option>
                                    <option>Banjar</option>
                                    <option>Magelang</option>
                                    <option>Pekalongan</option>
                                    <option>Salatiga</option>
                                    <option>Semarang</option>
                                    <option>Surakarta</option>
                                    <option>Tegal</option>
                                    <option>Batu</option>
                                    <option>Blitar</option>
                                    <option>Kediri</option>
                                    <option>Madiun</option>
                                    <option>Malang</option>
                                    <option>Mojokerto</option>
                                    <option>Pasuruan</option>
                                    <option>Probolinggo</option>
                                    <option>Surabaya</option>
                                    <option>Pontianak</option>
                                    <option>Singkawang</option>
                                    <option>Banjarbaru</option>
                                    <option>Banjarmasin</option>
                                    <option>Palangka Raya</option>
                                    <option>Balikpapan</option>
                                    <option>Bontang</option>
                                    <option>Samarinda</option>
                                    <option>Nusantara</option>
                                    <option>Tarakan</option>
                                    <option>Batam</option>
                                    <option>Tanjungpinang</option>
                                    <option>Bandar Lampung</option>
                                    <option>Metro</option>
                                    <option>Ternate</option>
                                    <option>Tidore Kepulauan</option>
                                    <option>Ambon</option>
                                    <option>Tual</option>
                                    <option>Bima</option>
                                    <option>Mataram</option>
                                    <option>Kupang</option>
                                    <option>Sorong</option>
                                    <option>Jayapura</option>
                                    <option>Dumai</option>
                                    <option>Pekanbaru</option>
                                    <option>Makassar</option>
                                    <option>Palopo</option>
                                    <option>Palu</option>
                                    <option>Baubau</option>
                                    <option>Kendari</option>
                                    <option>Bitung</option>
                                    <option>Kotamobagu</option>
                                    <option>Manado</option>
                                    <option>Tomohon</option>
                                    <option>Bukittinggi</option>
                                    <option>Padang</option>
                                    <option>Padang Panjang</option>
                                    <option>Pariaman</option>
                                    <option>Payakumbuh</option>
                                    <option>Sawahlunto</option>
                                    <option>Solok</option>
                                    <option>Lubuklinggau</option>
                                    <option>Pagar Alam</option>
                                    <option>Palembang</option>
                                    <option>Prabumulih</option>
                                    <option>Binjai</option>
                                    <option>Gunungsitoli</option>
                                    <option>Medan</option>
                                    <option>Padangsidimpuan</option>
                                    <option>Pematangsiantar</option>
                                    <option>Sibolga</option>
                                    <option>Tanjungbalai</option>
                                    <option>Tebing Tinggi</option>
                                </select>
                            </div>
                        </div>
                        <div class="column">
                            <input type="number" name="kode_pos" id="kode_pos" for="kode_pos" placeholder="Masukkan kode pos" required minlength="4" maxlength="12"/>
                        </div>
                    </div>

                    <div class="input-box">
                        <label>Nomor Induk Berusaha</label>
                        <input type="number" name="nib" for="nib" id="nib" placeholder="Masukkan nomor induk berusaha" minlength="4" maxlength="12" required>
                    </div>

                    <div class="input-box">
                        <label>Nomor Rekening</label>
                        <input type="number" name="no_rek" id="no_rek" for="no_rek" placeholder="Masukkan nomor rekening" minlength="4" maxlength="12" required>
                        <img src="../Halaman depan/img/card_img.png" alt="">
                    </div>

                    <div class="docx">
                        <label class="control-label sc_surat_perjanjian_krjsm" for="sc_surat_perjanjian_krjsm">Surat Perjanjian Kerjasama</label>
                        <button class="btn-sc-perjanjian-krjsm" onclick="location.href='../Halaman registrasi teknisi/Halaman registrasi teknisi2/docx/SURAT PERJANJIAN KERJASAMA.docx';"> Unduh Surat Perjanjian Kerjasama</button>
                    </div>

                    <div class="form-group">
                        <label class="control-label sc_akta_kelahiran" for="sc_akta_kelahiran">Scan Akta Kelahiran</label>
                        <div style="padding-bottom:5px">
                        <embed src="" type="application/pdf" width="100%" height="10px">
                        </div>
                        <input style="margin-left: 0px; margin-top: 0px;"type="file" name="sc_akta_kelahiran" class="form-control" id="sc_akta_kelahiran">
                    </div>

                    <div class="form-group">
                        <label class="control-label sc_kk" for="sc_kk">Scan Kartu Keluarga</label>
                        <div style="padding-bottom:5px">
                        <embed src="" type="application/pdf" width="100%" height="10px">
                        </div>
                        <input style="margin-left: 40px;"type="file" name="sc_kk" class="form-control" id="sc_kk">
                    </div>

                    <div class="form-group">
                        <label class="control-label sc_ktp" for="sc_ktp">Scan Kartu Tanda Penduduk</label>
                        <div style="padding-bottom:5px">
                        <embed src="" type="application/pdf" width="100%" height="10px">
                        </div>
                        <input type="file" name="sc_ktp" class="form-control" id="sc_ktp">
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="sc_perjanjian_krjsm">Scan Surat Perjanjian Kerjasama</label>
                        <div style="padding-bottom:5px">
                        <embed src="" type="application/pdf" width="100%" height="10px">
                        </div>
                        <input style="margin-left:40px;"type="file" name="sc_perjanjian_krjsm" class="form-control" id="sc_perjanjian_krjsm">
                    </div>
                    <div>
                    <button class="konfirmasi"  type="submit" name="submit">Konfirmasi</button>
                    </div>
                </form>
                <?php 
                function tambahtkns2($data) {
                        global $conn;
                        $almt = htmlspecialchars($data["almt"]);
                        $negara = $_POST["negara"];
                        $kota = $_POST["kota"];
                        $kode_pos = htmlspecialchars($data["kode_pos"]);
                        $nib = htmlspecialchars($data["nib"]);
                        $no_rek = htmlspecialchars($data["no_rek"]);
                    
                    if (@$_POST['submit']) {
                        
                        $ekstensiakta = explode(".", $_FILES['sc_akta_kelahiran']['name']);
                        $sc_akta_kelahiran = "akta kelahiran-".round(microtime(true)).".".end($ekstensiakta);
                        $sumberakta = $_FILES['sc_akta_kelahiran']['tmp_name'];
                        
                        $uploadakta = move_uploaded_file($sumberakta, "../Database/assets/scan akta/".$sc_akta_kelahiran);
                        
                        $ekstensikk = explode(".", $_FILES['sc_kk']['name']);
                        $sc_kk = "kk-".round(microtime(true)).".".end($ekstensikk);
                        $sumberkk = $_FILES['sc_kk']['tmp_name'];
                        
                        $uploadkk = move_uploaded_file($sumberkk, "../Database/assets/scan kk/".$sc_kk);
                        
                        $ekstensiktp = explode(".", $_FILES['sc_ktp']['name']);
                        $sc_ktp = "ktp-".round(microtime(true)).".".end($ekstensiktp);
                        $sumberktp = $_FILES['sc_ktp']['tmp_name'];
                        
                        $uploadktp = move_uploaded_file($sumberktp, "../Database/assets/scan ktp/".$sc_ktp);
                        $ekstensisc_perjanjian_krjsm = explode(".", $_FILES['sc_perjanjian_krjsm']['name']);
                        $sc_perjanjian_krjsm = "perjanjian kerjasama-".round(microtime(true)).".".end($ekstensisc_perjanjian_krjsm);
                        $sumbersc_perjanjian_krjsm = $_FILES['sc_perjanjian_krjsm']['tmp_name'];
                        
                        $uploadperjanjian_krjsm = move_uploaded_file($sumbersc_perjanjian_krjsm, "../Database/assets/scan surat perjanjian kerjasama/".$sc_perjanjian_krjsm);
                        
                        if( $uploadakta || $uploadkk || $uploadktp || $uploadperjanjian_krjsm) {
                            $tkns2->tambah($almt, $negara, $kota, $kode_pos, $nib, $no_rek, $sc_akta_kelahiran, $sc_kk, $sc_ktp, $sc_perjanjian_krjsm);
                            //$query = "INSERT INTO tkns2 (id_tkns2, almt, negara, kota, kode_pos, nib, no_rek, sc_akta_kelahiran, sc_kk, sc_ktp, sc_perjanjian_krjsm)  VALUES ('', '$almt', '$negara', '$kota', '$kode_pos', '$nib', '$no_rek', '$sc_akta_kelahiran', '$sc_kk', '$sc_ktp', '$sc_perjanjian_krjsm')";
                            header("location: ?page=Halaman registrasi teknisi2");
                            
                            //mysqli_query($conn, $query);
                            
                            //return mysqli_affected_rows($conn); 
                             
                        } else {
                            echo "<script>alert('Unggah dokumen gagal!')</script>";
                    }
                }
            }
                //if (@$_POST['submit']) {
                   // $nib = htmlspecialchars(["nib"]);
                    //$almt = htmlspecialchars(["almt"]);
                    //$kode_pos = htmlspecialchars(["kode_pos"]);
                    //$negara = $_POST["negara"];
                    //$kota = $_POST["kota"];
                    //$no_rek = htmlspecialchars(["no_rek"]);

                    //$ekstensiktp = explode(".", $_FILES['sc_ktp']['name']);
                    //$sc_ktp = "ktp-".round(microtime(true)).".".end($ekstensiktp);
                    //$sumberktp = $_FILES['sc_ktp']['tmp_name'];
                    
                    //$uploadktp = move_uploaded_file($sumberktp, "../Database/assets/scan ktp/".$sc_ktp);
                    
                    //$ekstensikk = explode(".", $_FILES['sc_kk']['name']);
                    //$sc_kk = "kk-".round(microtime(true)).".".end($ekstensikk);
                    //$sumberkk = $_FILES['sc_kk']['tmp_name'];
                    
                    //$uploadkk = move_uploaded_file($sumberkk, "../Database/assets/scan kk/".$sc_kk);
                    
                    //$ekstensiakta = explode(".", $_FILES['sc_akta_kelahiran']['name']);
                    //$sc_akta_kelahiran = "akta kelahiran-".round(microtime(true)).".".end($ekstensiakta);
                    //$sumberakta = $_FILES['sc_akta_kelahiran']['tmp_name'];
                    
                    //$uploadakta = move_uploaded_file($sumberakta, "../Database/assets/scan akta/".$sc_akta_kelahiran);
                    //$ekstensisc_perjanjian_krjsm = explode(".", $_FILES['sc_perjanjian_krjsm']['name']);
                    //$sc_perjanjian_krjsm = "perjanjian kerjasama-".round(microtime(true)).".".end($ekstensisc_perjanjian_krjsm);
                    //$sumbersc_perjanjian_krjsm = $_FILES['sc_perjanjian_krjsm']['tmp_name'];
                    //$uploadperjanjian_krjsm = move_uploaded_file($sumbersc_perjanjian_krjsm, "../Database/assets/scan surat perjanjian kerjasama/".$sc_perjanjian_krjsm);
                    //if($uploadktp || $uploadkk || $uploadakta || $uploadperjanjian_krjsm) {
                        //$tkns2->tambah($almt, $negara, $kota, $kode_pos, $nib, $no_rek, $sc_akta_kelahiran, $sc_kk, $sc_ktp, $sc_perjanjian_krjsm);
                         //header("location: ?page=Halaman registrasi teknisi");
                     //} else {
                         //echo "<script>alert('Unggah dokumen gagal!')</script>";
                     //}
                 //}
                 ?>
            </section>
        </div>
    </div>
        <!-- PENUTUP FORM REGISTRASI USER-->


        <!-- FOOTER -->
        <footer class="footer">
            <div class="container footer-wrapper">
                <div class="logo-col">
                    <a href="#" class="footer-logo">
                        <img src="../../Halaman depan/img/servaild_logo_white.png" alt="Servaild" class="logo">
                    </a>

                    <ul class="social-links">
                        <li>
                            <a href="#" class="footer-link">
                                <ion-icon class="social-icon" name="logo-instagram"></ion-icon>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">
                                <ion-icon class="social-icon" name="logo-facebook"></ion-icon>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">
                                <ion-icon class="social-icon" name="logo-twitter"></ion-icon>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">
                                <ion-icon class="social-icon" name="logo-linkedin"></ion-icon>
                            </a>
                        </li>
                    </ul>

                    <p class="copyright">Copyright &copy; 2023 by Servaild. All rights reserved.</p>
                </div>

                <div class="addres-col">
                    <p class="footer-heading">Kontak kami</p>
                    <address class="contacts">
                        <p class="address">Jl. Mandor Naiman Kec. Sukaraja Kab. Bogor 16710-16710 & Cilendek Indah Bogor Barat, Kota Bogor, 16111-16119</p>
                        <p>
                            <a href="tel:+628-212-603-011" class="footer-link">+628-2123-603-011</a>
                            <br>
                            <a href="mailto:info@company.com" class="footer-link">perbaikanelektronikservaild@gmail.com</a>
                        </p>   
                    </address>
                </div>
                <nav class="nav-col">
                    <p class="footer-heading">Produk </p>
                    <ul class="footer-nav">
                        <li><a href="#" class="footer-link">Platform</a></li>
                        <li><a href="#" class="footer-link">Penetapan Harga</a></li>
                        <li><a href="#" class="footer-link">Tambahan</a></li>
                        <li><a href="#" class="footer-link">Penghargaan</a></li>
                    </ul>
                </nav>

                
                <nav class="nav-col">
                    <p class="footer-heading">Perusahaan</p>
                    <ul class="footer-nav">
                        <li><a href="#" class="footer-link">Tentang Perusahaan</a></li>
                        <li><a href="#" class="footer-link">Tim Kami</a></li>
                        <li><a href="#" class="footer-link">Pusat Bantuan</a></li>
                        <li><a href="#" class="footer-link">Karir</a></li>
                    </ul>
                </nav>

                <nav class="nav-col">
                    <p class="footer-heading">Sumber daya</p>
                    <ul class="footer-nav">
                        <li><a href="#" class="footer-link">Dokumentasi</a></li>
                        <li><a href="#" class="footer-link">Blog</a></li>
                        <li><a href="#" class="footer-link">Kebijakan Privasi</a></li>
                        <li><a href="#" class="footer-link">Ketentuan Layanan</a></li>
                    </ul>
                </nav>
            </div>
        </footer>
        <script src="../Halaman registrasi teknisi/js/script.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
         <!-- PENUTUP FOOTER -->
    </body>
</html>