<title>Dashboard</title>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard/dashboardhome') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-maroon">
                        <div class="inner">
                            <h3 id="quotation_all"></h3>

                            <p>จำนวนใบเสนอราคาทั้งหมด</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-border-all"></i>
                        </div>
                        <a href="<?= base_url('dashboard/quotation') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3 id="quotation_success"></h3>

                            <p>จำนวนใบเสนอราคา ดำเนินการเสร็จสิ้น</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <a href="<?= base_url('dashboard/quotation') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-2 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3 id="quotation_process"></h3>

                            <p>จำนวนใบเสนอราคา กำลังดำเนินการ</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-spinner"></i>
                        </div>
                        <a href="<?= base_url('dashboard/quotation') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-2 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3 id="quotation_wait"></h3>

                            <p>จำนวนใบเสนอราคา ยังไม่ดำเนินการ</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <a href="<?= base_url('dashboard/quotation') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-2 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3 id="quotation_cancel"></h3>

                            <p>จำนวนใบเสนอราคา ยกเลิก</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-ban"></i>
                        </div>
                        <a href="<?= base_url('dashboard/quotation') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <div class="row">
                <section class="col-lg-12 connectedSortable">
                    <div class="card">
                        <div class="card-header bg-orange">
                            <h3 class="card-title mt-2" style="color: white">สถิติการใช้บริการแต่ละบริการ</h3>

                            <div class="card-tools" style="color: white; display: flex; align-items: center;">
                                <select id="year_service" name="year_service" class="form-control" style="margin-right: 10px;" oninput="BarChart()">
                                    <?php
                                    // หาปีปัจจุบัน
                                    $current_year = date("Y");

                                    // สร้างตัวเลือกปีโดยใช้ลูป
                                    for ($year = $current_year; $year >= $current_year - 10; $year--) {
                                        $selected = ($year == $current_year) ? 'selected' : '';
                                        echo "<option value=\"$year\" $selected>$year</option>";
                                    }
                                    ?>
                                </select>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" style="color: white;">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>


                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Left col -->
                <section class="col-lg-6 connectedSortable">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title">สถิติการใช้บริการแต่ละบริการ</h3>
                            <div class="card-tools" style="color: white;">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" style="color: white;">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="chart-responsive">
                                        <canvas id="pieChart" height="150"></canvas>
                                    </div>
                                    <!-- ./chart-responsive -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-4">
                                    <ul class="chart-legend clearfix">
                                        <?php foreach ($service_header as $key => $value) { ?>
                                            <li><i class="fas fa-circle" id="chart_service_<?= $key ?>"></i> <?= $value['header_service_name_th'] ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                    <!-- /.card -->
                </section>

                <!-- right col -->
                <section class="col-lg-6 connectedSortable">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">รีวิว</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="elfsight-app-1636610a-59c7-4af4-a012-d1571f251c26" data-elfsight-app-lazy></div>
                        </div>
                    </div>
                </section>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


<!-- ChartJS -->
<script src="<?= base_url('plugins/chart.js/Chart.min.js') ?>"></script>
<script src="https://static.elfsight.com/platform/platform.js"></script>

<!-- Convert data php to js -->
<script>
    const quotation_data = <?= json_encode($quotation_data) ?>;
    const service_header = <?= json_encode($service_header) ?>;

    var quotation_all = 0;
    var quotation_process = 0;
    var quotation_success = 0;
    var quotation_wait = 0;
    var quotation_cancel = 0;

    quotation_data.forEach(element_quotation => {
        if (element_quotation.status == '0') {
            quotation_wait += 1;
        } else if (element_quotation.status == '1') {
            quotation_process += 1;
        } else if (element_quotation.status == '2') {
            quotation_success += 1;
        } else if (element_quotation.status == '3') {
            quotation_cancel += 1;
        }
        quotation_all += 1;
    });

    $('#quotation_all').text(quotation_all);
    $('#quotation_process').text(quotation_process);
    $('#quotation_success').text(quotation_success);
    $('#quotation_wait').text(quotation_wait);
    $('#quotation_cancel').text(quotation_cancel);

    $(document).ready(function() {
        PieChart();
        BarChart();
    });
</script>

<!-- random color -->
<script>
    const baseColors = ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'];

    function randomColor(baseColor) {
        let color = baseColor.slice(1);
        let rgb = parseInt(color, 16);
        let r = (rgb >> 16) & 0xff;
        let g = (rgb >> 8) & 0xff;
        let b = (rgb >> 0) & 0xff;

        r = Math.min(255, Math.max(0, r + Math.floor((Math.random() - 0.5) * 50)));
        g = Math.min(255, Math.max(0, g + Math.floor((Math.random() - 0.5) * 50)));
        b = Math.min(255, Math.max(0, b + Math.floor((Math.random() - 0.5) * 50)));

        // ใช้ padding สีให้ได้ 2 หลักเสมอ
        const toHex = (n) => n.toString(16).padStart(2, '0');

        return `#${toHex(r)}${toHex(g)}${toHex(b)}`;
    }
</script>

<!-- Pie Chart -->
<script>
    function PieChart() {
        const labels_service = [];
        const data_service = [];
        const color_service = [];

        service_header.forEach((element_service, index) => {
            var count_service = 0;
            labels_service.push(element_service.header_service_name_th);
            var baseColor = baseColors[Math.floor(Math.random() * baseColors.length)];
            var newColor = randomColor(baseColor);
            $('#chart_service_' + index).css('color', newColor);
            color_service.push(newColor);
            quotation_data.forEach((element_quotation, index) => {
                var dataService = element_quotation.service.split(',');
                dataService.forEach((element_quotation, index) => {
                    if (element_quotation == element_service.id_service_header) {
                        count_service += 1;
                    }
                });

            });
            data_service.push(count_service);
        });

        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        var pieData = {
            labels: labels_service,
            datasets: [{
                data: data_service,
                backgroundColor: color_service
            }]
        }
        var pieOptions = {
            legend: {
                display: false
            }
        }
        var pieChart = new Chart(pieChartCanvas, {
            type: 'doughnut',
            data: pieData,
            options: pieOptions
        })
    }
</script>

<!-- Bar Chart -->
<script>
    //-------------
    //- Bar CHART -
    //--------------
    function BarChart() {
        var value_year = document.getElementById("year_service").value; // ปีที่เลือก
        var count_by_year_month = {};

        quotation_data.forEach(function(element) {
            if (element.craete_date.substring(0, 4) === value_year.toString()) {
                var createDate = new Date(element.craete_date);
                var year = createDate.getFullYear();
                var month = createDate.getMonth() + 1;

                if (!count_by_year_month[month]) {
                    count_by_year_month[month] = 0;
                }
            }

            count_by_year_month[month]++;
        });

        var areaChartData = {
            labels: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
            datasets: [{
                label: 'จำนวนใบเสนอราคา',
                backgroundColor: 'rgba(60,141,188,0.9)',
                borderColor: 'rgba(60,141,188,0.8)',
                pointRadius: false,
                pointColor: '#3b8bba',
                pointStrokeColor: 'rgba(60,141,188,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data: Array.from({
                    length: 12
                }, (_, idx) => count_by_year_month[idx + 1] || 0)
            }]
        };
        //-------------
        //- BAR CHART -
        //-------------
        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var barChartData = $.extend(true, {}, areaChartData)
        var temp0 = areaChartData.datasets[0]
        barChartData.datasets[0] = temp0

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })
    }
</script>
<!-- move tab function -->
<script>
    // Make the dashboard widgets sortable Using jquery UI
    $('.connectedSortable').sortable({
        placeholder: 'sort-highlight',
        connectWith: '.connectedSortable',
        handle: '.card-header, .nav-tabs',
        forcePlaceholderSize: true,
        zIndex: 999999
    })
    $('.connectedSortable .card-header').css('cursor', 'move')
</script>