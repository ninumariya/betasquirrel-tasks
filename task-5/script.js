function displayOnScreen(value) {
    document.getElementById("displaybox").value += value;
  }
  function allclear() {
    document.getElementById("displaybox").value = "";
  }
  function Delete() {
    document.getElementById("displaybox").value = document
      .getElementById("displaybox")
      .value.toString()
      .slice(0, -1);
  }
  function calculate() {
    var x = document.getElementById("displaybox").value;
    var y = eval(x);
    document.getElementById("displaybox").value = y;
  }