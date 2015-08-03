<div class="tab-pane" id="tab9">
  <article class="lesson9">

    <div class="lesson_title">
      <h4>Lesson 9</h4>
      <h1>Even More on Bootstrap Buttons</h1>
    </div>    

    <!-- Buttons -->
    <div id="#" class="#">
      <h2>Buttons<small>.js</small></h2>
      <hr>

      <!-- examples -->
      <div class="col-md-12">
        <h2>
          Example uses
        </h2>
        <p>
          Do more with buttons. Control button states or create groups of buttons for more components like toolbars.
        </p>
      </div>
     
      <!-- Single toggle -->
      <div class="col-md-12">
        <h3>
          Single toggle
        </h3>
        <p>
          Add
          <code>data-toggle="button"</code>
          to activate toggling on a single button.
        </p>
        <div class="table_example">
          <button type="button" class="btn btn-primary" data-toggle="button">Single toggle</button>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson9/single.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Checkbox -->
      <div class="col-md-12">
        <h3>
          Checkbox
        </h3>
        <p>
          Add
          <code>data-toggle="buttons"</code>
          to a group of checkboxes for checkbox style toggling on btn-group.
        </p>
        <div class="table_example">
          <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary active">
              <input type="checkbox" checked> Option 1 (pre-checked)
            </label>
            <label class="btn btn-primary">
              <input type="checkbox"> Option 2
            </label>
            <label class="btn btn-primary">
              <input type="checkbox"> Option 3
            </label>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson9/checkbox.php'); ?>
          </code>     
        </div>
        <div class="panel panel-warning">
          <div class="panel-heading">
            Pre-checked options need
            <code>.active</code>
          </div>
          <div class="panel-body">
            For pre-checked options, you must add the
            <code>.active</code>
            class to the input's
            <code>label</code>
            yourself.
          </div>
        </div>
      </div>

      <!-- Radio -->
      <div class="col-md-12">
        <h3>
          Radio
        </h3>
        <p>
          Add
          <code>data-toggle="buttons"</code>
          to a group of radio inputs for radio style toggling on btn-group
        </p>
        <div class="table_example">
          <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary active">
              <input type="radio" name="options" id="option1" checked> Option 1 (preselected)
            </label>
            <label class="btn btn-primary">
              <input type="radio" name="options" id="option2"> Option 2
            </label>
            <label class="btn btn-primary">
              <input type="radio" name="options" id="option3"> Option 3
            </label>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson9/radio.php'); ?>
          </code>     
        </div>
        <div class="panel panel-danger">
          <div class="panel-heading">
            Pre-checked options need
            <code>.active</code>
          </div>
          <div class="panel-body">
            For pre-checked options, you must add the
            <code>.active</code>
            class to the input's
            <code>label</code>
            yourself.
          </div>
        </div>
      </div>

      <!-- Usage -->
      <div class="col-md-12">
        <h3>
          Usage
        </h3>
        <p>
          Enable buttons via JavaScript:
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson9/usage.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Markup -->
      <!-- <div class="col-md-12">
        <h3>
          Markup
        </h3>
        <p>
          Data attributes are integral to the button plugin. Check out the example code below for the various markup types.
        </p>
      </div> -->

      <!-- Methods -->
      <!-- <div class="col-md-12"> -->
        <!-- <h3>Methods</h3> -->
        <!-- toggle -->
        <!-- <h4>$().button('toggle')</h4>
        <p>Toggles push state. Gives the button the appearance that it has been activated.</p>
        <div class="panel panel-info">
          <div class="panel-heading">Auto toggling</div>
          <div class="panel-body">
            You can enable auto toggling of a button by using the
            <code>data-toggle</code>
            attribute.
          </div>
        </div>
        <div class="table_example">
          <button class="btn btn-primary" type="button" data-toggle="button"> Loading state </button>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson9/toggle.php'); ?>
          </code>     
        </div> -->

        <!-- loading -->
        <!-- <h4>$().button('toggle')</h4>
        <p>
          Sets button state to loading - disables button and swaps text to loading text. Loading text should be defined on the button element using the data attribute
          <code>data-loading-text</code>
          . 
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson9/loading.php'); ?>
          </code>     
        </div> -->
        
        <!-- reset -->
        <!-- <h4>$().button('reset')</h4>
        <p>Resets button state - swaps text to original text.</p> -->

        <!-- loading -->
        <!-- <h4>$().button(string)</h4>
        <p>Resets button state - swaps text to any data defined text state.</p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson9/string.php'); ?>
          </code>     
        </div> -->
      <!-- </div> -->


    </div>

    <!-- lesson task 9-->
    <div class="task">
      <div class="task1">
        <div class="col-md-12">
          <h3>Sweet, multiple states of buttons, very fun. Lets dive right into our <code>CODE</code>.</h3>
          <p class="lead">Open your index.html file from your BootstrapJS folder.</p>
          <ol>
            <li>Strat below everything we have done before with a <code>div</code> and give it a class of <code>container</code> or <code>container-fluid</code>, with a <code>div</code> tags inside, with a class of <code>row</code></li>
            <li>Inside the row div, add 2 <code>div</code> tags, the 1st with the classes <code>col-sm-12</code> &amp; <code>col-md-4</code>.  To the 2nd div, add the classes <code>col-sm-6</code> &amp; <code>col-md-8</code></li>
            <li>In the col-md-4 div, lets make a checkbox group that can have all items selected at once. Start with a <code>h3</code> tag with some content e.x. "Things You Enjoy".  Next add a <code>div</code> tag below the h3 tag with a class of <code>btn-group</code>, and set the data-toggle to equal <code>button</code> to give the impression the buttons are clicked! Add 3 <code>label</code> tags inside the btn-group div, with one <code>input</code> tag inside each label</li>
            <li>To the 1st label add the class of <code>btn</code>, <code>btn-primary</code> &amp; <code>active</code>, for the 2nd label add the classes <code>btn</code> &amp; <code>btn-primary</code>, to the third label add the class <code>btn</code> &amp; <code>btn-primary</code></li>
            <li>Give each input tag a type attribute eqqual to <code>checkbox</code> and add some content after each e.x. "Beaches", "Mountains", "Cities", and check it out you made a selectable btn-group!</li>
            <li>On to the 2nd div that has a class of col-md-8, add a <code>h3</code> tag with some content e.x. "Favorite Fruit".  Again we need to create a <code>div</code> tag with a class of <code>btn-group</code>, add  3 <code>label</code> tags inside, all with 1 <code>input</code> tag.  Also add a data-toggle attribute of <code>button</code> to the btn-group div</li>
            <li>For the 1st label add the classes <code>btn</code>, <code>btn-danger</code> &amp; <code>active</code>, and some content after the input tag e.x. "Apples", to the 2nd label add the classes <code>btn</code> &amp; <code>btn-warning</code> and a type attribute equal to <code>radio</code> and again some content after the the tag e.x. "Oranges"</li>
            <li>To the last label again, add some classes <code>btn</code> &amp; <code>btn-primary</code> and set the type attribute to <code>radio</code> and some content after the tag e.x. "Blueberries". Phew! Got through that, lets check it out!</li>
          </ol>
          <p>Open this file in your browser to see your new button groups!</p>
          <a href="answers/lesson9.php" target="_blank" class="text-danger">Ex: This is how your new file should look</a>
          <br><br>
          <p>Check out <a href="http://getbootstrap.com/javascript/#buttons" target="_blank">More on Bootstrap Buttons Here!</a></p>
          <div class="next1">
            <a href="#tab10" data-toggle="tab" class="btn btn-code btn-lg tabs"><i class="fa fa-child fa-2x"></i> Next Up: Working with Collapsible Bootstrap <i class="fa fa-2x fa-child"></i></a>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="col-md-12">
        <a class="btn btn-lg btn-task btn-block"><i class="fa fa-terminal"></i> Complete The Bootstrap <Strong>Button</Strong> Task Before Moving On!</a>
      </div>
    </div>   
  </article>
</div>