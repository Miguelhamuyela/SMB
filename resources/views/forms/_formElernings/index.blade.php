<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label for="name">Curso <small class="text-danger">*</small></label>
            <select type="text" name="course" id="course" class="form-control border rounded" required>

                @if (isset($elerning->course))
                    <option value="{{ $elerning->course }}" class="text-primary h6 bg-primary text-white" selected>
                        {{ $elerning->course }}
                    </option>
                @else
                    <option disabled selected value="">selecione um curso</option>
                @endif
          
                <option>Criação de Sistema de Gestão de Empresas com Laravel 8</option>
                <option>IT Essentials 7.0</option>
                <option>CCNA1, CCNA2, CCNA3</option>
                <option>CCNA Security</option>
          
            </select>

        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="timeCourse">Período <small class="text-danger"> *</small></label>
            <input placeholder="Período do curso" type="text" name="timeCourse" value="{{ isset($elerning->timeCourse) ? $elerning->timeCourse : old('timeCourse') }}" id="timeCourse"
                class="form-control border" required>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="note">Nota <small class="text-danger"> *</small></label>
        <textarea name="note"  class="form-control rounded" style="min-height:50px; min-width:100%" required>
            {{ isset($elerning->note) ? $elerning->note : old('note') }}
        </textarea>
        </div>
    </div>

</div>

  



<!-- /.col -->
