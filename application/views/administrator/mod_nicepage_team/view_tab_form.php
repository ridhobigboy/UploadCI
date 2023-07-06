<?php echo form_open_multipart($this->uri->segment(1)."/nicepage-team",array('id'=>'nicepage-team-form', 'class'=> 'form-horizontal pt-4' )) ;?> 
<div class="card" style="min-height:450px">
        <div class="card-header bg-info">
            <h3 class="card-title py-1">
                Form Produk
            </h3>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">
                    Nama Produk*
                </label>
                <div class="col-sm-6">
                    <input id="id" type="hidden" class="form-control" name="id_edit">
                    <input placeholder="Nama Produk"  id="nama" type="text" class="form-control" name="nama" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">
                    Keterangan Produk *
                </label>
                <div class="col-sm-6">
                    <input placeholder="Keterangan Produk"  id="Keterangan Produk" type="text" class="form-control" name="jabatan"  required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">
                    URL Produk
                </label>
                <div class="col-sm-6">
                <input placeholder="Isikan url di halaman baru atau berita"  id="socmed-fb" type="text" class="form-control" name="socmed_fb">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">

                    Foto Produk *
                </label>
                <div class="col-sm-6">
                     <input id="file-photo-upload" type="file" name="photo" required="required">
                     <div class="file-name" id="file-photo" style="width:200px"></div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-info" type="submit" name="set_team">Simpan</button>
        </div>        
</div>
<?php echo form_close();?>
<div class="callout callout-info">
    <h5>Info</h5>
    <ul>
        <li>Isikan data Produk.</li>         
        <li>Gunakan alamat url untuk di halaman baru, berita, atau link lainnya.</li> 
    </ul>
</div>