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


<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Manage Household</h1>
    <hr />
</div>

<!-- DataTales Example -->
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Households Information</h6>
        </div>
        <div class="card-body">
            <div class="accordion accordion-flush" id="accordionFlushExample">

                <div class="accordion-item mb-3">
                    <h2 class="accordion-header " id="flush-headingOne">
                        <button class="accordion-button collapsed form-control btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Purok - 1
                            <i class="fa-solid fa-angles-down ml-3"></i>
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="list-group mb-2">
                                <?php foreach ($houseOne as $house) { ?>
                                    <a href="#" class="list-group-item list-group-item-action"> <?= $house->household_desc; ?> </a>
                                <?php }; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3">
                    <h2 class="accordion-header " id="flush-headingTwo">
                        <button class="accordion-button collapsed form-control btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Purok - 2
                            <i class="fa-solid fa-angles-down ml-3"></i>
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="list-group">
                                <?php foreach ($houseTwo as $house) { ?>
                                    <a href="#" class="list-group-item list-group-item-action"> <?= $house->household_desc; ?> </a>
                                <?php }; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3">
                    <h2 class="accordion-header " id="flush-headingThree">
                        <button class="accordion-button collapsed form-control btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Purok - 3
                            <i class="fa-solid fa-angles-down ml-3"></i>
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="list-group mb-2">
                                <?php foreach ($houseThree as $house) { ?>
                                    <a href="#" class="list-group-item list-group-item-action"> <?= $house->household_desc; ?> </a>
                                <?php }; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3">
                    <h2 class="accordion-header " id="flush-headingFour">
                        <button class="accordion-button collapsed form-control btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            Purok - 4
                            <i class="fa-solid fa-angles-down ml-3"></i>
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="list-group mb-2">
                                <?php foreach ($houseFour as $house) { ?>
                                    <a href="#" class="list-group-item list-group-item-action"> <?= $house->household_desc;; ?> </a>
                                <?php }; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3">
                    <h2 class="accordion-header " id="flush-headingFive">
                        <button class="accordion-button collapsed form-control btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                            Purok - 5
                            <i class="fa-solid fa-angles-down ml-3"></i>
                        </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="list-group mb-2">
                                <?php foreach ($houseFive as $house) { ?>
                                    <a href="#" class="list-group-item list-group-item-action"> <?= $house->household_desc; ?> </a>
                                <?php }; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3">
                    <h2 class="accordion-header " id="flush-headingSix">
                        <button class="accordion-button collapsed form-control btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                            Purok - 6
                            <i class="fa-solid fa-angles-down ml-3"></i>
                        </button>
                    </h2>
                    <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="list-group mb-2">
                                <?php foreach ($houseSix as $house) { ?>
                                    <a href="#" class="list-group-item list-group-item-action"> <?= $house->household_desc; ?> </a>
                                <?php }; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3">
                    <h2 class="accordion-header " id="flush-headingSeven">
                        <button class="accordion-button collapsed form-control btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                            Purok - 7
                            <i class="fa-solid fa-angles-down ml-3"></i>
                        </button>
                    </h2>
                    <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="list-group mb-2">
                                <?php foreach ($houseSeven as $house) { ?>
                                    <a href="#" class="list-group-item list-group-item-action"> <?= $house->household_desc; ?> </a>
                                <?php }; ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<form name="addphlebotomist" method="post">
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Household</h6>
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
            <div class="row card-body ">
                <div class="form-group col-xl-6">
                    <label>Household Name</label>
                    <input type="text" class="form-control" name="household_desc" placeholder="Enter last household name">
                </div>
                <div class="form-group col-xl-6">
                    <label>Purok</label>
                    <select name="purok_id" class="form-control" id="fetchpurok">
                        <option value="" hidden>Select Purok</option>
                        <?php foreach ($purok as $pur) { ?>
                            <option value="<?= $pur->purok_id; ?>"> <?= $pur->purok_desc; ?> </option>
                        <?php }; ?>
                    </select>
                </div>
                <div class="form-group col-xl-12">
                    <input type="submit" class="btn btn-primary btn-block mt-3" name="submit" id="submit">
                </div>
            </div>
        </div>
    </div>
</form>

<?= $this->endSection(); ?>