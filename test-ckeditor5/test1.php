<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>CKEditor 5 – Classic editor</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/translations/fr.js"></script>
</head>
<body>
<h1>Classic editor - avec CDN</h1>
<form action="" method="post">
<textarea name="content" id="editor">
        &lt;p&gt;This is some sample content.&lt;/p&gt;
    </textarea>
    <input type="submit" value="Envoyer">
</form>
<pre>
<?php
var_dump($_POST);
?>
</pre>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ),
            {
                language: 'fr',
                //toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ]
            })
        .catch( error => {
        console.error( error );
    } );
</script>
</body>
</html>