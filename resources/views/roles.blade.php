@extends('layouts.app')

@section('title', 'New role')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Role:</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="/roles">
                      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <div>
                            Admin: <input type="checkbox" name="role" value="1"><br><br>

                            <input type="hidden" name="user_id" value="<?php $user = Auth::user(); print($user->id); ?>">

                        </div>
                        <div>
                           <input type="submit" name="submit">
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')
