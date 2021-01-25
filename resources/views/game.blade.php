<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ env('APP_NAME') }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https:/fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('lte') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('lte') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('lte') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('lte') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lte') }}/dist/css/adminlte.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{ asset('lte') }}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper" style="background-image: url('img/bgg.jpg')">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white" style="background-color: #F4F6F9; border: 0">
    <div class="container">

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            {{-- <i class="fa fa-sign-out" aria-hidden="true"></i> --}}
            <h1 class="col-lg-12 float-right" id="nyawa" style="color: red;"><i class="fas fa-heart mr-1"></i><i class="fas fa-heart mr-1"></i><i class="fas fa-heart"></i></h1>
          </a>
        </li>
        <button class="btn btn-app" id="tbscore" type="button" style="border-radius: 100px; background-color: #00C6E9;border: 5px solid #166B26;" data-toggle="modal" data-target="#modal-default"><i class="fas fa-trophy"></i></button>
        <button class="btn btn-app" id="sound" type="button" style="border-radius: 100px; background-color: #00C6E9;border: 5px solid #166B26;" ><i class="fas fa-volume-mute"></i></button>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-5">
          <div class="col-sm-6">
            {{-- <h1 class="m-0"> Top Score Player</h1> --}}
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
        <div class="col-lg-12 d-flex justify-content-center row">

            <div class="card col-lg-10" style="background-color: #00C803; height: 400px;  border: 10px solid #166B26; border-radius: 50px ">
              <div class="card-body">
                  <div class="col-lg-12" style="background-color: #00C6E9; border-radius: 20px; margin-top: -50px; border: 5px solid #166B26;">
                        <h1 class="col-lg-12 text-center" id="skor">0</h1>
                    </div>
                <h4 class="col-lg-12 text-center mt-4" id="deskrips"><b></b></h4>
                <h1 class="col-lg-12 text-center mt-4" id="showkata"><b></b></h1>
                <div class="form-group mt-5 col-lg-12 d-flex justify-content-center">
                    <input type="text" class="form-control col-lg-4" placeholder="Masukan Jawban" id="jawaban" style="border: 5px solid #166B26; border-radius: 10px;" required>
                </div>
                <audio id="oo" src="{{ asset('sound/oo.mp3') }}" preload="auto"></audio>
                <audio id="bg" src="{{ asset('sound/bg.mp3') }}" preload="auto" autoplay loop></audio>
              </div>
            </div>
            <button type="button" class="btn col-lg-11" id="check" style="margin-top: -50px; background-color: #FC8716; border-radius: 20px; border: 10px solid #166B26; color: #166B26;"><b>CHECK JAWABAN</b></button>
          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  {{-- <footer class="main-footer"> --}}
    <!-- To the right -->
    {{-- <div class="float-right d-none d-sm-inline">
      {{ env('APP_NAME') }}
    </div> --}}
    <!-- Default to the left -->
    {{-- <strong>Copyright &copy; 2014-2020 <a href="https:/adminlte.io">AdminLTE.io</a>.</strong> All rights reserved. --}}
  {{-- </footer> --}}
</div>
<!-- ./wrapper -->

<div class="modal fade" id="modal-default">
<div class="modal-dialog">
    <div class="modal-content">
    {{-- <div class="modal-header">
        <h4 class="modal-title">Default Modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div> --}}
    <div class="modal-body">

            <table id="score" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Nama</th>
                    <th>Skor</th>
                    <th>Tanggal</th>
                </tr>
                </thead>
                <tbody>
                    {{-- <tr>
                        <td>Aa</td>
                        <td>2000</td>
                        <td>01/25/2021</td>
                    </tr> --}}
                </tbody>
            </table>

    </div>
    {{-- <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
    </div> --}}
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('lte') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('lte') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('lte') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('lte') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('lte') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('lte') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('lte') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('lte') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('lte') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('lte') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('lte') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('lte') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('lte') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('lte') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('lte') }}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('lte') }}/dist/js/demo.js"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('lte') }}/plugins/sweetalert2/sweetalert2.min.js"></script>

