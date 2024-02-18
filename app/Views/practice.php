<?php

use Kint\Zval\Value;

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
                    <div class="form-group" id="purok">
                        <label>Purok</label>
                        <select name="purok" id="fetchpurok" class="form-control">
                            <option hidden>Select Purok</option>
                            <?php foreach ($purok as $pur) { ?>
                                <option value="<?= $pur->purok_id; ?>"> <?= $pur->purok_desc; ?></option>
                            <?php }; ?>
                        </select>
                    </div>
                    <div class="form-group col-xl-2">
                        <label>Household</label>
                        <select name="household" class="form-control" id="selecthouse">
                            <option value="" hidden>Select Household</option>
                        </select>
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
                method: "POST",
                url: "residentcontroller/practice",
                data: {
                    'puroknumber': value,
                },
                success: function(response) {
                    console.log(response);
                }
            });

        });
    });
</script>
<?= $this->endSection(); ?>