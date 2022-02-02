<div class="row mb-2">
    <div class="col-md-5">
        <label class="text-muted form-label" for="type">Tipo</label>
      <input type="text" value="{{ isset($startup->type) ? $startup->type : old('type') }}" name="type" class="form-control bg-secondary border border-secondary  rounded" placeholder="Ex: Express , Transferencia, Voucher  *">
    </div>

    <div class="col-md-4">
        <label class="text-muted form-label" for="value">Valor</label>
        <input type="text" value="{{ isset($startup->value) ? $startup->value : old('value') }}" name="value" class="form-control bg-secondary border border-secondary rounded" placeholder="Valor *" >
      </div>

      <div class="col-md-3">
        <label class="text-muted form-label" for="currency">Moeda</label>
        <select  name="currency" class="form-control bg-secondary border border-secondary rounded" id="">
          <option>Kwanza</option>
          <option>Dollar</option>
          <option>Euro</option>
        </select>
      </div>


</div>

<div class="row mb-2">
    <div class="col-md-6">
        <label class="text-muted form-label" for="nif">Referencia</label>
        <input value="{{ isset($startup->reference) ? $startup->reference : old('reference') }}" type="text" name="reference" class="form-control bg-secondary border border-secondary rounded" placeholder="Referencia  *">
      </div>

      <div class="col-md-6">
          <label class="text-muted form-label" for="status">Status</label>
          <select name="status" class="form-control bg-secondary border border-secondary rounded" id="">
          <option>Pago</option>
          <option>Não Pago</option>
          <option>Em Validação</option>
          <option>Negado</option>
        </select>
      </div> 

</div>




