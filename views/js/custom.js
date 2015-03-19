// Countries
var country_arr = new Array("Afghanistan", "Albania", "Algeria", "American Samoa", "Angola", "Anguilla", "Antartica");

function populateCountries(countryElementId) {
    // given the id of the <select> tag as function argument, it inserts <option> tags
    var countryElement = document.getElementById(countryElementId);
    countryElement.length = 0;
    countryElement.options[0] = new Option('Select Country', '-1');
    countryElement.selectedIndex = 0;
    for (var i = 0; i < country_arr.length; i++) {
        countryElement.options[countryElement.length] = new Option(country_arr[i], country_arr[i]);
    }
}

var monthtext=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec'];

function populatedropdown(dayfield, monthfield, yearfield) {
    var today=new Date()
    var dayfield=document.getElementById(dayfield)
    var monthfield=document.getElementById(monthfield)
    var yearfield=document.getElementById(yearfield)
    for (var i=0; i<31; i++)
    dayfield.options[i]=new Option(i, i+1)
    dayfield.options[today.getDate()]=new Option(today.getDate(), today.getDate(), true, true) //select today's day
    for (var m=0; m<12; m++)
    monthfield.options[m]=new Option(monthtext[m], monthtext[m])
    monthfield.options[today.getMonth()]=new Option(monthtext[today.getMonth()], monthtext[today.getMonth()], true, true) //select today's month
    var thisyear=today.getFullYear()
    for (var y=0; y<20; y++){
    yearfield.options[y]=new Option(thisyear, thisyear)
    thisyear+=1
    }
    yearfield.options[0]=new Option(today.getFullYear(), today.getFullYear(), true, true) //select today's year
}

var number = new Array('0', '1', '2', '3', '4', '5');

function populatePassengers (personElementId) {
	var person = document.getElementById(personElementId);
	person.length = 0;
    person.selectedIndex = 0;
    for (var i = 0; i < number.length; i++) {
        person.options[person.length] = new Option(number[i], number[i]);
    }
}

function timedMsg() {
    currMsg++;
    document.getElementById('timedMsgDiv').innerHTML = msgArr[currMsg%msgArr.length];
};

function init() {
    currMsg = -1;
    msgArr = Array('This is sentence one', 'This is sentence two', 'This is sentence three', 'This is sentence four');
    timedMsg();
    var t=setInterval("timedMsg()",4000);
};





