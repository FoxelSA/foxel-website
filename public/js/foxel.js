/**
 * Website of FOXEL SA, Geneva Switzerland.
 *
 * Copyright (c) 2013-2015 FOXEL SA - http://foxel.ch
 * Please read <http://foxel.ch/license> for more information.
 *
 *
 * Author(s):
 *
 *      Alexandre Kraft <a.kraft@foxel.ch>
 *
 *
 * This file is part of the FOXEL project <http://foxel.ch>.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 *
 * Additional Terms:
 *
 *      You are required to preserve legal notices and author attributions in
 *      that material or in the Appropriate Legal Notices displayed by works
 *      containing it.
 *
 *      You are required to attribute the work as explained in the "Usage and
 *      Attribution" section of <http://foxel.ch/license>.
 */

var cfg = {

    structure: {
        dspsmall:
            false,
        lang: {
            switcher: false
        },
        nav: {
            move: 50,
            switcher: false
        },
        logo: {
            height: 0
        }
    },

    home: {
        active:
            false,
        slider: {
            bx: null,
            width: 1920,
            height: 550,
            delay: 6000
        },
        video: {
            teaser: null
        },
        scroll: {
            stop: false,
            move: '10px',
            delay: 1000,
            duration: 300
        },
        domains: {
            tile: 0,
            duration: 250,
            easing: 'easeInOutCubic'
        },
        services: {
            delay: 150,
            duration: 300,
            easing: 'easeInOutCubic'
        }
    }

}; // cfg end

/**
 * autoconf()
 */
var autoconf = function() {

    // structure
    dspsmall();

    // logo
    cfg.structure.logo.height = $('#logo img').height();

    // homepage
    cfg.home.active = !($('#home').length == 0);
    tile();

}; // autoconf() end

/**
 * dspsmall()
 */
var dspsmall = function() {

    // must be equal to  #nav .responsive:height media query (70px)
    cfg.structure.dspsmall = ($('#nav .responsive').height() == 70);

}; // dspsmall() end

/**
 * tile()
 */
var tile = function() {

    if (cfg.home.active)
        cfg.home.domains.tile = $('#home .domains .responsive').width();

}; // tile() end

/**
 * navigation()
 */
var navigation = function() {

    var top = parseInt($('#nav .responsive').css('top'),10);

    var move = $(document).scrollTop();
    if (move > cfg.structure.nav.move)
        move = cfg.structure.nav.move;
    if (cfg.structure.dspsmall)
        move = 0;

    $('#nav').height($('#nav .responsive').height()-move);
    $('#nav .air').css('top',(top-move/2)+'px');

    $('#logo img').width('auto');
    $('#logo img').height(cfg.structure.logo.height-(move/3));
    $('#logo').css('top',((($('#logo img').height()-$('#nav .air').height())/2)*-1.0)+'px');

    cfg.structure.nav.switcher = false;
    $('#nav .alternate.menu').remove();

}; // navigation() end

/**
 * activemenu()
 */
var activemenu = function() {

    /**
     * !! event mouse:enter
     */
    $('nav#menu ul li').on('mouseenter',function() {
        $(this).children('ul.sub').css('display','block');
    });

    /**
     * !! event mouse:leave
     */
    $('nav#menu ul li').on('mouseleave',function() {
        $(this).children('ul.sub').css('display','none');
    });

    /**
     * !! event mouse:click
     */
    $('#nav .alternate.trigger').on('click',function() {
        alternate();
    });

    // activate parents
    $('nav#menu a.active').parentsUntil('nav','li').children('a').addClass('active');


}; // activemenu()

/**
 * switchlangs()
 */
var switchlangs = function(state) {

    if (typeof(state)=='undefined')
        state = !cfg.structure.lang.switcher;
    cfg.structure.lang.switcher = state;

    $('#languages .available').css('display',state?'block':'none');

    if (state)
        $('#languages').addClass('displayed');
    else
        $('#languages').removeClass('displayed');

}; // switchlangs() end

/**
 * alternate()
 */
