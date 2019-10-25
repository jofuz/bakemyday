function validateForm()
{
    // x is assigned the value of the name field in the contact form
    var x = document.forms["contactForm"]["name"].value;
    // if x is empty return error
    if (x == "") 
    {
       errorText = document.getElementById("nameAlert");
       alert("Please enter your name");
       errorText.innerHTML = "Please enter your name";
       return false;
    }
}