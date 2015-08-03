<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Codify Academy's Learning Bootstrap</title>
    <!-- <link rel="shortcut icon" href="favicon.ico"> -->
    <meta charset="UTF-8">
    <meta name="description" content="Codify Academy's Bootstrap Learning">
    <meta name="keywords" content="Codify Academy, Learn Bootstrap, Twitter Bootstrap learning, HTML, CSS, Javascript">
    <meta name="author" content="Chris Brody - Codify Academy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!--Our Added CSS-->
    <link rel="stylesheet" href="../css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/js/html5shiv.js"></script>
      <script src="/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>  
   

    <div class="container">
      <div class="row">      
          <div class="col-sm-12 col-md-4">
              <h3>Things You Enjoy</h3>
              <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-primary active">
                  <input type="checkbox"> Beaches
                </label>
                <label class="btn btn-primary">
                  <input type="checkbox"> Mountains
                </label>
                <label class="btn btn-primary">
                  <input type="checkbox"> Cities
                </label>
              </div>
          </div>
          <div class="col-sm-6 col-md-8">
              <h3>Favorite Fruit</h3>
              <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-danger active">
                  <input type="radio"> Apples
                </label>
                <label class="btn btn-warning">
                  <input type="radio"> Oranges
                </label>
                <label class="btn btn-primary">
                  <input type="radio"> Blueberries
                </label>
              </div>
          </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <img src="../img/answer9a.jpg">
          <br>
          <img src="../img/answer9b.jpg">
        </div>
      </div>
    </div> 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="../js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap Javascript -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Our Added JS -->
    <script type="text/javascript" src="../js/scripts.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $(".btn_reveal").on('click', function(){
          $(this).closest("div").find(".hidden").removeClass("hidden");
        });
        var btn = $('#loading_btn').click(function () {
          btn.button('loading');

          setTimeout(function () {
              btn.button('reset')
            }, 3000);
          });
        });
    </script>

  </body>
</html>

