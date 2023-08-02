
<style>
  .table1{
    font-family:Arial, Helvetica, sans-serif;
    color: #232323;
    border-collapse: collapse;
  }
  .table1, th, td{
    border: 1px solid #999;
    padding: 8px 20px;
  }
  .date-filter1{
    display: flex;
    flex-direction: column;
  }
</style>
    
      
        
     
    

<h1>{{ $title }}</h1>
<div class="date-filter1 d-flex flex-col">
    
    <p><strong>Mulai</strong> : {{ date('l d-M-Y',strtotime($from)) }}</p><p><strong>Sampai</strong> : {{ date('l d-M-Y',strtotime($to)) }}</p>
</div>

@if (request()->get('category_date_select_cetak') == 'return_user_date')
<strong>Nama Pengguna</strong> : <span>{{ $userrental->user->username }}</span>
@endif
  <table class="table1 table table-boredered">
    <thead>
      <tr>
        <th scope="col">ID</th>
        @if (request()->get('category_date_select_cetak') == 'rent_date')
        <th scope="col">Mobil Pinjam</th>
        <th scope="col">Pengguna</th>
        @elseif (request()->get('category_date_select_cetak') == 'return_date')
        <th scope="col">Mobil Kembali</th>
        <th scope="col">Pengguna</th>
        @elseif (request()->get('category_date_select_cetak') == 'return_user_date')
        <th scope="col">Mobil Kembali</th>
        <th scope="col">Pengguna</th>
        @endif
        <th scope="col">KTP</th>
        
        <th scope="col">Mobil</th>
        
      </tr>
    </thead>
    <tbody class="table-group-divider">
      @foreach ($datarental as $item)
      <tr>
          <td>{{$loop->iteration}}</td>
          @if (request()->get('category_date_select_cetak') == 'rent_date')
          <td>{{ date('l d-M-Y',strtotime($item->rent_date)) }}</td>
          <td>{{$item->user->username}}</td>
          @elseif (request()->get('category_date_select_cetak') == 'return_date')
          @if ($item->return_date == null)
            <td>-</td>
            
          @else
          <td>{{date('l d-M-Y',strtotime($item->return_date))}}</td>
          @endif
          <td>{{$item->user->username}}</td>
          @elseif (request()->get('category_date_select_cetak') == 'return_user_date')
          @if ($item->return_date == null)
            <td>-</td>
          @else
          <td>{{date('l d-M-Y',strtotime($item->return_date))}}</td>

          @endif
          <td>{{$item->user->username}}</td>
          @endif
          
          <td><img src="{{ asset('storage/'.$item->KTP)}}" alt="" width="120px" height="60px"></td>
          
          <td>{{$item->mobil->nama_mobil}}</td>
  </tr>
  @endforeach
    </tbody>
  </table>

<script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

