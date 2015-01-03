<?php
defined('_JEXEC') or die;
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$siteName = $app->getCfg('sitename');
JHtml::_('bootstrap.framework');
$doc->addStyleSheet('/media/jui/css/bootstrap.min.css');
$doc->addStyleSheet('/media/jui/css/bootstrap-responsive.min.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/styles.css');
$doc->addScript('/templates/' . $this->template . '/js/main.js', 'text/javascript');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <jdoc:include type="head" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <style>
      body {
        padding-top: 40px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
      
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo '/templates/' . $this->template . 'ico/apple-touch-icon-144-precomposed.png'; ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo '/templates/' . $this->template . 'ico/apple-touch-icon-114-precomposed.png'; ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo '/templates/' . $this->template . 'ico/apple-touch-icon-72-precomposed.png'; ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo '/templates/' . $this->template . 'ico/apple-touch-icon-57-precomposed.png'; ?>">
    <link rel="shortcut icon" href="<?php echo '/templates/' . $this->template .'/ico/favicon.png'; ?>">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
      <div class="">
          <a href="#"><img class="logo" src="<?php echo '/templates/' . $this->template .'/img/logo.png'; ?>" alt="Planet Cleveland Logo"/></a>
          </div>
      <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div id="navigation" class="nav-collapse collapse">
            <jdoc:include type="modules" name="top" style="none" />
          </div><!--/.nav-collapse -->
          </div><!-- /inner -->
      </div><!-- /navbar inner -->

    </div><!-- /navbar -->

	<div id="jumbotron" class="row jumbotron">
    	<div class="container jumbo-content">
			<jdoc:include type="modules" name="content" style="none" />
    	</div> <!-- /container -->
    </div>
    <div class="container">
    <div class="row">
    	<div class="span8">
    	<jdoc:include type="modules" name="leftt-1" style="none" />
    	<jdoc:include type="component" />
    	<jdoc:include type="modules" name="left-2" style="none" />
    	</div>
    	<div class="span4">
    	<jdoc:include type="modules" name="right" style="none" />
    	</div>
    </div>
    </div>
    
	<div class="row">
		<div class="container">
			<p>&copy; <?php echo date('Y') . ' ' . $siteName; ?></p>
		</div>
	</div>
    
    <div class="navbar navbar-fixed-bottom" id="footer">
    	<div class="navbar-inner">
    		<jdoc:include type="modules" name="bottom" style="none" />
    	</div>
    </div>
  </body>
</html>
