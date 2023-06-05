    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2"><?= $title ?></h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<a href="http://localhost/codeigniter/users/add_user" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Add</a>
			</div>
		</div>
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
					<th>Inactive</th>
                    <th>Actions</th>
				</tr>
			</thead>
			<tbody>
				
			</tbody>

            <?php
                foreach($result_search as $search) : ?>
                <tr>
                    <td><?= $search['id']?></td>
                    <td><?= $search['name']?></td>
                    <td><?= $search['email']?></td>
                    <td><?= $search['password']?></td>
                    <td><?= $search['cpf']?></td>
                    <td><?= $search['birth']?></td>
                    <td><?= $search['adress']?></td>
                    <td><?= $search['city']?></td>
                    <td><?= $search['country']?></td>
                    <td><?= $search['inactive']?></td>
                
                </tr>


                <?php endforeach; ?>
            
		</table>
	</div>

</main>
