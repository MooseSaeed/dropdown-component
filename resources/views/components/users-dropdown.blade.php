<Dropdown title="Users Dropdown">

    <Dropdowncontent>
        @foreach ($users as $user)
            <Dropdownitems item="{{ $user->name }}" href="/users/{{ $user->id }}">
            </Dropdownitems>
        @endforeach
    </Dropdowncontent>

</Dropdown>
