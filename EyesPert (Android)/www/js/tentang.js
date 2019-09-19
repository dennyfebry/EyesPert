$("document").ready(function () {
  console.log("test");
  // var urlParams = new URLSearchParams(window.location.search);
  // console.log('ID Penyakit =', urlParams.get('penyakitID'));
  $.ajax({
    type: "GET",
    url: "http://dennyfebrygo.com/bemo/eyespert/www/php/tentang.php",
    // data: { tentangID: urlParams.get('penyakitID') },
    // error: function (xhr, status, error) {
    //     console.log(xhr);
    //     var result = xhr.responseText;
    //     console.log(result);
    //     // alert('Terjadi Kesalahan ');
    // },

    success: function (data) {
      console.log("test masuk");
      console.log(data);
      var tentang = "";
      for (var i in data) {
        tentang += "<div class='borderku'>";
        tentang += "<center>";
        tentang += "<h6>" + data[i].pekerjaan + "</h6>";
        tentang +=
          "<img src='http://dennyfebrygo.com/bemo/eyespert/www/img/Tentang/" +
          data[i].foto +
          "' class='profilewidth' alt='" +
          data[i].nama_tentang +
          "'>";
        tentang += "</center>";
        tentang += "<br>";
        tentang += "<p> Nama: " + data[i].nama_tentang + "</p>";
        // tentang += "<p> Jenis Kelamin: " + data[i].jenis_kelamin + "</p>";
        tentang += "<p> SIP/NPM: " + data[i].sip_npm + "</p>";
        // tentang += "<p> Alamat: " + data[i].alamat_rumah + "</p>";
        tentang += "<p> Instansi: " + data[i].nama_instansi + "</p>";
        tentang += "</div>";
      }
      $("#tentang").html(tentang);
    }
  });
});
