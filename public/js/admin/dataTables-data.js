/*DataTable Init*/

"use strict"; 

$(document).ready(function() {
	"use strict";
	
    $('#datable_product').DataTable({ "lengthChange": false});
    $('#datable_user').DataTable({ "lengthChange": false});
    $('#datable_invoice').DataTable();
	$('#datable_banner').DataTable();
	$('#datable_order_history').DataTable();
} );