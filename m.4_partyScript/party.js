// Security Gaurd, allows people to enter to a party, only people between 18 and 35 years old can enter the party

// Loop through number of people.
do {
  // ask each user about his/her age.
  const age=prompt("Plaese enter your age?!");
  // if younger than 18, print: you are too young
  if(age<18){
    alert("You are too young...")

  }  // if older than 35, print: you are too old
  else if(age>35){
    alert("You are too old...")
  }// if between 18 and 35, ask the user about his/her name and welcome the user to the party.
  else{
    prompt("Please enter your name");
    alert("Welcome to the parety");
  }

  
} while (confirm("is there anyone else?"));