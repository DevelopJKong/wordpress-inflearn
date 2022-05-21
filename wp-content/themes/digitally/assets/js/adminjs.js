
jQuery(document).ready(function() {
    function iformat(icon) {
        var originalOption = icon.element;
        return jQuery('<span><i class="' + icon.text + '"></i> ' + icon.text + '</span>');
    }

    jQuery('.admin_select').select2({
        width: "100%",
        templateSelection: iformat,
        templateResult: iformat,
        allowHtml: true
    });
})
