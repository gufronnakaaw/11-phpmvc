<div class="container mt-4 container-stn">

    <h2><?= $data['title']; ?></h2>
    
    <button type="button" class="btn btn-success btn-sm mt-2" data-toggle="modal" data-target="#modal_insert">
    Insert Data
    </button>


    <div class="row mt-3">
        <div class="col-6">
            <form action="<?= BASEURL; ?>/student/search" method="post" id="form_keyword" autocomplete="off">
                <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search by name..." name="keyword" id="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-6">        

            <?php if( $data['stn'] ) : ?>
                    <ul class="list-group">
                <?php foreach( $data['stn'] as $stn ) :  ?>
                        <li class="list-group-item">
                            <?= $stn->name; ?>
                            
                            <a href="<?= BASEURL; ?>/student/delete/<?= $stn->id; ?>" class="btn btn-danger btn-sm float-right" onclick="return confirm('sure?')">Delete</a>

                            <button class="btn btn-info btn-sm float-right mx-2 btn-update" data-id="<?= $stn->id; ?>">Update</button>

                            <a href="<?= BASEURL; ?>/student/detail/<?= $stn->id; ?>" class="btn btn-secondary btn-sm float-right">Detail</a>
                        </li>
                <?php endforeach; ?>
                    </ul>
                
            <?php else : ?>
                
                <ul>
                    <li>Data Empty</li>
                </ul>

            <?php endif; ?>
        </div>
    </div>

</div>

<!-- modal insert -->
<div class="modal fade" id="modal_insert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Insert Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/student/add" method="post" autocomplete="off">
                    <div class="form-group">
                        <label for="name_maba">Name</label>
                        <input type="text" class="form-control" id="name_maba" name="name_maba">
                    </div>
                    
                    <div class="form-group">
                        <label for="nrp_maba">NRP</label>
                        <input type="text" class="form-control" id="nrp_maba" name="nrp_maba">
                    </div>
                    
                    <div class="form-group">
                        <label for="email_maba">Email</label>
                        <input type="email" class="form-control" id="email_maba" name="email_maba">
                    </div>

                    <div class="form-group">
                        <label for="majors_maba">Majors</label>
                        <select class="form-control" id="majors_maba" name="majors_maba">
                            <option value="Teknik Pangan">Teknik Pangan</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Planologi">Teknik Planologi</option>
                            <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                        </select>
                    </div>

                </div>

            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- modal update -->
<div class="modal fade" id="modal_update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/student/update" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="update_name_maba">Name</label>
                        <input type="text" class="form-control" id="update_name_maba" name="update_name_maba">
                    </div>
                    
                    <div class="form-group">
                        <label for="update_nrp_maba">NRP</label>
                        <input type="text" class="form-control" id="update_nrp_maba" name="update_nrp_maba">
                    </div>
                    
                    <div class="form-group">
                        <label for="update_email_maba">Email</label>
                        <input type="email" class="form-control" id="update_email_maba" name="update_email_maba">
                    </div>

                    <div class="form-group">
                        <label for="update_majors_maba">Majors</label>
                        <select class="form-control" id="update_majors_maba" name="update_majors_maba">
                            <option value="Teknik Pangan">Teknik Pangan</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Planologi">Teknik Planologi</option>
                            <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                        </select>
                    </div>

                </div>

            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>