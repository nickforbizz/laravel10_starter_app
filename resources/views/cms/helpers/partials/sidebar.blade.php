<div class="sidebar sidebar-style-2">
	<div class="sidebar-wrapper scrollbar scrollbar-inner">
		<div class="sidebar-content">
			<div class="user">
				<div class="avatar-sm float-left mr-2">
					<img src="{{ asset('assets/img/profile.jpg') }}" alt="..." class="avatar-img rounded-circle">
				</div>
				<div class="info">
					<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
						<span>
							{{ Auth()->user()->name}}
							<span class="user-level"> {{ auth()->user()->roles->pluck('name')[0] ?? '' === 'User' }} </span>
							<span class="caret"></span>
						</span>
					</a>
					<div class="clearfix"></div>

					<div class="collapse in" id="collapseExample">
						<ul class="nav">
							<li>
								<a href="#profile">
									<span class="link-collapse">My Profile</span>
								</a>
							</li>
							<li>
								<a href="#edit">
									<span class="link-collapse">Edit Profile</span>
								</a>
							</li>
							<li>
								<a href="#settings">
									<span class="link-collapse">Settings</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<ul class="nav nav-primary">
				<li class="nav-item @if(Route::currentRouteName() == 'cms') active @endif">
					<a href="#dashboard">
						<i class="fas fa-home"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<li class="nav-section">
					<span class="sidebar-mini-icon">
						<i class="fa fa-ellipsis-h"></i>
					</span>
					<h4 class="text-section">Modules</h4>
					<hr>
				</li>
				<li class="nav-item @if(Route::currentRouteName() == 'users.index' || Route::currentRouteName() == 'users.create') active @endif">
					<a href="{{ route('users.index') }}">
						<i class="icon-people"></i>
						<p>Users</p>
					</a>
				</li>
				<li class="nav-item">
					<a data-toggle="collapse" href="#sidebarLayouts">
						<i class="fas fa-th-list"></i>
						<p>Sidebar Layouts</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="sidebarLayouts">
						<ul class="nav nav-collapse">
							<li>
								<a href="sidebar-style-1.html">
									<span class="sub-item">Sidebar Style 1</span>
								</a>
							</li>
							<li>
								<a href="overlay-sidebar.html">
									<span class="sub-item">Overlay Sidebar</span>
								</a>
							</li>
							<li>
								<a href="compact-sidebar.html">
									<span class="sub-item">Compact Sidebar</span>
								</a>
							</li>
							<li>
								<a href="static-sidebar.html">
									<span class="sub-item">Static Sidebar</span>
								</a>
							</li>
							<li>
								<a href="icon-menu.html">
									<span class="sub-item">Icon Menu</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a data-toggle="collapse" href="#forms">
						<i class="fas fa-pen-square"></i>
						<p>Forms</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="forms">
						<ul class="nav nav-collapse">
							<li>
								<a href="forms/forms.html">
									<span class="sub-item">Basic Form</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a data-toggle="collapse" href="#tables">
						<i class="fas fa-table"></i>
						<p>Tables</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="tables">
						<ul class="nav nav-collapse">
							<li>
								<a href="tables/tables.html">
									<span class="sub-item">Basic Table</span>
								</a>
							</li>
							<li>
								<a href="tables/datatables.html">
									<span class="sub-item">Datatables</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a data-toggle="collapse" href="#maps">
						<i class="fas fa-map-marker-alt"></i>
						<p>Maps</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="maps">
						<ul class="nav nav-collapse">
							<li>
								<a href="maps/jqvmap.html">
									<span class="sub-item">JQVMap</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a data-toggle="collapse" href="#charts">
						<i class="far fa-chart-bar"></i>
						<p>Charts</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="charts">
						<ul class="nav nav-collapse">
							<li>
								<a href="charts/charts.html">
									<span class="sub-item">Chart Js</span>
								</a>
							</li>
							<li>
								<a href="charts/sparkline.html">
									<span class="sub-item">Sparkline</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a href="widgets.html">
						<i class="fas fa-desktop"></i>
						<p>Widgets</p>
						<span class="badge badge-success">4</span>
					</a>
				</li>


				<li class="nav-item">
					<a data-toggle="collapse" href="#submenu">
						<i class="fas fa-bars"></i>
						<p>Menu Levels</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="submenu">
						<ul class="nav nav-collapse">
							<li>
								<a data-toggle="collapse" href="#subnav2">
									<span class="sub-item">Level 1</span>
									<span class="caret"></span>
								</a>
								<div class="collapse" id="subnav2">
									<ul class="nav nav-collapse subnav">
										<li>
											<a href="#">
												<span class="sub-item">Level 2</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="#">
									<span class="sub-item">Level 1</span>
								</a>
							</li>
						</ul>
					</div>
				</li>

				<hr>
				<li class="nav-item">
					<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
						<i class="icon-logout"></i>
						<p>Logout</p>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>