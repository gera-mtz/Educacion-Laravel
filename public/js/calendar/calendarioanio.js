window.addEvent('load', function() {
	new DatePicker('.demo_noyear', { pickerClass: 'datepicker_vista', yearPicker: false });
	new DatePicker('.demo_time', { pickerClass: 'datepicker_vista', timePicker: true, format: 'd-m-Y @ H:i' });
});