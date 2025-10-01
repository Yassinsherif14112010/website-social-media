@include('layouts.app')

<div class="col-12">
    <h1 class="text-center my-3">Edit User</h1>
</div>
<div class="col-8 mx-auto">
    <form action="{{ route('users.update', $user->id) }}" method="POST" class="form border p-3">
        @csrf
        @method('PUT')

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
            <input type="text" value="{{ old('name', $user->name) }}" class="form-control" name="name">
        </div>

        <div class="mb-3">
            <label for="">Email</label>
            <input type="email" value="{{ old('email', $user->email) }}" class="form-control" name="email">
        </div>

        <div class="mb-3">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password">
        </div>

        <div class="mb-3">
            <label for="">Confim-Password</label>
            <input type="password" class="form-control" name="confirm_password">
        </div>

        <div class="mb-3">
            <label for="">Type</label>
            <select name="type" class="form-control">
                <option @selected(old('type', $user->type) == 'admin') value="admin">Admin</option>
                <option @selected(old('type', $user->type) == 'writer') value="writer">Writer</option>
            </select>
        </div>

        <div class="mb-3">
            <input type="submit" class="form-control bg-info text-white" value="Save changes">
        </div>
    </form>
</div>