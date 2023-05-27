<div class="row">
    <div class="col-md-5">
        <div class="form-group">
            <label for="name">Nome do Curso<small class="text-danger">*</small></label>
            <input required
                value="{{ isset($courses->courseName) ? $courses->courseName : old('courseName') }}"type="text"
                name="courseName"class="form-control">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="nif">Duração do Curso<small class="text-danger">*</small></label>
            <input required value="{{ isset($courses->duration) ? $courses->duration : old('duration') }}"type="text"
                name="duration" class="form-control">
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="start">Início do Curso<small class="text-danger">*</small></label>
            <input required
            value="{{ isset($courses->start) ? $courses->start : old('start') }}"type="text"
            name="start"class="form-control">
        </div>
    </div>


    <div class="col-md-12">
        <div class="form-group">
            <label for="depart">Secção do Curso<small class="text-danger">*</small></label>
            <input required
            value="{{ isset($courses->start) ? $courses->depart : old('depart') }}"type="text"
            name="depart"class="form-control">
        </div>
    </div>

</div>
