<div class="content-wrapper">

 <!-- Main content -->
    <section class="content">

      <div class="row" >

        <div class="row">
        <div class="col-md-6">
          <?php 
          echo $this->session->flashdata('sukses'); 
          ?>
        </div>
      </div>

        <div class="col-md-7" >
<?php 
foreach ($tb_data_anggota->result_array() as $r) 
  
  {
 
 ?>
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <?php echo form_open_multipart('user/saveprofil/'.$r['id_anggota']);?>
              <?php if (is_file(FCPATH . 'upload/foto/' . $r['foto'])): ?>
              <?php $img_url = BASE_URL . 'upload/foto/' . $r['foto']; ?>
              <?php else: ?>
              <?php $img_url = BASE_URL . 'upload/foto/default.png'; ?>
              <?php endif; ?>
              <img style="width: 200px; height: 200px;"  class="profile-user-img img-responsive img-circle" src="<?= $img_url; ?>" alt="User profile picture" >
              
               <br>
              
               <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-sm" id="colFormLabelSm" value="<?php echo $r["nama"] ?>" name="nama">
                </div>
              </div>
              <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Username</label>
                <div class="col-sm-10">
                  <input type="text" name="username" class="form-control form-control-sm" id="colFormLabelSm" value="<?php echo $r['username'] ?>" name="username">
                </div>
              </div>

              <div class="form-group row">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Pendidikan </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="colFormLabel" value="<?php echo $r['pendidikan'] ?>" name="pendidikan">
                </div>
              </div>
              <div class="form-group row">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Alamat Indonesia</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-lg" id="colFormLabelLg" value="<?php echo $r['alamat_ind'] ?>" name="alamat_ind">
                </div>
              </div>
              <div class="form-group row">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Alamat Maroko</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-lg" id="colFormLabelLg" value="<?php echo $r['alamat_mrk'] ?>" name="alamat_mrk">
                </div>
              </div>
              <div class="form-group row">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Jenis Kelamin</label>
                <div class="col-sm-10">
                   <input type="radio" name="jk"  value="1" value="<?php echo $r['jk'] ?>">&nbsp;Laki - Laki&nbsp;
                   <input type="radio" name="jk"  value="2" value="<?php echo $r['jk'] ?>">&nbsp;Perempuan
                 
                </div>
              </div>
              <div class="form-group row">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">No. Telepon</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-lg" id="colFormLabelLg" value="<?php echo $r['no_telp'] ?>" >
                </div>
              </div>
              <div class="form-group row">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nama Ayah</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-lg" id="colFormLabelLg" value="<?php echo $r['nama_ayah'] ?>" >
                </div>
              </div>
              <div class="form-group row">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nama Ibu</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-lg" id="colFormLabelLg" value="<?php echo $r['nama_ibu'] ?>" >
                </div>
              </div>
              <div class="form-group row">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Pekerjaan Ayah</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-lg" id="colFormLabelLg" value="<?php echo $r['pekerjaan_ayah'] ?>" >
                </div>
              </div>
              <div class="form-group row">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Pekerjaan Ibu</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-lg" id="colFormLabelLg" value="<?php echo $r['pekerjaan_ibu'] ?>" >
                </div>
              </div>
              <div class="form-group row">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">SD </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-lg" id="colFormLabelLg" value="<?php echo $r['sd'] ?>" >
                </div>
              </div>

            <div class="form-group row">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">SP </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-lg" id="colFormLabelLg" value="<?php echo $r['sd'] ?>" >
                </div>
              </div>              
                  <div class="form-group text-center">
                    <button type="submit" class="btn btn-warning"><a class="text-black" >Save</a></button>
                     
                  </div>
                  

                <?php echo form_close(); ?>




              

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <?php } ?>

    
        </div>
      
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->

</div>