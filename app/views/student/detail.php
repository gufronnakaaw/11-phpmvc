
<div class="container mt-4">
    <div class="card" style="width: 20rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['stn']->name; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['stn']->nrp; ?></h6>
            <p class="card-text"><?= $data['stn']->email; ?></p>
            <p class="card-text"><?= $data['stn']->majors; ?></p>
            <a href="<?= BASEURL; ?>/student" class="btn btn-secondary btn-sm">Back</a>
        </div>
    </div>
</div>
