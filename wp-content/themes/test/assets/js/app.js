const formBox = document.getElementById("formBox");
const callToform = document.getElementById("callToform");
const subscrybeForm = document.getElementById("subscrybeForm");
const modal = document.getElementById("modal");
const errors = {
  invalidEmail: "Invalid Email", 
  other: "Something is Wrong"
};

const translationKeys = {  
  ValidEmail: "You have successfully submitted the form",
  other: "Not in the list"
};

function getOffset(el) {
  var rect = el.getBoundingClientRect();
  return {
    left: rect.left + window.pageXOffset,
    top: rect.top + window.pageYOffset,
  };
}

function scrollToForm() {
  let scrollPoint = getOffset(formBox);
  window.scrollTo({
    top: scrollPoint.top,
    left: 0,
    behavior: "smooth",
  });
}
function validateEmail(field) {
  let re = /\S+@\S+\.\S+/;
  let email_string = field.value;
  if (re.test(email_string)) {
    field.setAttribute("data-status", "1");
  } else {
    field.setAttribute("data-status", "0");
  }  
}

function formValidate(form) {
  let selectors = "input[name='email_address']";
  let emailField = form.querySelector(selectors);
  let email_status = emailField.getAttribute("data-status");
  if (email_status == 0) {
    let email_string = emailField.value;
    validateEmail(emailField);
  } else {
    let email_string = emailField.value;
  }
}

if (formBox) {
  if (callToform) {
    callToform.onclick = scrollToForm;
  }
}

if (subscrybeForm) {
  subscrybeForm.addEventListener("click", function () {
    formValidate(formBox);
    showModal();
    setTimeout(() => {
      let selectors = "input[name='email_address']";
      let emailField = formBox.querySelector(selectors);
      let email_status = emailField.getAttribute("data-status");
      let modalHolderMessageTitle = document.getElementById("modalHolderMessageTitle");
      if(email_status === "1"){
          modalHolderMessageTitle.innerHTML = translationKeys.ValidEmail;        
      }else {
        modalHolderMessageTitle.innerHTML = errors.invalidEmail;
        modalHolderMessageTitle.classList.add("--error");
      }
    }, 50);
  });
  let selectors = "input[name='email_address']";
  let emailField = formBox.querySelector(selectors);
  emailField.onkeyup = function () {
    validateEmail(this);
  };
}

function closeModal(){
  let modalHolderMessageTitle = document.getElementById("modalHolderMessageTitle");
      modalHolderMessageTitle.innerHTML = "";
      modalHolderMessageTitle.classList.remove("--error");


  document.querySelector("body").classList.remove("--disableScroll");
  modal.style.opacity = 0;
  setTimeout(() => {modal.classList.add("--hide")}, 500);
  
}
function showModal(){
  document.querySelector("body").classList.add("--disableScroll");
  modal.classList.remove("--hide");
  setTimeout(() => {modal.style.opacity = 1}, 10);
}

if (modal) {
  const modalHolderMessageCloseBtn = document.getElementById("modalHolderMessageCloseBtn");
  const modalHolderBackground = document.getElementById("modalHolderBackground");
  modalHolderMessageCloseBtn.onclick = modalHolderBackground.onclick = closeModal;
}