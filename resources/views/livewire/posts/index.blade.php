<div>
    <div class="d-flex justify-content-between flex-wrap">
        @foreach ($posts as $post)
        <div id="post-box" class="card align-self-stretch m-1" style="width: 49%">
            <div class="card-body">
                <div class="card-title">
                    <h4>{{ $post->title }}</h4>
                    <p id="timestamp">{{ $post->created_at->format('F d, Y g:i A') }}</p> <br>
                    <p>{{ $post->content }}</p>
                </div>
            </div>
            <div class="card-footer">
                {{-- <a href="{{ url('/posts/edit/' . $post->id) }}" ><i id="pen" class="fa-solid fa-user-pen"></i></a> --}}
                <a href="{{ url('edit', ['post' => $post->id]) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                <a href="{{ url('delete', ['post' => $post->id]) }}" ><i class="fa-solid fa-trash"></i></a>
            </div>
        </div>
        @endforeach
    </div>


    <style>
        #post-box{
            background-color: #F6FBF4;
            color: dark;
        }

        .card-footer{
            background-color: #4B8673;
            color: white;
        }
        a{
            color: #F6FBF4;
            margin-right: 8px;
        }
    
    
    </style>
</div>


