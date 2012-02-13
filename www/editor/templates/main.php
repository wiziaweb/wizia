<!--  Template search widget -->
<script type="text/template" id="search_template">
    <div class="widget_audio" id="widget_<%= widgetid %>">
        <label>Search</label>
    	<input type="text" id="search_input" />
    	<input type="button" id="search_button" value="Search" />
    </div>
</script>

<!--  Template gallery widget -->
<script type="text/template" id="gallery_widget">
    <div class="widget_gallery widget" id=widget_<%= widgetid %>>

    <div id="tabs">
	<ul>
	    <li><a href="#tabs-1">Nunc tincidunt</a></li>
	    <li><a href="#tabs-2">Proin dolor</a></li>
	    <li><a href="#tabs-3">Aenean lacinia</a></li>
	</ul>
	<div id="tabs-1">
		<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
	</div>
	<div id="tabs-2">
		<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
	</div>
	<div id="tabs-3">
		<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
		<p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
	</div>
    </div>

    </div><!-- End demo -->
    </div>
</script>

<!--  Template video widget -->
<script type="text/template" id="video_widget">
    <div class="widget_video widget" id=widget_<%= widgetid %>>
      <video id="demo-video" poster="snapshot.jpg" controls>
        <source src="http://henriksjokvist.net/examples/html5-video/" type="video/mp4" /> <!-- MPEG4 for Safari -->
        <source src="video.ogg" type="video/ogg" /> <!-- Ogg Theora for Firefox 3.1b2 -->
      </video>
    </div>
  </script>

<!--  Template code widget -->
<script type="text/template" id="code_widget">
 <div class="widget" id=widget_<%= widgetid %> style="border:4px solid red;"><a href=# class=del_code_widget id=<%= widgetid %>>Del</a>
  <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="640" height="385" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0"><param name="allowFullScreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="src" value="http://www.youtube.com/v/6_I70KACh4o&amp;hl=fr_FR&amp;fs=1" /><param name="allowfullscreen" value="true" /><embed type="application/x-shockwave-flash" width="640" height="385" src="http://www.youtube.com/v/6_I70KACh4o&amp;hl=fr_FR&amp;fs=1" allowscriptaccess="always" allowfullscreen="true"></embed></object></div>
</script>

<!--  Template splitter widget -->
<script type="text/template" id="columns_widget">

    <div class="widget_splitter widget" id=widget_<%= widgetid %>>
        <div style="display: none;" class="editBlock"><span class="handleBlock">D&eacute;placer</span><span class="deleteBlock">Supprimer</span></div></div>
        <div class="splitter_hand" id="<%= widgetid %>"></div>
        <div class=widget_splitter_left  id="<%= widgetid %>" >PANEL1</div>
        <div class=widget_splitter_right  id="<%= widgetid %>">PANEL2</div>
    </div>
    <div id=axis_control style="clear:both;"></div>
</script>


<!------ JS Templates - Page Section ----------->
<!--------------------------------------------->
<? include("page.html"); ?>    

<!------ JS Templates - News Section ----------->
<!--------------------------------------------->
<? include("news.html"); ?>

<!------ JS Templates - Mobile Section ----------->
<!--------------------------------------------->
<? include("mobile.html"); ?>

<!------ JS Templates - Buy Section ----------->
<!--------------------------------------------->
<? include("buy.html"); ?>