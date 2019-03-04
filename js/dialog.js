var dialog = document.querySelector('dialog');
    dialogPolyfill.registerDialog(dialog);
	
var show1 = document.querySelector('#show1');
show1.addEventListener('click', function() {
  dialog.showModal();
  console.log('dialog opened');
});

var show0 = document.querySelector('#show0');
show0.addEventListener('click', function() {
  dialog.showModal();
  console.log('dialog opened');
});

dialog.addEventListener('close', function() {
  console.log('dialog closed');
});
dialog.addEventListener('cancel', function() {
  console.log('dialog canceled');
});