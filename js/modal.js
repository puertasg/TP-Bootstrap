$("#formCollab").on("submit", function () {
    $("#modelId").modal("toggle");
});

$("#buttonCreer").on("click", function() {
    nom = $("#inputNom").val();
    prenom = $("#inputPrenom").val();
    dateNaissance = $("#inputDate").val();
    adresse = $("#textAdresse").val();
    noSecu = $("#inputNoSecu").val();

    $("#modalNom").text(nom);
    $("#modalPrenom").text(prenom);
    $("#modalDate").text(dateNaissance);
    $("#modalAdresse").text(adresse);
    $("#modalNoSecu").text(noSecu);
});