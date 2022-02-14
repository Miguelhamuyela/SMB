<div class="row">

    <div class="col-md-8">
      <div class="form-group">
          <label for="name">Nome do Software <small class="text-danger">*</small></label>
          <input type="text" name="nameSoftware" id="nameSoftware" value="{{ isset($manufacture->nameSoftware) ? $manufacture->nameSoftware: old('nameSoftware') }}"
              class="form-control border rounded" placeholder="Nome do Software" required>
      </div>
  </div>
  
  
  <div class="col-md-4">
    <div class="form-group">
        <label for="category">Categoria <small class="text-danger"> *</small></label>
        <input type="text" name="category" id="category" value="{{ isset($manufacture->category) ? $manufacture->category: old('category') }}"
            class="form-control border rounded" placeholder="Categoria" required>
    </div>
  </div>
  
  </div>
  
  
  <div class="row">
  
  <div class="col-md-12">
    <div class="form-group">
        <label for="file">Arquivo <small class="text-danger">*</small></label>
        
        <div class="input-group col-xs-12">
          <input type="file" name="file" id="file"
           value="{{ isset($manufacture->file) ? $manufacture->file: old('file') }}"
            class="form-control file-upload-info"  placeholder="Arquivo">
       
        </div>
    </div>
  </div>

  <div class="col-md-12">
    <div class="form-group">
        <label for="file">Descrição <small class="text-danger">*</small></label>
        <textarea name="description" class="form-control rounded" style="min-height:100px; min-width:100%">
            {{ isset($manufacture->description) ? $manufacture->description : old('description') }}
        </textarea>
    </div>
  </div>
  
  

  </div>
  <!-- /.col -->