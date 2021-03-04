@extends('layout/main')

@section('tittle', 'About')

@section('container')

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>About Us</h2>
    </div>

    <div class="row content">
      <div class="col-lg-6">
        <p >
        Pemrograman web dibuat dengan bahasa HTML, yaitu (Hyper text markup language) yang disajikan untuk Web browser yang ada di internet.
        Bahasa HTML ini dikembangkan tim bernerslee pada saat mereka masih bekerja di CERN, perusahaan yang dikembangkan oleh NCSA pada tahun 1990 an.
        Bahasa pemrograman HTML banyak diminati dan berkembang dengan pesat kemajuannya.
        </p>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0">
        <p>
        Css atau client side scripting adalah sebuah komponen dari bahasa pemrograman yang digunakan untuk pengolahan web browser agar semua script
        yang diterjemahkan di komponen ini dapat mengenali semua perintah- perintah yang ada di pemrograman ini. Contoh- contoh web yang sering
        digunakan yaitu mozilla firefox, opera mini, internet explorer, dan safari
        </p>
        <a href="#" class="btn-learn-more">Learn More</a>
      </div>
    </div>

  </div>
</section><!-- End About Us Section -->
@endsection