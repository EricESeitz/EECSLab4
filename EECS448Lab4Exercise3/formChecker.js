function validateForm()
{
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let userShippingChoice = document.getElementsByName("shippingOption");

    //email validation expression from https://www.w3resource.com/javascript/form/email-validation.php
    //regular expression
    let emailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if (userShippingChoice.checked == false)
    {
        alert('Shipping choice required.');
        return false;
    }
    
    //If the format doesn't follow emailFormat
    if (emailFormat.test(username) == false)
    {
        alert('Incorrect email format.');
        return false;
    }
    
    if (password.length == 0)
    {
        alert('Password field is empty.');
        return false;
    }
    return true;
}