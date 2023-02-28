<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./src/assets/styles/reset.css" />
    <link rel="stylesheet" href="./src/assets/styles/main.css" />
    <link rel="shortcut icon" href="https://gremioplay.tv.br/teste/src/assets/images/favicon.ico" type="image/x-icon" />
    <meta name="description" content="Acompanhe contúdos exclusivos do Grêmio, Filmes, Séries e Shows pra você e sua família." />


    <title>Grêmio Play</title>
</head>

<body>
    <div class="alert">
        <div class="alert_row">
            <span>Novo!</span>
            <p>Planos a partir de <span>R$15,90</span>.</p><a href="#plans">Saiba Mais</a>
        </div>
    </div>
    <?php include("./src/Components/Header/Header.php") ?>
    <main>
        <section id="banner">
            <div class="banner_home">
                <img src="./src/assets/images/banner5.webp" alt="Rádio Grêmio" />
                <a href="https://gremioplay.tv.br/radio/index.php">Ouça Agora</a>
            </div>
        </section>
        <section id="advantage">
            <h1>Por que Assinar Grêmio Play?</h1>
            <div class="advantage_row">
                <div class="advantage_item">
                    <img src="./src/assets/images/CONTEUDO-EXCLUSIVO.webp" alt="Conteúdos Exclusivos Grêmio" />
                    <h2>Conteúdos Exclusivos</h2>
                    <p>Acompanhe contúdos exclusivos do Grêmio</p>
                </div>
                <div class="advantage_item">
                    <img src="./src/assets/images/MULTIPLATAFORMA.webp" alt="Multiplataformas" />
                    <h2>Multiplataformas</h2>
                    <p>Aproveite a Grêmio Play em todos os dispositivos! Utilize quando quiser, onde você estiver.
                    </p>
                </div>
                <div class="advantage_item">
                    <img src="./src/assets/images/FILMES-E-SÉRIES.webp" alt="Filmes e Séries" />
                    <h2>Filmes e Séries</h2>
                    <p>Filmes, Séries e Shows pra você e sua família.</p>
                </div>
            </div>
        </section>
        <section id="appstore">
            <div class="appstore_row">
                <div class="appstore_image">
                    <img src="./src/assets/images/familia-tricolor-app.png" alt="Família Tricolor" />
                </div>
                <div class="appstore_text">
                    <div class="title">
                        <h3>Aperte o play e venha para o</h3>
                        <span>Universo tricolor</span>
                        <p>Baixe agora a <span>Grêmio Play</span> em sua loja de aplicativos:</p>
                    </div>
                    <div class="stores">
                        <a href="https://play.google.com/store/apps/details?id=tv.alphanetworks.beemix.gremio&pli=1"><img src="./src/assets/images/googleplay.webp" alt="Google Play" /></a>
                        <a href="https://apps.apple.com/br/app/gr%C3%AAmio-play/id1529308374"><img src="./src/assets/images/applestore.webp" alt="Apple Store" /></a>
                    </div>
                </div>
            </div>
        </section>
        <section id="plans">
            <div class="plans_row">
                <h3>Planos de acesso</h3>
                <div class="plans_container">
                    <div class="plan_item">
                        <div class="plan_image">
                            <img src="./src/assets/images/plano-familia-tricolor.webp" alt="Plano Família" />
                        </div>
                        <div class="plan_title">
                            <h4>Plano Família</h4>
                        </div>
                        <div class="plan_description">
                            <span class="description_item">Conteúdo Universo Tricolor</span>
                            <span class="description_item">Conexão Tricolor</span>
                            <span class="description_item">Grêmio Rádio 24 Horas</span>
                            <span class="description_item">Catálogo Nacional</span>
                            <span class="description_item">Catálogo Filmes(PLAY)</span>
                            <span class="description_item">Catálogo Séries</span>
                            <span class="description_item">Aluguel de Conteúdo(GO)</span>
                            <span class="description_item">Catálogo Kids</span>
                            <span class="description_item">Catálogo Shows</span>
                            <span class="description_item">Web + IOS/Android + Chromecast</span>
                            <span class="description_item">4 Acessos Simultâneos</span>
                        </div>
                        <div class="plan_actions">
                            <span class="plan_price">R$19,90</span>
                            <a href="https://cadastro.gremioplay.tv.br/" target="_blank" class="plan_button">Assine já</a>
                        </div>
                    </div>
                    <div class="plan_item recommended">
                        <div class="plan_image">
                            <img src="./src/assets/images/plano-socio-familia-tricolor.webp" alt="Plano Sócio" />
                        </div>
                        <div class="plan_title">
                            <h4>Plano Sócio</h4>
                        </div>
                        <div class="plan_description">
                            <span class="description_item">Conteúdo Universo Tricolor</span>
                            <span class="description_item">Conexão Tricolor</span>
                            <span class="description_item">Grêmio Rádio 24 Horas</span>
                            <span class="description_item">Catálogo Nacional</span>
                            <span class="description_item">Catálogo Filmes(PLAY)</span>
                            <span class="description_item">Catálogo Séries</span>
                            <span class="description_item">Aluguel de Conteúdo(GO)</span>
                            <span class="description_item">Catálogo Kids</span>
                            <span class="description_item">Catálogo Shows</span>
                            <span class="description_item">Web + IOS/Android + Chromecast</span>
                            <span class="description_item">4 Acessos Simultâneos</span>
                        </div>
                        <div class="plan_actions">
                            <span class="plan_price">R$15,90</span>
                            <a href="https://cadastro.gremioplay.tv.br/" target="_blank" class="plan_button">Assine já</a>
                        </div>
                    </div>
                    <div class="plan_item">
                        <div class="plan_image">
                            <img src="./src/assets/images/plano-free.webp" alt="Plano Gratuito" />
                        </div>
                        <div class="plan_title">
                            <h4>Plano Gratuito</h4>
                        </div>
                        <div class="plan_description">
                            <span class="description_item">Conteúdo Universo Tricolor</span>
                            <span class="description_item">Conexão Tricolor</span>
                            <span class="description_item">Grêmio Rádio 24 Horas</span>
                            <span class="description_item">Web + IOS/Android + Chromecast</span>
                            <span class="description_item">2 Acessos Simultâneos</span>
                        </div>
                        <div class="plan_actions">
                            <span class="plan_price">GRATUITO</span>
                            <a href="https://cadastro.gremioplay.tv.br/" target="_blank" class="plan_button">Cadastre-se</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="faq">
            <div class="faq_row">
                <h5>Duvidas Frequentes</h5>
                <div class="faq_container">
                    <div class="faq_itens" data-faq>
                        <p>O que é a Grêmio Play</p>
                        <div class="faq_description">
                            Criada para você e toda a família tricolor, a plataforma Grêmio Play inova ao oferecer
                            um catálogo de conteúdos que une esporte e entretenimento.
                            <br>
                            <br>
                            Ao se cadastrar você terá acesso gratuito aos conteúdos do Universo Tricolor e Conexão
                            Tricolor, além da Grêmio Rádio 24 horas no ar com programação que inclui jornadas
                            esportivas, notícias e muita música.
                            <br>
                            <br>
                            Ao assinar um dos planos disponíveis, você poderá assistir a conteúdos on demand: séries
                            consagradas, filmes de sucesso do cinema mundial, produções nacionais, conteúdos
                            infantis, shows e muito mais. Tudo para você curtir quando quiser e onde estiver.
                            <br>
                            <br>
                            Grêmio Play, a Plataforma da Família Tricolor.
                        </div>
                    </div>
                    <div class="faq_itens" data-faq>
                        <p>Dúvidas sobre a conta e perfil</p>
                        <div class="faq_description">
                            <p>Como adicionar um perfil?</p>
                            No canto superior esquerdo clicar em “Mostrar configurações do usuário”. Clique em
                            “Perfis”, abrirá a tela perfis existentes dentro de uma caixa e o símbolo adicionar “+”
                            dentro de uma caixa. Clique em adicionar e será apresentada a tela para preencher com os
                            dados do perfil a ser criado.
                            <br>
                            <br>
                            <p>Como editar um perfil?</p>
                            No canto superior esquerdo clicar em “Mostrar configurações do usuário”. Clique em
                            “Perfis”, abrirá a tela perfis existentes dentro de uma caixa. Selecione o perfil que
                            vai ser editado, clicando no nome deste dentro da caixa. Abrirá uma página com os dados
                            do perfil, ao alterar aparecerá os botões: Cancelar e Salvar.
                            <br>
                            <br>
                            <p>Como excluir um perfil?</p>
                            No canto superior esquerdo clicar em “Mostrar configurações do usuário”. Clique em
                            “Perfis”, abrirá a tela perfis existentes dentro de uma caixa. Dentro do box do usuário
                            que deseja excluir, procure no lado direito o símbolo com três pontos horizontais,
                            clique e abrirá as opções “Editar” ou “Apagar”. Selecione “Apagar” e abrirá uma caixa
                            com o texto: “Perfil principal será selecionado automaticamente. Tem certeza que quer
                            deletar o perfil “Nome do perfil”? CANCELAR – OK Clique em OK para prosseguir e a
                            exclusão será feita.
                            <br>
                            <br>
                            <p>Esqueci minha senha, como fazer?</p>
                            Acessar pela web/desktop e clicar em REDEFINA, ao lado do “Esqueceu sua senha?” na
                            página de login. Será solicitada confirmação do seu e-mail cadastrado para envio da nova
                            senha.
                            <br>
                            <br>
                            <p>Como redefinir minha senha?</p>
                            Acessar pela web/desktop com o seu login atual. No canto superior esquerdo clicar em
                            “Mostrar configurações do usuário”. Clique em “Minha Conta” abrirá a tela de detalhes da
                            conta. Acione o botão senha e abrirá uma tela para com as caixas de texto: Coloque a sua
                            senha atual – Nova senha – Confirme a nova senha Preencha com as informações e confirme.
                            <br>
                            <br>
                            <p>Como atualizar ou alterar e-mail?</p>
                            Acessar pela web/desktop com o seu login atual. No canto superior esquerdo clicar em
                            “Mostrar configurações do usuário”. Clique em “Minha Conta”, abrirá a tela de detalhes
                            da conta. Role a página até Contact > Email*. Na linha onde está o email, altere
                            digitando a nova informação.
                            Lembre-se: o e-mail alterado é o seu e-mail de contato, seu login permanece o mesmo do
                            momento do cadastro.”
                            <br>
                            <br>
                            <p>Qual limite de perfis por conta?</p>
                            Ilimitado, mas pode definir um limite de acordo com o cliente.
                            <br>
                            <br>
                            <p>Como cancelar a conta?</p>
                            Acessar pela web/desktop com o seu login atual. No canto superior esquerdo clicar em
                            “Mostrar configurações do usuário”. Clique em “Assinatura” abrirá a tela de detalhes dos
                            planos contratados e financeiros. Acione o botão CANCELAR no plano a ser desabilitado.
                            Confirme o cancelamento do plano clicando SIM.
                        </div>
                    </div>
                    <div class="faq_itens" data-faq>
                        <p>Dúvidas sobre os planos</p>
                        <div class="faq_description">
                            <p>Preciso ser assinante para assistir aos conteúdos no aplicativo?</p>
                            Seu cadastro é 100% GRATUITO, basta você se cadastrar, que os conteúdos do UNIVERSO
                            TRICOLOR estão disponíveis.
                            PLANO FREE
                            <br>
                            <br>
                            - Conteúdo Universo Tricolor:
                            - Conteúdo Universo Tricolor:+ de 2800 conteúdos do GRÊMIO;
                            - Conexão Tricolor;
                            - Grêmio Rádio 24 horas;
                            - 2 acessos simultâneos;
                            - DEVICES: Web + IOS/Android
                            - 100% GRATUITO
                            <br>
                            <br>
                            <p>Como funciona a cobrança e pagamento do Grêmio play?</p>
                            Cartão de crédito.<br>
                            Bandeiras aceitas: <img src="./src/assets/images/bandeiras-card.webp" alt="Visa e Mastercard" />
                            <br>
                            <br>
                            <p>O que significa SVOD?</p>
                            O sistema SVOD (Subscription Video on Demand) é o sistema em que o conteúdo é
                            disponibilizado ao usuário por meio de uma assinatura. O assinante contrata o serviço e
                            paga uma taxa mensal e pode desfrutar dos conteúdos.
                            <br>
                            <br>
                            <p>O que significa TVOD?</p>
                            O sistema TVOD (Transactional Video on Demand) é o sistema em que o conteúdo é
                            disponibilizado ao usuário através de pagamento unitário. O conteúdo comprado fica
                            disponível por 48 horas para ser assistido, quantas vezes desejar dentro desse prazo.
                        </div>
                    </div>
                    <div class="faq_itens" data-faq>
                        <p>Dúvidas sobre a programação</p>
                        <div class="faq_description">
                            <p>O que é o Guia de Programação?</p>
                            O guia de programação, é por onde você poderá acompanhar a grade diária de programação
                            do canal ao vivo. Acompanhando os horários que os programas irão começar e terminar.
                            <br>
                            <br>
                            <p>O que é o SOB DEMANDA?</p>
                            A Página do sob demanda é a biblioteca geral da plataforma, ela contempla todos os
                            conteúdos que estão disponíveis para assistir na plataforma.
                            <br>
                            <br>
                            <p>O que são os CANAIS VOD?</p>
                            São canais para divulgar todos os conteúdos disponíveis na plataforma, estão separados
                            em gêneros, e assuntos.
                            <br>
                            <br>
                            <p>O que é o canal UNIVERSO TRICOLOR?</p>
                            É a página onde contempla todos os conteúdos do Grêmio: Bastidores, Entrevistas, Gols,
                            Campeonatos, etc.<br>
                            Você encontrará esses conteúdos organizados por ano, para facilitar assim a sua busca ao
                            conteúdo desejado.
                            <br>
                            <br>
                            <p>O que é o canal FILMES?</p>
                            É a página onde contempla todos os filmes disponíveis na plataforma, estando eles dentro
                            do pacote de assinatura(SVOD), ou, para aluguel(TVOD).
                            <br>
                            <br>
                            <p>O que é o canal SÓCIO E FAMÍLIA TRICOLOR?</p>
                            Você encontrará nessa página, todos os conteúdos que estiverem disponíveis na modalidade
                            de assinatura (SVOD). Se você for assinante do PLANO FAMÍLIA TRICOLOR, todos estes
                            conteúdos estarão disponíveis para você assistir.
                            <br>
                            <br>
                            <p>O que é o canal PARA ALUGAR?</p>
                            Você encontrará nessa página, todos os conteúdos que estiverem disponíveis na modalidade
                            de ALUGUEL (TVOD).
                            <br>
                            <br>
                            <p>O que é o canal KIDS?</p>
                            Canal dedicado ao público infantil, com todos os filmes, e, séries disponíveis, nas
                            categorias GO e PLAY.
                            <br>
                            <br>
                            <p>O que é o canal SHOWS?</p>
                            Canal direcionado para shows de artistas mundiais e nacionais, na modalidade de
                            assinatura(SVOD).
                            <br>
                            <br>
                            <p>O que é o canal CONTEÚDO BRASILEIRO?</p>
                            Canal direcionado ao conteúdo nacional disponibilizado na modalidade de
                            assinatura(SVOD).
                            <br>
                            <br>
                            <p>O que é o canal PARA MARATONAR?</p>
                            Canal com todas as maratonas disponíveis na plataforma, nas modalidades de
                            assinatura(SVOD), ou, aluguel (TVOD);
                            <br>
                            <br>
                            <p>O que é CONEXÃO TRICOLOR?</p>
                            Esta categoria foi criada para conectar os usuários da plataforma Grêmio Play, à todas
                            ás redes do Grêmio Futebol Portoalegrense.
                            Clicando em cada uma das imagens, você será redirecionado para a página externa do
                            assunto em questão.
                            <br>
                            <br>
                            <p>O que é GRÊMIO RÁDIO?</p>
                            A GRÊMIO Rádio possui 24 horas de programação diária, entre, pós jogo, jornada
                            esportiva, e as músicas de sucesso mundial! Aqui só toca golaço!
                        </div>
                    </div>
                    <div class="faq_itens" data-faq>
                        <p>Dúvidas sobre a plataforma</p>
                        <div class="faq_description">
                            <p> Por que o aplicativo não está funcionando, quais são as causas mais comuns?</p>
                            As causas mais comuns são internet com velocidade lenta, computador com requisitos
                            abaixo do mínimo recomendado, sistema operacional incompatível, browser / navegador
                            desatualizado ou incompatível, rede de internet instável.
                            <br>
                            Ao persistir o erro, entrar em contato com nosso atendimento através do:
                            <a href="mailto:atendimento@gremioplay.tv.br">atendimento@gremioplay.tv.br</a>
                            <br>
                            <br>
                            <p>É possível assistir conteúdos fora do Brasil?</p>
                            Não. Os conteúdos são liberados apenas para Território Brasileiro.
                            <br>
                            <br>
                            <p>Posso assistir em vários dispositivos ao mesmo tempo?</p>
                            PLANO FREE - CADASTRO GRATUITO - 2 acessos simultâneos;<br>
                            PLANO FAMÍLIA TRICOLOR - 4 acessos simultâneos;<br>
                            PLANO SÓCIO FAMÍLIA TRICOLOR - 4 acessos simultâneos;<br>
                            <br>
                            <br>
                            <p>Depois de adquirir um conteúdo, por quanto tempo este fica disponível para assistir?
                            </p>
                            Fica disponível por 48 horas.
                            <br>
                            <br>
                            <p>Como faço para ativar ou desativar legendas ou áudio alternativo no dispositivo?</p>
                            Para mudar áudio ou legendas, no modo de reprodução toque na tela para aparecer as
                            funções do player. No canto inferior direito está o botão de propriedades de idiomas (um
                            ícone “CC”).<br>
                            Ao clicar nele serão apresentadas as opções disponíveis. Basta tocar nas que deseja
                            selecionar.
                            <br>
                            <br>
                            <p>Como adicionar conteúdos aos favoritos?</p>
                            Selecione o conteúdo que deseja adicionar aos favoritos e clique no ícone “Coração +”
                            (adicionar). Quando estiver habilitado como favorito, o ícone mudará para “Coração -” e
                            estará vermelho (remover).
                            <br>
                            <br>
                            <p>Como alugar conteúdo?</p>
                            Todo conteúdo que estiver com a marca d'água GO, ou, cadeado, é um conteúdo para
                            aluguel. Basta selecionar o conteúdo desejado, se tiver cartão de crédito já cadastrado
                            você só precisa confirmar os passos da compra, e pronto, pode assistir o conteúdo
                            quantas vezes quiser em até 48 horas após a realização do aluguel do mesmo.
                            <br>
                            <br>
                            <p>Posso alugar conteúdo utilizando meu smartphone ou tablet?</p>
                            Sim, entre na url
                            <a rel="noopener" href="https://gremioplay.com.br/" target="_blank">www.gremioplay.com.br</a>
                            via o browser do seu mobile, alugue o conteúdo de seu interesse.
                            <br>
                            Após isso, logue no aplicativo com seu usuário, clique o item Biblioteca no menu, e seu
                            conteúdo alugado estará disponível para que possa assisti-lo.
                            <br>
                            <br>
                            <p>Os vídeos não estão sendo reproduzidos adequadamente – travando ou com qualidade
                                baixa,
                                por quê?</p>
                            Se a causa for internet, o mínimo recomendável para assistir em qualidade SD (480i) é
                            uma internet com uma velocidade mínima de 2Mbps. Para poder assistir aos conteúdos em HD
                            (720p), o recomendável é a partir de 10Mbps, em FHD (1080p) são 14Mpbs.
                            <br>
                            Também pode ser computador com placa de vídeo com pouca memória ou conectado por uma
                            rede sem fio com muitos dispositivos conectados ou com velocidade baixa.
                            <br>
                            Nestas situações, o player da plataforma tenta ajustar qualidade para que a reprodução
                            não seja interrompida, de acordo com a velocidade disponível. Se a velocidade disponível
                            for alta, maior a qualidade do vídeo, se for baixa menor qualidade.
                            <br>
                            <br>
                            <p>Como faço a busca de conteúdos disponíveis?</p>
                            Se conectado no portal do “Provedor” através de browser:
                            <br>
                            No canto superior direito haverá um símbolo de lupa. Basta clicar nele para abrir a
                            caixa de texto para poder digitar o que busca.
                            <br>
                            No aplicativo Android ou iOS:
                            <br>
                            No canto superior direito haverá um símbolo de lupa. Basta clicar nele para abrir a
                            caixa de texto com a palavra “Pesquisar” para poder digitar o que busca.
                            <br>
                            No Chromecast ou ChromeTV:
                            <br>
                            Através do dispositivo móvel com o Aplicativo espelhado com o Chromecast ou ChromeTV, no
                            canto superior direito haverá um símbolo de lupa. Basta clicar nele para abrir a caixa
                            de texto com a palavra “Pesquisar” para poder digitar o que busca.
                        </div>
                    </div>
                    <div class="faq_itens" data-faq>
                        <p>Instalação e compatibilidade</p>
                        <div class="faq_description">
                            <p>Como instalar o aplicativo em smartphone, tablet, iPhone ou TV?</p>
                            Telefone ou tablet com Android e TV com Android TV:
                            Inicie a Play Store e na caixa de busca digite: Grêmio Play. Quando for exibida a lista,
                            selecione o aplicativo e em seguida acione o botão “instalar”. Depois é só abrir a
                            aplicativo instalado e colocar o usuário e senha que deverão ter sido cadastrados
                            anteriormente pela internet.
                            <br>
                            <br>
                            <p>iPhone ou iPad:</p>
                            Clique no ícone da App Store, representado por um “A”. Clique em buscar (desenho de uma
                            lupa). A opção fica no lado inferior direito da tela e abre a página de busca. Na barra
                            de texto digite Grêmio Play e em seguida no botão azul escrito “busca” no teclado. Ao
                            encontrar o aplicativo, clique nele e em seguida no botão “obter” que está localizado à
                            direita superior do aplicativo. Para iniciar o download pressione o botão do iPhone ou
                            digite a senha. Após a conclusão do download, clique em “Abrir” para acessar o
                            aplicativo diretamente da App Store. Outra maneira de abrir é clicando no ícone do
                            aplicativo na tela do iPhone para abri-lo.
                            <br>
                            <br>
                            <p>Quais dispositivos compatíveis com o aplicativo?</p>
                            - Smartphones: Android 6 ou superior, iOS 9 ou superior.<br>
                            - Smart Tvs: Android.<br>
                            - Chromecast.<br>
                            - Apple TV.<br>
                            - Tablet: iPAD com iOS 9 – Tablet com Android 6 ou superior (quadcore).<br>
                            - Computadores PC ou Mac.
                            <br>
                            <br>
                            <p>O Grêmio Play é compatível com Chromecast?</p>
                            Sim. Para os planos sócio e família tricolor.
                            <br>
                            <br>
                            <p>Quais requisitos mínimos para assistir aos conteúdos na web (computador)?</p>
                            Necessário para PC:<br>
                            Intel Core i3 dual core 2,3 Ghz ou AMD Athlon Dual Core 2,8 Ghz – 4Gb de memória RAM –
                            Placa de vídeo AMD ou NVidia com capacidade de rodar videos 1280×720 pixel – 1 Gb de
                            memória de vídeo – Placa de Som compatível com DirectX 10 ou superior.
                            <br>
                            <br>
                            Necessário para Mac:<br>
                            Apple iMac, MacMini, MacPro, MacBook com Mac OS v10.12 “Sierra” ou superior com 4Gb de
                            memória RAM – Placa de vídeo AMD, Intel ou NVidia com capacidade de rodar vídeos
                            1280×720 pixel – 1 Gb de memória de vídeo.
                            <br>
                            <br>
                            Navegadores suportados:
                            Chrome – Firefox – Safari ou Edge
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include("./src/Components/Footer/Footer.php") ?>
    <script src="./src/assets/js/default.js"></script>
</body>

</html>