function likePost(event) {
    let userid = event.target.closest(".ceciestunbouttonlike").dataset.userid;
    if (!userid) {
      alert("Vous devez être connecté pour aimer ce message.");
      return;
    }
  
    // Récupérer l'identifiant du message
    let postid = event.target.closest(".ceciestunbouttonlike").dataset.postid;
  
    // Créer l'objet contenant les données POST
    let data = new URLSearchParams();
    data.append("postid", postid);
    data.append("userid", userid);
  
    // Envoyer la requête POST
    fetch("./registerlike2.php", {
      method: "POST",
      body: data,
    })
      .then(response => {
        if (!response.ok) {
          throw new Error("Une erreur s'est produite lors de la requête.");
        }
        return response.json();
      })
      .then(data => {
        if (data.error) {
          alert(data.error);
        } else {
          console.log("Likes :", data.likes);
  
          const boutonLike = event.target.closest(".bouttonlikejs");
          if (typeof data.alreadyLiked === 'boolean') {
            if (data.alreadyLiked) {
              boutonLike.classList.add('liked');
            } else {
              boutonLike.classList.remove('liked');
            }
          }
        }
      })
      .catch(error => {
        console.error(error);
        alert("Une erreur s'est produite lors de la requête.");
      });
  }