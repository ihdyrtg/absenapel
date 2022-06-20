<?php include 'comp/header.php' ?>


            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Home</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Dashboard</li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- STATISTIC-->
            <section class="statistic">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- <div class="col-md-6 col-lg-3">
                                <div class="statistic__item bg-primary">
                                    <h2 class="number text-white"><?=select_admin_2();?></h2>
                                    <span class="desc text-white">Jumlah Admin</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o text-white"></i>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-md-4 col-lg-4">
                                <div class="statistic__item bg-primary">
                                    <h2 class="number text-white"><?=select_karyawan_2();?></h2>
                                    <span class="desc text-white">Jumlah Pegawai</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-accounts-alt text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <div class="statistic__item bg-success">
                                    <h2 class="number text-white"><?=select_absen();?></h2>
                                    <span class="desc text-white">Jumlah Pegawai Mengikuti Apel</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-assignment-check text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <div class="statistic__item bg-danger">
                                    <h2 class="number text-white"><?=select_keterangan();?></h2>
                                    <span class="desc text-white">Jumlah Tidak Mengikuti Apel</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-assignment-alert text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Pie Chart -->
                            <div class="col-xl-12 col-sm-2">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Statistic Absen</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="index.php?m=keterangan">Action</a>                                           
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                        <span id="hadir"><?=select_absen();?></span>
                                        <span id="tidakhadir"><?=select_keterangan();?></span>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <!-- <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Jumlah Pegawai
                                        </span> -->
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Mengikuti Apel
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-danger"></i> Tidak Mengikuti Apel
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->
            
           

            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    

    <!-- Jquery JS-->
  <?php include 'comp/footer.php'; ?>
