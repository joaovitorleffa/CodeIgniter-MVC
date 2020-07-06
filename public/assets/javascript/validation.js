function validationEmail(field) {
  const emailStyle = document.getElementById("email");
  usuario = field.value.substring(0, field.value.indexOf("@"));
  dominio = field.value.substring(field.value.indexOf("@") + 1, field.value.length);

  if ((usuario.length >= 1) &&
    (dominio.length >= 3) &&
    (usuario.search("@") == -1) &&
    (dominio.search("@") == -1) &&
    (usuario.search(" ") == -1) &&
    (dominio.search(" ") == -1) &&
    (dominio.search(".") != -1) &&
    (dominio.indexOf(".") >= 1) &&
    (dominio.lastIndexOf(".") < dominio.length - 1)) {
    emailStyle.style.borderColor = "green";
    
  }
  else {
    emailStyle.style.borderColor = "red";
    emailStyle.value = '';
  }
}

function validationName() {
  const nameStyle = document.getElementById("name");
  const name = document.getElementById("name").value;
  
  if(name.length >= 3) {
    nameStyle.style.borderColor = "green";
  } else {
    nameStyle.style.borderColor = "red";
    nameStyle.value = '';
  }
}

function validationPhone() {
  const phoneStyle = document.getElementById("phone");
  const phone = document.getElementById("phone").value;

  if(phone.length >= 11) {
    phoneStyle.style.borderColor = "green";
  } else {
    phoneStyle.style.borderColor = "red";
    phoneStyle.value = '';
  }
}

function validationAddress() {
  const addressStyle = document.getElementById("address");
  const address = document.getElementById("address").value;

  if(address.length > 10) {
    addressStyle.style.borderColor = "green";
  } else {
    addressStyle.style.borderColor = "red";
    addressStyle.value = '';
  }
}