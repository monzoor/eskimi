
<!DOCTYPE html>
<html>
<head>
    <title>Eskimi DSP - Your programmatic partner</title>
        <link rel="shortcut icon" href="https://dsp.eskimi.com/favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://dsp.eskimi.com/favicon.ico" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://dsp.eskimi.com//assets/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="https://dsp.eskimi.com//assets/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="https://dsp.eskimi.com//assets/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="https://dsp.eskimi.com//assets/css/compiled/layout.css?_v=151204" />
<!--    <link rel="stylesheet" type="text/css" href="https://dsp.eskimi.com/--><!--css/compiled/elements.css" />-->
    <link rel="stylesheet" type="text/css" href="https://dsp.eskimi.com//assets/css/compiled/icons.css" />
    <link rel="stylesheet" type="text/css" href="https://dsp.eskimi.com//assets/css/compiled/elements.css" />
    <link rel="stylesheet" type="text/css" href="https://dsp.eskimi.com//assets/css/lib/uniform.default.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css"/>

    <!-- libraries -->
    <link href="https://dsp.eskimi.com//assets/css/lib/font-awesome.css" type="text/css" rel="stylesheet" />

    <!-- this page specific styles -->
    <link rel="stylesheet" href="https://dsp.eskimi.com//assets/css/compiled/tables.css" type="text/css" media="screen" />
<!--    <link href="https://dsp.eskimi.com/--><!--css/lib/bootstrap.datepicker.css" type="text/css" rel="stylesheet" />-->
    <link rel="stylesheet" href="https://dsp.eskimi.com//assets/css/compiled/form-showcase.css" type="text/css" media="screen" />

    <link href="https://dsp.eskimi.com//assets/css/lib/jquery.dataTables.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://dsp.eskimi.com//assets/css/compiled/datatables.css" type="text/css" media="screen" />

    <!-- open sans font -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />

    <!--[if lt IE 9]>
    <script src="https://dsp.eskimi.com//assets/js/html5shiv.min.js"></script>
    <![endif]-->

    <script src="https://dsp.eskimi.com//assets/js/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://dsp.eskimi.com//assets/css/compiled/style.css" />
    </head>
<body class="small_menu">

<div class="navbar navbar-inverse">
    <div class="navbar-inner">
        <button type="button" class="btn btn-navbar visible-phone" id="menu-toggler">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <a class="brand" href="https://dsp.eskimi.com//admin?function=dashboard"><img src="https://dsp.eskimi.com//assets/wl/eskimi/logo_white_34.png" alt="Eskimi DSP" class="logo" /></a><ul class="nav pull-right">
    <li class="notification-dropdown hidden-phone">
        <a href="https://dsp.eskimi.com/#" class="trigger">
            <i class="icon-warning-sign"></i>
            <span class="count total-notifications hide">0</span>
        </a>
        <div class="pop-dialog">
            <div class="pointer right">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <div class="body">
                <a href="https://dsp.eskimi.com/#" class="close-icon"><i class="icon-remove-sign"></i></a>
                <div class="notifications">
                    <h3><span class="total-notifications">0</span> new notifications</h3>
                    <div class="placeholder-notes"></div>
                    <div class="footer">
                        <a href="https://dsp.eskimi.com//admin?function=notices&method=index" class="logout">View all notifications</a>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <li class="dropdown">
        <a href="https://dsp.eskimi.com/#" class="dropdown-toggle hidden-phone" data-toggle="dropdown">
            Your account            <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
            <li><a href="https://dsp.eskimi.com//admin?function=account&method=edit_personal_info">Personal info</a></li>
        </ul>
    </li>        <li class="notification-dropdown hidden-phone">
            <a href="https://dsp.eskimi.com//admin?function=budgets&method=index">Budget: $ 0.00</a>
        </li>
        <li class="settings hidden-phone">
        <a href="https://dsp.eskimi.com//logout" role="button">
            <i class="icon-signout"></i>
        </a>
    </li>
</ul>
<script src="https://dsp.eskimi.com//assets/js/e/notifications.js"></script>
<script>
$(document).ready(checkNotifications.init());

$('ul.dropdown-menu.users_select').on('click', '.fixed_search', function () {
    return false;
}).on('keyup', '.fixed_search', function () {
    var t = $(this);
    t.closest('ul').find('li:not(:first)').each(function () {
        var li = $(this);
        if (li.text().toLowerCase().indexOf(t.val().toLowerCase()) >= 0) {
            li.show();
        } else {
            li.hide();
        }
    });
});

$('.notification-dropdown .trigger').click(function() {
    checkNotifications.setAsRead();
});
</script>    </div>
</div>

<div id="sidebar-nav">
    <div class="slide_menu_outer">
    <a href="javascript:void(0);" class="slide_menu"><i class="icon-chevron-left"></i></a>
