let kertas = document.querySelector("#kertas");
let gunting = document.querySelector("#gunting");
let batu = document.querySelector("#batu");
let computerChoice = document.querySelector("#computerChoice");

// function untuk komputer memilih
const selectChoice = () => {
  // arrow function
  const options = ["Kertas", "gunting", "batu"];
  const result = options[Math.floor(Math.random() * 3)];

  return result;
};

// Ketika Pilih Batu
batu.addEventListener("click", () => {
  let choice = selectChoice();

  computerChoice.innerHTML = choice;

  setTimeout(() =>{
    switch (choice) {
        case "batu":
          alert("Seri");
          break;
    
        case "gunting":
          alert("Kamu Menang!");
          break;
    
        default:
          alert("Komputer Menang!");
          break;
      }
  }, 300)
});

// Ketika Pilih Gunting
gunting.addEventListener("click", () => {
    let choice = selectChoice();
  
    computerChoice.innerHTML = choice;
  
    setTimeout(() =>{
      switch (choice) {
          case "batu":
            alert("Komputer Menang!");
            break;
      
          case "gunting":
            alert("Seri");
            break;
      
          default:
            alert("Kamu Menang!");
            break;
        }
    }, 300)
  });

// // Ketika Pilih Kertas
kertas.addEventListener("click", () => {
    let choice = selectChoice();
  
    computerChoice.innerHTML = choice;
  
    setTimeout(() =>{
      switch (choice) {
          case "batu":
            alert("Kamu Menang!");
            break;
      
          case "gunting":
            alert("Komputer Menang!");
            break;
      
          default:
            alert("Seri");
            break;
        }
    }, 300)
  });
