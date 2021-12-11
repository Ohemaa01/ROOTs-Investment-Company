
var login=document.getElementById('Login');
var signUp=document.getElementById('Sign_up');
var lgToggle=document.getElementById('login_toggle');
var snToggle=document.getElementById('signup_toggle');


lgToggle.addEventListener('click', ()=>{
    login.style.display="block";
    signUp.style.display="none";
    lgToggle.classList.add('active');
    snToggle.classList.remove('active');
});

snToggle.addEventListener('click', ()=>{
    signUp.style.display="block";
    login.style.display="none";
    lgToggle.classList.remove('active');
    snToggle.classList.add('active');
});

// login validation

function loginValidation(){
        
    const email= document.getElementById('lemail').value;
    const password= document.getElementById('lpassword').value;
    const passwordcheck= /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/ ;
    const emailcheck= /^\S+@\S+\.\S+$/;

    if(emailcheck.test(email)){
      document.getElementById('lemailerror').innerHTML= " "; 
    }
    else{
      document.getElementById('lemailerror').innerHTML= "** Email is invalid";
      return false;
    }

    if(passwordcheck.test(password)){
      document.getElementById('lpassworderror').innerHTML= " ";
      
    }
    else{
      document.getElementById('lpassworderror').innerHTML= "** Password is invalid";
      return false;
    }


}



function signUpValidation(){
        
    const fullname= document.getElementById('name').value;
    const email= document.getElementById('email').value;
    const password= document.getElementById('password').value;
    const number= document.getElementById('number').value;

    const passwordcheck= /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/ ;
    const emailcheck= /^\S+@\S+\.\S+$/;
    const fullnamecheck= /^[A-Za-z. ]{3,30}$/ ;
    const numbercheck= /^[0][0-9]{9}$/ ;
    


    if(fullnamecheck.test(fullname)){
        document.getElementById('nameerror').innerHTML= " "
    }
    else{
        document.getElementById('nameerror').style.color='red';
      document.getElementById('nameerror').innerHTML= "name is invalid";
      return false;
    }

    if(emailcheck.test(email)){
        document.getElementById('emailerror').innerHTML="";
    }
    else{
        document.getElementById('emailerror').style.color='red';
        document.getElementById('emailerror').innerHTML= "email is invalid";
        return false;
    }

    if(numbercheck.test(number)){
        document.getElementById('numbererror').innerHTML= " ";
    }
    else{
        document.getElementById('numbererror').style.color='red';
        document.getElementById('numbererror').innerHTML= "phone number is invalid";
        return false;
    }

    if(passwordcheck.test(password)){
      document.getElementById('passworderror').innerHTML= " ";
      
    }
    else{
        document.getElementById('passworderror').style.color='red';
      document.getElementById('passworderror').innerHTML= "** Password is invalid";
      return false;
    }


  }


// var fullname= document.getElementById('fullname').value;
//           var email= document.getElementById('email').value;
//           var password= document.getElementById('password').value;
//           var number= document.getElementById('number').value;

//           var fullnamecheck= /^[A-Za-z. ]{3,30}$/ ;
//           var passworcheck= /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!!@#$%^&*]{8.16}$/ ;
//           var emailcheck= /^[A-Za-z_]{3,}@[A-Za-z]{3,}[.]{1}A-Za-z.]{2,6}$/ ;
//           var numbercheck= /^[789][0-9]{9}$/ ;

//           if(fullnamecheck.test(fullname)){
//             document.getElementById('nameerror').innerHTML= " ";
//           }
//           else{
//             document.getElementById('nameerror').innerHTML= "** Name is invalid";
//             return false;
//           }

//           if(emailcheck.test(email)){
//             document.getElementById('emailerror').innerHTML= " ";
            
//           }
//           else{
//             document.getElementById('emailerror').innerHTML= "** Email is invalid";
//             return false;
//           }

//           if(passwordcheck.test(password)){
//             document.getElementById('passworderror').innerHTML= " ";
            
//           }
//           else{
//             document.getElementById('passworderror').innerHTML= "** Password is invalid";
//             return false;
//           }
//           if(numbercheck.test(number)){
//             document.getElementById('numbererror').innerHTML= " ";
//         }
//         else{
//           document.getElementById('numbererror').innerHTML= "** Phone number is invalid";
//           return false;
//         }