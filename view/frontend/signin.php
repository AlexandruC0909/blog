<?php require_once "login.php" ; ?>
<div id="login" class="modal fade in" tabindex="-1" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
          
          <div class="modal-header">
             
              <h3 class="modal-title">Se connecter</h3>
              <button type="button" id="close" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <div class="modal-body">
              <div class="row">
                 
              
            
            <span class="text-center" id="error-login"><?php echo $error; ?></span>
            
                  
                  <form action="" method="post">
                      
                      <div class="row form-group">
                         <span id="error_pseudo" class="text-center"></span>
                          <div class="col-sm-12">
                              <input type="text" name="login_pseudo" id="login_pseudo" class="form-control" placeholder="Pseudo">
                          </div>
                      </div>
                      
                      <div class="row form-group">
                         <span id="error_pass" class="text-center"></span>
                          <div class="col-sm-12">
                              <input type="password" name="login_pass" id="login_pass" class="form-control" placeholder="Mot de pass">
                          </div>
                      </div>
                      
                      <div class="row form-group">
                          <div class="col-sm-12">
                              <input type="submit" name="login" id="log_in" class="form-control btn btn-primary" value="Login">
                              
                          </div>
                      </div>
                      
                  </form>
                  
              </div>
              
              
          </div>
          
          
      </div>
       
   </div>
    
</div>