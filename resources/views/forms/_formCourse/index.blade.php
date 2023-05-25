<div class="row">
    <div class="col-md-5">
        <div class="form-group">
            <label for="name">Nome <small class="text-danger">*</small></label>
            <input required value="{{ isset($registrations->name) ? $registrations->name : old('name') }}" type="text"
                name="name"class="form-control" />
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="nif">Pai<small class="text-danger">*</small></label>
            <input required value="{{ isset($registrations->father) ? $registrations->father : old('father') }}" type="text"
                name="father"class="form-control" />
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="clienttype">Mãe<small class="text-danger">*</small></label>
            <input required value="{{ isset($registrations->mather) ? $registrations->mather : old('mather') }}" type="text"
                name="mather"class="form-control" />
        </div>
    </div>

</div>
