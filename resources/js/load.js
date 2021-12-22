module.exports = {

    init()
    {
        this.initAjax();
        $(this.onDOMLoad.bind(this));
    },

    initAjax()
    {
        $.ajaxSetup({
            header: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
        });
    },

    onDOMLoad()
    {
        this.setOnePageNav();
        this.setMobileNav();
    },

    setOnePageNav()
    {
        $('#nav').onePageNav({
            currentClass: 'current',
            changeHash: false,
            scrollSpeed: 750,
            scrollThreshold: 0.5,
            filter: '',
            easing: 'swing',
            begin: function() {
                //Hack so you can click other menu items after the initial click
                $('body').append('<div id="device-dummy" style="height: 1px;"></div>');
            },
            end: function() {
                $('#device-dummy').remove();
            }
        });
    },

    setMobileNav()
    {
        $('nav a#toggle').click(function(e) {
            e.preventDefault();

            $('ul').slideToggle(200, function() {
                // Animation complete.
            });
        });

        $('nav ul').onePageNav({
            currentClass: 'current',
            changeHash: false,
            scrollSpeed: 750,
            scrollThreshold: 0.5,
            filter: '',
            easing: 'swing',
            begin: function() {
                //Hack so you can click other menu items after the initial click
                $('body').append('<div id="device-dummy" style="height: 1px;"></div>');

                $('nav ul').slideToggle(200, function() {
                    // Animation complete.
                });

            },
            end: function() {
                $('#device-dummy').remove();
            }
        });
    },
}
