<div id="addUser" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add new user</h4>
          </div>
          <div class="modal-body">
            <form id="form" name="formUser" onsubmit="register(); return false">
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="glyphicon glyphicon-user"></i>
                </span>
                <input id="name" type="text" class="form-control" name="name" placeholder="First Name"  autocomplete="off">
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="glyphicon glyphicon-user"></i>
                </span>
                <input id="last_name" type="text" class="form-control" name="last_name" placeholder="Last Name"  autocomplete="off">
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="glyphicon glyphicon-envelope"></i>
                </span>
                <input id="email" type="email" class="form-control" name="email" onkeydown="validation()" placeholder="Email" autocomplete="off">
              </div>
              <!-- <span id='text'></span> -->
			</div>
			<div class="modal-footer">
				<button id="registerbutton" type="submit" class="btn btn-success">Register</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
			</form>
          </div>
        </div>
      </div>
    </div>


	<div id="updateUser" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">update user information </h4>        
            </div>
            <div class="modal-body">
              <form id="form" name="formUserUpdate" onsubmit="update(); return false">
              <input type="text" name="id" id="id" style="display: none;">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="name" type="text" class="form-control" name="name" placeholder="First Name" required autocomplete="off">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="last_name" type="text" class="form-control" name="last_name" placeholder="Last Name" required autocomplete="off">
                </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input onkeydown="validation()" id="email" type="email" class="form-control" name="email" placeholder="Email" required autocomplete="off">
			  <span id='text'></span>
            </div>		  
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success">update user information</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">cancel</button>
              </form>
            </div>
          </div>
        </div>
      </div>  