</div>
<ul id="dashboard-menu">
            <li class="active" title="Dashboard">
                            <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
                            <a href="/admin?function=dashboard">
                    <i class="icon-dashboard"></i>
                    <span>Dashboard</span>
                </a>
                    </li>
            <li title="Creatives">
                            <a href="/admin?function=creatives">
                    <i class="icon-picture"></i>
                    <span>Creatives</span>
                </a>
                    </li>
            <li title="Campaigns">
                            <a href="/admin?function=campaigns">
                    <i class="icon-tasks"></i>
                    <span>Campaigns</span>
                </a>
                    </li>
            <li title="Reports">
                            <a href="/admin?function=reporting">
                    <i class="icon-bar-chart"></i>
                    <span>Reports</span>
                </a>
                    </li>
            <li title="Optimisation">
                            <a href="/admin?function=optimisation">
                    <i class="icon-filter"></i>
                    <span>Optimisation</span>
                </a>
                    </li>
            <li title="Audiences">
                            <a href="/admin?function=audiences">
                    <i class="icon-desktop"></i>
                    <span>Audiences</span>
                </a>
                    </li>
            <li title="Packages">
                            <a href="/admin?function=packages">
                    <i class="icon-briefcase"></i>
                    <span>Packages</span>
                </a>
                    </li>
            <li title="Traffic discovery">
                            <a href="/admin?function=trafficDiscovery">
                    <i class="icon-globe"></i>
                    <span>Traffic discovery</span>
                </a>
                    </li>
    </ul>
<link href="https://dsp.eskimi.com//assets/css/compiled/side-menu.css" rel="stylesheet" />
<script type="text/javascript" src="https://dsp.eskimi.com//assets/js/e/side-menu.js"></script></div>

<div class="content">
    <div class="container-fluid"><div class="main-stats">
    <div class="row-fluid stats-row first">
        <div class="span8 stat last">
            <div class="data text-left">
                <span>Hi, Eskimi!</span><span class="timerange-message">Showing statistics from 4 Nov 2017 to 10 Nov 2017</span>
            </div>
        </div>
        <div class="span4 stat last">
            <div class="data text-left">
                <div id="date-range">
                    <div id="date-range-field">
                        <span></span>
                        <a href="#">&#9660;</a>
                    </div>
                    <div id="datepicker-calendar" class="dashboard"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-stats">
    <div class="row-fluid stats-row">
        <div class="span3 stat">
            <div class="data text-left">
                                    Spent<br/>
                    <span class="number">$11,460.49</span>
                            </div>
        </div>
        <div class="span3 stat">
            <div class="span6 data text-left">
                                    Impressions<br/>
                    <span class="number">5,164,140</span>
                            </div>
            <div class="span6">
                                    <div class="pm-clearfix">
                        <label class="pm-no-wrap">eCPM</label>
                        <span>$2.22</span>
                    </div>
                                <hr>
                                    <div class="pm-clearfix">
                        <label class="pm-no-wrap">Win rate</label>
                        <span>60.18%</span>
                    </div>
                            </div>
        </div>
        <div class="span3 stat">
            <div class="span6 data text-left">
                                    Clicks<br/>
                    <span class="number">91,958</span>
                            </div>
            <div class="span6">
                                    <div class="pm-clearfix">
                        <label class="pm-no-wrap">eCPC</label>
                        <span>$0.12</span>
                    </div>
                                <hr>
                                    <div class="pm-clearfix">
                        <label class="pm-no-wrap">CTR</label>
                        <span>1.78%</span>
                    </div>
                            </div>
        </div>
        <div class="span3 stat last">
            <div class="span6 data text-left">
                                    Conversions<br/>
                    <span class="number">9,640</span>
                            </div>
            <div class="span6">
                                    <div class="pm-clearfix">
                        <label class="pm-no-wrap">eCPA</label>
                        <span>$1.19</span>
                    </div>
                                <hr>
                                    <div class="pm-clearfix">
                        <label class="pm-no-wrap">CR</label>
                        <span>10.48%</span>
                    </div>
                            </div>
        </div>
    </div>
</div>
<div id="pad-wrapper">        <div class="row-fluid head">
        <div class="span12">
            <h4>Overview</h4>
        </div>
        </div><div class="row-fluid">
    <script src="//code.highcharts.com/highcharts.js"></script>
    <div id="graph" style="min-width: 310px; height: 250px; margin: 0 auto"></div>
