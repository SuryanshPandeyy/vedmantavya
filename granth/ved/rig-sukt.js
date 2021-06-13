"use strict"

async function change_sukt(val) {
  var select_mandal = val.value;
  let url = "pages/rigsukt_sankhya.json?"+select_mandal;
  const settings = {
    method: "GET", // POST, PUT, DELETE, etc.
    headers: {
      // the content type header value is usually auto-set
      // depending on the request body
      "Content-Type": "application/json"
    },
  };

  const response = await fetch(url, settings);
  let arrData = await response.json();
  for (let z in arrData) {
    var mandal = arrData[z].mandal;
    var sukts = arrData[z].sukts;
    if (mandal === select_mandal) {
      sukt(sukts);
    }
  }
}

function sukt(num) {
  var select_mandal = document.getElementById("rig-mandal").value;
  var selectsukt = document.getElementById("rig-sukt");
  selectsukt.innerHTML = "<option value=\"\" disabled selected>सूक्त चुनें</option>";
  for (let i = 1; i <= num; i++) {
    var option = document.createElement("option");
    option.value = select_mandal + "/" + i;
    option.text = i;
    selectsukt.appendChild(option);
  }
}


async function change_mantra(val) {
  var select_sukt = val.value;
  let url = "pages/rigmantra_sankhya.json?"+select_sukt;
  const settings = {
    method: "GET", // POST, PUT, DELETE, etc.
    headers: {
      // the content type header value is usually auto-set
      // depending on the request body
      "Content-Type": "application/json"
    },
  };

  const response = await fetch(url, settings);
  console.log(response);
  let arrData = await response.json();
  console.log(arrData);
  for (let z in arrData) {
    var sukts = arrData[z].sukts;
    console.log(sukts);
    var mantras = arrData[z].mantra;
    if (sukts === select_sukt) {
      mantra(mantras);
    }
  }
}

function mantra(num) {
  var select_sukt = document.getElementById("rig-sukt").value;
  var selectmantra = document.getElementById("rig-mantra");
  selectmantra.innerHTML = "<option value=\"\" disabled selected>मन्त्र चुनें</option>";
  for (let j = 1; j <= num; j++) {
    var option = document.createElement("option");
    option.value = select_sukt + "/" + j;
    option.text = j;
    selectmantra.appendChild(option);
  }
}

// function show_mantra(val) {
//   var x = val.value;
//   load(x);
// }

async function show_mantra(val) {
  var mantra = val.value;
  let url = "pages/rigData.json?"+mantra;
 
 
  const response = await fetch(url);
  const arrData = await response.json();
  for (var x in arrData) {
    var parsemantra = arrData[x].id;
    if (parsemantra === mantra) {
      // var id = arrData[x].id;
      var mandal = arrData[x].mandal;
      var sukt = arrData[x].sukt;
      var mantra = arrData[x].mantra;
      var devta = arrData[x].devta;
      var rishi = arrData[x].rishi;
      var chhand = arrData[x].chhand;
      var swar = arrData[x].swar;
      var mantra_hi = arrData[x].mantra_hi;
      var padpath = arrData[x].padpath;

      var rig_box = document.getElementById("rig_box");
      rig_box.classList.add("show_mantra");
      $('body').css({
        overflow: 'hidden'
      });

      // document.getElementById("id").innerHTML = id;
      document.getElementById("mandal").innerHTML = mandal;
      document.getElementById("sukt").innerHTML = sukt;
      document.getElementById("mantra").innerHTML = mantra;
      document.getElementById("devta").innerHTML = devta;
      document.getElementById("rishi").innerHTML = rishi;
      document.getElementById("chhand").innerHTML = chhand;
      document.getElementById("swar").innerHTML = swar;
      document.getElementById("mantra_hi").innerHTML =mantra_hi;
      document.getElementById("padpath").innerHTML = padpath;

    }
  }
}

