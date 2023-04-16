<footer class="footer">
	<div class="container-fluid">
		<nav class="pull-left">
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link" href="https://www.mkenya.com">
						{{ env('POWERED_BY') }}
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">
						Help
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">
						Licenses
					</a>
				</li>
			</ul>
		</nav>
		<div class="copyright ml-auto">
			{{ date('Y') }}, made with <i class="fa fa-heart heart text-danger"></i> by <a href="{{ env('POWERED_BY_URL') }}">{{ env('POWERED_BY') }}</a>
		</div>				
	</div>
</footer>