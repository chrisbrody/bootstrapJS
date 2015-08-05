<!DOCTYPE html>
<html>
<head>
  <title>Codify Academy's Learning Bootstrap</title>
  <!-- <link rel="shortcut icon" href="favicon.ico"> -->
  <meta charset="UTF-8">
  <meta name="description" content="Codify Academy's Bootstrap Learning">
  <meta name="keywords" content="Codify Academy, Learn Bootstrap, Twitter Bootstrap learning, HTML, CSS, Javascript">
  <meta name="author" content="Chris Brody - Codify Academy">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <!--Our Added CSS-->
  <link rel="stylesheet" href="../css/styles.css">
  <style>
    body {
      overflow: auto;
    }
   #header .well {
      height:400px;
    }

    #nav.affix {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 101;
    }
    p.test {
      height: 1000px;
    }
  </style>
</head>
<body>

    <div class="container" id="header">
      <div class="row">
        <div class="col-md-12">
          <div class="well">
            <h1> Header </h1>               
          </div>
        </div>
      </div>
    </div>
    <div id="nav" data-spy="affix">
      <nav class="navbar navbar-default">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
       </ul>
      </nav> 
    </div>
    <div class="container">
      <div class="col-md-12">
        <p class="test">          
          Long scrolling text here... Ovi lispmd idr. Blah goo bar foor foo.  Ovi lispmd idr. Blah goo bar foor foo. Ovi lispmd idr. Blah goo bar foor foo. Ovi lispmd idr. Blah goo bar foor foo. Ovi lispmd idr. Blah goo bar foor foo. Ovi lispmd idr. Blah goo bar foor foo. Ovi lispmd idr. Blah goo bar foor foo. Ovi lispmd idr. Blah goo bar foor foo. Ovi lispmd idr. Blah goo bar foor foo. Ovi lispmd idr. Blah goo bar foor foo.            
        </p>
      </div>
      <div class="col-md-12">
        <p class="test">          
          Long scrolling text here... Ovi lispmd idr. Blah goo bar foor foo.  Ovi lispmd idr. Blah goo bar foor foo. Ovi lispmd idr. Blah goo bar foor foo. Ovi lispmd idr. Blah goo bar foor foo. Ovi lispmd idr. Blah goo bar foor foo. Ovi lispmd idr. Blah goo bar foor foo. Ovi lispmd idr. Blah goo bar foor foo. Ovi lispmd idr. Blah goo bar foor foo. Ovi lispmd idr. Blah goo bar foor foo. Ovi lispmd idr. Blah goo bar foor foo.            
        </p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <img src="../img/answer12.jpg">
        </div>
      </div>
    </div>




  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script type="text/javascript" src="../js/jquery.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap Javascript -->
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!-- Our Added JS -->
  <script type="text/javascript" src="../js/scripts.js"></script>
  <script>
    $('#nav').affix({
      offset: 400
    });
  </script>

</body>
</html>