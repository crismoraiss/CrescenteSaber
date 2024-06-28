@extends('layout.layout')

@section('tile', 'depoimento')

@section('conteudo')


<div class="ftco-blocks-cover-1">
   <div class="site-section-cover overlay" style="background-image: url({{ asset('assets/images/lendo.png') }})">
     <div class="container">
       <div class="row align-items-center ">

         <div class="col-md-5 mt-5 pt-5">
           <span class="text-cursive h5 text-red">Blog</span>

           <p><a href="{{ route('/') }}" class="text-white">Home</a> <span class="mx-3">/</span> <strong>Blog</strong></p>
         </div>

       </div>
     </div>
   </div>
 </div>



<style>
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
}


h1 {
    color: #333;
    font-size: 34px; /* Aumenta o tamanho da fonte */
    font-weight: bold; /* Deixa a fonte em negrito */
    text-align: center;
    margin-bottom: 40px; /* Aumenta o espaço abaixo do título */
    margin-top: 40px; /* Adiciona espaço acima do título */
}

p {
    color: #333; /* Altera a cor do texto para um tom mais escuro */
    font-family: 'Roboto', sans-serif; /* Define uma fonte mais moderna */
    font-size: 18px; /* Aumenta o tamanho da fonte */
    line-height: 1.6; /* Adiciona espaço entre as linhas para melhor legibilidade */
    margin-bottom: 30px; /* Aumenta o espaço abaixo de cada parágrafo */
}

.signature {
    font-style: italic;
}

.signature p {
    margin-top: 30px;
}

.highlight {
    color: #007bff;
    font-weight: bold;
}

.footer {
    margin-top: 50px;
    text-align: center;
    color: #888;
}
</style>

<body>

<div class="container">
    <h1>Fomentando a Leitura Criativa: Transformando Páginas em Aventuras</h1>
    <p> Na Escola <span class="highlight">Crescente Saber</span>, acreditamos no poder transformador da leitura. Mas mais do que simplesmente decifrar palavras em uma página, buscamos fomentar a leitura criativa - uma experiência onde as histórias ganham vida e as imaginações voam livremente. Aqui estão algumas maneiras pelas quais promovemos a leitura criativa entre nossos pequenos leitores:</p>

    <p><span class="highlight">Explorando Histórias com os Sentidos:</span> Quando mergulhamos em uma história, não estamos apenas absorvendo palavras - estamos explorando um mundo de sensações. Ao ler em voz alta, encorajamos as crianças a imaginar o cheiro das flores de um jardim encantado, sentir a textura das escamas de um dragão ou ouvir o som das ondas batendo na costa de uma ilha misteriosa. Essa imersão sensorial transforma a leitura em uma experiência multisensorial, ampliando os horizontes de nossos jovens leitores.</p>

    <p><span class="highlight">Estimulando a Criatividade:</span> As histórias são o combustível para a imaginação, e na Escola Infantil <span class="highlight">Crescente Saber</span>, incentivamos nossas crianças a deixarem suas mentes voarem livremente. Após a leitura de uma história, realizamos atividades criativas, como dramatização, desenho ou escrita de finais alternativos. Essas atividades não apenas fortalecem a compreensão da história, mas também promovem a expressão criativa das crianças, permitindo que elas se tornem coautores de suas próprias aventuras.</p>

    <p><span class="highlight">Criando Conexões Significativas:</span> Ao ler histórias que refletem a diversidade do mundo ao nosso redor, ajudamos as crianças a construir conexões significativas com o material. Explorar personagens de diferentes origens, culturas e experiências oferece às crianças uma janela para novas perspectivas e uma compreensão mais profunda da humanidade. Além disso, promovemos discussões abertas e reflexivas sobre os temas das histórias, incentivando as crianças a refletirem sobre suas próprias vidas e experiências.</p>

    <p><span class="highlight">Cultivando uma Paixão pela Leitura:</span> Mais do que apenas ensinar as crianças a ler, buscamos cultivar uma paixão duradoura pela leitura. Ao apresentar uma variedade de gêneros, estilos e autores, ajudamos as crianças a descobrirem o prazer intrínseco da leitura. Além disso, incentivamos a leitura independente, fornecendo acesso a uma ampla seleção de livros em nossa biblioteca, permitindo que as crianças sigam suas curiosidades e interesses individuais.</p>

    <p>Na Escola Infantil <span class="highlight">>Crescente Saber</span>, a leitura criativa é mais do que uma atividade - é uma jornada de descoberta, imaginação e aprendizado. Ao fomentar uma cultura de leitura vibrante e envolvente, estamos equipando nossas crianças com as habilidades e a paixão necessárias para se tornarem leitores ávidos e pensadores críticos ao longo da vida.</p>

    <div class="signature">
        <p>Atenciosamente,</p>
        <p>A Equipe da Escola Infantil <span class="highlight">Crescente Saber</span></p>
    </div>
</div>

<div class="footer">
    <p>Estamos ansiosos para continuar essa jornada emocionante ao seu lado!</p>
</div>

</body>


@endsection
