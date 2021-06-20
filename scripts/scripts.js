attempt = parseInt(attempt);
var captcha = false;

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') { 
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

//checking for captcha
function checkcaptcha(form,ip,country,city){
    
            
            if(captcha==false){
            	alert("Please confirm you are not a robot by validationg captcha request before submitting the form.");
            }else if(form=='physician'){
                submit_physicians(ip,country,city);
            }else if(form=='client'){
                submit_clients(ip,country,city);
            }else if(form=='contact'){
                submit_message();
            }
        
}

function submit_physicians(ip,country,city){
    
    var s = false;
    var f = false;
    var l = false;
    var e = false;
    var validate = false;
    
    var     agree = document.getElementById('pagree').checked;
    var     logincountry = city+", "+country;
    var    specialty = $('#pspecialty').val();
    var     certified = $("input[name='pboardcert']:checked").val();
    var    firstname = $('#pfirstname').val();
    var    lastname = $('#plastname').val();
    var    email = $('#pemail').val();
    var    phone = $('#pphone').val();
    var addressx = $('#paddress').val() +", "
                    + $('#paddress2').val() +", "
                    + $('#pstate').val() +", "
                    + $('#pzip').val();
    var    country = $('#pcountry option:selected').text();
    
    if(specialty==""){
        $('#pspecialty').siblings('.invalid-feedback').show();
    }else{
        $('#pspecialty').siblings('.invalid-feedback').hide();
        s=true;
    }
    
    if(firstname==""){
        $('#pfirstname').siblings('.invalid-feedback').show();
    }else{
        $('#pfirstname').siblings('.invalid-feedback').hide();
        f=true;
    }
    
    if(lastname==""){
        $('#plastname').siblings('.invalid-feedback').show();
    }else{
        $('#plastname').siblings('.invalid-feedback').hide();
        l=true;
    }
    
    if(email==""){
        $('#pemail').siblings('.invalid-feedback').show();
    }else{
        $('#pemail').siblings('.invalid-feedback').hide();
        e=true;
    }
    
    if(agree){
        $('#pagree').siblings('.invalid-feedback').hide();
        validate = true;
    }else{
        $('#pagree').siblings('.invalid-feedback').show();
        validate=false;
    }
    
    if(attempt>3){
        alert("Only 3 registrations allowed per ip. Please try again after 60 days from your last application");
    }else if(s && f && l && e && validate){     
     $.ajax({
        type: 'POST',
        crossDomain: true,
        url: 'post_to_physicians.php',

        data : {
        specialty : specialty,
        certified : certified,
        firstname : firstname,
        lastname : lastname,
        email : email,
        phone:phone,
        address : addressx,
        country : country,
        ip : ip,
        logincountry : logincountry,
    },
        success: function (response) {
            alert ("Your information has been sent. Thank you. Expect a reply within 24 hours in most cases. Should you not receive a reply or telephone call, please send an email to info@remoteicu.com");
            document.location.href='index.php';
        },
        error: function(response) {
            console.log(response);
        }
    });
}
}


function submit_clients(ip,country,city){

    var s = false;
    var f = false;
    var l = false;
    var e = false;
var validate=false;
    var     agree = document.getElementById('cagree2').checked;
    var     logincountry = city+", "+country;
    var    specialty = $('#cspecialty').val();
    var    firstname = $('#cfirstname').val();
    var    lastname = $('#clastname').val();
    var    email = $('#cemail').val();
    var    phone = $('#cphone').val();
    var addressx = $('#caddress').val() +", "
                    + $('#caddress2').val() +", "
                    + $('#cstate').val() +", "
                    + $('#czip').val();
    var    country = $('#ccountry option:selected').text();
    
    if(specialty==""){
        $('#cspecialty').siblings('.invalid-feedback').show();
    }else{
        $('#cspecialty').siblings('.invalid-feedback').hide();
        s=true;
    }
    
    if(firstname==""){
        $('#cfirstname').siblings('.invalid-feedback').show();
    }else{
        $('#cfirstname').siblings('.invalid-feedback').hide();
        f=true;
    }
    
    if(lastname==""){
        $('#clastname').siblings('.invalid-feedback').show();
    }else{
        $('#clastname').siblings('.invalid-feedback').hide();
        l=true;
    }
    
    if(email==""){
        $('#cemail').siblings('.invalid-feedback').show();
    }else{
        $('#cemail').siblings('.invalid-feedback').hide();
        e=true;
    }
    
    if(agree){
        $('#cagree2').siblings('.invalid-feedback').hide();
        validate=true;
    }else{
        $('#cagree2').siblings('.invalid-feedback').show();
        validate=false;
    }
    
    if(attempt>3){
        alert("Only 3 registrations allowed per ip. Please try again after 60 days from your last application");
    }else if(s && f && l && e && validate){
     $.ajax({
        type: 'POST',
        crossDomain: true,
        url: 'post_to_clients.php',

        data : {
        specialty : specialty,
        firstname : firstname,
        lastname : lastname,
        email : email,
        phone : phone,
        address : addressx,
        country : country,
        ip : ip,
        logincountry : logincountry,
    },
        success: function (response) {
            alert("Your information has been sent. Thank you. Expect a reply within 24 hours in most cases. Should you not receive a reply or telephone call, please send an email to info@remoteicu.com");
            document.location.href='index.php';
        },
        error: function(response) {
            console.log(response);
        }
    });
}
}


