<div class="row mb-2">
    <div class="col-md-4">
        <label class="text-muted form-label" for="startup">Inicio do Contrato</label>
      <input type="datetime-local" value="{{ isset($startup->started) ? $startup->started: old('started') }}" name="started" class="form-control bg-secondary border border-secondary  rounded" placeholder="Inicio *">
    </div>

    <div class="col-md-4">
        <label class="text-muted form-label" for="nif">Fim do Contrato</label>
        <input type="datetime-local" value="{{ isset($startup->end) ? $startup->end: old('end') }}" name="end" class="form-control bg-secondary border border-secondary rounded" placeholder="Fim *" aria-label="Last name">
      </div>

      <div class="col-md-4">
        <label class="text-muted form-label" for="nif">Perspectiva</label>
        <input type="datetime-local" name="prespective" value="{{ isset($startup->prespective) ? $startup->prespective: old('prespective') }}" class="form-control bg-secondary border border-secondary rounded" placeholder="perespectiva  *">
      </div>
</div>

