$("document").ready(function () {
  var hasil = sessionStorage.getItem("hasil");
  $("#hasil").html(hasil);

  var persen = sessionStorage.getItem("persen");
  $("#persen").html(persen);

  var kataHasil = sessionStorage.getItem("kataHasil");
  $("#kataHasil").html(kataHasil);

  var penyakit = sessionStorage.getItem("penyakit");
  console.log(penyakit);

  $.ajax({
    type: "POST",
    url: "http://dennyfebrygo.com/bemo/eyespert/www/php/detail-penyakit.php",
    async: false,
    dataType: "json",
    global: false,
    data: { penyakitKey: penyakit },
    success: function (data) {
      console.log(data);
      var detailPenyakitMata = "";
      for (var i in data) {
        detailPenyakitMata += "<div class='informasi borderku'>";
        detailPenyakitMata += "<h6>" + data[i].nama_gangguan + "</h6><br>";
        detailPenyakitMata +=
          "<img src='img/Gangguan Mata/" +
          data[i].gambar +
          "' class='imgwidth' alt='" +
          data[i].nama_gangguan +
          "'><br><br>";
        detailPenyakitMata += "<h6> Pengertian </h6>";
        detailPenyakitMata += "<p>" + data[i].pengertian + "</p><br>";
        detailPenyakitMata += "<h6> Penanganan </h6>";
        detailPenyakitMata += "<p>" + data[i].penanganan + "</p>";
        detailPenyakitMata += "</div><br><br>";
      }
      $("#detailPenyakitMata").html(detailPenyakitMata);
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
      url: "http://dennyfebrygo.com/bemo/eyespert/www/php/input-gejala.php",
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
