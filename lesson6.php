<div class="tab-pane" id="tab6">
  <article class="lesson6">

    <div class="lesson_title">
      <h4>Lesson 6</h4>
      <h1>Understanding the use of Tooltips!</h1>
    </div>    

    <!-- Tooltips -->
    <div id="#" class="#">
      <h2>Tooltips<small>.js</small></h2>
      <hr>

      <!-- Examples -->
      <div class="col-md-12">
        <h3>
          Examples
        </h3>
        <p>
          Inspired by the excellent jQuery.tipsy plugin written by Jason Frame; Tooltips are an updated version, which don't rely on images, use CSS3 for animations, and data-attributes for local title storage.
        </p>
        <p>Hover over the links below to see tooltips:</p>
        <div class="table_example">
          <p class="muted" style="margin-bottom: 0;">
          Tight pants next level keffiyeh
          <a class="tooltips" title="" data-toggle="tooltip" href="#" data-original-title="Default tooltip">you probably</a>
          haven't heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel
          <a class="tooltips" title="" data-toggle="tooltip" href="#" data-original-title="Another tooltip">have a</a>
          terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan
          <a class="tooltips" title="" data-toggle="tooltip" href="#" data-original-title="Another one here too">whatever keytar</a>
          , scenester farm-to-table banksy Austin
          <a class="tooltips" title="" data-toggle="tooltip" href="#" data-original-title="The last tip!">twitter handle</a>
          freegan cred raw denim single-origin coffee viral.
          </p>
        </div>
      </div>

      <!-- Four Tooltip Directions -->
      <div class="col-md-12">
        <h3>
          Four Tooltip Directions
        </h3>
        <div class="table_example">
          <button style="margin-left:25%;" type="button" class="btn btn-default tooltips" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
          <button type="button" class="btn btn-default tooltips" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
          <button type="button" class="btn btn-default tooltips" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
          <button type="button" class="btn btn-default tooltips" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson6/directions.php'); ?>
          </code>     
        </div>
        <div class="panel panel-success">
          <div class="panel-heading">Requires Opt-in functionality</div>
          <div class="panel-body">
            For performance reasons, the Tooltip and Popover data-apis are opt-in, meaning
            <strong>you must initialize them yourself</strong>
            <br>
            Include the script below if we want to use tooltips!
          </div>
        </div>
        <div class="well well-sm">
          <code>
            <?php include('code/lesson6/required.php'); ?>
          </code>
        </div>
      </div>

      <!-- markup -->
      <div class="col-md-12">
        <h3>Markup</h3>
        <p>
          The required markup for a tooltip is only a
          <code>data</code>
          attribute and
          <code>title</code>
          on the HTML element you wish to have a tooltip. The generated markup of a tooltip is rather simple, though it does require a position (by default, set to
          <code>top</code>
          by the plugin).
        </p>
        <div class="table_example">
          <a class="btn btn-danger tooltips" href="#" data-toggle="tooltip" title="Some tooltip text!">Hover over me</a> 
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson6/markup.php'); ?>
          </code>     
        </div>
      </div>

      <!-- options -->
      <!-- <div class="col-md-12">
        <h3>Options</h3>
        <p>
          Options can be passed via data attributes or JavaScript. For data attributes, append the option name to
          <code>data-</code>
          , as in
          <code>data-animation=""</code>
          .
        </p>
        <div class="table_example">
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead>
              <tr>
              <th style="width: 100px;">Name</th>
              <th style="width: 100px;">Type</th>
              <th style="width: 50px;">Default</th>
              <th>Description</th>
              </tr>
              </thead>
              <tbody>
              <tr>
              <td>animation</td>
              <td>boolean</td>
              <td>true</td>
              <td>Apply a CSS fade transition to the tooltip</td>
              </tr>
              <tr>
              <td>container</td>
              <td>string | false</td>
              <td>false</td>
              <td>
              <p>
              Appends the tooltip to a specific element. Example:
              <code>container: 'body'</code>
              . This option is particularly useful in that it allows you to position the tooltip in the flow of the document near the triggering element - which will prevent the tooltip from floating away from the triggering element during a window resize.
              </p>
              </td>
              </tr>
              <tr>
              <td>delay</td>
              <td>number | object</td>
              <td>0</td>
              <td>
              <p>Delay showing and hiding the tooltip (ms) - does not apply to manual trigger type</p>
              <p>If a number is supplied, delay is applied to both hide/show</p>
              <p>
              Object structure is:
              <code>delay: { show: 500, hide: 100 }</code>
              </p>
              </td>
              </tr>
              <tr>
              <td>html</td>
              <td>boolean</td>
              <td>false</td>
              <td>
              Insert HTML into the tooltip. If false, jQuery's
              <code>text</code>
              method will be used to insert content into the DOM. Use text if you're worried about XSS attacks.
              </td>
              </tr>
              <tr>
              <td>placement</td>
              <td>string | function</td>
              <td>'top'</td>
              <td>
              How to position the tooltip - top | bottom | left | right | auto.
              <br>
              When "auto" is specified, it will dynamically reorient the tooltip. For example, if placement is "auto left", the tooltip will display to the left when possible, otherwise it will display right.
              </td>
              </tr>
              <tr>
              <td>selector</td>
              <td>string</td>
              <td>false</td>
              <td>
              If a selector is provided, tooltip objects will be delegated to the specified targets. In practice, this is used to enable dynamic HTML content to have tooltips added. See
              <a href="https://github.com/twbs/bootstrap/issues/4215" target="_blank">this</a>
              and
              <a href="http://jsfiddle.net/fScua/" target="_blank">an informative example</a>
              .
              </td>
              </tr>
              <tr>
              <td>template</td>
              <td>string</td>
              <td>
              <code>'&lt;div class="example tooltip" role="tooltip"&gt;&lt;div class="tooltip-arrow"&gt;&lt;/div&gt;&lt;div class="tooltip-inner"&gt;&lt;/div&gt;&lt;/div&gt;'</code>
              </td>
              <td>
              <p>Base HTML to use when creating the tooltip.</p>
              <p>
              The tooltip's
              <code>title</code>
              will be injected into the
              <code>.tooltip-inner</code>
              .
              </p>
              <p>
              <code>.tooltip-arrow</code>
              will become the tooltip's arrow.
              </p>
              <p>
              The outermost wrapper element should have the
              <code>.tooltip</code>
              class.
              </p>
              </td>
              </tr>
              <tr>
              <td>title</td>
              <td>string | function</td>
              <td>''</td>
              <td>
              Default title value if
              <code>title</code>
              attribute isn't present
              </td>
              </tr>
              <tr>
              <td>trigger</td>
              <td>string</td>
              <td>'hover focus'</td>
              <td>How tooltip is triggered - click | hover | focus | manual. You may pass multiple triggers; separate them with a space.</td>
              </tr>
              <tr>
              <td>viewport</td>
              <td>string | object</td>
              <td>{ selector: 'body', padding: 0 }</td>
              <td>
              <p>
              Keeps the tooltip within the bounds of this element. Example:
              <code>viewport: '#viewport'</code>
              or
              <code>{ selector: '#viewport', padding: 0 }</code>
              </p>
              </td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div> -->

      <!-- methods -->
      <!-- <div class="col-md-12">
        <h3>Methods</h3>
        <h4>$().tooltip(options)</h4>
        <p>Attaches a tooltip handler to an element collection.</p>
        <h4>.tooltip('show')</h4>
        <p>Reveals an element's tooltip.</p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson6/show.php'); ?>
          </code>     
        </div>
        <h4>.tooltip('hide')</h4>
        <p>Hides an element's tooltip.</p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson6/hide.php'); ?>
          </code>     
        </div>
        <h4>.tooltip('toggle')</h4>
        <p>Toggles an element's tooltip..</p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson6/toggle.php'); ?>
          </code>     
        </div>
        <h4>.tooltip('destroy')</h4>
        <p>Hides and destroys an element's tooltip.</p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson6/destroy.php'); ?>
          </code>     
        </div>
      </div> -->

      <!-- events -->
      <!-- <div class="col-md-12">
        <h3>
          Events
        </h3>
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
            <td>show.bs.tooltip</td>
            <td>
            This event fires immediately when the
            <code>show</code>
            instance method is called.
            </td>
            </tr>
            <tr>
            <td>shown.bs.tooltip</td>
            <td>This event is fired when the tooltip has been made visible to the user (will wait for CSS transitions to complete).</td>
            </tr>
            <tr>
            <td>hide.bs.tooltip</td>
            <td>
            This event is fired immediately when the
            <code>hide</code>
            instance method has been called.
            </td>
            </tr>
            <tr>
            <td>hidden.bs.tooltip</td>
            <td>This event is fired when the tooltip has finished being hidden from the user (will wait for CSS transitions to complete).</td>
            </tr>
            </tbody>
            </table>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson6/events.php'); ?>
          </code>     
        </div>
      </div> -->


    </div>

    <!-- lesson task 6-->
    <div class="task">
      <div class="task1">
        <div class="col-md-12">
          <h3>Tooltips are a great way to add small bits of information to links.</h3>
          <p class="lead">Open your index.html file from your BootstrapJS folder.</p>
          <ol>
            <li>Lets get right into making some tooltips. Add a new <code>div</code> tag with a class of <code>container</code> or <code>container-fluid</code>, inside this dive create 2  <code>button</code> tags, each with a type attribute of <code>button</code>. Give the 1st button the classes of <code>btn</code> &amp; <code>btn-default</code> and the 2nd the classes of <code>btn</code> &amp; <code>btn-primary</code></li>
            <li>Next lets give both buttons a data-toggle attribute equal to <code>tooltip</code>. Add a data-placement attribute to each, to the 1st set this attribute to<code>bottom</code> and the second to <code>left</code></li>
            <li>Now you can add text to the tooltip, add a title attribute to the buttons and have it eqaul some content e.x. <code>title="Tooltip Bottom"</code> for the 1st &amp; <code>title="Tooltip Left"</code> for the second</li>
            <li>Now add some content to the buttons e.x. "Tooltip on bottom" &amp; "Tooltip on Left" one to each button accordingly.  To the 2nd button add one more attribute, the data-trigger attribute equal to <code>focus</code>, so the second button's tooltip will only active when we focus on the 2nd button - i.e. clicks </li>
            <li>Finally we must add a little jQuert to make Bootstrap Tooltips work, so inside your personal js file i.e. "main.js" or "scripts.js", add this code <code>$("[data-toggle='tooltip']").tooltip();</code></li>
            <li>Nice, Got through the first 2 tooltips! lets add a <code>div</code> tag below the 2nd button and give it a class of <code>clearfix</code>, below this div add a line break <code>&lt;br&gt;</code> tag to add a little etraa space</li>
            <li>Now its time to make a button group with tooltips, start a new <code>div</code> tag, below the br tag and give it a class of <code>btn-group</code>, inside create 4 <code>button</code> tags and set each type attribute equal to <code>button</code></li>
            <li>Add some bootstrap classes next, to the first add the classes <code>btn</code> &amp; <code>btn-primary</code>, to the second add <code>btn</code> &amp; <code>btn-info</code>, to the third button <code>btn</code> &amp; <code>btn-warning</code> and to the last button add the classes <code>btn</code> &amp; <code>btn-danger</code></li>
            <li>Set each button's data-toggle attribute equal to <code>tooltip</code>, then add <code>data-placement</code> to each button, the 1st set it to <code>top</code>, the 2nd set it to <code>left</code>, the 3rd set it to <code>right</code> and the 4th to <code>bottom</code></li>
            <li>Give a title attribute to each, and set it to equal the data-placement attribute e.x. <code>title="Tooltip on Top"</code>, <code>title="Tooltip on Right"</code> and add the same content between each button</li>
            <li>Pretty Nifty Button Group! lets add another <code>div</code> with a class attribute equal to <code>clearfix</code> and another line break below this div</li> 
            <li>Let finish with creating one more tooltip. Create a <code>div</code> tag below the last line break and give it a class attribute of <code>col-md-12</code></li>
            <li>Inside this col-md-12 div, add a <code>button</code> tag with the type attribute equal to <code>button</code>, again add some bootstrap classes <code>btn</code>, <code>btn-success</code> &amp; <code>btn-block</code> to this button. Set the data-toggle attribute to <code>tooltip</code> and a data-placement attribute of <code>top</code></li>
            <li>Give the button a title attribute e.x. <code>Tooltip Top</code> and again add the same content between tags e.x. "Block Button</li>
            <li>Last, lets try out one more data-attribute - the delay attribute, set the delay-attribute of this button to <code>500</code> this will display and hide the tooltip over a 500ms timeframe!</li>
          </ol>
          <p>Open this file in your browser to see what we just did!</p>
          <a href="answers/lesson6.php" target="_blank" class="text-danger">Ex: This is how your new file should look</a>
          <br><br>
          <p>Learn more about <a href="http://getbootstrap.com/javascript/#tooltips" target="_blank">Bootstrap Tooltips</a> here.</p>
          <div class="next1">
            <a href="#tab7" data-toggle="tab" class="btn btn-code btn-lg tabs"><i class="fa fa-child fa-2x"></i> Next Up: Using Bootstrap Popovers <i class="fa fa-2x fa-child"></i></a>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="col-md-12">
        <a class="btn btn-lg btn-task btn-block"><i class="fa fa-terminal"></i> Complete The Bootstrap <Strong>Tooltip</Strong> Task Before Moving On!</a>
      </div>
    </div>

    
  </article>
</div>