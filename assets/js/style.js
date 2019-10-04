$(document).ready(function(){
	$('img').addClass('img-fluid');
});

// Hamburger
function btnbar(x){
	x.classList.toggle("change");
}

// Affix
$(document).ready(function(){
	var toggleAffix = function(affixElement, scrollElement, wrapper) {
		var height = affixElement.outerHeight(),
		top = wrapper.offset().top;

		if (scrollElement.scrollTop() >= top){
			wrapper.height(height);
			affixElement.addClass("fixed-top");
		} else {
			affixElement.removeClass("fixed-top");
			wrapper.height('auto');
		}
	};
	$('[data-toggle="affix"]').each(function() {
		var ele = $(this),
		wrapper = $('<div></div>');

		ele.before(wrapper);

		$(window).on('scroll resize', function() {
			toggleAffix(ele, $(this), wrapper);
		});

		toggleAffix(ele, $(window), wrapper);
	});  
});

// input empty button disabled
$(document).ready(function() {
    $('.field input').keyup(function() {

        var empty = false;
        $('.field input').each(function() {
            if ($(this).val().length == 0) {
                empty = true;
            }
        });

        if (empty) {
            $('.actions button').attr('disabled', 'disabled');
        } else {
            $('.actions button').removeAttr('disabled');
        }
    });
});

// disable on submit
function disable(){
    var btn = document.getElementById('btn');
    btn.disabled = true;
    btn.innerHTML = 'Memproses...';
}

// sidebar admin
$(document).ready(function () {
	$('#sidebarCollapse').on('click', function () {
		$('#sidebar').toggleClass('active');
	});
});