// function init() {
// 	try {
// 		var proto="https:" == window.location.protocol?'https:':'http:';
// 		d = document.createElement("script");
// 			d.type = "text/javascript",
// 			d.charset = "utf-8",
// 			d.src =proto+"//plug.xiaoyu.kuaizhe.com/client/js01/seajs/sea.js",
// 			d.async = true,
// 			d.onload = function() {
// 				try{
// 				_gweb2__seajs.config({
// 							  alias: {
// 								'init': 'lib/init.php#'
// 							  },
// 							  map: [
// 								[ /^(.*\/seajs\/lib\/.*\.(?:css|js))(?:.*)$/i, '$1?2015122021' ]
// 							  ]
// 							});
// 				_gweb2__seajs.use('init');
// 				}catch(e){}
// 			};
// 			c = document.body;
// 			c.appendChild(d)
// 	} catch(a) {
// 		console.log(a)
// 	}
// }
// init();