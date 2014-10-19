(function(jq) {

    jq(function() {

        // dom is loaded, initialize isotope
        var container      = jq('[data-isotope-role="container"]').show();
        var default_filter = container.data('isotope-default-filter');
        var options        = {itemSelector: '[data-isotope-role="item"]'};

        if (undefined !== default_filter) {
            options['filter'] = '[data-isotope-filter="' + default_filter + '"]';
        }

        container.isotope(options);

        jq('body').on('click', '[data-isotope-role="filters"] > button[data-isotope-role="filter"]', function(event) {

            // prevent default
            event.preventDefault();

            // and filter
            var button = jq(this);
            var filter = button.data('isotope-filter');
            container.isotope({
                filter: function() {

                    var element_filter = jq(this).data('isotope-filter');
                    return element_filter === filter || filter === '*';
                }
            });
        });
    });

})(jQuery);