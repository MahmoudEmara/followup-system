<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Followup</title>
</head>
<body>
    <form action="{{ route('followups.store') }}" method="POST">
        @csrf
        <label for="category">Message Category</label>
        <select name="category" id="category">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
            @endforeach
        </select>

        <label for="to">To</label>
        <select name="to" id="to">
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>

        <label for="msg">Message</label>
        <input type="text" id="mgs" name="msg">

        <button type="submit">Save</button>
        <a href="{{ route('followups.index') }}">Back</a>
    </form>
</body>
</html>
