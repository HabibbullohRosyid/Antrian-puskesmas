<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Antrian Puskesmas</title>
    <!-- Font Awesome icons (free version)-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('asset/css/styles.css') ?>" rel="stylesheet">
    <!-- Fonts CSS-->
    <link rel="stylesheet" href="<?= base_url('asset/css/heading.css') ?>">">
    <link rel="stylesheet" href="<?= base_url('asset/css/body.css') ?>">">
</head>
<?= $this->section("content") ?>

<body id="page-top">
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">ANTRIAN PUSKESMAS</a>
            <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" onclick="save()" title="<?= lang("App.new") ?>">REGISTRASI</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">ANTRIAN HARI INI</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">TENTANG KAMI</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded  btn-success" href="<?= base_url("login") ?>">LOGIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Heading-->
            <h1 class="masthead-heading mb-0">ANTRIAN HARI INI</h1>
            <h1 class="masthead-heading mb-0">



            </h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="pre-wrap masthead-subheading font-weight-light mb-0">POLI UMUM | POLI GIGI | POLI ANAK</p>
            <p class="pre-wrap masthead-subheading font-weight-light mb-0">POLI UMUM | POLI GIGI | POLI ANAK</p>
        </div>

        <div class="row justify-content-center">
            <button type="button" class="btn float-right btn-success" onclick="save()" title="<?= lang("App.new") ?>"> <i class="fa fa-plus"></i> <?= lang('Daftar Sekarang') ?></button>
        </div>
    </header>
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <div class="text-center">
                <h2 class="page-section-heading text-secondary mb-0 d-inline-block">DATA ANTRIAN HARI INI</h2>
            </div>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Items-->

                <!-- /.card-header -->
                <div class="card-body">
                    <table id="data_table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id pasien</th>
                                <th>Nama</th>
                                <th>Kategori poli</th>

                            </tr>
                        </thead>
                    </table>
                </div>
                <!-- /.card-body -->

                <!-- /.card -->
            </div>
        </div>

    </section>

    <section class="page-section bg-primary text-white mb-0" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <div class="text-center">
                <h2 class="page-section-heading text-secondary d-inline-block mb-0"></h2>
            </div>
            <!-- Icon Divider-->
            <div class="text-center">
                <h2 class="page-section-heading text-secondary mb-0 d-inline-block">ABOUT US</h2>
            </div>
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Content-->
            <div class="row justify-content-center">

                <div class="row">
                    <div class="col-lg-4 ml-auto">
                        <p class="pre-wrap lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris laoreet mauris orci, non tincidunt massa ultrices at. Curabitur interdum purus nisi, porttitor mattis nunc pretium a.</p>
                    </div>
                    <div class="col-lg-4 mr-auto">
                        <p class="pre-wrap lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse blandit viverra nulla. Praesent leo neque, ultrices vel tellus id, aliquam consectetur nibh. Suspendisse iaculis ac metus in feugiat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ADD modal content -->
    <div id="data-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="text-center bg-info p-3" id="model-header">
                    <h4 class="modal-title text-white" id="info-header-modalLabel"></h4>
                </div>
                <div class="modal-body">
                    <form id="data-form" class="pl-3 pr-3">
                        <div class="row">
                            <input type="hidden" id="id_pasien" name="id_pasien" class="form-control" placeholder="Id pasien" maxlength="10" required>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="no_identitas" class="col-form-label"> No identitas: <span class="text-danger">*</span> </label>
                                    <input type="text" id="no_identitas" name="no_identitas" class="form-control" placeholder="No identitas" minlength="0" maxlength="25" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="nama" class="col-form-label"> Nama: <span class="text-danger">*</span> </label>
                                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" minlength="0" maxlength="150" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="jenis_kelamin" class="col-form-label"> Jenis kelamin: <span class="text-danger">*</span> </label>
                                    <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control" placeholder="Jenis kelamin" minlength="0" maxlength="&#39;Perempuan&#39;" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="tgl_lahir" class="col-form-label"> Tgl lahir: <span class="text-danger">*</span> </label>
                                    <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" dateISO="true" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="alamat" class="col-form-label"> Alamat: <span class="text-danger">*</span> </label>
                                    <textarea cols="40" rows="5" id="alamat" name="alamat" class="form-control" placeholder="Alamat" minlength="0" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="no_telp" class="col-form-label"> No telp: <span class="text-danger">*</span> </label>
                                    <input type="number" id="no_telp" name="no_telp" class="form-control" placeholder="No telp" minlength="0" maxlength="15" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="kategori_poli" class="col-form-label"> Kategori poli: <span class="text-danger">*</span> </label>
                                    <input type="text" id="kategori_poli" name="kategori_poli" class="form-control" placeholder="Kategori poli" minlength="0" maxlength="25" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-success mr-2" id="form-btn"><?= lang("App.save") ?></button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><?= lang("App.cancel") ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- /ADD modal content -->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="mb-4">LOCATION</h4>
                    <p class="pre-wrap lead mb-0 h5"> Jl. Raya Wonosobo - Kertek KM 01, Krakalsantren, Karangluhur, Kec. Kertek, Kabupaten Wonosobo, Jawa Tengah 56371</p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="mb-4">KUNJUNGI</h4><a class="btn btn-outline-light btn-social mx-1" href="https://www.github.com/"><i class="fas fa-share-alt"></i></a>
                    <p class="pre-wrap lead mb-0 h5">Github</p>

                </div>

            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <section class="copyright py-4 text-center text-white">
        <div class="container"><small class="pre-wrap">Copyright © Your Website 2023 </small></div>
    </section>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
    <div class="scroll-to-top d-lg-none position-fixed"><a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="https://cdnjs.com/libraries/jqBootstrapValidation"></script>
    <script src="<?= base_url('assets/mail/contact_me.js') ?>"></script>
    <!-- Core theme JS-->

    <script src="<?= base_url('asset/js/scripts.js') ?>"></script>
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="<?= base_url('asset/js/jquery-3.6.0.min.js') ?>"></script>
    <!-- Bootstrap 5 with Popper.js-->
    <script src="<?= base_url('asset/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url('asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src=" <?= base_url('asset/js/adminlte.min.js') ?>"></script>

    <!-- Page Global Script -->
    <!-- Toggle Button -->
    <script src="<?= base_url('asset/js/bootstrap4-toggle.min.js') ?>"></script>

    <!-- SweetAlert2 -->
    <script src="<?= base_url('asset/js/sweetalert2.all.min.js') ?>"></script>
    <!-- jquery-validation -->
    <script src="<?= base_url('asset/js/jquery.validate.min.js') ?>"></script>

    <!-- DataTables Full Function -->
    <script src="<?= base_url("asset/plugins/datatables/DataTables-1.11.3/js/jquery.dataTables.min.js"); ?>" type="text/javascript"></script>
    <script src="<?= base_url("asset/plugins/datatables/DataTables-1.11.3/js/dataTables.bootstrap5.min.js"); ?>" type="text/javascript"></script>
    <script src="<?= base_url("asset/plugins/datatables/Buttons-2.0.1/js/dataTables.buttons.min.js"); ?>" type="text/javascript"></script>
    <script src="<?= base_url("asset/plugins/datatables/JSZip-2.5.0/jszip.min.js"); ?>" type="text/javascript"></script>
    <script src="<?= base_url("asset/plugins/datatables/Buttons-2.0.1/js/buttons.print.min.js"); ?>" type="text/javascript"></script>
    <script src="<?= base_url("asset/plugins/datatables/Buttons-2.0.1/js/buttons.html5.min.js"); ?>" type="text/javascript"></script>
    <script src="<?= base_url("asset/plugins/datatables/Responsive-2.2.9/js/dataTables.responsive.min.js"); ?>" type="text/javascript"></script>
    <script src="<?= base_url("asset/plugins/datatables/Responsive-2.2.9/js/responsive.bootstrap5.min.js"); ?>" type="text/javascript"></script>

    <script>
        // dataTables
        $(function() {
            var table = $('#data_table').removeAttr('width').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "scrollY": '45vh',
                "scrollX": true,
                "scrollCollapse": false,
                "responsive": false,
                "ajax": {
                    "url": '<?php echo base_url($controller . "/getAll") ?>',
                    "type": "POST",
                    "dataType": "json",
                    async: "true"
                }
            });
        });

        var urlController = '';
        var submitText = '';

        function getUrl() {
            return urlController;
        }

        function getSubmitText() {
            return submitText;
        }

        function save(id_pasien) {
            // reset the form 
            $("#data-form")[0].reset();
            $(".form-control").removeClass('is-invalid').removeClass('is-valid');
            if (typeof id_pasien === 'undefined' || id_pasien < 1) { //add
                urlController = '<?= base_url($controller . "/add") ?>';
                submitText = '<?= lang("App.save") ?>';
                $('#model-header').removeClass('bg-info').addClass('bg-success');
                $("#info-header-modalLabel").text('<?= lang("App.add") ?>');
                $("#form-btn").text(submitText);
                $('#data-modal').modal('show');
            } else { //edit
                urlController = '<?= base_url($controller . "/edit") ?>';
                submitText = '<?= lang("App.update") ?>';
                $.ajax({
                    url: '<?php echo base_url($controller . "/getOne") ?>',
                    type: 'post',
                    data: {
                        id_pasien: id_pasien
                    },
                    dataType: 'json',
                    success: function(response) {
                        $('#model-header').removeClass('bg-success').addClass('bg-info');
                        $("#info-header-modalLabel").text('<?= lang("App.edit") ?>');
                        $("#form-btn").text(submitText);
                        $('#data-modal').modal('show');
                        //insert data to form
                        $("#data-form #id_pasien").val(response.id_pasien);
                        $("#data-form #no_identitas").val(response.no_identitas);
                        $("#data-form #nama").val(response.nama);
                        $("#data-form #jenis_kelamin").val(response.jenis_kelamin);
                        $("#data-form #tgl_lahir").val(response.tgl_lahir);
                        $("#data-form #alamat").val(response.alamat);
                        $("#data-form #no_telp").val(response.no_telp);
                        $("#data-form #kategori_poli").val(response.kategori_poli);

                    }
                });
            }
            $.validator.setDefaults({
                highlight: function(element) {
                    $(element).addClass('is-invalid').removeClass('is-valid');
                },
                unhighlight: function(element) {
                    $(element).removeClass('is-invalid').addClass('is-valid');
                },
                errorElement: 'div ',
                errorClass: 'invalid-feedback',
                errorPlacement: function(error, element) {
                    if (element.parent('.input-group').length) {
                        error.insertAfter(element.parent());
                    } else if ($(element).is('.select')) {
                        element.next().after(error);
                    } else if (element.hasClass('select2')) {
                        //error.insertAfter(element);
                        error.insertAfter(element.next());
                    } else if (element.hasClass('selectpicker')) {
                        error.insertAfter(element.next());
                    } else {
                        error.insertAfter(element);
                    }
                },
                submitHandler: function(form) {
                    var form = $('#data-form');
                    $(".text-danger").remove();
                    $.ajax({
                        // fixBug get url from global function only
                        // get global variable is bug!
                        url: getUrl(),
                        type: 'post',
                        data: form.serialize(),
                        cache: false,
                        dataType: 'json',
                        beforeSend: function() {
                            $('#form-btn').html('<i class="fa fa-spinner fa-spin"></i>');
                        },
                        success: function(response) {
                            if (response.success === true) {
                                Swal.fire({
                                    toast: true,
                                    position: 'top-end',
                                    icon: 'success',
                                    title: response.messages,
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then(function() {
                                    $('#data_table').DataTable().ajax.reload(null, false).draw(false);
                                    $('#data-modal').modal('hide');
                                })
                            } else {
                                if (response.messages instanceof Object) {
                                    $.each(response.messages, function(index, value) {
                                        var ele = $("#" + index);
                                        ele.closest('.form-control')
                                            .removeClass('is-invalid')
                                            .removeClass('is-valid')
                                            .addClass(value.length > 0 ? 'is-invalid' : 'is-valid');
                                        ele.after('<div class="invalid-feedback">' + response.messages[index] + '</div>');
                                    });
                                } else {
                                    Swal.fire({
                                        toast: false,
                                        position: 'bottom-end',
                                        icon: 'error',
                                        title: response.messages,
                                        showConfirmButton: false,
                                        timer: 3000
                                    })

                                }
                            }
                            $('#form-btn').html(getSubmitText());
                        }
                    });
                    return false;
                }
            });

            $('#data-form').validate({

                //insert data-form to database

            });
        }



        function remove(id_pasien) {
            Swal.fire({
                title: "<?= lang("App.remove-title") ?>",
                text: "<?= lang("App.remove-text") ?>",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '<?= lang("App.confirm") ?>',
                cancelButtonText: '<?= lang("App.cancel") ?>'
            }).then((result) => {

                if (result.value) {
                    $.ajax({
                        url: '<?php echo base_url($controller . "/remove") ?>',
                        type: 'post',
                        data: {
                            id_pasien: id_pasien
                        },
                        dataType: 'json',
                        success: function(response) {

                            if (response.success === true) {
                                Swal.fire({
                                    toast: true,
                                    position: 'top-end',
                                    icon: 'success',
                                    title: response.messages,
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then(function() {
                                    $('#data_table').DataTable().ajax.reload(null, false).draw(false);
                                })
                            } else {
                                Swal.fire({
                                    toast: false,
                                    position: 'bottom-end',
                                    icon: 'error',
                                    title: response.messages,
                                    showConfirmButton: false,
                                    timer: 3000
                                })
                            }
                        }
                    });
                }
            })
        }
    </script>
</body>

</html>