<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('_partials/head.php');?>
    </head> 

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            
            <!-- Top Navbar -->
            <?php $this->load->view('_partials/navbar.php');?>
            <!-- /Top Navbar -->

            <!-- Left Sidebar -->
            <?php $this->load->view('_partials/sidebar.php');?>
            <!-- /Left Sidebar -->
            
            <!-- Main Content -->
            <div class="content-wrapper">
            
            <!-- Breadcrumb -->
            <?php $this->load->view('_partials/breadcrumb.php');?>
            <!-- /Breadcrumb -->

                <section class="content">
                    <div class="card">
                        <!-- Navbar Content -->
                        <div class="card-header">
                            <h3 class="card-title">Data Pengumuman</h3>
                        </div>
                        <!-- /Navbar Content -->
                        <!-- Page Content -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Date Insert</th>
                                        <th>Judul Pengumuman</th>
                                        <th>Nama Penulis</th>
                                        <th>Kategori</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                    $i = 1;
                                    foreach($dataPengumuman as $rowPengumuman){?>
                                    <tr>
                                        <td><?=$i++?></td>
                                        <td><?=$rowPengumuman->pengumuman_date_insert?></td>
                                        <td><?=$rowPengumuman->pengumuman_judul?></td>
                                        <?php
                                            foreach($dataPetugas as $rowPetugas){
                                                if($rowPengumuman->pengumuman_petugas_id == $rowPetugas->petugas_id){?>
                                                    <td><?=$rowPetugas->petugas_nama?></td>
                                        <?php  } } ?>
                                        
                                        <td>
                                            <?php
                                                foreach($dataPengumumanKategori as $rowPengumumanKategori){
                                                    if($rowPengumuman->pengumuman_id == $rowPengumumanKategori->pgmkat_pengumuman_id){?>
                                                            <li><?=$rowPengumumanKategori->kategori_nama?></li>
                                            <?php } } ?>
                                        </td>

                                        <?php if($rowPengumuman->pengumuman_status == 1){ ?>
                                            <td class=" ">Publish</td>
                                        <?php }else if($rowPengumuman->pengumuman_status == 2){ ?>
                                            <td class=" ">Draft</td>
                                        <?php } ?>

                                        <td>
                                            <a href="<?= base_url('admin/PengumumanKategori/viewViewPengumumanKategori/'.$rowPengumuman->pengumuman_id)?>">
                                                <button class="btn btn-sm btn-success" id="btn-lihat">Lihat</button>
                                            </a>
                                            <a href="<?= base_url('admin/Pengumuman/deletePengumuman/'.$rowPengumuman->pengumuman_id)?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">
                                                <button class="btn btn-sm btn-danger" id="btn-delete">Delete</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /Page Content -->
                        <!-- Footer Content -->
                        <!-- <div class="card-footer">
                            Footer
                        </div> -->
                        <!-- /Footer Content -->
                    </div>
                </section>   
            </div>
            <!-- /Main Content -->

            <!-- Footer -->
            <?php $this->load->view('_partials/footer.php');?>
            <!-- /Footer -->
        </div>

        <!-- JS -->
        <?php $this->load->view('_partials/js.php');?>
        <!-- /JS -->
    </body>
</html>