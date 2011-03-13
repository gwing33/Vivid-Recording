<!DOCTYPE HTML>
<html>
  <head>
    <title>Vivid Recording Studio</title>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  	<script>!window.jQuery && document.write(unescape('%3Cscript src="/js/jquery.js"%3E%3C/script%3E'))</script>
  	<script src="/js/underscore.js"></script>
  	<script src="/js/backbone.js"></script>
  	<script src="/js/app.js"></script>
  	
  	<link rel="stylesheet" href="/css/screen.css" type="text/css" />
  </head>

  <body>
    
    <div class='app'>
      <div class='header'>
        <div id='logo'>
          <img src='/img/vivid-recording-studio.png' />
        </div>
        
        <div id='player'>
        
          <ul>
            <li>
              <a></a>
              <div>
                <h3>Song Name Here</h3>
                <h4>Artists Name</h4>
              </div>
              <i></i>
            </li>
            
            <li class='previous'>
              <a></a>
              <div>
                <h3>Song Name Here</h3>
                <h4>Artists Name</h4>
              </div>
              <i></i>
            </li>
            
            <li class='paused current'>
              <a></a>
              <div>
                <h3>Song Name Here</h3>
                <h4>Artists Name</h4>
              </div>
              <i></i>
            </li>
            
            <li class='next'>
              <a></a>
              <div>
                <h3>Song Name Here</h3>
                <h4>Artists Name</h4>
              </div>
              <i></i>
            </li>
            
            <li>
              <a></a>
              <div>
                <h3>Song Name Here</h3>
                <h4>Artists Name</h4>
              </div>
              <i></i>
            </li>
            
            <li>
              <a></a>
              <div>
                <h3>Song Name Here</h3>
                <h4>Artists Name</h4>
              </div>
              <i></i>
            </li>
          </ul>
        
        </div>
        
        <ul class='nav'>
          <li>
            <a id='index' class='<?php echo (Request::current()->action() == 'index') ? 'current' : ''; ?>' href='#<?php echo URL::site('/'); ?>'>
              <span>Home</span>
              <i></i>
            </a>
          </li>
          <li>
            <a id='services' class='<?php echo (Request::current()->action() == 'services') ? 'current' : ''; ?>' href='#<?php echo URL::site('/services'); ?>'>
              <span>Services</span>
              <i></i>
            </a>
          </li>
          <li>
            <a id='equipment' class='<?php echo (Request::current()->action() == 'equipment') ? 'current' : ''; ?>' href='#<?php echo URL::site('/equipment'); ?>'>
              <span>Equipment</span>
              <i></i>
            </a>
          </li>
          <li>
            <a id='media' class='<?php echo (Request::current()->action() == 'media') ? 'current' : ''; ?>' href='#<?php echo URL::site('/media'); ?>'>
              <span>Media</span>
              <i></i>
            </a>
          </li>
          <li>
            <a id='clients' class='<?php echo (Request::current()->action() == 'clients') ? 'current' : ''; ?>' href='#<?php echo URL::site('/clients'); ?>'>
              <span>Clients</span>
              <i></i>
            </a>
          </li>
          <li>
            <a id='contact' class='<?php echo (Request::current()->action() == 'contact') ? 'current' : ''; ?>' href='#<?php echo URL::site('/contact'); ?>'>
              <span>Contact</span>
              <i></i>
            </a>
          </li>
        </ul>
      </div>
      
      <div id='content'>
        <?php echo $yield; ?>
      </div>
    
    </div>
    
  </body>
</html>