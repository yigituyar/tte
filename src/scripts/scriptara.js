var results = ""; // Global değişken olarak tanımla
var filteredResults = ""; // Global değişken olarak tanımla

$("#country_name").on('input', function() {
    var currentTerm = $(this).val();

    if (currentTerm.length === 0) {
        // Input tamamen temizlendiğinde kartları temizle
        kartlariOlustur([]);
    } else if (currentTerm.length >= 1) {
        // Karakter eklenmişse
        $.ajax({
            url: "http://localhost/tatlituzlueksi/connect.php",
            type: "GET",
            dataType: "json",
            success: function(data) {
                results = $.map(data, function(value, key) {
                    return {
                        id: value.id,
                        label: value.yemekAdi,
                        tabloAdi: value.tablo_adi,
                    };
                });
                filteredResults = $.ui.autocomplete.filter(results, currentTerm);
                console.log(filteredResults);
                kartlariOlustur(filteredResults);
            }
        });
    }
});

function kartlariOlustur(filteredResults) {
    var kartContainer = document.getElementById("kartContainer");

    // Kartları temizle
    kartContainer.innerHTML = "";

    // Kart sayısı
    var kartSayisi = filteredResults.length;

    for (var i = 0; i < kartSayisi; i++) {
        // Kart elementini oluştur
        var kart = document.createElement("div");
        kart.className = "kart";
        kart.innerHTML = "<a href='portfolio.php?id="+filteredResults[i].id+"&sehir="+filteredResults[i].tabloAdi+"'>"+filteredResults[i].label+"</a>";

        // Kartı div'e ekle
        kartContainer.appendChild(kart);
    }
}

function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

/* Close */
function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
