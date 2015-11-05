@extends('layout.main')
{{-- Start head --}}
@section('title')
    {{ $title }}
@stop
@section('description')
    {{ $description }}
@stop
@section('keywords')
    {{ $keywords }}
@stop
{{-- End head --}}

@section('page-content')

	

</div><!-- end post -->
<div class="clear"></div>
	</div><!-- end .postWrap --></div>
@stop
@section('footer-script')
	<script>
	    
	    /*
 *  v0.2b - jQuery plugin
 * Copyright (c) 2008 Joel Birch
 * Dual licensed under the MIT and GPL licenses:
 * 	http://www.opensource.org/licenses/mit-license.php
 * 	http://www.gnu.org/licenses/gpl.html
 */


		// (function(a) {
		// 	a.fn.supersubs=function(h) {
		// 		var f=a.extend({},a.fn.supersubs.defaults,h);
		// 	}
		// })(jQuery);

	// header menu
	jQuery(document).ready(function($) {
		(function(a) {
    a.fn.supersubs = function(h) {
    	console.log(a);
        var f = a.extend({}, a.fn.supersubs.defaults, h);
        return this.each(function() {
        	console.log(a);
            var c = a(this),
                d = a.meta ? a.extend({}, f, c.data()) : f,
                h = a('<li id="menu-fontsize">&#8212;</li>').css({
                    padding: 0,
                    position: "absolute",
                    top: "-999em",
                    width: "auto"
                }).appendTo(c).width();
            a("#menu-fontsize").remove();
            $ULs = c.find("ul");
            $ULs.each(function(e) {
                e = $ULs.eq(e);
                var g = e.children(),
                    c = g.children("a"),
                    f = g.css("white-space", "nowrap").css("float"),
                    b = e.add(g).add(c).css({
                        "float": "none",
                        width: "auto"
                    }).end().end()[0].clientWidth /
                    h,
                    b = b + d.extraWidth;
                b > d.maxWidth ? b = d.maxWidth : b < d.minWidth && (b = d.minWidth);
                b += "em";
                e.css("width", b);
                g.css({
                    "float": f,
                    width: "100%",
                    "white-space": "normal"
                }).each(function() {
                    var c = a(">ul", this),
                        d = void 0 !== c.css("left") ? "left" : "right";
                    c.css(d, b)
                })
            })
        })
    };
    a.fn.supersubs.defaults = {
        minWidth: 9,
        maxWidth: 25,
        extraWidth: 0
    }
})(jQuery);
    jQuery('.main-nav .sf-menu').supersubs({
        minWidth: 10, // minimum width of sub-menus in em units
        maxWidth: 40, // maximum width of sub-menus in em units
        extraWidth: 1 // extra width can ensure lines don't sometimes turn over
    },console.log('e'));
		
	});

var tdDetect = {};

( function(){
    "use strict";
    tdDetect = {
        isIe8: false,
        isIe9 : false,
        isIe10 : false,
        isIe11 : false,
        isIe : false,
        isSafari : false,
        isChrome : false,
        isIpad : false,
        isTouchDevice : false,
        hasHistory : false,
        isPhoneScreen : false,
        isIos : false,
        isAndroid : false,
        isOsx : false,
        isFirefox : false,
        isWinOs : false,
        isMobileDevice:false,
        htmlJqueryObj:null, //here we keep the jQuery object for the HTML element

        /**
         * function to check the phone screen
         * @see td_events
         * The jQuery windows width is not reliable cross browser!
         */
        runIsPhoneScreen: function () {
            if ( (jQuery(window).width() < 768 || jQuery(window).height() < 768) && false === tdDetect.isIpad ) {
                tdDetect.isPhoneScreen = true;

            } else {
                tdDetect.isPhoneScreen = false;
            }
        },


        set: function (detector_name, value) {
            tdDetect[detector_name] = value;
            //alert('tdDetect: ' + detector_name + ': ' + value);
        }
    };


    tdDetect.htmlJqueryObj = jQuery('html');


    // is touch device ?
    if ( -1 !== navigator.appVersion.indexOf("Win") ) {
        tdDetect.set('isWinOs', true);
    }

    // it looks like it has to have ontouchstart in window and NOT be windows OS. Why? we don't know.
    if ( !!('ontouchstart' in window) && !tdDetect.isWinOs ) {
        tdDetect.set('isTouchDevice', true);
    }


    // detect ie8
    if ( tdDetect.htmlJqueryObj.is('.ie8') ) {
        tdDetect.set('isIe8', true);
        tdDetect.set('isIe', true);
    }

    // detect ie9
    if ( tdDetect.htmlJqueryObj.is('.ie9') ) {
        tdDetect.set('isIe9', true);
        tdDetect.set('isIe', true);
    }

    // detect ie10 - also adds the ie10 class //it also detects windows mobile IE as IE10
    if( navigator.userAgent.indexOf("MSIE 10.0") > -1 ){
        tdDetect.set('isIe10', true);
        tdDetect.set('isIe', true);
    }

    //ie 11 check - also adds the ie11 class - it may detect ie on windows mobile
    if ( !!navigator.userAgent.match(/Trident.*rv\:11\./) ){
        tdDetect.set('isIe11', true);
        //this.isIe = true; //do not flag ie11 as isIe
    }


    //do we have html5 history support?
    if (window.history && window.history.pushState) {
        tdDetect.set('hasHistory', true);
    }

    //check for safary
    if ( -1 !== navigator.userAgent.indexOf('Safari')  && -1 === navigator.userAgent.indexOf('Chrome') ) {
        tdDetect.set('isSafari', true);
    }

    //chrome and chrome-ium check
    if (/chrom(e|ium)/.test(navigator.userAgent.toLowerCase())) {
        tdDetect.set('isChrome', true);
    }

    if ( null !== navigator.userAgent.match(/iPad/i)) {
        tdDetect.set('isIpad', true);
    }


    if (/(iPad|iPhone|iPod)/g.test( navigator.userAgent )) {
        tdDetect.set('isIos', true);
    }


    //detect if we run on a mobile device - ipad included - used by the modal / scroll to @see scrollIntoView
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        tdDetect.set('isMobileDevice', true);
    }

    tdDetect.runIsPhoneScreen();

    //test for android
    var user_agent = navigator.userAgent.toLowerCase();
    if ( user_agent.indexOf("android") > -1 ) {
        tdDetect.set('isAndroid', true);
    }


    if ( -1 !== navigator.userAgent.indexOf('Mac OS X') ) {
        tdDetect.set('isOsx', true);
    }

    if ( -1 !== navigator.userAgent.indexOf('Firefox') ) {
        tdDetect.set('isFirefox', true);
    }

})();
/*
 * Superfish v1.5.13 - jQuery menu widget
 * Copyright (c) 2013 Joel Birch
 *
 * Dual licensed under the MIT and GPL licenses:
 * 	http://www.opensource.org/licenses/mit-license.php
 * 	http://www.gnu.org/licenses/gpl.html
 *
 */
