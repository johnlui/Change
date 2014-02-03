$(document).ready( function (){
	$('ul.bar').addClass('nav');
	$('ul.bar > li > a').each(function (){
		if ($(this).next().is('ul')) {
			rewrite_native_nav_to_dropdown($(this).parent('li'));
		};
		if ($(this).text() === '更多') {
			rewrite_nav_dropdown($(this));
		};
	});

	$('#contentleft').addClass('span6');

	$('.m-nav ul li').first().addClass('first');

	$('#an_article p.readmore a').text('... ... ... ...');

	if (shouye === 0) {
		$('html,body').animate({scrollTop:'370px'},500);
	};


});

$(window).scroll(function (){

	if ($(document).scrollTop()>='257') {
		$('#header .content').css({'top':457-$(document).scrollTop()});
	} else {
		$('#header .content').css({'top':'200px'});
	};

});

var rewrite_native_nav_to_dropdown = function (index_native) {
	index_native.addClass('dropdown');
	index_native.children('a').addClass('dropdown-toggle');
	index_native.children('a').attr('data-toggle','dropdown');
	index_native.children('a').append(' <b class="caret"></b>');
	index_native.children('ul.sub-nav').addClass('dropdown-menu');
}

var rewrite_nav_dropdown = function (index) {
	index.parent().addClass('dropdown');
	index.addClass('dropdown-toggle');
	index.attr('data-toggle','dropdown');
	index.append(' <b class="caret"></b>');
	
	nav_2_html = '';
	index.parent('li').nextAll('li').each(function (){
		//隐藏正常菜单
		$(this).css('display','none');
	
		nav_2_html = nav_2_html + '<li>' + $(this).html() + '</li>';
	});
	index.after('<ul class="dropdown-menu">'+nav_2_html+'</ul>');
};