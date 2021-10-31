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
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-primary">
                                    <!-- Navbar Content -->
                                    <div class="card-header">
                                        <h3 class="card-title">TAMBAH DATA PETUGAS</h3>
                                    </div>
                                    <!-- /Navbar Content -->
                                    <!-- Page Content -->

                                    <form action="<?=base_url('admin/Petugas/addPetugas') ?>" enctype="multipart/form-data" method="post">
                                    
                                        <div class="card-body">

                                            <div class="form-group">
                                                <label for="petugas_NIP">NIP</label>
                                                <input type="number" name="petugas_NIP" class="form-control" >
                                            </div>

                                            <div class="form-group">
                                                <label for="petugas_nama">Nama</label>
                                                <input type="text" name="petugas_nama" class="form-control" >
                                            </div>

                                            <div class="form-group">
                                                <label for="petugas_email">Email</label>
                                                <input type="text" name="petugas_email" class="form-control" >
                                            </div>

                                            <div class="form-group">
                                                <label for="petugas_nohp">No HP</label>
                                                <input type="number" name="petugas_nohp" class="form-control" >
                                            </div>

                                            <div class="form-group">
                                                <label for="petugas_password">Password</label>
                                                <input type="text" name="petugas_password" class="form-control" >
                                            </div>

                                            <div class="form-group">
                                                <label for="petugas_img_profil">Foto Profil</label>
                                                <input type="file" name="petugas_img_profil" class="form-control"  required>
                                            </div>

                                            <div class="form-group">
                                                <label>Level</label>
                                                <select class="custom-select" name="petugas_level">
                                                    <option value="1">Admin</option>
                                                    <option value="2">Penulis</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="card-footer">
                                            <a href="<?= base_url('admin/Petugas')?>">
                                                <button type="button" class="btn btn-danger">Cancel</button>
                                            </a>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- /Page Content -->
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
        
        <!-- <script>
            $(document).ready(function(){
                $('#add').on('click', function(e){
                    console.log("add");
                    e.preventDefault();

                    var myformData = new FormData();
                    myformData.append('petugas_NIP', $("#petugasNIP").val());
                    myformData.append('petugas_nama', $("#petugasNama").val());
                    myformData.append('petugas_email', $("#petugasEmail").val());
                    myformData.append('petugas_nohp', $("#petugasNohp").val());
                    myformData.append('petugas_password', $("#petugasPassword").val());
                    myformData.append('petugas_img_profil', $('#petugas_img_profil')[0].files[0]);
                    myformData.append('petugas_level', $("#petugasLevel").val());
                    console.log(myformData);

                    $.ajax({
                        type : "POST",
                        url : "<?php echo base_url('admin/Petugas/addPetugas')?>",
                        dataType : "JSON",
                        data : myformData,
                        contentType : false,
                        processData : false,
                        cache : false,
                        enctype : 'multipart/form-data',

                        success: function(response){
                            console.log(response);
                            if(response.status == 'success'){
                                
                                Swal.fire({
                                    icon: 'success',
                                    title: 'File Berhasil Di Simpan!',
                                    text: 'You clicked the button!',
                                }).then(function(){
                                    window.location.assign("<?php echo base_url();?>admin/Petugas/");
                                });
                            }
                        }

                    });
                    return false;
                });
            });
        </script> -->
        
    </body>
</html>