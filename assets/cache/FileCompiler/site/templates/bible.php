<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Audio Bible</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>

<body class="bg-light">

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Audio Bible</h1>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="bible-book-chooser">Choose a Book</label>
                        <select name="bible-book-chooser" id="bible-book-chooser" class="form-control custom-select">
                            <?php foreach ( $page->children as $bible_book ): ?>
                                <option value="<?= $bible_book->url ?>">
                                    <?= $bible_book->title ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <hr>
                    <div class="btn-toolbar" role="toolbar">
                        <div class="btn-group mr-2" role="group">
                            <?php $i = 1 ?>
                            <?php $a = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20) ?>
                            <?php foreach ( $a as $chapter ): ?>
                            <button type="button" class="btn btn-outline-primary<?= $i === 1 ? " active" : "" ?>"><?= $i; $i++; ?></button>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <h5 id="bible-chapter-title" class="card-title mt-2"><?= $page->children->first()->bible_book_chapters->first()->description ?></h5>
                    <audio controls class="w-100">
                        <source id="bible-chapter-file-url" src="<?= $page->children->first()->bible_book_chapters->first()->url ?>" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

<script>

    // const bibleBookChooser = document.querySelector( '#bible-book-chooser' );
    // const bibleChapterTitle = document.querySelector( '#bible-chapter-title' );
    // const bibleChapterFileUrl = document.querySelector( '#bible-chapter-file-url' );
    //
    // bibleBookChooser.addEventListener( 'onchange', () => {
    //     bibleChapterTitle.innerHTML = bibleBookChooser.innerHTML;
    //     bibleChapterFileUrl.src = bibleBookChooser.value;
    // } );

</script>
</body>
</html>