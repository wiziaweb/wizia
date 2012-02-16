<!DOCTYPE html>
<html>
<head>
    <title><?=$title;?></title>
    <link rel="stylesheet" href="css/editor.css" type="text/css" />
    <link rel="stylesheet" href="css/stylesheet_red.css" type="text/css" id="stl" />
    <link rel="stylesheet" href="http://jqueryui.com/themes/base/jquery.ui.all.css" type="text/css" />
</head>

<body>
<div id=wrap>
    <div id=main-head>
     WIZIA
    <a href=# class=myButton style="float:right;">Pr&eacute;f&eacute;rences</a>
    <a href=# class="myButton main_button_exit" style="float:right;margin-right:20px;">Quitter</a>
    </div>

    <div style="" id=left_menu>
        <a href=# class="myButton main_button_page">Pages</a>
        <a href=# class="myButton main_button_news">News</a>
        <a href=# class="myButton main_button_mobile">Mobile</a>
        <a href=# class="myButton main_button_mobile">Catalogue</a>
        <a href=# class="myButtonBuy main_button_buy">Commander</a>
    </div>
    <div style="display:hide;" id=sub-left-menu > SUB </div>
    <div id=main-editor>
    <!--Main Editor-->
    </div>
    <div id=footer>
        <div id=jstemplates></div>
    </div>
    </div>
</body>
    <style>
	#sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
	#sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
	#sortable
    </style>
</html>

<!--LIB-->
<script src="lib/jquery-1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
<script src="lib/underscore-1.js"></script>
<script src="lib/backbone.js"></script>
<script src="lib/backbone-localstorage.js"></script>

<!--APP-->
<script src="application/views/editor.js"></script>
<script src="application/template_changer.js"></script>

<!------ JS Templates ----------->
<? include("application/templates/main.php"); ?>