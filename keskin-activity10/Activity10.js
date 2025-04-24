$(document).ready(function () {
   
    $("#birthday").datepicker();

 
    const cities = [
        "Charlotte",
        "New York",
        "Washington DC",
        "Los Angeles",
        "Chicago",
        "San Francisco",
        "Boston",
        "Houston",
        "Seattle",
        "Miami"
    ];
    $("#city").autocomplete({
        source: cities
    });
});
