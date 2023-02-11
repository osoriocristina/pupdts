<section class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-0 mt-5 ms-5">
  <nav style="--bs-breadcrumb-divider: '<'; font-weight: bold;" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url('admission'); ?>"><i class="fas fa-home"></i></a></li>
          <li class="breadcrumb-item active" aria-current="page">Back to Dashboard</li>
        </ol>
        <form  action="/admission/retrieved-report" method="get">  
            <!-- di ko din alam kung paano nagana to kahit wala namang controller haha -->         
            <button type="submit" class="float-end btn btn-primary" formtarget="_blank"> Generate Report</button>
        </form>
      </nav>
     
  </div>

  <div class="row">
    <div class="col-4"></div>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card pending shadow h-100 py-2">
        <div class="card-body"> 
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="fw-bold text-success text-uppercase mb-1">
                  Retrieved Credentials
                </div>
                <div class="h5 mb-0 fw-bold"><?php echo count($retrieved_record); ?></div>
              </div>
              <div class="col-auto">
                <i style="color:green;" class="fas fa-download fa-2x"></i>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="col-4"></div>
  </div>
<br>
  <div class="card">
    <div class="card-body">
      <table class="table table-responsive table-striped table-bordered mt-3 dataTable" style="width:100%">
        <thead class="table-dark">
          <tr>
            <th>Student No.</th>
            <th>Student Name</th>
            <th>Course</th>
            <th>File Name</th>
            <th>Status</th>
            <th>Date Retrieved</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($retrieved_record as $record): ?>
            <tr>
              <td><?=esc($record['student_number']) ?></td>
              <td>
                <?php if (!empty($record['middlename'])): ?>
                  <?=esc(ucwords($record['firstname'].' '.$record['middlename'].' '.$record['lastname']))?>
                <?php else: ?>
                  <?=esc(ucwords($record['firstname'].' '.$record['lastname']))?>
                <?php endif ?>
              </td>
              <td><?=esc(ucwords($record['abbreviation']))?></td>
              <td>
                <?php 
                  if ($record['requirementsID'] == 1){
                    echo 'SAR Form/PUPCCT Results';
                  }elseif ($record['requirementsID'] == 2) {
                    echo 'F137';
                  }elseif ($record['requirementsID'] == 3) {
                    echo 'Grade 10 Card';
                  }elseif ($record['requirementsID'] == 11) {
                    echo 'Grade 11 Card';
                  }elseif ($record['requirementsID'] == 12) {
                    echo 'Grade 12 Card';
                  }elseif ($record['requirementsID'] == 4) {
                    echo 'PSA/NSO';
                  }elseif ($record['requirementsID'] == 5) {
                    echo 'Certification of Good Moral';
                  }elseif ($record['requirementsID'] == 6) {
                    echo 'Medical Clearance';
                  }elseif ($record['requirementsID'] == 7) {
                    echo '2x2 Picture';
                  }
                ?>
              </td>
              <td>Retrieved</td>
              <td><?=esc($record['retrieved_at'])?></td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
  
</section>