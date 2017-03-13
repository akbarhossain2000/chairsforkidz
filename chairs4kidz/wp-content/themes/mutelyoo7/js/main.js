jQuery(document).ready(function(){
	
jQuery("#owl-example").owlCarousel({
     
	// Most important owl features
	items : 1
 
});

lightbox.option({
  'resizeDuration': 200,
  'wrapAround': true
});

var ul = document.getElementById("menu-mian_menu");
var liNodes = [];
var j = 1;
for (var i = 0; i < ul.childNodes.length; i++) {
	if (ul.childNodes[i].nodeName == "LI") {
		ul.childNodes[i].id = "add-icon_"+j;
		j++;
	}
}

jQuery("#add-icon_1 a span i").addClass("fa fa-home");
jQuery("#add-icon_2 a span i").addClass("fa fa-info-circle");
jQuery("#add-icon_3 a span i").addClass("fa fa-lightbulb-o");
jQuery("#add-icon_4 a span i").addClass("fa fa-newspaper-o");
jQuery("#add-icon_5 a span i").addClass("fa fa-home");

});






