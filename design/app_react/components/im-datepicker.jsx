import React from 'react';

class ImDatepicker extends React.Component {

	constructor(props) {
		super(props);

		this.state = {
			visible: true,
			daySelected: this.dayNow(),
			page: [],
			yearSelection: false,
			years_line1: [],
			years_line2: []
		};

		this.config = {
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

		//this.watchValue(this.state.selectedDate);

	}


	

	dayNow(){
		let currentDate = new Date();
		return {
			day: currentDate.getDate(),
			month: currentDate.getMonth(),
			year: currentDate.getFullYear()
		}
	}

	dateNow(){
		return new Date();
	}

	dateSelected(){
		return new Date(this.state.daySelected.year, this.state.daySelected.month, this.state.daySelected.day);
	}


	daysInMonth(year, month){
		if(month < 0) month = 11;
		if(month > 11) month = 0;
		if(year%4 == 0 && month == 1){
			return 29;
		}else{
			return this.config.month[month];
		}
	}


	_toggleYears(){
		this.setState({
			yearSelection: !this.state.yearSelection
		});
	}

	_prevMonth(){
		var date = this.state.daySelected;
		date.month -= 1;

		if(date.month < 0){
			date.year--;
			date.month = 11;
		}

		this.setState({
			daySelected: date
		});
		this.watchValue();
	}

	_nextMonth(){
		var date = this.state.daySelected;
		date.month += 1;

		if(date.month > 11){
			date.year++;
			date.month = 0;
		}

		this.setState({
			daySelected: date
		});
		this.watchValue();
	}

	_prevYears(){
		var date = this.state.daySelected;
		date.year -= 10;
		this.setState({
			daySelected: date
		});
		this.watchValue();
	}

	_nextYears(){
		var date = this.state.daySelected;
		date.year += 10;
		this.setState({
			daySelected: date
		});
		this.watchValue();
	}

	_pickYear(year){
		var date = this.state.daySelected;
		date.year = year;
		this.setState({
			daySelected: date
		});
		this.watchValue();
	}

	_pickDay(day){
		var date = this.state.daySelected;
		date.year = day.year;
		date.month = day.month;
		date.day = day.day;
		this.setState({
			daySelected: date
		});
		this.watchValue();
	}


	cellClass(data, className){
		if(data.selected){
			return className+' selected';
		}else if(data.current){
			return className+' current';
		}else if(!data.visible){
			return className+' not-current';
		}else{
			return className;
		}
	}


	watchValue(){

		let d = this.dateSelected();
		let daySelected = this.state.daySelected;
		//years selection
		var startYear = daySelected.year - daySelected.year%10;
		var years_line1 = [];
		var years_line2 = [];

		for (var i = startYear; i <= startYear+4; i++) {
			years_line1.push({
				year: i,
				current: this.dayNow().year == i,
				selected: daySelected.year == i
			});
		}
		for (var i = startYear+5; i <= startYear+9; i++) {
			years_line2.push({
				year: i,
				current: this.dayNow().year == i,
				selected: daySelected.year == i
			});
		}


		if(daySelected.day < 1){
			var days = this.daysInMonth(daySelected.year, daySelected.month);
			this.setState({
				daySelected: {
					year: daySelected.year,
					month: daySelected.month--,
					day: days
				}
			});
		}

		if(daySelected.day > this.daysInMonth(daySelected.year, daySelected.month)){
			this.setState({
				daySelected: {
					year: daySelected.year,
					month: daySelected.month++,
					day: 1
				}
			});
		}


	
		//calc offset
		var dayIndexOfWeek = d.getDay() == 0 ? 6 : d.getDay() - 1;
		var offset = dayIndexOfWeek + 1 - d.getDate()%7;
		if(offset < 0) offset = 7 + offset;
		if(offset >= 7) offset = 7 - offset;


		var page = [];
		var week = [];
		var daysInCurrent = this.daysInMonth(d.getFullYear(), d.getMonth());
		var daysInPrev = this.daysInMonth(d.getFullYear(), d.getMonth() - 1);

		for(var i = 1; i <= this.config.weeks*7; i++){
			var day = {
				day: i - offset,
				month: d.getMonth(),
				year: d.getFullYear(),
				visible: true,
				current: false
			};

		
			if(day.day > daysInCurrent){
				//fill next month week
				day.visible = false;
				day.day = day.day - daysInCurrent;
				if(day.month == 11){
					day.month = 0;
					day.year++;
				}else{
					day.month++;
				}
			}else if(day.day < 1){
				//fill prev month week
				day.visible = false;
				day.day = daysInPrev + day.day;
				if(day.month == 0){
					day.month = 11;
					day.year--;
				}else{
					day.month--;
				}
			}

			//set selected label
			if(day.day == d.getDate() && day.month == d.getMonth()){
				day.selected = true;
			}

			//set current label
			if(
				day.day == this.dayNow().day && 
				day.month == this.dayNow().month &&
				day.year == this.dayNow().year
			){
				day.current = true;
			}

			week.push(day);
			if(i%7 == 0){
				page.push(week);
				week = [];
			}

		}


		//update state
		this.setState({
			page: page,
			years_line1: years_line1,
			years_line2: years_line2
		});

		

		//output
		/*var outputValues = {
			day: (val.day < 10) ? ('0' + val.day) : val.day,
			month: (val.month+1) < 10 ? '0' + (val.month+1) : (val.month+1),
			year: val.year
		};*/

		//var viewValue = viewFormat.replace('dd',outputValues.day).replace('mm',outputValues.month).replace('yyyy',outputValues.year);
		//var modelValue = modelFormat.replace('dd',outputValues.day).replace('mm',outputValues.month).replace('yyyy',outputValues.year);


		/*if(initial){
			initial = false;
			return false;
		}*/

		//input.value = viewValue;
		//input.dispatchEvent(new Event('change'));
	}

	componentDidMount() {
		this.watchValue();
		//console.log(this.state);
	}


	render() {
		return	(<div className="im-datepicker visible">
			<div className="im-datepicker-controls">
				<div className="control-month">
					<div className="month">{this.config.monthNames[this.state.daySelected.month]}<span className="year" onClick={this._toggleYears.bind(this)}>{this.state.daySelected.year}</span></div>
					<div className="prev" onClick={this._prevMonth.bind(this)}><span><i className="fa fa-angle-left"></i></span></div>
					<div className="next" onClick={this._nextMonth.bind(this)}><span><i className="fa fa-angle-right"></i></span></div>
				</div>
			</div>
			<div className={this.state.yearSelection ? 'visible' : 'hidden'}>
				<table className="im-datepicker-years">
					<tbody>
						<tr>
							{this.state.years_line1.map(function(year, i) {
								return (
									<td key={i} onClick={this._pickYear.bind(this, year.year)} className={this.cellClass(year, '')}><span>{year.year}</span></td>
								)
							}, this)}
						</tr>
						<tr>
							{this.state.years_line2.map(function(year, i) {
								return (
									<td key={i} onClick={this._pickYear.bind(this, year.year)} className={this.cellClass(year, '')}><span>{year.year}</span></td>
								)
							}, this)}
						</tr>
					</tbody>
				</table>
				<div className="im-datepicker-controls">
					<div className="control-years">
						<div className="prev" onClick={this._prevYears.bind(this)}><span><i className="fa fa-angle-left"></i></span></div>
						<div className="next" onClick={this._nextYears.bind(this)}><span><i className="fa fa-angle-right"></i></span></div>
					</div>
				</div>
			</div>
			<table className="im-datepicker-table">
				<thead>
					<tr>
						<th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th><th>Sun</th>
					</tr>
				</thead>
				<tbody>
				{this.state.page.map(function (week, i) {
					return <tr key={i}>
						{week.map(function (day, i) {
							return <td key={i} className={this.cellClass(day, 'day')} onClick={this._pickDay.bind(this, day)}>{day.day}</td>
						}, this)}
					</tr>;
				}, this)}
				</tbody>
			</table>
		</div>);
	}




}

export default ImDatepicker;