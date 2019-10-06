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

//запустить Peppermint и сохранить API
var slider = //сохранить ссылки на HTML-ноды
    rightArr = document.getElementById('right-arr'),
    leftArr = document.getElementById('left-arr'),
    getSlidesNumberButton = document.getElementById('getslidesnumber');

//клик по `#right-arr` переключит на следующий слайд
rightArr.addEventListener('click', slider.next, false);

//клик по `#left-arr` переключит на предыдущий слайд
leftArr.addEventListener('click', slider.prev, false);

//клик по `#getslidesnumber` покажет количество слайдов
getSlidesNumberButton.addEventListener('click', function() {
  alert('There are ' + slider.getSlidesNumber() + ' slides');
}, false);


var formOrg = document.querySelector(".form-row_wrapper_org");
var formOrgInput = document.querySelector(".org");
var orgName = document.querySelector(".orgName");
var closeSvg = document.querySelector(".close-svg");



formOrgInput.onfocus = function () {
	if (!formOrgInput.classList.contains("focusInp") && !orgName.classList.contains("focusName") && !formOrg.classList.contains("focusFormRow") && 
		!closeSvg.classList.contains("focusClose")) {
		formOrgInput.classList.remove("blurInp");
		orgName.classList.remove("blurName");
		formOrg.classList.remove("blurFormRow");
		closeSvg.classList.remove("blurClose");

		formOrgInput.classList.add("focusInp");
		orgName.classList.add("focusName");
		formOrg.classList.add("focusFormRow");
		closeSvg.classList.add("focusClose");
		}
};
formOrgInput.onblur = function () {
	if (!formOrgInput.classList.contains("blurInp") && !orgName.classList.contains("blurName") && !formOrg.classList.contains("blurFormRow") && 
		!closeSvg.classList.contains("blurClose") && formOrgInput.value.length === 0) {

		formOrgInput.classList.remove("focusInp");
		orgName.classList.remove("focusName");
		formOrg.classList.remove("focusFormRow");
		closeSvg.classList.remove("focusClose");


		formOrgInput.classList.add("blurInp");
		orgName.classList.add("blurName");
		formOrg.classList.add("blurFormRow");
		closeSvg.classList.add("blurClose");




		}
};
closeSvg.onclick = function () {
	if (!formOrgInput.classList.contains("blurInp") && !orgName.classList.contains("blurName") && !formOrg.classList.contains("blurFormRow") && 
		!closeSvg.classList.contains("blurClose")) {
		formOrgInput.classList.remove("focusInp");
		orgName.classList.remove("focusName");
		formOrg.classList.remove("focusFormRow");
		closeSvg.classList.remove("focusClose");


		formOrgInput.classList.add("blurInp");
		orgName.classList.add("blurName");
		formOrg.classList.add("blurFormRow");
		closeSvg.classList.add("blurClose");
		}
};


/*Script for formRowName*/
var formName = document.querySelector(".form-row_wrapper_name");
var formNameInput = document.querySelector(".contName");
var nameName = document.querySelector(".nameName");
var closeSvgName = document.querySelector(".close-svg_name");



formNameInput.onfocus = function () {
	if (!formNameInput.classList.contains("focusInp") && !nameName.classList.contains("focusName") && !formName.classList.contains("focusFormRow") && 
		!closeSvgName.classList.contains("focusClose")) {
		formNameInput.classList.remove("blurInp");
		nameName.classList.remove("blurName");
		formName.classList.remove("blurFormRow");
		closeSvgName.classList.remove("blurClose");

		formNameInput.classList.add("focusInp");
		nameName.classList.add("focusName");
		formName.classList.add("focusFormRow");
		closeSvgName.classList.add("focusClose");
		}
};
formNameInput.onblur = function () {
	if (!formNameInput.classList.contains("blurInp") && !nameName.classList.contains("blurName") && !formName.classList.contains("blurFormRow") && 
		!closeSvgName.classList.contains("blurClose") && formNameInput.value.length === 0) {

		formNameInput.classList.remove("focusInp");
		nameName.classList.remove("focusName");
		formName.classList.remove("focusFormRow");
		closeSvgName.classList.remove("focusClose");

		formNameInput.classList.add("blurInp");
		nameName.classList.add("blurName");
		formName.classList.add("blurFormRow");
		closeSvgName.classList.add("blurClose");
		}
};
closeSvgName.onclick = function () {
	if (!formNameInput.classList.contains("blurInp") && !nameName.classList.contains("blurName") && !formName.classList.contains("blurFormRow") && 
		!closeSvgName.classList.contains("blurClose")) {
		formNameInput.classList.remove("focusInp");
		nameName.classList.remove("focusName");
		formName.classList.remove("focusFormRow");
		closeSvgName.classList.remove("focusClose");

		formNameInput.classList.add("blurInp");
		nameName.classList.add("blurName");
		formName.classList.add("blurFormRow");
		closeSvgName.classList.add("blurClose");
		}
};

