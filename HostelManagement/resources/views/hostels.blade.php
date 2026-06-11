<!DOCTYPE html>
<html>
<head>
    <title>Hostels</title>
</head>
<body>

    <h1>Hostel List</h1>

    @foreach($hostels as $hostel)

        <h2>{{ $hostel->hostel_name }}</h2>

        <p>
            <strong>Location:</strong>
            {{ $hostel->location }}
        </p>

        <h3>Rooms</h3>

        <table border="1" cellpadding="10">
            <tr>
                <th>Room Number</th>
                <th>Capacity</th>
                <th>hostel_id</th>
                <th>name</th>
            </tr>

            @foreach($hostel->rooms as $room)
                <tr>
                    <td>{{ $room->room_number }}</td>
                    <td>{{ $room->capacity }}</td>
                    <td>{{ $room->hostel_id}}</td>
                    <td>{{ $room->name}}</td>
                </tr>
            @endforeach

        </table>

        <hr>

    @endforeach

</body>
</html>