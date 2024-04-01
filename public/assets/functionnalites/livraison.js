

function ajouterDesItems() {

    alert('sss');

}


function saveLivraison(event)  {
    var vdesignation = document.getElementsByName("designation[]");
    var vpoids = document.getElementsByName("poids[]");
    const nom = document.getElementById("nom").value;
    const prenom = document.getElementById("prenom").value;
    const email = document.getElementById("email").value;
    const telephone = document.getElementById("telephone").value;
    const contact = document.getElementById("contact").value;
    const city_id = document.getElementById("city_id").value;
    const adresse = document.getElementById("adresse").value;


    const designation = [];
    const poids = [];

    for (let i = 0; i < vdesignation.length; i++) {
        designation.push(vdesignation[i].value);
    }

    for (let i = 0; i < vpoids.length; i++) {
        poids.push(vpoids[i].value);
    }

      $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
        type: "POST",
        url: "/delivry",
        data: {
            "designation":designation,
            "poids":poids,
            "nom": nom,
            "prenom": prenom,
            "email": email,
            "telephone": telephone,
            "contact": contact,
            "city_id": city_id,
            "adresse": adresse,
            },
        success: function(response) {
            // window.location.href = ‘https://exampleURL.com/’;
            // alert(response.url);
            // return;
            console.log(response);
            // Traitez la réponse ici si nécessaire
        },
        error: function(error) {
            console.error(error);
            // alert('erreur de formulaire')
        }
    });



}

function removeRow() {
    const designationRows = document.getElementById("designationRows");
    const rows = designationRows.querySelectorAll(".row");
    if (rows.length > 0) {
        designationRows.removeChild(rows[rows.length - 1]);
    }
}


document.getElementById('images').addEventListener('change', function(event) {
    var files = event.target.files;
    var previewContainer = document.getElementById('previewContainer');

    previewContainer.innerHTML = '';

    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var reader = new FileReader();

        reader.onload = function(e) {
            var img = document.createElement('img');
            img.src = e.target.result;
            img.style.maxWidth = '100px';
            previewContainer.appendChild(img);
        };

        reader.readAsDataURL(file);
    }
});


function calculerPrixLivraison(poids) {
    // Prix de base
    let prixBase = 5; // Prix de base de livraison
    let prixParKilo = 2; // Prix par kilogramme

    // Calcul du prix total en fonction du poids
    let prixTotal = prixBase + (poids * prixParKilo);

    return prixTotal;
}


