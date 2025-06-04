<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-dark leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-5">
    <div class="container">
      <div class="card shadow">
        <div class="card-body">
          <h1 class="card-title mb-4 text-center">Data Inventaris Barang</h1>

          <!-- Tombol Tambah Barang -->
          <div class="mb-3 text-end">
            <a href="{{ route('items.create') }}" class="btn btn-success">
              <i class="bi bi-plus-circle"></i> Tambah Barang
            </a>
          </div>

          <!-- Tabel Data -->
          <div class="table-responsive">
            <table class="table table-hover table-bordered align-middle">
              <thead class="table-dark text-center">
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
                @forelse ($items as $item)
                <tr>
                  <td>{{ $item->item_name }}</td>
                  <td>{{ ucfirst(str_replace('_', ' ', $item->category->name)) }}</td>
                  <td class="text-center">{{ $item->quantity }}</td>
                  <td>{{ ucfirst($item->condition) }}</td>
                  <td>
                    @if ($item->itemLocation && $item->itemLocation->location)
                    {{ $item->itemLocation->location->location }}
                    @else
                    <span class="text-muted fst-italic">Belum Ditempatkan</span>
                    @endif
                  </td>
                  <td class="text-center">
                    <a href="{{ route('items.edit', $item->id_item) }}" class="btn btn-sm btn-warning me-1">
                      <i class="bi bi-pencil-square"></i> Edit
                    </a>
                    <form action="{{ route('items.destroy', $item->id_item) }}" method="POST" class="d-inline"
                      onsubmit="return confirm('Yakin ingin menghapus?')">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger">
                        <i class="bi bi-trash"></i> Hapus
                      </button>
                    </form>
                  </td>
                </tr>
                @empty
                <tr>
                  <td colspan="6" class="text-center text-muted">Tidak ada data barang.</td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>