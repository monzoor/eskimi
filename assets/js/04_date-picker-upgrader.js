$(document).ready(function () {
    var datepickerDiv = $('#datepicker-calendar');
    if (datepickerDiv.length) {
        Date.prototype.today = function () {
            var yyyy = this.getFullYear().toString();
            var mm   = (this.getMonth() + 1).toString();
            var dd   = this.getDate().toString();

            return yyyy + "-" + (mm[1] ? mm : "0" + mm[0]) + "-" + (dd[1] ? dd : "0" + dd[0]); // padding
        };

        Date.prototype.formatDate = function (format) {
            var date = this;
            if (!format) {
                format = "yyyy-MM-dd";
            }

            var month = date.getMonth() + 1;
            var year  = date.getFullYear();

            format = format.replace("MM", month.toString().padL(2, "0"));

            if (format.indexOf("yyyy") > -1) {
                format = format.replace("yyyy", year.toString());
            } else if (format.indexOf("yy") > -1) {
                format = format.replace("yy", year.toString().substr(2, 2));
            }
            format = format.replace("dd", date.getDate().toString().padL(2, "0"));

            var hours = date.getHours();
            if (format.indexOf("t") > -1) {
                if (hours > 11) {
                    format = format.replace("t", "pm");
                } else {
                    format = format.replace("t", "am");
                }
            }

            if (format.indexOf("HH") > -1) {
                format = format.replace("HH", hours.toString().padL(2, "0"));
            }

            if (format.indexOf("hh") > -1) {
                if (hours > 12) hours - 12;
                if (hours == 0) hours = 12;
                format = format.replace("hh", hours.toString().padL(2, "0"));
            }

            if (format.indexOf("mm") > -1) {
                format = format.replace("mm", date.getMinutes().toString().padL(2, "0"));
            }

            if (format.indexOf("ss") > -1) {
                format = format.replace("ss", date.getSeconds().toString().padL(2, "0"));
            }

            return format;
        };

        String.repeat = function (chr, count) {
            var str = "";
            for (var x = 0; x < count; x++) {
                str += chr
            }

            return str;
        };

        String.prototype.padL = function (width, pad) {
            if (!width || width < 1)
                return this;

            if (!pad) pad = " ";
            var length = width - this.length;
            if (length < 1) return this.substr(0, width);

            return (String.repeat(pad, length) + this).substr(0, width);
        };

        String.prototype.padR = function (width, pad) {
            if (!width || width < 1) {
                return this;
            }

            if (!pad) pad = " ";
            var length = width - this.length;
            if (length < 1) this.substr(0, width);

            return (this + String.repeat(pad, length)).substr(0, width);
        };

        var date = new Date();

        var beginning = '2015-01-01';

        // today
        var today = date.today();

        // yesterday
        var yesterday = new Date(date.getTime() - (24 * 60 * 60 * 1000)).formatDate();

        // monday
        var monday = new Date();
        var day = monday.getDay() || 7;
        if (day !== 1) {
            monday.setHours(-24 * (day - 1));
        }
        monday = monday.formatDate();

        // last 7 days
        var last7Days = new Date(date.getTime() - (6 * 24 * 60 * 60 * 1000)).formatDate();

        var url          = window.location.href;
        var urlToday     = updateURLParameter(updateURLParameter(url, 'date_from', today),     'date_to', today);
        var urlYesterday = updateURLParameter(updateURLParameter(url, 'date_from', yesterday), 'date_to', yesterday);
        var urlThisWeek  = updateURLParameter(updateURLParameter(url, 'date_from', monday),    'date_to', today);
        var urlLast7Days = updateURLParameter(updateURLParameter(url, 'date_from', last7Days), 'date_to', today);
        var urlAllTime   = updateURLParameter(updateURLParameter(url, 'date_from', beginning), 'date_to', today);

        if (datepickerDiv.hasClass('dashboard')) {
            urlToday     = updateURLParameter(updateURLParameter(updateURLParameter(url, 'date_from', ''), 'date_to', ''), 'date_range', 'today');
            urlYesterday = updateURLParameter(updateURLParameter(updateURLParameter(url, 'date_from', ''), 'date_to', ''), 'date_range', 'yesterday');
            urlThisWeek  = updateURLParameter(updateURLParameter(updateURLParameter(url, 'date_from', ''), 'date_to', ''), 'date_range', 'this_week');
            urlLast7Days = updateURLParameter(updateURLParameter(updateURLParameter(url, 'date_from', ''), 'date_to', ''), 'date_range', 'last_7_days');
            urlAllTime   = updateURLParameter(updateURLParameter(updateURLParameter(url, 'date_from', ''), 'date_to', ''), 'date_range', 'all_time');
        }

        var pattern = '<ul class="nav additionalDates">' +
            '<li class="nav-item col px-0"><a href="' + urlToday + '" class="nav-link text-nowrap js-datepicker-apply js-datepicker-noclick">Today</a></li>' +
            '<li class="nav-item col px-0"><a href="' + urlYesterday + '" class="nav-link text-nowrap js-datepicker-apply js-datepicker-noclick">Yesterday</a></li>' +
            '<li class="nav-item col px-0"><a href="' + urlThisWeek + '" class="nav-link text-nowrap js-datepicker-apply js-datepicker-noclick">This week</a></li>' +
            '<li class="nav-item col px-0"><a href="' + urlLast7Days + '" class="nav-link text-nowrap js-datepicker-apply js-datepicker-noclick">Last 7 days</a></li>' +
            '<li class="nav-item col px-0"><a href="' + urlAllTime + '" class="nav-link text-nowrap js-datepicker-apply js-datepicker-noclick">All time</a></li>' +
        '</ul>';

        $(pattern).prependTo('.datepickerContainer');
    }
});

function updateURLParameter(url, param, paramVal) {
    var newAdditionalURL = "";
    var tempArray        = url.split("?");
    var baseURL          = tempArray[0];
    var additionalURL    = tempArray[1];
    var temp             = "";
    if (additionalURL) {
        tempArray = additionalURL.split("&");
        for (var i = 0; i < tempArray.length; i++) {
            if (tempArray[i].split('=')[0] != param) {
                newAdditionalURL += temp + tempArray[i];
                temp = "&";
            }
        }
    }

    var rows_txt = temp + "" + param + "=" + paramVal;

    return baseURL + "?" + newAdditionalURL + rows_txt;
}
