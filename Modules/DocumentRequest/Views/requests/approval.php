<section class="dashboard">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h2 class="h3 mb-0">Dashboard</h2>
   <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> -->

   <form  action="Admin/generalreport" method="get">
             <div class="col-12">
                 <div class="col-12 mb-3">
                 <button style= "background-color:#1b71fa" type="submit" class="float-end btn btn-secondary" formtarget="_blank"> Generate Report</button>
                 </div>
            </div>
        </div>

    <div class="row">
        <!-- BSIT -->
        
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card bsit shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="fw-bold text-danger text-uppercase mb-1">
                          <a class="nav-link sideLink" href="/bsit-course">BS Information Technology</a></div>
                          <div class="h5 mb-0 fw-bold"><?=esc($request_count)?></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>


      <!-- BSECE -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card bsece shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">          
                    <div class="col mr-2">
                          <div class="fw-bold text-warning text-uppercase mb-1">
                          <a class="nav-link sideLink " href="/bsece-course">BS Electronics Engineering</a></div>
                          <div class="h5 mb-0 fw-bold text-gray-800"><?=esc($detail_count)?></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- BSME -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card bsme shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                  
                      <div class="col mr-2">
                          <div class="fw-bold text-warning text-uppercase mb-1">
                          <a class="nav-link sideLink" href="/bsme-course">BS Mechanical Engineering</a></div>
                          <div class="h5 mb-0 fw-bold text-gray-800"><?=esc($detail_count)?></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!--BSED MATH-->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card bsedm shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="fw-bold text-warning text-uppercase mb-1">
                          <a class="nav-link sideLink" href="/completed"> BS Education Math</a></div>
                          <div class="h5 mb-0 fw-bold text-gray-800"><?=esc($detail_count)?></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    <!--BSED ENG-->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card bsede shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="fw-bold text-warning text-uppercase mb-1">
                          <a class="nav-link sideLink" href="/completed"> BS Education English</a></div>
                          <div class="h5 mb-0 fw-bold text-gray-800"><?=esc($detail_count)?></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
    <!-- BS MARKETING -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card bsm shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">           
                      <div class="col mr-2">
                          <div class="fw-bold text-info text-uppercase mb-1">
                          <a class="nav-link sideLink " href="/completed"> BS Marketing</a></div>
                          <div class="h5 mb-0 fw-bold"><?=esc($claim_count)?></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- BS HRM -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card bshrm shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="fw-bold text-success text-uppercase mb-1">
                          <a class="nav-link sideLink " href="/completed">
                            BS HRM</a>
                          </div>
                          <div class="row no-gutters align-items-center">
                              <div class="col-auto">
                                  <div class="h5 mb-0 mr-3 fw-bold"><?=esc($completed_count)?></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
        <!-- BSOA -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card bsoa shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
        
                      <div class="col mr-2">
                          <div class="fw-bold text-warning text-uppercase mb-1">
                          <a class="nav-link sideLink" href="/completed"> BS Office Administration</a></div>
                          <div class="h5 mb-0 fw-bold text-gray-800"><?=esc($detail_count)?></div>
                        </div>
                  </div>
              </div>
          </div>
      </div>
        <!-- DOMT -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card domt shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
        
                      <div class="col mr-2">
                          <div class="fw-bold text-warning text-uppercase mb-1">
                          <a class="nav-link sideLink" href="/completed">DOMT</a></div>
                          <div class="h5 mb-0 fw-bold text-gray-800"><?=esc($detail_count)?></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
        <!-- DICT -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card dict shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
        
                      <div class="col mr-2">
                          <div class="fw-bold text-warning text-uppercase mb-1">
                          <a class="nav-link sideLink" href="/completed"> DICT</a></div>
                          <div class="h5 mb-0 fw-bold text-gray-800"><?=esc($detail_count)?></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      </form>
  </div>

  <!-- <div class="row">
    <div class="col-xl-4 col-lg-5">
      <div class="card shadow mb-4 activity-log">
          <div class="card-header py-3">
              <h6 class="m-0 fw-bold text-primary">Activity Log</h6>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered">
                  <thead class="table-dark text-center">
                    <th style="width: 70%;">Activity</th>
                    <th style="width: 30%;">Date - Time</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Confirmed one(1) pending request</td>
                      <td>1/1/21 12:00pm</td>
                    </tr>
                    <tr>
                      <td>Processed a document</td>
                      <td>1/1/21 12:00pm</td>
                    </tr>
                    <tr>
                      <td>Printed a document</td>
                      <td>1/1/21 12:00pm</td>
                    </tr>
                    <tr>
                      <td>Completed request</td>
                      <td>1/1/21 12:00pm</td>
                    </tr>
                  </tbody>
                </table>
              </div>
          </div>
      </div>
    </div> -->

    <!-- <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 fw-bold text-primary">Requested Documents per Month</h6>
            </div>
            <div class="card-body">
                <div class="chart-bar">
                    <canvas id="myBarChart"></canvas>
                </div>
            </div>
        </div>
    </div> -->
</section>
