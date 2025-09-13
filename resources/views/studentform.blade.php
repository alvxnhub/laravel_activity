<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
    <!-- Exercise 7: Form Handling -->
    <h1>Add Student</h1>
    <hr>
    <form action="/students" method="POST">
    @csrf

    <div>
        <label for="name">Name</label>
        <input type="text" name="name">
        @error('name')
            <div style="color:red;">Min of 3 characters</div>
        @enderror
    </div>

    <br>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email">
        @error('email')
            <div style="color:red;">Email is required and must be a valid email</div>
        @enderror
    </div>

    <br>

    <div>
        <label for="age">Age</label>
        <input type="number" name="age">
        @error('age')
            <div style="color:red;">Must be 18 and above</div>
        @enderror
    </div>
    <br>
    <button type="submit">Save</button>
</form>

</body>
</html>