<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity Log</title>
    @vite('resources/css/app.css')
    
</head>
<body class="p-10">
    <h1 class = "text-lg font-bold">Activity Log</h1>

    <table cellpadding="10" class="table-auto border-collapse border border-gray-300">
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
    </table><br>
    <a href="/dashboard" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mt-10">Back to Dashboard</a>
</body>
</html>
