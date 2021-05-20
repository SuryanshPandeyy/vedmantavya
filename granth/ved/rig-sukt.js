function change_sukt(val) {
  select_mandal = val.value;
  // var $selectsukt = $("#rig-sukt");
  switch (select_mandal) {
    case "1":
      sukt(191);
      break;
    case "2":
      sukt(43);
      break;
    case "3":
      sukt(62);
      break;
    case "4":
      sukt(58);
      break;
    case "5":
      sukt(87);
      break;
    case "6":
      sukt(75);
      break;
    case "7":
      sukt(104);
      break;
    case "8":
      sukt(103);
      break;
    case "9":
      sukt(114);
      break;
    case "10":
      sukt(191);
      break;
  }

}

function sukt(num) {
  var selectsukt = document.getElementById("rig-sukt");
  selectsukt.innerHTML = "<option value=\"\" disabled selected>सूक्त चुनें</option>";
  for (i = 1; i <= num; i++) {
    var option = document.createElement("option");
    option.value = select_mandal+"/"+i;
    option.text = i;
    selectsukt.appendChild(option);
  }
}

function change_mantra(val) {
  select_sukt = val.value;
  // var $selectsukt = $("#rig-sukt");
  switch (select_sukt) {
    case "1/1":
      mantra(9);
      break;
    case "1/2":
      mantra(20);
  }
}

function mantra(num) {
  selectmantra = document.getElementById("rig-mantra");
  selectmantra.innerHTML = "<option value=\"\" disabled selected>मन्त्र चुनें</option>";
  for (j = 1; j <= num; j++) {
    var option = document.createElement("option");
    option.value = select_sukt+"/"+j;
    option.text = j;
    selectmantra.appendChild(option);
  }
}

function show_mantra(val) {
  x = val.value;
  load(x);
}
function load(mantra) {
  var http = new XMLHttpRequest();
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var parse = JSON.parse(this.responseText);
      for (x in parse) {
        var parsemantra = parse[x].id;
        if (parsemantra === mantra) {
          var smantra = parse[x].mantra;
          document.getElementById("demo").innerHTML = parsemantra+"+"+smantra;
        }
      }
    }
  };
  http.open("GET", "pages/rigData.json", true);
  http.send();
}
