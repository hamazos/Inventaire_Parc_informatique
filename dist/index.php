<?php 
    include('function/stat_dash.php'); 
    include_once('include/head.php');      
?> 
   <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"><i class="fas fa-tachometer-alt"></i>Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">TOTALE</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                       <h1><a class="small text-white stretched-link" ><?php echo $row_total;?></a></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">EN SERVICE</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h1><a class="small text-white stretched-link" ><?php echo $row_serv;?></a></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">EN STOCK</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h1><a class="small text-white stretched-link" ><?php echo $row_stock;?></a></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">EN PANNE</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h1><a class="small text-white stretched-link" ><?php echo $row_panne;?></a></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">A ABONDONNER</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h1><a class="small text-white stretched-link" ><?php echo $row_abond;?></a></h1>
                                    </div>
                                </div>
                            </div>
                        </div>                            
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Charts</li>
                        </ol>                    
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Etat matrielle informatique INLUCC - 2020</div>
                                    <div id="chart-container">
                                        <canvas id="myChart" style="height: 370px; width: 100%;"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-pie mr-1"></i>Total matrielle informatique INLUCC - 2020</div>
                                    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                                    <script src="js/canvasjs.min.js"></script>
                                </div>
                            </div>
                        </div>
                        <script >
                            var row =<?php echo json_encode($row_serv); ?>;
                            var row1 =<?php echo json_encode($row_stock); ?>;
                            var row2 =<?php echo json_encode($row_panne); ?>;
                            var row3 =<?php echo json_encode($row_abond); ?>;
                            var ctx = document.getElementById("myChart").getContext('2d');
                            var myChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                labels: ["En Service", "En Stock", "En Panne","ABONDONNER",],
                                datasets: [{
                                label: '# Matrielle infortatique',
                                data: [row, row1, row2, row3],
                                backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                                }]
                                },
                                options: {
                                scales: {
                                yAxes: [{
                                ticks: {
                                beginAtZero: true
                                }
                                }]
                                }
                                }
                            });
                        </script>
                        <script>
	                        var row =<?php echo json_encode($row_cnt); ?>;
	                        var row1 =<?php echo json_encode($row_cnt1); ?>;
                            var row2 =<?php echo json_encode($row_cnt2); ?>;
                            var row3 =<?php echo json_encode($row_cnt3); ?>;
                            var row4 =<?php echo json_encode($row_cnt4); ?>;
                            var row5 =<?php echo json_encode($row_cnt5); ?>;
                            var row6 =<?php echo json_encode($row_cnt6); ?>;
                            window.onload = function() {

                                var chart = new CanvasJS.Chart("chartContainer", {
                                    animationEnabled: true,
                                    data: [{
                                    type: "pie",
                                    startAngle: 240,
                                    yValueFormatString: "##0\"\"",
                                    indexLabel: "{label} {y}",
                                    dataPoints: [
                                    {y: row, label: "PC bureau"},
                                    {y: row1, label: "Fax"},
                                    {y: row2, label: "Imprimante"},
                                    {y: row3, label: "Photocopie"},
                                    {y: row4, label: "PC Portable"},
                                    {y: row5, label: "Scanner"},
                                    {y: row6, label: "Serveur"}
                                    ]
                                    }]
                                });
                                chart.render();
                            }
                        </script>
                    </div>
                </main>     
<?php 
    include_once('include/footer.php');      
?> 