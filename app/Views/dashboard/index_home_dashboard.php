<title>Dashboard - PetEX</title>

<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #4ecdc4 0%, #44a08d 25%, #f39c12 75%, #e67e22 100%);
        --teal-primary: #4ecdc4;
        --teal-dark: #44a08d;
        --accent-orange: #f39c12;
        --orange-dark: #e67e22;
        --navy-blue: #1a2a6c;
        --text-dark: #1a2a6c;
        --text-light: #5f7c8a;
        --white: #ffffff;
        --glass-bg: rgba(255, 255, 255, 0.95);
        --shadow-soft: 0 4px 20px rgba(78, 205, 196, 0.15);
        --shadow-medium: 0 8px 30px rgba(78, 205, 196, 0.2);
        --shadow-heavy: 0 15px 50px rgba(26, 42, 108, 0.15);
    }

    /* Modern Dashboard Styling */
    .content-wrapper {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        min-height: 100vh;
        font-family: 'Kanit', 'Poppins', sans-serif;
    }

    /* Content Header Styling */
    .content-header {
        padding: 2rem 0.5rem 1rem;
        background: transparent;
    }

    .content-header h1 {
        font-weight: 700;
        color: var(--text-dark);
        font-size: 2rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .content-header h1::before {
        content: '🐾';
        font-size: 1.8rem;
    }

    /* Breadcrumb Styling */
    .breadcrumb {
        background: rgba(255, 255, 255, 0.8);
        border-radius: 10px;
        padding: 0.75rem 1.5rem;
        box-shadow: var(--shadow-soft);
        backdrop-filter: blur(10px);
    }

    .breadcrumb-item a {
        color: var(--teal-primary);
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .breadcrumb-item a:hover {
        color: var(--accent-orange);
        transform: translateX(3px);
    }

    .breadcrumb-item.active {
        color: var(--text-light);
        font-weight: 600;
    }

    /* Modern Small Boxes */
    .small-box {
        border-radius: 16px;
        position: relative;
        overflow: hidden;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: var(--shadow-soft);
        border: none;
        margin-bottom: 1.5rem;
        animation: fadeInUp 0.6s ease-out backwards;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .small-box:nth-child(1) { animation-delay: 0.1s; }
    .small-box:nth-child(2) { animation-delay: 0.2s; }
    .small-box:nth-child(3) { animation-delay: 0.3s; }
    .small-box:nth-child(4) { animation-delay: 0.4s; }
    .small-box:nth-child(5) { animation-delay: 0.5s; }

    .small-box:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: var(--shadow-heavy);
    }

    .small-box::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.2) 0%, transparent 100%);
        pointer-events: none;
    }

    /* Custom colors for small boxes */
    .small-box.bg-maroon {
        background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%) !important;
    }

    .small-box.bg-success {
        background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%) !important;
    }

    .small-box.bg-warning {
        background: linear-gradient(135deg, var(--accent-orange) 0%, var(--orange-dark) 100%) !important;
    }

    .small-box.bg-info {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--teal-dark) 100%) !important;
    }

    .small-box.bg-danger {
        background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%) !important;
    }

    .small-box .inner {
        padding: 1.5rem;
        position: relative;
        z-index: 2;
    }

    .small-box .inner h3 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .small-box .inner p {
        font-size: 0.95rem;
        font-weight: 500;
        opacity: 0.95;
        line-height: 1.4;
    }

    .small-box .icon {
        position: absolute;
        right: 1rem;
        top: 50%;
        transform: translateY(-50%);
        font-size: 4rem;
        opacity: 0.3;
        transition: all 0.3s ease;
        z-index: 1;
    }

    .small-box:hover .icon {
        transform: translateY(-50%) scale(1.2) rotate(10deg);
        opacity: 0.4;
    }

    .small-box-footer {
        background: rgba(0, 0, 0, 0.15);
        color: rgba(255, 255, 255, 0.9) !important;
        padding: 0.75rem;
        text-align: center;
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        font-weight: 500;
        transition: all 0.3s ease;
        position: relative;
        z-index: 2;
    }

    .small-box-footer:hover {
        background: rgba(0, 0, 0, 0.25);
        color: var(--white) !important;
        gap: 1rem;
    }

    /* Modern Card Styling */
    .card {
        border-radius: 16px;
        border: none;
        box-shadow: var(--shadow-soft);
        background: var(--glass-bg);
        backdrop-filter: blur(10px);
        margin-bottom: 1.5rem;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .card:hover {
        box-shadow: var(--shadow-medium);
        transform: translateY(-3px);
    }

    .card-header {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--accent-orange) 100%);
        border: none;
        padding: 1.25rem 1.5rem;
        border-radius: 16px 16px 0 0;
    }

    .card-header.bg-orange {
        background: linear-gradient(135deg, var(--accent-orange) 0%, var(--orange-dark) 100%) !important;
    }

    .card-header.bg-info {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--teal-dark) 100%) !important;
    }

    .card-header .card-title {
        color: var(--white) !important;
        font-weight: 600;
        font-size: 1.2rem;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .card-body {
        padding: 1.5rem;
        background: var(--white);
    }

    /* Chart Legend Styling */
    .chart-legend li {
        padding: 0.5rem 0;
        font-weight: 500;
        color: var(--text-dark);
        display: flex;
        align-items: center;
        gap: 0.75rem;
        transition: all 0.3s ease;
    }

    .chart-legend li:hover {
        transform: translateX(5px);
        color: var(--teal-primary);
    }

    .chart-legend li i {
        font-size: 1.2rem;
        filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
    }

    /* Form Controls */
    .form-control {
        border-radius: 10px;
        border: 2px solid rgba(78, 205, 196, 0.2);
        padding: 0rem 1rem;
        transition: all 0.3s ease;
        font-weight: 500;
    }

    .form-control:focus {
        border-color: var(--teal-primary);
        box-shadow: 0 0 0 3px rgba(78, 205, 196, 0.1);
    }

    /* Buttons */
    .btn-tool {
        transition: all 0.3s ease;
    }

    .btn-tool:hover {
        transform: scale(1.1) rotate(90deg);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .content-header h1 {
            font-size: 1.5rem;
        }

        .small-box .inner h3 {
            font-size: 2rem;
        }

        .small-box .inner p {
            font-size: 0.85rem;
        }

        .small-box .icon {
            font-size: 3rem;
            right: 0.5rem;
        }
    }

    /* Loading animation */
    @keyframes pulse-ring {
        0% {
            transform: scale(0.8);
            opacity: 1;
        }
        50% {
            transform: scale(1.2);
            opacity: 0.5;
        }
        100% {
            transform: scale(0.8);
            opacity: 1;
        }
    }

    .fa-spinner {
        animation: pulse-ring 1.5s ease-in-out infinite;
    }

    /* Smooth scroll */
    html {
        scroll-behavior: smooth;
    }

    /* Card Tools Styling */
    .card-tools .form-control {
        min-width: 120px;
        background: rgba(255, 255, 255, 0.95);
        color: var(--text-dark);
        font-weight: 600;
    }

    .card-tools .btn-tool {
        color: var(--white) !important;
        opacity: 0.9;
    }

    .card-tools .btn-tool:hover {
        opacity: 1;
    }

    /* Elfsight widget container */
    .elfsight-app-1636610a-59c7-4af4-a012-d1571f251c26 {
        border-radius: 12px;
        overflow: hidden;
    }
</style>

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
                            <h3 id="quotation_all"><span class="counter">0</span></h3>

                            <p>จำนวนใบเสนอราคาทั้งหมด</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-file-invoice"></i>
                        </div>
                        <a href="<?= base_url('dashboard/quotation') ?>" class="small-box-footer">ดูรายละเอียด <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3 id="quotation_success"><span class="counter">0</span></h3>

                            <p>ดำเนินการเสร็จสิ้น</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <a href="<?= base_url('dashboard/quotation') ?>" class="small-box-footer">ดูรายละเอียด <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-2 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3 id="quotation_process"><span class="counter">0</span></h3>

                            <p>กำลังดำเนินการ</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-sync-alt"></i>
                        </div>
                        <a href="<?= base_url('dashboard/quotation') ?>" class="small-box-footer">ดูรายละเอียด <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-2 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3 id="quotation_wait"><span class="counter">0</span></h3>

                            <p>รอดำเนินการ</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <a href="<?= base_url('dashboard/quotation') ?>" class="small-box-footer">ดูรายละเอียด <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-2 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3 id="quotation_cancel"><span class="counter">0</span></h3>

                            <p>ยกเลิกแล้ว</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-times-circle"></i>
                        </div>
                        <a href="<?= base_url('dashboard/quotation') ?>" class="small-box-footer">ดูรายละเอียด <i class="fas fa-arrow-circle-right"></i></a>
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

    // Animated counter function
    function animateCounter(element, target) {
        let current = 0;
        const increment = target / 50;
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                element.textContent = target;
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(current);
            }
        }, 20);
    }

    // Update counters with animation
    setTimeout(() => {
        animateCounter(document.querySelector('#quotation_all .counter'), quotation_all);
        animateCounter(document.querySelector('#quotation_process .counter'), quotation_process);
        animateCounter(document.querySelector('#quotation_success .counter'), quotation_success);
        animateCounter(document.querySelector('#quotation_wait .counter'), quotation_wait);
        animateCounter(document.querySelector('#quotation_cancel .counter'), quotation_cancel);
    }, 300);

    $(document).ready(function() {
        PieChart();
        BarChart();
    });
