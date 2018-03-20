(function($) {

    'use strict';

    var pluginName = 'slider',
        defaults = {
            next: '.slider-nav__next',
            prev: '.slider-nav__prev',
            item: '.slider__item',
            dots: false,
            dotClass: 'slider__dot',
            autoplay: false,
            autoplayTime: 5000,
        };

    function slider(element, options) {
        this.$document = $(document);
        this.$window = $(window);
        this.$element = $(element);
        this.options = $.extend({}, defaults, options);
        this.init();
    };

    slider.prototype.init = function() {
        this.setup();
        this.attachEventHandlers();
        this.update();
    };

    slider.prototype.setup = function(argument) {
        this.$slides = this.$element.find(this.options.item);
        this.count = this.$slides.length;
        this.index = 0;

        this.$next = $(this.options.next);
        this.$prev = $(this.options.prev);

        this.$canvas = $(document.createElement('div'));
        this.$canvas.addClass('slider__canvas').appendTo(this.$element);
        this.$slides.appendTo(this.$canvas);

        this.$dots = $(this.options.dots);
        this.$dots.length && this.createDots();
    };

    slider.prototype.createDots = function() {
        var dots = [];
        for (var i = 0; i < this.count; i += 1) {
            dots[i] = '<span data-index="' + i + '" class="' + this.options.dotClass + '"></span>';
        }
        this.$dots.append(dots);
    }

    slider.prototype.attachEventHandlers = function() {
        this.$element.on('prev.slider', this.prev.bind(this));
        this.$document.on('click', this.options.prev, (function(e) {
            this.$element.trigger('prev.slider');
        }).bind(this));

        this.$element.on('next.slider', this.next.bind(this));
        this.$document.on('click', this.options.next, (function(e) {
            this.$element.trigger('next.slider');
        }).bind(this));

        this.$element.on('update.slider', this.update.bind(this));
        this.$window.on('resize load', (function(e) {
            this.$element.trigger('update.slider');
        }).bind(this));

        this.$element.on('jump.slider', this.jump.bind(this));
        this.$document.on('click', ('.' + this.options.dotClass), (function(e) {
            var index = parseInt($(e.target).attr('data-index'));
            this.$element.trigger('jump.slider', index);
        }).bind(this));

        this.$element.on('autoplay.slider', this.autoplay.bind(this));
        this.$element.on('autoplayOn.slider', this.autoplayOn.bind(this));
        this.$element.on('autoplayOff.slider', this.autoplayOff.bind(this));
        this.$element.bind('prev.slider next.slider jump.slider', this.autoplay.bind(this));
        this.options.autoplay && this.$element.trigger('autoplayOn.slider');
    };

    slider.prototype.next = function(e) {
        this.index = (this.index + 1) % this.count;
        this.slide();
    };

    slider.prototype.prev = function(e) {
        this.index = Math.abs(this.index - 1 + this.count) % this.count;
        this.slide();
    };

    slider.prototype.jump = function(e, index) {
        this.index = index % this.count;
        this.slide();
    }

    slider.prototype.autoplayOn = function(argument) {
        this.options.autoplay = true;
        this.$element.trigger('autoplay.slider');
    };

    slider.prototype.autoplayOff = function() {
        this.autoplayClear();
        this.options.autoplay = false;
    }

    slider.prototype.autoplay = function(argument) {
        this.autoplayClear();
        if (this.options.autoplay) {
            this.autoplayId = setTimeout((function() {
                this.$element.trigger('next.slider');
                this.$element.trigger('autoplay.slider');
            }).bind(this), this.options.autoplayTime);
        }
    };

    slider.prototype.autoplayClear = function() {
        this.autoplayId && clearTimeout(this.autoplayId);
    }

    slider.prototype.slide = function(index) {
        undefined == index && (index = this.index);
        var position = index * this.width * -1;
        this.$canvas.css({
            'transform': 'translate3d(' + position + 'px, 0, 0)',
        });
        this.updateCssClass();
    };

    slider.prototype.update = function() {
        this.width = this.$element.width();
        this.$canvas.width(this.width * this.count);
        this.$slides.width(this.width);
        this.slide();
    };

    slider.prototype.updateCssClass = function() {
        this.$slides
            .removeClass('active')
            .eq(this.index)
            .addClass('active');

        this.$dots
            .find('.' + this.options.dotClass)
            .removeClass('active')
            .eq(this.index)
            .addClass('active');
    }

    $.fn[pluginName] = function(options) {
        return this.each(function() {
            !$.data(this, pluginName) && $.data(this, pluginName, new slider(this, options));
        });
    };

})(window.jQuery);

$('#slider').slider({
    prev: '#prev',
    next: '#next',
    dots: '#dots',
    autoplay: true,
});
