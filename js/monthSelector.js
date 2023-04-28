var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
var monthSelectorForm = document.getElementById("month-selector-form");

function haltSubmit() {
    event.preventDefault();
}

function nextMonth() {
    let monthValueElement = document.getElementById("currentMonth");

    console.log(monthValueElement.value);
    monthValueElement.value = (parseInt(monthValueElement.value) >= 12) ? 1 : parseInt(monthValueElement.value)+1;
    console.log(monthValueElement.value);
    monthSelectorForm.submit();

}

function prevMonth() {
    monthValueElement = document.getElementById("currentMonth");

    console.log(monthValueElement.value);
    monthValueElement.value = (parseInt(monthValueElement.value) <= 1) ? 12 : parseInt(monthValueElement.value)-1;
    console.log(monthValueElement.value);
    monthSelectorForm.submit();
}