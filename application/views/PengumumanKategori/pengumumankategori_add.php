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

            <!-- Main Content -->
            <section class="content">
                <form action="<?=base_url('admin/Pengumuman/addPengumuman')?>" enctype="multipart/form-data" method="POST">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">New Pengumuman</h3>
                                </div>
                                <div class="card-body">
                                    <!-- Waktu -->
                                    <input type="hidden" name="pengumuman_date_insert" value="<?php echo date('Y-m-d h:i:sa');?>" class="form-control">
                                    <input type="hidden" name="pengumuman_date_update" value="<?php echo date('Y-m-d h:i:sa');?>" class="form-control">

                                    <!-- ID Penulis/Admin -->
                                    <input type="hidden" name="pengumuman_petugas_id" class="form-control" value="<?=$this->fungsi->petugas_login()->petugas_id?>" readonly>
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="pengumuman_judul" placeholder="Judul Pengumuman" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="pengumuman_content" id="compose-textarea" class="form-control" style="height: 300px" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-primary card-outline">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="pengumuman_sampul">Gambar Sampul</label>
                                        <input type="file" class="form-control-file" name="pengumuman_sampul">
                                    </div>

                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <?php foreach($dataKategori as $rowKategori){?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="pgmkatKategoriId[]" id="pgmkatKategoriId" value="<?=$rowKategori->kategori_id?>">
                                                <label class="form-check-label"><?=$rowKategori->kategori_nama?></label>
                                            </div>
                                        <?php } ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="custom-select" id="pengumuman_status" name="pengumuman_status">
                                            <option value="1">Publish</option>
                                            <option value="2">Draft</option>
                                        </select>
                                    </div>

                                    <button type="button" class="btn btn-danger btn-block">Cancel</button>
                                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                </div>
                            </div>
                        </div>
                        <!-- /Page Content -->
                    </div>
                </div>
                </form>
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