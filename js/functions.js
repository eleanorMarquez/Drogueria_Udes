function addProduct(code){
	alertify.set('notifier','position', 'top-right');
  alertify.notify('Añadiendo al Carrito...');
	setTimeout(function(){
		var amount = document.getElementById(code).value;
		window.location.href = 'comprar.php?action=add&code='+code+'&amount='+amount;
	},2000);

}
function deleteProduct(code){
	alertify.set('notifier','position', 'top-right');
  alertify.error('Eliminando del Carrito...');
	setTimeout(function(){
		window.location.href = 'comprar.php?action=remove&code='+code;
	},2000);

}
function añadido() {
  alertify.set('notifier','position', 'top-right');
  alertify.success('Añadido al Carrito');
}
function eliminado() {
  alertify.set('notifier','position', 'top-right');
  alertify.success('Eliminado al Carrito');
}
