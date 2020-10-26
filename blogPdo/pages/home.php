<br><br><br>



<div class="row">

    <div class="col-8">
        <ul>
            <?php foreach(App\Table\Article::getLast() as $post): ?> 
                <h2><a href="<?= $post->getUrl() ?>"><?= $post->titre; ?></a></h2>
                <p><em><?= $post->categorie; ?></em></p>
                <p><?= $post->getExtrait() ?></p>
            <?php endforeach ?>   
        </ul>
    </div>

    <div class="col-4">
        <ul>    
            <?php foreach(App\Table\Categorie::all() as $categorie): ?> 
                <li><a href="<?= $categorie->url; ?>"><?= $categorie->titre; ?></li>
                
            <?php endforeach ?>
        </ul>
    </div>



</div>


 

