(function ($) {
    $(document).on('ready menu-item-added', function () {
        "use strict";

        function formatState(state) {
            if (!state.id) {
                return state.text;
            }
            var $state = $('<span><span class="lnr lnr-' + state.text + '"></span>' + state.text + '</span>');
            return $state;
        };

        $('.lnricon-select').select2({
            width: '100%',
            templateResult: formatState
        });
        $('.lnricon-select').on('change', function () {
            $(this).parent().find('.lnricon-preview').html('<span class="lnr lnr-' + $(this).find('option:selected').html() + '"></span>');
        });
    });
})(jQuery);