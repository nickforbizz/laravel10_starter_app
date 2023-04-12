<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
	<div class="container-fluid">
		<div class="collapse" id="search-nav">
			<form class="navbar-left navbar-form nav-search mr-md-3">
				<div class="input-group">
					<div class="input-group-prepend">
						<button type="submit" class="btn btn-search pr-1">
							<i class="fa fa-search search-icon"></i>
						</button>
					</div>
					<input type="text" placeholder="Search ..." class="form-control">
				</div>
			</form>
		</div>
		<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
			<li class="nav-item toggle-nav-search hidden-caret">
				<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
					<i class="fa fa-search"></i>
				</a>
			</li>
			
			<li class="nav-item dropdown hidden-caret">
				<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-envelope"></i>
				</a>
				<ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
					<li>
						<div class="dropdown-title d-flex justify-content-between align-items-center">
							Messages 									
							<a href="#" class="small">Mark all as read</a>
						</div>
					</li>
					<li>
						<div class="message-notif-scroll scrollbar-outer">
							<div class="notif-center">
								<a href="#">
									<div class="notif-img"> 
										<img src="{{ asset('assets/img/jm_denis.jpg') }}" alt="Img Profile">
									</div>
									<div class="notif-content">
										<span class="subject">Jimmy Denis</span>
										<span class="block">
											How are you ?
										</span>
										<span class="time">5 minutes ago</span> 
									</div>
								</a>
							</div>
						</div>
					</li>
					<li>
						<a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
					</li>
				</ul>
			</li>
			<li class="nav-item dropdown hidden-caret">
				<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-bell"></i>
					<span class="notification">4</span>
				</a>
				<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
					<li>
						<div class="dropdown-title">You have 4 new notification</div>
					</li>
					<li>
						<div class="notif-scroll scrollbar-outer">
							<div class="notif-center">
								<a href="#">
									<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
									<div class="notif-content">
										<span class="block">
											New user registered
										</span>
										<span class="time">5 minutes ago</span> 
									</div>
								</a>
							</div>
						</div>
					</li>
					<li>
						<a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
					</li>
				</ul>
			</li>
			<li class="nav-item dropdown hidden-caret">
				<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
					<i class="fas fa-layer-group"></i>
				</a>
				<div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
					<div class="quick-actions-header">
						<span class="title mb-1">Quick Actions</span>
						<span class="subtitle op-8">Shortcuts</span>
					</div>
					<div class="quick-actions-scroll scrollbar-outer">
						<div class="quick-actions-items">
							<div class="row m-0">
								<a class="col-6 col-md-4 p-0" href="#">
									<div class="quick-actions-item">
										<i class="flaticon-file-1"></i>
										<span class="text">Generated Report</span>
									</div>
								</a>
								<a class="col-6 col-md-4 p-0" href="#">
									<div class="quick-actions-item">
										<i class="flaticon-database"></i>
										<span class="text">Create New Database</span>
									</div>
								</a>
								<a class="col-6 col-md-4 p-0" href="#">
									<div class="quick-actions-item">
										<i class="flaticon-pen"></i>
										<span class="text">Create New Post</span>
									</div>
								</a>
								<a class="col-6 col-md-4 p-0" href="#">
									<div class="quick-actions-item">
										<i class="flaticon-interface-1"></i>
										<span class="text">Create New Task</span>
									</div>
								</a>
								<a class="col-6 col-md-4 p-0" href="#">
									<div class="quick-actions-item">
										<i class="flaticon-list"></i>
										<span class="text">Completed Tasks</span>
									</div>
								</a>
								<a class="col-6 col-md-4 p-0" href="#">
									<div class="quick-actions-item">
										<i class="flaticon-file"></i>
										<span class="text">Create New Invoice</span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="nav-item dropdown hidden-caret">
				<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
					<div class="avatar-sm">
						<img src="{{ asset('storage/'.auth()->user()->avator) ?? asset('assets/img/default/avator.png') }}" alt="..." class="avatar-img rounded-circle">
					</div>
				</a>
				<ul class="dropdown-menu dropdown-user animated fadeIn">
					<div class="dropdown-user-scroll scrollbar-outer">
						<li>
							<div class="user-box">
								<div class="avatar-lg"><img src="{{ asset('storage/'.auth()->user()->avator) ?? asset('assets/img/default/avator.png') }}" alt="image profile" class="avatar-img rounded"></div>
								<div class="u-text">
									<h4> {{ Auth()->user()->name}} </h4>
									<p class="text-muted"> {{ Auth()->user()->email}} </p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
								</div>
							</div>
						</li>
						<li>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Wallet</a>
							<a class="dropdown-item" href="#">Inbox</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Account Setting</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
								Logout
							</a>
						</li>
					</div>
				</ul>
			</li>
		</ul>
	</div>
</nav>