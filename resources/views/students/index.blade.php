<!DOCTYPE html>
<html>
<head>
    <title>Student Database</title>
    <style>
        body{margin-top : 100px;
            display: flex;
            align-items:center;
            justify-content: center; 
            flex-direction: column;
        }
        table{

            margin-top:50px;
        }
        th,td{
            padding : 5px;
            border : 2px solid black;
        }
    </style>
</head>
<body>
    <h1>Students</h1>
    <a href="{{ route('students.create') }}">Add Student</a>
    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif
    <table >
        <tr>
            <th>Name</th>
            <th>Roll Number</th>
            <th>Actions</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->roll_number }}</td>
            <td>
                <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
