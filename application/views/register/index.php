<style type="text/css">
  small{
    font-size: 12px;
  }
</style>
<div id="heading-breadcrumbs">
  <div class="container">
    <div class="row d-flex align-items-center flex-wrap">
      <div class="col-md-7">
        <h1 class="h2">Daftar Ujian Online</h1>
      </div>
      <div class="col-md-5">
        <ul class="breadcrumb d-flex justify-content-end">
          <li class="breadcrumb-item"><a href="<?=base_url('home');?>">Home</a></li>
          <li class="breadcrumb-item active">Daftar</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div id="content">
  <div class="container">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="box">
          <div class="heading">
            <h2 class="text-uppercase">Daftar</h2>
          </div>
          <p class="lead">Silahkan pilih periode dibawah ini :</p>
          <div role="alert" class="alert alert-<?=$status;?>">
              <select name="periode" id="periode" class="form-control">
                <option value="0">- Pilih periode -</option>
                <?php foreach($periode as $key): ?>
                <?php if(get_sesi('kode_periode') == $key['KODE_PERIODE']): ?>
                  <option value="<?=$key['KODE_PERIODE'];?>" selected><?=$key['URAI'];?> ( <?=$key['MAX_PESERTA'];?> Kuota )</option>
                <?php else: ?>
                  <option value="<?=$key['KODE_PERIODE'];?>"><?=$key['URAI'];?> ( <?=$key['MAX_PESERTA'];?> Kuota )</option>
                <?php endif; ?>
                <?php endforeach; ?>
              </select>
          </div>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
