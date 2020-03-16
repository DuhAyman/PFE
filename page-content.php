
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="max-age=604800"/>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Website title - bootstrap html template</title>

<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">

<!-- jQuery -->
<script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">

<!-- custom style -->
<link href="css/ui.css" rel="stylesheet" type="text/css"/>
<link href="css/responsive.css" rel="stylesheet" type="text/css" />

<!-- custom javascript -->
<script src="js/script.js" type="text/javascript"></script>

</head>
<body>

<header class="section-header">
<section class="header-main border-bottom">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-2 col-lg-3 col-md-12">
				<a href="http://bootstrap-ecommerce.com" class="brand-wrap">
					<img class="logo" src="images/logo.png">
				</a> <!-- brand-wrap.// -->
			</div>
			<div class="col-xl-6 col-lg-5 col-md-6">
				<form action="#" class="search-header">
					<div class="input-group w-100">
						<select class="custom-select border-right"  name="category_name">
								<option value="">All type</option><option value="codex">Special</option>
								<option value="comments">Only best</option>
								<option value="content">Latest</option>
						</select>
					    <input type="text" class="form-control" placeholder="Search">
					    
					    <div class="input-group-append">
					      <button class="btn btn-primary" type="submit">
					        <i class="fa fa-search"></i> Search
					      </button>
					    </div>
				    </div>
				</form> <!-- search-wrap .end// -->
			</div> <!-- col.// -->
			<div class="col-xl-4 col-lg-4 col-md-6">
				<div class="widgets-wrap float-md-right">
					<div class="widget-header mr-3">
						<a href="#" class="widget-view">
							<div class="icon-area">
								<i class="fa fa-user"></i>
								<span class="notify">3</span>
							</div>
							<small class="text"> My profile </small>
						</a>
					</div>
					<div class="widget-header mr-3">
						<a href="#" class="widget-view">
							<div class="icon-area">
								<i class="fa fa-comment-dots"></i>
								<span class="notify">1</span>
							</div>
							<small class="text"> Message </small>
						</a>
					</div>
					<div class="widget-header mr-3">
						<a href="#" class="widget-view">
							<div class="icon-area">
								<i class="fa fa-store"></i>
							</div>
							<small class="text"> Orders </small>
						</a>
					</div>
					<div class="widget-header">
						<a href="#" class="widget-view">
							<div class="icon-area">
								<i class="fa fa-shopping-cart"></i>
							</div>
							<small class="text"> Cart </small>
						</a>
					</div>
				</div> <!-- widgets-wrap.// -->
			</div> <!-- col.// -->
		</div> <!-- row.// -->
	</div> <!-- container.// -->
</section> <!-- header-main .// -->


<nav class="navbar navbar-main navbar-expand-lg border-bottom">
  <div class="container">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="main_nav">
      <ul class="navbar-nav">
      	<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-bars text-muted mr-2"></i> Categories </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Machinery</a>
            <a class="dropdown-item" href="#">Electronics</a>
            <a class="dropdown-item" href="#">Home textile</a>
            <a class="dropdown-item" href="#">Home and kitchen</a>
            <a class="dropdown-item" href="#">Service and equipment</a>
            <a class="dropdown-item" href="#">Healthcare items</a>
            <a class="dropdown-item" href="#">Toys and Hobbies</a>
          </div>
        </li>
      	<li class="nav-item">
           <a class="nav-link" href="#">Ready to ship</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Trade shows</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sell with us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Demo pages</a>
          <div class="dropdown-menu">
			<a class="dropdown-item" href="page-index.html">Main</a>
			<a class="dropdown-item" href="page-category.html">All category</a>
			<a class="dropdown-item" href="page-listing-large.html">Listing list</a>
			<a class="dropdown-item" href="page-listing-grid.html">Listing grid</a>
			<a class="dropdown-item" href="page-shopping-cart.html">Shopping cart</a>
			<a class="dropdown-item" href="page-detail-product.html">Item detail</a>
			<a class="dropdown-item" href="page-content.html">Info content</a>
			<a class="dropdown-item" href="page-user-login.html">Page login</a>
			<a class="dropdown-item" href="page-user-register.html">Page register</a>
			<a class="dropdown-item disabled text-muted" href="#">More components</a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav ml-md-auto">
      	  <li class="nav-item">
            <a class="nav-link" href="#">Get the app</a>
          </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="http://example.com" data-toggle="dropdown">English</a>
	        <div class="dropdown-menu dropdown-menu-right">
	          <a class="dropdown-item" href="#">Russian</a>
	          <a class="dropdown-item" href="#">French</a>
	          <a class="dropdown-item" href="#">Spanish</a>
	          <a class="dropdown-item" href="#">Chinese</a>
	        </div>
	      </li>
	   </ul>
    </div> <!-- collapse .// -->
  </div> <!-- container .// -->
