<div class="modal fade" id="modal_create_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weught-bold" id="exampleModalLabel">Crear producto</h5>
                <button onclick="$('#modal_create_product').modal('hide');" type="button" class="close"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('products_store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input name="name" placeholder="Nombre del producto..." type="text"
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <textarea name="description" placeholder="Descripción del producto (Opcional)" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="purchase_price">Precio de compra</label>
                                <input name="purchase_price" placeholder="0.00" min="1" type="number"
                                    step="0.1" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="sale_price">Precio de venta</label>
                                <input name="sale_price" placeholder="0.00" min="1" type="number" step="0.1"
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input name="stock" placeholder="0" min="1" type="number" class="form-control"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="image">Imagen (Opcional)</label>
                                <input name="image" placeholder="Nombre del producto..." type="file"
                                    class="form-control" accept="image/png, image/jpg, image/jpeg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button onclick="$('#modal_create_product').modal('hide');" type="button" class="btn btn-secondary"
                        data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