/*Script for formRowTel*/
var formTel = document.querySelector(".form-row_wrapper_tel");
var formTelInput = document.querySelector(".contTel");
var nameTel = document.querySelector(".nameTel");
var closeSvgTel = document.querySelector(".close-svg_tel");



formTelInput.onfocus = function () {
	if (!formTelInput.classList.contains("focusInp") && !nameTel.classList.contains("focusName") && !formTel.classList.contains("focusFormRow") && 
		!closeSvgTel.classList.contains("focusClose")) {
		formTelInput.classList.remove("blurInp");
		nameTel.classList.remove("blurName");
		formTel.classList.remove("blurFormRow");
		closeSvgTel.classList.remove("blurClose");

		formTelInput.classList.add("focusInp");
		nameTel.classList.add("focusName");
		formTel.classList.add("focusFormRow");
		closeSvgTel.classList.add("focusClose");
		}
};
formTelInput.onblur = function () {
	if (!formTelInput.classList.contains("blurInp") && !nameTel.classList.contains("blurName") && !formTel.classList.contains("blurFormRow") && 
		!closeSvgTel.classList.contains("blurClose") && formTelInput.value.length === 0) {

		formTelInput.classList.remove("focusInp");
		nameTel.classList.remove("focusName");
		formTel.classList.remove("focusFormRow");
		closeSvgTel.classList.remove("focusClose");

		formTelInput.classList.add("blurInp");
		nameTel.classList.add("blurName");
		formTel.classList.add("blurFormRow");
		closeSvgTel.classList.add("blurClose");
		}
};
closeSvgTel.onclick = function () {
	if (!formTelInput.classList.contains("blurInp") && !nameTel.classList.contains("blurName") && !formTel.classList.contains("blurFormRow") && 
		!closeSvgTel.classList.contains("blurClose")) {
		formTelInput.classList.remove("focusInp");
		nameTel.classList.remove("focusName");
		formTel.classList.remove("focusFormRow");
		closeSvgTel.classList.remove("focusClose");

		formTelInput.classList.add("blurInp");
		nameTel.classList.add("blurName");
		formTel.classList.add("blurFormRow");
		closeSvgTel.classList.add("blurClose");
		}
};

/*Script for formRowTel*/
var formMail = document.querySelector(".form-row_wrapper_mail");
var formMailInput = document.querySelector(".contMail");
var nameMail = document.querySelector(".nameMail");
var closeSvgMail = document.querySelector(".close-svg_mail");



formMailInput.onfocus = function () {
	if (!formMailInput.classList.contains("focusInp") && !nameMail.classList.contains("focusName") && !formMail.classList.contains("focusFormRow") && 
		!closeSvgMail.classList.contains("focusClose")) {
		formMailInput.classList.remove("blurInp");
		nameMail.classList.remove("blurName");
		formMail.classList.remove("blurFormRow");
		closeSvgMail.classList.remove("blurClose");

		formMailInput.classList.add("focusInp");
		nameMail.classList.add("focusName");
		formMail.classList.add("focusFormRow");
		closeSvgMail.classList.add("focusClose");
		}
};
formMailInput.onblur = function () {
	if (!formMailInput.classList.contains("blurInp") && !nameMail.classList.contains("blurName") && !formMail.classList.contains("blurFormRow") && 
		!closeSvgMail.classList.contains("blurClose") && formMailInput.value.length === 0) {

		formMailInput.classList.remove("focusInp");
		nameMail.classList.remove("focusName");
		formMail.classList.remove("focusFormRow");
		closeSvgMail.classList.remove("focusClose");

		formMailInput.classList.add("blurInp");
		nameMail.classList.add("blurName");
		formMail.classList.add("blurFormRow");
		closeSvgMail.classList.add("blurClose");
		}
};
closeSvgMail.onclick = function () {
	if (!formMailInput.classList.contains("blurInp") && !nameMail.classList.contains("blurName") && !formMail.classList.contains("blurFormRow") && 
		!closeSvgMail.classList.contains("blurClose")) {
		formMailInput.classList.remove("focusInp");
		nameMail.classList.remove("focusName");
		formMail.classList.remove("focusFormRow");
		closeSvgMail.classList.remove("focusClose");

		formMailInput.classList.add("blurInp");
		nameMail.classList.add("blurName");
		formMail.classList.add("blurFormRow");
		closeSvgMail.classList.add("blurClose");
		}
};
