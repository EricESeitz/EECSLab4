function validateForm()
{
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    //let userShippingChoice = document.getElementById("shippingOption").value;

    //let emailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    /*
    if (userShippingChoice == "")
    {
        alert('Password field is empty!');
        window.history.forward(-1);
        break;
    }
    */
    if (password.length == 0)
    {
        alert('Password field is empty.');
        return false;
    }
    return true;
}