//Number Validation
$(document).ready(function() {
$(".number_validation").keydown(function (e) {
if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
(e.keyCode >= 35 && e.keyCode <= 40)) {
return;
}
if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
e.preventDefault();
}
});
$(document).on('keydown', '.name_validation', function(e) {
if (e.which === 32 &&  e.target.selectionStart === 0) {return false;}  });
});
//Email Validation
jQuery(document).ready(function(){
function ValidateEmail(email) {
var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
return expr.test(email);
};
jQuery(".email_validation").blur(function () {
if (!ValidateEmail(jQuery(this).val())) {
jQuery(this).val("");
}
else {
return  true;
}
});
});
//Admin Login
$(document).on('keyup','.cnfrm_passwordData',function(){
    var value = $(this).val();
    var originalPass = $('.passwordData').val();
    if(value == originalPass)
    {
        $(this).css('border','1px solid #d3d3d3');
        $('.loginBtn').attr('disabled',false);
    }
    else
    {
        $(this).css('border','1px solid red');
        $('.loginBtn').attr('disabled',true);
    }
})