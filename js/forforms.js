function setwatch(n) {
	var form = document.addform;
	var elem = form.watch; // элемент формы с name=watch
	elem.value = n;
}

function select_content(elem){
var keep_data = elem.parentNode.innerHTML;
var end_str = keep_data.indexOf("<a class");
var data_name = keep_data.substring(0,end_str);
	var formdel = document.forms.deleteform;
	formdel.namecontent.value = data_name;
}