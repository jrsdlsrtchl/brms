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
    <h1 class="h3 mb-0 text-gray-800">Residents Information</h1>
    <hr />
    <a href="<?= base_url() ?>purokcontroller/puroklist" class="d d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa-solid fa-arrow-left"></i> Back </a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Residents Information</h6>
    </div>

    <?php if ($page_session->getTempdata('success')) : ?>
        <div id="hidemessage" class="badge badge-success pt-2">
            <h6>
                <?= $page_session->getTempdata('success'); ?>
            </h6>
        </div>
    <?php endif; ?>
    <?php if ($page_session->getTempdata('error')) : ?>
        <div id="hidemessage" class="badge badge-success pt-2">
            <h6>
                <?= $page_session->getTempdata('error'); ?>
            </h6>
        </div>
    <?php endif; ?>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th> Last Name </th>
                        <th> First Name </th>
                        <th> Middle Name </th>
                        <th> Gender </th>
                        <th> Age </th>
                        <th> Mobile </th>
                        <th> Date of Birth </th>
                        <th> Purok </th>
                        <th> Actions </th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($purokdata as $res) { ?>
                        <tr>
                            <td> <?= $res['lname']; ?> </td>
                            <td> <?= $res['fname']; ?> </td>
                            <td> <?= $res['mname']; ?> </td>
                            <td> <?= $res['gender']; ?> </td>
                            <td> <?= $res['age']; ?> </td>
                            <td> <?= $res['mobile']; ?> </td>
                            <td> <?= $res['datebirth']; ?> </td>
                            <td> <?= $res['purok']; ?> </td>
                            <td>
                                <a href="<?= base_url(); ?>residentcontroller/editresident/<?= $res['uniid']; ?>"><i class="fas fa-edit" style="color:green"></i></a> |

                                <a href="<?= base_url(); ?>residentcontroller/deleteresident/<?= $res['uniid']; ?>" onclick="return confirm('Do you really want to delete this record?');"><i class="fa fa-trash" aria-hidden="true" style="color:red" title="Delete this record"></i></a> |

                                <a href="<?= base_url(); ?>residentcontroller/viewresonly/<?= $res['uniid']; ?>"><i class="fas fa-eye" style="color:blue"></i></a>
                            </td>
                        </tr>
                        <!-- End Foreach Here -->
                    <?php }; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>