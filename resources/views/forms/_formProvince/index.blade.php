
 <div class="col-md-12">
    <div class="form-group">
        <label for="proviceName">Província<small class="text-danger">*</small></label>
        <input type="text" name="proviceName" id="proviceName"
            value="{{ isset($provinces->proviceName) ? $provinces->proviceName : old('proviceName') }}"
            class="form-control border rounded" placeholder="Nome da Província " required>
    </div>
    <div class="form-group">
        <label for="Detalhes Sobre a Startup">Detalhes Sobre a Startup <small
                class="text-danger">*</small></label>
        <textarea class="form-control rounded" name="obs" required
            style="min-height:70px; min-width:100%">{{ isset($provinces->obs) ? $provinces->obs : old('obs') }}</textarea>
    </div>
</div>

<!-- /.col -->
