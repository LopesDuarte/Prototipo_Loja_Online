
    <!--Details Modal -->
    <div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">

        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Artista 1</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            
            <span aria-hidden="true">&times;</span>
            </button>

                </div>
                <div class="modal-body">
                    <div class="container-fluid">

                        <div class="col-sm-6">
                            <div class="center-block">
                                <img src="images/artist1.jpg" alt="artista 1" class="details img-responsive img-thumb">

                            </div>

                        </div>
                        <div class="col-sm-6"></div>
                        <h4>Detalhes</h4>
                        <p>Descrição sobre o artista 1.
                        </p>
                        <p>Preço: 350€</p>
                        <p>Género de música: Rock, Pop</p>
                        <form action="add_cart.php" method="post">
                            <div class="form-group">
                                <div class="form-group">

                                    <div class="col-xs-3">

                                        <label for="hours">Hours</label>
                                        <input type="text" class="form-control" id="hours" name="hours">
                                    </div>
                                    <div class="form-group">
                                        <label for="days">Days</label>
                                        <select name="days" id="days" class="form-control">
                               
                               <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                               </select>
                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
                 <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span> Agendar com Artista</button>
            </div>
            </div>
            
        </div>


    </div>