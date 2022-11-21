<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Listagem de Produtos da Loja</h6>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Perecivel</th> 
                            <th>Tipo</th>  
                            <th>Valor(R$)</th>                                          
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Perecivel</th> 
                            <th>Tipo</th>  
                            <th>Valor(R$)</th>                                        
                        </tr>
                    </tfoot>
                    <tbody>   
                        <?php echo $tabela; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>