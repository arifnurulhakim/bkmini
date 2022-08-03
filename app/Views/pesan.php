<?php $this->extend('template') ?>
<?php $this->section('content') ?>
<ul class="navbar-nav ms-auto">
    <li class="nav-item">
        <button type="button" class="btn btn-social-icon-text btn-warning" onclick="bukaModalKeranjang()"><i class="mdi mdi-cart-outline"></i>Keranjang <b id="jmlPesanan">(0)</b></button>
    </li>
</ul>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial -->
    <div class="main-panel" style="margin-left: auto; margin-right:auto;">
        <?php if ($makanan) : ?>
            <div class="content-wrapper text-center">
                <h2>Aneka Makanan</h2>
                <hr>
                <div class="row">
                    <?php for ($i = 0; $i < count($makanan); $i++) :
                        if ($makanan[$i]["jenis"] == 1) : ?>
                            <div class="col-lg-3 grid-margin stretch-card">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body p-0">
                                        <img src="<?= base_url() ?>/public/images/menu/<?= $makanan[$i]["foto"] ?>" class="card-img-top" <?php if ($makanan[$i]["status"] == 0) {
                                                                                                                                                echo 'style = "filter: grayscale(100%);-webkit-filter: grayscale(100%);"';
                                                                                                                                            } ?> alt="...">
                                        <div class="card-body text-center">
                                            <h5><?= $makanan[$i]["nama"] ?></h5>
                                            <i>Rp. <?= $makanan[$i]["harga"] ?></i><br>
                                            <button class="btn btn-warning btn-sm btn-fw mt-2" <?php if ($makanan[$i]["status"] == 0) {
                                                                                                    echo "disabled";
                                                                                                } ?> onclick='tambahPesanan(<?= $makanan[$i]["id"] ?>, "<?= $makanan[$i]["nama"] ?>", <?= $makanan[$i]["harga"] ?> )'><?php if ($makanan[$i]["status"] == 0) {
                                                                                                                                                                                                                            echo "Habis";
                                                                                                                                                                                                                        } else {
                                                                                                                                                                                                                            echo "Tambah";
                                                                                                                                                                                                                        } ?></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endif;
                    endfor; ?>
                </div>
            </div>
        <?php
        endif;
        if ($snack) : ?>
            <div class="content-wrapper text-center">
                <h2>Aneka Snack</h2>
                <hr>
                <div class="row">
                    <?php for ($i = 0; $i < count($snack); $i++) :
                        if ($snack[$i]["jenis"] == 2) : ?>
                            <div class="col-lg-3 grid-margin stretch-card">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body p-0">
                                        <img src="<?= base_url() ?>/public/images/menu/<?= $snack[$i]["foto"] ?>" class="card-img-top" <?php if ($snack[$i]["status"] == 0) {
                                                                                                                                            echo 'style = "filter: grayscale(100%);-webkit-filter: grayscale(100%);"';
                                                                                                                                        } ?> alt="...">
                                        <div class="card-body text-center">
                                            <h5><?= $snack[$i]["nama"] ?></h5>
                                            <i>Rp. <?= $snack[$i]["harga"] ?></i><br>
                                            <button class="btn btn-warning btn-sm btn-fw mt-2" <?php if ($snack[$i]["status"] == 0) {
                                                                                                    echo "disabled";
                                                                                                } ?> onclick='tambahPesanan(<?= $snack[$i]["id"] ?>, "<?= $snack[$i]["nama"] ?>", <?= $snack[$i]["harga"] ?> )'><?php if ($snack[$i]["status"] == 0) {
                                                                                                                                                                                                                    echo "Habis";
                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                    echo "Tambah";
                                                                                                                                                                                                                } ?></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endif;
                    endfor; ?>
                </div>
            </div>
        <?php endif;
        if ($minumanDingin) : ?>
            <div class="content-wrapper text-center">
                <h2>Aneka Minuman Dingin</h2>
                <hr>
                <div class="row">
                    <?php for ($i = 0; $i < count($minumanDingin); $i++) :
                        if ($minumanDingin[$i]["jenis"] == 3) : ?>
                            <div class="col-lg-3 grid-margin stretch-card">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body p-0">
                                        <img src="<?= base_url() ?>/public/images/menu/<?= $minumanDingin[$i]["foto"] ?>" class="card-img-top" <?php if ($minumanDingin[$i]["status"] == 0) {
                                                                                                                                                    echo 'style = "filter: grayscale(100%);-webkit-filter: grayscale(100%);"';
                                                                                                                                                } ?> alt="...">
                                        <div class="card-body text-center">
                                            <h5><?= $minumanDingin[$i]["nama"] ?></h5>
                                            <i>Rp. <?= $minumanDingin[$i]["harga"] ?></i><br>
                                            <button class="btn btn-warning btn-sm btn-fw mt-2" <?php if ($minumanDingin[$i]["status"] == 0) {
                                                                                                    echo "disabled";
                                                                                                } ?> onclick='tambahPesanan(<?= $minumanDingin[$i]["id"] ?>, "<?= $minumanDingin[$i]["nama"] ?>", <?= $minumanDingin[$i]["harga"] ?> )'><?php if ($minumanDingin[$i]["status"] == 0) {
                                                                                                                                                                                                                                            echo "Habis";
                                                                                                                                                                                                                                        } else {
                                                                                                                                                                                                                                            echo "Tambah";
                                                                                                                                                                                                                                        } ?></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endif;
                    endfor; ?>
                </div>
            </div>
        <?php endif;
        if ($minumanPanas) : ?>
            <div class="content-wrapper text-center">
                <h2>Aneka Minuman Panas</h2>
                <hr>
                <div class="row">
                    <?php for ($i = 0; $i < count($minumanPanas); $i++) :
                        if ($minumanPanas[$i]["jenis"] == 4) : ?>
                            <div class="col-lg-3 grid-margin stretch-card">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body p-0">
                                        <img src="<?= base_url() ?>/public/images/menu/<?= $minumanPanas[$i]["foto"] ?>" class="card-img-top" <?php if ($minumanPanas[$i]["status"] == 0) {
                                                                                                                                                    echo 'style = "filter: grayscale(100%);-webkit-filter: grayscale(100%);"';
                                                                                                                                                } ?> alt="...">
                                        <div class="card-body text-center">
                                            <h5><?= $minumanPanas[$i]["nama"] ?></h5>
                                            <i>Rp. <?= $minumanPanas[$i]["harga"] ?></i><br>
                                            <button class="btn btn-warning btn-sm btn-fw mt-2" <?php if ($minumanPanas[$i]["status"] == 0) {
                                                                                                    echo "disabled";
                                                                                                } ?> onclick='tambahPesanan(<?= $minumanPanas[$i]["id"] ?>, "<?= $minumanPanas[$i]["nama"] ?>", <?= $minumanPanas[$i]["harga"] ?> )'><?php if ($minumanPanas[$i]["status"] == 0) {
                                                                                                                                                                                                                                            echo "Habis";
                                                                                                                                                                                                                                        } else {
                                                                                                                                                                                                                                            echo "Tambah";
                                                                                                                                                                                                                                        } ?></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endif;
                    endfor; ?>
                </div>
            </div>
        <?php endif; ?>

        <!-- Modal -->
        <div class="modal fade" id="modalKeranjang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pesanan</h5>
                    </div>
                    <div class="modal-body p-0 text-center">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-warning text-white">Nama</span>
                                        </div>
                                        <input type="text" id="nama" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-warning text-white">No Meja</span>
                                        </div>
                                        <input type="number" id="noMeja" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-warning text-white">nominal</span>
                                        </div>
                                        <input type="number" id="nominal" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-warning text-white">Nominal</span>
                                        </div>
                                        <input type="number" id="nominal" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                </div>
                            </div> -->
                        </div>

                        <table class="table text-center bg-white" id="dataTable">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Jml</th>
                                    <th>Harga</th>
                                    <th>Total</th>
                                    <th>Hapus</th>
                                </tr>
                            </thead>
                            <tbody id="tabelPesanan">
                                <td colspan="5">Data Kosong</td>
                            </tbody>
                        </table>

                        <b id="peringatan" class="badge badge-danger">Silahkan isi nama dan no meja.</b><br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="tutupModalKeranjang()">Tutup</button>
                        <button type="button" class="btn btn-warning" onclick="prosesTransaksi()" id="simpanTransaksi">Pesan dan Bayar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalSelesai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pesanan Berhasil.</h5>
                    </div>
                    <div class="modal-body">
                        Pesanan Berhasil dibuat. atas nama <b id="namaPemesan"></b> dengan lokasi meja <b id="lokasiMeja"></b>.
                        <br> <br> Mohon Menunggu sebentar kak. semoga anda dapat menikmati suasana rindu cafe ini. <br> <br>
                        <b>Terimakasih... :)</b><br><br>
                        <i>langsung dibayar ya.. </i>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" onclick="tutupModalSelesai()">Siap :)</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<script src="<?php echo base_url() ?>/public/js/jquery/jquery.min.js"></script>