</script>

<!-- PetEX Theme Colors -->
<script>
    const baseColors = [
        '#4ecdc4', // Teal Primary
        '#f39c12', // Orange
        '#44a08d', // Teal Dark
        '#e67e22', // Orange Dark
        '#1a2a6c', // Navy Blue
        '#26d0ce', // Accent Color
        '#2ecc71', // Green
        '#e74c3c'  // Red
    ];

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
                backgroundColor: 'rgba(78, 205, 196, 0.8)',
                borderColor: 'rgba(78, 205, 196, 1)',
                borderWidth: 2,
                pointRadius: 4,
                pointBackgroundColor: '#4ecdc4',
                pointBorderColor: '#fff',
                pointHoverRadius: 6,
                pointHoverBackgroundColor: '#f39c12',
                pointHoverBorderColor: '#fff',
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
            datasetFill: false,
            legend: {
                display: true,
                labels: {
                    fontFamily: 'Kanit, sans-serif',
                    fontSize: 13,
                    fontColor: '#1a2a6c',
                    fontStyle: '600'
                }
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false
                    },
                    ticks: {
                        fontFamily: 'Kanit, sans-serif',
                        fontSize: 12,
                        fontColor: '#5f7c8a'
                    }
                }],
                yAxes: [{
                    gridLines: {
                        color: 'rgba(78, 205, 196, 0.1)',
                        borderDash: [5, 5]
                    },
                    ticks: {
                        fontFamily: 'Kanit, sans-serif',
                        fontSize: 12,
                        fontColor: '#5f7c8a',
                        beginAtZero: true
                    }
                }]
            },
            tooltips: {
                backgroundColor: 'rgba(26, 42, 108, 0.9)',
                titleFontFamily: 'Kanit, sans-serif',
                bodyFontFamily: 'Kanit, sans-serif',
                cornerRadius: 8,
                xPadding: 15,
                yPadding: 15
            }
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