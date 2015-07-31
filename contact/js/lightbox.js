//problem user when clicking on image goes to a dead end

var $overlay = $('<div id="overlay"></div>');
var $image = $("<img>");
var $caption = $("<p></p>");

$overlay.append($image);

$overlay.append($caption);

$("body").append($overlay);

$("#imageGallery a").click(function(event){
  event.preventDefault();
  var imageLocation = $(this).attr("href");
  $image.attr("src", imageLocation);
  $overlay.show();
  
var captionText = $(this).children("img").attr("alt");
  $caption.text(captionText);
  
  });

$overlay.click(function(){


$overlay.hide();
});
//solution create an overlay with the large image - lightbox