<div class="tab-pane" id="tab7">
  <article class="lesson7">
  
    <div class="lesson_title">
      <h4>Lesson 7</h4>
      <h1>Adding Bootstrap.js Popovers</h1>
    </div>    

    <!-- Popovers -->
    <div id="#" class="#">
      <h2>Popovers<small>.js</small></h2>
      <hr>

      <!-- Examples -->
      <div class="col-md-12">
        <h3>
          Examples
        </h3>
        <p>
          Add small overlays of content, like those on the iPad, to any element for housing secondary information.
        </p>
        <div class="panel panel-success">
          <div class="panel-heading">Requires Opt-in functionality</div>
          <div class="panel-body">
            For performance reasons, the Tooltip and Popover data-apis are opt-in, meaning
            <strong>you must initialize them yourself</strong>
            .
            <br>
            <span class="text-danger">Include the script below in your main.js file, if we want to use popovers!</span>
          </div>
        </div>
        <div class="well well-sm">
          <code>
            <?php include('code/lesson7/required.php'); ?>
          </code>
        </div>
      </div>

      <!-- Static popover -->
      <div class="col-md-12">
        <h3>
          Static popover
        </h3>
        <p>
          Four options are available: top, right, bottom, and left aligned.
        </p>
        <div class="">
          <div class="popover top show popovers">
            <div class="arrow"></div>
              <h3 class="popover-title">Popover top</h3>
              <div class="popover-content">
                <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
              </div>
            </div>
            <div class="popover right show popovers">
            <div class="arrow"></div>
            <h3 class="popover-title">Popover right</h3>
            <div class="popover-content">
            <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
            </div>
            </div>
            <div class="popover bottom show popovers">
            <div class="arrow"></div>
            <h3 class="popover-title">Popover bottom</h3>
            <div class="popover-content">
            <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
            </div>
            </div>
            <div class="popover left show popovers">
            <div class="arrow"></div>
            <h3 class="popover-title">Popover left</h3>
            <div class="popover-content">
            <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Live demo -->
      <div class="col-md-12">
        <h3>
          Live demo
        </h3>
        <div class="table_example">
          <button class="btn btn-lg btn-danger" data-content="And here's some amazing content. It's very engaging. Right?" title="" data-toggle="popover" type="button" data-original-title="Popover title">Click to toggle popover</button>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson7/live.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Four directions -->
      <div class="col-md-12">
        <h3>Four directions</h3>
        <div class="table_example">
          <button style="margin-left:25%" type="button" class="btn btn-default" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
            Popover on left
          </button>
          <button type="button" class="btn btn-default" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
            Popover on top
          </button>

          <button type="button" class="btn btn-default" data-toggle="popover" data-placement="bottom" data-content="Vivamus
          sagittis lacus vel augue laoreet rutrum faucibus.">
            Popover on bottom
          </button>

          <button type="button" class="btn btn-default" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
            Popover on right
          </button>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson7/directions.php'); ?>
          </code>     
        </div>
      </div>
    </div>

    <!-- lesson task 7-->
    <div class="task">
      <div class="task1">
        <div class="col-md-12">
          <h3>Popovers are great if you need / want to display some extra hidden content on click or hover.</h3>
          <p class="lead">Open your index.html file from your BootstrapJS folder.</p>
          <ol>
            <li>Start a new <code>div</code> with a class of <code>container</code> or <code>container-fluid</code>, Create another <code>div</code> tag inside, with a class of <code>popover-margin</code>, and lets add some margin to this selector in your main.css, <code>margin-top:100px</code> &amp; <code>margin-left:25%;</code></li>
            <li>Inside add 4 <code>button</code> tags, set each button type attribute to <code>button</code>, the data-toggle attribute to <code>popover</code> and the class attribute to <code>btn</code> &amp; <code>btn-default</code></li>
            <li>Using data-placement attribute just as we did with our tooltips, set each button to "top", "bottom", "right" or "left", add content between the tags, to match the data-placement e.x. "Popover Left", "Popover Top", "Popover Right" and "Popover Bottom"</li>
            <li>Before going any further we need to write 1 line of jquery to make the popovers work, just like we do for tooltips.  Its exactly the same as tooltip except for popover() - <code>$('[data-toggle="popover"]'').popover("");</code> inside your main.js</li>
            <li>Great now we can add some classes to the 4 buttons, give them all the classes of <code>btn</code> &amp; <code>btn-default</code>, and a data-content attribute with some <a href="http://www.lipsum.com/" target="_blank">dummy text</a> e.x. <code>data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."</code></li>
            <li>Check out our sweet new popovers, easy enough to work with! Lets do one more before moving on, create a <code>div</code> with a class of<code>clearfix</code> the <code>popover-margin</code> div</li>
            <li>Create a line break <code>&lt;br&gt;</code> below the clearfix div to add a little space, add a <code>div</code> below with a class of <code>col-md-12</code>.  Inside add a <code>button</code> tag with a type attribute of <code>button</code></li>
            <li>Lets give this last one a title which comes prestyled. Add the classes of <code>btn</code>, <code>btn-lg</code>, <code>btn-danger</code>, <code>btn-block</code> popover-dismiss</code> to the button.  Set the data-toggle attribute to <code>popover</code></li>
            <li>Next a data-placement attribute of <code>bottom</code>, and some content between the tags e.x. "Dismissible popover"</li>
            <li>Last add the popover content, give button two more data attributes the 1st is data-title equal to <code>Dismissible popover</code> and  data-content attribute equal to some more dummy text e.x. "And here's some amazing content. It's very engaging."</li>
          </ol>
          <p>Open this file in our browser to see our work!</p>
          <a href="answers/lesson7.php" target="_blank" class="text-danger">Ex: This is how your new file should look</a>
          <br><br>
          <p>Learn more about <a href="http://getbootstrap.com/javascript/#popovers" target="_blank">Bootstrap Popovers</a></p>
          <div class="next1">
            <a href="#tab8" data-toggle="tab" class="btn btn-code btn-lg tabs"><i class="fa fa-child fa-2x"></i> Next Up: Bootstrap Alerts! <i class="fa fa-2x fa-child"></i></a>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="col-md-12">
        <a class="btn btn-lg btn-task btn-block"><i class="fa fa-terminal"></i> Complete The Bootstrap <Strong>Popover</Strong> Task Before Moving On!</a>
      </div>
    </div>

    
  </article>
</div>