@if(!isset($inner) && !isset($detailPage))
    <script src="/assets/front/js/bootstrap.min.js"></script>
    <script src="/assets/front/js/jquery-1.12.4.min.js"></script>
    <script src="/assets/front/js/slick.min.js"></script>
    <script src="/assets/front/js/wow.min.js"></script>
    <script src="/assets/front/js/custom.js"></script>
@endif

@if(isset($inner))
    <script src="/assets/front/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/front/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>             
    <script src="/assets/front/assets/js/app.js" type="text/javascript"></script>


    <script>
        $(document).ready(function() {
             //-initialize the javascript
            App.init();
            App.dashboard();
         
        });
    </script>
    @if(isset($review))
        <script>
            $(document).ready(function() {
                $('.minus').click(function () {
                    var $input = $(this).parent().find('input');
                    var limit = $(this).parent().find('input').data('limit');
                    var count = parseInt($input.val()) - 1;
                    count = count < 1 ? 1 : count;
                    if(count >= limit){
                        $input.val(count);
                        $input.change();
                    }
                    return false;
                });
                $('.plus').click(function () {
                    var $input = $(this).parent().find('input');
                    $input.val(parseInt($input.val()) + 1);
                    $input.change();
                    return false;
                });
            });
        </script>
    @endif
    <link rel="stylesheet" href="/assets/front/assets/css/app.css" type="text/css" />
@endif

@if(isset($detailPage))
    <script src="/assets/front/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/front/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="/assets/front/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="/assets/front/assets/js/app.js" type="text/javascript"></script>
    <script src="/assets/front/assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="/assets/front/assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="/assets/front/assets/lib/jquery-flot/jquery.flot.time.js" type="text/javascript"></script>
    <script src="/assets/front/assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="/assets/front/assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="/assets/front/assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
    <script src="/assets/front/assets/lib/jquery-flot/plugins/jquery.flot.tooltip.js" type="text/javascript"></script>
    <script src="/assets/front/assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="/assets/front/assets/lib/countup/countUp.min.js" type="text/javascript"></script>
    <script src="/assets/front/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/assets/front/assets/lib/jqvmap/jquery.vmap.min.js" type="text/javascript"></script>
    <script src="/assets/front/assets/lib/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>

    <script>
        function generate_year_range(start, end) {
    var years = "";
    for (var year = start; year <= end; year++) {
        years += "<option value='" + year + "'>" + year + "</option>";
    }
    return years;
}

today = new Date();
$('.selected-date').val(today.getDate()+'/'+today.getMonth()+'/'+today.getFullYear());
currentMonth = today.getMonth();
currentYear = today.getFullYear();
selectYear = document.getElementById("year");
selectMonth = document.getElementById("month");


createYear = generate_year_range(1970, 2050);
/** or
 * createYear = generate_year_range( 1970, currentYear );
 */

document.getElementById("year").innerHTML = createYear;

var calendar = document.getElementById("calendar");
var lang = calendar.getAttribute('data-lang');

var months = "";
var days = "";

var monthDefault = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

var dayDefault = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];

    months = monthDefault;
    days = dayDefault;

var $dataHead = "<tr>";
for (dhead in days) {
    $dataHead += "<th data-days='" + days[dhead] + "'>" + days[dhead] + "</th>";
}
$dataHead += "</tr>";

//alert($dataHead);
document.getElementById("thead-month").innerHTML = $dataHead;


monthAndYear = document.getElementById("monthAndYear");
showCalendar(currentMonth, currentYear);



function next() {
    currentYear = (currentMonth === 11) ? currentYear + 1 : currentYear;
    currentMonth = (currentMonth + 1) % 12;
    showCalendar(currentMonth, currentYear);
}

function previous() {
    currentYear = (currentMonth === 0) ? currentYear - 1 : currentYear;
    currentMonth = (currentMonth === 0) ? 11 : currentMonth - 1;
    showCalendar(currentMonth, currentYear);
}

function jump() {
    currentYear = parseInt(selectYear.value);
    currentMonth = parseInt(selectMonth.value);
    showCalendar(currentMonth, currentYear);
}

function showCalendar(month, year) {

    var selectedDate = $('.selected-date').val();
    if(selectedDate == null){
        console.log(selectedDate);
        $('.selected-date').val(today.getDate()+'/'+today.getMonth()+'/'+today.getFullYear());
    }

    var firstDay = ( new Date( year, month ) ).getDay() - 1;

    tbl = document.getElementById("calendar-body");

    
    tbl.innerHTML = "";

    
    monthAndYear.innerHTML = months[month] + " " + year;
    selectYear.value = year;
    selectMonth.value = month;

    // creating all cells
    var date = 1;
    for ( var i = 0; i < 6; i++ ) {
        
        var row = document.createElement("tr");

        
        for ( var j = 0; j < 7; j++ ) {
            if ( i === 0 && j < firstDay ) {
                cell = document.createElement( "td" );
                cellText = document.createTextNode("");
                cell.appendChild(cellText);
                row.appendChild(cell);
            } else if (date > daysInMonth(month, year)) {
                break;
            } else {
                cell = document.createElement("td");
                cell.setAttribute("data-date", date);
                cell.setAttribute("data-month", month + 1);
                cell.setAttribute("data-year", year);
                cell.setAttribute("data-month_name", months[month]);
                cell.setAttribute("onclick", "selectDate("+date+","+month+","+year+");");
                cell.className = "date-picker";
                cell.innerHTML = "<span>" + date + "</span>";

                // if ( date === today.getDate() && year === today.getFullYear() && month === today.getMonth() ) {
                //     cell.className = "date-picker selected";
                // }
                // console.log(date+'/'+month+'/'+year == selectedDate);
                // console.log(date+'/'+month+'/'+year);
                // console.log(selectedDate);
                if (date+'/'+month+'/'+year == selectedDate) {
                    console.log(selectedDate);
                    cell.className = "date-picker selected";
                }
                row.appendChild(cell);
                date++;
            }


        }

        tbl.appendChild(row);
    }
}

function selectDate(date, month, year){
    var full_date = date+'/'+month+'/'+year;

    console.log(full_date);

    $('.selected-date').val(full_date);
    $("td").removeClass("selected");
    $('td[data-date = '+date+']').addClass("selected");
}

function daysInMonth(iMonth, iYear) {
    return 32 - new Date(iYear, iMonth, 32).getDate();
}
    </script>
    <link rel="stylesheet" href="/assets/front/assets/css/app.css" type="text/css" />
@endif

@if(isset($review) || isset($detailPage) || isset($success))
<style>
    body{
        background-color: #fff;
    }
</style>
@endif

<script src="/assets/front/js/custom-front.js"></script>