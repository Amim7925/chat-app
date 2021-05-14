var togglebtn = document.querySelector(".fa-eye");
var password = document.querySelector("form input[type='password']")


togglebtn.onclick = ()=> {
    if(password.type == "password"){
        password.type = "text";
        togglebtn.classList.add("active");
    }else{
        password.type = "password";
        togglebtn.classList.remove("active");
    }
}


var form = document.querySelector(".login-form form");
var button = document.querySelector("#btn-submit");
var action = form.getAttribute("action");

function submit_user(){
    let xhr = new XMLHttpRequest();
    xhr.open("POST" , action , true);
    xhr.onload = () => {
        if(xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200){
            console.log("ajax connection successful");
            var result = xhr.response;
            console.log(result);
        }else{
            console.log("ajax connection failed");
        }
    }
    var formData = new FormData(form);
    xhr.send(formData);
}

button.addEventListener("click", function (event) {
  // event.preventDefault();
  submit_user();
});


// add validation to forms
(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();

  
