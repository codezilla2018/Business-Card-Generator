$(document).ready(function() {

		$("#signupForm").validate({
			rules: {
				name: {
					required: true,
					minlength: 4
				},
				email: {
					required: true,
					email: true
				},
				web: {
					required: true,
					minlength: 5
				},
			},
			messages: {
				name: {
					required: "Please enter a name",
					minlength: "Your name must consist of at least 4 characters"
				},
				email: "Please enter a valid email address",
				web: {
					required: "Please enter a valid web address",
					minlength: "Your web address must consist of at least 5 characters"
				},
			}
		});
	});