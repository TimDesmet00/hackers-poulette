// ciblage des inputs du formulaire
const firstName = document.getElementById("first-name");
const lastName = document.getElementById("last-name");
const email = document.getElementById("email");
const country = document.getElementById("country");
const message = document.getElementById("message");
const submit = document.getElementById("submit");

// ciblage des span d'erreur
const firstNameError = document.getElementById("first-name-error");
const lastNameError = document.getElementById("last-name-error");
const emailError = document.getElementById("email-error");
const countryError = document.getElementById("country-error");
const messageError = document.getElementById("message-error");

// stockage des valeurs des inputs
let prenom;
let nom;
let mail;
let pays;
let mess;

// fonction de validation du formulaire

firstName.addEventListener("keyup", (e) => {
  prenom = e.target.value;
  if (prenom.value === "") {
    firstNameError.textContent = "First name is required";
  } else if (prenom.length < 3) {
    firstNameError.textContent = "Your first name is too short";
  } else if (prenom.length > 12) {
    firstNameError.textContent = "Your first name is too long";
  } else {
    firstNameError.textContent = "First name valide";
    return prenom;
  }
});

lastName.addEventListener("keyup", (e) => {
  nom = e.target.value;
  if (nom.value === "") {
    lastNameError.textContent = "Last name is required";
  } else if (nom.length < 3) {
    lastNameError.textContent = "Your last name is too short";
  } else if (nom.length > 12) {
    lastNameError.textContent = "Your last name is too long";
  } else {
    lastNameError.textContent = "Last name valide";
    return nom;
  }
});

email.addEventListener("keyup", (e) => {
  mail = e.target.value;
  if (email.value === "") {
    emailError.textContent = "Email is required";
  } else if (
    !/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$/.test(email.value)
  ) {
    emailError.textContent = "Please enter a valide Email";
  } else {
    emailError.textContent = "Email valide";
    return mail;
  }
});

country.addEventListener("keyup", (e) => {
  pays = e.target.value;
  if (country.value === "") {
    countryError.textContent = "Country is required";
  } else {
    countryError.textContent = "Accepted country";
  }
});

message.addEventListener("keyup", (e) => {
  mess = e.target.value;
  if (message.value === "") {
    messageError.textContent = "Message is required";
  } else if (mess.length < 20) {
    messageError.textContent = "Your message is too short";
  } else if (mess.length > 500) {
    messageError.textContent = "Your message is too long";
  } else {
    messageError.textContent = "Message valide";
  }
});
