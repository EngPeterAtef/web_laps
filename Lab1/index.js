document.querySelector("form").addEventListener("submit", function (event) {
  event.preventDefault();

  const username = document.querySelector("#username").value;
  const password = document.querySelector("#password").value;
  const retypePassword = document.querySelector("#retype-password").value;
  const gender = document.querySelector('input[name="gender"]:checked').value;
  const age = document.querySelector("#age").value;
  const accountType = document.querySelector("#account-type").value;

  document.querySelector("#password-error").textContent = "";
  document.querySelector("#retype-password-error").textContent = "";
  document.querySelector("#age-error").textContent = "";

  if (
    !username ||
    !password ||
    !retypePassword ||
    !gender ||
    !age ||
    !accountType
  ) {
    alert("All fields must be filled.");
    return;
  }

  if (password.length < 8) {
    document.querySelector("#password-error").textContent =
      "A password should be at least 8 characters.";
    return;
  } else {
    document.querySelector("#password-error").textContent = "";
  }
  const hasUpperCase = password.toLowerCase() !== password;
  const hasNumber = /\d/.test(password);
  if (!hasUpperCase || !hasNumber) {
    document.querySelector("#password-error").textContent =
      "A password should include at least one uppercase character and one numeric digit.";
    return;
  } else {
    document.querySelector("#password-error").textContent = "";
  }

  if (password !== retypePassword) {
    document.querySelector("#retype-password-error").textContent =
      "The two passwords do not match.";
    return;
  } else {
    document.querySelector("#retype-password-error").textContent = "";
  }

  if (age < 18) {
    document.querySelector("#age-error").textContent =
      "You should be at least 18 years old to sign up.";
    return;
  } else {
    document.querySelector("#age-error").textContent = "";
  }

  if (accountType === "Professor" && age < 30) {
    alert("You must be 30 years or above to register as professor.");
    return;
  }

  if (accountType === "Student") {
    alert(
      `Hello, ${username.toUpperCase()}\n\nYou are successfully registered as: ${accountType}`
    );
  } else {
    const teachingId = prompt("Enter your teaching ID", "0");
    window.location.href = `user_info.html?username=${username.toUpperCase()}&accountType=${accountType}&teachingId=${teachingId}`;
  }
});
