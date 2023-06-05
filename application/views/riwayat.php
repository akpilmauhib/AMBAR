<div class="card">
    <div class="card-header">
        <div>
            <a class=" btn btn-success" href="<?= base_url('Xls/xls') ?>"><i class="fas fa-print "></i> Cetak XLS</a>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Waktu</th>
                    <th>Curah Hujan</th>
                    <th>Aliran Air</th>
                    <!-- <th>Tinggi Air</th>
                    <th>Keterangan</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($riwayat as $data) :
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data->created_at ?></td>
                        <td><?= $data->suhu ?></td>
                        <td><?= $data->kelembaban ?></td>
                        <!-- <td><?= $data->tinggi_air ?></td>
                        <td><?= $data->keterangan ?></td> -->
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>