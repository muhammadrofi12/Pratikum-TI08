function kirimChat() {
  let text = document.getElementById("input-chat").value;
  let output = document.createElement("P");

  output.innerHTML = String(text);
  document.getElementById("box-chat").appendChild(output);
}
