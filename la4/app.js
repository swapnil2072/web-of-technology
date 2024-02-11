// Use const and let appropriately
const inputBox = document.getElementById("input-box");
const buttons = document.querySelectorAll("button");

let string = "";

// Use a function for the calculator logic
function handleButtonClick(button) {
  const buttonText = button.innerText;

  if (buttonText === "=") {
    string = String(eval(string));
  } else if (buttonText === "AC") {
    string = "";
  } else if (buttonText === "DEL") {
    string = string.slice(0, -1);
  } else {
    string += buttonText;
  }

  inputBox.value = string;
}

// Use a named function instead of an anonymous function for better readability
function addButtonClickListener(button) {
  button.addEventListener("click", (event) => {
    handleButtonClick(event.target);
  });
}

// Use forEach with a named function
buttons.forEach(addButtonClickListener);
