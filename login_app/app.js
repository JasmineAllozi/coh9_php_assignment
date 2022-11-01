const email="test@test.com";
const password="123";
let querystring= new URLSearchParams (window.location.search);
let useremail=querystring.get("email");
let userpassword=querystring.get("password");

if(useremail==email && userpassword==password){
    
setInterval(() => {window.location.href="http://ww.google.com"   
}, 5000);

}else{
    alert("incorrect passwoord or email,please try again!");
    
}