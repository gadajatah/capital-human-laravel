<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <form wire:submit.prevent="update">
        <input type="hidden" wire:model="staffId">
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputName">Name</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" 
              id="inputName" 
              wire:model="name" 
              placeholder="Input Name"
              value="{{ $name }}">
              @error('name')
                    <span class="invalid-feedback">
                            {{ $message }}
                    </span>
               @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="inputDepartment">Department</label>
              <input type="text" class="form-control @error('department') is-invalid @enderror" 
              id="inputDepartment" 
              wire:model="department" 
              placeholder="Input Department"
              value="{{ $department }}">
              @error('department')
                    <span class="invalid-feedback">
                            {{ $message }}
                    </span>
                @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputPosition">Position</label>
              <input type="text" class="form-control @error('position') is-invalid @enderror" 
              id="inputPosition" 
              wire:model="position" 
              placeholder="Input Position"
              value="{{ $position }}">
              @error('position')
                    <span class="invalid-feedback">
                            {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="inputPhone">Phone</label>
              <input type="text" class="form-control @error('phone') is-invalid @enderror" 
              id="inputPhone" 
              wire:model="phone"
              placeholder="Input Phone"
              value="{{ $phone }}">
              @error('phone')
                    <span class="invalid-feedback">
                            {{ $message }}
                    </span>
                @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCurrency">Currency</label>
              <input type="text" class="form-control @error('currency') is-invalid @enderror" 
              id="inputCurrency" 
              wire:model="currency"
              placeholder="Input Currency"
              value="{{ $currency }}">
              @error('currency')
                    <span class="invalid-feedback">
                            {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="inputSalary">Salary</label>
              <input type="number" class="form-control @error('salary') is-invalid @enderror" 
              id="inputSalary" 
              wire:model="salary"
              placeholder="Input Salary"
              value="{{ $salary }}">
              @error('salary')
                <span class="invalid-feedback">
                        {{ $message }}
                </span>
            @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="inputResume">Resume</label>
                <input type="file" class="form-control @error('resume') is-invalid @enderror" 
                id="inputResume" 
                wire:model="resume"
                placeholder="Input Resume"
                value="{{ $resume }}">
                @error('resume')
                  <span class="invalid-feedback">
                          {{ $message }}
                  </span>
              @enderror
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</div>
