<form class="card-body" action="{{ route('admin.clients.report') }}" target="_blank">
    @csrf
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Imprimir Lista de Clientes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Origem <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <select required name="origin" class="form-control" name="select">
                            <option value="Auditório">Auditório</option>
                            <option value="Cowork">Cowork</option>
                            <option value="E-Learning">E-Learning</option>
                            <option value="Reparação de Equipamentos">Reparação de Equipamentos</option>
                            <option value="Fábrica de Software">Fábrica de Software</option>
                            <option value="Startup">Startup</option>
                            <option value="all">Todos Pagamentos</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Imprimir</button>
                </div>
            </div>
        </div>
    </div>
</form>
