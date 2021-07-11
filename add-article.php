<!DOCTYPE html>
<html lang="fr">
  <head>
    <?php require_once 'includes/head.php' ?>
    <link rel="stylesheet" href="/php-chapitre10-projet-todo-part2/public/css/add-article.css">

    <title>Créer un article</title>
  </head>
  <body>
    <div class="container">
      <?php require_once 'includes/header.php' ?>
      <div class="content">
        <div class="block p-20 form-container">
          <h1>Ecrire un article</h1>
          <form action="/add-article.php" method="post">
            <div class="form-control">
              <label for="title">Titre</label>
              <input type="text" name="title" id="title">
              <!-- <p class="text-error"></p> -->
              </div>
            <div class="form-control">
              <label for="image">Image</label>
              <input type="text" name="image" id="image">
              <!-- <p class="text-error"></p> -->
            </div>
            <div class="form-control">
              <label for="category">Catégorie</label>
              <select name="category" id="category">
                <option value="technology">Technologie</option>
                <option value="nature">Nature</option>
                <option value="politics">Politique</option>
              </select>
                 <!-- <p class="text-error"></p> -->
            </div>
            <div class="form-control">
              <label for="content">Contenu</label>
              <textarea name="content" id="content"></textarea>
              <!-- <p class="text-error"></p> -->
            </div>
            <div class="form-actions">
              <button class="btn btn-secondary" type="button">Annuler</button>
              <button class="btn btn-primary" type="submit">Sauvegarder</button>
            </div>
          </form>
        </div>
      </div>
      <?php require_once 'includes/footer.php' ?>
    </div>

  </body>
</html>