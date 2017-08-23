<!-- File: src/Template/Articles/view.ctp -->
<div class="wrapper">
<table class="articletitle" align="center">
<tr><td>

<div align="center">
<h2 align="center"><?= $article->title ?></h2>
</td>
</tr>
</table>
            <table class="articlebody">
<tr>
<td>
<p><?= $article->body ?></p>
</td>
</tr>
</table> 
<p><small>Criado: <?= $article->created->format(DATE_RFC850) ?></small></p>
</div>
</div>