function objectAjax() {
  var xmlhttp = false;
  try {
    xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
  } catch (e) {
    try {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (E) {
      xmlhttp = false;
    }
  }
  if (!xmlhttp && typeof XMLHttpRequest != "undefined") {
    xmlhttp = new XMLHttpRequest();
  }
  return xmlhttp;
}

// Initialize the read function when entering the page or reloading the page
addEventListener("load", read, false);

function read() {
  $.ajax({
    type: "POST",
    url: "?c=crud&m=table_users",
    beforeSend: function () {
      $("#information").html("processing");
    },
    success: function (response) {
      $("#information").html(response);
    },
  });
}

function register() {
  name = document.formUser.name.value;
  last_name = document.formUser.last_name.value;
  email = document.formUser.email.value;
  ajax = objectAjax();
  ajax.open("POST", "?c=crud&m=registeruser", true);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4) {
      read();
      alert("succesfully added");
      $("#addUser").modal("hide");
    } else {
      alert("not succesful");
    }
  };
  ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  ajax.send("name=" + name + "&last_name=" + last_name + "&email=" + email);
}

function update() {
  id = document.formUserUpdate.id.value;
  name = document.formUserUpdate.name.value;
  last_name = document.formUserUpdate.last_name.value;
  email = document.formUserUpdate.email.value;
  ajax = objectAjax();
  ajax.open("POST", "?c=crud&m=updateuser", true);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4) {
      read();
      $("#updateUser").modal("hide");
    }
  };
  ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  ajax.send(
    "name=" + name + "&last_name=" + last_name + "&email=" + email + "&id=" + id
  );
}

function deleteUser(id) {
  if (confirm("Are you sure?")) {
    ajax = objectAjax();
    ajax.open("POST", "?c=crud&m=deleteuser", true);
    ajax.onreadystatechange = function () {
      if (ajax.readyState == 4) {
        read();
      }
    };
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("id=" + id);
  }
}

function ModalRegister() {
  $("#addUser").modal("show");
}

function ModalUpdate(id, name, last_name, email) {
  document.formUserUpdate.id.value = id;
  document.formUserUpdate.name.value = name;
  document.formUserUpdate.last_name.value = last_name;
  document.formUserUpdate.email.value = email;
  $("#updateUser").modal("show");
}
