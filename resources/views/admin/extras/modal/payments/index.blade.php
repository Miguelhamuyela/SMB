<form target="_blank" class="card-body" method="POST"
action="#" enctype="multipart/form-data">
@csrf
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Imprimir Lista de Pagamentos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Pagamentos <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <select required name="" class="form-control" name="select">
                            <option value="">Cowork</option>
                            <option value="">Fábrica de Software</option>
                            <option value="">Startup</option>
                            <option value="">Reparação de Equipamentos</option>
                            <option value="">Auditório</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" target="_blank">Imprimir</button>
            </div>



        </div>
    </div>
</div>
</form>