var alternate = function() {

    /**
     * private _open()
     */
    var _open = function() {

        // clone and append
        var alt = $('<div/>',{'class':'alternate menu noa'}).append($('#menu > ul').clone());
        $('#nav').append(alt);

        // arrow
        $.each($('#nav .alternate.menu li'),function(index,element) {
            $(element).prepend($('<i>',{'class':'fa right'}));
            $(element).on('click',function() {
                window.location = $(this).find('a').attr('href');
            });
        });

        // style
        $('#nav .alternate.menu').css('bottom','-'+alt.outerHeight(true)+'px');
        $('#nav .alternate.menu').css('display','block');

        // appear
        $('#nav .alternate.menu').stop(true,false).fadeTo(300,1);

    }; // _open() end

    /**
     * private _close()
     */
    var _close = function() {

        // disappear
        $('#nav .alternate.menu').stop(true,false).fadeTo(300,0,function() {
            $(this).remove();
        });

    }; // _close() end

    // state
    var state = !cfg.structure.nav.switcher;
    cfg.structure.nav.switcher = state;

    // render
    if (state)
        return _open();
    _close();

}; // alternate() end

/**
 * adapt()
 */
var adapt = function() {

    /**
     * _footer()
     */
    var _footer = function() {

        var y = 0;

        if ($('#main').height()+$('header').height()+$('footer').height() < $(window).height()) {
            y = $(window).height()-$('footer').height();
            $('footer').css('position','absolute');
        } else {
            $('footer').css('position','relative');
        }

        $('footer').css('left',0);
        $('footer').css('top',y+'px');

    }; // _footer() end

    /**
     * _domains()
     */
    var _domains = function() {

        var h = Math.floor($('#home .domains').width()/cfg.home.domains.tile);
        var w = $('#home .domains').width() / h;
        var n = Math.floor(w);
        var l = (w*h)-(n*h);
        var t = $('#home .domains .domain').length;
        var u = t % h;

        // clear
        $('#home .domains .interline').remove();
        $('#home .domains .domain').css('margin-left',0);

        // size
        $('#home .domains .domain').width(n);
        $('#home .domains .domain').height(n);
        $('#home .domains .thumb').width(n);
        $('#home .domains .thumb').height(n);

        // interline element
        var il = $('<div/>', {
            'width': $('#home .domains').width()+'px',
            'class': 'interline'
        });

        // fill last of every line
        $.each($('#home .domains .domain'),function(index,item) {

            if ((index+1) % h > 0)
                return;

            // fill
            $(item).width(n+l);
            $(item).children('.thumb').width(n+l);

            // interline
            $(item).after(il.clone());

        });

        // block-center last line
        if (u > 0) {

            var s = Math.floor((h-u)/2);
            if (s > 0)
                $('#home .domains .domain:eq('+(t-u)+')').css('margin-left',(s*n)+'px');

            // interline
            $('#home .domains .domain:last').after(il.clone());

        }

    }; // _domains() end

    // navigation
    dspsmall();
    navigation();

    // slider
    slider();

    // domains
    tile();
    if (cfg.home.active)
        _domains();

    // footer
    _footer();

}; // adapt() end

/**
 * slider()
 */
var slider = function() {

    var _w = $('#home .slider').width();
    var _h = Math.floor(_w / cfg.home.slider.width * cfg.home.slider.height);

    // elements
    $.each($('#home .slider img, #home .slider video'),function(index,element) {
        $(element).width(_w);
        $(element).height(_h);
    });

    // teaser
    if (cfg.home.video.teaser != null) {
        cfg.home.video.teaser.width(_w);
        cfg.home.video.teaser.height(_h);
    }

    // component
    $('#home .slider .bx-viewport').height(_h);

}; // slider() end

/**
 * homepage()
 */
