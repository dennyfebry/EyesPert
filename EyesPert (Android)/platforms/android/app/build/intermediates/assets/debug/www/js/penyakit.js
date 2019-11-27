$("document").ready(function () {
  console.log("test");
  var urlParams = new URLSearchParams(window.location.search);
  console.log("ID Penyakit =", urlParams.get("penyakitID"));
  $.ajax({
    type: "POST",
    url: "php/penyakit.php",
    data: { penyakitID: urlParams.get("penyakitID") },
    // error: function (xhr, status, error) {
    //     console.log(xhr);
    //     var result = xhr.responseText;
    //     console.log(result);
    //     // alert('Terjadi Kesalahan ');
    // },
    success: function (data) {
      console.log("test masuk");
      console.log(data);
      var detailPenyakitMata = "<div class='informasi borderku'>";
      detailPenyakitMata += "<h6>" + data[0].nama_gangguan + "</h6><br>";
      detailPenyakitMata +=
        "<img src='img/Gangguan Mata/" +
        data[0].gambar +
        "' class='imgwidth' alt='" +
        data[0].nama_gangguan +
        "'><br><br>";
      detailPenyakitMata += "<h6> Pengertian </h6>";
      detailPenyakitMata += "<p>" + data[0].pengertian + "</p><br>";
      detailPenyakitMata += "<h6> Gejala </h6>";
      for (var i in data) {
        detailPenyakitMata += "<div> - " + data[i].nama_gejala + "</div>";
      }
      detailPenyakitMata += "<br><h6> Penanganan </h6>";
      detailPenyakitMata += "<p>" + data[0].penanganan + "</p>";
      detailPenyakitMata +=
        "<br><h6> Tips Menghindari " + data[0].nama_gangguan + "</h6>";
      detailPenyakitMata += "<p>" + data[0].tips + "</p>";
      detailPenyakitMata += "</div>";
      $("#detailPenyakitMata").html(detailPenyakitMata);
    }
  });
});
