  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

<!-- Main content -->
<section class="content">
      <div class="container">
        <div class="">
          <!-- left column -->
          <div class="col-md-12S">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Pengisian limbah</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <?php if(session()->getFlashdata('error')){?>
                <div class="allert-danger">
                    <?php echo session()->getFlashdata('error')?>
                </div>
                <?php }?>
                
              <form action="<?= base_url('limbah');?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" id="exampleInputPassword1" placeholder="Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Departemen</label>
                    <select class="form-control select2 select2-hidden-accesible" name="departemen" aria-placeholder="departemen" style="width:100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                       <option selected="selected" data-selected2-id="3">SHE & EPO</option>
                       <option selected="selected" data-selected2-id="3">PPU</option>
                       <option selected="selected" data-selected2-id="3">WAREHOUSE</option>
                       <option selected="selected" data-selected2-id="3">PROCESS</option>
                       <option selected="selected" data-selected2-id="3">SPIM</option>
                       <option selected="selected" data-selected2-id="3">ENGINEERING</option>
                       <option selected="selected" data-selected2-id="3">PACKING</option>
                       <option selected="selected" data-selected2-id="3">PPIC</option>
                       <option selected="selected" data-selected2-id="3">IT</option>
                       <option selected="selected" data-selected2-id="3">HRGA</option>
                       <option selected="selected" data-selected2-id="3">FINANCE</option>
                       <option selected="selected" data-selected2-id="3">QA</option>
                       <option selected="selected" data-selected2-id="3">LABORATORIES</option>
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No Handphone</label>
                    <input type="text" class="form-control" name="no_hp" id="exampleInputPassword1" placeholder="No Handphone">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Di Hasilkan Limbah</label>
                    <input type="date" class="form-control" name="tgl" id="exampleInputPassword1" placeholder="Tanggal Di Hasilkan Limbah">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Limbah</label>
                    <select class="form-control select2 select2-hidden-accesible" name="jenis_limbah" aria-placeholder="Jenis Limbah" style="width:100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-selected2-id="3">B409- fly ash</option>
                    <option selected="selected" data-selected2-id="35">B410 - Bottom ash</option>
                    <option selected="selected" data-selected2-id="36">B339-2 - Tinta, tonner</option>
                    <option selected="selected" data-selected2-id="37">A102d - Aki/baterai bekas</option>
                    <option selected="selected" data-selected2-id="38">A106d - Limbah dari laboratorium yang mengandung B3</option>
                    <option selected="selected" data-selected2-id="39">A108d - Limbah terkontaminasi B3</option>
                    <option selected="selected" data-selected2-id="40">B104d - Kemasan bekas B3</option>
                    <option selected="selected" data-selected2-id="41">B105d - Minyak </option>
                    <option selected="selected" data-selected2-id="41">B105d - Minyak pelumas bekas antara lain minyak pelumas bekas hidrolik, mesin, gear, lubrikasi, insulasi, heat transmission, grit chambers, separator dan/atau campurannya</option>
                    <option selected="selected" data-selected2-id="41">B106d - Limbah resin atau penukar ion</option>
                    <option selected="selected" data-selected2-id="41">B107d - Limbah elektronik termasuk cathode ray tube (CRT), lampu TL, printed circuit board (PCB), karet kawat (wire rubber)</option>
                    
                    <span class="select2 select2-container select2container--default select2--container--below select2-container--open" dir="ltr" data-select2-id="2" style="width:100%;">
                      <span class="selection">
                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="true" tabindex="0" aria-disabled="false" aria-labelledby="select2-xwif-container" aria-owns="select2-xwif-results" aria-activedescendant="select2-xwif-result-8vue-Alaska">
                          <span class="select2-selection__rendered" id="select2-xwif-container" role="textbox" aria-readonly="true" title="00">00</span>
                          <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                        </span>

                      </span class="dropdown-wrapper" aria-hidden="true"></span>
                  </span>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">User yang menerima</label>
                    <input type="text" class="form-control" name="user" id="exampleInputPassword1" placeholder="Nama User">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" name="lampiran" for="exampleInputFile">Pilih File</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Setuju</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button class="btn btn-danger <?base_url('limbah/logout')?>">logout</button>
                </div>
              </form>
            </div>