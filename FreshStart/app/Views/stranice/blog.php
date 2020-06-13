<html>
<head>
</head>
<body>
<aside id="colorlib-hero">
<div class="flexslider">
<ul class="slides">
<li style="background-image: url(images/img_bg_2.jpg);">
<div class="overlay"></div>
<div class="container-fluid">
<div class="row">
<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
<div class="slider-text-inner text-center">
<h1>Blog</h1>
<h2><span><a href="<?php echo site_url('index') ?>">Početna</a> | Blog</span></h2>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
</aside>
<div class="colorlib-blog">
<div class="container">
<div class="row">
    
    
 <table border='0px' cellpadding='1px' style='width:70%;text-align:center;'>
    <tr><th>Autor</th><th>Naslov</th><th>Tekst</th> 
<?php
foreach ($blogovi as $blog) {
    echo "<tr><td>{$blog->KorisnickoIme}</td><td>{$blog->naslov}</td><td>{$blog->tekst}</td>";
   
}
?>
</table>


</div>

<div>
</body>
</html>