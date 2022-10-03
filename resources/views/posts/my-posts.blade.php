@extends('base')

@section('content')
@livewireScripts
    <h1 id="top-title" class="text-white">Welcome, user!</h1>
    <br>
    <div class="container">
        <div class="row">
            <div class="col sm-1 mb-4">
                <livewire:posts.create/>
            </div>
            <div id="right-side" class="col sm-1 mb-4">
                @if(session('message'))
                    <div class="container col-md-6 offset-md-3 mt-5 alert alert-success text-center">{{ session('message') }}</div>
                @endif
                @if(session('error'))
                    <div class="container col-md-6 offset-md-3 mt-5 alert alert-danger text-center">{{ session('error') }}</div>
                @endif
            </div>
            <h2 class="text-center text-white">Your Posts</h2>
            <div>
                <livewire:posts.index/>
            </div>
        </div>
    </div>
    
    <script>
        
    </script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lavishly+Yours&display=swap');

   

    
    #top-title{
        margin-top: 30px;
    }
    body{
        background-color: rgb(251, 234, 251);
    }

    h4, p{
        font-family: 'Raleway', sans-serif;
        font-weight: bold;
    }

    #timestamp{
        font-size: 10px;
    }

    #pen {
        color: rgb(140, 50, 140)
    }

    ::-webkit-scrollbar {
            display: none;
        }
    </style>
@endsection
