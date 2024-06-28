@extends('layout.layout')

@section('tile', 'depoimento')

@section('conteudo')


<div class="ftco-blocks-cover-1">
   <div class="site-section-cover overlay" style="background-image: url({{ asset('assets/images/paiEfilho.png') }})">
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
    <h1>Construindo Laços Inquebráveis: A Importância dos Pais Participarem das Atividades dos Filhos</h1>

    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('assets/images/familia.jpg') }}" alt="Descrição da Imagem" class="img-fluid" style="border-radius: 50px 0px;">
        </div>
        <div class="col-md-6">
            <p>Na jornada do crescimento e aprendizado de nossos pequenos, nada pode substituir o caloroso abraço e o apoio incondicional dos pais. Na Escola <span class="highlight">Crescente Saber</span>, acreditamos firmemente que a participação ativa dos pais é um ingrediente fundamental para o sucesso acadêmico e emocional de nossas crianças.</p>

            <p>Aqui, não apenas encorajamos, mas também celebramos a presença dos pais em todas as facetas da vida escolar de seus filhos. Desde eventos especiais até atividades diárias em sala de aula, reconhecemos que a colaboração entre escola e família é essencial para nutrir um ambiente de aprendizado positivo e enriquecedor.</p>
        </div>
    </div>

    <p><span class="highlight">Por que a participação dos pais é tão crucial?</span></p>

    <p><span class="highlight">Fortalecimento dos Vínculos Familiares:</span> Quando os pais se envolvem nas atividades escolares de seus filhos, criam-se laços emocionais mais profundos. Esse tempo compartilhado fortalece os laços familiares, promovendo um senso de união e pertencimento que é inestimável para o desenvolvimento saudável da criança.</p>

    <p><span class="highlight">Modelagem de Comportamento Positivo:</span> Ao testemunhar o envolvimento ativo dos pais na educação, as crianças aprendem a valorizar a importância da educação e do comprometimento. Os pais se tornam modelos de comportamento positivo, inspirando seus filhos a serem alunos dedicados e participativos.</p>

    <p><span class="highlight">Apoio ao Desenvolvimento Acadêmico:</span> A presença dos pais nas atividades escolares proporciona uma oportunidade única para acompanhar de perto o progresso acadêmico e identificar quaisquer áreas que possam precisar de apoio adicional. Essa parceria entre escola e família é fundamental para garantir que cada criança alcance seu pleno potencial.</p>

    <p><span class="highlight">Promoção de um Ambiente de Aprendizado Positivo:</span> Quando os pais participam ativamente das atividades escolares, criam-se ambientes de aprendizado mais vibrantes e acolhedores. O envolvimento dos pais ajuda a criar uma atmosfera de apoio mútuo, onde as crianças se sentem incentivadas a explorar, experimentar e crescer.</p>

    <p>Nós da Escola<span class="highlight">Crescente Saber</span>, estamos comprometidos em cultivar uma comunidade onde os pais se sintam bem-vindos e valorizados como parceiros igualmente importantes na jornada educacional de seus filhos. Desde eventos como feiras de ciências até simples visitas à sala de aula, convidamos calorosamente os pais a se envolverem ativamente na vida escolar de seus filhos.</p>

    <p>Juntos, como uma equipe unida de educadores, pais e alunos, podemos criar experiências de aprendizado verdadeiramente memoráveis e preparar nossas crianças para um futuro brilhante e promissor.</p>

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
