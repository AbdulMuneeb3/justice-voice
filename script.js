function loadPage(route) {
  window.location.href = `./${route}.html`;
}
function showPublishSection() {
  let PublishContainer = document.getElementById("Publish__container");
  PublishContainer.classList.add("show__Publish");
}
// This function hides the Publish section onclick on cross
function hidePublishSection() {
  let PublishContainer = document.getElementById("Publish__container");
  PublishContainer.classList.remove("show__Publish");
}

function openModal() {
  var modal = document.getElementById("myModal");
  var modalOverlay = document.getElementById("modalOverlay");

  modal.style.display = "block";
  modalOverlay.style.display = "block";
}

// Function to close the modal
function closeModal() {
  var modal = document.getElementById("myModal");
  var modalOverlay = document.getElementById("modalOverlay");

  modal.style.display = "none";
  modalOverlay.style.display = "none";
}

// admin
// function SendMail(){
//    var params={
//        from_name : document.getElementById("fullName").value,
//        email_id : document.getElementById("email").value,
//        message : document.getElementById('message').value
//    }
//    emailjs.send("service_es9b99g","template_ib1r0wi",params).then(function(res){
//     alert("success!" + res.status)
//    })
// }

function SendMail() {
  var params = {
      from_name: document.getElementById("fullName").value,
      email_id: document.getElementById("email").value,
      message: document.getElementById('message').value
  }

  console.log('Params:', params);

  emailjs.send("service_es9b99g", "template_ib1r0wi", params).then(function(res) {
      console.log('Response:', res);
      alert("success!" + res.status);
  });
}
