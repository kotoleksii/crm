<div class="container mt-4">

    <div class="row">
    
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <form action="/workers" method="POST">
                            <td><button class="btn btn-outline-secondary" type="submit" name="field" value="last_name">Last name</button></td>
                            <td><button class="btn btn-outline-secondary" type="submit" name="field" value="first_name">First name</button></td>
                            <td><button class="btn btn-outline-secondary" type="submit" name="field" value="phone">Phone</button></td>                     
                            <td>Status</td>
                            <td><button class="btn btn-outline-secondary" type="submit" name="field" value="salary">Salary</button></td>
                            <td>Actions</td>
                            <input type="hidden" name="frm_sorting">
                        </form>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($workers as $worker):?>
                        <tr>
                            <td><?=$worker->lastName?></td>
                            <td><?=$worker->firstName?></td>
                            <td><?=$worker->phone?></td>
                            <td>
                                <?php if($worker->status): ?>
                                    <img src="link" alt="active">
                                <?php else:?>
                                    <img src="link2" alt="inactive">
                                <?php endif; ?>
                            </td>

                            <td><?=$worker->salary?></td>

                            <td>
                                <a class="btn btn-warning btn-sm" href="/editworker/<?=$worker->id?>">Edit
                                    <i class="bi bi-pencil-fill"></i>
                                </a>

                                <a class="btn btn-danger btn-sm" href="/deleteworker/<?=$worker->id?>">Delete
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach;?>

                </tbody>
            </table>
        </div>

        <div class="col-md-4">
            <form action="/workers" method="POST" class="needs-validation" novalidate="" autocomplete="off">
                <div class="card shadow p-1 mb-5 bg-white rounded">
                    <div class="card-body p-2">
                        <h4 class="text-center card-title text-success">New Worker</h4>
            
                        <div class="mb-3">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="first_name">
                        </div>
                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="last_name">
                        </div>            
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone">
                        </div>
                        <!-- <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <input type="number" class="form-control" name="status" id="status">
                        </div> -->
                        <div class="mb-3">
                            <label for="salary" class="form-label">Salary</label>
                            <input type="number" class="form-control" name="salary" id="salary">
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="status">
                            <label class="form-check-label" for="status">Active</label>
                        </div>

                        <input type="hidden" name="frm_add_worker">

                        <div class="col text-center">
                            <button type="submit" class="btn btn-success" name="btn_add">Create new card</button>
                            <button type="submit" class="btn btn-warning" name="btn_clear">Clear fields</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>