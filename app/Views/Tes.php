<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Data parkir Baru</h4>
</div>
<div class="modal-body">
    <!-- Form start -->
    <form class="form-horizontal" method="post" action="<?= base_url('parkir');?>" enctype="multipart/form-data">
    <?=csrf_field();?>
    <div class="box-body">
        <div class="form-group">
            <label class="col-sm control-label">Anggota</label>
            <div class="col-sm-10">
                <div class="input-gropu">
                    <span class="input-group-addon"><i class="fa fa-user-plus"></i></span>
                    <input type="text" name="id_member" class="form-control" id="frm-id_member" placeholder="Nik">
                </div>
            </div>
        </div>
    </div>
    <div class="box-body">
        <div class="form-group">
            <label class="col-sm control-label">No Kendaraan</label>
            <div class="col-sm-10">
                <div class="input-gropu">
                    <span class="input-group-addon"><i class="fa fa-user-plus"></i></span>
                    <input type="text" name="no_kendaraan" class="form-control" id="frm-id_member" placeholder="No Kendaraan">
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </div>

</form>
</div>