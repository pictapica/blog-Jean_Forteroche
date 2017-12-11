 <?php
 
/**Afficher un tableau de tous les posts
  * $postmanager = new PostManager();
  * $chapters = $postmanager->getposts();
   
  * Ecrire un post grace à la fonction addpost
  * Modifier un post
   *Supprimer un post
   *Récuperer le nombre total des billets. 
   *
   * Voir le nombre de nouveaux commentaires
   Voir tous les commentaires dans un tableau
   Effacer un commentaire
   
   Voir s'il y a une modération
   update = accepter la modération
   delete = refuser la modération et donc accepter le message
**/

 
 /**  Dans MODEL/USERMANAGER.php
  *  //On verifie si le pseudo ou l'email  existent dans la bdd  
    public function verifAdd($pseudo, $email) {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM user WHERE pseudo = :pseudo OR email=:email');
        $req->execute(array(
            'pseudo' => $pseudo, PDO::PARAM_STR,
            '$email' => $email, PDO::PARAM_STR,));

        return $result = $req->fetch(PDO::FETCH_ASSOC);
    }
  */