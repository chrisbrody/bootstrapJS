<!-- Lesson 1 - Getting Stared With Bootstrap -->
<div class="tab-pane" id="tab1">
  <!-- loader -->
  <div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

  </div> 
  <article class="lesson1">

		<div class="lesson_title">
			<h4>Lesson 1</h4>
			<h1>Learning to use Bootstrap Javascript</h1>
			<p class="lead">You need to include 2 JavaScript files before the closing body tag to get Bootstrap JS Plugsin working:</p>
      <ul class="list-unstyled">
  			<li>
  				<a href="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" target="_blank">&lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"&gt;&lt;/script&gt;</a> - jQuery is required to use bootstrap JS - paste this above Bootstrap
  			</li>
  			<li>
  				<a href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" target="_blank">&lt;script type='text/javascript' src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"&gt;&lt;/script&gt;</a> - Bootstrap JS is similar to CSS, just a script instead of a link - paste this below jQuery
  			</li>
  		</ul>
  		<a href="img/bs3.3.5.jpg" target="_blank" class="text-danger">Check It Out: How a basic Bootstrap file should look</a>
		</div>

		<!-- Overview of Bootstrap Javascript -->
    <div id="#" class="#">
      <h2>Overview of Bootstrap Javascript</h2>
      
      <hr>

      <!-- Individual vs compiled bootstrap.js -->
      <div class="col-md-12">
        <h3>
          Individual vs compiled bootstrap.js
        </h3>
        <p>
	        Plugins can be included individually (using Bootstrap's individual
					<code>*.js</code>
					files), or all at once (using
					<code>bootstrap.js</code>
					or the minified
					<code>bootstrap.min.js</code>
					).
        </p>
        <div class="col-md-4">
	        <div class="panel panel-danger">
			    <div class="panel-heading">Using the compiled JavaScript</div>
				<div class="panel-body">
				    Both
					<code>bootstrap.js</code>
					and
					<code>bootstrap.min.js</code>
					contain all plugins in a single file. <strong>Make sure to use only one.</strong>
				</div>
			</div>
		</div>
		<div class="col-md-8">
	    <div class="panel panel-success">
			  <div class="panel-heading">Component data attributes</div>
					<div class="panel-body">
					    Don't use data attributes from multiple plugins on the same element. For example, a button cannot both have a tooltip and toggle a modal. To accomplish this, use a wrapping element.
					</div>
				</div>
			</div>
    </div>
    <!-- attributes -->
    <div class="col-md-12">
      <h3>
        Data attributes
      </h3>
      <p>
      	You can use all Bootstrap plugins purely through the markup API without writing a single line of JavaScript. This is Bootstrap's first-class API and should be your first consideration when using a plugin.
      </p>
			<!-- <p>
				That said, in some situations it may be desirable to turn this functionality off. Therefore, we also provide the ability to disable the data attribute API by unbinding all events on the document namespaced with
				<code>data-api</code>
				. This looks like this:
			</p>
      <div class="well well-sm">    
        <code>
          <?php include('code/lesson1/data_atr1.php'); ?>
        </code>     
      </div>
      <p>Alternatively, to target a specific plugin, just include the plugin's name as a namespace along with the data-api namespace like this:</p>
      <div class="well well-sm">    
        <code>
          <?php include('code/lesson1/data_atr2.php'); ?>
        </code>     
      </div> -->
    </div>
    <!-- apis -->
    <div class="col-md-12">
    	<h3>Programmatic API - This is jQuery below</h3>
    	<p>
    		We also believe you should be able to use all Bootstrap plugins purely through the JavaScript API. All public APIs are single, chainable methods, and return the collection acted upon.
    	</p>
    	<div class="well well-sm">    
        <code>
          <?php include('code/lesson1/program_api1.php'); ?>
        </code>     
      </div>
      <p>
      	All methods should accept an optional options object, a string which targets a particular method, or nothing (which initiates a plugin with default behavior):
      </p>
      <div class="well well-sm">    
        <code>
          <?php include('code/lesson1/program_api2.php'); ?>
        </code>     
      </div>
      <!-- <p>
      	Each plugin also exposes its raw constructor on a
				<code>Constructor</code>
				property:
				<code>$.fn.popover.Constructor</code>
				. If you'd like to get a particular plugin instance, retrieve it directly from an element:
				<code>$('[rel="popover"]').data('popover')</code>
			</p> -->
    </div>
    <!-- events -->
    <div class="col-md-12">
    	<h3>Events - This is a mix of JavaScript &amp; jQuery below</h3>
    	<p>
    		Bootstrap provides custom events for most plugins' unique actions. Generally, these come in an infinitive and past participle form - where the infinitive (ex.
				<code>show</code>
				) is triggered at the start of an event, and its past participle form (ex.
				<code>shown</code>
				) is triggered on the completion of an action.
    	</p>
    	<p>
				All infinitive events provide
				<code>preventDefault</code>
				functionality. This provides the ability to stop the execution of an action before it starts.
			</p>
    	<div class="well well-sm">    
        <code>
          <?php include('code/lesson1/event.php'); ?>
        </code>	

      </div>		
      <p><span class="text-danger">Note:</span> alot of the stuff you can't read is JavaScript &amp; jQuery - Don't worry if you dont understand it yet</p> 
      <!-- <div class="panel panel-warning">
		    <div class="panel-heading">THIRD-PARTY LIBRARIES</div>
					<div class="panel-body">
						<strong>Bootstrap does not officially support third-party JavaScript libraries</strong>
						like Prototype or jQuery UI. Despite
						<code>.noConflict</code>
						and namespaced events, there may be compatibility problems that you need to fix on your own.    
					</div>
				</div>   
      </div> -->
		</div>

		<!-- next section -->
		<div class="">
			<a href="#tab2" data-toggle="tab" class="btn btn-code btn-lg tabs"><i class="fa fa-child fa-2x"></i> LETS GET MOVIN ON TO THE BOOTSTRAP MODALS <i class="fa fa-2x fa-child"></i></a>
		</div>

  </article>
</div>