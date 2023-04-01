<div class="sidebar sidebar-style-2">
	<div class="sidebar-wrapper scrollbar scrollbar-inner">
		<div class="sidebar-content">
			<div class="user">
				<div class="avatar-sm float-left mr-2">
					<img src="{{ asset('storage/'.auth()->user()->avator) ?? asset('assets/img/default/avator.png') }}" alt="..." class="avatar-img rounded-circle">
				</div>
				<div class="info">
					<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
						<span>
							{{ Auth()->user()->fname}}
							<span class="user-level"> {{ auth()->user()->roles->pluck('name')[0] ?? '' === 'User' }} </span>
							<span class="caret"></span>
						</span>
					</a>
					<div class="clearfix"></div>

					<div class="collapse in" id="collapseExample">
						<ul class="nav">
							<li>
								<a href="{{ route('users.edit', auth()->id()) }}">
									<span class="link-collapse">My Profile</span>
								</a>
							</li>
							<li>
								<a href="{{ route('users.edit', auth()->id()) }}">
									<span class="link-collapse">Edit Profile</span>
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
				<li class="nav-item @if(Route::is('users.*')) active @endif">
					<a href="{{ route('users.index') }}">
						<i class="icon-people"></i>
						<p>Users</p>
					</a>
				</li>

				<li class="nav-item @if(Route::is('postCategories.*')) active @endif">
					<a href="{{ route('postCategories.index') }}">
						<i class="icon-people"></i>
						<p> PostCategories</p>
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