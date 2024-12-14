// Toggle Nav-Sidebar
$( function() {
    // Set effect from select menu value
    $( "#nav-sidebar-toggler" ).on( "click", function() {
        $("#nav-sidebar").animate({width: 'toggle'}, 200);
    });
});