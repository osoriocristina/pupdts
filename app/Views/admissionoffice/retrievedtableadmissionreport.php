<br>
<h1 style = "font-weight: bold;">REGISTRATION AND ADMISSION OFFICE</h1>
<h2>Summary of Incomplete Submission of Admission Credentials </h2>
<h4>Month Date - Month Date</h4>
<section class="container-fluid">

<section class="container-fluid">
<br>
  <div class="card">
    <div class="card-body" style="min-height: 100vh; display: flex; flex-direction: column">
      <table class="table table-responsive table-striped table-bordered mt-3 dataTable" style="width:100%" cellspacing="1" cellpadding="5" border="1" style = "align: center">
        <thead class="table-dark">
          <tr >
            <th>Student No.</th>
            <th>Student Name</th>
            <th>Course</th>
            <th>File Retrieved</th>
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
                    echo 'SAR/PUPCET RESULTS';
                  }elseif ($record['requirementsID'] == 2) {
                    echo 'F137';
                  }elseif ($record['requirementsID'] == 3) {
                    echo 'Grade 10 Card';
                  }elseif ($record['requirementsID'] == 11) {
                    echo 'Grade 11 Card';
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