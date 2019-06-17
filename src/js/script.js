var slider = Peppermint(document.getElementById('peppermint'));
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