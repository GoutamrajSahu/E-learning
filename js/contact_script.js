function validation()
{
    var name = document.getElementById("name").value;
    var subject = document.getElementById("subject").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("text_area").value;
    var error_message = document.getElementById("error_message");
    var text;

    error_message.style.padding = "10px";
    
    if(name.length<5){
        text = "Enter name with more then 5 characters.";
        error_message.innerHTML = text;
        return false;
    }
    if(subject.length<10){
        text = "Enter subject with more then 10 characters.";
        error_message.innerHTML = text;
        return false;
    }
    if(isNaN(phone)||(phone.length!=10)){
        text = "Enter valid phone number.";
        error_message.innerHTML = text;
        return false;
        
    }
    if(email.indexOf("@")==-1||email.length<6){
        text = "Enter valid email.";
        error_message.innerHTML = text;
        return false;
    }
    if(message.length<=10){
        text = "Enter the message with more then 10 characters.";
        error_message.innerHTML = text;
        return false;
    }
    alert("form submitted successfully!!");
    
    return true;

}