function submit_message(){

    var s = false;
    var f = false;
    var l = false;
    var e = false;
    var m = false;
var validate=false;
    
    var     agree = document.getElementById('xagree').checked;
    var    subject = $('#xsubject').val();
    var    firstname = $('#xfirstname').val();
    var    lastname = $('#xlastname').val();
    var    email = $('#xemail').val();
    var    phone = $('#xphone').val();
    var    message = $('#xmessage').val();
    
    if(subject==""){
        $('#xsubject').siblings('.invalid-feedback').show();
    }else{
        $('#xsubject').siblings('.invalid-feedback').hide();
        s=true;
    }
    
    if(firstname==""){
        $('#xfirstname').siblings('.invalid-feedback').show();
    }else{
        $('#xfirstname').siblings('.invalid-feedback').hide();
        f=true;
    }
    
    if(lastname==""){
        $('#xlastname').siblings('.invalid-feedback').show();
    }else{
        $('#xlastname').siblings('.invalid-feedback').hide();
        l=true;
    }
    
    if(email==""){
        $('#xemail').siblings('.invalid-feedback').show();
    }else{
        $('#xemail').siblings('.invalid-feedback').hide();
        e=true;
    }
    
    if(message==""){
        $('#xmessage').siblings('.invalid-feedback').show();
    }else{
        $('#xmessage').siblings('.invalid-feedback').hide();
        m=true;
    }
    
    if(agree){
        $('#xagree').siblings('.invalid-feedback').hide();
        validate=true;
    }else{
        $('#xagree').siblings('.invalid-feedback').show();
        validate=false;
    }
    
    if(s && m && f && l && e && validate){
     $.ajax({
        type: 'POST',
        crossDomain: true,
        url: 'post_to_messages.php',

        data : {
        subject : subject,
        firstname : firstname,
        lastname : lastname,
        email : email,
        phone : phone,
        message : message
    },
        success: function (response) {
            alert("Your information has been sent. Thank you. Expect a reply within 24 hours in most cases. Should you not receive a reply or telephone call, please send an email to info@remoteicu.com");
            document.location.href='contact.php'; 
        },
        error: function(response) {
            console.log(response);
        }
    });
}
}

function logincheck(){
    
    var uname = $('#uname').val();
    var pw = $('#pw').val();
    
    if(uname=="admin" && pw=="admin"){
        setCookie('uname',uname,1);
        setCookie('pw',pw,1);        
        $('#admin_login').hide();
        $('#login-error').html('');
    }else{
        setCookie('uname','',0);
        setCookie('pw','',0);
        $('#admin_login').show();
        $('#login-error').html('Invalid username / password');
    }
}

function logout(){
        setCookie('uname','',0);
        setCookie('pw','',0);
        $('#admin_login').show();
        $('#login-error').html('Invalid username / password');
    document.location.href="index.php";
}

function loginopt(){
    $('#msgbox').css("display","block");
}

function captchaCallback(response) {
	captcha = true;
}


function terms(){
	alert ("To obtain the terms and conditions, please contact the Office of the General Counsel at +1-561-939-2796. Click OK to close this window.");
}

function load_console(){
	var uname = $("#business_login #uname").val();
	var pw = $("#business_login #pw").val();
	
	if(uname=="admin"&&pw=="admin"){
		window.location.href="https://remoteicu.com/dashboard/index.php";
	}else{
		loginopt();
	}
}