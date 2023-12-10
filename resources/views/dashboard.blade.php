<x-app-layout>
    <x-slot name="title">
        dashboard
    </x-slot>

    <div class="container">
    <h2>Data Barang</h2>
    <button class="btn btn-success" data-toggle="modal" data-target="#createModal">Tambah Data</button>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Stok Awal</th>
                <th>Harga Barang</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barangs as $barang)
            <tr>
                <td>{{ $barang->id }}</td>
                <td>{{ $barang->kode_barang }}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ $barang->stok_awal }}</td>
                <td>{{ $barang->harga_barang }}</td>
                <td>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal{{ $barang->id }}">Edit</button>                    <form action="{{ route('barang.destroy', $barang->id) }}" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            
            <!-- Edit Modal -->
            <div class="modal fade" id="editModal{{ $barang->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $barang->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel{{ $barang->id }}">Edit Data Barang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Add your update form here -->
                            <form method="POST" action="{{ route('barang.update', $barang->id) }}">
                                @csrf
                                @method('PUT')
                                <!-- Include input fields with old values -->
                                <div class="form-group">
                                    <label for="kode_barang">Kode Barang</label>
                                    <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="{{ $barang->kode_barang }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_barang">Nama Barang</label>
                                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $barang->nama_barang }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="stok_awal">Stok Awal</label>
                                    <input type="number" class="form-control" id="stok_awal" name="stok_awal" value="{{ $barang->stok_awal }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="harga_barang">Harga Barang</label>
                                    <input type="number" class="form-control" id="harga_barang" name="harga_barang" value="{{ $barang->harga_barang }}" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </tbody>
    </table>
</div>

    <!-- Create Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Tambah Data Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form method="POST" action="{{ route('barang.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="kode_barang">Kode Barang</label>
                        <input type="text" class="form-control" id="kode_barang" name="kode_barang" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
                    </div>
                    <div class="form-group">
                        <label for="stok_awal">Stok Awal</label>
                        <input type="number" class="form-control" id="stok_awal" name="stok_awal" required>
                    </div>
                    <div class="form-group">
                        <label for="harga_barang">Harga Barang</label>
                        <input type="number" class="form-control" id="harga_barang" name="harga_barang" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
