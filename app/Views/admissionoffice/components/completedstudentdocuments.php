<section class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-0 mt-5 ms-5">
    <nav style="--bs-breadcrumb-divider: '<'; font-weight: bold;" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url('admission'); ?>"><i class="fas fa-home"></i></a></li>
          <li class="breadcrumb-item active" aria-current="page">Back to Dashboard</li>
        </ol>
        <form  action="/admission/complete-report" method="get">  
            <!-- di ko din alam kung paano nagana to kahit wala namang controller haha -->         
            <button type="submit" class="float-end btn btn-primary" formtarget="_blank"> Generate Report</button>
        </form>
      </nav>
      <hr>
  </div>

  <div class="row">
    <div class="col-4"></div>
   <div class="col-xl-3 col-md-6 mb-4">
      <div class="card printed shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="fw-bold text-warning text-uppercase mb-1">
                Completed  
              </div>
              <div class="h5 mb-0 fw-bold"><?php echo count($count_complete); ?></div>
            </div>
              <div class="col-auto">
                <i style="color:green;" class="fas fa-check-circle fa-2x"></i>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="col-4"></div>
  </div>

  <div class="card">
    <div class="card-body">
      <table class="table table-responsive table-striped table-bordered mt-3 dataTable" style="width:100%">
        <thead class="table-dark">
          <tr>
            <th>Student No.</th>
            <th>Student Name</th>
            <th>Course</th>
            
            <th>Batch</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php if (!empty($students)): ?>
            <?php foreach ($students as $student): ?>
                <?php
                  $id = $student['user_id'];
                  $getstudentadmission = new App\Models\StudentadmissionModel; 
                                                      
                  $res = $getstudentadmission->__getSAMDetails($id);
                ?>
                <?php if (!empty($res)): ?>
                  <?php if ($res['admission_status'] == 'complete'): ?>
                    <tr>
                      <td><?=esc($student['student_number'])?></td>
                      <td>
                        <?php if (!empty($student['middlename'])): ?>
                          <?=esc(ucwords($student['firstname'].' '.$student['middlename'][0].'. '.$student['lastname']))?>
                        <?php else: ?>
                         <?=esc(ucwords($student['firstname'].' '.$student['lastname']))?>
                        <?php endif ?>
                      </td>
                      <td><?=esc($student['course'])?></td>
                      <td><?=esc($student['year_graduated'])?></td>
                      
                      <td>
                        <?php if ($res != NUll): ?>
                          <?php if ($res['admission_status'] == 'complete'): ?>
                            <div class="badge bg-success text-wrap" style="width: 6rem;">
                              <?php echo $res['admission_status']; ?>
                            </div>
                          <?php elseif($res['admission_status'] == 'incomplete'): ?>
                            <div class="badge bg-danger text-wrap" style="width: 6rem;">
                              <?php echo $res['admission_status']; ?>
                            </div>
                          <?php endif ?>
                        <?php else: ?>
                          <div class="badge bg-default text-wrap" style="width: 6rem;color:black;">
                            No Files
                          </div>
                        <?php endif ?>
                      </td>
                    </tr>
                  <?php endif ?>
                <?php endif ?>
            <?php endforeach ?>
          <?php endif ?>
        </tbody>
      </table>
    </div>
  </div>
</section>