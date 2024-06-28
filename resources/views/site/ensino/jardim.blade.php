@extends('layout.layout')

@section('tile', 'galeria')

@section('conteudo')

<style>
    /* Estilo para arredondar as imagens */
  .imagem-arredondada {
      border-radius: 10%; /* Define o raio da borda para arredondar as imagens */
  }
  </style>


  <div class="ftco-blocks-cover-1">
      <!-- data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')" -->
      <div class="site-section-cover overlay" style="background-image: url('{{ asset('assets/images/criancas06.jpeg') }}')">
       <div class="container">
         <div class="row align-items-center ">

           <div class="col-md-5 mt-5 pt-5">
             <span class="text-cursive h5 text-red">Jardim</span>
             <h1 class="mb-3 font-weight-bold text-teal">Jardim</h1>
             <p><a href="{{ route('/') }}" class="text-white">Home</a> <span class="mx-3">/</span> <strong>Jardim</strong></p>
           </div>
         </div>
       </div>
     </div>
   </div>

   <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6" class="imagem-arredondada" >
            <img src="{{ asset('assets/images/criancas01.jpg') }}" alt="Image" class="img-fluid" style="border-radius: 10%;">
          </div>
          <div class="col-md-5 ml-auto pl-md-5 sobre1">
            <span class="text-cursive h5 text-red">Exploradores do Conhecimento: A Educação Vibrante no Jardim da Crescente</span>
            <h3 class="text-black">Explorando Juntos o Caminho do Conhecimento e da Alegria</h3>
            <p><span>Acreditamos que a educação vai além das paredes da sala de aula, abrangendo uma parceria colaborativa entre educadores, pais e comunidade.
              Valorizamos a participação ativa dos pais no processo educacional e incentivamos uma abordagem holística que prepare as crianças não apenas para os desafios acadêmicos, mas também para uma vida plena e significativa.
              Na Crescente Saber, acreditamos que a educação vai além das paredes da sala de aula, abrangendo uma parceria colaborativa entre educadores, pais e comunidade. Valorizamos a participação ativa dos pais no processo educacional e
              incentivamos uma abordagem holística que prepare as crianças não apenas para os desafios acadêmicos, mas também para uma vida plena e significativa.</span></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">

          <div class="col-md-5 ml-auto pl-md-5 sobre2">
            <span class="text-cursive h5 text-red">Educacional:Comprometimento com o desenvolvimento da criança no Jardim</span>
            <h3 class="text-black">Fomentando Vínculos Afetivos e Saúde Dermatológica desde os Primeiros Passos na Escola</h3>
            <p><span>Na Crescente Saber, a abordagem à educação das crianças é guiada por uma filosofia centrada no desenvolvimento integral. Nossa equipe comprometida trabalha para criar um ambiente educacional estimulante e acolhedor, onde cada criança é incentivada a explorar, questionar e aprender de maneira ativa.
              Entendemos a educação como um processo dinâmico, no qual valorizamos não apenas a transmissão de conhecimento acadêmico, mas também o cultivo de habilidades sociais, emocionais e criativas. Buscamos nutrir a curiosidade natural das crianças, promovendo um ambiente que inspire a busca pelo conhecimento e o desenvolvimento de pensamento crítico.</span></p>
          </div>
          <div class="col-md-6" class="imagem-arredondada">
            <img src="{{ asset('assets/images/criancas02.jpg') }}" alt="Image" class="img-fluid" style="border-radius: 10%;">
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6" class="imagem-arredondada">
            <img src="{{ asset('assets/images/criancas05.jpg') }}" alt="Image" class="img-fluid" style="border-radius: 10%;">
          </div>
          <div class="col-md-5 ml-auto pl-md-5 sobre1">
            <span class="text-cursive h5 text-red">Nutrição e Cuidado: Alimentação das Crianças do Jardim</span>
            <h3 class="text-black">Criando Hábitos Saudáveis desde os Primeiros Anos de Vida</h3>
            <p><span>Buscamos criar um ambiente onde se sintam seguras, amadas e incentivadas a expressar suas ideias e emoções. Nossa equipe altamente qualificada e afetuosa está dedicada a nutrir não apenas as mentes curiosas, mas também os corações cheios de imaginação.
              No que diz respeito à alimentação, oferecemos cuidados especiais para garantir que cada refeição seja uma experiência positiva. Proporcionamos opções nutritivas, respeitando as preferências individuais e necessidades alimentares.</span></p>
          </div>
        </div>
      </div>
    </div>



@endsection
