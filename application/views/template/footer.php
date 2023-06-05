</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; <?php echo date("Y"); ?> <a href="#">AMBAR</a>.</strong> All rights
    reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="<?= base_url('assets/template') ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/template') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('assets/template') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/template') ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/template') ?>/dist/js/demo.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/chart.js/Chart.min.js"></script>
<!-- page script -->
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
<script>
    <?php
    foreach ($kondisi as $data);
    $id = $data->id;
    $d_one = $this->db->query("SELECT * FROM `station1` WHERE id = $id")->result();
    foreach ($d_one as $datasuhu1);
    $suhubaru = $datasuhu1->suhu;
    $kelembabanbaru = $datasuhu1->kelembaban;

    $d_two = $this->db->query("SELECT * FROM `station1` WHERE id = $id-1")->result();
    foreach ($d_two as $datasuhu2);
    $suhuminsatu = $datasuhu2->suhu;
    $kelembabandua = $datasuhu2->kelembaban;

    $d_three = $this->db->query("SELECT * FROM `station1` WHERE id = $id-2")->result();
    foreach ($d_three as $datasuhu3);
    $suhumindua = $datasuhu3->suhu;
    $kelembabantiga = $datasuhu3->kelembaban;

    $d_four = $this->db->query("SELECT * FROM `station1` WHERE id = $id-3")->result();
    foreach ($d_four as $datasuhu4);
    $suhumintiga = $datasuhu4->suhu;
    $kelembabanempat = $datasuhu4->kelembaban;

    $d_five = $this->db->query("SELECT * FROM `station1` WHERE id = $id-4")->result();
    foreach ($d_five as $datasuhu5);
    $suhuminempat = $datasuhu5->suhu;
    $kelembabanlima = $datasuhu5->kelembaban;

    $d_six = $this->db->query("SELECT * FROM `station1` WHERE id = $id-5")->result();
    foreach ($d_six as $datasuhu6);
    $suhuminlima = $datasuhu6->suhu;
    $kelembabanenam = $datasuhu6->kelembaban;

    $d_seven = $this->db->query("SELECT * FROM `station1` WHERE id = $id-6")->result();
    foreach ($d_seven as $datasuhu7);
    $suhuminenam = $datasuhu7->suhu;
    $kelembabantujuh = $datasuhu7->kelembaban;

    ?>

    $(function() {
        console.log(<?= $suhubaru ?>);
        // Curah Hujan 
        var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
        var areaChartData = {
            labels: ['7', '6', '5', '4', '3', '2', '1'],
            datasets: [{
                label: 'Curah Hujan',
                backgroundColor: '#8EA7E9',
                borderColor: '#E5E0FF',
                pointRadius: false,
                pointColor: '#3b8bba',
                pointStrokeColor: 'rgba(60,141,188,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data: [<?= $suhuminenam ?>, <?= $suhuminlima ?>, <?= $suhuminempat ?>, <?= $suhumintiga ?>, <?= $suhumindua ?>, <?= $suhuminsatu ?>, <?= $suhubaru ?>]
            }]
        }

        var areaChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        var areaChart = new Chart(areaChartCanvas, {
            type: 'line',
            data: areaChartData,
            options: areaChartOptions
        })

        var areaChartCanvasdua = $('#areaChartdua').get(0).getContext('2d')
        var areaChartDatadua = {
            labels: ['7', '6', '5', '4', '3', '2', '1'],
            datasets: [{
                label: 'Aliran Air',
                backgroundColor: '#A4BC92',
                borderColor: '#DDFFBB',
                pointRadius: false,
                pointColor: '#3b8bba',
                pointStrokeColor: 'rgba(60,141,188,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data: [<?= $kelembabantujuh ?>, <?= $kelembabanenam ?>, <?= $kelembabanlima ?>, <?= $kelembabanempat ?>, <?= $kelembabantiga ?>, <?= $kelembabandua ?>, <?= $kelembabanbaru ?>]
            }]
        }

        var areaChartOptionsdua = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        var areaChartdua = new Chart(areaChartCanvasdua, {
            type: 'line',
            data: areaChartDatadua,
            options: areaChartOptionsdua
        })

        //-------------
        //- LINE CHART -
        //--------------
        var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
        var lineChartDataa = {
            labels: ['7', '6', '5', '4', '3', '2', '1'],
            datasets: [{
                label: 'Curah Hujan',
                backgroundColor: 'rgba(60,141,188,0.9)',
                borderColor: 'rgba(60,141,188,0.8)',
                pointRadius: false,
                pointColor: '#3b8bba',
                pointStrokeColor: 'rgba(60,141,188,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data: [<?= $kelembabantujuh ?>, <?= $kelembabanenam ?>, <?= $kelembabanlima ?>, <?= $kelembabanempat ?>, <?= $kelembabantiga ?>, <?= $kelembabandua ?>, <?= $kelembabanbaru ?>]
            }]
        }
        var lineChartOptions = jQuery.extend(true, {}, areaChartOptions)
        var lineChartData = jQuery.extend(true, {}, lineChartDataa)
        lineChartData.datasets[0].fill = false;
        lineChartData.datasets[1].fill = false;
        lineChartOptions.datasetFill = false

        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: lineChartData,
            options: lineChartOptions
        })
    })
</script>
</body>

</html>