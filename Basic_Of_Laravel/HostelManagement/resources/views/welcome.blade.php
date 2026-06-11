<!DOCTYPE html>
<html>
<head>
    <title>Hostel Management</title>
</head>
<body>

    <h1>Hostel List</h1>

    @foreach($hostels as $hostel)

        <h2>{{ $hostel->hostel_name }}</h2>

        <p>
            Location:
            {{ $hostel->location }}
        </p>

        <h3>Rooms</h3>

        <ul>
            @foreach($hostel->rooms as $room)
                <li>
                    Room Number:
                    {{ $room->room_number }}

                    |

                    Capacity:
                    {{ $room->capacity }}
                </li>
            @endforeach
        </ul>

        <hr>

    @endforeach

</body>
</html>