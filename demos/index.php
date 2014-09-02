<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Guías de aplicación HABILMIND</title>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="../css/themes/default/jquery.mobile.css">
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="../external/jquery/jquery.js"></script>
	<script src="_assets/js/"></script>
	<script src="../js/"></script>
</head>
<body>
<div data-role="page" class="jqm-demos jqm-home">

	<div data-role="header" class="jqm-header">
		<h2><img src="_assets/img/logo-habilmind171x90.png" alt="Habilmind"></h2>
		<p>Version <span class="jqm-version"></span></p>
		<a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
		<a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a>
	</div><!-- /header -->

	<div role="main" class="ui-content jqm-content">

		<h1>Guía de aplicación de Habilmind</h1>

        <p>Desde esta aplicación podrás:</p>

        <ul>
            <li>Disponer de un asistente en la aplicación de pruebas con tus alumnos.</li>
            <li>Saber qué hacer en caso de posibles incidencias.</li>
            <li>Contactar directamente con Habilmind en caso de necesitar soporte.</li>
        </ul>

        <p>Estamos para ayudarte,</p>

        <p><strong>Joaquín Arias</strong> - CEO Habilmind</p>
        

		<img src="_assets/img/capturas-portada.jpeg">

		<p>¿nuevo con jQuery Mobile? Usa la <a target="_blank" data-ajax="false" href="http://view.jquerymobile.com/master/demos/">aplicación demo</a> para ver todos los ejemplos y posibilidades.</p>

        <div class="ui-grid-a ui-responsive">
        	<div class="ui-block-a">
        		<div class="jqm-block-content">
        			<h3>Diagnósticos de Habilidades</h3>

        			<p><a href="pages/" data-ajax="false">Habilidades General</a> <i>(22 habs.)</i></p>
        			<p><a href="navigation/" data-ajax="false">Habilidades Infantil</a> <i>(11 habs.)</i></p>
        			<p><a href="loader/" data-ajax="false">Habilidades Fundamentales</a> <i>(9 habs.)</i></p>
        			<p><a href="transitions/" data-ajax="false">Habilidades Fundamentales Infantil</a> <i>(7 habs.)</i></p>
        		</div>
        	</div>
        	<div class="ui-block-b">
        		<div class="jqm-block-content">
        			<h3>CSS Framework</h3>

        			<p><a href="theme-default/" data-ajax="false">Theming</a></p>
        			<p><a href="button-markup/" data-ajax="false">Buttons</a></p>
        			<p><a href="icons/" data-ajax="false">Icons</a></p>
        			<p><a href="grids/" data-ajax="false">Grids</a></p>
        			<p><a href="../body-bar-classes/" data-ajax="false">Body and bar classes</a></p>
        		</div>
        	</div>        	
        	<div class="ui-block-a">
        		<div class="jqm-block-content">
        			<h3>¿necesitas más ayuda?</h3>

        			<p><a href="toolbar/" data-ajax="false">Toolbar</a>, <a href="navbar/" data-ajax="false">Navbar</a></p>
        			<p><a href="tabs/" data-ajax="false">Tabs</a>, <a href="panel/" data-ajax="false">Panel</a>, <a href="popup/" data-ajax="false">Popup</a></p>
        			<p><a href="listview/" data-ajax="false">Listview</a></p>
        			<p><a href="collapsible/" data-ajax="false">Collapsible</a>, <a href="collapsibleset/" data-ajax="false">Collapsible set</a></p>
        			<p><a href="table-reflow/" data-ajax="false">Table Reflow</a>, <a href="table-column-toggle/" data-ajax="false">Table Column Toggle</a></p>
        			<p><a href="filterable/" data-ajax="false">Filterable</a></p>
        		</div>
        	</div>
        	<div class="ui-block-b">
        		<div class="jqm-block-content">
        			<h3>¡Síguenos!</h3>

        			<p><a href="checkboxradio-checkbox/" data-ajax="false">Checkboxes</a>, <a href="checkboxradio-radio/" data-ajax="false">Radio buttons</a></p>
        			<p><a href="selectmenu/" data-ajax="false">Selectmenu</a>, <a href="selectmenu-custom/" data-ajax="false">Custom menu</a></p>
        			<p><a href="flipswitch/" data-ajax="false">Flipswitch</a></p>
        			<p><a href="slider/" data-ajax="false">Slider</a>, <a href="rangeslider/" data-ajax="false">Rangeslider</a></p>
        			<p><a href="button/" data-ajax="false">Input button</a></p>
        			<p><a href="controlgroup/" data-ajax="false">Controlgroup</a></p>
        		</div>
        	</div>
        </div>

	</div><!-- /content -->

	<?php include( 'jqm-navmenu.php' ); ?>

	<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
		<p>jQuery Mobile Demos version <span class="jqm-version"></span></p>
		<p>Copyright 2014 The jQuery Foundation</p>
	</div><!-- /footer -->

<?php include( 'jqm-search.php' ); ?>

</div><!-- /page -->

</body>
</html>
