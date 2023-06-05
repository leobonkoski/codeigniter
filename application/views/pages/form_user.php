<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"></h1>
      </div>

			<div class="col-md-12">
					

				<?php if(isset($user)) : ?>
					<form action="http://localhost/codeigniter/users/update/<?=$user['id']?>" method="post">	
				<?php else : ?>
					<form action="http://localhost/codeigniter/users/save_user" method="post">
				<?php endif;?>

					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?= isset($user) ? $user['name'] : ""?>" required>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="category">E-mail</label>
							<input type="email" class="form-control" name="email" id="email" placeholder="E-mail" value="<?= isset($user) ? $user['email'] : ""?>" required>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="price">Password</label>
							<input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?= isset($user) ? $user['password'] : ""?>" required>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="developer">CPF</label>
							<input type="text"  maxlength="11" onkeypress="if( isNaN( String.fromCharCode(event.keyCode) )){ alert('numbers only'); return false; }"  class="form-control" name="cpf" id="cpf" placeholder="CPF" value="<?= isset($user) ? $user['cpf'] : ""?>" required>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="developer">Birth Date</label>
							<input type="date" class="form-control" name="birth" id="birth"  value="<?= isset($user) ? $user['birth'] : ""?>" required>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="developer">Adress</label>
							<input type="text" class="form-control" name="adress" id="adress" placeholder="Adress" value="<?= isset($user) ? $user['adress'] : ""?>" required>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="developer">City</label>
							<input type="text" class="form-control" name="city" id="city" placeholder="City" value="<?= isset($user) ? $user['city'] : ""?>" required>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="developer">Country</label>
							<input type="text" class="form-control" name="country" id="country" placeholder="Country" value="<?= isset($user) ? $user['country'] : ""?>" required>
						</div>
					</div>

					<div class="col-md-6">
							<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Save</button>
							<a href="http://localhost/codeigniter/users" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancel</a>
						</div>
					</div>
				</form>
			</div>

    </main>
  </div>
</div>

