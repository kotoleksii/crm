<div class="container mt-4">

    <div class="row">
    
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>Last name</td>
                        <td>First name</td>
                        <td>Phone</td>
                        <td>Status</td>
                        <td>Salary</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($workers as $worker):?>
                        <tr>
                            <td><?=$worker->lastName?></td>
                            <td><?=$worker->firstName?></td>
                            <td><?=$worker->phone?></td>
                            <td><?=$worker->status?></td>
                            <td><?=$worker->salary?></td>
                            <td>actions</td>
                        </tr>
                    <?php endforeach;?>

                </tbody>
            </table>
        </div>

        <div class="col-md-4">
            <form method="POST" action="/workers" class="needs-validation" novalidate="" autocomplete="off">
            <!-- <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
                <div class="card shadow p-1 mb-5 bg-white rounded">
                    <div class="card-body p-2">
                        <h4 class="text-center card-title text-success">New Worker</h4>
            
                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="last_name">
                        </div>
                        <div class="mb-3">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="first_name">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone">
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <input type="number" class="form-control" name="status" id="status">
                        </div>
                        <div class="mb-3">
                            <label for="salary" class="form-label">Salary</label>
                            <input type="number" class="form-control" name="salary" id="salary">
                        </div>

                        <input type="hidden" name="frm_workers">

                        <div class="col text-center">
                            <button type="submit" class="btn btn-success">Create new card</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>