<div class="tab-pane" id="tab2">
  <!-- loader -->
  <div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

  </div> 
  <?php include('modals.php') ?>
  <article class="lesson2">

    <div class="lesson_title">
      <h4>Lesson 2</h4>
      <h1>Using Bootstrap Javascript Modals</small></h1>
    </div>    

    <!-- Modals -->
    <div id="#" class="#">
      <h2>Modals<small>.js</small></h2>
      <hr>

      <!-- examples -->
      <div class="col-md-12">
        <h3>
          Examples
        </h3>
        <p>
          Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.
        </p>
        <div class="panel panel-success">
          <div class="panel-heading">Overlapping modals are not supported!</div>
          <div class='panel-body'>Be sure not to open a modal while another is still visible. Showing more than one modal at a time requires custom code.</div>
        </div>
        <div class="panel panel-warning">
          <div class="panel-heading">Placement of Modal markup</div>
          <div class='panel-body'>Always try to place a modal's HTML code in a top-level position in your document to avoid other components affecting the modal's appearance and/or functionality.</div>
        </div>
      </div>

      <!-- static modal -->
      <div class="col-md-12">
        <h3>Static Modal Example</h3>
        <p>A rendered modal with header, body, and set of actions in the footer.</p>
        <div class="table_example">
          <div class="modals">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                  </button>
                  <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                  <p>One fine body…</p>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                  <button class="btn btn-primary" type="button">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson2/static.php'); ?>
          </code>     
        </div>
      </div>

      <!-- live demo -->
      <div class="col-md-12">
        <h3>Live Modal Demo</h3>
        <p>Toggle a modal via JavaScript by clicking the button below. It will slide down and fade in from the top of the page.</p>
        <div class="table_example">
          <button class="btn btn-primary btn-lg" data-target="#livedemo" data-toggle="modal"> Launch demo modal </button>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson2/live_demo.php'); ?>
          </code>     
        </div>
      </div>

      <!-- optional sizing -->
      <div class="col-md-12">
        <h3>Optional Modal Sizing</h3>
        <p>
          Modals have two optional sizes, available via modifier classes to be placed on a
          <code>.modal-dialog</code>
          .
        </p>
        <div class="table_example">
          <button class="btn btn-primary" data-toggle="modal" data-target=".modal_lg">Large modal</button>
          <button class="btn btn-primary" data-toggle="modal" data-target=".modal_sm">Small modal</button>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson2/sizing.php'); ?>
          </code>     
        </div>
      </div>

      <!-- removing animation -->
      <div class="col-md-12">
        <h3>Removing Modal Animation</h3>
        <p>
          For modals that simply appear rather than fade in to view, remove the
          <code>.fade</code>
          class from your modal markup.
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson2/removing_animation.php'); ?>
          </code>     
        </div>
      </div>

      <!-- usage -->
      <div class="col-md-12">
        <h2>Extending Modal Usage</h2>
        <p>
          The modal plugin toggles your hidden content on demand, via data attributes or JavaScript. It also adds
          <code>.modal-open</code>
          to the
          <code><body></code>
          to override default scrolling behavior and generates a
          <code>.modal-backdrop</code>
          to provide a click area for dismissing shown modals when clicking outside the modal.
        </p>
        <h3>Via data attributes</h3>
        <p>
          Activate a modal without writing JavaScript. Set
          <code>data-toggle="modal"</code>
          on a controller element, like a button, along with a
          <code>data-target="#foo"</code>
          or
          <code>href="#foo"</code>
          to target a specific modal to toggle.
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson2/modals_via_data.php'); ?>
          </code>     
        </div>
        <!-- <h3>Via JavaScript</h3>
        <p>
          Call a modal with id
          <code>myModal</code>
          with a single line of JavaScript:
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson2/modals_via_script.php'); ?>
          </code>     
        </div>
 -->        
        <!-- <h3>Options</h3>
        <p>
          Options can be passed via data attributes or JavaScript. For data attributes, append the option name to
          <code>data-</code>
          , as in
          <code>data-backdrop=""</code>
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
                <td>backdrop</td>
                <td>
                boolean or the string
                <code>'static'</code>
                </td>
                <td>true</td>
                <td>
                Includes a modal-backdrop element. Alternatively, specify
                <code>static</code>
                for a backdrop which doesn't close the modal on click.
                </td>
              </tr>
              <tr>
                <td>keyboard</td>
                <td>boolean</td>
                <td>true</td>
                <td>Closes the modal when escape key is pressed</td>
              </tr>
              <tr>
                <td>show</td>
                <td>boolean</td>
                <td>true</td>
                <td>Shows the modal when initialized.</td>
              </tr>
              <tr>
                <td>remote</td>
                <td>path</td>
                <td>false</td>
                <td>
                  <p>
                  If a remote URL is provided,
                  <strong>content will be loaded one time</strong>
                  via jQuery's
                  <code>load</code>
                  method and injected into the
                  <code>.modal-content</code>
                  div. If you're using the data-api, you may alternatively use the
                  <code>href</code>
                  attribute to specify the remote source. An example of this is shown below:
                  </p>
                  <div>
                    <code>
                      <?php include('code/lesson2/options.php') ?>
                    </code>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div> -->
      </div>

      <!-- methods - modal options -->
      <!-- <div class="col-md-12">
        <h3>Methods</h3>
        <h4>.modal(options)</h4>
        <p>
          Activates your content as a modal. Accepts an optional options
          <code>object</code>
          .
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson2/modal_options.php'); ?>
          </code>     
        </div>
      </div> -->

      <!-- .modal('toggle') -->
      <!-- <div class="col-md-12">
        <h4>.modal('toggle')</h4>
        <p>
          Manually toggles a modal.
          <strong>Returns to the caller before the modal has actually been shown or hidden</strong>
          (i.e. before the
          <code>shown.bs.modal</code>
          or
          <code>hidden.bs.modal</code>
          event occurs).
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson2/toggle.php'); ?>
          </code>     
        </div>
      </div> -->

      <!-- .modal('show') -->
      <!-- <div class="col-md-12">
        <h4>.modal('show')</h4>
        <p>
          Manually opens a modal.
          <strong>Returns to the caller before the modal has actually been shown</strong>
          (i.e. before the
          <code>shown.bs.modal</code>
          event occurs).
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson2/show.php'); ?>
          </code>     
        </div>
      </div> -->

      <!-- .modal('hide') -->
      <!-- <div class="col-md-12">
        <h4>.modal('hide')</h4>
        <p>
          Manually hides a modal.
          <strong>Returns to the caller before the modal has actually been hidden</strong>
          (i.e. before the
          <code>hidden.bs.modal</code>
          event occurs).
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson2/hide.php'); ?>
          </code>     
        </div>
      </div> -->

      <!-- events -->
      <!-- <div class="col-md-12">
        <h3>Events</h3>
        <p>Bootstrap's modal class exposes a few events for hooking into modal functionality.</p>
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
                <td>show.bs.modal</td>
                <td>
                  This event fires immediately when the
                  <code>show</code>
                  instance method is called. If caused by a click, the clicked element is available as the
                  <code>relatedTarget</code>
                  property of the event.
                </td>
              </tr>
              <tr>
                <td>shown.bs.modal</td>
                <td>
                  This event is fired when the modal has been made visible to the user (will wait for CSS transitions to complete). If caused by a click, the clicked element is available as the
                  <code>relatedTarget</code>
                  property of the event.
                </td>
              </tr>
              <tr>
                <td>hide.bs.modal</td>
                <td>
                  This event is fired immediately when the
                  <code>hide</code>
                  instance method has been called.
                </td>
              </tr>
              <tr>
                <td>hidden.bs.modal</td>
                <td>This event is fired when the modal has finished being hidden from the user (will wait for CSS transitions to complete).</td>
              </tr>
              <tr>
                <td>loaded.bs.modal</td>
                <td>This event is fired when the modal has loaded content using the remote option.</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson2/event.php'); ?>
          </code>     
        </div>
      </div>
 -->
    </div>

    <!-- lesson task 2-->
    <div class="task">
      <div class="task1">
        <div class="col-md-12">
          <h3>Modals are pretty sweet &amp; don't require too much code to create, <strong>Remember:</strong> include the modal code near the top of the <code>body</code> of your document</h3>
          <p class="lead text-muted">Create a Folder called BootstrapJS, add an index.html with the necessary <a href="http://www.w3schools.com/html/html5_intro.asp" target="_blank">starting html</a>, and a main.js file included with a script tag - don't forget the cdns to include jQuery, Bootstrap CSS &amp; JS from lesson 1</p>
          <ol class="text-muted">
            <li>Start on the index.html, create a <code>div</code> tag, with a class of <code>container</code> or <code>container-fluid</code>. Inside this, add a <code>div</code> tag with a class of <code>row</code>, and 2 more <code>div</code> tags need to be added inside this</li>
            <li>Now for some grid columns to your 2 new divs, add a class of <code>col-md-6</code> to both. These are gonna be for the buttons to toggle your modals</li>
            <li>Inside your first col-md-6 div add a <code>h1</code> tag with some content e.x. "First Bootstrap Modal". Next make a button to active your 1st modal, stat with a <code>button</code> tag, add text between your tags e.x. "Launch Modal" and give it the classes of <code>btn</code>, <code>btn-primary</code> &amp; <code>btn-block</code></li>
            <li>Next add <code>data-toggle="modal"</code> attribute to the button, <span class="text-primary">this tells your browser we have a modal here</span>, and last we set the button target attribute <code>data-target="#testModal1"</code></li>
            <li>Now can begin to build your 1st modal now! One line after your opening <code>body</code> tag and above everything else, create a <code>div</code> tag with a class of <code>modal</code> and a id of <code>testModal1</code></li>
            <li>In your new div lets set up the rest of what we need for a bootstrap modal! Add a <code>div</code> inside with a class of <code>modal-dialog</code>, inside this another <code>div</code> tag with a class of <code>modal-content</code></li>
            <li>With the basics set can add your header, body &amp; footer, add 3 <code>div</code> tags with the class of <code>modal-header</code> for the 1st, <code>modal-body</code> to the 2nd &amp; <code>modal-footer</code> for the 3rd div</li>
            <li>Inside your modal-header div, add a <code>h4</code> tag with a class of <code>modal-title</code> and some content e.x. "Modal Title". In your modal-body div, create a <code>p</code> tag and fill it with a few lines of <a href="http://lipsum.com" target="_blank">Lorem Ipsum</a></li>
            <li>In your modal footer, we will make a button that will dismiss your modal inside, add a <code>button</code> tag in here, with the classes <code>btn</code> &map; <code>btn-default</code>, and a data-dismiss attribute: <code>data-dismiss="modal"</code> to make the button dismiss on click. - Just add it to the opening tag, like any other attribute</li>
            <li>Move into your second col-md-6 div, and add a <code>h3</code>, <code>p</code> &amp; <code>button</code> tag. Add some content to the h3 and p tags, and attach the classes of <code>btn</code>, <code>btn-danger</code> &amp; <code>btn-lg</code> to your button tag</li>
            <li>Again we need to add a data-toggle attribute: <code>data-toggle="modal"</code> to your button and set its data-target attribute: <code>data-target="#testModal2"</code>.  Don't forget we need content for the button e.x. "Large Modal" or "Modal Two"</li>
            <li>Time to build the 2nd modal, just below the closing div of the 1st modal, add another <code>div</code> tag with the classes of <code>modal</code> &amp; <code>modal-lg</code>. Set its id attribute to <code>testModal2</code> to match the <code>data-target</code> on your button tag</li>
            <li>Inside the 2nd modal div add a <code>div</code> tag, with the classes of <code>modal-dialog</code> &amp; <code>modal-lg</code>, inside this div add another <code>div</code> tag with a class of <code>modal-content</code> and finally inside here another 2 divs the 1st with a class of <code>modal-header</code> and the 2nd a class of <code>modal-body</code></li>
            <li>In the model-header div, add a <code>button</code> tag with a class of <code>close</code>, add a data-dismiss attribute equal to <code>modal</code>. Inside your button add 2 new spans, the 1st with a <code>aria-hidden="true"</code> and a "x" between the tags.</li>
            <li>For the second span add a class of <code>sr-only</code> and the text of "close", that way users can close the modal by clicking the x. Finally lets add and any amount of <a href="http://lipsum.com" target="_blank">Lorem Ipsum</a> dummy content to the <code>modal-body</code></li>
          </ol>
          <p>Open this file in your browser to see what you just did!</p>
          <a href="answers/lesson2.php" target="_blank" class="text-danger">Ex: This is how your new file should look</a>
          <br><br>
          <p>Great Job making Bootstrap Modals! These can definitely come in handy when we design websites.</p>
          <p>Check out more on <a href="http://getbootstrap.com/javascript/#modals" target="_blank">Bootstrap Modals</a> here.</p>
          <div class="next1">
            <a href="#tab3" data-toggle="tab" class="btn btn-code btn-lg tabs"><i class="fa fa-child fa-2x"></i> Next Up: Bootstrap Dropdowns <i class="fa fa-2x fa-child"></i></a>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="col-xs-12">
        <a class="btn btn-task btn-lg btn-block"><i class="fa fa-terminal"></i> Complete The Bootstrap <Strong>Modals</Strong> Task Before Moving On!</a>
      </div>
    </div>

    
  </article>
</div>