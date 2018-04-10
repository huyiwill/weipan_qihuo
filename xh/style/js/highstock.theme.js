Highcharts.theme = {
	plotOptions: {
	
		candlestick: {
			lineColor: '#227922',
			upLineColor:'#fe3232',
			color: '#fff',
			upColor:'#fe3232'

	/*		lineColor: '#fe3232',
			upLineColor:'#227922',
			upColor:'#fff',
			color:'#fe3232'*/

		},
		area:{
			lineColor:'#45496e',
			color: '#45496e',
			fillColor:'#eee'
		}

	},
	tooltip:{
		borderColor:'#7cb5ec'
	},
	lang: {
		loading: 'Loading...',
		months: ['January', 'February', 'March', 'April', 'May', 'June', 'July',
				'August', 'September', 'October', 'November', 'December'],
		shortMonths: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
		weekdays: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
		decimalPoint: '.',
		numericSymbols: ['k', 'M', 'G', 'T', 'P', 'E'], // SI prefixes used in axis labels
		resetZoom: 'Reset zoom',
		resetZoomTitle: 'Reset zoom level 1:1',
		thousandsSep: ','
	}
	




};

// Apply the theme
var highchartsOptions = Highcharts.setOptions(Highcharts.theme);