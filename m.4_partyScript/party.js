// Security Gaurd, allows people to enter to a party, only people between 18 and 35 years old can enter the party
let age;
// Loop through number of people.
do {
  // ask each user about his/her age.
  age=prompt("Plaese enter your age?!");//return string
 // console.log(age);
  age=parseInt(age);//to convert string to number
  // if younger than 18, print: you are too young
  if(age<18){
    displayMsg("You are too young...")

  }  // if older than 35, print: you are too old
  else if(age>35){
    displayMsg("You are too old...")
    //console.log(age>35);
  }// if between 18 and 35, ask the user about his/her name and welcome the user to the party.
  else{
    
    displayMsg("Hi"+ prompt("Please enter your name") +"Welcome to the party");
  }

  
} while (confirm("is there anyone else?"));

function displayMsg(msg){
  alert(msg);
}
