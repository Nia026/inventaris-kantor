<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Edit Barang') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
          <h1 class="mb-4">Edit Barang</h1>

          <form action="{{ route('items.update', $item->id_item) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label>Nama Barang</label>
              <input type="text" name="item_name" class="form-control" value="{{ $item->item_name }}" required>
            </div>

            <div class="mb-3">
              <label>Kategori</label>
              <select name="id_category" class="form-control" required>
                @foreach ($categories as $category)
                <option value="{{ $category->id_category }}"
                  {{ $item->id_category == $category->id_category ? 'selected' : '' }}>
                  {{ ucfirst(str_replace('_', ' ', $category->name)) }}
                </option>
                @endforeach
              </select>
            </div>

            <div class="mb-3">
              <label>Jumlah</label>
              <input type="number" name="quantity" class="form-control" value="{{ $item->quantity }}" required>
            </div>

            <div class="mb-3">
              <label>Kondisi</label>
              <select name="condition" class="form-control" required>
                <option value="baik" {{ $item->condition == 'baik' ? 'selected' : '' }}>Baik</option>
                <option value="rusak" {{ $item->condition == 'rusak' ? 'selected' : '' }}>Rusak</option>
              </select>
            </div>

            <div class="mb-3">
              <label>Lokasi Penempatan</label>
              <select name="id_location" class="form-control" required>
                @foreach ($locations as $location)
                <option value="{{ $location->id_location }}"
                  {{ $item->itemLocation && $item->itemLocation->id_location == $location->id_location ? 'selected' : '' }}>
                  {{ ucfirst(str_replace('_', ' ', $location->location)) }}
                </option>
                @endforeach
              </select>
            </div>

            <div class="mb-3">
              <label>Tanggal Penempatan</label>
              <input type="date" name="date_added" class="form-control"
                value="{{ $item->itemLocation->date_added ?? '' }}" required>
            </div>

            <button class="btn btn-primary">Update</button>
            <a href="{{ route('items.index') }}" class="btn btn-secondary">Kembali</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>