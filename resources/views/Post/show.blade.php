@extends('layouts.app')

<div class="container" style="position:absolute;
    left:0;
    right:0;
    margin-left:auto;
    margin-right:auto;">
    <br><br><br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">       
                <div class="card-body">

                    <a  href="/post/{{$post->id}}/edit" class="btn btn-warning"> Edit </a> 
                        <br>
                        Title: {{ $post->title }} <br>
                        Description: {{ $post->description }} <br>
                        Created At: {{ $post->created_at }}
                        Image: <img width="300" height="400" src="{{asset('storage/img/'.$post->img.'')}}">                               
                </div>
            </div>
        </div>
    </div>
</div>