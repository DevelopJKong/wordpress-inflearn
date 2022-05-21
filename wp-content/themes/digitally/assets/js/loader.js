var width = 100, // width of a progress bar in percentage
    perfData = window.performance.timing, // The PerformanceTiming interface
    EstimatedTime = -(perfData.loadEventEnd - perfData.navigationStart), // Calculated Estimated Time of Page Load which returns negative value.
    time = parseInt((EstimatedTime / 1000) % 60) * 100; //Converting EstimatedTime from miliseconds to seconds.



setTimeout(function () { 
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    jQuery(".loader").addClass('load');
}, time);

setTimeout(function () {
    jQuery(".nav-brand, .logo-illustrato, .nav-hamburger, .nav-rimando, .home main div:nth-child(2)").addClass('load');
}, time);

setTimeout(function () {
    jQuery(".navbar").delay(300).animate({
        opacity: 1
    }, 400);
    jQuery(".herohome h2, .herohome h1, .ctaaziende, .ctaprivati").addClass('ok');
}, time + 550)

setTimeout(function () {
    jQuery(".loader").css('display', 'none');
}, time + 800)

jQuery('#percentuale').each(function () {
    var $this = jQuery(this);
    jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
        duration: time,
        easing: 'swing',
        step: function () {
            $this.text(Math.ceil(this.Counter) + "%");
        }
    });
});

document.addEventListener('swup:contentReplaced', () => {
    setTimeout(function () {
        jQuery(".nav-brand, .logo-illustrato, .home main div:nth-child(2)").addClass('zero');
        jQuery(".nav-brand, .logo-illustrato, .home main div:nth-child(2)").addClass('load');
    }, 0);
});