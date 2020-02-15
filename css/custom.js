jQuery(document).ready(function(){	
var LevelOptions;
	$.getJSON('levelClass.json', function(result){
		$.each(result, function(i, level) {
			//<option value='Level'>Levelname</option>
			LevelOptions+="<option value='"+levelClass.code+"'>"+levelClass.name+"</option>";
			 });
			 $('#level').html (LevelOptions);
	});
});
