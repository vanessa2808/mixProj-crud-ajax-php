
<form action="index.php?action=add_users" method="post" enctype="multipart/form-data">
    <div class="modal-header">
        <h4 class="modal-title">Add User</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    </div>
    <div class="modal-body">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Address</label>
            <textarea class="form-control" name="address" id="address" required></textarea>
        </div>

        <div class="form-group">
            <label>Birthday</label>
            <input type="date" name="birthday" id="birthday" class="form-control" required>
        </div>

        <div class="form-group">
            <label>avatar</label>
            <input type="file" name="avatar" id="avatar" class="form-control" required>
        </div>


    </div>
    <div class="modal-footer">
        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
        <input type="submit" class="btn btn-success" name="add_user_form" value="Add">
    </div>
</form>
