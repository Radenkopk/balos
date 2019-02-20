function Discount() {
  var x = document.querySelector('.dis-input');
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

var checkbox = document.querySelector('.dis');

checkbox.addEventListener('click', Discount);
