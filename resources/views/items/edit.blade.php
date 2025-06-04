<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-dark leading-tight">
      {{ __('Edit Barang') }}
    </h2>
  </x-slot>

  <div class="py-5">
    <div class="container">
      <div class="card shadow">
        <div class="card-body">
          <h3 class="card-title mb-4 text-center">Form Edit Barang</h3>

          <form action="{{ route('items.update', $item->id_item) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label class="form-label fw-semibold">Nama Barang</label>
              <input type="text" name="item_name" class="form-control" value="{{ $item->item_name }}" required>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Kategori</label>
              <select name="id_category" class="form-select" required>
                @foreach ($categories as $category)
                <option value="{{ $category->id_category }}"
                  {{ $item->id_category == $category->id_category ? 'selected' : '' }}>
                  {{ ucfirst(str_replace('_', ' ', $category->name)) }}
                </option>
                @endforeach
              </select>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Jumlah</label>
              <input type="number" name="quantity" class="form-control" value="{{ $item->quantity }}" required>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Kondisi</label>
              <select name="condition" class="form-select" required>
                <option value="baik" {{ $item->condition == 'baik' ? 'selected' : '' }}>Baik</option>
                <option value="rusak" {{ $item->condition == 'rusak' ? 'selected' : '' }}>Rusak</option>
              </select>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Lokasi Penempatan</label>
              <select name="id_location" class="form-select" required>
                @foreach ($locations as $location)
                <option value="{{ $location->id_location }}"
                  {{ $item->itemLocation && $item->itemLocation->id_location == $location->id_location ? 'selected' : '' }}>
                  {{ ucfirst(str_replace('_', ' ', $location->location)) }}
                </option>
                @endforeach
              </select>
            </div>

            <div class="mb-4">
              <label class="form-label fw-semibold">Tanggal Penempatan</label>
              <input type="date" name="date_added" class="form-control"
                value="{{ $item->itemLocation->date_added ?? '' }}" required>
            </div>

            <div class="d-flex justify-content-between">
              <a href="{{ route('items.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left-circle"></i> Kembali
              </a>
              <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> Update
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>