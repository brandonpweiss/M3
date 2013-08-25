function scrollToAnchor(aid){
    var aTag = $("a[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}
$("#about").click(function() {
   scrollToAnchor('about');
});
$("#booking").click(function() {
   scrollToAnchor('booking');
});
$("#photos").click(function() {
   scrollToAnchor('photos');
});
$("#events").click(function() {
   scrollToAnchor('events');
});
$("#top").click(function() {
   scrollToAnchor('top');
});
$("#hamburgerNavAbout").click(function() {
   scrollToAnchor('about');
});
$("#hamburgerNavPhotos").click(function() {
   scrollToAnchor('photos');
});
$("#hamburgerNavEvents").click(function() {
   scrollToAnchor('events');
});
$("#hamburgerNavBooking").click(function() {
   scrollToAnchor('booking');
});
$("#moreabout").click(function() {
   scrollToAnchor('about');
});






