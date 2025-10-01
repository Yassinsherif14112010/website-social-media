@include('layouts.app')

    <div class="col-12">
        <h1 class=" text-center my-3">Add user</h1>
    </div>
    <div class="col-8 mx-auto">
        <form action="{{ route('users.store') }}" method="POST" class="form border p-3">
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
                <label for="">Name</label>
                <input type="text"  class="form-control" name="name">
            </div>

            <div class="mb-3">
                <label for="">Email</label>
                <input type="email" class="form-control"   name="email" ></input>
            </div>
            <div class="mb-3">
                <label for="">Password</label>
                <input type="password" class="form-control"   name="password" ></input>
            </div>
            <div class="mb-3">
                <label for="">Confim-Password</label>
                <input type="password" class="form-control"   name="confirm_password" ></input>
            </div>
            <div class="mb-3">
                <label for="">Type</label>
                <select name="type" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="writer">Writer</option>
                </select>
            </div>


            <div class="mb-3">
                <input type="submit" class="form-control bg-success text-white" value="Save">
            </div>

        </form>
