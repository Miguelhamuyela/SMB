<div class="row">

    <div class="col-md-4">
        <div class="form-group">
            <label for="name">Curso <small class="text-danger">*</small></label>
            <select type="text" name="course" id="course" class="form-control border rounded" required>

                @if (isset($course->course))
                    <option value="{{ $course->course }}" class="text-primary h6 bg-primary text-white" selected>
                        {{ $course->course }}
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

    <div class="col-md-4">
        <div class="form-group">
            <label for="timeCourse">Tempo do Curso <small class="text-danger"> *</small></label>
            <input type="timeCourse" name="timeCourse" value="{{ isset($course->timeCourse) ? $course->timeCourse : old('timeCourse') }}" id="timeCourse"
                class="form-control border">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="note">Tempo do Curso <small class="text-danger"> *</small></label>
            <input type="note" name="note" value="{{ isset($course->note) ? $course->note : old('note') }}" id="note"
                class="form-control border">
        </div>
    </div>

</div>

<!-- /.col -->
