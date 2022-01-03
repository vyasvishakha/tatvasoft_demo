<div class="container">
   <div class="card bg-light">
      <article class="card-body mx-auto" style="max-width: 400px;">
         <h4 class="card-title mt-3 text-center">Create a New Account</h4>
         <p class="text-center">Get started with your free account</p>
         <p class="divider-text">
         </p>
         <form action="" method="post">
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
                     <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                  </div>
                  <input name="first_name" class="form-control" placeholder="First name" type="text">
            </div>
                <?php echo form_error('first_name','<p class="help-block error">','</p>'); ?>

            <div class="form-group input-group">
                  <div class="input-group-prepend">
                     <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                  </div>
                  <input name="last_name" class="form-control" placeholder="Last name" type="text">
            </div>
                <?php echo form_error('last_name','<p class="help-block error">','</p>'); ?>
               <!-- form-group// -->
            
             <?php 
                if(!empty($user['gender']) && $user['gender'] == 'Female'){ 
                    $fcheck = 'checked="checked"'; 
                    $mcheck = ''; 
                }else{ 
                    $mcheck = 'checked="checked"'; 
                    $fcheck = ''; 
                } 
            ?>
            <div class="form-group input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                    <input type="radio" name="gender" value="Male" <?php echo $mcheck; ?>>
                </div>
              </div>
              <input type="text" class="form-control" value="Male" disabled="">
              <div class="input-group-prepend">
                <div class="input-group-text">
                    <input type="radio" name="gender" value="Female" <?php echo $fcheck; ?>>
                </div>
              </div>
              <input type="text" class="form-control" value="Female" disabled="">
            </div>

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

            <div class="form-group input-group">
               <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
               </div>
                <input type="password" class="form-control" name="conf_password" placeholder="Confirm Password">
            </div>
                <?php echo form_error('conf_password','<p class="help-block error">','</p>'); ?>
            
            <!-- form-group// -->
            <div class="form-group input-group">
                  <div class="input-group-prepend">
                     <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                  </div>
                  <input name="phone" class="form-control" placeholder="Phone number" type="text">
           </div>
                <?php echo form_error('phone','<p class="help-block error">','</p>'); ?>
               <!-- form-group// -->

           <div class="form-group">
              <button type="submit" name="signupSubmit" value="CREATE ACCOUNT" class="btn btn-primary btn-block"> Create Account  </button>
           </div>
               <!-- form-group// -->      
           <p class="text-center">Have an account? <a href="<?php echo base_url('users/login'); ?>">Log In</a> </p>

        </form>
      </article>
   </div>
   <!-- card.// -->
</div>