(function(c){c.fn.superfish=function(d){var f=c.fn.superfish,a=f.c,g=c('<i class="'+a.arrowClass+'"></i>'),h=function(){var e=c(this),b=l(e);clearTimeout(b.sfTimer);e.showSuperfishUl().siblings().hideSuperfishUl()},j=function(e){var b=c(this),d=l(b),a=f.op,g=function(){a.retainPath=-1<c.inArray(b[0],a.$path);b.hideSuperfishUl();a.$path.length&&1>b.parents("li."+a.hoverClass).length&&(a.onIdle.call(),c.proxy(h,a.$path,e)())};"click"===e.type?g():(clearTimeout(d.sfTimer),d.sfTimer=setTimeout(g,
    a.delay))},l=function(e){e.hasClass(a.menuClass)&&c.error("Superfish requires you to update to a version of hoverIntent that supports event-delegation, such as this one: https://github.com/joeldbirch/onHoverIntent");e=e.closest("."+a.menuClass)[0];f.op=f.o[e.serial];return e},n=function(e){var b=c(this),a=b.siblings("ul");if(0<a.length&&!a.is(":visible")&&(b.data("follow",!1),"MSPointerDown"===e.type))return b.trigger("focus"),!1},p=function(a){var b=c(this),d=b.siblings("ul"),g=!1===b.data("follow")?
    !1:!0;if(d.length&&(f.op.useClick||!g))a.preventDefault(),d.is(":visible")?f.op.useClick&&g&&c.proxy(j,b.parent("li"),a)():c.proxy(h,b.parent("li"))()};return this.addClass(a.menuClass).each(function(){var e=this.serial=f.o.length,b=c.extend({},f.defaults,d),k=c(this),l=k.find("li:has(ul)");b.$path=k.find("li."+b.pathClass).slice(0,b.pathLevels).each(function(){c(this).addClass(b.hoverClass+" "+a.bcClass).filter("li:has(ul)").removeClass(b.pathClass)});f.o[e]=f.op=b;b.autoArrows&&l.children("a").each(function(){c(this).addClass(a.anchorClass).append(g.clone())});
    k.css("ms-touch-action","none");if(!f.op.useClick)if(c.fn.hoverIntent&&!f.op.disableHI)k.hoverIntent(h,j,"li:has(ul)");else k.on("mouseenter","li:has(ul)",h).on("mouseleave","li:has(ul)",j);e="MSPointerDown";navigator.userAgent.toLowerCase().match(/(iphone|ipod|ipad)/)||(e+=" touchstart");k.on("focusin","li",h).on("focusout","li",j).on("click","a",p).on(e,"a",n);l.not("."+a.bcClass).children("ul").show().hide();b.onInit.call(this)})};var g=c.fn.superfish;g.o=[];g.op={};g.c={bcClass:"sf-breadcrumb",
    menuClass:"sf-js-enabled",anchorClass:"sf-with-ul",arrowClass:"td-icon-menu-down"};g.defaults={hoverClass:"sfHover",pathClass:"overideThisToUse",pathLevels:1,delay:800,animation:{opacity:"show"},animationOut:{opacity:"hide"},speed:"normal",speedOut:"fast",autoArrows:!0,disableHI:!1,useClick:!1,onInit:function(){},onBeforeShow:function(){},onShow:function(){},onHide:function(){},onIdle:function(){}};c.fn.extend({hideSuperfishUl:function(){var d=g.op,f=this,a=!0===d.retainPath?d.$path:"";d.retainPath=
    !1;c("li."+d.hoverClass,this).add(this).not(a).children("ul").stop(!0,!0).animate(d.animationOut,d.speedOut,function(){$ul=c(this);$ul.parent().removeClass(d.hoverClass);d.onHide.call($ul);g.op.useClick&&f.children("a").data("follow",!1)});return this},showSuperfishUl:function(){var d=g.op,f=this,a=this.children("ul");f.addClass(d.hoverClass);d.onBeforeShow.call(a);a.stop(!0,!0).animate(d.animation,d.speed,function(){d.onShow.call(a);f.children("a").data("follow",!0)});var m=c(window).width(),h=this.children("ul").first();
    if(0<h.length){var j=this.children("ul").first().offset().left+h.width();j>m&&(h.parent().parent().hasClass("sf-menu")?h.css("left","-"+(j-m)+"px"):h.addClass("reversed").css("left","-"+(h.width()+0)+"px"))}return this}})})(jQuery);

