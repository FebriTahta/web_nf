
@extends('layouts.be.master')

@section('head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css"/>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    
                    <ul class="breadcrumb padding-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Master Data</a></li>
                        <li class="breadcrumb-item active">Kategori</li>
                    </ul>
                </div>            
                <div class="col-lg-7 col-md-7 col-sm-12">
                    
                </div>
            </div>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>LIST DATA</strong> </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu slideUp">
                                    <li>
                                        <a href="#defaultModal" data-toggle="modal" data-target="#defaultModal">Karegori baru</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="body">
                        <div id="errList" class="text-uppercase"></div>
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead style="text-transform: uppercase">
                                    <tr>
                                        <th>Kategori</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody style="text-transform: capitalize;">
                                    {{--  --}}
                                </tbody>
                                <tfoot style="text-transform: uppercase">
                                    <tr>
                                        <th>Kategori</th>
                                        <th>Option</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Dialogs ========= --> 
<!-- Default Size -->
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Tambah Kategori Baru</h4>
            </div>
            <form id="formaddkategori">@csrf
                <div class="modal-body"> 
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Nama Kategori" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" id="btnsimpan" class="text-white btn bg-blue waves-effect btn-round" value="SIMPAN">
                    <button type="button" class="btn btn-danger btn-simple btn-round waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modalhapus" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">
                <div class="modal-header">
                    <h4 class="title" style="text-decoration-color: red; text-transform: uppercase">Hapus Kategori</h4>
                </div>
            </div>
            <form id="formhapuskategori">@csrf
            <div class="card" style="border-block: solid">
                
                    <div class="modal-body"> 
                        <input type="hidden" name="id" id="id_del">
                        <p>Yakin akan menghapus <strong> kategori :</strong></p> 
                        <p id="kategori_name"></p>
                    </div>
                
            </div>
            <div class="modal-footer">
                <input type="submit" id="btnhapus" class="text-white btn bg-pink waves-effect btn-round" value="HAPUS">
                <button type="button" class="btn btn-danger btn-simple btn-round waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('script')
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>
    <script>
    $(document).ready(function(){
      var table = $('#example').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('page.master.kategori_list') }}",
          columns: [
              {data: 'name', name: 'name'},
              {
                  data: 'option', 
                  name: 'option', 
                  orderable: true, 
                  searchable: true
              },
          ]
      });
    });

    $('#formaddkategori').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
        type:'POST',
        url: "{{ route('page.master.kategori_post')}}",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        beforeSend:function(){
            $('#btnsimpan').attr('disabled','disabled');
            $('#btnsimpan').val('Process');
        },
        success: function(response){
            if(response.status == 200)
            {
                // $("#formupdateproduct")[0].reset();
                var oTable = $('#example').dataTable();
                $("#formaddkategori")[0].reset();
                oTable.fnDraw(false);
                $('#btnsimpan').val('SIMPAN');
                $('#btnsimpan').attr('disabled',false);
                $('#defaultModal').modal('hide');
                toastr.success(response.message);
            }else{
                // $("#formupdateproduct")[0].reset();
                $('#btnsimpan').val('SIMPAN');
                $('#btnsimpan').attr('disabled',false);
                $('#defaultModal').modal('hide');
                toastr.error(response.message);
                $('#errList').html("");
                $('#errList').addClass('alert alert-danger');
                $.each(response.errors, function(key, err_values) {
                    $('#errList').append('<div>'+err_values+'</div>');
                });
            }
        },
            error: function(data)
            {
            console.log(data);
            }
        });
    });

    $('#modalhapus').on('show.bs.modal', function(event) {
    var button  = $(event.relatedTarget)
    var id      = button.data('id')
    var name    = button.data('name');
    var modal = $(this)
    modal.find('.modal-body #id_del').val(id);
    modal.find('.modal-body #kategori_name').html(name);
    })

    $('#formhapuskategori').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
        type:'POST',
        url: "{{ route('page.master.kategori_delete')}}",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        beforeSend:function(){
            $('#btnhapus').attr('disabled','disabled');
            $('#btnhapus').val('Process');
        },
        success: function(response){
            if(response.status == 200)
            {
                // $("#formupdateproduct")[0].reset();
                var oTable = $('#example').dataTable();
                oTable.fnDraw(false);
                $('#btnhapus').val('HAPUS');
                $('#btnhapus').attr('disabled',false);
                $('#modalhapus').modal('hide');
                toastr.success(response.message);
            }else{
                // $("#formupdateproduct")[0].reset();
                $('#btnhapus').val('Update Product');
                $('#btnhapus').attr('disabled',false);
                $('#modalhapus').modal('hide');
                toastr.error(response.message);
                $('#errList').html("");
                $('#errList').addClass('alert alert-danger');
                $.each(response.errors, function(key, err_values) {
                    $('#errList').append('<div>'+err_values+'</div>');
                });
            }
        },
            error: function(data)
            {
            console.log(data);
            }
        });
    });
    </script> 

@endsection