const inputBox = document.getElementById("input-box");
const buttons = document.querySelectorAll("button");

let string = "";

function handleButtonClick(button) {
  const buttonText = button.innerText;

  if (buttonText === "=") {
    try {
      if (string === "") {
        alert("Invalid input, Enter valid input.");
      }
      string = String(eval(string));
      if (isNaN(string) || !isFinite(string)) {
        throw new Error("Invalid result");
      }
    } catch (error) {
      string = "Error";
    }
  } else if (buttonText === "AC") {
    string = "";
  } else if (buttonText === "DEL") {
    string = string.slice(0, -1);
  } else if (/[0-9+\-*/]/.test(buttonText)) {
    string += buttonText;
  }

  inputBox.value = string;
}

function addButtonClickListener(button) {
  button.addEventListener("click", (event) => {
    handleButtonClick(event.target);
  });
}

buttons.forEach(addButtonClickListener);
