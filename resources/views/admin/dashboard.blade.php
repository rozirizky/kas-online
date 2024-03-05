@extends('layout.admin')
@section('js')
<script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }}

    
@endsection
@section('content')

<div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
          <div class="col-lg-8 d-flex align-items-strech">
            <div class="card w-100">
              <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                  <div class="mb-3 mb-sm-0">
                    <h5 class="card-title fw-semibold">Data Kas</h5>
                  </div>
                  <div>
                   
                  </div>
                </div>
                @if($kas == 0)

                <div class="alert alert-danger" role="alert">
                  Belum ada kas
                </div>
               
                @else
                {!! $chart->container() !!}
                @endif
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
              <div class="col-lg-12">
                <!-- Yearly Breakup -->
                <div class="card overflow-hidden">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold"> Total kas </h5>
                       
                            <h4 class="fw-semibold mb-3">Rp. {{ number_format($subtotal) }}</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <!-- Monthly Earnings -->
                <div class="card">
                  <div class="card-body">
                    <div class="row alig n-items-start">
                      <div class="col-8">
                        <h5 class="card-title mb-9 fw-semibold"> Total Pemasukan </h5>
                        <h4 class="fw-semibold mb-3">Rp. {{ number_format($kas) }}</h4>
                        
                      </div>
                   
                    </div>
                  </div>
                 
                </div>
              </div>
             <div class="col-lg-12">
                <!-- Monthly Earnings -->
                <div class="card">
                  <div class="card-body">
                    <div class="row alig n-items-start">
                      <div class="col-8">
                        <h5 class="card-title mb-9 fw-semibold"> Total Pengeluaran </h5>
                       
                            <h4 class="fw-semibold mb-3">Rp. {{ number_format($total) }}</h4>
                         
                           
                       
                         
                        </div>
                      </div>
                   
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="mb-4">
                  <h5 class="card-title fw-semibold">Recent Pengeluaran</h5>
                </div>
             
                    
              
                <ul class="timeline-widget mb-0 position-relative mb-n5">
                  @forelse ($pengeluaran as $p)
                  <li class="timeline-item d-flex position-relative overflow-hidden">
                    <div class="timeline-time text-dark flex-shrink-0 text-end">{{ $p->tanggal }}</div>
                    <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                      <span class="timeline-badge border-2 border border-primary flex-shrink-0 my-8"></span>
                      <span class="timeline-badge-border d-block flex-shrink-0"></span>
                    </div>
                    <div class="timeline-desc fs-3 text-dark mt-n1">{{ $p->pengeluaran }} <br><span class="text-danger" > Rp. {{  number_format($p->jumlah) }}</span></div>
                  </li>
                  @empty
                  <div class="alert alert-danger" role="alert">
                    Belum ada pengeluaran
                  </div>
                  @endforelse
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Recent Pemasukan</h5>
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
                        Belum ada pemasukan
                      </div>
                      
                    
                      @endforelse
                                         
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
        </div>
      </div>
          
@endsection