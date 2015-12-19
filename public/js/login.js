$(function () {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });
});
$(document).ready(function(){
    function login(){
        $.ajax({
            type:"POST",
            url:"login.php?a=sign-in",
            dataType:"json",
            data:{
                email: $("#email").val(),
                password: $("#password").val(),
                remember: $("#remember").val()
            },
            success:function(data){
                if(data.ok){
                    showSuccess(data.msg);
                    window.setTimeout("location.href='index.php'", 2000);
                }else{
                    showErr(data.msg);
                }
            },
            error:function(jqXHR){
                showErr(jqXHR.status);
            }
        });
    }
    function showSuccess(msg){
        $("#msg-error").hide(100);
        $("#msg-success").show(100);
        $("#msg-success-p").html(msg);
    }
    function showErr(msg){
        $("#msg-error").hide(10);
        $("#msg-error").show(100);
        $("#msg-error-p").html(msg);
    }
    $("html").keydown(function(event){
        if(event.keyCode==13){
            login();
        }
    });
    $("#login").click(function(){
        login();
    });
    $("#ok-close").click(function(){
        $("#msg-success").hide(100);
    });
    $("#error-close").click(function(){
        $("#msg-error").hide(100);
    });
});