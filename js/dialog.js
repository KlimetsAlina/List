if(document.querySelector('#show1')){
	var show1 = document.querySelector('#show1');
	show1.addEventListener('click', function() {
		dialogAdd.showModal();
		console.log('dialogAdd opened');
		});
}

if(document.querySelector('#show0')){
	var show0 = document.querySelector('#show0');
	show0.addEventListener('click', function() {
	dialogAdd.showModal();
	console.log('dialogAdd opened');
	});
}

var dialogAdd = document.querySelector('#add');
    dialogPolyfill.registerDialog(dialogAdd);
	
	dialogAdd.addEventListener('close', function() {
		console.log('dialogAdd closed');
		});
	dialogAdd.addEventListener('cancel', function() {
		console.log('dialogAdd canceled');
		});

var dialogDelete = document.querySelector('#delete');
    dialogPolyfill.registerDialog(dialogDelete);
	
var elementList = document.querySelectorAll('.del_a');
elementList.forEach((element) => {
  element.addEventListener('click', function() {
  dialogDelete.showModal();
  console.log('dialogDelete opened');
  });
});

dialogDelete.addEventListener('close', function() {
  console.log('dialogDelete closed');
});
dialogDelete.addEventListener('cancel', function() {
  console.log('dialogDelete canceled');
});
	



