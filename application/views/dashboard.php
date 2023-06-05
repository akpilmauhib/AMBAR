<?php
foreach ($kondisi as $data);
?>
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-6 col-12">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?= $data->suhu ?><sup style="font-size: 20px">mm/Menit</sup></h3>
                        <p>Curah Hujan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="riwayat" class="small-box-footer"><i class="fas fa-list"> Selengkapnya</i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-6 col-12">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?= $data->kelembaban ?><sup style="font-size: 20px">L/Jam</sup></h3>
                        <p>Aliran Air</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="riwayat" class="small-box-footer"><i class="fas fa-list"> Selengkapnya</i></a>
                </div>
            </div>
            <!-- /.col (LEFT) -->
            <div class="col-lg-6 col-12">
                <!-- LINE CHART -->
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Grafik Curah Hujan</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.card -->
            <!-- /.col (LEFT) -->
            <div class="col-lg-6 col-12">
                <!-- LINE CHART -->
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Grafik Aliran Air</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="areaChartdua" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
</section>