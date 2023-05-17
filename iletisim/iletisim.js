function validateForm() {
  var fname = document.forms["myForm"]["fname"].value;
  var lname = document.forms["myForm"]["lname"].value;
  var email = document.forms["myForm"]["email"].value;
  var iletisim = document.forms["myForm"]["message"].value;
  var mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  var goruntuHtml = parent.document.getElementById("goruntuText");

  if (fname == null || fname == "") {
    alert("First name can't be blank");
    return false;
  } else if (lname == null || lname == "") {
    alert("Last  name can't be blank");
    return false;
  } else if (email == null || email == "") {
    alert("Email can't be blank");
    return false;
  } else if (iletisim == null || iletisim == "") {
    alert("İletisim kutusu can't be blank");
    return false;
  } else if (!email.match(mailFormat)) {
    alert("geçersiz email");
    return false;
  } else {
    alert("iletiniz alındı, goruntu sayfasından görüntüleyebilirsinşz");

    localStorage.setItem("fname", fname);
    localStorage.setItem("lname", lname);
    localStorage.setItem("email", email);
    localStorage.setItem("iletisim", iletisim);

    return true;
  }
}
