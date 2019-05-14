@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Popis taskova</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <br><br>
                    <?php
                      $tasks = DB::table('tasks')->pluck('naziv_rada');
                      $size = sizeof($tasks);
                      //print($tasks);
                      if($tasks != ""){
                        for($i=0; $i<$size; $i++){
                            print($tasks[$i]);
                            print("<br>");
                        }
                      } else {
                        print("No Tasks in database");
                      }

                     ?>

                    <div class="links"><br>
                          <a href="/roles">Select yout role</a>
                    </div>
                    <div class="links"><br>
                          <a href="/tasks">Add new task</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
