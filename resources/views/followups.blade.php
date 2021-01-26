<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Followups</title>
</head>
<body>
    <a href="{{ route('followups.create') }}">Create New</a>
    <ul>
    @foreach($followups as $followup)
        <li>{{ $followup->from_id == Auth::user()->id ? "مرسل" : "مستقبل" }} {{ $followup->text }} ({{ $followup->created_at }})
            <ul>
                @foreach($followup->replies as $reply)
                    <li>{{ $reply->message }}</li>
                @endforeach
            </ul>
        <form action="{{ route('followup_replies.store') }}" method="post">
            @csrf
            <label for="msg">Message</label>
            <input type="text" id="msg" name="msg">
            <input type="hidden" name="followup_id" value="{{ $followup->id }}">
            <button type="submit">Save</button>
        </form>
        </li>
    @endforeach
    </ul>
</body>
</html>
