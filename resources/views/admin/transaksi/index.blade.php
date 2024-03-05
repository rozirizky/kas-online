@extends('layout.admin')
@section('js')
    <script >
      $('.search').on('keyup',function(){
        var keyword = $(this).val();

        
      })
    </script>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 d-flex py-5 px-5 mt-5 align-items-stretch">
                <div class="card w-100">
                  <div class="card-body p-4">
                  <div class="row mb-3">
                    <div class="col-lg-9">
                      <h5 class="card-title fw-semibold mb-4">Pemasukan</h5>
    
                    </div>
    
                  
                  </div>
                  
                    <div class="table-responsive">
                      <table class="table text-nowrap mb-0 align-middle table ">
                        <thead class="text-dark fs-4">
                          <tr>
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0">Id</h6>
                            </th>    
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0">Nama</h6>
                            </th>
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0">Transaksi</h6>
                            </th>
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0">Tanggal</h6>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($transaksi as $m)
                              
                       
                          <tr>
                            <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6></td>
                      
                            <td class="border-bottom-0">
                              <p class="mb-0 fw-normal">{{ $m->member->nama }}</p>
                            </td>
                          
                            <td class="border-bottom-0">
                              <h6 class="fw-semibold mb-0 fs-4">Rp. {{ number_format($m->transaksi) }}</h6>
                            </td>
                            <td class="border-bottom-0">
                              <h6 class="fw-semibold mb-0 fs-4">{{ $m->tanggal }}</h6>
                            </td>
                          
                            
                          </tr> 
                          @empty
                          <div class="alert alert-danger" role="alert">
                            Belum ada Pemasukan
                          </div>
                        
                          @endforelse
                                             
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              
    </div>
    @endsection