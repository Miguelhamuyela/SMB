<div class="row">

    <div class="col-md-12">
      <div class="form-group">
          <label for="name">Título da Reunião <small class="text-danger">*</small></label>
          <input type="text" name="title" id="title" value="{{ isset($cowork->title) ? $cowork->title: old('title') }}"
              class="form-control border rounded" placeholder="Title" required>
      </div>
  </div>
  
  </div>
  
  
 
  <!-- /.col -->