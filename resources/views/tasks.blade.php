@extends('layouts.app')

@section('title', 'New task')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Task:</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="/tasks">
                      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <div>
                            Naziv rada: <input type="text" name="naziv_rada"><br><br>
                            Naziv rada na engleskom: <input type="text" name="naziv_rada_na_engleskom"><br><br>
                            Zadatak rada: <input type="text" name="zadatak_rada"><br><br>
                            Tip studija: <input type="text" name="tip_studija"><br><br>
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
