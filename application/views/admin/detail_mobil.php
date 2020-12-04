<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Detail Mobil</h1>
          </div>
          </section>

          <?php foreach($detail as $dt) : ?>
        <div class = "card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-5">

                <img src="<?php echo base_url().'assets/upload/' .$dt->gambar?>">

                </div>
                <div class="col-md-7">
                <table class="table">
                <tr>
                    <td>Type Mobil</td>
                    <td>
                    <?php
                    if($dt -> kode_type == "SDN"){
                        echo "Sedan";
                    }elseif($dt-> kode_type == "HTB"){
                        echo "Hatchback";
                    }elseif($dt-> kode_type == "MVP"){
                        echo "Multi Purpose Vechile";
                    }else{
                        echo "<span class='text-danger'>Type Not Yet
                        </span>";
                    }
                    ?>
                    </td>
                </tr>
                <tr>
                    <td>Merk</td>
                    <td><?php echo $dt->merk?></td>
                </tr>
                <tr>
                    <td>No. Plat</td>
                    <td><?php echo $dt->no_plat?></td>
                </tr>
                <tr>
                    <td>Warna</td>
                    <td><?php echo $dt->warna?></td>
                </tr>
                <tr>
                    <td>Tahun</td>
                    <td><?php echo $dt->tahun?></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>Rp.<?php echo number_format($dt->harga,0,',','.') ?></td>
                </tr>
                <tr>
                    <td>Denda</td>
                    <td>Rp.<?php echo number_format($dt->denda,0,',','.') ?></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                    <?php
                    if($dt->status == "0"){
                        echo "<span class='badge badge-danger'>
                        Tidak Tersedia
                        </span>";
                    }else{
                        echo "<span class='badge badge-success'>
                        Tersedia
                        </span>";
                    }
                    ?>
                    </td>
                </tr>
                <tr>
                    <td>AC</td>
                    <td>
                    <?php
                    if($dt->ac == "0"){
                        echo "<span class='badge badge-danger'>
                        Tidak Tersedia
                        </span>";
                    }else{
                        echo "<span class='badge badge-success'>
                        Tersedia
                        </span>";
                    }
                    ?>
                    </td>
                </tr>
                <tr>
                    <td>Supir</td>
                    <td>
                    <?php
                    if($dt->supir == "0"){
                        echo "<span class='badge badge-danger'>
                        Tidak Tersedia
                        </span>";
                    }else{
                        echo "<span class='badge badge-success'>
                        Tersedia
                        </span>";
                    }
                    ?>
                    </td>
                </tr>
                <tr>
                    <td>MP3</td>
                    <td>
                    <?php
                    if($dt->mp3_player == "0"){
                        echo "<span class='badge badge-danger'>
                        Tidak Tersedia
                        </span>";
                    }else{
                        echo "<span class='badge badge-success'>
                        Tersedia
                        </span>";
                    }
                    ?>
                    </td>
                </tr>
                <tr>
                    <td>Central Lock</td>
                    <td>
                    <?php
                    if($dt->central_lock == "0"){
                        echo "<span class='badge badge-danger'>
                        Tidak Tersedia
                        </span>";
                    }else{
                        echo "<span class='badge badge-success'>
                        Tersedia
                        </span>";
                    }
                    ?>
                    </td>
                </tr>
                </table>
                <a class="btn btn-sm btn-primary ml-4" href="<?php
                echo base_url('admin/data_mobil/update_mobil/'.$dt->id_mobil)
                ?>">Update</a>
                <a class="btn btn-sm btn-danger" href="<?php
                echo base_url('admin/data_mobil')
                ?>">Kembali</a>
                </div>
            </div>
        </div>
        </div>
          <?php endforeach;?>
          </div>