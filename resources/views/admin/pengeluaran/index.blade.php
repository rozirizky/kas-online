@extends('layout.admin')
@section('content')
<div class="row">
    <div class="col-lg-12 d-flex py-5 px-5 mt-5 align-items-stretch">
                <div class="card w-100">
                  <div class="card-body ">
                  <div class="row mb-3">
                    <div class="col-lg-9">
                      <h5 class="card-title fw-semibold mb-4">Pengeluaran</h5>
    
                    </div>
    
         <div class="col-lg-3">
          
          <a href="" data-bs-toggle="modal" data-bs-target="#pengeluaran" class="btn btn-primary ">Tambah Pengeluaran</a>
          
          
         </div>
                      
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
                              <h6 class="fw-semibold mb-0">Pengeluaran</h6>
                            </th>
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0">Jumlah</h6>
                            </th>
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0">Tanggal</h6>
                            </th>
                          </tr>
                        </thead>
                        <tbody class="px-5">
                          @forelse ($pengeluaran as $m)
                              
                       
                          <tr>
                            <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6></td>
                      
                            <td class="border-bottom-0">
                              <p class="mb-0 fw-normal">{{ $m->pengeluaran }}</p>
                            </td>
                          
                            <td class="border-bottom-0">
                              <h6 class="fw-semibold mb-0 fs-4">Rp. {{ number_format($m->jumlah) }}</h6>
                            </td>
                            <td class="border-bottom-0">
                              <h6 class="fw-semibold mb-0 fs-4">{{ $m->tanggal }}</h6>
                            </td>
                          
                            
                          </tr> 
                          @empty

                          <div class="alert alert-danger" role="alert">
                            Belum ada Pengeluaran
                          </div>
                        
                          @endforelse
                                             
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              
    </div>

    <div class="modal fade" id="pengeluaran" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambahkan Pengeluaran</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              
              
                       <form action="{{ route('pengeluaran') }}" method="post">
                        @csrf
                        <div class="mb-3">
                        <input type="text" class="form-control" name="pengeluaran" placeholder="Pengeluaran">
                    </div>
                        <input type="number" class="form-control" name="jumlah" placeholder="Masukan jumlah Pengeluaran">
                     
                   
                  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">submit</button>
              <form>
            </div>
          </div>
        </div>
      </div>
    @endsection