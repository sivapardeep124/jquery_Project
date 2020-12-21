<!DOCTYPE html>
<html lang="en">
<head>

  <title>Bootstrap Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<style type="text/css">
    body {
  padding: 0;
  margin: 0;
  background: #f2f6e9;
}

/*--- navigation bar ---*/

.navbar {
  background:#6C63FF;
}

.nav-link,
.navbar-brand {
  color: #fff;
  cursor: pointer;
}

.nav-link {
  margin-right: 1em !important;
}

.nav-link:hover {
  color: #000;
}

.navbar-collapse {
  justify-content: flex-end;
}

.header {
  background-image: url('img/alagappa1.jpg');
  background-size: cover;
  background-position: center;
  position: relative;
}
.overlay {
  position: absolute;
  min-height: 100%;
  min-width: 100%;
  left: 0;
  top: 0;
  background: rgba(0, 0, 0, 0.6);
}
.description {
  left: 50%;
  position: absolute;
  top: 45%;
  transform: translate(-50%, -55%);
  text-align: center;
}

.description h1 {
  color: #6C63FF;
}

.description p {
  color: #fff;
  font-size: 1.3rem;
  line-height: 1.5;
}
.description button {
  /*border:1px solid #6C63FF;*/
  /*background:#6C63FF;*/
  border-radius: 0;
  color:#fff;
}

.description button:hover {
  border:1px solid #fff;
  background:#fff;
  color:#000;
}
.features {
  margin: 4em auto;
  padding: 1em;
  position: relative;
}

.feature-title {
  color: #333;
  font-size: 1.3rem;
  font-weight: 700;
  margin-bottom: 20px;
  text-transform: uppercase;
}

.features img {
  -webkit-box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.4);
  -moz-box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.4);
  box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.4);
  margin-bottom: 16px;
}
.features .form-control,
.features input {
    border-radius: 0;
}

.features .btn {
  /*background-color: #6C63FF;*/
  border: 1px solid #6C63FF;
  color: #fff;
  margin-top: 20px;
}

.features .btn:hover {
  background-color: #333;
  border: 1px solid #333;
}
.page-footer {
  background-color: #222;
  color: #ccc;
  padding: 60px 0 30px;
}

.footer-copyright {
  color: #666;
  padding: 40px 0;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-md bg-primary">
  <!-- <a class="navbar-brand" href="#">Logo</a> -->
  <img src="img/preview.png" class="" height="100">
  <p class="navbar-brand"  style="font-weight: bold;font-size: 30px">AISD</p>
  <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="main-navigation">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#" style="font-weight: bold;">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin_page.php" style="font-weight: bold;">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="font-weight: bold;">Contact</a>
      </li>
    </ul>
  </div>
</nav>

<header class="page-header header container-fluid">
<div class="overlay"></div>
<div class="description">
  <h1 class="text-primary">Welcome to the Landing Page!</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis. Suspendisse consectetur mi id libero fringilla, in pharetra sem ullamcorper.</p>
  <button class="btn btn-primary btn-lg" type="button">Tell Me More!</button>
</div>


</header>
<div class="container features">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12">
      <h3 class="feature-title">Vice-Chancellor</h3>
      <img src="img/vc1.jpg" class="img-fluid">
      <h5 style="color: red">Prof. N. Rajendran</h5>
      <p>Professor N. Rajendran has 34 years of rich experience in teaching and research in the area of History. He has been the founder Director of Bharathidasan School of Management (2016-2017) and Centre for Social Exclusion and Inclusive Studies (2007-2008) at Bharathidasan University. He also served as the Director of Centre for Distance Education (2014-15), Dean-Faculty of Arts (2008-2015) and Co-ordinator for RUSA scheme (2014-2016) in the same University.</p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
      <h3 class="feature-title">Register </h3>
      <img src="img/guru1.jpg" class="img-fluid" height="100">
      <h5 style="color: red">Prof. H. Gurumallesh Prabu</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">  
    <h3 class="feature-title">Get in Touch!</h3>
<div class="form-group">
  <input type="text" class="form-control" placeholder="Name" name="">
</div>
<div class="form-group">
  <input type="email" class="form-control" placeholder="Email Address" name="email">
</div>
<div class="form-group">
  <textarea class="form-control" rows="4"></textarea>
</div>
<input type="submit" class="btn btn-primary btn-block" value="Send" name="">      
    </div>
  </div> 

</div>

<footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12">
      <h6 class="text-uppercase font-weight-bold">Additional Information</h6>
      <p>We are happy to inform that the National Assessment and Accreditation Council (NAAC) has awarded the coveted A+ Grade with 3.64 CGPA to Alagappa University and Graded as Category-I University by MHRD-UGC  </p><p>    Alagappa University has obtained Category – I (Category one) Status and eligible to offer courses in distance learning mode without approval of the commission (UGC) (Clause 4.10) as per the Gazette of India Notification dated 12.02.2018.  </p>
    
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
      <h6 class="text-uppercase font-weight-bold">Contact</h6>
      <p>1640 Riverside Drive, Hill Valley, California
      <br/>info@mywebsite.com
      <br/>+ 01 234 567 88
      <br/>+ 01 234 567 89</p>
    </div>
  </div>
  <div class="footer-copyright text-center">© 2020 AlagappaUniversity.com</div>
</footer>


<script type="text/javascript">
    $(document).ready(function(){
  $('.header').height($(window).height());
})
</script>
</body>
</html>