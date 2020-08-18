$(document).ready(function() {
    $.validator.addMethod("regex", function(value, element, regexpr) {
        return regexpr.test(value);
    }, "Please enter a valid name.");

    $("form[id='add_user_form']").validate({
        rules: {
            name: 'required',
            email: 'email',
            password: 'password',
            address: 'address',
            birthday: 'birthday',
            avatar: 'avatar',
            role_id: 1,

        },
        messages: {
            name: 'This field is required',
            email: 'This field is required',
            password: 'This field is required',
            address: 'This field is required',
            birthday: 'This field is required',
            avatar: 'This field is required',

        },
        submitHandler: function(form) {
            form.submit();
        }
    });
});
