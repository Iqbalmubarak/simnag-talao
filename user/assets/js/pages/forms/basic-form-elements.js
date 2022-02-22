$(function () {
    //Datetimepicker plugin
    $('.datetimepicker').bootstrapMaterialDatePicker({
        format: ' DD MMMM YYYY - HH:mm',
        clearButton: true,
        weekStart: 1
    });

    $('.datepicker').bootstrapMaterialDatePicker({
        format: ' DD MMMM YYYY',
        clearButton: true,
        weekStart: 1,
        time: false
    });

    $('.timepicker').bootstrapMaterialDatePicker({
        format: 'HH:mm',
        clearButton: true,
        date: false
    });
});