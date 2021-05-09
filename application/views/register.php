<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte3/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte3/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte3/dist/css/adminlte.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte3/plugins/sweetalert2/sweetalert2.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte3/plugins/toastr/toastr.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="<?php echo base_url(); ?>" class="h1"><b>SIKAP</b></a>
            </div>
            <div class="card-body">
                <form id="form" action="<?= base_url("do_register") ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="no_pegawai" placeholder="No Pegawai">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password2" placeholder="Ulangi Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <!-- <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label> -->
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <p class="mb-0">
                    <a href="login" class="text-center">Login</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/adminlte3/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>assets/adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/adminlte3/dist/js/adminlte.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?php echo base_url(); ?>assets/adminlte3/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script>
        $(function() {
            // Summernote
            $('.textarea').summernote({
                height: 250
            }).on('summernote.change', function(we, contents, $editable) {
                $(this).val(contents);
            });
        })

        const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            showConfirmButton: false,
            timer: 5000
        });

        $('form[id=form]').submit(function(e) {
            e.preventDefault();

            $('.form-group').removeClass('has-error'); // remove the error class
            $('.help-block').remove(); // remove the error text
            $('.alert-success').remove();

            // var formData = {};

            // var datas = $(this).serializeArray();
            // datas.map(function(item, index, array) {
            //   formData[item.name] = item.value;
            // });

            // alert("Submitted");
            // alert(JSON.stringify(formData));

            var formUrl = "<?= base_url("do_register") ?>";

            // process the form
            $.ajax({
                    type: 'POST',
                    url: formUrl,
                    data: new FormData(this), //penggunaan FormData
                    dataType: 'json', // what type of data do we expect back from the serverss
                    processData: false,
                    contentType: false,
                    cache: false,
                    async: false,
                    error: function(data) {
                        alert("AJAX ERROR")
                        alert(JSON.stringify(data));
                    }
                })

                // using the done promise callback
                .done(function(data) {

                    // here we will handle errors and validation messages
                    if (!data.success) {

                        Toast.fire({
                            type: 'error',
                            title: data.message
                        });

                    } else {

                        // ALL GOOD! just show the success message!
                        Toast.fire({
                            type: 'success',
                            title: data.message
                        });

                        setTimeout(function() {
                            window.location.href = "<?= base_url() ?>"; //will redirect to any page
                        }, 2500); //will call the function after 2.5 secs.

                    }
                });
        });
    </script>
</body>

</html>