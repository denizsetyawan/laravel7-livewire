<div>

    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    @if($statusUpdate)
    <livewire:contact-update></livewire:contact-update>
    @else
    <livewire:contact-create></livewire:contact-create>
    @endif

    <hr>
    
    <div class="row">
        <div class="col">
            <select wire:model="paginate" class="form-control form-control-sm w-auto">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
            </select>
        </div>
        <div class="col">
            <input wire:model="search" type="text" class="form-control form-control-sm" placeholder="Search..">
        </div>
    </div>
    
    <hr>

    <table class="table" id="dataTable">
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
                    <button wire:click="getContact({{ $c->id }})" class="btn btn-sm btn-info text-white">Edit</button>
                    <button wire:click="destroy({{ $c->id }})" class="btn btn-sm btn-danger text-white">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $contact->links() }}

</div>
