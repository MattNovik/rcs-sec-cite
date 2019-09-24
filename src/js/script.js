"use strict"
var slider = Peppermint(document.getElementById('peppermint'),{
	dots: true,
	slideshow: true,
	speed: 2500,
	slideshowInterval: 5000,
	stopSlideshowAfterInteraction: true
});
var inputName = document.querySelector(".name");
var inputMail = document.querySelector(".mail");
var inputTelephone = document.querySelector(".telephone");
var inputCompany = document.querySelector(".company");
var formBackcall = document.querySelector(".form_backcall");
var input = formBackcall.querySelectorAll("input");

// catch hover and focus/blur on input for changing style form 

for (var i = 0; i < input.length;i++) {
	input[i].addEventListener('focus',function () {
		if (formBackcall.classList.contains("op")) {
			return;
		} else {
			formBackcall.classList.add("op");
		}
	});
	input[i].addEventListener('blur',function () {
		if (formBackcall.classList.contains("op")) {
			formBackcall.classList.remove("op");
		}
	});
}

	formBackcall.addEventListener('mouseover', function () {
		if (formBackcall.classList.contains("ops")) {
			return;
		} else {
			formBackcall.classList.add("ops");
		}
	});

	formBackcall.addEventListener('mouseout', function () {
		if (formBackcall.classList.contains("ops")) {
			formBackcall.classList.remove("ops");
		};
	});
var order = document.getElementById('order');
var form = document.querySelector(".form");
var html = document.querySelector("html");
var cancel = document.querySelector(".cancel");

	order.onclick = function () {
		form.style.visibility = "visible";
		html.style.overflow = "hidden";
	}
	cancel.onclick = function () {
		form.style.visibility = "hidden";
		html.style.overflow = "auto";		
		html.style.overflowY = "auto";
		html.style.overflowX = "hidden";
	}

	function checkParams() {
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();

        if (name.length != 0 && email.length >= 6 && phone.length >= 10) {
            $('#submit2').removeAttr('disabled');
        } else {
            $('#submit2').attr('disabled', 'disabled');
        }
    }

var navToggle = document.getElementById('navToggle');
var overlay = document.querySelector('.overlay')
	navToggle.onclick = function () {
		this.classList.toggle("active");
		overlay.classList.toggle('open')
	}


var services = document.querySelector(".services");
var formBackcall = document.querySelector(".form_backcall");

services.onmouseover= function () {
    if (!formBackcall.classList.contains('close')) {
        formBackcall.classList.remove('stand');
        formBackcall.classList.add('close');

    }
};
services.onmouseout = function () {
    if (formBackcall.classList.contains('close')) {
        formBackcall.classList.remove('close');
        formBackcall.classList.add('stand');
    }
};