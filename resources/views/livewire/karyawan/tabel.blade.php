@foreach ($k_k as $k )


<div class="col-md-12">
    <div class="panel panel-default">

        <div class="panel-heading">
            <h3 class="panel-title">{{$k->kategori}}</h3>
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
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Nomer Telepon</th>

                    </tr>
                </thead>
                @php
                    $no=1
                @endphp
                @foreach ($karyawan as $item)

                @if ($item->kategori == $k->no_kategori)

                <tbody>
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->NIK}}</td>
                        <td>{{ $item->nama}}</td>
                        <td>{{ $item->email}}</td>
                        <td>{{ $item->no_telepon}}</td>

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
