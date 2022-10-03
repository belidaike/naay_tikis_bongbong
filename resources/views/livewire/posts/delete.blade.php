<div>
    {{-- Stop trying to control. --}}

    <div class="container col-md-6 offset-md-3 mt-3">
        <div class="card rounded-4">
            <div class="card-header">
                <h3 class="text-center">Are you sure you want to delete this post?</h3>
            </div>

          
            <div class="card-footer">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-danger" wire:click="deletePost()">Delete</button>
                    <button class="btn btn-secondary mx-3" wire:click="backToPosts()">Back</button>
                </div>
            </div>
        </div>
    </div>

    <style scoped>
        .card{
            background-color: #F6FBF4;
            margin-top: 20vh; 
        }

    </style>
</div>
