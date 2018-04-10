var  timeRange={};

var code_time = { 
    "ag1gxh" : "06:00-06:00",    
    "ag5kgxh" : "06:00-06:00",    
    "ag15kgxh" : "06:00-06:00",    
    "ag50kgxh" : "06:00-06:00",    
    "cuxh" : "06:00-06:00",    
    "cu1txh" : "06:00-06:00",    
    "cl100xh" : "06:00-06:00",    
    "cl500xh" : "06:00-06:00",    
    "xau" : "06:00-06:00",    
    "xag" : "06:00-06:00",    
    "xpt" : "06:00-06:00",    
    "xpd" : "06:00-06:00",    
    "auhk" : "06:00-06:00",    
    "autw" : "06:00-06:00",    
    "autd" : "20:00-15:30",    
    "agtd" : "20:00-15:30",    
    "au100g" : "20:00-15:30",    
    "au9999" : "20:00-15:30",    
    "au9995" : "20:00-15:30",    
    "ag9999" : "20:00-15:30",    
    "pt9995" : "20:00-15:30",    
    "mautd" : "20:00-15:30",    
    "iau9999" : "20:00-15:30",    
    "aut_n1" : "20:00-15:30",    
    "aut_n2" : "20:00-15:30",    
    "aucny" : "00:00-00:00",    
    "agcny" : "00:00-00:00",    
    "ptcny" : "00:00-00:00",    
    "pdcny" : "00:00-00:00",    
    "auusd" : "00:00-00:00",    
    "agusd" : "00:00-00:00",    
    "ptusd" : "00:00-00:00",    
    "pdusd" : "00:00-00:00",    
    "diniw" : "06:00-06:00",    
    "audusd" : "06:00-06:00",    
    "eurusd" : "06:00-06:00",    
    "gbpusd" : "06:00-06:00",    
    "usdcny" : "06:00-06:00",    
    "usdcad" : "06:00-06:00",    
    "usdchf" : "06:00-06:00",    
    "usdhkd" : "06:00-06:00",    
    "usdjpy" : "06:00-06:00",    
    "usdmyr" : "06:00-06:00",    
    "usdtwd" : "06:00-06:00",    
    "usdsgd" : "06:00-06:00",    
    "eurchf" : "06:00-06:00",    
    "cadjpy" : "06:00-06:00",    
    "gbpjpy" : "06:00-06:00",    
    "eurcad" : "06:00-06:00",    
    "chfeur" : "06:00-06:00",    
    "audnzd" : "06:00-06:00",    
    "audjpy" : "06:00-06:00",    
    "eurjpy" : "06:00-06:00",    
    "eurhkd" : "06:00-06:00",    
    "gbpchf" : "06:00-06:00",    
    "chfhkd" : "06:00-06:00",    
    "chfjpy" : "06:00-06:00",    
    "gbpaud" : "06:00-06:00",    
    "gbpeur" : "06:00-06:00",    
    "audchf" : "06:00-06:00",    
    "eurnzd" : "06:00-06:00",    
    "chfaud" : "06:00-06:00",    
    "cadchf" : "06:00-06:00",    
    "chfgbp" : "06:00-06:00",    
    "audhkd" : "06:00-06:00",    
    "cadaud" : "06:00-06:00",    
    "gbpnzd" : "06:00-06:00",    
    "gbpcad" : "06:00-06:00",    
    "audcad" : "06:00-06:00",    
    "audeur" : "06:00-06:00",    
    "audgbp" : "06:00-06:00",    
    "euraud" : "06:00-06:00",    
    "s" : "06:00-06:00",    
    "sm" : "06:00-06:00",    
    "c" : "06:00-06:00",    
    "w" : "06:00-06:00",    
    "bo" : "06:00-06:00",    
    "oil" : "06:00-06:00",    
    "ng" : "06:00-06:00",    
    "hg" : "06:00-06:00",    
    "si" : "06:00-06:00",    
    "gc" : "06:00-06:00",    
    "nid" : "06:00-06:00",    
    "cad" : "06:00-06:00",    
    "pbd" : "06:00-06:00",    
    "ahd" : "06:00-06:00",    
    "zsd" : "06:00-06:00",    
    "ag10kgdy" : "06:00-06:00",    
    "ag50kgdy" : "06:00-06:00",    
    "ag100kgdy" : "06:00-06:00",    
    "dsl0s" : "06:00-06:00",    
    "gsl93s" : "06:00-06:00",    
    "jgtzj" : "06:00-06:00",    
    "qho10s" : "06:00-06:00",    
    "qho20s" : "06:00-06:00",    
    "qho50s" : "06:00-06:00",    
    "tbsc" : "06:00-06:00",    
    "tsc" : "06:00-06:00",    
    "tcu" : "06:00-06:00",    
    "tco" : "06:00-06:00",    
    "tpt" : "06:00-06:00",    
    "ag1" : "06:00-06:00",    
    "ag15" : "06:00-06:00",    
    "ag100" : "06:00-06:00",    
    "pdxa" : "06:00-06:00",    
    "ptxa" : "06:00-06:00",    
    "bzcu01" : "06:00-06:00",    
    "bag01" : "06:00-06:00",    
    "bag15" : "06:00-06:00",    
    "bag50" : "06:00-06:00",    
    "hxpt" : "06:00-06:00",    
    "hxsia" : "06:00-06:00",    
    "hxsib" : "06:00-06:00",    
    "hxsic" : "06:00-06:00",    
    "us1month" : "06:00-06:00",    
    "us3month" : "06:00-06:00",    
    "us6month" : "06:00-06:00",    
    "us1year" : "06:00-06:00",    
    "us2year" : "06:00-06:00",    
    "us3year" : "06:00-06:00",    
    "us5year" : "06:00-06:00",    
    "us6year" : "06:00-06:00",    
    "us7year" : "06:00-06:00",    
    "us10year" : "06:00-06:00",    
    "us30year" : "06:00-06:00",    
    "bpulp1" : "06:00-06:00",    
    "bpulp2" : "06:00-06:00",    
    "bpulp3" : "06:00-06:00",    
    "bpulp4" : "06:00-06:00",    
    "tjxag" : "06:00-06:00",    
    "tjxag1000" : "06:00-06:00",    
    "tjxpt100" : "06:00-06:00",    
    "tjxpt" : "06:00-06:00",    
    "tjcu" : "06:00-06:00",    
    "tjcu1t" : "06:00-06:00",    
    "tjni" : "06:00-06:00",    
    "tjni100" : "06:00-06:00",    
    "tjxpd" : "06:00-06:00",    
    "tjxpd100" : "06:00-06:00",    
    "conc" : "06:00-06:00",    
    "conk" : "06:00-06:00",    
    "conm" : "06:00-06:00",    
    "conn" : "06:00-06:00",    
    "conq" : "06:00-06:00",    
    "conu" : "06:00-06:00",    
    "conz" : "06:00-06:00",    
    "hong" : "06:00-06:00",    
    "honh" : "06:00-06:00",    
    "honj" : "06:00-06:00",    
    "honk" : "06:00-06:00",    
    "honm" : "06:00-06:00",    
    "honn" : "06:00-06:00",    
    "honu" : "06:00-06:00",    
    "honv" : "06:00-06:00",    
    "honx" : "06:00-06:00",    
    "honz" : "06:00-06:00",    
    "galf" : "06:00-06:00",    
    "galg" : "06:00-06:00",    
    "galj" : "06:00-06:00",    
    "galk" : "06:00-06:00",    
    "galm" : "06:00-06:00",    
    "galn" : "06:00-06:00",    
    "galq" : "06:00-06:00",    
    "galu" : "06:00-06:00",    
    "galv" : "06:00-06:00",    
    "galx" : "06:00-06:00",    
    "galz" : "06:00-06:00",    
    "oilf" : "06:00-06:00",    
    "oilg" : "06:00-06:00",    
    "oilh" : "06:00-06:00",    
    "oilk" : "06:00-06:00",    
    "oilm" : "06:00-06:00",    
    "oiln" : "06:00-06:00",    
    "oilq" : "06:00-06:00",    
    "oilu" : "06:00-06:00",    
    "oilv" : "06:00-06:00",    
    "oilx" : "06:00-06:00",    
    "oilz" : "06:00-06:00",    
    "szicom" : "06:00-06:00",    
    "shicom" : "06:00-06:00",    
    "hsi" : "06:00-06:00",    
    "sni" : "06:00-06:00",    
    "ftse" : "06:00-06:00",    
    "cac" : "06:00-06:00",    
    "dax" : "06:00-06:00",    
    "aaoi" : "06:00-06:00",    
    "ksci" : "06:00-06:00",    
    "tsei" : "06:00-06:00"
    };

