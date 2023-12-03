(function () {
  // URL de l'API REST de WordPress
  let url = "http://localhost:8080/5w5/wp-json/wp/v2/posts?categories=28&per_page=30";

  let titre;

  // Effectuer la requête HTTP en utilisant fetch()
  fetch(url)
      .then(function (response) {
          // Vérifier si la réponse est OK (statut HTTP 200)
          if (!response.ok) {
              throw new Error("La requête a échoué avec le statut " + response.status);
          }
          // Analyser la réponse JSON
          return response.json();
      })
      .then(function (data) {
          // La variable "data" contient la réponse JSON
          // console.log("Variable data", data);

          // Maintenant, vous pouvez traiter les données comme vous le souhaitez
          // Par exemple, extraire les titres des articles comme dans l'exemple précédent
          data.forEach(function (article) {
              titre = article.title.rendered;
              console.log(titre);
              afficherProjet(data); // Pass the data to the afficherProjet function
          });
      })
      .catch(function (error) {
          // Gérer les erreurs
          console.error("Erreur lors de la récupération des données :", error);
      });

  let divProjets = document.querySelector('.site__projets'); 
  let counter = 1; // Initialize a counter

  function afficherProjet(data) {
      // Clear the articleContainer
      divProjets.innerHTML = '';

      // Loop through the data and create article elements
      data.forEach(article => {
          const divProjet1 = document.createElement("div");
          divProjet1.setAttribute("class", "projet");

          // Use the counter to create unique IDs
          const uniqueId = `projDiv${counter}`;
          divProjet1.setAttribute("id", uniqueId);


          divProjet1.setAttribute("onclick", `showText('${uniqueId}'), showText1('${uniqueId}'), moveDivback('${uniqueId}')`);
          divProjet1.className = "article";
          divProjet1.innerHTML = `
              <h3 class="titleProjetDroite" id="title${uniqueId}">${article.title.rendered}</h3>
              <p class="plus">Plus...</p>
              <div id="projText${uniqueId}" class="texteProjet">${article.excerpt.rendered}</div>
              <p id="carreBleuText${uniqueId}" class="">${article.content.rendered}</p>
          `;

          divProjets.appendChild(divProjet1);

          counter++; // Increment the counter for the next iteration
      });
  }
})();










function showText(uniqueId) {
  var text = document.getElementById(`carreBleuText${uniqueId}`);
  text.classList.toggle("show");
}

function showText1(uniqueId) {
  var text = document.getElementById(`projText${uniqueId}`);
  text.classList.toggle("show1");

  var title = document.getElementById(`title${uniqueId}`);
  title.classList.toggle("show1");
}

function moveDivback(uniqueId) {
  var proj = document.getElementById(`${uniqueId}`);
  var proj2 = document.getElementById(`${uniqueId}`);
  var div = document.getElementById("cont-projet");

  proj.classList.toggle("activ");
  proj2.classList.toggle("activ2");
  proj.classList.toggle("activ3");
  proj.classList.toggle("disableBlur");
  div.classList.toggle("enableBlur");
}

