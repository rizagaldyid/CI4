<?= $this->extend('_layout/template') ?>

<?= $this->section('content') ?>
<!-- Content Header (Page header) -->
<section class="content-header">

</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Limbah</h3>
                    </div>

                    <!-- card header -->
                    <div class="card-body">
                        <h6><button type="button" class="btn btn-primary pull-left" id="ButtonParkir" data-attr="<?=site_url('limbah/new')?>" data-toggle="modal" data-target="#ParkirModal"><b class="fa fa-fw fa-plus"></b>Tambah</button></h6>
                        <h6><button type="button" class="btn btn-danger pull-right" id="ButtonParkir" data-attr="<?=site_url('limbah/new')?>" data-toggle="modal" data-target="#ParkirModal"><b class="fa fa-fw fa-trash"></b>Logout</button></h6>
                        <table id="example"class="table table-bordered table-striped">

                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Asal Departemen</th>
                                    <th scope="col">Nomor Handphone</th>
                                    <th scope="col">Jenis Limbah</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Lampiran</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $x =1;?>
                                <?php foreach ($dtlimbah as $dt):?>
                                    <tr>
                                        <th scope="row"><?= $x++?></th>
                                        <td><?= $dt['nama'];?></td>
                                        <td><?= $dt['departemen'];?></td>
                                        <td><?= $dt['no_hp'];?></td>
                                        <td><?= $dt['jenis_limbah'];?></td>
                                        <td><?= $dt['tgl'];?></td>
                                        <td><?= $dt['user'];?></td>
                                        <td><?= $dt['lampiran'];?></td>
                                        <td>
                                        <a href="javascript:;" id="ButtonDelMove" class="btn-success btn-sm" data-attr=<?=base_url('history/').$dt['id']?>><i class="fas fa-save"></i></a>
                                        <a href="javascript:;" id="ButtonDelParkir"class="btn-danger btn-sm" data-attr="<?=base_url('limbah/'.$dt['id']);?>"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                            </tbody>
                        </table> 

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- /.content -->
<!-- modal -->
<div class="modal fade" id="ParkirModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div id="ParkirModalBody">
                <div></div>
            </div>
        </div>
        <!-- modal content -->
    </div>
    <!-- modal dialog -->
</div>
<!-- modal -->
<script>
    $(function(){
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer:300
        });

        <?php if (session()->getFlashData('succes')){?>
            Swal.fier({
                position: 'top-end',
                icon:'success',
                title : "<?= session("succes")?>",
                showConfirmButton: false,
                timer:1500
            })
            //Toast.fire({
               // icon:'succes',
               // tittle: <?=session("succes")?>  

           // })
            <?php } ?>
    });

    //display a modal
    $(document).on('click','#ButtonParkir', function(event){
        event.preventDefault();
        let href=$(this).attr('data-attr');
        $.ajax({
            url :href ,
            beforeSend :function () {
                $('#loader').show();
            }, 
            //return the result
            success :function(result){
                $('#ParkirModal').modal("show");
                $('#ParkirModalBody').html(result).show();
            },
            complete :function(){
                $('#loader').hide();
            },
            error :function(jqXHR,textStatus,errorThrown){
                console.log(error);
                alert("page" + href + "cannnot open.Error:" + error);
                $('#loader').hide();
            },
            timeout:8000

        })
    });

    //display confirm delete

    $(document).ready(function(){
        $(document).on('click', '#ButtonDelParkir',function(event){
            event.preventDefault();
            let href=$(this).attr('data-attr');
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                icon: 'Warning',
                showCancelButton: true,
                confirmButtonColor:'#d33',
                //cancleButtonColor: '#999999',
                confirmButtonText: 'Yes ',
                focusConfirm: false,
                reverseButtons:true
            }).then((result) => {
                if(result.isConfirmed){
                    $.ajax({
                        url :href ,
                        contentType : 'application/json; charset=utf-8',
                        type : 'DELETE',
                        beforeSend : function(){
                            //lakkan apa saja sambil menunggu proses selesai di sini
                            //misal tampilkan loading
                            $(".loading").htm;("Please wait");
                        },
                        success : function(result){
                            //Swal.fire(
                            // 'Delete',
                            //Data berhasil di hapus.',
                            //'success'
                            //);
                            Swal.fire({
                                position: 'top-end',
                                icon: 'succes',
                                tittle: 'Data berhasil di hapus',
                                ShowConfirmButton:false,
                                timer: 1500
                            });
                            location.reload(true);
                            },
                            error : function(xhr,Status, err){
                                $("Terjadi error:"+ Status);
                            }
                    });  
                }
            });
        });
    });

</script>


<?= $this->endSection() ?>