var homepage = function() {

    /**
     * private _scrolldown()
     */
    var _scrolldown = function() {

        /**
         * private _move()
         */
        var _move = function() {

            $('#home .headline .arrow')
                .delay(cfg.home.scroll.delay)
                .animate({
                        marginTop: '+='+cfg.home.scroll.move
                    }, {
                        duration: cfg.home.scroll.duration
                    })
                .animate({
                        marginTop: '-='+cfg.home.scroll.move
                    }, {
                        duration: cfg.home.scroll.duration,
                        complete: function() {
                            if (!cfg.home.scroll.stop)
                                _move();
                        }
                    });

        }; // _move() end

        /**
         * !! event mouse:click
         */
        $('#home .headline').on('click',function() {
            cfg.home.scroll.stop = true;
            $.smoothScroll({
                scrollTarget: '#home .headline'
            });
        });

        /**
         * !! event mouse:enter
         */
        $('#home .headline').on('mouseenter',function() {
            cfg.home.scroll.delay = 0;
            $('#home .headline').addClass('on');
        });

        /**
         * !! event mouse:leave
         */
        $('#home .headline').on('mouseleave',function() {
            cfg.home.scroll.delay = 1000;
            $('#home .headline').removeClass('on');
        });

        // start
        _move();

    }; // _scrolldown() end

    /**
     * private _domains()
     */
    var _domains = function() {

        /**
         * private _close()
         */
        var _close = function() {

            // indicator
            $('#home .domains .domain').removeClass('expanded');
            $('#home .domains .domain .indicator').remove();

            // hide
            $('#home .domains .interline').animate({
                    height: 0
                }, {
                    duration: cfg.home.domains.duration,
                    easing: cfg.home.domains.easing,
                    complete: function() {
                        $(this).css('display','none');
                    }
                });

        }; // _close() end

        /**
         * private _open()
         */
        var _open = function(domain) {

            /**
             * private _ready()
             */
            var _ready = function(domain,interline) {

                // expand
                var expand = domain.children('.expand').clone();
                interline.append(expand);

                // show
                interline.css('display','block');
                interline
                    .stop(true,false)
                    .animate({
                            height: expand.outerHeight(true)+'px'
                        }, {
                            duration: cfg.home.domains.duration.interline,
                            easing: cfg.home.domains.easing,
                            complete: function() {
                                $.smoothScroll({
                                    scrollTarget: domain
                                });
                            }
                        });

            }; // _ready() end

            // next interline
            var interline = domain.nextAll('.interline').first();

            // clear
            interline.empty();

            // indicator
            domain.addClass('expanded');
            domain.append(
                $('<div/>',{'class':'indicator'})
            );

            // close button
            interline.append(
                $('<img/>',{'class':'close','src':$('#home .domains > .responsive').attr('rel')})
                    .on('click',function() {
                        _close();
                    })
            );

            // image
            var image = domain.children('.expand').find('.left img');
            if (!cfg.structure.dspsmall && typeof(image.attr('rel'))!='undefined') {

                // first load
                image.attr('src',image.attr('rel')).load(function() {
                    _ready(domain,interline);
                });

                image.removeAttr('rel');
                return;
            }

            // display from cache
            _ready(domain,interline);

        }; // _open() end

        /**
         * !! event mouse:click
         */
        $('#home .domains .domain').on('click',function() {

            if ($(this).hasClass('expanded')) { // same to close
                _close();

            } else { // new one or another to open
                _close();
                _open($(this));
            }

        });

        // css clear
        $('#home .domains .domain .expand').append(
            $('<div/>',{'class':'clr'})
        );

    }; // _domains() end

    /**
     * private _services()
     */
    var _services = function() {

        /**
         * private _animate()
         */
        var _animate = function(element,options) {

            if (cfg.structure.dspsmall)
                return;

            element
                .stop(true,false)
                .animate(options.item, {
                    duration: cfg.home.services.duration,
                    easing: cfg.home.services.easing
                });
            element.find('img')
                .stop(true,false)
                .animate(options.img, {
                    duration: cfg.home.services.duration,
                    easing: cfg.home.services.easing
                });
            element.children('.info')
                .stop(true,false)
                .animate(options.info, {
                    duration: cfg.home.services.duration,
                    easing: cfg.home.services.easing
            });

        }; // _animate() end

        /**
         * !! event mouse:move
         */
        $('#home .services').mousemove(function(e) {
            if (!cfg.structure.dspsmall)
                $(this).css('background-position',(e.pageX*-1/10)+'px bottom');
        });

        // waypoint!
        $('#home .services').waypoint({
            triggerOnce: true,
            offset: $('#home .services').outerHeight(true)+200,
            handler: function() {

                // every item
                $.each($('#home .services .item'),function(index,item) {

                    // indicator
                    $(item).children('.info').append(
                        $('<div/>',{'class':'indicator'})
                    );

                    // animate
                    $(item)
                        .delay(cfg.home.services.duration*index)
                        .animate({
                                top: 0,
                                opacity: 1
                            }, {
                                duration: cfg.home.services.duration,
                                easing: cfg.home.domains.easing,
                                complete: function() {

                                    /**
                                     * !! event mouse:enter
                                     */
                                    $(item).on('mouseenter',function() {

                                        _animate($(this), {
                                            item: {top:'15px'},
                                            img: {opacity:0.75},
                                            info: {bottom:'5px',opacity:1}
                                        });

                                    });

                                    /**
                                     * !! event mouse:leave
                                     */
                                    $(item).on('mouseleave',function() {

                                        _animate($(this), {
                                            item: {top:0},
                                            img: {opacity:1},
                                            info: {bottom:'-60px',opacity:0}
                                        });

                                    });

                                }
                            });

                });

            }
        });

    }; // _services() end

    /**
     * _parallax()
     */
    var _parallax = function(element,inertia) {

        // parallax!
        if (!cfg.structure.dspsmall)
            element.parallax('50%',inertia,true);

        // waypoint!
        element.waypoint({
            triggerOnce: true,
            offset: element.outerHeight(true)+200,
            handler: function() {
                element.find('.inner').animate({
                        left: 0,
                        opacity: 1
                    }, {
                        duration: 500,
                        easing: 'easeInOutQuad'
                    });
            }
        });

    }; // _parallax() end

    /**
     * _video()
     */
    var _video = function() {

        // component
        cfg.home.video.teaser = videojs('video_teaser',{
            controls: true,
            preload: 'auto',
            loop: false,
            autoplay: false,
            techOrder: ['html5'],
            width: $('#video_teaser').width(),
            height: $('#video_teaser').height(),
            children: {
                bigPlayButton: true,
                controlBar: {
                    playToggle: false,
                    fullscreenToggle: false,
                    progressControl: false,
                    currentTimeDisplay: false,
                    timeDivider: false,
                    durationDisplay: false,
                    children: {
                        volumeControl: true,
                        muteToggle: true
                    }
                }
            }
        });

        // !! event video:play
        cfg.home.video.teaser.on('play',function() {
            cfg.home.slider.bx.stopAuto();
        });

    }; // _video() end

    // slider adapt
    slider();

    // video
    _video();

    // slider component
    cfg.home.slider.bx = $('#home .slider > ul').bxSlider({
        mode: 'fade',
        minSlides: 1,
        maxSlides: 1,
        slideMargin: 0,
        auto: true,
        pause: cfg.home.slider.delay
    });

    // prepare
    _scrolldown();
    _domains();
    _services();
    _parallax($('#home .appear.expertise'),0.75);
    _parallax($('#home .appear.contributive'),0.75);

}; // homepage() end

