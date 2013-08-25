$(document).ready(function()
	{
		var i = 101;

		$(window).scroll(function()
		{
			var pos = $(window).scrollTop();
			if (pos > 101) {
				i = pos;
			}

			if (i < 1000)
			{
				$('.blurry_bg').css({ 'opacity': '.'+i});
				// i++;
			}
			else if (i > 1000)
			{
				$('.blurry_bg').css({ 'opacity': '1000'});
			};

		});
	});