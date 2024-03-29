<h4>@lang('apply.personal_data')</h4>
    <div class="row">
        
        <div class="col-md-6">
            <label class="form-label">@lang('apply.first_name')</label>
            <input class="form-control @error('first_name') is-invalid @enderror" wire:model="first_name">
            @error('first_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-6">
            <label class="form-label">@lang('apply.last_name')</label>
            <input class="form-control @error('last_name') is-invalid @enderror" wire:model="last_name">
            @error('last_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
                        
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">@lang('apply.birth_date')</label>
            <input type="date" class="form-control @error('birth_date') is-invalid @enderror" wire:model="birth_date">
            @error('birth_date')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-6">
            <label class="form-label">@lang('apply.place_of_birth')</label>
            <input class="form-control @error('place_of_birth') is-invalid @enderror" wire:model="place_of_birth">
            @error('place_of_birth')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="row g-3">
        <div class="col-md-6">    
            <label class="form-label">@lang('apply.pesel')</label>
            <input class="form-control @error('pesel') is-invalid @enderror" wire:model="pesel">
            @error('pesel')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-6">
            <label class="form-label">@lang('apply.marital_status')</label>
            <input class="form-control @error('marital_status') is-invalid @enderror" wire:model="marital_status">
            @error('place_of_birth')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="row g-3">
        <div class="col-md-6">    
            <label class="form-label">@lang('apply.citizenship')</label>
            <input class="form-control @error('citizenship') is-invalid @enderror" wire:model="citizenship">
            @error('citizenship')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-6">
            <label class="form-label">@lang('apply.confession')</label>
            <input class="form-control @error('confession') is-invalid @enderror" wire:model="confession">
            @error('confession')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
