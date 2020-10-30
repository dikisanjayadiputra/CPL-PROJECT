<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Entry New Shipping</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/favicon.png" type="image/png" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
</head>
<body class="hold-transition sidebar-mini text-sm">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link" href="logout.php" role="button" data-toggle="modal" data-target="#logoutModal">
        Logout
    </a>
    </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="img/logocpl.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Pt.Citra Perisai Lintasindo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="halamanadmin.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard Admin
                <i class="right fas fa-angle"></i>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Entry Master Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="newcustomer.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Entry New Customer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="publicrate.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Entry Public Rate</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="manifest.php" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Entry Manifest</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pengiriman.php" class="nav-link active">
              <i class="nav-icon fas fa-file"></i>
              <p>Entry New Shipping</p>
            </a>
          </li> <li class="nav-item">

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="tabelcustomer.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Customer Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Public Rate Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tabelmanifest.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manifest Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tabelpengiriman.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Shipping Tables</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Entry Shipping Public Rate</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="halamanadmin.php">Home</a></li>
              <li class="breadcrumb-item active">New Shipping</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">New Shipping</h3>
      </div>
      <!-- /.card-body -->
          <form role="form" class="needs-validation" action="pengiriman-aksi.php" method="post" novalidate>
              <div class="card-body">
              <div class="form-group">
                <div class="form-group">
                  <label for="no_airwaybill">No Airwaybill</label>
                  <input type="text" class="form-control" name="no_airwaybill" id="no_airwaybill" placeholder="Enter No Airwaybill" onkeyup="this.value = this.value.toUpperCase()" required>
                  <div class="invalid-feedback">
                    Please Fill Out This Field
                  </div>
                </div>
                <div class="form-group">
                <label for="status">Type Of Service</label>
                <select class="form-control custom-select" name="status" id="status" required>
                  <option selected disabled>Select one</option>
                    <option value="PICK UP">PICK UP</option>
                    <option value="MANIFEST">MANIFEST</option>
                    <option value="ON DELIVERY">ON DELIVERY</option>
                    <option value="ARRIVED AT DESTINATION">ARRIVED AT DESTINATION</option>
                    <option value="SUCCESS DELIVERY">SUCCESS DELIVERY</option>
                    <option value="PENDING">PENDING</option>
                    <option value="RETURN">RETURN</option>
                </select>
                </div>
                <div class="form-group">
                <label for="nama_perusahaan">Shippers's Name</label>
                <?php
                include "koneksi.php";
                ?>
                <select class="form-control custom-select" name="nama_perusahaan" id="nama_perusahaan" onchange='changeValue(this.value)' required>
                  <option selected disabled>Select one</option>
                  <?php
                    $query = mysql_query("SELECT * FROM tb_customer order by nama_perusahaan asc");
                    $a = "var alamat = new Array();\n;";
                    $b = "var telp_perusahaan = new Array();\n;";
                    while($data_customer = mysql_fetch_array($query)){
                        echo '<option name="nama_perusahaan" value="'.$data_customer['nama_perusahaan'].'">'.$data_customer['nama_perusahaan'].'</option>';
                        $a .= "alamat['".$data_customer['nama_perusahaan']."'] = {alamat:'".addslashes($data_customer['alamat'])."'};\n";
                        $b .= "telp_perusahaan['".$data_customer['nama_perusahaan']."'] = {telp_perusahaan:'".addslashes($data_customer['telp_perusahaan'])."'};\n";
                      }
                        ?>
                </select>
                </div>
                <div class="form-group">
                  <label for="alamat">Address</label>
                  <textarea class="form-control" row="3" name="alamat" id="alamat" placeholder="Enter Company Address" readonly required></textarea>
                  <div class="invalid-feedback">
                    Please Fill Out This Field
                  </div>
                </div>
                <div class="form-group">
                  <label for="telp_perusahaan">Company Phone Number</label>
                  <input type="text" class="form-control" name="telp_perusahaan" id="telp_perusahaan" placeholder="Enter Company Phone Number" readonly required>
                  <div class="invalid-feedback">
                    Please Fill Out This Field
                  </div>
                </div>
                <script type="text/javascript">
                    <?php
                    echo $a;
                    echo $b; ?>
                    function changeValue(id){
                            document.getElementById('alamat').value = alamat[id].alamat;

                            document.getElementById('telp_perusahaan').value = telp_perusahaan[id].telp_perusahaan;
                    };
                </script>
                <div class="form-group">
                  <label for="nama_penerima">Attention Of</label>
                  <input type="text" class="form-control" name="nama_penerima" id="nama_penerima" placeholder="Enter Attention Of" required>
                  <div class="invalid-feedback">
                    Please Fill Out This Field
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat_penerima">Address</label>
                  <input type="text" class="form-control" name="alamat_penerima" id="alamat_penerima" placeholder="Enter Attention Address" required>
                  <div class="invalid-feedback">
                    Please Fill Out This Field
                  </div>
                </div>
                <div class="form-group">
                  <label for="telp_penerima">Attention Phone Number</label>
                  <input type="text" class="form-control" name="telp_penerima" id="telp_penerima" placeholder="Enter Attention Phone Number" required>
                  <div class="invalid-feedback">
                    Please Fill Out This Field
                  </div>
                </div>
                <div class="form-group">
                <label for="servis">Type Of Service</label>
                <select class="form-control custom-select" name="servis" id="servis" required>
                  <option selected disabled>Select one</option>
                    <option value="Road">Road</option>
                    <option value="Sky">Sky</option>
                    <option value="Sea">Sea</option>
                </select>
                </div>
                <div class="form-group">
                  <label for="kota_asal">Origin</label>
                  <select class="form-control custom-select" name="kota_asal" id="kota_asal" required>
                  <option selected disabled>Select one</option>
                    <option value="JAKARTA">JAKARTA</option>
                    <option value="JAKARTA">BEKASI</option>
                  </select>
                  <div class="invalid-feedback">
                    Please Fill Out This Field
                  </div>
                </div>
                <div class="form-group">
                  <label for="kota_tujuan">Destination</label>
                  <input type="text" class="form-control" name="kota_tujuan" id="kota_tujuan" placeholder="Enter Destination" onkeyup="this.value = this.value.toUpperCase()" required>
                  <div class="invalid-feedback">
                    Please Fill Out This Field
                  </div>
                </div>
                <div class="form-group-perhitungan">
                  <td>
                  <label for="harga">Price</label>
                  <input type="text" class="form-control" name="harga" id="harga" placeholder="Enter Price" required>
                  <label for="berat">Weight</label>
                  <input type="text" class="form-control" name="berat" id="berat" placeholder="Enter Weight" required>
                  <label for="total">Total</label>
                  <input type="text" class="form-control" name="total" id="total" placeholder="Total" readonly required>
                  <label for="harga2">Price</label>
                  <input type="text" class="form-control" name="harga2" id="harga2" placeholder="Enter Price">
                  <label for="asuransi">Assurance(%)</label>
                  <input type="text" class="form-control" name="asuransi" id="asuransi" placeholder="Assurance">
                  <label for="total2">Total</label>
                  <input type="text" class="form-control" name="total2" id="total2" placeholder="Total" readonly>
                  <label for="harga3">Subtotal</label>
                  <input type="text" class="form-control" name="total3" id="total3" placeholder="Subtotal" required>
                  </td>
                  <div class="invalid-feedback">
                    Please Fill Out This Field
                  </div>
                </div>
                <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                  <script type ="text/javascript">
                    $(".form-group-perhitungan").keyup(function(){
                      var harga = parseInt($("#harga").val())
                      var berat = parseInt($("#berat").val()) 
                      var harga2 = parseInt($("#harga2").val())
                      var asuransi = parseInt($("#asuransi").val())

                      var total = harga * berat;
                      $("#total").attr("value",total)
                      
                      var total2 = harga2 * asuransi / 100;
                      $("#total2").attr("value",total2)

                      var harga3 = total + total2;
                      $("#total3").attr("value",harga3)
                      
                      });
                  </script>
              </div>
            </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
    <strong>Copyright &copy; 2019 Cplintasindo.</strong> All rights
    reserved.
    </div> 
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
 <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php ">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Toastr -->
<script src="../plugins/toastr/toastr.min.js"></script>
<!-- SweetAlert2 -->
<script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Page script -->    
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<script>
 $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.toastrDefaultSuccess').click(function() {
    toastr.success('Entry Success')
    });
  });
</script>
</body>
</html>
