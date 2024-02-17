<?php
$page_session = \CodeIgniter\Config\Services::session();
?>

<?= $this->extend("layout/base"); ?>

<?= $this->section("content"); ?>

<script>
    setTimeout(function() {
        $("#hidemessage").hide();
    }, 3000);
</script>


<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Add Resident</h1>
    <hr />
    <a href="<?= base_url() ?>residentcontroller/viewresident" class="d d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-table fa-sm text-white-50"></i> View Resident</a>
</div>

<form name="addphlebotomist" method="post">
    <div class="row">

        <div class="col-lg-12">
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Personal Information</h6>
                </div>

                <!-- Messages for SUCCESS and ERRORS -->
                <?php if ($page_session->getTempdata('success')) : ?>
                    <div id="hidemessage" class="badge badge-success pt-2">
                        <h6>
                            <?= $page_session->getTempdata('success'); ?>
                        </h6>
                    </div>
                <?php endif; ?>
                <?php if ($page_session->getTempdata('error')) : ?>
                    <div id="hidemessage" class="badge badge-danger pt-2">
                        <?= $page_session->getTempdata('error'); ?>
                    </div>
                <?php endif; ?>

                <div class="row card-body">
                    <!-- First Row -->
                    <div class="form-group col-xl-3">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lname" placeholder="Enter last name">
                    </div>
                    <div class="form-group col-xl-3">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="fname" placeholder="Enter first name">
                    </div>
                    <div class="form-group col-xl-3">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" name="mname" placeholder="Enter middle name">
                    </div>
                    <div class="form-group col-xl-1">
                        <label>Suffix</label>
                        <input type="text" class="form-control" name="suffix" placeholder="Enter suffix">
                    </div>
                    <div class="form-group col-xl-2">
                        <label>Nickname</label>
                        <input type="text" class="form-control" name="nname" placeholder="Enter nickname">
                    </div>

                    <!-- Second Row -->
                    <div class="form-group col-xl-2">
                        <label>Date of Birth</label>
                        <input type="date" class="form-control" name="datebirth">
                    </div>
                    <div class="form-group col-xl-4">
                        <label>Place of Birth</label>
                        <input type="text" class="form-control" name="placebirth" placeholder="Enter place of birth">
                    </div>
                    <div class="form-group col-xl-3">
                        <label>Civil Status</label>
                        <select name="civilstat" class="form-control">
                            <option value="" hidden>Select Civil Status</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Widow">Widow/er</option>
                            <option value="Separated">Separated</option>
                            <option value="Cohabitation">Cohabitation</option>
                        </select>
                    </div>
                    <div class="form-group col-xl-3">
                        <label>Ethinicity</label>
                        <select name="ethnic" class="form-control">
                            <option value="" hidden>Select Ethnicity</option>
                            <option value="Tagalog">Tagalog</option>
                            <option value="Bisaya">Bisaya</option>
                            <option value="Ilocano">Ilocano</option>
                            <option value="Cebuano">Cebuano</option>
                            <option value="Illonggo">Illonggo</option>
                            <option value="Bicol">Bicol</option>
                            <option value="Waray">Waray</option>
                            <option value="Kapampangan">Kapampangan</option>
                            <option value="Maranao">Maranao</option>
                            <option value="Maguindanao">Illonggo</option>
                            <option value="Tausog">Tausog</option>
                            <option value="Pangasinan">Pangasinan</option>
                        </select>
                    </div>

                    <!-- Third Row -->
                    <div class="form-group col-xl-3">
                        <label>Educational Attainment</label>
                        <select name="education" class="form-control">
                            <option value="" hidden>Select Ethnicity</option>
                            <option value="None">None</option>
                            <option value="ALS">ALS</option>
                            <option value="Vocational">Vocational</option>
                            <option value="Pre-school">Pre-school</option>
                            <option value="Elem. Student">Elem. Student</option>
                            <option value="Elem. Undergrad">Elem. Undergrad</option>
                            <option value="Elem. Graduate">Elem. Graduate</option>
                            <option value="HS Student">HS Student</option>
                            <option value="HS Ungrad">HS Ungrad</option>
                            <option value="HS Graduate">HS Graduate</option>
                            <option value="SHS Student">SHS Student</option>
                            <option value="SHS Undergrad">SHS Undergrad</option>
                            <option value="College Undergrad">SHS Graduate</option>
                            <option value="College Student">College Student</option>
                            <option value="College Undergrad">College Undergrad</option>
                            <option value="College Gradaute">College Gradaute</option>
                            <option value="Post Grad">Post Grad</option>
                        </select>
                    </div>
                    <div class="form-group col-xl-3">
                        <label>Citizenship</label>
                        <input type="text" class="form-control" name="citizenship" placeholder="Enter citizenship">
                    </div>
                    <div class="form-group col-xl-1">
                        <label>Age</label>
                        <input type="text" class="form-control" name="age" placeholder="Enter age">
                    </div>
                    <div class="form-group col-xl-2">
                        <label>Gender</label>
                        <select name="gender" class="form-control">
                            <option value="" hidden>Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group col-xl-3">
                        <label>Religion</label>
                        <select name="religion" class="form-control">
                            <option value="" hidden>Select Religion</option>
                            <option value="Roman Catholic">Roman Catholic</option>
                            <option value="Iglesia Ni Cristo">Iglesia Ni Cristo</option>
                            <option value="Islam">Islam</option>
                            <option value="Baptist">Baptist</option>
                            <option value="Born Again">Born Again</option>
                            <option value="Johovahs Witnesss">Johovahs Witnesss</option>
                            <option value="Protestant">Protestant</option>
                            <option value="Seventh Day Adventist">Seventh Day Adventist</option>
                            <option value="Filipinista">Filipinista</option>
                        </select>
                    </div>

                    <!-- Fourth Row -->
                    <div class="form-group col-xl-3">
                        <label>Occupation</label>
                        <input type="text" class="form-control" name="occupation" placeholder="Enter occupation">
                    </div>
                    <div class="form-group col-xl-2">
                        <label>Mobile</label>
                        <input type="text" class="form-control" name="mobile" placeholder="Enter mobile">
                    </div>
                    <div class="form-group col-xl-2">
                        <label>House Position</label>
                        <select name="house_pos" class="form-control">
                            <option value="" hidden>Select Position</option>
                            <option value="Father">Father</option>
                            <option value="Mother">Mother</option>
                            <option value="Son">Son</option>
                            <option value="Daughter">Daughter</option>
                        </select>
                    </div>
                    <div class="form-group col-xl-2">
                        <label>House Head</label>
                        <select name="hh_head" class="form-control">
                            <option value="" hidden>Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-group col-xl-1">
                        <label>4P's</label>
                        <select name="forkeeps" class="form-control">
                            <option value="" hidden>Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-group col-xl-1">
                        <label>PWD</label>
                        <select name="pwd" class="form-control">
                            <option value="" hidden>Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-group col-xl-1">
                        <label>Senior Citizen</label>
                        <select name="senior_citizen" class="form-control">
                            <option value="" hidden>Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <!-- Fifth Row -->
                    <div class="form-group col-xl-2">
                        <label>Purok</label>
                        <select name="purok" class="form-control">
                            <option value="" hidden>Select Purok</option>
                            <option value="Purok-1">Purok-1</option>
                            <option value="Purok-2">Purok-2</option>
                            <option value="Purok-3">Purok-3</option>
                            <option value="Purok-4">Purok-4</option>
                            <option value="Purok-5">Purok-5</option>
                            <option value="Purok-6">Purok-6</option>
                            <option value="Purok-7">Purok-7</option>
                        </select>
                    </div>
                    <div class="form-group col-xl-2">
                        <label>Household</label>
                        <select name="household" class="form-control">
                            <option value="" hidden>Select Household</option>
                        </select>
                    </div>
                    <div class="form-group col-xl-2">
                        <label>User Type</label>
                        <select name="user_type" class="form-control">
                            <option value="Resident" hidden>Resident</option>
                            <option value="Admin">Admin</option>
                            <option value="Resident">Resident</option>
                        </select>
                    </div>
                    <div class="form-group col-xl-3">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter username">
                    </div>
                    <div class="form-group col-xl-3">
                        <label>Password</label>
                        <input type="text" class="form-control" name="password" placeholder="Enter password">
                    </div>

                </div>
                <div class="form-group col-lg-1">
                    <input type="submit" class="btn btn-primary btn-user" name="submit" id="submit">
                </div>
            </div>

        </div>

    </div>

</form>


<?= $this->endSection(); ?>