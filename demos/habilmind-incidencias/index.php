<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>¿incidencias? - Guía de aplicación HABILMIND</title>
		<link rel="stylesheet" href="../../css/themes/default/jquery.mobile.css">
		<link rel="stylesheet" href="../_assets/css/jqm-demos.css">
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
		<script src="../../external/jquery/jquery.js"></script>
		<script src="../_assets/js/"></script>
		<script src="../../js/"></script>
	</head>
	<body>



	<div data-role="page" class="jqm-demos" data-quicklinks="true" id="page-principal">

        <?php require_once( '../jqm-pageheader.php' ); ?>

        <div role="main" class="ui-content jqm-content">

            <h1>¿Incidencias?</h1>

            <h2>Estas son las incidencias más típicas:</h2>

            <ul data-role="listview">
                <li><a href="#incidencia1" data-transition="slide" >Se cierra la sesión en la plataforma de manera inesperada o bien el alumno cierra el navegador por error</a></li>
                <li><a href="#incidencia2" data-transition="slide" >Se pierde la conexión a internet en un equipo o en toda el aula de informática</a></li>
                <li><a href="#incidencia3" data-transition="slide" >Un alumno tiene que marcharse sin terminar las pruebas</a></li>
                <li><a href="#incidencia4" data-transition="slide" >Un equipo informático deja de funcionar</a></li>
            </ul>

        </div>

        <?php include( '../jqm-navmenu.php' ); ?>
        <?php include( '../jqm-footer.php' ); ?>
        <?php include( '../jqm-search.php' ); ?>

    </div>


    <div data-role="page" class="jqm-demos" data-quicklinks="true" id="incidencia1">
        <?php include( '../jqm-pageheader.php' ); ?>

        <div role="main" class="ui-content jqm-content">
            <h2>Se cierra la sesión en la plataforma de manera inesperada o bien el alumno cierra el navegador por error</h2>
            <p>En este caso deberemos volver a entrar en la plataforma, autenticarnos, seleccionar al alumno y hacer clic en "Continuar test”.</p>

            <p><a data-rel="back" data-direction="reverse" class="ui-btn ui-shadow ui-corner-all ui-btn-b">volver"</a></p>
        </div>
        <?php include( '../jqm-navmenu.php' ); ?>
        <?php include( '../jqm-footer.php' ); ?>
        <?php include( '../jqm-search.php' ); ?>

    </div>
    
    
    
    

    <div data-role="page" class="jqm-demos" data-quicklinks="true" id="incidencia2">
        <?php include( '../jqm-pageheader.php' ); ?>

        <div role="main" class="ui-content jqm-content">
            <h2>Se pierde la conexión a internet en un equipo o en toda el aula de informática</h2>
            <p>En ese caso nos aparecerá un aviso desde la propia plataforma. El mensaje es "No se ha podido conectar con el servidor”.
                Debemos solicitar ayuda al responsable del aula de informática y comunicarle que se ha perdido la señal de internet.
                En muchas ocasiones un sencillo reinicio del router hará que se vuelva a tener conectividad. Tras volver a tener conectividad
                le haremos clic al botón "reintentar” en la pantalla de cada alumno.</p>
            <p><a data-rel="back" data-direction="reverse" class="ui-btn ui-shadow ui-corner-all ui-btn-b">volver"</a></p>
        </div>
        <?php include( '../jqm-navmenu.php' ); ?>
        <?php include( '../jqm-footer.php' ); ?>
        <?php include( '../jqm-search.php' ); ?>

    </div>
    
    
    

    <div data-role="page" class="jqm-demos" data-quicklinks="true" id="incidencia3">
        <?php include( '../jqm-pageheader.php' ); ?>

        <div role="main" class="ui-content jqm-content">
            <h2>Un alumno tiene que marcharse sin terminar las pruebas</h2>
            <p>No hay problema. El sistema ha memorizado los datos que ha ido añadiendo el alumno. El siguiente día podrá terminar
            la prueba en el mismo reto donde se quedó.</p>
            <p><a data-rel="back" data-direction="reverse" class="ui-btn ui-shadow ui-corner-all ui-btn-b">volver"</a></p>
        </div>
        <?php include( '../jqm-navmenu.php' ); ?>
        <?php include( '../jqm-footer.php' ); ?>
        <?php include( '../jqm-search.php' ); ?>

    </div>
    
    


    <div data-role="page" class="jqm-demos" data-quicklinks="true" id="incidencia4">
        <?php require_once( '../jqm-pageheader.php' ); ?>

        <div role="main" class="ui-content jqm-content">
            <h2>Un equipo informático deja de funcionar</h2>
            <p>Tampoco hay problema, si queda alguno libre sentamos al alumno en el mismo, nos autenticamos y buscamos su nombre
                en el listado, igual que hemos hecho antes. Si no hubiera ordenadores libres podría realizar la prueba en otro
                momento sin perder los datos que ya haya introducido encada uno de los retos finalizados.</p>
            <p><a data-rel="back" data-direction="reverse" class="ui-btn ui-shadow ui-corner-all ui-btn-b">volver"</a></p>
        </div>
        
        <?php include( '../jqm-navmenu.php' ); ?>
        <?php include( '../jqm-footer.php' ); ?>
        <?php include( '../jqm-search.php' ); ?>

    </div>
    
    

</body>
</html>
