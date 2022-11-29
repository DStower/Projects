/*
let $j = jQuery.noConflict(); // Use this shortcut instead of default '$' if using multiple JS libraries
*/
function onLoadRecaptcha(e) {
    grecaptcha.ready(function() {
        grecaptcha.execute('6Ld7E14iAAAAAE5Vb34eJrd0zap9jgsKjOQPFsDC', {action: 'submit'}).then(function(token) {
            let response = document.getElementById('token_generate');
            response.value = token;
        });
    }); 
}