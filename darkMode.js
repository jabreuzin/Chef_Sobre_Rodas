const body = document.querySelector("body");
      
var checkbox = document.getElementById("switch");
    checkbox.addEventListener("click", () => {
      body.classList.toggle("dark");
    });      