/*
var code_time ={

    "cl100xh":         "06:00-06:00",
    "cl500xh":         "06:00-06:00",
    "ag1gxh":         "06:00-06:00",
    "ag5kgxh":         "06:00-06:00",
    "ag15kgxh":         "06:00-06:00",
    "ag50kgxh":         "06:00-06:00",
    "cuxh":         "06:00-06:00",
    "cu1txh":         "06:00-06:00",
    "xau":         "06:00-06:00",
    "xag":         "06:00-06:00",
    "xpt":         "06:00-06:00",
    "xpd":         "06:00-06:00",
    "auhk":         "06:00-06:00",
    "autw":         "06:00-06:00",
    "autd":         "20:00-15:30",
    "agtd":         "20:00-15:30",
    "au100g":         "20:00-15:30",
    "au9999":         "20:00-15:30",
    "au9995":         "20:00-15:30",
    "ag9999":         "20:00-15:30",
    "pt9995":         "20:00-15:30",
    "mautd":         "20:00-15:30",
    "aucny":         "00:00-00:00",
    "agcny":         "00:00-00:00",
    "ptcny":         "00:00-00:00",
    "pdcny":         "00:00-00:00",
    "auusd":         "00:00-00:00",
    "agusd":         "00:00-00:00",
    "ptusd":         "00:00-00:00",
    "pdusd":         "00:00-00:00",
    "diniw":         "06:00-06:00",
    "audusd":         "06:00-06:00",
    "eurusd":         "06:00-06:00",
    "gbpusd":         "06:00-06:00",
    "usdcny":         "06:00-06:00",
    "usdcad":         "06:00-06:00",
    "usdchf":         "06:00-06:00",
    "usdhkd":         "06:00-06:00",
    "usdjpy":         "06:00-06:00",
    "usdmyr":         "06:00-06:00",
    "usdtwd":         "06:00-06:00",
    "usdsgd":         "06:00-06:00",
    "eurchf":         "06:00-06:00",
    "cadjpy":         "06:00-06:00",
    "gbpjpy":         "06:00-06:00",
    "eurcad":         "06:00-06:00",
    "chfeur":         "06:00-06:00",
    "audnzd":         "06:00-06:00",
    "audjpy":         "06:00-06:00",
    "eurjpy":         "06:00-06:00",
    "eurhkd":         "06:00-06:00",
    "gbpchf":         "06:00-06:00",
    "chfhkd":         "06:00-06:00",
    "chfjpy":         "06:00-06:00",
    "gbpaud":         "06:00-06:00",
    "gbpeur":         "06:00-06:00",
    "audchf":         "06:00-06:00",
    "eurnzd":         "06:00-06:00",
    "chfaud":         "06:00-06:00",
    "cadchf":         "06:00-06:00",
    "chfgbp":         "06:00-06:00",
    "audhkd":         "06:00-06:00",
    "cadaud":         "06:00-06:00",
    "gbpnzd":         "06:00-06:00",
    "gbpcad":         "06:00-06:00",
    "audcad":         "06:00-06:00",
    "audeur":         "06:00-06:00",
    "audgbp":         "06:00-06:00",
    "euraud":         "06:00-06:00",
    "s":         "06:00-06:00",
    "sm":         "06:00-06:00",
    "c":         "06:00-06:00",
    "w":         "06:00-06:00",
    "bo":         "06:00-06:00",
    "oil":         "06:00-06:00",
    "conc":         "06:00-06:00",
    "ng":         "06:00-06:00",
    "hg":         "06:00-06:00",
    "si":         "06:00-06:00",
    "gc":         "06:00-06:00",
    "nid":         "06:00-06:00",
    "cad":         "06:00-06:00",
    "pbd":         "06:00-06:00",
    "ahd":         "06:00-06:00",
    "zsd":         "06:00-06:00",
    "ag10kgdy":         "06:00-06:00",
    "ag50kgdy":         "06:00-06:00",
    "ag100kgdy":         "06:00-06:00",
    "dsl0s":         "06:00-06:00",
    "gsl93s":         "06:00-06:00",
    "jgtzj":         "06:00-06:00",
    "qho10s":         "06:00-06:00",
    "qho20s":         "06:00-06:00",
    "qho50s":         "06:00-06:00"
}*/



