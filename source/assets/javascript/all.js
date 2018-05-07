var Project = {};

Project.init = function(){
  
};

// Detect JS support
document.body.className = document.body.className + " js_enabled";

$(document).on("ready", function(){
  Project.init();
});

$(window).on("load", function(){
  $('.close-cookies').on('click', function(ev) {
    $('#cookie-message').hide();
  });
});

$(window).on("resize", function(){
 
});

$(window).on("scroll", function(){

});
