const debug = 1;

if (debug && 0) {
  console.log("app is loaded");
}
const formBox = document.getElementById("formBox");
const callToform = document.getElementById("callToform");
const subscrybeForm = document.getElementById("subscrybeForm");
const errors = {
  invalidEmail: "Invalid Email",
  other: "Something is Wrong",
};

function getOffset(el) {
  var rect = el.getBoundingClientRect();
  return {
    left: rect.left + window.pageXOffset,
    top: rect.top + window.pageYOffset,
  };
}

function scrollToForm() {
  if (debug && 1) {
    console.log("find element possition");
    console.log(getOffset(formBox));
  }
  let scrollPoint = getOffset(formBox);
  window.scrollTo({
    top: scrollPoint.top,
    left: 0,
    behavior: "smooth",
  });
  if (debug && 0) {
    console.log("scroll to form");
  }
}
function validateEmail(field) {
  let re = /\S+@\S+\.\S+/;
  let email_string = field.value;
  if (debug && 0) {
    console.log("Validation result");
    console.log(re.test(email_string));
  }
  if (re.test(email_string)) {
    field.setAttribute("data-status", "1");
  } else {
    field.setAttribute("data-status", "0");
  }
  //return re.test(email);
}

function formValidate(form) {
  if (debug && 0) {
    console.log("Validate Email");
    console.log("the form");
    console.log(form);
  }
  let selectors = "input[name='email_address']";
  let emailField = form.querySelector(selectors);
  if (debug && 0) {
    console.log("emailField");
    console.log(emailField);
  }
  let email_status = emailField.getAttribute("data-status");
  if (debug && 0) {
    console.log(email_status);
  }
  if (email_status == 0) {
    if (debug && 0) {
      console.log("Validate Email!");
    }
    let email_string = emailField.value;
    if (debug && 0) {
      console.log("email in the box");
      console.log(email_string);
    }
    validateEmail(emailField);
  } else {
    if (debug && 0) {
      console.log("Email is valid");
    }
    let email_string = emailField.value;
    if (debug && 0) {
      console.log("email in the box");
      console.log(email_string);
    }
  }
}

if (formBox) {
  if (debug && 0) {
    console.log("element is hete");
  }
  if (callToform) {
    if (debug && 0) {
      console.log("button is hete");
    }
    callToform.onclick = scrollToForm;
  } else {
    if (debug && 0) {
      console.log("button missing");
    }
  }
} else {
  if (debug && 0) {
    console.log("element missing");
  }
}

if (subscrybeForm) {
  if (debug && 0) {
    console.log("element subscrybeForm is hete");
  }
  subscrybeForm.addEventListener("click", function () {
    formValidate(formBox);
  });
  if (debug && 0) {
    console.log("on field change");
  }
  let selectors = "input[name='email_address']";
  let emailField = formBox.querySelector(selectors);
  if (debug && 0) {
    console.log("the field emailField");
    console.log(emailField);
  }
  emailField.onkeyup = function () {
    if (debug && 0) {
      console.log("typing");
    }
    validateEmail(this);
  };
} else {
  if (debug && 0) {
    console.log("element subscrybeForm missing");
  }
}
