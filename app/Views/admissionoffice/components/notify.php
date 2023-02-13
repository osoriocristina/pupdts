<div style="padding-left: 90px; padding-right: 90px">
<section class="container-fluid">
  <br>
  <div class="row">
    <div class="col-6">
      <div class="card" style="border-color: gray;border-width: 2px;">
        <div class="card-body p-4">
          <div align="center">
            <label><h4>SUMMARY</h4></label>
          </div>
          <br>
          <?php if (!empty($studentadmission_details['sar_pupcct_resultID'])): ?>
            <input type="checkbox" value="1" name="sar_pupcct_resultID" checked> SAR Form/PUPCCT Results<br>
          <?php else: ?>
            <i class="fas fa-times" style="color:red;"></i> SAR Form/PUPCCT Results<br>
          <?php endif ?>
          <?php if (!empty($studentadmission_details['f137ID'])): ?>
            <input type="checkbox" value="1" name="f137ID" checked> F137<br>
          <?php else: ?>
            <i class="fas fa-times" style="color:red;"></i> F137<br>
          <?php endif ?>
          <?php if (!empty($studentadmission_details['f138ID'])): ?>
            <input type="checkbox" value="1" name="f138ID" checked> Grade 10 Card<br>
          <?php else: ?>
            <i class="fas fa-times" style="color:red;"></i> Grade 10 Card<br>
          <?php endif ?>
          <?php if (!empty($studentadmission_details['cert_dry_sealID'])): ?>
            <input type="checkbox" value="1" name="cert_dry_sealID" checked> Grade 11 Card<br>
          <?php else: ?>
            <i class="fas fa-times" style="color:red;"></i> Grade 11 Card<br>
          <?php endif ?>
          <?php if (!empty($studentadmission_details['cert_dry_sealID_twelve'])): ?>
            <input type="checkbox" value="1" name="cert_dry_sealID_twelve" checked> Grade 12 Card<br>
          <?php else: ?>
            <i class="fas fa-times" style="color:red;"></i> Grade 12 Card<br>
          <?php endif ?>
          <?php if (!empty($studentadmission_details['psa_nsoID'])): ?>
            <input type="checkbox" value="1" name="psa_nsoID" checked> PSA/NSO<br>
          <?php else: ?>
            <i class="fas fa-times" style="color:red;"></i> PSA/NSO<br>
          <?php endif ?>
          <?php if (!empty($studentadmission_details['good_moralID'])): ?>
            <input type="checkbox" value="1" name="good_moralID" checked> Certification of Good Moral<br>
          <?php else: ?>
            <i class="fas fa-times" style="color:red;"></i> Certification of Good Moral<br>
          <?php endif ?>
          <?php if (!empty($studentadmission_details['medical_certID'])): ?>
            <input type="checkbox" value="1" name="medical_certID" checked> Medical Clearance<br>
          <?php else: ?>
            <i class="fas fa-times" style="color:red;"></i> Medical Clearance<br>
          <?php endif ?>
          <?php if (!empty($studentadmission_details['picture_two_by_twoID'])): ?>
            <input type="checkbox" value="1" name="picture_two_by_twoID" checked> 2x2 Picture<br>
          <?php else: ?>
            <i class="fas fa-times" style="color:red;"></i> 2x2 Picture<br>
          <?php endif ?>
          <hr>
          <label>Other Documents:</label><br>
          <?php if (!empty($studentadmission_details['nc_non_enrollmentID'])): ?>
            <input type="checkbox" value="1" name="nc_non_enrollmentID" checked> Notarized Certificate of Non-enrollment<br>
          <?php else: ?>
            <i class="fas fa-times" style="color:red;"></i> Notarized Certificate of Non-enrollment<br>
          <?php endif ?>
          <?php if (!empty($studentadmission_details['coc_hs_shsID'])): ?>
            <input type="checkbox" value="1" name="coc_hs_shsID" checked> COC (HS/SHS)<br>
          <?php else: ?>
            <i class="fas fa-times" style="color:red;"></i> Notarized Certificate of Non-enrollment<br>
          <?php endif ?>
          <?php if (!empty($studentadmission_details['coc_hs_shsID'])): ?>
            <input type="checkbox" value="1" name="coc_hs_shsID" checked> COC (HS/SHS)<br>
          <?php else: ?>
            <i class="fas fa-times" style="color:red;"></i> COC (HS/SHS)<br>
          <?php endif ?>
          <?php if (!empty($studentadmission_details['ac_pept_alsID'])): ?>
            <input type="checkbox" value="1" name="ac_pept_alsID" checked> Authenticated Copy PEPT/ALS<br>
          <?php else: ?>
            <i class="fas fa-times" style="color:red;"></i> Authenticated Copy PEPT/ALS<br>
          <?php endif ?>

          <hr>
          <label>Graduation Requirements:</label><br>
          <?php if (!empty($studentadmission_details['app_grad'])): ?>
            <input type="checkbox" value="1" name="app_grad" checked> Applicatiopn for Graduation<br>
          <?php else: ?>
            <i class="fas fa-times" style="color:red;"></i> Application for Graduation<br>
          <?php endif ?>

          <?php if (!empty($studentadmission_details['or_app_grad'])): ?>
            <input type="checkbox" value="1" name="or_app_grad" checked> O.R. of Application for Graduation<br>
          <?php else: ?>
            <i class="fas fa-times" style="color:red;"></i> O.R. of Application for Graduation<br>
          <?php endif ?>

          <?php if (!empty($studentadmission_details['latest_regi'])): ?>
            <input type="checkbox" value="1" name="latest_regi" checked> Latest Registration Card<br>
          <?php else: ?>
            <i class="fas fa-times" style="color:red;"></i>  Latest Registration Card<br>
          <?php endif ?>

          <?php if (!empty($studentadmission_details['eval_res'])): ?>
            <input type="checkbox" value="1" name="eval_res" checked> Evaluation Result<br>
          <?php else: ?>
            <i class="fas fa-times" style="color:red;"></i> Evaluation Result<br>
          <?php endif ?>

          <?php if (!empty($studentadmission_details['course_curri'])): ?>
            <input type="checkbox" value="1" name="course_curri" checked> Course Curriculum<br>
          <?php else: ?>
            <i class="fas fa-times" style="color:red;"></i> Course Curriculum<br>
          <?php endif ?>

          <?php if (!empty($studentadmission_details['cert_candi'])): ?>
            <input type="checkbox" value="1" name="cert_candi" checked> Certificate of Candidacy<br>
          <?php else: ?>
            <i class="fas fa-times" style="color:red;"></i> Certificate of Candidacy<br>
          <?php endif ?>

          <?php if (!empty($studentadmission_details['gen_clear'])): ?>
            <input type="checkbox" value="1" name="gen_clear" checked> General Clearance<br>
          <?php else: ?>
            <i class="fas fa-times" style="color:red;"></i> General Clearance<br>
          <?php endif ?>

          <?php if (!empty($studentadmission_details['or_grad_fee'])): ?>
            <input type="checkbox" value="1" name="or_grad_fee" checked> O.R. of Graduation Fees<br>
          <?php else: ?>
            <i class="fas fa-times" style="color:red;"></i>O.R. of Graduation Fee<br>
          <?php endif ?>

          
          <?php if (!empty($studentadmission_details['cert_confer'])): ?>
            <input type="checkbox" value="1" name="cert_confer" checked> Certificate of Conferment<br>
          <?php else: ?>
            <i class="fas fa-times" style="color:red;"></i> Certificate of Conferment<br>
          <?php endif ?>

          <?php if (!empty($studentadmission_details['schoolid'])): ?>
            <input type="checkbox" value="1" name="schoolid" checked>PUP Taguig School ID<br>
          <?php else: ?>
            <i class="fas fa-times" style="color:red;"></i> PUP Taguig School ID<br>
          <?php endif ?>

          <?php if (!empty($studentadmission_details['honor_dis'])): ?>
            <input type="checkbox" value="1" name="honor_dis" checked> PUP Taguig Honorable Dismissal<br>
          <?php else: ?>
            <i class="fas fa-times" style="color:red;"></i> PUP Taguig Honorable Dismissal<br>
          <?php endif ?>

          <?php if (!empty($studentadmission_details['trans_rec'])): ?>
            <input type="checkbox" value="1" name="trans_rec" checked> PUP Taguig Transcript of Record<br>
          <?php else: ?>
            <i class="fas fa-times" style="color:red;"></i> PUP Taguig Transcript of Record<br>
          <?php endif ?>
          
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="card" style="border-color: gray;border-width: 2px;">
        <div class="card-body p-4">
            <div align="center">
              <label><h4>NOTIFY USER</h4></label>
            </div>
            <form action="<?php echo base_url('admission/sendmail-lacking-documents/'.$studentadmission_details['studID']); ?>" method="post">
              <input type="hidden" value="<?php echo $studentadmission_details['email']; ?>" name="email">
              <input type="hidden" value="<?php echo $studentadmission_details['admission_status']; ?>" name="admission_status">
              <input type="checkbox" value="No Dry Seal" name="no_dry_seal"> No Dry Seal<br>
              <input type="checkbox" value="Submitted Certified True Copy" name="sc_true_copy"> Submit Certified True Copy<br>
              <input type="checkbox" value='Sealed Copy with "For PUP Taguig" remarks' name="sc_pup_remarks" > Sealed Copy with "For PUP Taguig" remarks<br>
              <input type="checkbox" value="Submit 1 Photocopy" name="s_one_photocopy" > Submit 1 Photocopy<br>
              <input type="checkbox" value="Submit Original" name="submit_original" > Submit Original<br>
              <input type="checkbox" value="Submit Original" name="not_submit" > Not Submitted<br>
              <hr><br>
              <label>Remarks:</label>
                <textarea name="remarks" class="form-control"></textarea>
              <br>
              <label>Send To: <?php echo $studentadmission_details['email']; ?></label>
              <div align="center">
                <button type="submit" class="btn btn-primary">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Send Email
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</section>
</div>