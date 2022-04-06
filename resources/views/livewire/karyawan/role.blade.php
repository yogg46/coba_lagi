<div>
@foreach ($kategori_karyawan as $item)

<div class="col-md-6">
    <div class="panel panel-default">

            <div class="panel-heading">
                <h3 class="panel-title">{{ $item->kategori }}</h3>
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


                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-center">
                                <a href="" class="btn btn-sm btn-primary">EDIT</a>
                                <button wire:click="" class="btn btn-sm btn-danger">DELETE</button>
                            </td>
                        </tr>

                    </tbody>


                </table>
            </div>
        </div>

    </div>
</div>

@endforeach
</div>
