function setwatch(n) {
	var form = document.forms[0];
	var elem = form.watch; // элемент формы с name=watch
	elem.value = n;
}