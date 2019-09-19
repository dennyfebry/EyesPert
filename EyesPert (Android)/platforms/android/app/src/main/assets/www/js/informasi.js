$("document").ready(function () {
  console.log("test");
  $.ajax({
    type: "GET",
    url: "http://dennyfebrygo.com/bemo/eyespert/www/php/informasi.php",
    // error: function (xhr, status, error) {
    //     console.log(xhr);
    //     var result = xhr.responseText;
    //     console.log(result);
    //     // alert('Terjadi Kesalahan ');
    // },
    success: function (data) {
      console.log("test masuk");
      console.log(data);
      var penyakitMata = "";
      for (var i in data) {
        penyakitMata += "<div class='polaroid' id='filter'>";
        penyakitMata +=
          "<a href='penyakit.html?penyakitID=" +
          data[i].id_gangguan +
          "'><img src='http://dennyfebrygo.com/bemo/eyespert/www/img/Gangguan Mata/" +
          data[i].gambar +
          "' class='imgwidth' alt='" +
          data[i].nama_gangguan +
          "'></a>";
        penyakitMata += "<div class='kartu'>";
        penyakitMata += "<h6>" + data[i].nama_gangguan + "</h6>";
        penyakitMata += "</div>";
        penyakitMata += "</div>";
        penyakitMata += "<br>";
      }
      $("#penyakitMata").html(penyakitMata);
    }
  });
});
