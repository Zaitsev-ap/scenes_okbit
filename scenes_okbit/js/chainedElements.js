var ajax = new Array();

function getElementes(sel)
{
	var templates =  document.getElementById('template').value;
	
	var position = sel.options[sel.selectedIndex].value;
	document.getElementById('type').options.length = 0;	// Empty city select box
	
	if(position.length>0){
		var index = ajax.length;
		ajax[index] = new sack();
		
		ajax[index].requestFile = '/modules/scenes_okbit/getElements.php?position='+position+'&template='+templates;	// Specifying which file to get
		ajax[index].onCompletion = function(){ createElements(index) };	// Specify function that will be executed after file has been found
		ajax[index].runAJAX();		// Execute AJAX function
	}
}

function createElements(index)
{
	var obj = document.getElementById('type');
	eval(ajax[index].response);	// Executing the response from Ajax as Javascript code	
}

