// validasi registrasi
function validate() {
    console.log("function called");
  var pesanError = "";
  pesanError += validateName(register - form.name.value);
  pesanError += validateEmail(register - form.email.value);
  pesanError += validatePassword(register - form.password.value);
  pesanError += validateConfPassword(register - form.password.value, register - form.confpassword.value);

  if (pesanError == "") return true;
  //else {alert(pesanError); return false}
  else {
    document.getElementById("errorMessagesBox").innerHTML = pesanError;
    return false;
  }
}

function validateName(field) {
  if (/[^a-zA-Z ]/.test(field)) return "Nama hanya boleh berisi huruf. \n";
  else return "";
}

function validateEmail(field) {
  if (/[^a-zA-Z0-9\.\@\_\-]/.test(field)) return "Terdapat karakter yang tidak valid pada email. \n";
  else return "";
}

function validatePassword(field) {
  if (field.length < 8) return "Password minimal 8 karakter.\n";
  else if (!/[A-Z]/.test(field)) return "Password harus memuat huruf besar.\n";
  else return "";
}
function validateConfPassword(field1, field2) {
  if (field1 != field2) return "Password tidak sama. \n";
  else return "";
}

//ubah button
function changeClickability(kelas) {
    //console.log("function called");
  for (let i = 0; i < kelas.length; i++) {
    editSconsole.log(kelas[i])
    var tombol = document.getElementsByClassName(kelas[i]);
    for (let j = 0; j < tombol.length; j++){
        tombol[j].disabled=false;
    }
  }
}

//edit jadwal
function editSchedule(gerbong){
    xhttp = new XMLHttpRequest();
  showResult2();
  xhttp.open("GET", "editSchedule.php?gerbong=" + gerbong, true);
  console.log(gerbong);
  xhttp.send();
  console.log("terkirim!");
}

function showResult2() {
    xhttp.onreadystatechange = function () {
      if (xhttp.readyState == 4 && xhttp.status == 200) {
        console.log("konek");
        console.log(xhttp.responseText);
        // if (xhttp.responseText == "DELETED!") {
        //   window.location.href = "cart.php";
        // }
      }
    };
  }

//delete jadwal
function deleteSchedule(gerbong) {
  let confirmation = confirm("Are you sure deleting your account?");
  if (confirmation) {
    window.location.href = "index.php";
  }
}

//debugging
console.log("JAVASCRIPT JALAN SAMPAI AKHIR");
