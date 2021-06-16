<div class="container">
    <div class="row">
        <h1 class="display-5 col-md-4"><?=$title?></h1>
    </div>
    <div class="row justify-content-center mt-4">
    <div class="col-md-4">
            <form action="/editworker/<?=$worker->id?>" method="POST">

                <input type="hidden" name="id" value="<?=$worker->id?>">   

                <div class="card shadow p-1 mb-5 bg-white rounded">
                    <div class="card-body p-2">
                        <h4 class="text-center card-title text-success">New Worker</h4>
            
                        <div class="mb-3">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" class="form-control" value="<?=$worker->firstName?>" name="first_name" id="first_name">
                        </div>
                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" value="<?=$worker->lastName?>" name="last_name" id="last_name">
                        </div>            
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" value="<?=$worker->phone?>" name="phone" id="phone">
                        </div>
                        <div class="mb-3">
                            <label for="salary" class="form-label">Salary</label>
                            <input type="number" class="form-control" value="<?=$worker->salary?>" name="salary" id="salary">
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" <?php if($worker->status) echo('checked');?> id="status" name="status">
                            <label class="form-check-label" for="status">Active</label>
                        </div>

                        <input type="hidden" name="frm_edit_worker">

                        <div class="col text-center">
                            <button type="submit" class="btn btn-success" name="btn_save">Save</button>
                            <a class="btn btn-danger" href='/workers' name="btn_cancel">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
