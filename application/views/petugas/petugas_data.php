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
                            <h3 class="card-title">Data Petugas</h3>
                            <div class="card-tools">
                                <a href="<?= base_url('admin/Petugas/viewAddPetugas')?>">
                                <button type="button" class="btn btn-block btn-primary">
                                    Tambah Data
                                </button>
                                </a>
                            </div>
                        </div>
                        <!-- /Navbar Content -->
                        <!-- Page Content -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No HP</th>
                                        <th>Password</th>
                                        <th>Img Profil</th>
                                        <th>Status</th>
                                       
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php 
                                    $i = 1;
                                    foreach($dataPetugas as $rowPetugas){ ?>
                                        <tr>
                                            <td><?=$i++?></td>
                                            <td><?=$rowPetugas->petugas_NIP?></td>
                                            <td><?=$rowPetugas->petugas_nama?></td>
                                            <td><?=$rowPetugas->petugas_email?></td>
                                            <td><?=$rowPetugas->petugas_nohp?></td>
                                            <td><?=$rowPetugas->petugas_password?></td>
                                            <td>
                                                <img src="<?= base_url()?>upload/imgpetugas/<?=$rowPetugas->petugas_img_profil?>" width="50" height="45">
                                            </td>
                                            <?php if($rowPetugas->petugas_level == 1){ ?>
                                                <td class=" ">Admin</td>
                                            <?php }else if($rowPetugas->petugas_level == 2){ ?>
                                                <td class=" ">Penulis</td>
                                            <?php } ?>
                                            <td>
                                                <a href="<?= base_url('admin/Petugas/viewEditPetugas/'.$rowPetugas->petugas_id)?>">
                                                    <button class="btn btn-sm btn-warning" id="btn-edit">Edit</button>
                                                </a>
                                                <a href="<?= base_url('admin/Petugas/deletePetugas/'.$rowPetugas->petugas_id)?>">
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