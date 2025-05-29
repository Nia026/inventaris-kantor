@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="mb-4">Data Inventaris Barang</h1>

  <a href="{{ route('items.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>

  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>Nama Barang</th>
        <th>Kategori</th>
        <th>Jumlah</th>
        <th>Kondisi</th>
        <th>Lokasi</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($items as $item)
      <tr>
        <td>{{ $item->item_name }}</td>
        <td>{{ ucfirst(str_replace('_', ' ', $item->category->name)) }}</td>
        <td>{{ $item->quantity }}</td>
        <td>{{ ucfirst($item->condition) }}</td>
        <td>{{ $item->itemLocation->location->location ?? 'Belum Ditempatkan' }}</td>
        <td>
          <a href="{{ route('items.edit', $item->id_item) }}" class="btn btn-sm btn-warning">Edit</a>
          <form action="{{ route('items.destroy', $item->id_item) }}" method="POST" style="display:inline-block;">
            @csrf @method('DELETE')
            <button type="submit" onclick="return confirm('Yakin ingin menghapus?')"
              class="btn btn-sm btn-danger">Hapus</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection