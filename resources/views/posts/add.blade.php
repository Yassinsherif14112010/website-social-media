@include('layouts.app')

    <div class="col-12">
        <h1 class="p-3 border text-center my-3">Add Post</h1>
    </div>
    <div class="col-8 mx-auto">
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="form border p-3">
   @csrf
   @if ($errors->any())
                <div class="alert alert-danger p-1">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session()->get('success') != null)
                <h3 class="text-success my-2">{{ session()->get('success') }}</h3>
            @endif

            <div class="mb-3">
                <label for="">Post Title</label>
                <input type="text" value="{{old('title')}}" class="form-control" name="title">
            </div>

            <div class="mb-3">
                <label for="">Post Description</label>
                <textarea class="form-control" value="{{old('description')}}"  name="description" rows="7"></textarea>
            </div>

            <div class="mb-3">
                <label for="">Writer</label>
                <select name="user_id" class="form-control">
                                        @foreach($users as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>
            </div>
           <div class="mb-3">
                <label for="">image post</label>
                <input type="file" class="form-control"   name="image" ></input>
            </div> 
            <div class="mb-3">
                <input type="submit" class="form-control bg-success" value="Save">
            </div>

        </form>
