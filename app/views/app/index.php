<!DOCTYPE html>
<html>
<head>
    <title><?=$title;?></title>
    <link rel="stylesheet" href="css/editor.css" type="text/css" />
    <link rel="stylesheet" href="css/editor.css" type="text/css" />
    <link rel="stylesheet" href="css/news.css" type="text/css" />

    <link rel="stylesheet" href="css/stylesheet_red.css" type="text/css" id="stl" />
    <link rel="stylesheet" href="lib/jquery-ui/css/smoothness/jquery-ui-1.8.17.custom.css" type="text/css" id="stl" />
    <link rel="stylesheet" href="http://jqueryui.com/themes/base/jquery.ui.all.css" type="text/css" />
</head>
  <style>
  #leftbar .myButton{
    width:100px;

  }
   #leftbar ul{
    margin:0px;
    padding:0px;
  }

  #leftbar li{
    list-style-type: none;
    list-style-position:outside;
    padding:5px;
    margin-left:-40px;
  }


  </style>
      <style>
	#sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
	#sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
	#sortable
    </style>

<body>
<div id=wrap>
    <div id=main-head>
     WIZIA
    <a href=# class=myButton style="float:right;">Pr&eacute;f&eacute;rences</a>
    <a href=# class="myButton main_button_exit" style="float:right;margin-right:20px;">Quitter</a>
    </div>

    <div style="" id=modulebar>
      <ul id=leftbar>
          <li><a href=# class="myButton main_button_page">Pages</a></li>
          <li><a href=# class="myButton main_button_news">News</a></li>
          <li><a href=# class="myButton main_button_mobile">Mobile</a></li>
          <li><a href=# class="myButton main_button_mobile">Catalogue</a></li>
          <br /><br />
          <li> <a href=# class="myButtonBuy main_button_buy">Commander</a>     </li>
      </ul>
    </div>
    <div style="display:hide;" id=panelbar > <a href=# id=backtoschool ><< back</a> </div>
    <div id=main-editor>
    <!--Main Editor-->
    </div>
    <div id=footer>
        <div id=jstemplates></div>
        <div id=news-list>0000</div>
    </div>
    </div>
</body>

</html>

<!--LIB-->
<script src="lib/jquery-1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
<script src="lib/underscore-1.js"></script>
<script src="lib/backbone.js"></script>
<script src="lib/backbone-localstorage.js"></script>

<!--APP-->
<script src="application/models/editormodel.js"></script>

<script src="application/views/modulebar.js"></script>
<script src="application/views/panelbar.js"></script>
<script src="application/views/pages.js"></script>
<script src="application/views/news.js"></script>
<script src="application/views/editor.js"></script>
<script src="application/views/main.js"></script>
<script src="application/template_changer.js"></script>

    <script>
	$(function() {
	 // $("#newsitems" ).dialog();

       // $("#newsitems").disableSelection();
        //alert('');

	});
	</script>

<!------ JS Templates ----------->
<? include("application/templates/main.php"); ?>