//handles open/close mobile menu
function td_mobile_menu_toogle() {

    jQuery('#td-mobile-nav .menu-item-has-children ul').hide();

    //move thru all the menu and find the item with sub-menues to atach a custom class to them
    jQuery(document).find('#td-mobile-nav .menu-item-has-children').each(function(i) {

        var class_name = 'td_mobile_elem_with_submenu_' + i;
        jQuery(this).addClass(class_name);

        //add an element to click on
        //jQuery(this).children("a").append('<div class="td-element-after" data-parent-class="' + class_name + '"></div>');
        jQuery(this).children("a").append('<i class="td-icon-menu-down td-element-after" data-parent-class="' + class_name + '"></i>');


        //click on link elements with #
        jQuery(this).children("a").addClass("td-link-element-after").attr("data-parent-class", class_name);
    });

    jQuery(".td-element-after, .td-link-element-after").click(function(event) {

        if(jQuery(this).hasClass("td-element-after") || jQuery(this).attr("href") == "#" ){
            event.preventDefault();
            event.stopPropagation();
        }


        //take the li parent class
        var parent_class = jQuery(this).data('parent-class');

        //target the sub-menu to open
        var target_to_open = '#td-mobile-nav .' + parent_class + ' > a + ul';
        if(jQuery(target_to_open).css('display') == 'none') {
            jQuery(target_to_open).show();
        } else {
            jQuery(target_to_open).hide();
        }


    });
}
function td_retina() {
    if (window.devicePixelRatio > 1) {
        jQuery('.td-retina').each(function(i) {
            var lowres = jQuery(this).attr('src');
            var highres = lowres.replace(".png", "@2x.png");
            highres = highres.replace(".jpg", "@2x.jpg");
            jQuery(this).attr('src', highres);

        });


        //custom logo support
        jQuery('.td-retina-data').each(function(i) {
            jQuery(this).attr('src', jQuery(this).data('retina'));
            //fix logo aligment on retina devices
            jQuery(this).addClass('td-retina-version');
        });

    }
}
td_retina();
 td_mobile_menu_toogle();

if (tdDetect.isTouchDevice) {
    //touch
    jQuery('#td-header-menu .sf-menu').superfish({
        delay:300,
        speed:'fast',
        useClick:true
    });

} else {

    //not touch
    jQuery('#td-header-menu .sf-menu').superfish({
        delay:600,
        speed:200,
        useClick:false
    });
}












			function tdAjaxSubCatMegaRun(event, jQueryObject) {
	            /* global this:false */
	            //get the current block id
	            var currentBlockUid = jQueryObject.data('td_block_id');
	            var currentBlockObj = tdBlocks.tdGetBlockObjById(currentBlockUid);

	            // on mega menu, we allow parallel ajax request for better UI. We set is_ajax_running so that the preloader cache will work as expected
	            currentBlockObj.is_ajax_running = true;

	            //switch cur cat
	            jQuery('.mega-menu-sub-cat-' + currentBlockUid).removeClass('cur-sub-cat');
	            jQueryObject.addClass('cur-sub-cat');

	            //get current block


	            //change current filter value - the filter type is readed by td_ajax from the atts of the shortcode
	            currentBlockObj.td_filter_value = jQueryObject.data('td_filter_value');

	            currentBlockObj.td_current_page = 1; //reset the page

	            //do request
	            tdBlocks.tdAjaxDoBlockRequest(currentBlockObj, 'mega_menu');
	        }
				
			jQuery(".block-mega-child-cats a").hover( function(event) {
                tdAjaxSubCatMegaRun(event, jQuery(this));
            }, function (event) {} );


	(function(a){
		a.fn.menu = function(h) {
			var f = a.extend({}, a.fn.myplugin, h);
			
		}
	};
		a.fn.menu.defaults = {
			minWidth:9,
			maxWidth:25,
			extraWidth
		}
	)(jQuery);

	$('.sf-menu').menu({

	});

	</script>

@stop