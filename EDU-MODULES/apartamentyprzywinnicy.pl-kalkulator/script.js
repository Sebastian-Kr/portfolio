

if (window.width > 568) {
	var xx = 0.07
} else {
	var xx = 0.14
}
new Dragdealer('kalkulator-slider', {
		x: xx,
  animationCallback: function(x, y) {
		var weeks = Math.round((x-1) * 52);
		// var weeks2 = Math.round((x-1) * 52);
		var weeks = Math.abs(weeks);
		// console.log(weeks);
    $('#kalkulator_slider_content').text(weeks);
		$('#kalkulator_score').text(67600 - 1300*weeks+" zł");
  }

});