</nav>
</header> <!-- section-header.// -->


<section class="section-pagetop bg-light">
	<div class="container">
		<h2 class="title-page">Ajout produit</h2>
	</div> <!-- container .// -->
</section>


<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg-white padding-y">
<div class="container">

		<div class="input-group row mt-5">
			<label class="form-control col-md-2"><i class="fas fa-file-signature"></i>  Nom</label>
		    <input type="text" name="nomP" class="form-control col-md-6" >
	    </div>

		<div class="input-group row mt-5">
			<label class="form-control col-md-2"><i class="fas fa-hand-holding-usd"></i>  prix</label>
		    <input type="text" name="nomP" class="form-control col-md-6" >
	    </div>

		<div class="input-group row mt-5">
			<label class="form-control col-md-2"><i class="fas fa-align-left"></i>  Description</label>
		    <textarea name="nomP" class="form-control col-md-6" ></textarea>
	    </div>

		<div class="input-group row mt-5">
			<label class="form-control col-md-2"><i class="fas fa-cubes"></i>  Fabricant</label>
		    <input type="text" name="nomP" class="form-control col-md-6" >
	    </div>

		<div class="input-group row mt-5">
			<label class="form-control col-md-2"><i class="fas fa-shopping-bag"></i>  Nombre d'article</label>
		    <input type="text" name="nomP" class="form-control col-md-6" >
	    </div>

		<div class="input-group row mt-5">
			<label class="form-control col-md-2"><i class="fas fa-clock"></i>  Garantie</label>
		    <input type="text" name="nomP" class="form-control col-md-6" >
	    </div>

		<div class="input-group row mt-5">
			<label class="form-control col-md-2"><i class="fas fa-plane-departure"></i>  Date livraison</label>
		    <input type="text" name="nomP" class="form-control col-md-6" >
	    </div>

		<div class="input-group row mt-5">
			<label class="form-control col-md-2"><i class="fas fa-plane-departure"></i>  Images</label>
		    <button class="form-control col-md-6">ajouter un photo</button>
	    </div>





		<a href="javascript: history.back()" class="btn btn-light"> &laquo Go back</a>



</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->



<!-- ========================= FOOTER ========================= -->
<footer class="section-footer bg-secondary">
	<div class="container">
		<section class="footer-top padding-y-lg text-white">
			<div class="row">
				<aside class="col-md col-6">
					<h6 class="title">Brands</h6>
					<ul class="list-unstyled">
						<li> <a href="#">Adidas</a></li>
						<li> <a href="#">Puma</a></li>
						<li> <a href="#">Reebok</a></li>
						<li> <a href="#">Nike</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Company</h6>
					<ul class="list-unstyled">
						<li> <a href="#">About us</a></li>
						<li> <a href="#">Career</a></li>
						<li> <a href="#">Find a store</a></li>
						<li> <a href="#">Rules and terms</a></li>
						<li> <a href="#">Sitemap</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Help</h6>
					<ul class="list-unstyled">
						<li> <a href="#">Contact us</a></li>
						<li> <a href="#">Money refund</a></li>
						<li> <a href="#">Order status</a></li>
						<li> <a href="#">Shipping info</a></li>
						<li> <a href="#">Open dispute</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Account</h6>
					<ul class="list-unstyled">
						<li> <a href="#"> User Login </a></li>
						<li> <a href="#"> User register </a></li>
						<li> <a href="#"> Account Setting </a></li>
						<li> <a href="#"> My Orders </a></li>
					</ul>
				</aside>
				<aside class="col-md">
					<h6 class="title">Social</h6>
					<ul class="list-unstyled">
						<li><a href="#"> <i class="fab fa-facebook"></i> Facebook </a></li>
						<li><a href="#"> <i class="fab fa-twitter"></i> Twitter </a></li>
						<li><a href="#"> <i class="fab fa-instagram"></i> Instagram </a></li>
						<li><a href="#"> <i class="fab fa-youtube"></i> Youtube </a></li>
					</ul>
				</aside>
			</div> <!-- row.// -->
		</section>	<!-- footer-top.// -->

		<section class="footer-bottom text-center">
		
				<p class="text-white">Privacy Policy - Terms of Use - User Information Legal Enquiry Guide</p>
				<p class="text-muted"> &copy 2019 Company name, All rights reserved </p>
				<br>
		</section>
	</div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->



</body>
</html>