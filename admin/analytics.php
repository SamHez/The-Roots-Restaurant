<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="">
	<meta name="keywords" content="">

	<title>Analytics | The Roots Web Portal</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="assets/vendors/core/core.css">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="assets/css/demo3/style.css">
  <!-- End layout styles -->

  <link href="../static/images/favicon/favicon.png" rel="icon">
</head>
<body>
	<div class="main-wrapper">

	<!-- INCLUDE NAVBAR -->
  <?php include('nav.inc.php'); ?>
  <!-- INCLUDE NAVBAR -->
	
		<div class="page-wrapper">

			<div class="page-content">

        <div class="row">
          <div class="col-md-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Chart.js</h6>
                <p>Simple yet flexible JavaScript charts. Read the <a href="https://www.chartjs.org/" target="_blank"> Official Chart.js Documentation</a> for a full list of instructions and other options.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Bar chart</h6>
                <canvas id="chartjsBar"></canvas>
              </div>
            </div>
          </div>
          <div class="col-xl-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Line chart</h6>
                <canvas id="chartjsLine"></canvas>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Doughnut chart</h6>
                <canvas id="chartjsDoughnut"></canvas>
              </div>
            </div>
          </div>
          <div class="col-xl-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Area chart</h6>
                <canvas id="chartjsArea"></canvas>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-xl-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Pie chart</h6>
                <canvas id="chartjsPie"></canvas>
              </div>
            </div>
          </div>
          <div class="col-xl-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Bubble chart</h6>
                <canvas id="chartjsBubble"></canvas>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Radar chart</h6>
                <canvas id="chartjsRadar"></canvas>
              </div>
            </div>
          </div>
          <div class="col-xl-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Polar area chart</h6>
                <canvas id="chartjsPolarArea"></canvas>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-6 grid-margin grid-margin-xl-0 stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Grouped bar chart</h6>
                <canvas id="chartjsGroupedBar"></canvas>
              </div>
            </div>
          </div>
          <div class="col-xl-6 stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Mixed bar chart</h6>
                <canvas id="chartjsMixedBar"></canvas>
              </div>
            </div>
          </div>
        </div>

			</div>

			<!-- START FOOTER -->
			<footer class="footer border-top">
        <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between py-3 small">
          <p class="text-muted mb-1 mb-md-0">Copyright © 2023 The Roots Restaurant.</p>
          <p class="text-muted">Developed by Samuel Epodoi</p>
        </div>
			</footer>
			<!-- END FOOTER -->
	
		</div>
	</div>

	<!-- core:js -->
	<script src="assets/vendors/core/core.js"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
  <script src="assets/vendors/chartjs/Chart.min.js"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="assets/vendors/feather-icons/feather.min.js"></script>
	<script src="assets/js/template.js"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  <script src="assets/js/chartjs-light.js"></script>
	<!-- End custom js for this page -->

</body>
</html>