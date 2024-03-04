function clicked() {
  var apple = document.getElementById("apple").value;
  var orange = document.getElementById("orange").value;
  var banana = document.getElementById("banana").value;

  total = apple * 0.99 + orange * 0.79 + banana * 0.59;
  taxtotal = total * 1.0775;//7.75% Tax
  alert(
    " Your total cost is $" + taxtotal.toFixed(2) + "."
  );
  return false;
}

function validate(num) {
  if (num < 0 || num > 99||isNaN(num)) {
    alert("Error Please enter a quantity value between 0-99.");
  }
  return false;
}
