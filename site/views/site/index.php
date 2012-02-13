<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hello, <?php echo $name; ?></title>
 	<link rel="stylesheet" type="text/css" href="http://wiziaweb.alwaysdata.net/templates/<?=$template;?>/css/layout.css" />
	<style type="text/css">
		* { margin: 0; padding: 0; }
		/*body { background-color: #EEE; font-family: sans-serif; font-size: 16px; line-height: 20px; margin: 40px; }*/
		#wrapper { padding: 30px; background: #fff; color: #333; margin: 0 auto; width: 600px; }
		a { color: #36428D; }
		h1 { color: #000; font-size: 55px; padding: 0 0 25px; line-height: 1em; }
		.intro { font-size: 22px; line-height: 30px; font-family: georgia, serif; color: #555; padding: 29px 0 20px; border-top: 1px solid #CCC; }
		h2 { margin: 50px 0 15px; padding: 0 0 10px; font-size: 18px; border-bottom: 1px dashed #ccc; }
		h2.first { margin: 10px 0 15px; }
		p { margin: 0 0 15px; line-height: 22px;}
		a { color: #666; }
		pre { border-left: 1px solid #ddd; line-height:20px; margin:20px; padding-left:1em; font-size: 16px; }
		pre, code { color:#137F80; font-family: Courier, monospace; }
		ul { margin: 15px 30px; }
		li { line-height: 24px;}
		.footer { color: #777; font-size: 12px; margin: 40px 0 0 0; }
        #top-wrapper{
          background-color: #CC0000;
        }
        #header-wrapper{
          background-color: #CC0000;
          height:100px;
        }
        #header{
            margin-right:auto;
          margin-left:auto;
          width:940px;
          color:white;
        }
        #body-wrapper{
          background-color: #FFFFFF;
        }
        #footer-big-wrapper{
          background-color: #222222;
          min-height:250px;
          height:auto;
        }
        #footer-big{
          margin-right:auto;
          margin-left:auto;
          width:940px;
          color:white;
        }
        #footer-small-wrapper{
          background-color: #888888;
          height:30px;
        }
         #footer-big .features{
          border:0px solid silver;
          padding:10px;
          margin:10px;

          width:200px;
          float:left;
        }

        #footer-small{

          color:yellow;
        }


	</style>
</head>
<body>
    <div id=header-wrapper>
        <div id=header>
             <h1>WIZIA</h1> <h2>Un web diff&eacute;rent</h2>
        </div>
    </div>
    <div id=body-wrapper>
    	<div id=page>


        <?
        echo APPPATH."views/_".Uri::segment(3).".php";
        if(file_exists(APPPATH."views/site/_".Uri::segment(3).".php"))
        {
            @include("_".Uri::segment(3).".php");
        }else{
            include("_hello.php");
        }

        ?>
	    </div>


    </div>
    <div id=footer-big-wrapper>
    	<div id=footer-big>
        <?
            include("_footer.php");
        ?>
	    </div>

    </div>
    <div id=footer-small-wrapper>
      <div id=footer-small>
        WIZIAWEB 2012 www.wiziaweb.fr       XXXXXXXXXXXXXXXXXXXXX   <?
        echo "Segement : ".Uri::segment(3);
        ?>
      </div>
    </div>
</body>
</html>