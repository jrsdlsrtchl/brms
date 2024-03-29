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
    <h1 class="h3 mb-0 text-gray-800">Manage Resident</h1>
    <hr />
    <a href="<?= base_url() ?>residentcontroller/viewresident" class="d d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa-solid fa-arrow-left"></i> Back </a>
</div>

<form name="addphlebotomist" method="post">
    <div class="row">

        <div class="col-lg-12">
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Resident Information</h6>
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
                        <input type="text" class="form-control" name="lname" value="<?= $residents->lname; ?>">
                    </div>
                    <div class="form-group col-xl-3">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="fname" value="<?= $residents->fname; ?>">
                    </div>
                    <div class="form-group col-xl-3">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" name="mname" value="<?= $residents->mname; ?>">
                    </div>
                    <div class="form-group col-xl-1">
                        <label>Suffix</label>
                        <input type="text" class="form-control" name="suffix" value="<?= $residents->suffix; ?>">
                    </div>
                    <div class="form-group col-xl-2">
                        <label>Nickname</label>
                        <input type="text" class="form-control" name="nname" value="<?= $residents->nname; ?>">
                    </div>

                    <!-- Second Row -->
                    <div class="form-group col-xl-2">
                        <label>Date of Birth</label>
                        <input type="date" class="form-control" name="datebirth" value="<?= $residents->datebirth; ?>">
                    </div>
                    <div class="form-group col-xl-4">
                        <label>Place of Birth</label>
                        <input type="text" class="form-control" name="placebirth" value="<?= $residents->placebirth; ?>">
                    </div>
                    <div class="form-group col-xl-3">
                        <label>Civil Status</label>
                        <select name="civilstat" class="form-control">
                            <option hidden><?= $residents->civilstat; ?></option>
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
                            <option hidden><?= $residents->ethnic; ?></option>
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
                            <option hidden><?= $residents->education; ?></option>
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
                        <input type="text" class="form-control" name="citizenship" value="<?= $residents->citizenship; ?>">
                    </div>
                    <div class="form-group col-xl-1">
                        <label>Age</label>
                        <input type="text" class="form-control" name="age" value="<?= $residents->age; ?>">
                    </div>
                    <div class="form-group col-xl-2">
                        <label>Gender</label>
                        <select name="gender" class="form-control">
                            <option hidden><?= $residents->gender; ?></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group col-xl-3">
                        <label>Religion</label>
                        <select name="religion" class="form-control">
                            <option hidden><?= $residents->religion; ?></option>
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
                        <input type="text" class="form-control" name="occupation" value="<?= $residents->occupation; ?>">
                    </div>
                    <div class="form-group col-xl-3">
                        <label>Mobile</label>
                        <input type="text" class="form-control" name="mobile" value="<?= $residents->mobile; ?>">
                    </div>
                    <div class="form-group col-xl-3">
                        <label>House Position</label>
                        <select name="house_pos" class="form-control">
                            <option hidden><?= $residents->house_pos; ?></option>
                            <option value="Father">Father</option>
                            <option value="Mother">Mother</option>
                            <option value="Son">Son</option>
                            <option value="Daughter">Daughter</option>
                        </select>
                    </div>
                    <div class="form-group col-xl-1">
                        <label>4P's</label>
                        <select name="forkeeps" class="form-control">
                            <option hidden><?= $residents->forkeeps; ?></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-group col-xl-1">
                        <label>PWD</label>
                        <select name="pwd" class="form-control">
                            <option hidden><?= $residents->pwd; ?></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-group col-xl-1">
                        <label>Senior Citizen</label>
                        <select name="senior_citizen" class="form-control">
                            <option hidden><?= $residents->senior_citizen; ?></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <!-- Fifth Row -->
                    <div class="form-group col-xl-2">
                        <label>Purok</label>
                        <select name="purok_id" class="form-control" id="fetchpurok">
                            <?php foreach ($purok as $pur) {
                                $userID = $pur->purok_id;
                                $isSelected = $residents->purok_id === $userID ? 'selected' : '';
                            ?>
                                <option value="<?= $userID ?> " <?= $isSelected; ?>> <?= $pur->purok_desc; ?> </option>
                            <?php }; ?>
                        </select>
                    </div>
                    <div class="form-group col-xl-2">
                        <label>Household</label>
                        <select name="household_id" class="form-control" id="selecthouse">
                            <option value=" <?= $residents->household_id; ?>"> <?= $residents->household_desc; ?> </option>
                        </select>
                    </div>
                    <div class="form-group col-xl-2">
                        <label>User Type</label>
                        <select name="user_type" class="form-control">
                            <option hidden><?= $residents->user_type; ?></option>
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

<?= $this->section("script"); ?>

<script>
    $(document).ready(function() {
        $("#fetchpurok").on('change', function() {
            var value = $(this).val();
            // alert(value);

            $.ajax({
                method: "GET", // GET, POST, PUT, DELETE, PATCH
                url: "http://localhost/brms/residentcontroller/selectHH",
                data: {
                    'puroknumber': value,
                },
                success: function(response) {

                    var select = $("#selecthouse")

                    if (response) {
                        $("#selecthouse").empty()
                        response.forEach((household) => {
                            var option = $("<option></option>")
                            option.text(`${household.household_desc}`)
                            // option.text(`${household.lname} ${household.fname} ${"Household"}`) // concat 
                            option.val(household.household_id) // val

                            // <option value="2">This is the text</option>

                            select.append(option) // append
                        })
                    }
                }
            });

        });
    });
</script>

<?= $this->endSection(); ?>