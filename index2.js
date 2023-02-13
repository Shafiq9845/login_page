
      function showPassword() {
        var x = document.getElementById("password");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
      function showPasswordn() {
        var x = document.getElementById("password2");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
     
    
    function message(){
        
    var name = document.getElementById('username');
    var email = document.getElementById('email');
    var password = document.getElementById('password');
    var password2 = document.getElementById('password2');
    const success = document.getElementById('success');
    const danger = document.getElementById('danger');

    if(name.value === '' || email.value === '' || password.value === '' || password2.value === ''){
        danger.style.display = 'block';
    }
    else{
        success.style.display = 'block';
    }



}
function email(email){
 var specialChar = /[!@#$%^&*(),.?":{}|<>]/;
  if (!re.test(email)) {
            alert("Enter valid email address!");
            return false;
  }
else{
  return true;
}
}


function validatePassword(password, password2 ) {
    // Regular expression to check for at least one special character
   
    var re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  
   
        
    
    // Check if password is at least 8 characters long
    if (password.length < 8) {
      alert("Password must be at least 8 characters long.");
      return false;
    }
  
    // Check if password contains at least one special character
    if (!specialChar.test(password)) {
      alert("Password must contain at least one special character.");
      return false;
    }
  
    // Check if password and confirm password match
    if (password !== password2) {
      alert("Password and Confirm Password do not match.");
      return false;
    }
    
    
   else{
    // If all criteria is met, return true
    return true;
}
}
  
function validateUsername(username) {
    if (username.length < 8) {
        alert("Username must be at least 8 characters long.");
        return false;
    } else {
        return true;
    }
}