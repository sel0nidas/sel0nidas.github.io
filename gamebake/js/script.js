$(function() {

    var start = moment().subtract(1, 'days'); //1
    var end = moment();
    console.log(String(start.format('DD/MM/YYYY')) + "+1")
    
    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    
    $('#reportrange').daterangepicker({
        "startDate": start,
        "endDate": end,
        "maxDate": String(moment().subtract(0, 'days').format('MM/DD/YYYY') + 1) + "+2",
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);
    
    
    cb(start, end);
    
    /* 
    
    !!! 
    
    Important Note: 
    
    start and end variables can be used to get time range 
    
    for instance: 
    start.format('DD/MM/YYYY') 
    end.format('DD/MM/YYYY') 
    
    */
    
});

function openNav() {
        
    document.querySelector(".sidenav").classList.add("margin-left");
    document.querySelector(".sidenav").classList.remove("box-shadow-none");
    
}
function closeNav() {

        document.querySelector(".sidenav").classList.remove("margin-left");
        document.querySelector(".sidenav").classList.add("box-shadow-none");
    
}
document.addEventListener('readystatechange', function(ev) {
    if(document.readyState === 'complete'){
        document.querySelector('div.ranges > ul > li:nth-child(1)').remove();
    }

});