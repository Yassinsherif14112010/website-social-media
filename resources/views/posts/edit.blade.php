@include('layouts.app')

<div class="col-12">
    <h1 class="p-3 border text-center my-3">تعديل المنشور</h1>
</div>
<div class="col-8 mx-auto">

    <form action="{{ route('posts.update', $post->id) }}" method="POST" class="form border p-3">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="">عنوان المنشور</label>
            <input type="text" class="form-control" name="title" value="{{ old('title', $post->title) }}">
        </div>

        <div class="mb-3">
            <label for="">وصف المنشور</label>
            <textarea class="form-control" name="description" rows="7">{{ old('description', $post->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="">الكاتب</label>
            <select name="user_id" class="form-control">
                @foreach($users as $id => $name)
                    <option value="{{ $id }}" {{ $post->user_id == $id ? 'selected' : '' }}>{{ $name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <input type="submit" class="form-control bg-info text-white" value="حفظ التعديلات">
        </div>

    </form>
</div>
