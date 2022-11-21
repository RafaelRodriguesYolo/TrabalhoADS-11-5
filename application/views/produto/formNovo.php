<section class="section">

  <div class="card shadow mb-6">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Cadastro Novos Produtos</h6>
    </div>
        <div class="card shadow mb-4">
          <div class="card-body">
            
              <form method="POST" action="/index.php/produto/salvarnovo">
                <div class="row mb-3">
                  
                  <div class="col-sm-10">
                    <input type="text" name="nome" placeholder="Produto" class="form-control" required>
                    <br />
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="perecivel" placeholder="Perecivel... 0 ou 1" class="form-control" required>
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
                    <input type="text" name="valor" placeholder="Valor" class="form-control" required>
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