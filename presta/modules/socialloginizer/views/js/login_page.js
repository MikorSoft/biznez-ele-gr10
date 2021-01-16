$(document).ready(function () {
    if (velsof_loginizer == 1) {
        if (ps_version_com == 16) {
            code = code + '<style>#authentication #main fieldset, #authentication #login_form fieldset{ height : auto ! important}</style>';
            if (position == 'login') {
                $('.no-account').append(code);
            } 
        }
    }
});
$(function () {
    $('#output > li').tsort({
        attr: 'data-index'
    });
});