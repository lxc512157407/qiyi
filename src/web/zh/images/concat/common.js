function debounce(fn, delay) {
	var timer;
	var lastExec = 0;

	return function() {
		var that = this;
		var args = arguments;
		var diff;
		var curr;

		function exec() {
			lastExec = new Date().getTime();
			fn.apply(that, args);
		}

		timer && clearTimeout(timer);

		timer = setTimeout(exec, delay);
	};
}

function throttle(callback, limit) {
	let wait = false;
	return function() {
		if (!wait) {
			callback.apply(this, arguments);
			wait = true;
			setTimeout(function() {
				wait = false;
			}, limit);
		}
	};
}

// lazyShow
function lazyShow(element) {
	var $element = $(element);
	var onScroll = function () {
		var bottom = $element.offset().top + $element.height() / 2 - 10;
		var scrollPosition = window.scrollY || window.pageYOffset;
		var bottomWindow = scrollPosition + window.innerHeight;

		if (bottom < bottomWindow) {
			$element.css('opacity', '1');
			$element.css('transform', 'none');
			$(window).off('scroll', onScroll);
		}
	}
	onScroll();
	$(window).on('scroll', onScroll);
}
var headerHighlight={
	"/": "home",
	"/default.mi": "home",
	"/brands.mi": "brands",
	"/error.mi": "",
	"/feedback.mi": "feedback",
	"/look-no-further-terms.mi": "",
	"/mobile-app.mi": "mobile",
	"/mobile-app/mobile-key-hotel-list.mi": "",
	"/privacy.mi": "",
	"/rewards-terms.mi": "",
	"/rewards.mi": "rewards",
	"/rewards/members-benefits.mi": "rewards",
	"/rewards/moments.mi": "rewards",
	"/rewards/tutorial-moments.mi": "rewards",
	"/rewards/tutorial-signin.mi": "rewards",
	"/terms-of-use.mi": ""
}
var $window = $(window);
var $doc = $(document);

$(function() {
	var $top = $('.back-top');

	var $bg1 = $('.scroll-bg.bg1');
	var $bg2 = $('.scroll-bg.bg2');
	var $sec2 = $('.sec2');

	$window.on('scroll', debounce(function(event) {
		var scrollTop = $window.scrollTop();

		if (scrollTop > $window.height() * 0.5) {
			$top.fadeIn(200);
		} else {
			$top.fadeOut(200);
		}
	}, 100));

	$window.triggerHandler('scroll');

	$top.on('click', function(event) {
		$window.scrollTop(0);
	});

	if ($bg2.length > 0) {
		$window.on('scroll', function(event) {
			var scrollTop = $window.scrollTop();

			if (scrollTop > $sec2.offset().top) {
				$bg2.css('display', 'block');
				$bg1.css('display', 'none');
			} else {
				$bg2.css('display', 'none');
				$bg1.css('display', 'block');
			}
		});
	}

	if ($window.width() < 768) {
		$window.on('scroll', function(event) {
			var scrollTop = $doc.scrollTop();

			if (scrollTop > 10) {
				$('.icon-more-content').css('display', 'none');
			} else {
				$('.icon-more-content').css('display', 'block');
			}
		});

		// 手机上显示微信二维码
		$('.show-popup-qrcode').on('touchend', function() {
			$('.popup-qrcode').toggle();
			return false;
		});
		$('.popup-qrcode').on('touchend', function() {
			return false;
		});

		$('.show-feizhu-qrcode').on('touchend', function() {
			$('.feizhu-qrcode').toggle();
			return false;
		});
		$('.feizhu-qrcode').on('touchend', function() {
			return false;
		});

		// 移动版显示微信二维码
		$('.show-service-qrcode').on('touchend', function(event) {
			$(this).hide();
			$('.service-qrcode').show();
			return false;
		});
		$('.service-qrcode').on('touchend', function() {
			return false;
		});

		$doc.on('touchend', function() {
			if ($('.service-qrcode').is(':visible')) {
				$('.service-qrcode').hide();
				$('.show-service-qrcode').show();
			}
		});

		// 手机版benefit表格做切换
		var benefitSwiper = new Swiper('#benefitSwiper', {
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			}
		});
	}
});

