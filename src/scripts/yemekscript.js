function sonrakiyemek() {
    var foto = document.getElementById("yemekFoto");
    var tarif = document.getElementById("yemektarif");

    if (foto.style.display === "none") {
        // Eğer yemekFoto gizliyse, göster ve yemektarif'i gizle
        foto.style.display = "inline";
        tarif.style.display = "none";
    } else {
        // Eğer yemekFoto görünüyorsa, gizle ve yemektarif'i göster
        foto.style.display = "none";
        tarif.style.display = "block";
    }
}
