var __picker = (function($){
    "use strict";

    var from;
    var to;

    function reloadPage()
    {
        var startMonth = from.getMonth() + 1;
        if (startMonth < 10) {
            startMonth = "0" + startMonth;
        }

        var startDay = from.getDate();
        if (startDay < 10) {
            startDay = "0" + startDay;
        }

        var endMonth = to.getMonth() + 1;
        if (endMonth < 10) {
            endMonth = "0" + endMonth;
        }

        var endDay = to.getDate();
        if (endDay < 10) {
            endDay = "0" + endDay;
        }

        var dateFrom = from.getFullYear() + "-" + startMonth + "-" + startDay;
        var dateTo = to.getFullYear() + "-" + endMonth + "-" + endDay;
        document.location.href = getTargetUri(dateFrom, dateTo);
    }

    function hidePicker() {
        $('#datepicker-calendar').hide();
        $('#date-range-field a').html('&#8897;');
        $('#date-range-field').css({borderBottomLeftRadius:5, borderBottomRightRadius:5});
        $('#date-range-field a').css({borderBottomRightRadius:5});
    }

    function getTargetUri(dateFrom, dateTo)
    {
        var targetUri = document.location.protocol + "//" + document.location.hostname + document.location.pathname;
        if (document.location.search.length > 0) {
            var data = {};
            var searchParts = document.location.search.substring(1).split('&');
            for (var i in searchParts) {
                var partData = searchParts[i].split("=");
                data[partData[0].trim()] = partData[1].trim()
            }

            data.method = 'index';
            data.date_from = dateFrom;
            data.date_to = dateTo;

            targetUri += "?";

            var targetSearch = [];
            for (var prop in data) {
                targetSearch.push(prop + "=" + data[prop]);
            }

            targetUri += targetSearch.join("&");
        }

        return targetUri;
    }

    function init(dateFrom, dateTo) {
        to = new Date(dateTo);
        from = new Date(dateFrom);

        /* Special date widget */
        $('#datepicker-calendar').DatePicker({
            inline: true,
            date: [from, to],
            calendars: 3,
            mode: 'range',
            position: 'left',
            starts: 1,
            current: new Date(to.getFullYear(), to.getMonth() - 1, 1),
            onChange: function(dates,el) {
                from = dates[0];
                to   = dates[1];

                // update the range display
                $('#date-range-field span').text(dates[0].getDate()+' '+dates[0].getMonthName(true)+', '+dates[0].getFullYear()+' - '+
                dates[1].getDate()+' '+dates[1].getMonthName(true)+', '+dates[1].getFullYear());
            }
        });

        // initialize the special date dropdown field
        $('#date-range-field span').text(from.getDate()+' '+from.getMonthName(true)+', '+from.getFullYear()+' - '+
        to.getDate()+' '+to.getMonthName(true)+', '+to.getFullYear());

        // bind a click handler to the date display field, which when clicked
        // toggles the date picker calendar, flips the up/down indicator arrow,
        // and keeps the borders looking pretty
        $('#date-range-field').bind('click', function(){
            $('#datepicker-calendar').toggle();
            if($('#date-range-field a').text().charCodeAt(0) == 8897) {
                // switch to up-arrow
                $('#date-range-field a').html('&#8896;');
                $('#date-range-field').css({borderBottomLeftRadius:0, borderBottomRightRadius:0});
                $('#date-range-field a').css({borderBottomRightRadius:0});
            } else {
                // switch to down-arrow
                /*$('#date-range-field a').html('&#9660;');
                 $('#date-range-field').css({borderBottomLeftRadius:5, borderBottomRightRadius:5});
                 $('#date-range-field a').css({borderBottomRightRadius:5});*/
                hidePicker();
            }
            return false;
        });

        $('.js-datepicker-apply').bind('click', function(){
            hidePicker();
            reloadPage();
        });

        $('.js-datepicker-noclick').bind('click', function(){
            hidePicker();
        });

        // global click handler to hide the widget calendar when it's open, and
        // some other part of the document is clicked.  Note that this works best
        // defined out here rather than built in to the datepicker core because this
        // particular example is actually an 'inline' datepicker which is displayed
        // by an external event, unlike a non-inline datepicker which is automatically
        // displayed/hidden by clicks within/without the datepicker element and datepicker respectively
        $('html').click(function() {
            if($('#datepicker-calendar').is(":visible")) {
                /*$('#datepicker-calendar').hide();
                 $('#date-range-field a').html('&#9660;');
                 $('#date-range-field').css({borderBottomLeftRadius:5, borderBottomRightRadius:5});
                 $('#date-range-field a').css({borderBottomRightRadius:5});*/
                hidePicker();
            }
        });

        // stop the click propagation when clicking on the calendar element
        // so that we don't close it
        $('#datepicker-calendar').click(function(event){
            event.stopPropagation();
        });
    }


    return {
        init: function(from, to) { init(from, to) }
    }

})(jQuery);
