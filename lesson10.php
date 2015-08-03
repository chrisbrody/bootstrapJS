<div class="tab-pane" id="tab10">
  <!-- loader -->
  <div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

  </div> 
  <article class="lesson10">
  
    <div class="lesson_title">
      <h4>Lesson 10</h4>
      <h1>Working with Collapsible Bootstrap Groups</h1>
    </div>    

    <!-- Collapse -->
    <div id="#" class="#">
      <h2>Collapse<small>.js</small></h2>
      <hr>

      <!-- about -->
      <div class="col-md-12">
        <h3>
          About
        </h3>
        <p>
          Get base styles and flexible support for collapsible components like accordions and navigation.
        </p>
      </div>

      <!-- Example accordion -->
      <div class="col-md-12">
        <h3>
          Example Accordion
        </h3>
        <p>
          Using the collapse plugin, we built a simple accordion by extending the panel component.
        </p>
        <div class="table_example">
          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    Collapsible Group Item #1
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    Collapsible Group Item #2
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                    Collapsible Group Item #3
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- usage-->
      <div class="col-md-12">
        <h3>
          Usage
        </h3>
        <ul>
          <li>
            <code>.collapse</code>
            hides the content
          </li>
          <li>
            <code>.collapse.in</code>
            shows the content
          </li>
          <li>
            <code>.collapsing</code>
            is added when the transition starts, and removed when it finishes
          </li>
        </ul>
      </div>

      <!-- Via data attributes -->
      <div class="col-md-12">
        <h3>
          Via Data Attributes
        </h3>
        <p>
          Just add
          <code>data-toggle="collapse"</code>
          and a
          <code>data-target</code>
          to element to automatically assign control of a collapsible element. The
          <code>data-target</code>
          attribute accepts a CSS selector to apply the collapse to. Be sure to add the class
          <code>collapse</code>
          to the collapsible element. If you'd like it to default open, add the additional class
          <code>in</code>
          .
          </p>
          <p>
          To add accordion-like group management to a collapsible control, add the data attribute
          <code>data-parent="#selector"</code>
          . Refer to the demo to see this in action.
        </p>
      </div>

      <!-- Via Javascript -->
      <!--  <div class="col-md-12">
        <h3>
          Via Javascript
        </h3>
        <p>
          Enable manually with:
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson10/javascript.php'); ?>
          </code>     
        </div>
      </div> -->

      <!-- Options -->
      <!-- <div class="col-md-12">
        <h3>
          Options
        </h3>
        <p>
          Options can be passed via data attributes or JavaScript. For data attributes, append the option name to
          <code>data-</code>
          , as in
          <code>data-parent=""</code>
          .
        </p>
        <div class="table_example">
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
                  <td>parent</td>
                  <td>selector</td>
                  <td>false</td>
                  <td>
                    If selector then all collapsible elements under the specified parent will be closed when this collapsible item is shown. (similar to traditional accordion behavior - this dependent on the
                    <code>panel</code>
                    class)
                  </td>
                </tr>
                <tr>
                  <td>toggle</td>
                  <td>boolean</td>
                  <td>true</td>
                  <td>Toggles the collapsible element on invocation</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div> -->

      <!-- Methods -->
      <!-- <div class="col-md-12">
        <h3>
          Methods
        </h3>
        <h4>.collapse(options)</h4>
        <p>
          Activates your content as a collapsible element. Accepts an optional options
          <code>object</code>
          .
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson10/methods.php'); ?>
          </code>     
        </div>
        <h4>.collapse('toggle')</h4>
        <p>Toggles a collapsible element to shown or hidden.</p>
        <h4>.collapse('show')</h4>
        <p>Shows a collapsible element.</p>
        <h4>.collapse('hide')</h4>
        <p>Hides a collapsible element.</p>
      </div>
 -->
      <!-- Events -->
      <!-- <div class="col-md-12">
        <h3>
          Events
        </h3>
        <p>
          Bootstrap's collapse class exposes a few events for hooking into collapse functionality.
        </p>
        <div class="table_example">
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
                  <td>show.bs.collapse</td>
                  <td>
                    This event fires immediately when the
                    <code>show</code>
                    instance method is called.
                  </td>
                </tr>
                <tr>
                  <td>shown.bs.collapse</td>
                  <td>This event is fired when a collapse element has been made visible to the user (will wait for CSS transitions to complete).</td>
                </tr>
                <tr>
                  <td>hide.bs.collapse</td>
                  <td>
                    This event is fired immediately when the
                    <code>hide</code>
                    method has been called.
                  </td>
                </tr>
                <tr>
                  <td>hidden.bs.collapse</td>
                  <td>This event is fired when a collapse element has been hidden from the user (will wait for CSS transitions to complete).</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson10/events.php'); ?>
          </code>     
        </div>
      </div> -->



    </div>

    <!-- lesson task 10-->
    <div class="task">
      <div class="task1">
        <div class="col-md-12">
          <h3>Time to make some sweet collapsible groups.</h3>
          <p class="lead">Open your index.html file from your BootstrapJS folder</p>
          <ol>
            <li>Create a <code>div</code> tag below what we have done so far, with a class of <code>container</code> or <code>container-fluid</code>, inside add a <code>div</code> tag with a class of <code>row</code> inside</li>
            <li>Inside this row make 1 new <code>div</code> tag and add grid column classes to each one, the 1st add the classes <code>col-sm-6</code>, <code>col-sm-offset-6</code>, <code>col-md-4</code> &amp; <code>col-md-offset-4</code>></li>
            <li>In the col-md-4 div, make another <code>div</code> tag, with a class of <code>panel-group</code>. Inside make 3 more <code>div</code> tags, which will serve as our collapsible groups. To the 1st new div add the classes <code>panel</code> &amp; <code>panel-primary</code>, to the 2nd add the classes <code>panel</code> &amp; <code>panel-success</code> and to the 3rd add the classes <code>panel</code> &amp; <code>panel-info</code></li>
            <li>Move into panel-primary div, make 2 <code>div</code> tags, the 1st will serve as a heading and the 2nd as content for the collapse. To the 1st div add a class of <code>panel-heading</code>, and to the 2nd div add the classes <code>panel-collapse</code>, <code>collapse</code> &amp; <code>in</code></li>
            <li>Add a <code>h4</code> in the panel-heading div with a class of <code>panel-title</code>, inside the heading tag add a <code>a</code> tag and set its data-toggle attribute to <code>collapse</code>, with some content between tags e.x. "Collapsible Group Item #1"</li>
            <li>Inside the <code>panel-collapse</code> div, add a <code>div</code> tag with the classes <code>panel-body</code> &amp; <code>text-primary</code>, then fill this tag with a good amount of <a href="http://www.lipsum.com/" target="_blank">Lorem Lipsum</a> dummy text</li>
            <li>Last to make these link up correctly we need a few more attributes on some divs. First give the panel-collapse div an id e.x. "collapseOne", then set the anchor tag above in the panel-title div to match this id. e.x.<code>#collapseOne</code></li>
            <li>Excellent! we have the first collapsible panel, lets finish the next two that will associate with the 1st panel-group. Inside the panel-success div lets do as we did above and add a new <code>div</code> inside with a class of <code>panel-heading</code></li>
            <li>Again add a <code>h4</code> tag in the panel-heading div with a class of <code>panel-title</code>, and inside the heading tag add a <code>a</code> tag and give it a data-toggle attribute equal to <code>collapse</code>, also add some text to the anchor e.x. "Collapsible Group Item #2"</li>
            <li>In to the panel-collapse div, add a <code>div</code> tag with the classes <code>panel-body</code> &amp; <code>text-success</code>, then fill this again with a few lines of <a href="http://www.lipsum.com/" target="_blank">Lorem Lipsum</a></li>
            <li>We now can again link <code>a</code> and <code>collapse</code> div, add a id attribute to the collapse div e.x "collapseTwo" and set the anchor href to this id e.x. <code>#collapseTwo</code></li>
            <li>Panel #2 is done, lets finish the 3rd, into the <code>panel-info</code> div, and you guessed it, add 2 <code>div</code> tags inside, the 1st with a class of <code>panel-heading</code> and the 2nd with the classes <code>panel-collapse</code> &amp; <code>collapse</code></li>
            <li>Add a <code>h4</code> tag into the panel-heading div with a class of <code>panel-title</code>, add a <code>a</code> tag inside this, with a data-toggle attribute set to <code>collapse</code>, and add some text to the anchor e.x. "Collapsible Group Item #3"</li>
            <li>Moving along into <code>panel-collapse</code> div, add a <code>div</code> tag with the classes <code>panel-body</code> &amp; <code>text-info</code>, and fill the div with <a href="http://www.lipsum.com/" target="_blank">Lorem Lipsum</a> dummy text</li>
            <li>It's time to link the last <code>a</code> and <col>collapse</col> divs, add a id attribute to the <code>&lt;div class="collapse"&gt;</code> e.x "collapseThree" and then set the anchor href above to this id e.x. <code>#collapseThree</code></li>
            <li>Finally to make the collapse work we need to give the panel-group div a id and set the data-parent attribute of each anchor tag to match to that id, just like a href attribute, 1st give the id to the panel-body e.x. "accordion1". Then to each anchor set the data-parent attribute equal to this id e.x. <code>data-attribute="#accordion1"</code></li>
          </ol>
          <p>Open this file in our browser to see what we just did!</p>
          <a href="answers/lesson10.php" target="_blank" class="text-danger">Ex: This is how your new file should look</a>
          <br><br>
          <p>Find out more about <a href="http://getbootstrap.com/javascript/#collapse" target="_blank">Bootstrap Collapse Groups Here!</a></p>
          <div class="next1">
            <a href="#tab11" data-toggle="tab" class="btn btn-code btn-lg tabs"><i class="fa fa-child fa-2x"></i> Next Up: The Bootstrap Carousel - Enjoy! <i class="fa fa-2x fa-child"></i></a>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="col-md-12">
        <a class="btn btn-lg btn-task btn-block"><i class="fa fa-terminal"></i> Complete The Bootstrap <Strong>Collapse</Strong> Task Before Moving On!</a>
      </div>
    </div>    
  </article>
</div>