@php
   $id = 1; 
@endphp

<div class="container-fluid">
<h1>{{ __('User') }}</h1>

<livewire:usr.user.user-table-view />

<p>{{ $count }}</p>
    <div class="row justify-content-center">       
        <table class="table table-sm table-bordered">
            <thead>
                <tr>
                    <td>id</td>
                    <td>@sortablelink('first_name','first name')</a></td>
                    <td>last_name</td>
                    <td>email</td>
                </tr>
            </thead>
        <tbody> 
            @foreach($users as $user)
                <tr>
                    <td>{{ $id++ }}
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>      
    </table>           
    </div>
</div>

