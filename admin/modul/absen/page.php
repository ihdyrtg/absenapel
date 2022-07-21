<?php include 'comp/header.php'; ?>
<?php

if (isset($_POST['hapus'])) {
    hapus_absen();
}

?>
<div class="main-content">
    <div class="section__content section__content--p30">

    </div>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="col-sm-6">Data Absen</h3>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Absen</li>
                    </ol>
                </div><!-- /.col -->
            </div>
        </div>


        <!-- Main Content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <form action="index.php?m=absen&s=cetak" method="post">
                            <div class="row">
                                <div class="col-sm-4">
                                    <select name="bulan" id="bulan" class="form-control">
                                        <option value="" disabled selected>-- Pilih Bulan --</option>
                                        <option value="01">Januari</option>
                                        <option value="02">Februari</option>
                                        <option value="03">Maret</option>
                                        <option value="04">April</option>
                                        <option value="05">Mei</option>
                                        <option value="06">Juni</option>
                                        <option value="07">Juli</option>
                                        <option value="08">Agustus</option>
                                        <option value="09">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select name="tahun" id="tahun" class="form-control">
                                        <option value="" disabled selected>-- Pilih Tahun --</option>
                                        <?php for ($i = date('Y'); $i >= (date('Y') - 2); $i--) : ?>
                                            <option value="<?php echo $i; ?>" ; ?><?php echo $i ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <button type="submit" class="btn btn-primary btn-fill btn-block">Cetak</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12">
                        <!-- <a href="index.php?m=absen&s=cetak" class="btn btn-primary mb-5">
                            Cetak Absen
                        </a> -->
                        <!-- Tabel -->
                        <div class="row">
                            <div class="table-responsive table--no-card m-b-30">
                                <!-- <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>No</th>                                                
                                                <th>Nama</th>                             
                                                <th>Kontak</th>
                                                <th>Foto</th>
                                                <th>aksi</th>
                                                
                                            </tr>
                                        </thead>
                                        <?php


                                        $i = 1;

                                        ?>
                                        <tbody>
                                            <?php include 'paging.php'; ?>
										</tbody>
                                    </table> -->
                                <table class="table table-striped table-earning">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th>status</th>
                                            <th>aksi</th>


                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $i = 1;
                                        include 'paging.php';
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <center>
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" <?php if ($halaman > 1) {
                                                                echo "href='?m=absen&halaman=$previous'";
                                                            } ?>>Previous</a>
                                </li>
                                <?php
                                for ($x = 1; $x <= $total_halaman; $x++) {
                                ?>
                                    <li class="page-item"><a class="page-link" href="?m=absen&halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                                <?php
                                }
                                ?>
                                <li class="page-item">
                                    <a class="page-link" <?php if ($halaman < $total_halaman) {
                                                                echo "href='?m=absen&halaman=$next'";
                                                            } ?>>Next</a>
                                </li>
                            </ul>
                        </center>
                        <!-- end table -->

                    </div>
                </div>
            </div>
        </section>

    </div>

</div>

<?php include 'comp/footer.php'; ?>