$(function() {
	// 移动版显示菜单
	$('.header  .menu-cont').on('click', function() {
		var $header = $('.header');
		$header.toggleClass('show-navi');
	});

	// 当前菜单项突出
	var _escapeKeys = {
	  '&': '&amp;',
	  '<': '&lt;',
	  '>': '&gt;',
	  '"': '&quot;',
	  "'": '&#x27;',
	  '`': '&#x60;',
	  '=': '&#x3D;'
	};

	var _badChars = /[&<>"'`=]/g;

	function _escapeChar(chr) {
	  return _escapeKeys[chr];
	}

	function getSafeString(str) {
		return str.replace(_badChars, _escapeChar);
	}

	var safeUrl = getSafeString(window.location.pathname);
	var pageName=headerHighlight[safeUrl];

	$('.header [data-page="' + pageName + '"]').addClass('current');


	if($('#kvSwiper .swiper-slide').length > 1)
	{
		// kv swiper
		var homeSwiper = new Swiper('#kvSwiper', {
			speed: 1000,
			loop: true,
			breakpoints: {
				768: {
					speed: 500,
				}
			},
			autoplay: {
				delay: 6000,
				disableOnInteraction: false
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
		});
	}
	

	// homepage resv swiper
	var resvSwiper = new Swiper('#resvSwiper', {
		speed: 1200,
		loop: true,
		autoplay: {
			delay: 6000,
		},
		breakpoints: {
			768: {
				speed: 600,
			}
		},
		effect: 'fade',
		fadeEffect: {crossFade: true},
		threshold: 50,
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
			renderBullet: function(index, className) {
				return '<a class="' + className + '"><i class="icon-0' + (index + 1) + '"></i></a>';
			},
		},
	});
	if ($('#resvSwiper').length && $window.width() < 768) {
		resvSwiper.autoplay.stop();

		$window.on('scroll.resvSwiper', function() {
			if ($window.scrollTop() > $('.sec2').offset().top + 100) {
				resvSwiper.autoplay.start();
				$window.off('scroll.resvSwiper');
			}
		});
	}

	// moments landing
	new Swiper('.moments-swiper .swiper-container', {
		loop: true,
		spaceBetween: 45,
		slidesPerView: 3,
		slidesOffsetBefore: $(document).width() / 6,
		breakpoints: {
			768: {
				spaceBetween: 20,
				slidesPerView: 'auto',
				centeredSlides: true,
				slidesOffsetBefore: 0
			}
		}
	});
});

$(function() {
	// 监控代码
	$('.wrapper').on('click', '[data-tracking]', function(event) {
		var $el = $(this);
		var tracking = $el.data('tracking');

		tracking = tracking.split(',');

		gtag('event', tracking[1], {
			'event_category': tracking[0],
			'event_label': tracking[2] || '',
		});

		if ($el.is('a')) {
			var href = $el.attr('href');
			if (href && href != '#' && href.indexOf('javascript') !== 0 && $el.attr('target') != '_blank' && $el.attr('rel') == 'external') {
				setTimeout(function() {
					location.href = href;
				}, 200);

				return false;
			}
		}
	});
	// feedback表单提交
	$('.feedback-form').on('submit', function(event) {
		event.preventDefault();
		var $feedback = $('[name="feedback"]', this);
		if ($.trim($feedback.val()) == '') {
			$feedback.closest('.form-item').addClass('error');
			return false;
		} else {
			$feedback.closest('.form-item').removeClass('error');
		}

		var data = $(this).serializeArray().reduce(function(payload, obj) {
			payload[obj.name] = obj.value;
			return payload;
		}, {});
		$.ajax({
			method: "post",
			url: $(this).attr('action'),
			dataType: 'json',
			contentType: "application/json",
			data: JSON.stringify(data), // serializes the form's elements.
			success: function(data) {
				$('.feedback-form').hide();
				$('.feedback-result-success').show();
			},
			error: function(){
				$('.feedback-form').hide();
				$('.feedback-result-error').show();
			}
		});

	});

	// tab
	$('[data-tab=""]').each(function () {
		var $headers = $(this).find('.tab-header');
		var $contents = $(this).find('.tab-content');
		$headers.each(function (index) {
			$(this).on('click', function () {
				$headers.removeClass('active');
				$contents.removeClass('active');
				$($headers[index]).addClass('active');
				$($contents[index]).addClass('active');
			});
		});
		$('.change-active').on('click', function(event) {
			event.preventDefault();
			$headers.removeClass('active');
			$contents.removeClass('active');
			$($headers[1]).addClass('active');
			$($contents[1]).addClass('active');
			window.scrollTo(0, 0);
		});
	});

	// 执行文字动画
	$('[data-lazy-show]').each(function() {
		lazyShow(this);
	});

	// 品牌页跳转
	var hash = location.hash;
	var $target = $(hash + '-brand');
	if ($target.length) {
		var brandst = parseInt($target.offset().top - $('.header').height(), 10);
		$window.scrollTop(brandst);
	}

	// terms的锚点跳转
	$('.terms3 .tabs li a').on('click', function(event) {
		const target = $(this.hash);

		if (target.length) {
			$(window).scrollTop(target.offset().top - 120);
			return false;
		}
	});
});


var swiper = new Swiper('.swiper2', {

  navigation: {
	nextEl: '#next2',
	prevEl: '#prev2',
  },
});

var swiper = new Swiper('.swiper3', {

	navigation: {
	  nextEl: '#next3',
	  prevEl: '#prev3',
	},
  });
  
