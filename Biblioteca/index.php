<?php
    include 'header.php';
?>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between ">
          <a class="p-2 text-muted" href="#1">Mundo</a>
          <a class="p-2 text-muted" href="#2">Nacionais</a>
          <a class="p-2 text-muted" href="#3">Biblioteca Virtual</a>
          <a class="p-2 text-muted" href="#4">Design</a>
          <a class="p-2 text-muted" href="#5">Cultura</a>
          <a class="p-2 text-muted" href="#6">Sobre</a>
        </nav>
      </div>

      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Livro Mais Lido</h1>
          <p class="lead my-3">Ao amanhecer do dia da colheita da Quinquagésima Edição dos Jogos Vorazes, o medo toma conta dos distritos de Panem.
             Nesse ano, em comemoração ao Massacre Quaternário, o dobro de tributos será levado de suas casas.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue lendo...</a></p>
        </div>
      </div>

      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Mundo</strong>
              <h3 class="mb-0">
                <a class="text-dark" id="1">Mundo da Leitura</a>
              </h3>
              <div class="mb-1 text-muted">Acesso Expirado</div>
              <p class="card-text mb-auto">Desvende nosso Mundo da Leitura, nosso projeto piloto que lhe da acesso a um acervo de livros por apenas $1.</p>
              </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="mundo.jpg" alt="Imagem" width="300" height="200">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success" id="4">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" id="2">Nacionais</a>
              </h3>
              <div class="mb-1 text-muted">11 de Nov</div>
              <p class="card-text mb-auto">Este é um card maior com suporte à texto em baixo, como uma introdução mais natural ao conteúdo adicional.</p>
              </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="livross.jpg" alt="Imagem" >
          </div>
        </div>
      </div>
    </div>

    <main role="main" class="container">
    <div class="row">
  <div class="col-md-8 blog-main">
    <h3 id="3" class="pb-3 mb-4 font-italic border-bottom">
      Biblioteca Virtual
    </h3>

    <div class="blog-post">
      <h2 class="blog-post-title">Lançamento: "A Jornada do Leitor"</h2>
      <p class="blog-post-meta">Escrito por <a href="#">Equipe Biblioteca</a>, em 10 de Abril de 2025.</p>

      <p>Este livro é um guia essencial para quem deseja aprofundar o hábito da leitura. Com dicas práticas e histórias inspiradoras, ele mostra como os livros podem transformar vidas.</p>
      <hr>
      <p>Descubra como a leitura impacta no desenvolvimento pessoal e profissional. <a href="#">Saiba mais sobre o autor</a> e sua trajetória literária.</p>
      <blockquote>
        <p>"Ler é viajar sem sair do lugar. Descubra novos mundos em cada página." — Autor Desconhecido</p>
      </blockquote>
      <p>Repleto de reflexões e sugestões de leitura, o livro é ideal para leitores iniciantes e veteranos.</p>
      <h2>Sobre o conteúdo</h2>
      <p>O livro aborda temas como motivação para leitura, escolha de gêneros literários, e como manter o hábito de ler mesmo com a correria do dia a dia.</p>
      <h3>Destaques</h3>
      <ul>
        <li>Dicas práticas para criar o hábito de leitura</li>
        <li>Listas de leitura para diferentes perfis</li>
        <li>Reflexões sobre o papel da literatura na vida moderna</li>
      </ul>
    </div><!-- /.blog-post -->

    <div class="blog-post">
      <h2 class="blog-post-title" id="5">Clássicos da Cultura brasileira</h2>
      <p class="blog-post-meta">Postado por <a >Biblioteca Digital</a>, em 5 de Abril de 2025.</p>

      <p>Explore grandes obras como "Dom Casmurro", "Memórias Póstumas de Brás Cubas" e "O Cortiço". Esses clássicos oferecem uma rica visão da cultura e da história do Brasil.</p>
      <blockquote>
        <p>"A leitura dos clássicos nos ajuda a compreender quem somos e de onde viemos."</p>
      </blockquote>
      <p>Disponíveis gratuitamente em nosso acervo digital.</p>
    </div><!-- /.blog-post -->

    <div class="blog-post">
      <h2 class="blog-post-title">Novidade no acervo: Leitura acessível</h2>
      <p class="blog-post-meta">Postado por <a href="#">Equipe Técnica</a>, em 2 de Abril de 2025.</p>

      <p>Agora nossa biblioteca conta com recursos de acessibilidade para leitura, como audiobooks e modo leitura para dislexia.</p>
      <ul>
        <li>Audiobooks gratuitos em diversos gêneros</li>
        <li>Interface adaptável para leitura com foco</li>
        <li>Opções com fonte ampliada e contraste elevado</li>
      </ul>
      <p>Nosso objetivo é democratizar o acesso à leitura para todos.</p>
    </div><!-- /.blog-post -->

     </div><!-- /.blog-main -->

  <aside class="col-md-4 blog-sidebar">
    <div class="p-3 mb-3 bg-light rounded">
      <h4 class="font-italic" id="6">Sobre</h4>
      <p class="mb-0">Somos uma biblioteca digital independente, apaixonada por livros. Criamos este espaço para tornar a leitura mais acessível a todos, com conteúdo organizado, gratuito e feito com muito carinho.</p>
    </div>

  </aside>
</div>
</main>


<?php
    include 'footer.php';

?>