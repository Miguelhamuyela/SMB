<div class="row">

    <div class="col-md-12">

        <div class="form-group">
            <label for="title">Área de Actuação da Empresa <small class="text-danger">*</small></label>
            <textarea class="form-control rounded" id="editor1" rows="1" name="title" required
                style="">{{ isset($cowork->title) ? $cowork->title : old('title') }}</textarea>
        </div>

    </div>

    <div class="col-md-12">

        <div class="form-group">
            <label for="activities">Actividades Realizadas no Cowork <small class="text-danger">*</small></label>
            <textarea class="form-control rounded" id="editor2" rows="1" name="activities" required
                style="">{{ isset($cowork->activities) ? $cowork->activities : old('activities') }}</textarea>
        </div>

    </div>

</div>



<!-- /.col -->
