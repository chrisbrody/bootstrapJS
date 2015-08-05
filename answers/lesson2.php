<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Codify Academy's Learning Bootstrap</title>
<!--     <link rel="shortcut icon" href="favicon.ico"> -->
    <meta charset="UTF-8">
    <meta name="description" content="Codify Academy's Bootstrap Learning">
    <meta name="keywords" content="Codify Academy, Learn Bootstrap, Twitter Bootstrap learning, HTML, CSS, Javascript">
    <meta name="author" content="Chris Brody - Codify Academy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!--Our Added CSS-->
    <link rel="stylesheet" href="../css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/js/html5shiv.js"></script>
      <script src="/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div id="testModal1" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="myModalLabel" class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- large modal -->
    <div id="testModal2" class="modal">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" data-dismiss="modal" type="button">
              <span aria-hidden="true">×</span>
              <span class="sr-only">Close</span>
            </button>
            <h4 id="myLargeModalLabel" class="modal-title">Large modal</h4>
          </div>
          <div class="modal-body"> 
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </div>
        </div>
      </div>
    </div>


    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <h1>First Bootstrap Modal</h1>
          <button class="btn btn-primary btn-block" data-target="#testModal1" data-toggle="modal"> Launch demo modal </button>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <img src="../img/answer2a.jpg">
            </div>
          </div>
        </div> 
        <div class="clearfix"></div>
        <div class="col-md-6">
          <h3>Large Bootstrap Modal</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          <button class="btn btn-danger btn-lg" data-target="#testModal2" data-toggle="modal"> Large Modal </button>
        </div>
      </div>
    </div>

   <div class="container">
      <div class="row">
        <div class="col-md-12">
          <img src="../img/answer2b.jpg">
        </div>
      </div>
    </div> 
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Bootstrap Javascript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- Our Added JS -->
    <script type="text/javascript" src="../js/scripts.js"></script>

  </body>
</html>
