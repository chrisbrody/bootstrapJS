<div class="tab-pane" id="tab8">
  <!-- loader -->
  <div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

  </div> 
  <article class="lesson8">

    <div class="lesson_title">
      <h4>Lesson 8</h4>
      <h1>Messing with More Bootstrap Alerts</h1>
    </div>    

    <!-- # -->
    <div id="#" class="#">
      <h2>Alert<small>.js</small></h2>
      <hr>

      <!-- Example alerts -->
      <div class="col-md-12">
        <h3>
          Example alerts
        </h3>
        <p>
          Add dismiss functionality to all alert messages with this plugin.
        </p>
        <div class="table_example">
          <div class="alert alert-warning fade in" role="alert">
            <button class="close" data-dismiss="alert" type="button">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
            </button>
            <strong>Holy guacamole!</strong>
            Best check yo self, you're not looking too good.
          </div>
          <div class="alert alert-danger fade in" role="alert">
            <button class="close" data-dismiss="alert" type="button">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
            </button>
            <h4>Oh snap! You got an error!</h4>
            <p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
            <p>
            <button class="btn btn-danger" type="button">Take this action</button>
            <button class="btn btn-default" type="button">Or do this</button>
            </p>
          </div>
        </div>
      </div>

      <!-- usage -->
      <div class="col-md-12">
        <h3>
          Usage
        </h3>
        <p>
          Usage
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson8/usage.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Mark Up -->
      <div class="col-md-12">
        <h3>
          Markup
        </h3>
        <p>
          Just add
          <code>data-dismiss="alert"</code>
          to your close button to automatically give an alert close functionality.
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson8/markup.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Methods -->
      <!-- <div class="col-md-12">
        <h3>
          Methods
        </h3>
        <h4>$().alert()</h4>
        <p>
        Wraps all alerts with close functionality. To have your alerts animate out when closed, make sure they have the
        <code>.fade</code>
        and
        <code>.in</code>
        class already applied to them.
        </p>
        <h4>.alert('close')</h4>
        <p>Closes an alert.</p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson8/methods.php'); ?>
          </code>     
        </div>
      </div> -->

      <!-- Events -->
      <!-- <div class="col-md-12">
        <h3>
          Events
        </h3>
        <p>
          Bootstrap's alert class exposes a few events for hooking into alert functionality.
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
              <tbody
                <tr>
                  <td>close.bs.alert</td>
                  <td>
                  This event fires immediately when the
                  <code>close</code>
                  instance method is called.
                  </td>
                </tr>
                <tr>
                  <td>closed.bs.alert</td>
                  <td>This event is fired when the alert has been closed (will wait for CSS transitions to complete).</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson8/events.php'); ?>
          </code>     
        </div>
      </div> -->


    </div>

    <!-- lesson task 8-->
    <div class="task">
      <div class="task1">
        <div class="col-md-12">
          <h3>Alerts are one of the coolest Bootstrap Javascript plugins, lets create a few alerts that we can activate from buttons as well as alerts that are always visible!</h3>
          <p class="lead">Open your index.html file from your BootstrapJS folder.</p>
          <ol>
            <li>Begin be creating a <code>div</code> tag below every div and give it a class of <code>container</code> or <code>container-fluid</code>, inside make another <coded>iv</coded> with a class of <code>row</code> </li>
            <li>Next we can add some grid column divs inside the <code>row</code>. Add 3 sibling <code>div</code> tags, the 1st add the classes of <code>col-sm-4</code>, <code>col-md-6</code> &amp; col-md-offset-3</code>, 2nd div the classes of <code>col-sm-4</code> &amp; <code>col-md-8</code> and the 3rd div the classes of <code>col-sm-4</code> &amp; <code>col-md-12</code></li>
            <li>Inside the 1st div add a <code>h1</code>, <code>p</code>, <code>button</code> &amp; <code>div</code> tag. Fill the <code>h1</code> and <code>p</code> tags with some dummy text from <a href="http://www.lipsum.com/" target="_blank">Lipsum</a></li>
            <li>In the second div add a <code>h2</code>, <code>p</code>, <code>button</code> &amp; a <code>div</code> tag. Again fill the <code>h2</code> &amp; <code>p</code> tags with more dummy text from <a href="http://www.lipsum.com/" target="_blank">Lipsum</a></li> 
            <li>Inside the third div add a <code>h3</code>, <code>p</code>, <code>button</code> &amp; 3 <code>div</code> tags. Again We should need dummy text from <a href="http://www.lipsum.com/" target="_blank">Lipsum</a> for the <code>h2</code> &amp; <code>p</code> tags</li>
            <li>Great we have the basic content structure now we can add a few bootstrap classes to bring these to life! Inside the col-md-6 div lets give the button the classes of <code>btn</code>, <code>btn-success</code> &amp; <code>btn-block</code>, add content between the button tags e.x. "Alert Button"</li>
            <li>To the 1st div inside our col-md-6 attach a class of <code>alert</code>, <code>alert-success</code> &amp; <code>fade</code>.  In the aler div add a <code>button</code> that we will dismiss the alert when clicked, <span class="text-primary">( We will write this at the end of this task )</span> and some content below the button this will be the alert message e.x. "&lt;strong&gt;Success! &lt;/strong&gt; Best check yo self, before your better then the rest!"</li>
            <li>For this new button add a class of <code>close</code> and set the data-dismiss attribute to <code>alert</code></li>
            <li>Inside the button add 2 <code>span</code> tags, to the first span add a <code>& times ;</code> between the opening and closing tags. This makes the closing X<br><span class="text-primary">We <strong>MUST</strong> remove the space between the <code>"&"</code> and <code>"t"</code> as well as between the <code>"s"</code> and <code>";"</code> to make the X properly appear --- We cant because it would just create the X and you wouldn't see the code you need!</span></li>
            <li>To the second span add a class of <code>sr-only</code> and between the open and close tags add the text "Close". If we wanted this alert to work when we load the page we only need to add the class of <code>in</code> to the div with a class of <code>alert alert-success fade</code>.  For now leave it off we will make the button above display it in a minute.</li>
            <li>Lets move into the <code>col-md-8</code> div below and give the button the classes <code>btn</code>, <code>btn-warning</code> &amp; <code>btn-lg</code> and some text between the tags "Click Here to Alert Us"</li>
            <li>The div below the button needs some alert classes to make it wokr as an alert so add the classes <code>alert</code>, <code>alert-warning</code> &amp; <code>fade</code> and insert some text for the alert inside this div e.x. "&lt;strong&gt;Oh Snap It's a Warning&lt;/strong&gt; The end of the era is among us, or so they say, they are probably wrong anyway."</li>
            <li>Finally into the last div with the class <code>col-md-12</code>, lets give the button a few bootstrap classes <code>btn</code>, <code>btn-danger</code> &amp; <code>btn-sm</code> and add some text between the button tags e.x. "DONT CLICK THIS".  For the div below the button give this a few alert classes <code>alert</code>, <code>alert-danger</code> &amp; <code>fade</code></li>
            <li>Inside this alert div lets add some text e.x. "&lt;strong&gt;DANGER!&lt;/strong&gt; Watch your back, everyone is out to get you, get protection asap before it's to late." and a line break below the text <code>&lt;br&gt;</code>, and add 2 <code>a</code> tags below the line break tag</li>
            <li>Add a few class to the anchors, give first the classes <code>btn</code> &amp; <code>btn-primary</code>, add some content between the tags e.x. "Action 1". On the second a add the classes of <code>btn</code> &amp; <code>btn-danger</code>, and again some content between the tags e.x "Action 2"</li>
            <li>Nicely Done, lets make one more alert and then the little jQuery to display the alerts when we click the nearest button! start by adding a <code>div</code> tag with a class of <code>clearfix</code> below the <code>col-md-12</code> div and add another <code>div</code> tag below this clearfix div</li>
            <li>Give this div a few alert classes like we did before <code>alert</code>, <code>alert-success</code> &amp; <code>fade</code> but this time we want this one always displayed so we need to give this div one more class of <code>in</code>. Next we need some alert message inside the alert div e.x. "Check out this sweet alert, its really important!"</li>
            <li>OK, we have the alerts built but they still don't show up so lets make a quick jQuery script to fix this! In your main.js add these three lines of code 
            <code>
              <br>
              $(".alert").on('click', function(){
              <br>
                <span class="form_padding">$(this).closest("div").find(".alert").addClass("in");</span>
              <br>
              });
              <br>
            </code>
            </li>
            <li>After you add this script into your main.js file, you will just need to add the arbitary class of <code>btn-alert</code> to your buttons - to match this selector in this code</li>
          </ol>
          <p>Open this file in your browser to see what we just did!</p>
          <a href="answers/lesson8.php" target="_blank" class="text-danger">Ex: This is how your new file should look</a>
          <br><br>
          <p>Woohoo Alerts are super awesome good job getting through that task!</p>
          <p>More about <a href="http://getbootstrap.com/javascript/#alerts" target="_blank">Bootstrap Alerts Here!</a></p>
          <div class="next1">
            <a href="#tab9" data-toggle="tab" class="btn btn-code btn-lg tabs"><i class="fa fa-child fa-2x"></i> Next Up: Even More on Bootstrap Buttons <i class="fa fa-2x fa-child"></i></a>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="col-md-12">
        <a class="btn btn-lg btn-task btn-block"><i class="fa fa-terminal"></i> Complete The Bootstrap <Strong>Alert</Strong> Task Before Moving On!</a>
      </div>
    </div>   
  </article>
</div>