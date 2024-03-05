<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-card table-responsive">
                <div class="table-heading px-2 px-1 border-bottom">
                  <h1 class="mdc-card__title mdc-card__title--large">Barang Yang Tersedia</h1>
                </div>
                <table class="table">
                  <thead>
                    <tr>
                      <th class="text-left">Nama Barang</th>
                      <th>Nama Pelanggan</th>
                      <th>Jumlah Harga</th>
                      <th>Keterangan Barang</th>
                      <th class="text-center">Kategori Barang</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($pesanans as $pesanans)
                    <tr>
                      <td class="text-left">{{ $users->name}}</td>
                      <td class="text-center">{!! $pesanans->jumlah_harga !!}</td>
                      <td class="text-center"> 
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('products.destroy', $products->id) }}" method="POST">
                            <a href="{{ route('products.edit', $products->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                           
                        </form>
                    </td>
                    </tr>
                    @empty
                    @endforelse
                    
                    </tbody>
                  </table>
              </div>