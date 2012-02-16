// the CSS file is chosen  according to the positive or negative value of this variable
var plusmin = 1;

$(document).ready(function() {
  // when click on the element with id="idd"
  $('#idd').click(function(){
    plusmin *= -1;        // change the polarity of "plusmin" var
    var stl = plusmin>0 ? 'themes/stylesheet_red.css' : 'themes/stylesheet_yellow.css';     // sets the css file, according to plusmin
    // change the css file of the tag with id="stl" and rel="stylesheet"
    $('#stl[rel=stylesheet]').attr('href', stl);
  });
});