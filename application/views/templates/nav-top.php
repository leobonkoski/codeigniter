<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Teste DEV - Codeigniter CRUD</a>
	<div>
		<form action="http://localhost/codeigniter/dashboard/search" method="post">
			<input class="form-control form-control-dark" type="text" name="search" id="search" placeholder="Search" aria-label="Search" value="">
		</form>
	</div>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="http://localhost/codeigniter/login/logout_user">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Menu</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/codeigniter/dashboard">
              <span data-feather="file"></span>
              Dashboard
            </a>
          </li>
					<li class="nav-item">
            <a class="nav-link" href="http://localhost/codeigniter/users">
              <span data-feather="file"></span>
              Active Users
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/codeigniter/inactive_users">
              <span data-feather="file"></span>
              Inactive users
            </a>
					</li>
					<li class="nav-item">
            <a class="nav-link" href="http://localhost/codeigniter/log">
              <span data-feather="file"></span>
              Database Log
            </a>
          </li>
        </ul>
      </div>
    </nav>
