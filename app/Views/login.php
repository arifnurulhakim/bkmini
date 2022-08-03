<!DOCTYPE html>
<html lang="en">
<?php $url = current_url(true); ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>login </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/vendors/simple-line-icons/css/simple-line-icons.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url() ?>/public/images/favicon.png" />

    <script src="<?php echo base_url() ?>/public/js/jquery/jquery.min.js"></script>
</head>

<body class="bg-gradient-primary justify-content-center">

    <div class="container justify-content-center">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-md-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col">
                                <div class="p-5 text-center">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <select id="idUser" class="form-control text-dark">
                                                    <?php for ($i = 0; $i < count($user); $i++) {
                                                        echo "<option value='" . $user[$i]["id"] . "'>" . $user[$i]["nama"] . "</option>";
                                                    } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="password" id="pass" class="form-control form-control-user">
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-user btn-block" onclick="login()" id="simpanTransaksi">Log in</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url() ?>/public/js/jquery/jquery.min.js"></script>
    <script>
        function login() {
            idUser = $("#idUser").val()
            pass = $("#pass").val()

            if ($("#pass").val() == "") {
                $("#pass").focus();
            } else {
                $.ajax({
                    type: 'POST',
                    data: 'idUser=' + idUser + '&pass=' + pass,
                    url: '<?= base_url() ?>/pesan/auth',
                    dataType: 'json',
                    success: function(data) {
                        if (data == "") {
                            window.location.href = "pesan";
                        } else {
                            $("#errorLogin").html(data)
                        }
                    }
                });
            }
        }
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Plugin js for this page -->
    <script src="<?= base_url() ?>/public/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?= base_url() ?>/public/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url() ?>/public/js/off-canvas.js"></script>
    <script src="<?= base_url() ?>/public/js/hoverable-collapse.js"></script>
    <script src="<?= base_url() ?>/public/js/settings.js"></script>
    <script src="<?= base_url() ?>/public/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
</body>

</html>