function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  function displayModal(x){
    switch(x){
      case 'registration':
      var element = document.getElementById('modal_registration');
      element.style.display = 'block';
      break;
      case 'login':
      var element = document.getElementById('modal_login');
      element.style.display = 'block';
      break;
      case 'forgot':
      var element = document.getElementById('modal_forgot');
      element.style.display = 'block';
      break;
      case 'contact':
      var element = document.getElementById('modal_contact');
      element.style.display = 'block';
      break;
    }
  }

  function getFlightDays(day){
    

  }

  function closeModal(){
    Array.from(document.getElementsByClassName("modal")).forEach(
        function(element, index, array) {
            element.style.display = 'none';
        }
    );
  }