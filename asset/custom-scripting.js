/*!
 * jQuery JavaScript Library v1.6.4
 * http://jquery.com/
 *
 * Copyright 2011, John Resig
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * Includes Sizzle.js
 * http://sizzlejs.com/
 * Copyright 2011, The Dojo Foundation
 * Released under the MIT, BSD, and GPL Licenses.
 *
 * Date: Mon Sep 12 18:54:48 2011 -0400
 */

$(document).bind("mobileinit", function(){
	$.extend(  $.mobile , {
		foo: bar
	});	
});


$(document).ready(function() {
  $('#box-left').bind('tap', function(event) {
    alert('The mouse cursor is at ('
      + event.pageX + ', ' + event.pageY + ')');
  });
  $('#box-left').bind('swipeleft', function(event) {
    alert('left');
  });
  $('#box-left').bind('swiperight', function(event) {
    alert('right');
  });
});