timeRange.getTimeByTimestamp    = function(timestamp,format){
    var momentObj = moment.unix(timestamp);
    return momentObj.format(format);
}

timeRange.getTimestampByTime = function(time,format){
    var momentObj = moment(time,format);
    return momentObj.format('X');
}

timeRange.getStartAndEndByInterval   = function(timestamp,interval){
    if(interval == 5 || interval == 15 || interval == 30){
        var momentObj   = moment.unix(timestamp);
        var minute      = momentObj.format('mm');

        minute  = Math.floor(parseInt(minute)/interval);
        minute  = parseInt(minute)*interval;
        
        var stime   = momentObj.format('YYYY-MM-DD HH') + ':'+minute;
        
        var start   = timeRange.getTimestampByTime(stime,'YYYY-MM-DD HH:mm');
        var end = parseInt(start)+interval*60; 
        return {startTime:stime,start:start,end:end};
    }
}
timeRange.get = function(timestamp,interval){
    switch(interval){
        case '1':
            return timeRange.getInterval.oneMinute(timestamp);
        case '5':
        case '15':
        case '30':
            return timeRange.getStartAndEndByInterval(timestamp,interval);
        case '1h':
            return timeRange.getInterval.oneHour(timestamp);
        case '4h':
            return timeRange.getInterval.fourHours(timestamp);
        case '1d':
            return timeRange.getInterval.oneDay(timestamp);
        case '1w':
            return timeRange.getInterval.oneWeek(timestamp);
        case '1m':
            return timeRange.getInterval.oneMonth(timestamp);

    }
}

