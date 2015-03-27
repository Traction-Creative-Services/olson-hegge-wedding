$(document).ready( function () {
    $("#banner-img").responsiveSlides({
        auto: true,             // Boolean: Animate automatically, true or false
        speed: 1000,            // Integer: Speed of the transition, in milliseconds
        timeout: 6000,          // Integer: Time between slide transitions, in milliseconds
        pager: false,           // Boolean: Show pager, true or false
        nav: false,             // Boolean: Show navigation, true or false
        random: true,          // Boolean: Randomize the order of the slides, true or false
        pause: false,           // Boolean: Pause on hover, true or false
        pauseControls: true,    // Boolean: Pause when hovering controls, true or false
        prevText: "Previous",   // String: Text for the "previous" button
        nextText: "Next",       // String: Text for the "next" button
        maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
        navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
        manualControls: "",     // Selector: Declare custom pager navigation
        namespace: "rslides",   // String: Change the default namespace used
        before: function(){},   // Function: Before callback
        after: function(){}     // Function: After callback
    });
})


var guestForm = {
    
    formData: {},
    response: null,
    
    save: function() {
        guestForm.formData['name'] = $('#name').val();
        guestForm.formData['message'] = $('#message').val();
        
        $('#guest-form').addClass('loading');
        
        $.ajax({
            url: guestBookSaveUrl,
            data: guestForm.formData,
            method: 'POST',
            success: function(info) {
                guestForm.response = JSON.parse(info);
                guestForm.append();
                guestForm.clear();
            }
        })
        
    },
    
    clear: function() {
        $('#name').val('');
        $('#message').val('');
    },
    
    append: function() {
        var HTML = '';
        HTML += '<div class="row">';
        HTML +=    '<div class="col col-md-4">';
        HTML +=        '<p><span class="double-large special">' + guestForm.response.name + '</span><br/>';
        HTML +=            '' + guestForm.response.datetime + '</p>';
        HTML +=    '</div>';
        HTML +=    '<div class="col col-md-8">';
        HTML +=        '<p>' + guestForm.response.message + '</p>';
        HTML +=    '</div>';
        HTML += '</div>';
        
        var current = $('#entries').html();
        
        var updated = HTML + current;
        
        $('#entries').html(updated);
    }
}