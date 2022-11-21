<section class="section">

  <div class="card shadow mb-6">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Alterar Produto</h6>
    </div>
        <div class="card shadow mb-4">
          <div class="card-body">
            
              <form method="POST" action="/index.php/produto/salvaralteracao">
                  <input type="hidden" name="id" value="<?php echo $produto->idproduto; ?>" />
                <div class="row mb-3">
                  
                  <div class="col-sm-10">
                    <input type="text" name="nome" placeholder="Produto" value="<?php echo $produto->nome; ?>"  class="form-control" required />
                    <br />
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="perecivel" placeholder="Perecivel... 0 ou 1" value="<?php echo $produto->perecivel; ?>" class="form-control" required>
                    <br />  
                    </div>
                  <div class="col-sm-10">
                    <select name="tipoproduto" class="form-control" required>
                        <option value="">Selecione o Tipo</option>
                        <?php echo $opcoes; ?>
                    </select>
                    <br />
                  </div>
                  <br />
                  <div class="col-sm-10">
                    <input type="text" name="valor" placeholder="Valor" value="<?php echo $produto->valor; ?>" class="form-control" required>
                  </div>
                  </div>
                    <div class="text-center">
                      <br />
                      <button type="submit" class="btn btn-primary">Salvar</button>
                      <a class="btn btn-secondary" href="/index.php/">Cancelar</a>
                    </div>
                
              </form>
            
          </div>
        </div>
  </div>      

</section>