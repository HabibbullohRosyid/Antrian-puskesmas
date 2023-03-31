<?= $this->extend("layout/master") ?>

<?= $this->section("content") ?>

<!-- Main content -->
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-10 mt-2">
                <h3 class="card-title">kategori Poli</h3>
                </hr>
                <!-- BAR CHART -->

                <div class="chart-container">
                    <div class="bar-chart-container">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
<!-- ChartJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $(function() {
        //get the bar chart canvas
        var cData = JSON.parse(`<?php echo $chart_data; ?>`);
        var ctx = $("#bar-chart");

        //bar chart data
        var data = {
            labels: cData.label,
            datasets: [{
                label: cData.label,
                data: cData.data,
                backgroundColor: [
                    "#DEB887",
                    "#A9A9A9",
                    "#DC143C",
                    "#F4A460",
                    "#2E8B57",
                    "#1D7A46",
                    "#CDA776",
                    "#CDA776",
                    "#989898",
                    "#CB252B",
                    "#E39371",
                ],
                borderColor: [
                    "#CDA776",
                    "#989898",
                    "#CB252B",
                    "#E39371",
                    "#1D7A46",
                    "#F4A460",
                    "#CDA776",
                    "#DEB887",
                    "#A9A9A9",
                    "#DC143C",
                    "#F4A460",
                    "#2E8B57",
                ],
                borderWidth: [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
            }]
        };

        //options
        var options = {
            responsive: true,
            title: {
                display: true,
                position: "top",
                text: "Monthly Registered Users Count",
                fontSize: 18,
                fontColor: "#111"
            },
            legend: {
                display: true,
                position: "bottom",
                labels: {
                    fontColor: "#333",
                    fontSize: 16
                }
            }
        };

        //create bar Chart class object
        var chart1 = new Chart(ctx, {
            type: "bar",
            data: data,
            options: options
        });

    });
</script>

<?= $this->endSection() ?>