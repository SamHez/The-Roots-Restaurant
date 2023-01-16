<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="">
	<meta name="author" content="">
	<meta name="keywords" content="">

	<title>Dashboard | The Roots Web Portal</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="assets/vendors/core/core.css">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="assets/vendors/flatpickr/flatpickr.min.css">
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

        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            <h4 class="mb-3 mb-md-0">Dashboard</h4>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow-1">

              <!-- MAIN ANALYTICS -->
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Users Today</h6>
                      <div class="dropdown mb-2">
                        <a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-5">
                        <h3 class="mb-2">3,897</h3>
                        <div class="d-flex align-items-baseline">
                          <p class="text-success">
                            <span>+3.3%</span>
                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                          </p>
                        </div>
                      </div>
                      <div class="col-6 col-md-12 col-xl-7">
                        <div id="customersChart" class="mt-md-3 mt-xl-0"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- START RESERVATIONS SUMMARY -->
              <div class="col-md-2 grid-margin stretch-card">
                <div class="card" style="background-color: #e5d3b3;">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">RESERVATIONS</h6>
                      <div class="dropdown mb-2">
                        <a type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-9">
                        <h2 class="mb-2">22</h2>
                      </div>
                      <div class="col-6 col-md-12 col-xl-3">
                      <i class="link-icon" data-feather="calendar" style="max-height: 500px;"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END RESERVATIONS SUMMARY -->


              <!-- START MESSAGES SUMMARY -->
              <div class="col-md-2 grid-margin stretch-card">
                <div class="card" style="background-color: #bc9e79;">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">MESSAGES</h6>
                      <div class="dropdown mb-2">
                        <a type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-9">
                        <h2 class="mb-2">3</h2>
                      </div>
                      <div class="col-6 col-md-12 col-xl-3">
                      <i class="link-icon" data-feather="mail" style="max-height: 500px;"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END MESSAGES SUMMARY -->

            </div>



          </div>
        </div> 

        <!--------------- 
          THE ROOTS MENU
        ----------------->
        <div class="row">
          <div class="col-lg-7 col-xl-8 stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">The Roots Menu</h6>
                    <div class="dropdown mb-2">
                      <a type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-hover mb-0">
                      <thead>
                        <tr>
                          <th class="pt-0">#</th>
                          <th class="pt-0">Project Name</th>
                          <th class="pt-0">Start Date</th>
                          <th class="pt-0">Due Date</th>
                          <th class="pt-0">Status</th>
                          <th class="pt-0">Assign</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>NobleUI jQuery</td>
                          <td>01/01/2022</td>
                          <td>26/04/2022</td>
                          <td><span class="badge bg-danger">Released</span></td>
                          <td>Leonardo Payne</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>NobleUI Angular</td>
                          <td>01/01/2022</td>
                          <td>26/04/2022</td>
                          <td><span class="badge bg-success">Review</span></td>
                          <td>Carl Henson</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>NobleUI ReactJs</td>
                          <td>01/05/2022</td>
                          <td>10/09/2022</td>
                          <td><span class="badge bg-info">Pending</span></td>
                          <td>Jensen Combs</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>NobleUI VueJs</td>
                          <td>01/01/2022</td>
                          <td>31/11/2022</td>
                          <td><span class="badge bg-warning">Work in Progress</span>
                          </td>
                          <td>Amiah Burton</td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>NobleUI Laravel</td>
                          <td>01/01/2022</td>
                          <td>31/12/2022</td>
                          <td><span class="badge bg-danger">Coming soon</span></td>
                          <td>Yaretzi Mayo</td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>NobleUI NodeJs</td>
                          <td>01/01/2022</td>
                          <td>31/12/2022</td>
                          <td><span class="badge bg-primary">Coming soon</span></td>
                          <td>Carl Henson</td>
                        </tr>
                        <tr>
                          <td class="border-bottom">3</td>
                          <td class="border-bottom">NobleUI EmberJs</td>
                          <td class="border-bottom">01/05/2022</td>
                          <td class="border-bottom">10/11/2022</td>
                          <td class="border-bottom"><span class="badge bg-info">Pending</span></td>
                          <td class="border-bottom">Jensen Combs</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div> 
              </div>
            </div>


        <!--------------- 
          RECENT RESERVATIONS
        ----------------->

          <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                  <h6 class="card-title mb-0">Recent Reservations</h6>
                  <div class="dropdown mb-2">
                    <a type="button" id="dropdownMenuButton6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                    </div>
                  </div>
                </div>
                <div class="d-flex flex-column">
                  <a href="javascript:;" class="d-flex align-items-center border-bottom pb-3">
                    <div class="me-3">
                      <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                    </div>
                    <div class="w-100">
                      <div class="d-flex justify-content-between">
                        <h6 class="text-body mb-2">Leonardo Payne</h6>
                        <p class="text-muted tx-12">12.30 PM</p>
                      </div>
                      <p class="text-muted tx-13">Hey! there I'm available...</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                    <div class="me-3">
                      <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                    </div>
                    <div class="w-100">
                      <div class="d-flex justify-content-between">
                        <h6 class="text-body mb-2">Carl Henson</h6>
                        <p class="text-muted tx-12">02.14 AM</p>
                      </div>
                      <p class="text-muted tx-13">I've finished it! See you so..</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                    <div class="me-3">
                      <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                    </div>
                    <div class="w-100">
                      <div class="d-flex justify-content-between">
                        <h6 class="text-body mb-2">Jensen Combs</h6>
                        <p class="text-muted tx-12">08.22 PM</p>
                      </div>
                      <p class="text-muted tx-13">This template is awesome!</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                    <div class="me-3">
                      <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                    </div>
                    <div class="w-100">
                      <div class="d-flex justify-content-between">
                        <h6 class="text-body mb-2">Amiah Burton</h6>
                        <p class="text-muted tx-12">05.49 AM</p>
                      </div>
                      <p class="text-muted tx-13">Nice to meet you</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                    <div class="me-3">
                      <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                    </div>
                    <div class="w-100">
                      <div class="d-flex justify-content-between">
                        <h6 class="text-body mb-2">Yaretzi Mayo</h6>
                        <p class="text-muted tx-12">01.19 AM</p>
                      </div>
                      <p class="text-muted tx-13">Hey! there I'm available...</p>
                    </div>
                  </a>
                </div>
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
  <script src="assets/vendors/flatpickr/flatpickr.min.js"></script>
  <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="assets/vendors/feather-icons/feather.min.js"></script>
	<script src="assets/js/template.js"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  <script src="assets/js/dashboard-light.js"></script>
	<!-- End custom js for this page -->

</body>
</html>    