</div>
<script>
    (function($){
        $('#graph').highcharts({
            title: {
                text: null
            },
            xAxis: [{
                style: {
                    color: '#888888'
                },
                categories: ["2017-11-04","2017-11-05","2017-11-06","2017-11-07","2017-11-08","2017-11-09","2017-11-10"]            }],
            yAxis: [
                        { // Primary yAxis
                min: 0,
                title: {
                    text: 'Impressions',
                    style: {
                        color: '#888888'
                    }
                },
                labels: {
                    style: {
                        color: '#888888'
                    }
                }
            },
                        { // Secondary yAxis
                min: 0,
                title: {
                    text: 'Clicks',
                    style: {
                        color: '#888888'
                    }
                },
                labels: {
                    format: '{value}',
                    style: {
                        color: '#888888'
                    }
                },
                opposite: true
            },
                        {
                //graphConversions
                min: 0,
                title: {
                    text: 'Conversions',
                    style: {
                        color: '#888888'
                    }
                },
                labels: {
                    format: '{value}',
                    style: {
                        color: '#888888'
                    }
                },
                opposite: true
            }
                        ],
            tooltip: {
                shared: true
            },
            legend: {
                layout: 'vertical',
                align: 'left',
                x: 50,
                verticalAlign: 'top',
                y: 10,
                floating: true,
                backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
            },
            series: [
                        {
                name: 'Impressions',
                type: 'spline',
                yAxis: 0,
                color: '#4387bf',
                data: [0,0,0,1240233,1302809,1330435,1290663]            },
                        {
                name: 'Clicks',
                type: 'spline',
                yAxis: 1,
                color: 'rgba(95, 175, 228, 0.8)',
                data: [0,0,0,19013,23395,21574,27976]            },
                        {
                name: 'Conversions',
                type: 'spline',
                yAxis: 1,
                color: 'rgba(160, 212, 144, 0.8)',
                data: [0,0,0,2185,2532,2034,2889]            }
                        ]
        });
    })(jQuery);
</script>    <div class="table-wrapper products-table active-campaigns">
        <div class="row-fluid head">
            <div class="span4">
                <h4>Active campaigns</h4>
            </div>
        </div>
        <div class="row-fluid">                <table class="table table-hover" width="100%">
                    <thead>
                    <tr>                            <th class="span2">
                                ID                            </th>
                                                    <th class="span2">
                                Campaign                            </th>
                                                    <th class="span2">
                                Impressions                            </th>
                                                    <th class="span2">
                                Win rate                            </th>
                                                    <th class="span2">
                                Clicks                            </th>
                                                    <th class="span2">
                                CTR                            </th>
                                                    <th class="span2">
                                Conversions                            </th>
                                                    <th class="span2">
                                CR                            </th>
                                                    <th class="span2">
                                CPM                            </th>
                                                    <th class="span2">
                                CPC                            </th>
                                                    <th class="span2">
                                CPA                            </th>
                                                    <th class="span2">
                                Spent                            </th>
                                            </tr>
                    </thead>
                    <tbody>                        <tr class="first">
                            <td>
                                <a href="https://dsp.eskimi.com//admin?function=reporting&method=detailed&campaign_id=2" target="_blank">2</a>
                            </td>
                            <td>
                                <a href="/admin?function=reporting&method=detailed&campaign_id=2" target="_blank">Eskimi DSP demo campaign 2</a>
                            </td>
                                                            <td>
                                2,602,436                                </td>                                <td>
                                60.50%
                                </td>                                <td>
                                45,974                                </td>                                <td>
                                1.77%
                                </td>                                <td>
                                4,381                                </td>                                <td>
                                9.53%
                                </td>                                <td>
                                $2.20                                </td>                                <td>
                                $0.12                                </td>                                <td>
                                $1.31                                </td>                                <td>
                                    $5,731.58                                </td>
                                                    </tr>
                                            <tr>
                            <td>
                                <a href="https://dsp.eskimi.com//admin?function=reporting&method=detailed&campaign_id=1" target="_blank">1</a>
                            </td>
                            <td>
                                <a href="/admin?function=reporting&method=detailed&campaign_id=1" target="_blank">Eskimi DSP demo campaign 1</a>
                            </td>
                                                            <td>
                                2,561,704                                </td>                                <td>
                                59.86%
                                </td>                                <td>
                                45,984                                </td>                                <td>
                                1.80%
                                </td>                                <td>
                                5,259                                </td>                                <td>
                                11.44%
                                </td>                                <td>
                                $2.24                                </td>                                <td>
                                $0.12                                </td>                                <td>
                                $1.09                                </td>                                <td>
                                    $5,728.89                                </td>
                                                    </tr>
                                        </tbody>
                </table>
                    </div>
    </div>
