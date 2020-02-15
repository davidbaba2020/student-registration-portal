jquery(document).ready(function(){	
var LevelOptions;
	$.getJSON('levelClass.json', function(result){
		$.each(result, function(i, level) {
			//<option value='Level'>Levelname</option>
			LevelOptions+="<option value='"+Level.code+"'>"+Level.name+"</option>";
			 });
			 $('#level').html (LevelOptions);
	});
});
