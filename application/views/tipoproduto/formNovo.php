<section class="section">

  <div class="card shadow mb-6">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Cadastro Novos Tipos de Produtos</h6>
    </div>
        <div class="card shadow mb-4">
          <div class="card-body">
            
              <form method="POST" action="/index.php/tipoproduto/salvarnovo">
                <div class="row mb-3">
                  
                  <div class="col-sm-10">
                    <input type="text" name="tipoproduto" placeholder="Digite o tipo de produto" class="form-control" required>
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