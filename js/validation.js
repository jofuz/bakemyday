function validateForm()
{
    var x = document.forms["contactForm"]["name"].value;
    if (x == "") 
    {
       //errorText = document.getElementById("nameAlert");
       //errorText.innerHTML = "Please enter your name";
       alert("Please enter your name");
       return false;
    }
}