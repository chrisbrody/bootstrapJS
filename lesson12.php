<div class="tab-pane" id="tab12">
  <!-- loader -->
  <div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

  </div> 
  <article class="lesson12">

    <div class="lesson_title">
      <h4>Lesson 12</h4>
      <h1>Affix'n Elements with Bootstrap</h1>
    </div>    

    <!-- Affix -->
    <div id="#" class="#">
      <h2>Affix<small>.js</small></h2>
      <hr>

      <!-- Example -->
      <div class="col-md-12">
        <h3>
          Example
        </h3>
        <p>
          The subnavigation on the right is a live demo of the affix plugin.
        </p>
      </div>

      <!-- Usage -->
      <div class="col-md-12">
        <h3>
          Usage
        </h3>
        <p>
          Use the affix plugin via data attributes or manually with your own JavaScript.
          <strong class="text-danger">In both situations, you must provide CSS for the positioning and width of your affixed content.</strong>
        </p>
      </div>

      <!-- Positioning via CSS -->
      <div class="col-md-12">
        <h3>
          Positioning via CSS
        </h3>
        <p>
          The affix plugin toggles between three classes, each representing a particular state:
          <code>.affix</code>
          ,
          <code>.affix-top</code>
          , and
          <code>.affix-bottom</code>
          . You must provide the styles for these classes yourself (independent of this plugin) to handle the actual positions.
        </p>
        <p>Here's how the affix plugin works:</p>
        <ol>
          <li>
            To start, the plugin adds
            <code>.affix-top</code>
            to indicate the element is in its top-most position. At this point no CSS positioning is required.
          </li>
          <li>
            Scrolling past the element you want affixed should trigger the actual affixing. This is where
            <code>.affix</code>
            replaces
            <code>.affix-top</code>
            and sets
            <code>position: fixed;</code>
            (provided by Bootstrap's code CSS).
          </li>
          <li>
            If a bottom offset is defined, scrolling past that should replace
            <code>.affix</code>
            with
            <code>.affix-bottom</code>
            . Since offsets are optional, setting one requires you to set the appropriate CSS. In this case, add
            <code>position: absolute;</code>
            when necessary. The plugin uses the data attribute or JavaScript option to determine where to position the element from there.
          </li>
        </ol>
        <p>Follow the above steps to set your CSS for either of the usage options below.</p>
      </div>

      <!-- Via data attributes -->
      <div class="col-md-12">
        <h3>
          Via data attributes
        </h3>
        <p>
          To easily add affix behavior to any element, just add
          <code>data-spy="affix"</code>
          to the element you want to spy on. Use offsets to define when to toggle the pinning of an element.
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson12/data.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Via JavaScript -->
      <!-- <div class="col-md-12">
        <h3>
          Via JavaScript
        </h3>
        <p>
          Call the affix plugin via JavaScript:
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson12/javascript.php'); ?>
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
          <code>data-offset-top="200"</code>
          .
        </p>
        <div class="table_example">
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th style="width: 100px;">Name</th>
                  <th style="width: 100px;">type</th>
                  <th style="width: 50px;">default</th>
                  <th>description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>offset</td>
                  <td>number | function | object</td>
                  <td>10</td>
                  <td>
                  Pixels to offset from screen when calculating position of scroll. If a single number is provided, the offset will be applied in both top and bottom directions. To provide a unique, bottom and top offset just provide an object
                  <code>offset: { top: 10 }</code>
                  or
                  <code>offset: { top: 10, bottom: 5 }</code>
                  . Use a function when you need to dynamically calculate an offset.
                  </td>
                </tr>
                <tr>
                  <td>target</td>
                  <td>selector | node | jQuery element</td>
                  <td>
                  the
                  <code>window</code>
                  object
                  </td>
                  <td>Specifies the target element of the affix.</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div> -->

      <!-- Events -->
      <!-- <div class="col-md-12">
        <h3>
          Events
        </h3>
        <p>
          Bootstrap's affix class exposes a few events for hooking into affix functionality.
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
                  <td>affix.bs.affix</td>
                  <td>This event fires immediately before the element has been affixed.</td>
                </tr>
                <tr>
                  <td>affixed.bs.affix</td>
                  <td>This event is fired after the element has been affixed.</td>
                </tr>
                <tr>
                  <td>affix-top.bs.affix</td>
                  <td>This event fires immediately before the element has been affixed-top.</td>
                </tr>
                <tr>
                  <td>affixed-top.bs.affix</td>
                  <td>This event is fired after the element has been affixed-top.</td>
                </tr>
                <tr>
                  <td>affix-bottom.bs.affix</td>
                  <td>This event fires immediately before the element has been affixed-bottom.</td>
                </tr>
                <tr>
                  <td>affixed-bottom.bs.affix</td>
                  <td>This event is fired after the element has been affixed-bottom.</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div> -->


    </div>

    <!-- lesson task 12 -->
    <div class="task">
      <div class="task1">
        <div class="col-md-10">
          <h3>We can affix tags with ease, using HTML5 and a little jQuery fun.</h3>
          <p class="lead">Open your index.html file from your BootstrapJS folder.</p>
          <ol>
            <li>To begin create a <code>div</code> tag at the top of the file, one line below the <code>body</code> tag, and give it a class of <code>container</code> or <code>container-fluid</code></li>
            <li>Inside add a <code>div</code> with a class of <code>well</code>, and a <code>h3</code> tag inside, with some content e.x. "Header"</li>
            <li>Add an id attribute to the container div e.x. header. In your main.css file, add a selector to select the well e.x. <code>#header .well {  }</code>, with a <code>height</code> property and a value of 400px</li>
            <li>Below the container div, add a <code>div</code> tag with an id attribute e.x. nav, add a <code>nav</code> tag inside, with the classes of <code>navbar</code> &amp; <code>navbar-default</code></li>
            <li>Create a <code>ul</code> tag inside the nav tag, with the classes <code>nav</code> &amp; <code>navbar-nar</code>. Add 3 <code>li</code> tags, the 1st with a class of <code>active</code>, each with a <code>a</code> tag inside, and some content between the anchor tags e.x. "Home", "About", "Link"</li>
            <li>In you main.css create a new selector <code>#nav.affix</code> with a <code>position</code> of <code>fixed</code>, a <code>top</code> property of <code>0</code>, a <code>width</code> of <code>100%</code> &amp; a <code>z-index</code> property of <code>101</code></li>
            <li>Add a new <code>div</code> tag below the nav id div, with a class of <code>container</code> or <code>container-fluid</code>. Inside add 2 <code>div</code> tags with a class of <code>col-md-12</code></li>
            <li>Inside each col div, add a <code>p</code> tag, with a class equal to <code>test</code>, in your main.css add a new selector <code>p.test</code> with a <code>height</code> of <code>1000px</code></li>
            <li>Now the content is set, add a data-spy attribute of <code>affix</code> to the nav id div tag, open up you main.js and add this line of code: <br><code>$('#nav').affix({ offset: 400 });</code> to your file</li>            
          </ol>
          <p>Save &amp; Open in your browser to see your excellent creation!</p>
          <a href="answers/lesson12.php" target="_blank" class="text-danger">Ex: This is how your new file should look</a>
          <br><br>
          <p>Learn more about <a href="http://getbootstrap.com/javascript/#affix" target="_blank">Bootstrap Affix'n Elements!</a></p>
          <p class="lead">Well Done! You have arrived at the end with a great knowledge of the bootstrap docs. As always we can check out the full documentation @ <a href="http://getbootstrap.com/" target="_blank">getbootstrap.com</a> &amp; don't be afraid to Google bootstrap stuff, a lot of stuff out there!</p>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="col-md-12">
        <a class="btn btn-lg btn-task btn-block"><i class="fa fa-terminal"></i> Complete The Final Bootstrap <Strong>Affix</Strong> Task!</a>
      </div>
    </div>    
  </article>
</div>