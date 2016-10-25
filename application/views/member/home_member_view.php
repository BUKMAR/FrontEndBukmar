<!DOCTYPE html>
<html>
<head>
  <?php require_once(APPPATH .'views/include/include.php'); ?>
</head>
<body>
   <?php require_once(APPPATH .'views/member/template/menu_nav.php'); ?>
    <!-- Main Content -->
    <div class="container-fluid">
      <div class="side-body">
        <p><h1>Home</h1></p>
        <div role="tabpanel">
        	<!-- Nav tabs -->
        	<ul class="nav nav-tabs" role="tablist">
        		<li role="presentation" class="active">
        			<a href="#home" aria-controls="home" role="tab" data-toggle="tab">home</a>
        		</li>
        		<li role="presentation">
        			<a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">tab</a>
        		</li>
        	</ul>
        
        	<!-- Tab panes -->
        	<div class="tab-content">
        		<div role="tabpanel" class="tab-pane active" id="home"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
        		<div role="tabpanel" class="tab-pane" id="tab">
        			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        		</div>
        	</div>
        </div>
      </div>
    </div>
</div>
</body>
</html>