timeRange.getInterval    ={
    oneMinute:function(timestamp){
        var startTime   = timeRange.getTimeByTimestamp(timestamp,'YYYYMMDDHHmm');
        var start       = timeRange.getTimestampByTime(startTime,'YYYYMMDDHHmm');
        var end         = parseInt(start) + 60;
        return {startTime:startTime,start:start,end:end};
    },
    fiveMinute:function(timestamp){
        return timeRange.getStartAndEndByInterval(timestamp,5);

    },
    fifteenMinute:function(timestamp){
        return timeRange.getStartAndEndByInterval(timestamp,15);

    },
    thirtyMinute:function(timestamp){
        return timeRange.getStartAndEndByInterval(timestamp,30);

    },
    oneHour:function(timestamp){
        var startTime   = timeRange.getTimeByTimestamp(timestamp,'YYYYMMDDHH');
        var start       = timeRange.getTimestampByTime(startTime,'YYYYMMDDHH');
        var end         = parseInt(start) + 60*60;
        return {startTime:startTime,start:start,end:end};
    },
    fourHours:function(timestamp){
        var momentObj   = moment.unix(timestamp);
        var hours      = momentObj.format('HH');
        hours  = Math.floor(parseInt(hours)/4);
        hours  = hours*4;
        
        var stime   = momentObj.format('YYYY-MM-DD') + ' '+hours;
        
        var start   = timeRange.getTimestampByTime(stime,'YYYY-MM-DD HH');
        var end = parseInt(start)+4*60*60; 
        return {startTime:stime,start:start,end:end};
    },
    oneDay:function(timestamp){
        var value={};
        value= time_differ(timestamp);

        var momentObj = value.momentObj;
        var differ = value.differ;
        var code_time_start =value.code_time_start;
        var day   = momentObj.format('YYYYMMDD');

        var start       = timeRange.getTimestampByTime(day + ' '+code_time_start,'YYYYMMDD HH:mm');
        var end         = parseInt(start) + 24*60*60;

        return {startTime:day,start:start,end:end};
        
    },
    oneWeek:function(timestamp){

        var value={};
        value= time_differ(timestamp);

        var momentObj = value.momentObj;
        var differ = value.differ;
        var code_time_start =value.code_time_start;
        
        var time = momentObj.format('YYYY/MM/DD');
        var startTime = momentObj.format('YYYY/MM/DD HH:mm:ss');


        oToday=new Date(time+ ' ' + code_time_start) ;

        currentDay=oToday.getDay(); //星期天是 0
/*
        start=oToday.getTime()-(currentDay)*24*60*60*1000;
        end=oToday.getTime()+(7-currentDay)*24*60*60*1000;*/


        start=oToday.getTime()-(currentDay-1)*24*60*60*1000;
        end=oToday.getTime()+(7-currentDay-1)*24*60*60*1000;

        return {startTime:startTime,start:start/1000,end:end/1000};

    },
    oneMonth:function(timestamp){
        var value={};
        value= time_differ(timestamp);

        var momentObj = value.momentObj;
        var differ = value.differ;
        var code_time_start =value.code_time_start;

        var month   = momentObj.format('YYYYMM');
        var days    = momentObj.daysInMonth();
        days    = parseInt(days);
       
        var start       = timeRange.getTimestampByTime(month+ ' '+code_time_start,'YYYYMM HH:mm');
        var end         = parseInt(start) + days*24*60*60;

        return {startTime:month,start:start,end:end};
    }
};


function time_differ(timestamp){
    code = code.toLocaleLowerCase();
    var code_timeRangeArr = code_time[code].split("-");
    var code_time_start = code_timeRangeArr[0];
    var int_code_time_start= parseInt( code_time_start.replace(':',''));


    var momentObj   = moment.unix(timestamp);

    var hour   = momentObj.format('HHmm');
    var differ =0;
    if(hour < int_code_time_start){ //小于 开始时间
        momentObj   = moment.unix(timestamp-24*60*60);
    }
    return {momentObj:momentObj,differ:differ,code_time_start:code_time_start};
}