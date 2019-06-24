function checkpass() {
  if(document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Not Matching';
  }
}

function emailvalidate(){
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(document.getElementById('email').value.match(mailformat)){
      document.getElementById('message1').style.color = 'green';
      document.getElementById('message1').innerHTML = 'Valid Email';
   } else{
    document.getElementById('message1').style.color = 'red';
    document.getElementById('message1').innerHTML = 'Invalid Email';
  }
}

function namevalidate(){
    var nameformat = /^[a-zA-Z]+$/;
    if (document.getElementById('name').value.match(nameformat)){
    document.getElementById('message2').style.color = 'green';
    document.getElementById('message2').innerHTML = 'Correct Name';
   } else{
    document.getElementById('message2').style.color = 'red';
    document.getElementById('message2').innerHTML = 'Incorrect Name';
  }
}

function phonevalidate(){
    var phoneformat = /^\d{10}$/;
    if (document.getElementById('phone').value.match(phoneformat)){
    document.getElementById('message3').style.color = 'green';
    document.getElementById('message3').innerHTML = 'Correct Contact';
   } else{
    document.getElementById('message3').style.color = 'red';
    document.getElementById('message3').innerHTML = 'Incorrect Contact';
  }
}