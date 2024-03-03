

function addRow() {
    const designationRows = document.getElementById("designationRows");
    const newRow = document.createElement("div");
    newRow.className = "row";
    newRow.innerHTML = `
        <div class="col-md-6">
            <div class="form-group">
            <label class="form-label" for="designation">
            Désignation  de l'article
             <span class="text-danger">*</span>
         </label>
                <input type="text" class="form-control designation" id="designation" name="designation[]">
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
            <label class="form-label" for="price">
            Poids
             <span class="text-danger">*</span>
         </label>
                <input type="number" class="form-control poids" id="poids"  name="poids[]">
            </div>
        </div>

        <div class="col-md-2">
        <div class="form-group">
        <label class="form-label" for="price">
         P U De livraison
         <span class="text-danger">*</span>
     </label>
            <input type="number" class="form-control prixdelivry" id="prixdelivry"  id="prixdelivry" name="prixdelivry[]"  disabled>
        </div>
    </div>


        <div class="col-md-2">
        <div class="form-group">
        <br>
            <button type="button" class="btn btn-outline-danger" onclick="removeRow(this)"> <i class="fe fe-trash"></i></button>
        </div>
    </div>

    `;
    designationRows.appendChild(newRow);

}


function saveLivraison()  {
    var vdesignation = document.getElementsByName("designation[]");
    var vpoids = document.getElementsByName("poids[]");
    const nom = document.getElementById("nom").value;
    const prenom = document.getElementById("prenom").value;
    const email = document.getElementById("email").value;
    const telephone = document.getElementById("telephone").value;
    const contact = document.getElementById("contact").value;
    const city = document.getElementById("city").value;
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
            "city": city,
            "adresse": adresse,
            },
        success: function(response) {
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



function updatePreview() {
    var previewHTML = '<h3>Prévisualisation</h3>';
    previewHTML += '<ul>';

    var rows = itemRows.querySelectorAll('tr');
    rows.forEach(function(row) {
        var cells = row.querySelectorAll('td');
        var designation = cells[0].querySelector('input').value;
        var quantity = cells[1].querySelector('input').value;
        var price = cells[2].querySelector('input').value;

        previewHTML += '<li>' + designation + ' - ' + quantity + ' - ' + price + '</li>' + price * quantity ;
    });

    previewHTML += '</ul>';

    previewDiv.innerHTML = previewHTML;
}
