<div class="row">

    <div class="col-md-12">

        <div class="form-group">
            <label for="title">Área de Actuação da Empresa <small class="text-danger">*</small></label>
            <textarea class="form-control rounded" rows="1" name="title" style="">
                {{ isset($cowork->title) ? $cowork->title : old('title') }}
            </textarea>
        </div>
      
  </div>

  <div class="col-md-12">

      <div class="form-group">
          <label for="activities">Actividades Realizadas no Cowork <small class="text-danger">*</small></label>
          <textarea class="form-control rounded" rows="1" name="activities" style="">
              {{ isset($cowork->activities) ? $cowork->activities : old('activities') }}
          </textarea>
      </div>
   
</div>
  
  </div>
  
  
 
  <!-- /.col -->