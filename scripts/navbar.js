$(document).ready(function () {
	'use strict';
    var loc = $(location).attr('href');
    $('ul.nav a').filter(function () {
        return this.href === loc;
    }).closest('li').addClass('active');
});