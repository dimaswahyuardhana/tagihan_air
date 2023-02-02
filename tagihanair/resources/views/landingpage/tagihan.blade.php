@extends('landingpage.index')
@section('content')
<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>DATA TAGIHAN AIR PELANGGAN</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">


    <div class="table-responsive-xl">
        <table class="table table-success table-bordered table-striped table-hover table-sm">
         <thead class="table-info">
           <tr>
              <th>No</th>
              <th>Nama Pelanggan</th>
              <th>Alamat</th>
              <th>Nomor Rumah</th>
              <th>Nomor WA</th>
              <th>Tagihan</th>
            </tr>
          </thead>
          <tbody>

          </tbody>
       </table>
       </div>


    </div>
    <a class="btn btn-warning" href="{{ url('/form_bayar') }}" role="button">BAYAR TAGIHAN</a>
  </section>
@endsection
