function openNav() {
	document.getElementById("mySidenav").style.width = "250px";
	document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}
function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	document.body.style.backgroundColor = "white";
}
$(document).ready(function() {
    $("#arrow").click(function(){
        $("#RP1").addClass("hidden");    
        $("#content").removeClass("hidden");  
    });
})
$(document).ready(function() {
    $("#PA1").click(function(){
        $("#RP1").removeClass("hidden");
        $("#content").addClass("hidden");    
    });
})
$(document).ready(function() {
    $("#arrow2").click(function(){
        $("#RP2").addClass("hidden");    
        $("#content").removeClass("hidden");  
    });
})
$(document).ready(function() {
    $("#PA2").click(function(){
        $("#RP2").removeClass("hidden");
        $("#content").addClass("hidden");    
    });
})
$(document).ready(function() {
    $("#arrow3").click(function(){
        $("#RP3").addClass("hidden");    
        $("#content").removeClass("hidden");  
    });
})
$(document).ready(function() {
    $("#PA3").click(function(){
        $("#RP3").removeClass("hidden");
        $("#content").addClass("hidden");    
    });
})
$(document).ready(function() {
    $("#arrow4").click(function(){
        $("#RP4").addClass("hidden");    
        $("#content").removeClass("hidden");  
    });
})
$(document).ready(function() {
    $("#PA4").click(function(){
        $("#RP4").removeClass("hidden");
        $("#content").addClass("hidden");    
    });
})