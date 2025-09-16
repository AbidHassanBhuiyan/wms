function validateAssignJobs(form) {
  document.getElementById("error-msg").innerHTML = "";
  const customer = form.customer.value;
  const mechanic = form.mechanic.value;
  if (customer.trim() === "") {
    document.getElementById("error-msg").innerHTML = "Please enter customer name/ID";
    return false;
  }
  if (mechanic === "Select Mechanic") {
    document.getElementById("error-msg").innerHTML = "Please select a mechanic";
    return false;
  }
  return true;
}

function validateManageCustomers(form) {
  document.getElementById("error-msg").innerHTML = "";
  const search = form.searchCustomer.value;
  if (search.trim() === "") {
    document.getElementById("error-msg").innerHTML = "Please enter a customer name/ID";
    return false;
  }
  return true;
}

function validateManageMechanics(form) {
  document.getElementById("error-msg").innerHTML = "";
  const mech = form.mechanicName.value;
  if (mech.trim() === "") {
    document.getElementById("error-msg").innerHTML = "Please enter mechanic name";
    return false;
  }
  return true;
}

function validateManageServices(form) {
  document.getElementById("error-msg").innerHTML = "";
  const service = form.serviceName.value;
  if (service.trim() === "") {
    document.getElementById("error-msg").innerHTML = "Please enter service name";
    return false;
  }
  return true;
}

function validateChangePassword(form) {
  document.getElementById("error-msg").innerHTML = "";
  const current = form.currentPass.value;
  const newPass = form.newPass.value;
  const confirm = form.confirmPass.value;
  if (current.trim() === "" || newPass.trim() === "" || confirm.trim() === "") {
    document.getElementById("error-msg").innerHTML = "All fields are required";
    return false;
  }
  if (newPass !== confirm) {
    document.getElementById("error-msg").innerHTML = "New password and confirm password do not match";
    return false;
  }
  if (newPass.length < 6) {
    document.getElementById("error-msg").innerHTML = "Password must be at least 6 characters";
    return false;
  }
  return true;
}

function validateForgotPassword(form) {
  document.getElementById("error-msg").innerHTML = "";
  const email = form.email.value;
  if (!email.includes("@")) {
    document.getElementById("error-msg").innerHTML = "Please enter a valid email";
    return false;
  }
  return true;
}

function validateLogin(form) {
  document.getElementById("error-msg").innerHTML = "";
  const username = form.username.value;
  const password = form.password.value;
  if (username.trim() === "" || password.trim() === "") {
    document.getElementById("error-msg").innerHTML = "Both fields are required";
    return false;
  }
  return true;
}

function validateRegister(form) {
  document.getElementById("error-msg").innerHTML = "";
  const username = form.username.value;
  const email = form.email.value;
  const password = form.password.value;
  if (username.trim() === "" || email.trim() === "" || password.trim() === "") {
    document.getElementById("error-msg").innerHTML = "All fields are required";
    return false;
  }
  if (!email.includes("@")) {
    document.getElementById("error-msg").innerHTML = "Invalid email address";
    return false;
  }
  if (password.length < 6) {
    document.getElementById("error-msg").innerHTML = "Password must be at least 6 characters";
    return false;
  }
  return true;
}