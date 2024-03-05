@extends('layout.admin')
@section('js')
<script>
  $(document).ready(function(){
    $('.bi').on('click',function(){
      var id = $(this).data('id');
      $('.idmember').val(id);

    })
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
                  <h5 class="card-title fw-semibold mb-4">Member</h5>

                </div>
 <div class="col-lg-3">
  
  <a href="" data-bs-toggle="modal" data-bs-target="#tambahmember" class="btn btn-primary ">Tambah member</a>
  
  
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
                          <h6 class="fw-semibold mb-0">Name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Total</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($member as $m)
                          
                   
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6></td>
                  
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{ $m->nama }}</p>
                        </td>
                      
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">Rp. {{ number_format($m->kas) }}</h6>
                        </td>
                        <td class="border-bottom-0"
                         <a href=""   data-bs-toggle="modal" data-bs-target="#staticBackdrop"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" data-kas='{{ $m->kas }}' data-id='{{ $m->id }}' fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg></a>
                        </td>
                        
                      </tr> 
                      @empty
                      <div class="alert alert-danger" role="alert">
                        Belum ada Member
                      </div>
                    
                      @endforelse
                                         
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
</div>
<div class="modal fade" id="tambahmember" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambahkan Member</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        
        <form action="{{ route('member.store') }}" method="POST">
          @csrf
         
            
              <input type="text" class="form-control" name="nama" placeholder="masukan nama">
            
             
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">submit</button>
      </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambahkan Uang Kas</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        
                 <form action="{{ route('transaksi') }}" method="post">
                  @csrf
                  <input type="number" class="form-control" name="transaksi" placeholder="Masukan uang">
                <input type="hidden" value="" name="idmember" class="idmember">
             
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">submit</button>
      </form>
      </div>
    </div>
  </div>
</div>


@endsection