<div>

    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    <livewire:contact-create></livewire:contact-create>

    <hr>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @php
            $no=1;
            @endphp
            @foreach ($contact as $c)
            <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $c->name }}</td>
                <td>{{ $c->phone }}</td>
                <td>
                    <button class="btn btn-sm btn-info text-white">Edit</button>
                    <button class="btn btn-sm btn-danger text-white">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
