<form action=" {{ route('menu.store') }} " method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="titre" placeholder="Nom du menu">
    <textarea name="description"> </textarea>
    <label for="photo" id="photo">Choisissez l'image du Menu</label>
    <input type="file" name="photo">
    <button type="submit">Ajouter</button>
</form>