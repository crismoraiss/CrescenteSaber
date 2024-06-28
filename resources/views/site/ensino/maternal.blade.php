@extends('layout.layout')

@section('tile', 'maternal')

@section('conteudo')

<style>
  /* Estilo para arredondar as imagens */
.imagem-arredondada {
    border-radius: 10%; /* Define o raio da borda para arredondar as imagens */
}



</style>



<div class="ftco-blocks-cover-1">
    <!-- data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')" -->
    <div class="site-section-cover overlay" style="background-image: url({{ asset('assets/images/img-fundoMaternal.jpg') }})"> >
     <div class="container">
       <div class="row align-items-center ">

         <div class="col-md-5 mt-5 pt-5">
           <span class="text-cursive h5 text-red">Maternal</span>
           <h1 class="mb-3 font-weight-bold text-teal">Maternal</h1>
           <p><a href="{{ route('/') }}" class="text-white">Home</a> <span class="mx-3">/</span> <strong>Maternal</strong></p>
         </div>

       </div>
     </div>
   </div>
 </div>

 <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6" class="imagem-arredondada" >
          <img src="{{ asset('assets/images/img_maternal1.png') }}" alt="Image" class="img-fluid" style="border-radius: 10%;">
        </div>
        <div class="col-md-5 ml-auto pl-md-5 sobre1">
          <span class="text-cursive h5 text-red">Maternal: O Mundo Encantado das Primeiras Descobertas</span>
          <h3 class="text-black">Explorando Juntos o Caminho do Conhecimento e da Alegria</h3>
          <p><span>No Maternal, cada dia é uma aventura cheia de descobertas, risadas e
            aprendizado! Aqui, nossos pequenos exploradores começam a jornada rumo ao conhecimento e à imaginação sem limites.
            No nosso Maternal, as crianças são acolhidas com carinho e dedicação, criando um ambiente seguro e acolhedor para
            crescerem e se desenvolverem. Cada cantinho da nossa sala de aula é um convite à curiosidade, onde brincar é aprender
            e descobrir é se encantar.</span></p>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">

        <div class="col-md-5 ml-auto pl-md-5 sobre2">
          <span class="text-cursive h5 text-red">Ternura e Limpeza: Cuidados de Banho para Bebês no Maternal</span>
          <h3 class="text-black">Fomentando Vínculos Afetivos e Saúde Dermatológica desde os Primeiros Passos na Escola</h3>
          <p><span>Na escola maternal, os cuidados com os bebês incluem higiene e banho, fundamentais para seu bem-estar.
            Profissionais treinados garantem segurança e carinho durante o processo. A temperatura da água deve ser adequada,
            e produtos suaves são usados para evitar irritações. A secagem cuidadosa, especialmente nas dobras da pele,
            previne assaduras e infecções. O momento do banho promove vínculo afetivo entre bebês e cuidadores, contribuindo para seu
            desenvolvimento emocional e social.</span></p>
        </div>
        <div class="col-md-6" class="imagem-arredondada">
          <img src="{{ asset('assets/images/img_maternal2.png') }}" alt="Image" class="img-fluid" style="border-radius: 10%;">
        </div>
      </div>
    </div>
  </div>


  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6" class="imagem-arredondada">
          <img src="{{ asset('assets/images/img_maternal3.png') }}" alt="Image" class="img-fluid" style="border-radius: 10%;">
        </div>
        <div class="col-md-5 ml-auto pl-md-5 sobre1">
          <span class="text-cursive h5 text-red">Nutrição e Cuidado: Alimentação dos Bebês no Maternal</span>
          <h3 class="text-black">Criando Hábitos Saudáveis desde os Primeiros Anos de Vida</h3>
          <p><span>Na escola maternal, os cuidados com a alimentação dos bebês são essenciais para seu desenvolvimento físico e emocional.
            Profissionais capacitados oferecem variedade de opções saudáveis, respeitando o ritmo individual de cada criança.
            A segurança alimentar é priorizada para garantir a qualidade dos alimentos. Os cuidadores promovem hábitos alimentares
            saudáveis e incentivam a exploração de novos sabores. Além disso, os momentos de alimentação são oportunidades para estimular o
            desenvolvimento social e linguístico dos bebês.</span></p>
        </div>
      </div>
    </div>
  </div>


  <div class="site-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <span class="text-cursive h5 text-red d-block">Nossa galeria</span>
          <h2 class="text-black">Por dentro do nosso Maternal </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 mb-4">
          <a href="{{ asset('assets/images/img_galeriamaternal1.png') }}" data-fancybox="gal"><img src="{{ asset('assets/images/img_galeriamaternal1.png') }}" alt="Image" class="img-fluid"></a>
        </div>
        <div class="col-md-3 mb-4">
          <a href="{{ asset('assets/images/img_galeriamaternal2.png') }}" data-fancybox="gal"><img src="{{ asset('assets/images/img_galeriamaternal2.png') }}" alt="Image" class="img-fluid"></a>
        </div>
        <div class="col-md-3 mb-4">
          <a href="{{ asset('assets/images/img_galeriamaternal3.png') }}" data-fancybox="gal"><img src="{{ asset('assets/images/img_galeriamaternal3.png') }}" alt="Image" class="img-fluid"></a>
        </div>
        <div class="col-md-3 mb-4">
          <a href="{{ asset('assets/images/img_galeriamaternal4.png') }}" data-fancybox="gal"><img src="{{ asset('assets/images/img_galeriamaternal4.png') }}" alt="Image" class="img-fluid"></a>
        </div>

        <div class="col-md-3 mb-4">
          <a href="{{ asset('assets/images/img_galeriamaternal5.png') }}" data-fancybox="gal"><img src="{{ asset('assets/images/img_galeriamaternal5.png') }}" alt="Image" class="img-fluid"></a>
        </div>
        <div class="col-md-3 mb-4">
          <a href="{{ asset('assets/images/img_galeriamaternal7.png') }}" data-fancybox="gal"><img src="{{ asset('assets/images/img_galeriamaternal7.png') }}" alt="Image" class="img-fluid"></a>
        </div>
        <div class="col-md-3 mb-4">
          <a href="{{ asset('assets/images/img_galeriamaternal6.png') }}" data-fancybox="gal"><img src="{{ asset('assets/images/img_galeriamaternal6.png') }}" alt="Image" class="img-fluid"></a>
        </div>
        <div class="col-md-3 mb-4">
          <a href="{{ asset('assets/images/img_galeriamaternal8.png') }}" data-fancybox="gal"><img src="{{ asset('assets/images/img_galeriamaternal8.png') }}" alt="Image" class="img-fluid"></a>
        </div>
      </div>
    </div>
  </div>


@endsection
