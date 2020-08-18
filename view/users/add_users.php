<script src="ajax/add.js"></script>
<form name="add_user_form" action="index.php?action=add_users" method="post" enctype="multipart/form-data"  onsubmit="return validate()">
    <div class="modal-header">
        <h4 class="modal-title">Add User</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    </div>
    <div class="modal-body">
        <div class="form-group">
            <label>Name</label><span class="text-danger">*</span></label>
            <input type="text" name="name" id="name" class="form-control" required><span id="namemessage"></span>

        </div>
        <div class="form-group">
            <label>Email</label><span class="text-danger">*</span></label>

            <input type="email" name="email" id="email" class="form-control" required><span id="emailmessage"></span>
        </div>

        <div class="form-group">
            <label>Password</label><span class="text-danger">*</span></label>

            <input type="password" name="password" id="password" class="form-control" required><span id="passwordmessage"></span>
        </div>

        <div class="form-group">
            <label>Address</label><span class="text-danger">*</span></label>

            <textarea class="form-control" name="address" id="address" required></textarea><span id="addressmessage"></span>
        </div>

        <div class="form-group">
            <label>Birthday</label><span class="text-danger">*</span></label>

            <input type="date" name="birthday" id="birthday" class="form-control" required><span id="birthdaymessage"></span>
        </div>

        <div class="form-group">
            <label>avatar</label><span class="text-danger">*</span></label>

            <input type="file" name="avatar" id="avatar" class="form-control" required><span id="avatarmessage"></span>
        </div>
        <div class="modal-footer">
        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
            <input type="submit" class="btn btn-success" id="add_user_form" name="add_user_form" value="Add">
         </div>
    </div>

</form>
