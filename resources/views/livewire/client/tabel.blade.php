@foreach ($kc as $c )

<div class="col-md-12">
    <div class="panel panel-default">

        <div class="panel-heading">
            <h3 class="panel-title">{{ $c->nama }}</h3>
            <div class="tools">
                <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Client</th>
                        <th>Nama</th>
                        <th>Contact Person</th>
                        <th>Alamat</th>

                    </tr>
                </thead>
                @php
                    $no=1
                @endphp
                @foreach ($client as $item)

                @if ($item->no_kc == $c->kc_id)

                <tbody>
                    <tr>
                        <td>{{ $no ++ }}</td>
                        <td>{{ $item->client_id}}</td>
                        <td>{{ $item->nama}}</td>
                        <td>{{ $item->cp}}</td>
                        <td>{{ $item->alamat}}</td>
                        <td class="text-center">
                            <button  data-toggle="modal" data-target="#editmodal" class="btn btn-sm btn-warning" wire:click.prevent="edit({{$item->id}})" > Edit</button>
                            {{-- <a href="{{ route('edit', $item->id) }}" class="btn btn-sm btn-primary">EDIT</a> --}}
                            <button wire:click.prevent="destroy({{$item->id}})" class="btn btn-sm btn-danger">DELETE</button>
                        </td>
                    </tr>

                </tbody>
                @endif
                @endforeach
            </table>
        </div>
    </div>

</div>
@endforeach
