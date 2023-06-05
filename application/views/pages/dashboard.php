
	
	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Dashboard</h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<a href="http://localhost/codeigniter/users/add_user" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Add</a>
			</div>
		</div>
	</div>


    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2">Registered users</h2>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>E-mail</th>
					<th>Password</th>
                    <th>CPF</th>
					<th>Bith Date</th>
					<th>Adress</th>
					<th>City</th>
					<th>Country</th>
				
				</tr>
			</thead>
			<tbody>
				
			</tbody>

            <?php

			function mask($val, $mask)
			{
				$maskared = '';
				$k = 0;
				for ($i = 0; $i <= strlen($mask) - 1; ++$i) {
					if ($mask[$i] == '#') {
						if (isset($val[$k])) {
							$maskared .= $val[$k++];
						}
					} else {
						if (isset($mask[$i])) {
							$maskared .= $mask[$i];
						}
					}
				}
			
				return $maskared;
			}

                foreach($users as $user) : 
					$birth_date = $user['birth'];
					$birth_date_convert = implode('/', array_reverse(explode('-', $birth_date)));
					$cpf = $user['cpf'];

					
				?>
                <tr>
                    <td><?= $user['id']?></td>
                    <td><?= $user['name']?></td>
                    <td><?= $user['email']?></td>
                    <td><?= $user['password']?></td>
                    <td><?= mask($cpf,'###.###.###-##')?></td>
                    <td><?= $birth_date_convert?></td>
                    <td><?= $user['adress']?></td>
                    <td><?= $user['city']?></td>
                    <td><?= $user['country']?></td>
                 
                </tr>


                <?php endforeach; ?>
            
		</table>
	</div>

</main>


