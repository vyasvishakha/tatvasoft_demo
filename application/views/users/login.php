<div class="container">
   <div class="card bg-light">
      <article class="card-body mx-auto" style="max-width: 400px;">
         <h4 class="card-title mt-3 text-center">Login</h4>
         <p class="text-center">Login started with your free account</p>
         <p class="divider-text">
         </p>
         <form method="post" action="<?php echo base_url('users/login'); ?>" class="form-group">
                <!-- Status message -->
                <?php  
                    if(!empty($success_msg)){ 
                        echo '<div class="alert alert-success" role="alert">'.$success_msg.'</div>'; 
                    }elseif(!empty($error_msg)){ 
                        echo '<div class="alert alert-danger" role="alert">'.$error_msg.'</div>'; 
                    } 
                ?>
            <div class="form-group input-group">
               <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
               </div>
                <input type="email" class="form-control" name="email" placeholder="Email address">
            </div>
            <?php echo form_error('email','<p class="help-block error">','</p>'); ?>
            <!-- form-group end.// -->
            <div class="form-group input-group">
               <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
               </div>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <?php echo form_error('password','<p class="help-block error">','</p>'); ?>
            <!-- form-group// -->                                      
            <div class="form-group">
               <button type="submit" name="loginSubmit" value="loginSubmit" class="btn btn-primary btn-block"> Login  </button>
            </div>
            <!-- form-group// -->      
            <p class="text-center">Have not an account? <a href="<?php echo base_url('users/registration'); ?>">Register</a> </p>
        </form>
      </article>
   </div>
   <!-- card.// -->
</div>