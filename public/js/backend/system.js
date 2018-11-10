// Date picker
$(function () {
    $('.datepicker').datepicker({
        todayHighlight: true,
        autoclose: true,
        format: 'dd/mm/yyyy',
        //language: 'en'
    });
});

function showInshowInfoEmployeeInAdmin() {
	$employeeId = $(this).val();
	alert($employeeId);
}