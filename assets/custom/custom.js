// JavaScript Document
jQuery(document).ready(function($){
	//Put Your Custom Jquery or Javascript Code Here
	  return $('.skycons-element').each(function() {
            var canvasId, skycons, weatherSetting;
            skycons = new Skycons({
                color: "white"
            });
            canvasId = $(this).attr('id');
            weatherSetting = $(this).data('skycons');
            skycons.add(canvasId, Skycons[weatherSetting]);
            return skycons.play();
        });
});