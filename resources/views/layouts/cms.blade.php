<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>{{ env('APP_NAME') }}</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('assets/img/icon.ico') }}" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"]
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('assets/css/fonts.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/atlantis.min.css') }}">
	<!-- select2 -->
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


	<link rel="stylesheet" href="{{ asset('assets/css/cms.css') }}">


	


	@stack('styles')


</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">

				<a href="{{ route('cms') }}" class="logo">
					<!-- <img src="{{ asset('assets/img/logo.svg') }}" alt="navbar brand" class="navbar-brand"> -->
					{{ env('APP_NAME') }}
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->


			<form id="logout-form" action="{{ route('logout') }}" method="POST">
				@csrf
			</form>

			<!-- Navbar Header -->
			@include('cms.helpers.partials.navbar')
			<!-- End Navbar -->



		</div>

		<!-- Sidebar -->
		@include('cms.helpers.partials.sidebar')
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">


				@yield('content')




			</div>
			<!-- .content -->




			<!-- Footer -->
			@include('cms.helpers.partials.footer')
			<!-- Footer END -->

		</div>
		<!-- .main-panel -->


	</div>
	<!-- .wrapper -->



	<!--   Core JS Files   -->
	<script  src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
	<script defer src="{{ asset('assets/js/core/popper.min.js') }}"></script>
	<script defer src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>

	<!-- Tiny MCE -->
	<!-- <script src="https://cdn.tiny.cloud/1/{{ env('TINYMCE_API_KEY') }}/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> -->

	<!-- jQuery UI -->
	<script defer src="{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
	<!-- <script src="{{ asset('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script> -->

	<!-- jQuery Scrollbar -->
	<script defer src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>


	

	<!-- jQuery Sparkline -->
	<!-- <script src="{{ asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script> -->

	

	<!-- Datatables -->
	<script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>

	<!-- Bootstrap Notify -->
	<!-- <script src="{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script> -->

	<!-- jQuery Vector Maps -->
	<!-- <script src="{{ asset('assets/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script> -->
	<!-- <script src="{{ asset('assets/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script> -->

	<!-- Sweet Alert -->
	<script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>

	<!-- Atlantis JS -->
	<script src="{{ asset('assets/js/atlantis.min.js') }}"></script>

	<!-- select2 -->
	<script defer src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


	<script>
		$(document).ready(function() {

			// Disable submit btn when submitting form
			$(".submit-form-btn").click(function() {
				$(this).html(`<i class="fa fa-spinner" aria-hidden="true"></i> Submitting ...`).attr('disabled', true);
				$(this).parents('form').submit()
			})
			
			// select2 init
			$('.select2').select2({
				placeholder: 'Select an option',	
			});
			

			// tinymce.init
			// tinymce.init({
			// 	selector: '.tiny_textarea',
			// 	plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
			// 	toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
			// });
		});

		
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					$('#blah').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]); // convert to base64 string
			}
		}


		// delete the make
		function delRecord(id, url, tb_id) {
			Swal.fire({
				title: "Are you sure?",
				text: "Once deleted, you will not be able to recover this Record with ID " + id,
				icon: "warning",
				buttons: true,
				dangerMode: true,
				showCancelButton: true, // added showCancelButton parameter
			}).then(function(willDelete) {
				if (willDelete.isConfirmed) {
					let payload = {
						id, _token: '{{ csrf_token() }}'
					};
					$.ajax({
						url: url,
						data: payload,
						method: 'delete',
						success: function(res) {
							console.log(res);
							if (res.code == 1) {
								Swal.fire({
									icon: 'info',
									title: 'Record Response',
									text: res.msg,
								}).then(() => {
									$(tb_id).DataTable().ajax.reload();
									$("#product_catsModal").modal('hide');
								});
							} else {
								Swal.fire({
									icon: 'warning',
									title: 'Record Response',
									text: res.msg,
									footer: '<a href> <i> Need help </i>?</a>'
								}).then(() => {
									$(tb_id).DataTable().ajax.reload();
									$("#product_catsModal").modal('hide');
								});
							}
	
						},
						error: function(err) {
							console.error(err);
							Swal.fire({
								icon: 'warning',
								title: 'Record Response',
								text: res.msg,
							});
						}
					});

				}else {
					// Code for when the user clicks the "Cancel" button
					// Prevent the form submission
					event.preventDefault();
				}
			}).catch(function(reason) {
				Swal.fire({
					icon: 'info',
					title: 'Record Response',
					text: 'This will not be deleted',
				});
			});
		}
	</script>

	@stack('scripts')


</body>

</html>