<script src="{{ asset('data') }}/kata.js"></script>
<script>
  $(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var bg = document.getElementById("bg");
  });


  var kat = ranKat();
  var skor = 0;
  var nyawa = 3;

  showKat();
  desk(kat);
  $('#check').click(function () {
    if($("#jawaban").val() == null || $("#jawaban").val() == ''){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Isi Jawaban Nya Dulu Yah !',
        })
    }else{
        $('#showkata').fadeOut(function () {
        if($("#jawaban").val().toLowerCase() != kat.toLowerCase()){
            $("#jawaban").val('');
            kat = ranKat();
            desk(kat);
            oo.play();
            $(".fa-heart:last").remove();
            nyawa -= 1;
            if(nyawa == 0){
                Swal.fire({
                    title: 'Permainan Selesai !, Masukan Nama Untuk Menyimpan Score',
                    input: 'text',
                    inputAttributes: {
                        autocapitalize: 'off'
                    },
                    showCancelButton: false,
                    confirmButtonText: 'Simpan',
                    showLoaderOnConfirm: true,
                    preConfirm: (name) => {
                        console.log(name+' Score = '+skor);
                        let data = {
                            'nama' : name,
                            'score' : skor,
                        };
                        return fetch(
                            '{{ env("APP_URL") }}/api/score',{
                                method : 'POST',
                                headers : {
                                    'Content-type' : 'application/json'
                                },
                                body : JSON.stringify(data)
                            }
                        )
                        .then(response => {
                            if (!response.ok) {
                            throw new Error(response.statusText)
                            }
                            return response.json()
                        })
                        .catch(error => {
                            Swal.showValidationMessage(
                            `Request failed: ${error}`
                            )
                        });
                    },
                    allowOutsideClick: false
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire({
                            title: 'Mulai Ulang ?',
                            showDenyButton: false,
                            showCancelButton: false,
                            confirmButtonText: 'Ya',
                            denyButtonText: 'Tidak',
                            }).then((result) => {
                            /* Read more about isConfirmed, isDenied below */
                                if (result.isConfirmed) {
                                    nyawa = 3;
                                    for (i = 1; i <= nyawa; i++) {
                                        if(i == nyawa){
                                            $("#nyawa").append('<i class="fas fa-heart"></i>');
                                        }else{
                                            $("#nyawa").append('<i class="fas fa-heart mr-1"></i>');
                                        }
                                    }
                                    $('#skor').html('0');
                                } else if (result.isDenied) {
                                    window.close();
                                }
                            });
                        }
                    });
            }
        }else{
            skor += 10;
            $("#jawaban").val('');
            kat = ranKat();
            desk(kat);
        }
        showKat();
        $('#skor').html(skor);
    });
    }
  });

    $('#tbscore').click(function () {
    $('#score').DataTable({
            "order": [[ 1, "desc" ]],
            processing: true,
            serverSide: true,
            ajax: '{{ env("APP_URL") }}/api/dtt',
            columns: [
                { data: 'name', name: 'name' },
                { data: 'score', name: 'score' },
                { data: 'tanggal', name: 'tanggal' }
            ]
        });
    });

function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2)
        month = '0' + month;
    if (day.length < 2)
        day = '0' + day;

    return [year, month, day].join('-');
}

  function showKat(){
      var nums = kat.split(''),
            ranNums = [],
            i = nums.length,
            j = 0;
        while (i--) {
            j = Math.floor(Math.random() * (i+1));
            ranNums.push(nums[j]);
            nums.splice(j,1);
        }
    $('#showkata').html(ranNums.join('').bold()).fadeIn();
  }
  function ranKat(){
      return kata[Math.floor(Math.random() * kata.length)];
  }

  function desk(kata){
     $.ajax({
        method: 'POST',
        url	: "{{ env('APP_URL') }}/api/kata",
        data: {kata : kata},
        success	: function(data){
            return $('#deskrips').html(data.data.toUpperCase().bold()).fadeIn();
        }
    });
  }
    //Sound setting
    $('#sound').click(function () {
        if(bg.muted){
            bg.muted = false;
            $(this).html('<i class="fas fa-volume-mute"></i>');
        }else{
            bg.muted = true;
            $(this).html('<i class="fas fa-volume-up"></i>');
        }
    });
</script>
</body>
</html>