<script>
    var pesanan = [];
    var ditemukan = false
    var jmlPesanan = 0

    function bukaModalKeranjang() {
        tampilkanPesanan()
        $("#modalKeranjang").modal("show")
        $("#peringatan").hide()
    }

    function bukaModalLogin() {
        $("#modalLogin").modal("show")
    }

    function login() {
        idUser = $("#idUser").val()
        pass = $("#pass").val()

        if ($("#pass").val() == "") {
            $("#pass").focus();
        } else {
            $.ajax({
                type: 'POST',
                data: 'idUser=' + idUser + '&pass=' + pass,
                url: '<?= base_url() ?>/dashboard/auth',
                dataType: 'json',
                success: function(data) {
                    if (data == "") {
                        window.location.href = "antrian";
                    } else {
                        $("#errorLogin").html(data)
                    }
                }
            });
        }
    }

    function prosesTransaksi() {
        var nama = $('#nama').val();
        var noMeja = $('#noMeja').val();
        var nominal = $('#nominal').val();
        if (nama == "") {
            $("#nama").focus()
            $("#peringatan").show()
        } else if (noMeja == "") {
            $("#noMeja").focus()
            $("#peringatan").show()
        } else if (nominal == "") {
            $("#nominal").focus()
            $("#peringatan").show()
        } else {
            $("#simpanTransaksi").html('<i class="mdi mdi-reload fa-pulse"></i> Memproses..')
            $.ajax({
                type: 'POST',
                url: '<?= base_url() ?>/pesan/tambahPesanan',
                data: {
                    'pesanan': pesanan,
                    'nama': nama,
                    'noMeja': noMeja,
                    'nominal': nominal
                },
                dataType: 'json',
                success: function(data) {
                    $("#modalKeranjang").modal("hide")
                    pesanan = [];
                    $('#nama').val("");
                    $('#noMeja').val("");
                    $('#nominal').val("");
                    tampilkanPesanan();

                    $("#simpanTransaksi").html('Pesan dan Bayar')
                    $("#namaPemesan").html(nama)
                    $("#lokasiMeja").html(noMeja)
                    $("#nominal").html(nominal)
                    $("#modalSelesai").modal("show")
                }
            });
        }
    }

    function tutupModalKeranjang() {
        $("#modalKeranjang").modal("hide")
    }

    function tutupModalSelesai() {
        $("#modalSelesai").modal("hide")
    }

    function tutupModalLogin() {
        $("#modalLogin").modal("hide")
    }

    function tambahPesanan(id, nama, harga) {
        ditemukan = false
        jmlPesanan = 0
        for (let i = 0; i < pesanan.length; i++) {
            if (pesanan[i][0] == id) {
                pesanan[i][2] += 1
                ditemukan = true
            }
            jmlPesanan += pesanan[i][2]
        }
        if (ditemukan == false) {
            pesanan.push([id, nama, 1, harga])
            jmlPesanan += 1
        }

        $("#jmlPesanan").html("(" + jmlPesanan + ")")
    }

    function tampilkanPesanan() {
        var isiPesanan = ""

        for (let i = 0; i < pesanan.length; i++) {
            isiPesanan += "<tr><td>" + pesanan[i][1] + "</td><td>" + pesanan[i][2] + "</td><td>" + formatRupiah(pesanan[i][3].toString()) + "</td><td>" + formatRupiah((pesanan[i][2] * pesanan[i][3]).toString()) + "</td><td><button href='#' class='badge badge-danger' onClick='hapusPesanan(" + i + ")'>x</button></td></tr>"
        }
        if (pesanan.length < 1) {
            $("#simpanTransaksi").prop("disabled", true)
            isiPesanan = "<td colspan='5'>Pesanan Masih Kosong :)</td>"
        } else {
            $("#simpanTransaksi").prop("disabled", false)
        }

        $("#tabelPesanan").html(isiPesanan)
    }

    function hapusPesanan(id) {
        pesanan.splice(id, 1)
        tampilkanPesanan()
    }

    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>
<?php $this->endSection() ?>