<div class="tab-pane" id="tab11">
  <!-- loader -->
  <div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

  </div> 
  <article class="lesson11">

    <div class="lesson_title">
      <h4>Lesson 11</h4>
      <h1>The Most Desired Twitter Carousel</h1>
    </div>    

    <!-- Carousel -->
    <div id="#" class="#">
      <h2>Carousel<small>.js</small></h2>
      <hr>

      <!-- Examples -->
      <div class="col-md-12">
        <h3>
          Examples
        </h3>
        <p>
          The slideshow below shows a generic plugin and component for cycling through elements like a carousel.
        </p>
        <div class="table_example">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/answer5.jpg" alt="...">
                <div class="carousel-caption">
                  Image1
                </div>
              </div>
              <div class="item">
                <img src="img/answer5.jpg" alt="...">
                <div class="carousel-caption">
                  Image2
                </div>
              </div>
              <div class="item">
                <img src="img/answer5.jpg" alt="...">
                <div class="carousel-caption">
                  Image3
                </div>
              </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson11/example.php'); ?>
          </code>     
        </div>
      </div>


      <!-- Optional captions -->
      <div class="col-md-12">
        <h3>
          Optional captions
        </h3>
        <p>
          Add captions to your slides easily with the
          <code>.carousel-caption</code>
          element within any
          <code>.item</code>
          . Place just about any optional HTML within there and it will be automatically aligned and formatted.
        </p>
        <div class="table_example">
          <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li class="" data-slide-to="0" data-target="#carousel-example-captions"></li>
              <li class="" data-slide-to="1" data-target="#carousel-example-captions"></li>
              <li class="active" data-slide-to="2" data-target="#carousel-example-captions"></li>
            </ol>
            <div class="carousel-inner">
              <div class="item">
                <img src="img/answer5.jpg" alt="900x500">
                <div class="carousel-caption">
                  <h3>First slide label</h3>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>
              <div class="item">
                <img src="img/answer5.jpg" alt="900x500">            
                <div class="carousel-caption">
                  <h3>Second slide label</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="item active">
                <img src="img/answer5.jpg" alt="900x500">
                <div class="carousel-caption">
                  <h3>Third slide label</h3>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
            </div>
            <a class="left carousel-control" data-slide="prev" role="button" href="#carousel-example-captions">
            <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" data-slide="next" role="button" href="#carousel-example-captions">
            <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson11/optional.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Multiple carousels -->
      <div class="col-md-12">
        <h3>
          Multiple carousels
        </h3>
        <p>
          Carousels require the use of an
          <code>id</code>
          on the outermost container (the
          <code>.carousel</code>
          ) for carousel controls to function properly. When adding multiple carousels, or when changing a carousel's
          <code>id</code>
          , be sure to update the relevant controls.
        </p>
      </div>

      <!-- Via data attributes -->
      <div class="col-md-12">
        <h3>
          Via Data Attributes
        </h3>
        <p>
          Use data attributes to easily control the position of the carousel.
          <code>data-slide</code>
          accepts the keywords
          <code>prev</code>
          or
          <code>next</code>
          , which alters the slide position relative to its current position. Alternatively, use
          <code>data-slide-to</code>
          to pass a raw slide index to the carousel
          <code>data-slide-to="2"</code>
          , which shifts the slide position to a particular index beginning with
          <code>0</code>
          .
        </p>
        <p>
          The
          <code>data-ride="carousel"</code>
          attribute is used to mark a carousel as animating starting at page load.
          <strong class="text-danger">It cannot be used in combination with (redundant and unnecessary) explicit JavaScript initialization of the same carousel.</strong>
        </p>
      </div>

      <!-- Via Javascript -->
      <!-- <div class="col-md-12">
        <h3>
          Via Javascript
        </h3>
        <p>
          Call carousel manually with:
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson11/javascript.php'); ?>
          </code>     
        </div>
      </div>
 -->
      <!-- Options -->
      <!-- <div class="col-md-12">
        <h3>
          Options
        </h3>
        <p>
          Options can be passed via data attributes or JavaScript. For data attributes, append the option name to
          <code>data-</code>
          , as in
          <code>data-interval=""</code>
          .
        </p>
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th style="width: 100px;">Name</th>
                <th style="width: 50px;">type</th>
                <th style="width: 50px;">default</th>
                <th>description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>interval</td>
                <td>number</td>
                <td>5000</td>
                <td>The amount of time to delay between automatically cycling an item. If false, carousel will not automatically cycle.</td>
              </tr>
              <tr>
                <td>pause</td>
                <td>string</td>
                <td>"hover"</td>
                <td>Pauses the cycling of the carousel on mouseenter and resumes the cycling of the carousel on mouseleave.</td>
              </tr>
              <tr>
                <td>wrap</td>
                <td>boolean</td>
                <td>true</td>
                <td>Whether the carousel should cycle continuously or have hard stops.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div> -->

      <!-- Methods -->
      <!-- <div class="col-md-12">
        <h3>
          Methods
        </h3>
        <h4>.carousel(options)</h4>
        <p>
        Initializes the carousel with an optional options
        <code>object</code>
        and starts cycling through items.
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson11/methods.php'); ?>
          </code>     
        </div>
        <h4>.carousel('cycle')</h4>
        <p>Cycles through the carousel items from left to right.</p>
        <h4>.carousel('pause')</h4>
        <p>Stops the carousel from cycling through items.</p>
        <h4>.carousel(number)</h4>
        <p>Cycles the carousel to a particular frame (0 based, similar to an array).</p>
        <h4>.carousel('prev')</h4>
        <p>Cycles to the previous item.</p>
        <h4>.carousel('next')</h4>
        <p>Cycles to the next item.</p>
      </div> -->

      <!-- Events -->
      <!-- <div class="col-md-12">
        <h3>Events</h3>
        <p>Bootstrap's carousel class exposes two events for hooking into carousel functionality.</p>
        <p>Both events have the following additional properties:</p>
        <ul>
          <li>
            <code>direction</code>
            : The direction in which the carousel is sliding (either
            <code>"left"</code>
            or
            <code>"right"</code>
            ).
          </li>
          <li>
            <code>relatedTarget</code>
            : The DOM element that is being slid into place as the active item.
          </li>
        </ul>
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th style="width: 150px;">Event Type</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>slide.bs.carousel</td>
                <td>
                  This event fires immediately when the
                  <code>slide</code>
                  instance method is invoked.
                </td>
              </tr>
              <tr>
                <td>slid.bs.carousel</td>
                <td>This event is fired when the carousel has completed its slide transition.</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson11/events.php'); ?>
          </code>     
        </div>
      </div> -->


    </div>

    <!-- lesson task #-->
    <div class="task">
      <div class="task1">
        <div class="col-md-12">
          <h3>Bootstrap Carousels require little code and are super easy to make!</h3>
          <p class="lead">Open your index.html file from your BootstrapJS folder.</p>
          <ol>
            <li>Begin below everything we have done so far and add 3 new <code>div</code> tags each inside the next, the 1st with the class of <code>container</code> or <code>container-fluid</code> for the 1st, <code>row</code> for the 2nd and <code>col-md-8 col-md-offset-2</code> for the 3rd</li>
            <li>Inside the col-md-8 div, add a <code>div</code> for carousel, give it the classes <code>carousel</code> &amp; <code>slide</code>. Add 2 sibling tags inside an <code>ol</code> tag with a class of <code>carousel-indicators</code> and a <code>div</code> tag with a class of <code>carousel-inner</code></li>
            <li>The ordered list will serve as a way to track what image the user is on. Add 3 <code>li</code> tags inside here, with a data-slide-to attribute to each li - the 1st  gets <code>data-slide-to="0"</code>, the 2nd gets <code>data-slide-to="1"</code> &amp; the 3rd gets <code>data-slide-to="2"</code>. Also add a class of <code>active</code> to the 1st li tag</li>
            <li>We need to add a arbitrary id pn the carousel div so we can link to the li tags. Add the id e.x. "myCarousel1", then give a data-target attribute to the 3 li tags equal to this id. e.x. <code>data-target="#myCarousel1"</code></li>
            <li>Good so we have a way to track what slide we're on, go into the carousel-inner div, and add 3 <code>div</code> tags, which will serve as the individual slide divs, each gets a class of <code>item</code>, and the first item div add an additional class of <code>active</code></li>
            <li>In each item div add 2 sibling tags, an <code>img</code> &amp; <code>div</code>. Add a class of <code>carousel-caption</code> to the new div. Add a <code>h3</code>, <code>p</code> &amp; <code>a</code> inside each carousel-caption div</li>
            <li>For the images make sure we are using the same resolution size for each, otherwise the carousel will auto resize when switching slides. If you need an image <a href="http://albums.mouseplanet.com/guideicons/BCG103.jpg">Use This One</a></li>
            <li>Add some dummy text to the carousel-caption divs, e.x. 1st "Example Headline.", 2nd e.x. "Another Example Headline.", 3rd e.x. "One more for good measure."</li>
            <li>Give the <code>p</code> tags some <a href="http://www.lipsum.com/" target="_blank">Lorem Lipsum</a> text, just a few lines not to many or our carousel will start to look weird. Finally add a few classes to the <code>a</code> tags <code>btn</code>, <code>btn-lg</code> &amp; <code>btn-primary</code> with some content between each anchor e.x. "Learn More", "Browse More"</li>
            <li>Excellent! one nice carousel with slide indicator. <span class="text-primary">We can also add carousel controls to a carousel,</span> to do this, add 2 <code>a</code> tags just below the carousel-inner div. Give the 1st the classes of <code>left</code> &amp; <code>carousel-control</code>, and the 2nd the classes of <code>right</code> &amp; <code>carousel-control</code></li>
            <li>Next set the data-slide attributes on each anchor, the first set to <code>prev</code> and the second to <code>next</code> e.x. <code>data-slide="prev"</code>, <code>data-slide="next"</code></li>
            <li> Create a <code>span</code> tag inside each anchor tag.  Just need a few glyphicon classes to get the chevron controls, add the classes of <code>glyphicon</code> &amp; <code>glyphicon-chevron-left</code> to the 1st span and to the second add the classes <code>glyphicon</code> &amp; <code>glyphicon-chevron-right</code></li>
            <li>Last but not least we need to add the arbitrary id we created eariler, to the anchors.  Set the href on both anchor tags i.e "myCarousel1'</li>
            <li><span class="text-primary">One Last Bit of Info</span> Sometimes carousel images don't fit the full width of the carousel div, to fix this set the image width to 100%;</li>
            <li>Finally: If you used our carousel image you need to change the height so its not stretched out, call the id and img selector in main.css e.x. <code>#mycarousel1 img{}</code> and add the height property of 300px</li>
          </ol>
          <p>Save your file and open it in your browser to see your work!</p>
          <a href="answers/lesson11.php" target="_blank" class="text-danger">Ex: This is how your new file should look</a>
          <br><br>
          <p>More on <a href="http://getbootstrap.com/javascript/#carousel" target="_blank">Twitter Bootstrap's Carousel</a></p>
          <div class="next1">
            <a href="#tab12" data-toggle="tab" class="btn btn-code btn-lg tabs"><i class="fa fa-child fa-2x"></i> Next Up: Affix'N Elements with Bootstrap! <i class="fa fa-2x fa-child"></i></a>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="col-md-12">
        <a class="btn btn-lg btn-task btn-block"><i class="fa fa-terminal"></i> Complete The Bootstrap <Strong>Carousel</Strong> Task Before Moving On!</a>
      </div>
    </div>    
  </article>
</div>