/**
 * technology()
 */
var technology = function() {

    if ($('table.specifications').length == 0)
        return;

    // specifications rows color
    $.each($('table.specifications tr.category'),function(index,item) {
        $(item).nextUntil('tr.category','tr:odd').css('background-color','#fdf7e4');
    });

    /**
     * !! event mouse:click
     */
    $('a.goto.anchor').on('click',function(event) {
        event.preventDefault();
        $.smoothScroll({
            scrollTarget: 'h3.anchor.'+$(this).attr('rel'),
            offset: -175
        });
    });

}; // technology() end

/**
 * contact()
 */
var contact = function() {

    if ($('#leaflet').length == 0)
        return;

    // leaflet
    var map = L.map('leaflet',{scrollWheelZoom:false}).setView([46.2189251, 6.0875998999999865],12);

    // openstreetmap
    L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, '
                        + '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC BY-SA</a>'
    }).addTo(map);

    // marker
    L.marker([46.2189251, 6.0875998999999865])
        .addTo(map)
        .bindPopup($('#leaflet-marker').html())
        .openPopup();

    // form
    $('form').on('submit',function(event) {

        var send = true;
        var values = {};

        // reset
        $('form .required').removeClass('err');

        // fields
        $.each($('form .field'),function(index,field) {

            // clean up
            $(field).val($(field).val().trim());

            // data
            _.extend(values,_.object([$(field).attr('name')],[$(field).val()]));

            // mandatory
            if ($(field).hasClass('required') && $(field).val() == '') {
                $(field).addClass('err');
                send = false;
            }

        });

        // send
        if (send) {

            // ajax post
            $.post($('form').attr('action'),values,function(data) {

                // fx
                $('form input.submit').slideUp();
                $('#thankyou').slideDown();
                $('form').fadeTo(300,0.4);

                // scroll
                $.smoothScroll({
                    scrollTarget: '#content',
                    offset: -175
                });

            });

        }

        // prevent default
        return false;
    });

}; // contact() end

/**
 * DOM ready
 */
$(document).ready(function() {

    "use strict";

    // conf
    autoconf();

    // homepage
    if (cfg.home.active)
        homepage();

    // run
    adapt();

    /**
     * !! event document:scroll
     */
    $(document).on('scroll',function() {
        navigation();
    });

    /**
     * !! event window:resize
     */
    $(window).on('resize',function() {
        adapt();
    });

    /**
     * !! event mouse:enter
     */
    $('#languages').on('mouseenter',function() {
        switchlangs(true);
    });

    /**
     * !! event mouse:leave
     */
    $('#languages').on('mouseleave',function() {
        switchlangs(false);
    });

    /**
     * !! event mouse:click
     */
    $('#languages .current').on('click',function() {
        switchlangs();
    });

    // menu
    activemenu();

    // page specific
    technology();

    // page specific
    contact();

}); // DOM ready end
