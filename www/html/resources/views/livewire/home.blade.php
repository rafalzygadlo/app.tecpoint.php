
<div class="container-fluid">

    <div class="row">
    <h1>{{ __('Home') }}</h1>

    <div class="col">
        <h3>{{ __('User') }}</h3>
        <a href="{{ route('user.index') }}">Users list</a><br>
        <a href>Transport list</a>
    </div>

    <div class="col">
        <h3>{{ __('Employee') }}</h3>
        <a href="{{ route('employee.index') }}">Employees list</a><br>
        <a class="nounderline" href="{{ route('rate.index') }}">Rates, bonuses</a><br>
        <a href>Transport</a><br>
        <a href>Groups</a><br>
    </div>
    
    <div class="col">
        <h3>{{ __('Flat') }}</h3>
        <a href="{{ route('employee.index') }}">Flats list</a><br>
        <a href="{{ route('employee.index') }}">electricity meter</a><br>
        <a class="nounderline" href="{{ route('rate.index') }}">Rates, bonuses</a><br>
        </ul>
    </div>

    <div class="col">
        <h3>{{ __('Settings') }}</h3>
        <a href>System</a><br>
        <a href>Transport list</a>
    </div>

    <div class="col">
        <h3>{{ __('Account') }}</h3>
        <a class="link-underline-light" href="{{ route('profile.index') }}">Profile</a><br>
        <a href="{{ @route('logout') }}">Change password</a><br>
        <a href="{{ @route('logout') }}">Logout</a><br>
    </div>
    

    <i class="bi bi-0-circle-fill"></i>
       
    </div>
</div>

