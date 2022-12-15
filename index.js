const makeNewInput = () => {
  const newInput = document.createElement("input");
  newInput.type = "text";
  newInput.placeholder = "Enter your name";
  newInput.className = "form-control";
  document.getElementById("prueba").appendChild(newInput);
};

const button = document.getElementById("buttonPrymary").addEventListener("click", makeNewInput);
