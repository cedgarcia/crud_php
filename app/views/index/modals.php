<?php ?>
<div id="addUser" class="modal fade" role="dialog">
  <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add new user</h4>
          </div>
          <div class="modal-body">
            <form id="form" name="formUser" method="post" onsubmit="register(); return false">
    
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input id="name" type="text" class="form-control" name="name" placeholder="First Name"  autocomplete="off">
                <div class="form-text" id="error-message"></div>
              </div>
              
              <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input id="last_name" type="text" class="form-control" name="last_name" placeholder="Last Name"  autocomplete="off">
                <div class="form-text" id = "error-message2"></div>
              </div>
              
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" class="form-control" name="email" onkeyup="validation()" placeholder="Email" autocomplete="off">
                <div class="span-text" id="text"></div>
              </div>
          
			</div>
			<div class="modal-footer">
				<button id="registerbutton" type="submit" class="btn btn-success" value ="signup" >Register</button>
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
             
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input id="name" type="text" class="form-control" name="name" placeholder="First Name"  autocomplete="off">
                <div class="form-text" id="error-message"></div>
              </div>
              
              <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input id="last_name" type="text" class="form-control" name="last_name" placeholder="Last Name"  autocomplete="off">
                <div class="form-text" id = "error-message2"></div>
              </div>
              
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" class="form-control" name="email" onkeyup="validation()" placeholder="Email" autocomplete="off">
                <div class="span-text" id="text"></div>
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




      <div id="success" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h1 class="modal-title">Successfully Added</h1>
          </div>
        </div>
      </div>
    </div>
      <div id="successupdate" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h1 class="modal-title">Successfully Added</h1>
          </div>
        </div>
      </div>
    </div>
      <div id="failed" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h1 class="modal-title">Failed</h1>
          </div>
        </div>
      </div>
    </div>

