$("document").ready(function () {
  var urlParams = new URLSearchParams(window.location.search);
  sessionStorage.clear();
  //Nampilin gejala
  $.ajax({
    type: "GET",
    url: "php/diagnosis.php",
    success: function (data) {
      // console.log(data);
      var pilihGejala = "";
      for (var i in data) {
        pilihGejala += "<div class='checkbox'>";
        pilihGejala += "<label>";
        pilihGejala +=
          "<input type='checkbox' value='" +
          data[i].id_gejala +
          "' name='gejala[]'>" +
          data[i].nama_gejala;
        pilihGejala += "</label>";
        pilihGejala += "</div>";
      }
      $("#pilihGejala").html(pilihGejala);
    }
  });

  $("#gejala-form").on("submit", function (event) {
    event.preventDefault();
    var inputGejala = [];
    $.each($("#pilihGejala :checked"), function () {
      inputGejala.push($(this).val());
      // console.log(inputGejala);
    });
    // inputGejala = inputGejala.toString();
    // console.log(inputGejala)
    console.log("Pilihan Gejala: " + inputGejala);

    $.ajax({
      type: "POST",
      url: "php/input-gejala.php",
      async: false,
      dataType: "json",
      global: false,
      data: { inputGejalaKey: inputGejala },
      success: function (result) {
        console.log(result);
        hasil = "<div class = 'textMargin'>" + result[0] + "</div>";
        for (var i = 1; i < result.length - 2; i++) {
          hasil += "<div class = 'textMargin'>" + result[i] + "</div>";
        }
        persen =
          "<div class = 'persen'>" + result[result.length - 2] + "%</div>";
        kataHasil =
          "<center><div class = 'textMargin'>" +
          result[result.length - 3] +
          "</div></center>";
        penyakit = result[result.length - 1];

        sessionStorage.setItem("hasil", hasil);
        sessionStorage.setItem("persen", persen);
        sessionStorage.setItem("kataHasil", kataHasil);
        sessionStorage.setItem("penyakit", penyakit);
        window.location.href = "hasil.html";
      }
    });
  });
});
