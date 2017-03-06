import React from 'react';
import ReactDOM from 'react-dom';



var config = {
	weeks: 6, //visible weeks
	month: [
		31, //January
		28, //February
		31,	//Marth
		30,	//April
		31,	//May
		30, //June
		31, //July
		31, //August
		30, //September
		31, //October
		30, //November
		31  //December
	],
	monthNames: [
		'January',
		'February',
		'Marth',
		'April',
		'May',
		'June',
		'July',
		'August',
		'September',
		'October',
		'November',
		'December'
	]
};

var current =  new Date();

var datepicker = {
	visible: true,
	current: {
		day: current.getDate(),
		month: current.getMonth(),
		year: current.getFullYear()
	},
	date: {
		day: current.getDate(),
		month: current.getMonth(),
		year: current.getFullYear()
	},
	page: []
};

function daysInMonth(year, month){
	if(month < 0) month = 11;
	if(month > 11) month = 0;
	if(year%4 == 0 && month == 1){
		return 29;
	}else{
		return config.month[month];
	}
}


ReactDOM.render(
<div className="im-datepicker visible">
	<div className="im-datepicker-controls">
		<div className="control-month">
			<div className="month">Marth <span className="year" ng-click="toggleYears()">2017</span></div>
			<div className="prev" ng-click="prevMonth()"><span><i className="fa fa-angle-left"></i></span></div>
			<div className="next" ng-click="nextMonth()"><span><i className="fa fa-angle-right"></i></span></div>
		</div>
	</div>
	<table className="im-datepicker-years" ng-show="yearSelection">
		<tbody>
			<tr>
				<td ng-repeat="year in years_line1" ng-click="pickYear(year)"><span>2017</span></td>
			</tr>
			<tr>
				<td ng-repeat="year in years_line2" ng-click="pickYear(year)"><span>2017</span></td>
			</tr>
		</tbody>
	</table>
	<div className="im-datepicker-controls" ng-show="yearSelection">
		<div className="control-years">
			<div className="prev" ng-click="prevYears()"><span><i className="fa fa-angle-left"></i></span></div>
			<div className="next" ng-click="nextYears()"><span><i className="fa fa-angle-right"></i></span></div>
		</div>
	</div>
	<table className="im-datepicker-table">
		<thead>
			<tr>
				<th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th><th>Sun</th>
			</tr>
		</thead>
		{datepicker.page.map(function (week, i) {
			return <tr>
				{week.map(function (day, i) {
					return <td className="day" ng-click="pickDate(day)" ng-className="{\current\: day.current, \selected\: day.selected, \not-current\: !day.visible}">{day}</td>
				})}
			</tr>;
		})}
	</table>
</div>
,document.getElementById('datepicker')
);