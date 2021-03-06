<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/index.css" type="text/css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="node_modules/select2/dist/css/select2.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  
  <title>Jovem Empreendedor</title>
</head>

<body>
  <!-- ********* IMGAEM FUNDO E FORMULARIO ********* -->
  <section id="imagem-fundo" class="container-fluid">
    <div class="col-lg-9">
      <div class="col-lg-6">
        <p class="p1">Projeto</p>
        <p class="p2">Jovem Empreendedor</p>
        <p class="p3">Experiências que transformam ideias</p>
      </div>
    </div>
    <form method="post" class="col-lg-3" action="">
      <img id="imgLogoUpf" src="midea/img/logoupf.png" />
      <h4 id="corh4">SEJA UM EMPREENDEDOR</h4>
      <h5 id="corh5">Preencha o formulário e inscreva-se!</h5>
      <br />
      <input type="text" name="f-nome" class="form-control" id="nome" placeholder="Nome" minlength="3" maxlength="50" required /><br />
      <input type="email" name="f-email" class="form-control" id="email" placeholder="E-mail"  /><br />
      <input class="form-control" type="tel" name="f-telefone" id="telefone" placeholder="Telefone" maxlength="15" /><br />
      <input type="text"  class="form-control" placeholder="Data de Nascimento" onfocus="(this.type='date')" onblur="if(this.value=='00/00/0000'){this.type='text'}"  /><br />
      <select class="form-control" name="f-anocursando">
        <option selected disabled value="">ANO QUE ESTÁ CURSANDO</option>
        <option>PRIMEIRO ANO</option>
        <option>SEGUNDO ANO</option>
        <option>TERCEIRO ANO</option>
      </select>
      <br />
      <input  type="text" name="f-cidade" class="form-control" id="cidade" placeholder="Cidade" /><br />
      <input type="text" name="f-primeiraopcao" class="form-control" id="primeira" placeholder="Primeira Opção de Graduação"  /><br />
      <input type="text" name="f-segundaopcao" class="form-control" id="segunda" placeholder="Segunda Opção de Graduação" /><br />
      <input type="text" name="inputCaptcha" class="form-control"  id="inputCaptcha">
      <div>
        <label id="checkboxForm" class="checkbox-inline"><input type="checkbox" value=""  />Estou ciente e aceito os
          termos estabelecidos pela LGPD.</label>
      </div>
      <br />

      <div>
        <a id="corLink" href="http://www.upf.br" target="_blank">Clique aqui para ler Termo de Consentimento para Armazenamento e
          Tratamento de Dados Pessoais em conformidade com a LGPD</a>
      </div>
      <br />
      <button id="btnSubmit" type="submit" class="btn btn-danger">CADASTRAR</button><br />
      <div class="col-xs-2"></div>
    </form>

  </section>
  <!-- ************* INFORMATIVOS ************  -->
  <section id="centro-infoCards" class="container-fluid col-sm-12">
    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4">
        <div data-aos="zoom-in">
          <p class="titulos">
            Desenvolva suas ideias dentro da Universidade e conte com o
            auxílio de professores e profissionais de diferentes áreas para
            seguir no mundo dos negócios.
          </p>
        </div>
      </div>
      <div class="col-lg-4"></div>
    </div>
    <div class="col-lg-2"></div>
    <div class="row">
      <div class="card1 col-lg-4">
        <div data-aos="fade-right">
          <table>
            <tr>
              <td>
                <img style="margin-right: 15px" src="midea/img/ideia.png" />
              </td>
              <td>
                <p class="tituloCard">Conecte-se à transformação</p>
                <p class="conteudoCard">
                  Aperfeiçoe os seus conhecimentos, conheça a experiência
                  acadêmica e se conecte ao mercado com a ajuda do Instituto
                  Manager, o Google for Education e a UPF.
                </p>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="card2 col-lg-4">
        <div data-aos="fade-left">
          <table>
            <tr>
              <td>
                <img style="margin-right: 15px" src="midea/img/mao.png" />
              </td>
              <td>
                <p class="tituloCard">Você no mundo dos negócios</p>
                <p class="conteudoCard">
                  Desenvolva sua própria empresa em 12 meses. Planeje cada
                  setor ou serviço, aprenda a descobrir oportunidades que
                  surgem no dia-a-dia e crie a sua identidade profissional.
                </p>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="col-lg-2"></div>
    <div class="row">
      <div class="card1 col-lg-4">
        <div data-aos="fade-right">
          <table>
            <tr>
              <td>
                <img style="margin-right: 15px" src="midea/img/cavalo.png" />
              </td>
              <td>
                <p class="tituloCard">Mentorias</p>
                <p class="conteudoCard">
                  Conte com mentorias do Balcão do Empreendedor UPF.
                </p>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="card2 col-lg-4">
        <div data-aos="fade-left">
          <table>
            <tr>
              <td>
                <img style="margin-right: 15px" src="midea/img/biblioteca.png" />
              </td>
              <td>
                <p class="tituloCard">Biblioteca Virtual</p>
                <p class="conteudoCard">
                  Tenha acesso à biblioteca virtual da Universidade.
                </p>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!--  *********   VIDEOS   **********  -->
  <section id="videos" class="container-fluid col-sm-12">
    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4">
        <div data-aos="zoom-in">
          <p class="titulos">
            Assista agora os videos dos apoiadores, explicando um pouco mais
            sobre o que é este projeto.
          </p>
        </div>
      </div>
      <div class="col-lg-4"></div>
    </div>
    <div class="videos">
      <span data-aos="fade-right">
        <iframe height="350px" width="350px" src="midea/video/videoUPF.mp4"></iframe>
      </span>
      <span data-aos="fade-left">
        <iframe title="Tiago XP" height="350px" width="350px" src="midea/video/videoXP.mp4"></iframe>
      </span>
    </div>
  </section>
  <!--  *********   BANNER   **********  -->
  <section class="container-fluid col-sm-12">
    <div class="col-lg-2"></div>
    <div id="banner" class="row">
      <div class="col-lg-8">
        <p class="titulos-banner">SEJA UM JOVEM EMPREENDEDOR</p>
        <p class="titulos-banner">INSCREVA-SE JÁ!</p>
        <button type="submit" class="btn btn-danger btn-lg" id="voltaraotopo">
          QUERO ME INSCREVER!
        </button>
      </div>
    </div>
    <div class="col-lg-2"></div>
  </section>
  <!--  *********   RODAPE   **********  -->
  <section class="container-fluid col-lg-12">
    <div class="container col-lg-2"></div>
    <div id="rodape" class="col-lg-8">
      <img src="midea/img/upfrodape.jpg" alt="" />
      <img src="midea/img/upfextensao.jpg" alt="" />
      <img src="midea/img/manager.jpg" alt="" />
    </div>
    <div id="imgredesSociais" class="col-lg-2">
      <a href="https://www.instagram.com/universidadeupf/" target="_blank">
        <img src="midea/img/instagram.png" alt="" /></a>
      <a href="https://www.facebook.com/universidadedepassofundo" target="_blank"><img src="midea/img/facebook.png" alt="" /></a>
      <a href="https://www.linkedin.com/edu/school?id=10612" target="_blank"><img src="midea/img/linkedin.png" alt="" /></a>
      <a href="https://www.flickr.com/universidadedepassofundo/" target="_blank"><img class="imgRedes" src="midea/img/flickr.png" alt="" /></a>
      <a href="https://www.youtube.com/UPFoficial" target="_blank"><img src="midea/img/youtube.png" alt="" /></a>
      <a href="https://twitter.com/universidadeupf" target="_blank"><img src="midea/img/twitter.png" alt="" /></a>
      <a href="https://wa.me/5554912839821" target="_blank"><img src="midea/img/whatsapp.png" alt="" /></a>
    </div>
  </section>
</body>

<script type="text/javascript" src="js/captcha.js"></script>
<script type="text/javascript" src="js/telefone.js"></script>
<script type="text/javascript" src="js/animacao.js"></script>
<link rel="stylesheet" href="https://cdn.privacytools.com.br/public_api/banner/style/zGGa615171.css?t=1" />
<script type="text/javascript" src="https://cdn.privacytools.com.br/public_api/banner/script/bottom/zGGa615171.js?t=1"></script>
<script>
  AOS.init({
    duration: 600
  })
</script>

</html>