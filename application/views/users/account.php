<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="card" style="width: 18rem;">
				  <img src="https://st2.depositphotos.com/1104517/11965/v/600/depositphotos_119659092-stock-illustration-male-avatar-profile-picture-vector.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">Welcome <?php echo $user['first_name']; ?>!</h5>
				    <p class="card-text">About</p>
				  </div>
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item"><?php echo $user['first_name'].' '.$user['last_name']; ?></li>
				    <li class="list-group-item"><?php echo $user['email']; ?></li>
				    <li class="list-group-item"><?php echo $user['phone']; ?></li>
				    <li class="list-group-item"><?php echo $user['gender']; ?></li>
				  </ul>
				  <div class="card-body">
				    <a href="<?php echo base_url('users/logout'); ?>" class="logout">Logout</a>
				  </div>
				</div>
        </div>
    </div>
</div>