<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $student->name }}" required>
        <br>
        <label for="roll_number">Roll Number:</label>
        <input type="text" id="roll_number" name="roll_number" value="{{ $student->roll_number }}" required>
        <br>
        <button type="submit">Update</button>
    </form>
    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="margin-top: 10px;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
</body>
</html>
