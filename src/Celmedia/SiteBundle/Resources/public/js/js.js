

function getNext(o){
	var next = o.next();
	if (!next.length) {
		next = o.siblings(':first');
	}
	return next;
}


jQuery(document).ready(function(){
	jQuery(".slide-content").lionbars();
});