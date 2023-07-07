<h2>Employment</h2>
<div class="row g-3">
    <div class="col-md-2">
        <label class="form-label">@lang('apply.from')</label>
        <input type="date" class="form-control form-control-lg @error('email') is-invalid @enderror" wire:model.defer="email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
                        
    <div class="col-md-2">
        <label class="form-label">@lang('apply.to')</label>
        <input type="date" class="form-control form-control-lg @error('telephone') is-invalid @enderror" wire:model.defer="telephone">
        @error('telephone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="col-md-2">
        <label class="form-label">@lang('apply.telephone')</label>
        <input class="form-control form-control-lg @error('telephone') is-invalid @enderror" wire:model.defer="telephone">
        @error('telephone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="col-md-5">
        <label class="form-label">@lang('apply.telephone')</label>
        <input class="form-control form-control-lg @error('telephone') is-invalid @enderror" wire:model.defer="telephone">
        @error('telephone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    
    <div class="col-md-1">
    <div wire:click="addInput" class="flex items-center justify-center text-blue-600 text-sm py-4 w-full cursor-pointer">
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path></svg>        
    </div>
    </div>

</div>
