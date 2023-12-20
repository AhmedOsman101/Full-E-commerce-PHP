	<footer class="footer pt-5">
		<div class="container-fluid">
			<div class="row align-items-center justify-content-lg-between">
				<div class="col-lg-6 mb-lg-0 mb-4">
					<div class="copyright text-center text-sm text-muted text-lg-start">
						©
						<script>
							document.write(new Date().getFullYear());
						</script>
						, made with <i class="fa fa-heart"></i> by
						<a href="https://github.com/AhmedOsman101/" class="font-weight-bold" target="_blank">Othman</a>
						for a better web.
					</div>
				</div>
				<div class="col-lg-12">
					<ul class="nav nav-footer justify-content-center justify-content-lg-end">
						<li class="nav-item">
							<a href="#" class="nav-link text-muted" target="_blank">About</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-muted" target="_blank">services</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-muted" target="_blank">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	</main>
	<!--   Core JS Files   -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/perfect-scrollbar.min.js"></script>
	<script src="assets/js/smooth-scrollbar.min.js"></script>
	<script>
		var win = navigator.platform.indexOf("Win") > -1;
		if (win && document.querySelector("#sidenav-scrollbar")) {
			var options = {
				damping: "0.5",
			};
			Scrollbar.init(
				document.querySelector("#sidenav-scrollbar"),
				options
			);
		}
	</script>
	</body>

	</html>