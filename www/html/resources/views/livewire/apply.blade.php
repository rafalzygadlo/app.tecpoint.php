<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-12">
        @if ($errors->any())
        <div class="text-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
        </div>
        @endif
           <div wire:loading>loading...</div>
            <div class="box">
            <h1 class="box-header">@lang('apply.title') </h1>
            <hr>
                <div class="card-body">
                    <form wire:submit.prevent="submit">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">@lang('apply.first_name.name')</label>
                            <div class="col-md-8">
                                <input class="form-control form-control-lg @error('first_name') is-invalid @enderror" wire:model.defer="first_name">
                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">@lang('apply.last_name')</label>
                            <div class="col-md-8">
                                <input class="form-control form-control-lg @error('last_name') is-invalid @enderror" wire:model.defer="last_name">
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">@lang('apply.birth_date')</label>
                            <div class="col-md-8">
                                <input type="date" class="form-control form-control-lg @error('birth_date') is-invalid @enderror" wire:model.defer="birth_date">
                                @error('birth_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">@lang('apply.email')</label>
                            <div class="col-md-8">
                                <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" wire:model.defer="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label">@lang('apply.telephone')</label>
                            <div class="col-md-8">    
                                <input type="tel" class="form-control form-control-lg @error('telephone') is-invalid @enderror" wire:model.defer="telephone">
                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('apply.confirm1') }}
                                        {{ __('apply.confirm2') }}<a href="mailto:info@tec-point.de">info@tec-point.de</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="d-md-flex justify-content-md-end">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    @lang('apply.send')
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
