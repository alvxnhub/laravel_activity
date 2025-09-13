<!DOCTYPE html>
<html>
<head>
    <title>Activity Log</title>
</head>
<body>
    <h1>Activity Log</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>User ID</th>
            <th>Action</th>
            <th>Description</th>
            <th>Date</th>
        </tr>
        @foreach($activities as $activity)
            <tr>
                <td>{{ $activity->user->id ?? 'Unknown' }}</td>
                <td>{{ $activity->action }}</td>
                <td>{{ $activity->description }}</td>
                <td>{{ $activity->created_at->format('Y-m-d H:i') }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
