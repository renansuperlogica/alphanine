
       
       <div class="wrapper" class="wrappermainarticle" id="centeredarticle"> 
       
        <?= $this->assign('title',$title);?>



                <?php foreach ($articles as $article): ?>
                  <table class="articletitle">
                  <tr>
                      <td>
                      <h1 align="center">  <?=$this->Html->link($article->title, ['action' => 'view', $article->id]);?> </h1> <br/>
                    </td>
                </tr>
             </table>
            <table class="articlebody">
                <tr>
                    <td>
                  <?= $preview = $article->body?>
                    <td>
                </tr>
                <tr>


                <?php endforeach; ?>
            </table>

                        <br>
</div>