</div>
<?php if(get_sesi('periode') == true): ?>
<div id="content">
  <div class="container">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="box" style="margin: 0px 0 80px 0;">
          <p class="lead">Silahkan isi form dibawah ini :</p>
          <hr>
          <form enctype="multipart/form-data" action="<?=base_url('register/daftar');?>" method="post" target="_blank">

            <div class="form-group">
              <label for="nomor">Seafearer ID</label>
              <i><small style="color: red;float: right;">*) Harap diisi</small></i>
              <input id="nomor" type="text" class="form-control" name="nomor" placeholder="">
            </div>

            <div class="form-group">
              <label for="nomor_induk">Nomor Induk</label>
              <i><small style="color: red;float: right;">*) Harap diisi</small></i>
              <input id="nomor_induk" type="text" class="form-control" name="nomor_induk" placeholder="">
            </div>

            <div class="form-group">
              <label for="nama">Nama Lengkap</label>
              <i><small style="color: red;float: right;">*) Gunakan huruf besar</small></i>
              <input id="nama" type="text" class="form-control" name="nama_lengkap" required="required" placeholder="">
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <i><small style="color: red;float: right;">*) Contoh : info@gmail.com</small></i>
              <input id="email" type="email" class="form-control" name="email" placeholder="">
            </div>

            <div class="form-group">
              <label for="tempat">Tempat Lahir</label>
              <i><small style="color: red;float: right;">*) Gunakan huruf besar</small></i>
              <input id="tempat" type="text" class="form-control" name="tempat_lahir" required="required" placeholder="">
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <i><small style="color: red;float: right;">*) Contoh : 12/09/1992</small></i>
                  <input id="datemask" type="text" class="form-control" name="tgl_lahir" required="required" placeholder="" 
                  data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="kelamin">Jenis Kelamin</label>
                  <i><small style="color: red;float: right;">*) Harap diisi</small></i>
                  <select name="kelamin" class="form-control" required="required">
                    <option value="0">- Pilih -</option>
                    <?php foreach(config('kelamin') as $key => $val): ?>
                      <option value="<?=$key;?>"><?=$val;?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="no_hp">No. Hp / Telp</label>
              <i><small style="color: red;float: right;">*) Contoh : 08123456789</small></i>
              <input id="no_hp" type="text" class="form-control" name="no_hp" data-inputmask='"mask": "(999) 999-999-9999"' data-mask>
            </div>

            <div class="form-group">
              <label for="alamat">Alamat</label>
              <i><small style="color: red;float: right;">*) Harap diisi</small></i>
              <input id="alamat" type="text" class="form-control" name="alamat" required="required" placeholder="">
            </div>

            <div class="form-group">
              <label for="pekerjan">Pekerjaan</label>
              <i><small style="color: red;float: right;">*) Harap diisi</small></i>
              <input id="pekerjan" type="text" class="form-control" name="pekerjaan" required="required" placeholder="">
            </div>

            <div class="form-group">
              <label for="asal">Asal Sekolah</label>
              <i><small style="color: red;float: right;">*) Harap diisi</small></i>
              <input id="asal" type="text" class="form-control" name="asal_sekolah" required="required" placeholder="">
            </div>

            <div class="form-group">
              <label for="diklat">Asal Diklat</label>
              <i><small style="color: red;float: right;">*) Harap diisi</small></i>
              <select name="asaldiklat" class="form-control" required="required">
                <option value="0">- Pilih -</option>
                <?php foreach($diklat as $d): ?>
                  <option value="<?=$d['KODE'];?>.<?=$d['URAI'];?>"><?=$d['URAI'];?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group">
              <label for="jurusan">Jurusan</label>
              <i><small style="color: red;float: right;">*) Harap diisi</small></i>
              <select name="jurusan" class="form-control" required="required">
                <option value="">- Pilih -</option>
                <?php foreach($jurusan as $j): ?>
                  <option value="<?=$j['KODE'];?>.<?=$j['JURUSAN'];?>"><?=$j['JURUSAN'];?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group">
              <label for="tingkat">Tingkat</label>
              <i><small style="color: red;float: right;">*) Harap diisi</small></i>
              <select name="tingkat" class="form-control" required="required">
                <option value="">- Pilih -</option>
              </select>
            </div>

            <div class="form-group">
              <label for="kapal">Nama Kapal</label>
              <i><small style="color: red;float: right;">*) Gunakan huruf besar</small></i>
              <input id="kapal" type="text" class="form-control" name="kapal" required="required" placeholder="">
            </div>

            <div class="form-group">
              <label for="sign-on">Tanggal Sign On - Sign Off</label>
              <i><small style="color: red;float: right;">*) Harap diisi</small></i>
              <input id="sign-on" type="text" class="form-control reservation" name="sign-on" required="required" placeholder="" readonly="">
            </div>

            <div class="form-group">
              <label for="masa">Nomor SK Masa Layar</label>
              <i><small style="color: red;float: right;">*) Harap diisi</small></i>
              <input id="masa" type="text" class="form-control" name="masa" required="required" placeholder="">
            </div>

            <div class="form-group">
              <label for="foto">Foto</label>
              <i><small style="color: red;float: right;">*) Ukuran maksimal 200 kB dengan format jpg / png</small></i>
              <input type="file" name="foto" id="foto" class="form-control">
            </div><br>

            <div class="text-center">
              <button type="submit" class="btn btn-block btn-template-main"><i class="fa fa-user-md"></i> Daftar</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
</div>
<?php endif; ?>

<script type="text/javascript">
  
  $(function(){

    $('input.tanggal').datepicker({
        autoclose : true,
        format : 'dd/mm/yyyy'
    });

    $('[data-mask]').inputmask();

    $('input.reservation').daterangepicker({
        format : 'DD/MM/YYYY'      
    });

    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });

    $('select[name=periode]').off('change').on('change', function(){

      var periode = $(this);

      $.ajax({
        url : '<?=base_url('register/periode');?>',
        type : 'post',
        data : { periode : periode.val() },
        success:function(res){
          if (res == 'uwes') {
            window.location.reload();
          }
        } 
      });

    });

    $('select[name=jurusan]').off('change').on('change', function(){

      var jurusan = $(this);

      $.ajax({
        url : '<?=base_url('register/tingkat');?>',
        type : 'post',
        data : { jurusan : jurusan.val() },
        success:function(res){
          $('select[name=tingkat]').html(res);
        } 
      });

    });

  });

</script>