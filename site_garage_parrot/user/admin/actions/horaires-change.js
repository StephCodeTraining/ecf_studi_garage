let horaires = {
  lundi: {
    matin: {
      ouverture: document.getElementById("lun-mat-ouverture"),
      fermeture: document.getElementById("lun-mat-fermeture"),
    },
    apresMidi: {
      ouverture: document.getElementById("lun-apM-ouverture"),
      fermeture: document.getElementById("lun-apM-fermeture"),
    },
  },
  mardi: {
    matin: {
      ouverture: document.getElementById("mar-mat-ouverture"),
      fermeture: document.getElementById("mar-mat-fermeture"),
    },
    apresMidi: {
      ouverture: document.getElementById("mar-apM-ouverture"),
      fermeture: document.getElementById("mar-apM-fermeture"),
    },
  },
  mercredi: {
    matin: {
      ouverture: document.getElementById("mer-mat-ouverture"),
      fermeture: document.getElementById("mer-mat-fermeture"),
    },
    apresMidi: {
      ouverture: document.getElementById("mer-apM-ouverture"),
      fermeture: document.getElementById("mer-apM-fermeture"),
    },
  },
  jeudi: {
    matin: {
      ouverture: document.getElementById("jeu-mat-ouverture"),
      fermeture: document.getElementById("jeu-mat-fermeture"),
    },
    apresMidi: {
      ouverture: document.getElementById("jeu-apM-ouverture"),
      fermeture: document.getElementById("jeu-apM-fermeture"),
    },
  },
  vendredi: {
    matin: {
      ouverture: document.getElementById("ven-mat-ouverture"),
      fermeture: document.getElementById("ven-mat-fermeture"),
    },
    apresMidi: {
      ouverture: document.getElementById("ven-apM-ouverture"),
      fermeture: document.getElementById("ven-apM-fermeture"),
    },
  },
  samedi: {
    matin: {
      ouverture: document.getElementById("sam-mat-ouverture"),
      fermeture: document.getElementById("sam-mat-fermeture"),
    },
    apresMidi: {
      ouverture: document.getElementById("sam-apM-ouverture"),
      fermeture: document.getElementById("sam-apM-fermeture"),
    },
  },
  dimanche: {
    matin: {
      ouverture: document.getElementById("dim-mat-ouverture"),
      fermeture: document.getElementById("dim-mat-fermeture"),
    },
    apresMidi: {
      ouverture: document.getElementById("dim-apM-ouverture"),
      fermeture: document.getElementById("dim-apM-fermeture"),
    },
  },
};

let changeHoraires = () => {
  let jour = document.getElementById("jour-semaine");
  let periode = document.getElementsByName("periode");
  let limite = document.getElementsByName("limite");
  let nouvelleHeure = document.getElementById("nouvel-horaire");

  for (let i = 0; i < periode.length; i++) {
    if (periode[i].checked === true) {
      periode = periode[i]["id"];
    }
  }

  for (let j = 0; j < limite.length; j++) {
    if (limite[j].checked === true) {
      limite = limite[j]["id"];
    }
  }

  console.log(jour.value);
  console.log(periode);
  console.log(limite);
  console.log(nouvelleHeure.value);

  let heureModifiée = horaires[jour.value][periode][limite];
  heureModifiée.textContent = nouvelleHeure.value;
};

let horairesFooter = document.getElementById("horaires-MaJed");
let listJours = Object.keys(horaires);
let horairesMaJed = [];
let br = "<br>";

for (let jour of listJours) {
  horairesMaJed.push(
    jour.substring(0, 3) +
      " : " +
      horaires[jour]["matin"]["ouverture"].textContent +
      " - " +
      horaires[jour]["matin"]["fermeture"].textContent +
      " " +
      horaires[jour]["apresMidi"]["ouverture"].textContent +
      " - " +
      horaires[jour]["apresMidi"]["fermeture"].textContent +
      br
  );
}
for (let horaireMaJed of horairesMaJed) {
  console.log(horaireMaJed);
  horairesFooter.innerHTML += horaireMaJed;
}
console.log(horairesMaJed);
let test = document.getElementById("test");

test.innerHTML = horairesMaJed;

{
  /* <table class="table">
    <thead>
        <tr>
            <th></th>
            <th>Lun</th>
            <th>Mar</th>
            <th>Mer</th>
            <th>Jeu</th>
            <th>Ven</th>
            <th>Sam</th>
            <th>Dim</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td rowspan="2">Matin</td>
            <td id="lun-mat-ouverture">08:45</td>
            <td id="mar-mat-ouverture">08:45</td>
            <td id="mer-mat-ouverture">08:45</td>
            <td id="jeu-mat-ouverture">08:45</td>
            <td id="ven-mat-ouverture">08:45</td>
            <td id="sam-mat-ouverture">08:45</td>
            <td id="dim-mat-ouverture">08:45</td>
        </tr>
        <tr>
            <td id="lun-mat-fermeture">12:00</td>
            <td id="mar-mat-fermeture">12:00</td>
            <td id="mer-mat-fermeture">12:00</td>
            <td id="jeu-mat-fermeture">12:00</td>
            <td id="ven-mat-fermeture">12:00</td>
            <td id="sam-mat-fermeture">12:00</td>
            <td id="dim-mat-fermeture">12:00</td>
        </tr>
        <tr>
            <td rowspan="2">Après- <br> midi</td>
            <td id="lun-apM-ouverture">14:00</td>
            <td id="mar-apM-ouverture">14:00</td>
            <td id="mer-apM-ouverture">14:00</td>
            <td id="jeu-apM-ouverture">14:00</td>
            <td id="ven-apM-ouverture">14:00</td>
            <td id="sam-apM-ouverture">14:00</td>
            <td id="dim-apM-ouverture">14:00</td>
        </tr>
        <tr>
            <td id="lun-apM-fermeture">18:00</td>
            <td id="mar-apM-fermeture">18:00</td>
            <td id="mer-apM-fermeture">18:00</td>
            <td id="jeu-apM-fermeture">18:00</td>
            <td id="ven-apM-fermeture">18:00</td>
            <td id="sam-apM-fermeture">18:00</td>
            <td id="dim-apM-fermeture">18:00</td>
        </tr>
    </tbody>
</table>  */
}