</div>
<style>
    /* Main stats up of screen */
    .main-stats {
        margin-left: -20px;
        margin-right: -20px;
        background-color: #fdfdfd;
        border-bottom: 1px solid #efeef3;
    }

    .main-stats .stats-row {
        box-shadow: inset -1px 0px 5px 2px #f9f9f9;
    }

    .main-stats .stat {
        text-align: right;
        padding: 25px 0px 24px 0px;
        border-right: 1px solid #e8e9ee;
        position: relative;
        box-shadow: 1px 0px 0px 0px white;
    }

    .main-stats .stat.last {
        border-right: 0px;
    }

    .main-stats .stat .data {
        color: #29323a;
        font-weight: 600;
        font-size: 15px;
        padding-right: 50px;
    }

    .main-stats .stat .data .number {
        color: #32a0ee;
        font-size: 22px;
        margin-right: 0;
        line-height: 24px;
    }

    .main-stats .stat .date {
        color: #b4b8bb;
        font-weight: lighter;
        font-family: 'Lato', 'Open Sans';
        font-style: italic;
        font-size: 13px;
        position: absolute;
        right: 50px;
    }

    .section {
        border-top: 1px solid #edeff1;
        margin-top: 100px;
        padding-top: 45px;
        box-shadow: inset 0px 3px 4px -1px #fafafa;
    }

    .main-stats .title-message,
    .main-stats .timerange-message {
        margin-left: 15px;
        padding-left: 10px;
        border-left: 1px solid #a6a6a6;
        font-size: 14px;
        line-height: 2.2;
        color: #696d73;
    }

    .main-stats .stats-row.first .stat {
        padding: 10px 20px;
    }

    .main-stats .stat {
        padding: 20px;
        border-right: none;
    }

    .main-stats .first .stat {
        padding: 10px 0 10px 0;
    }

    .main-stats .first .stat .data {
        text-transform: none;
    }

    .main-stats .stats-row div.pm-clearfix {
        position: relative;
        text-align: right;
    }

    .main-stats .stats-row div.pm-clearfix label.pm-no-wrap,
    .main-stats .stats-row div.pm-clearfix span {
        float: left;
        width: 50%;
    }

    .main-stats .stats-row div.pm-clearfix label.pm-no-wrap {
        font-size: 12px;
        color: #696d73;
        text-align: left;
        margin-bottom: 0px;
    }

    .main-stats label {
        cursor: default;
    }

    .main-stats .stats-row hr {
        margin: 22px 0 2px;
        width: 100%;
    }

    #date-range {
        margin-right: -50px;
    }

    .main-stats .datepicker-apply {
        left: 415px;
        top: 155px;
        width: 80px;
    }

    #datepicker-calendar {
        font-weight: normal;
    }

    .main-stats #date-range-field a {
        font-size: 12px;
        top: -2px;
        border-radius: 0 10px 10px 0;
    }
</style>

<script type="text/javascript" src="https://dsp.eskimi.com//assets/vendor/datepicker/js/datepicker.js?_=1510310274"></script>
<link rel="stylesheet" media="screen" type="text/css" href="https://dsp.eskimi.com//assets/vendor/datepicker/css/base.css"/>
<link rel="stylesheet" media="screen" type="text/css" href="https://dsp.eskimi.com//assets/vendor/datepicker/css/clean.css"/>
<link rel="stylesheet" media="screen" type="text/css" href="https://dsp.eskimi.com//assets/css/compiled/internal/datepicker.css"/>
<link rel="stylesheet" media="screen" type="text/css" href="https://dsp.eskimi.com//assets/css/lib/datepickerUpgrade.css?_1510310274"/>
<script type="text/javascript" src="https://dsp.eskimi.com//assets/js/e/picker.js?_=1510310274"></script>
<script type="text/javascript" src="https://dsp.eskimi.com//assets/js/e/report.js"></script>
<script type="text/javascript" src="https://dsp.eskimi.com//assets/js/datepickerUpgrade.js?_1510310274"></script>
<script>
    __picker.init('2017-11-04', '2017-11-10', 'index');
</script>
<script type="text/javascript" src="https://dsp.eskimi.com//assets/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="https://dsp.eskimi.com//assets/js/dataTables.js"></script>
<script>
    (function () {
        initDataTables.init();
    })(jQuery);
</script>
</div>
</div>
<div class="copyright">
    <ul>
        <li><a href="https://dsp.eskimi.com/files/DSP_terms_and_conditions.pdf" target="_blank">Terms & Conditions</a></li>
        <li><a href="https://dsp.eskimi.com/http://business.eskimi.com/privacy-policy/" target="_blank">Privacy Policy</a></li>
    </ul>
</div>
</div>
</div>

<script src="https://dsp.eskimi.com//assets/js/bootstrap.min.js"></script>
<script src="https://dsp.eskimi.com//assets/js/theme.js"></script>
<script src="https://dsp.eskimi.com//assets/js/jquery.uniform.min.js"></script>
</body>
</html>
