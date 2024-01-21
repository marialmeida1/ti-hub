<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LessonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lessons = [

            // Backend
            [
                'course_id' => 1,
                'name' => "Bases da Internet: ",
                'description' => "Antes de se tornar um ótimo desenvolvedor backend é preciso aprender as principais bases da tecnologia, e por meio desse curso você irá aprender o essencial sobre a internet, como fundamentos de redes de computadores e internet:",
                'link' => 'https://img.youtube.com/vi/YbRHeRFYyCQ/0.jpg',
                'image' => "https://www.youtube.com/playlist?list=PLAp37wMSBouDdpuuYhZfEK9oH0qk0IANb",
            ],
            [
                'course_id' => 1,
                'name' => "HTML e CSS",
                'description' => "Continuando nosso aprendizado para uma carreira de sucesso, iremos aprender sobre as duas principais linguagens do desenvolvimento web. Sendo o HTML, uma linguagem de marcação para construção do esqueleto das páginas, e o CSS, o estilo necessário para dar um visual interessante para os sites. Vamos lá? Esse é um curso introdutório das duas linguagens!",
                'link' => 'https://img.youtube.com/vi/PuyZAUyZYDI/0.jpg',
                'image' => "https://www.youtube.com/watch?v=PuyZAUyZYDI",
            ],
            [
                'course_id' => 1,
                'name' => "Lógica de Programação",
                'description' => "Antes de iniciar o aprendizado de uma linguagem de programação é necessário pensar como um programador, através da lógica de programação! Por meio dela, você irá conseguir explorar qualquer nova linguagem. Até porque, ela é universal! ",
                'link' => "https://img-c.udemycdn.com/course/240x135/4278258_d5da_2.jpg",
                'image' => "https://www.udemy.com/share/105att3@zWEtvp76ydc2nlSDKFSkBij4oGDwq-wLUBo906yN6Bl0RO51W1i-CXSD0KRmVdTLhw==/",
            ],
            [
                'course_id' => 1,
                'name' => "Javascript",
                'description' => "Agora sim iremos explorar uma linguagem de programação. O javascript é a principal linguagem para desenvolvedores webs tornarem suas aplicações dinâmicas, e por meio do aprendizado dessa linguagem você conseguirá ter uma visão completa do funcionamento de uma aplicação, construindo um backend bem formulado e interativo com as necessidades do frontend! ",
                'link' => 'https://img.youtube.com/vi/TkD0QMyBa28/0.jpg',
                'image' => "https://www.youtube.com/playlist?list=PLnDvRpP8BneysKU8KivhnrVaKpILD3gZ6",
            ],
            [
                'course_id' => 1,
                'name' => "Versionamento",
                'description' => "Quando se trabalha em equipe é essencial trabalhar com ferramentas de versionamento de código, podendo organizar o seu trabalho em versões. Esse é um curso rápido para aprender sobre a ferramenta Git e plataformas como GitHub e GitLab: ",
                'link' => 'https://img.youtube.com/vi/iQn5vZt0iWI/0.jpg',
                'image' => "https://www.youtube.com/watch?v=iQn5vZt0iWI&list=PLpaKFn4Q4GMOhOuffvi7VagNib0P325AV",
            ],
            [
                'course_id' => 1,
                'name' => "Banco de Dados",
                'description' => "Iniciando nosso trajeto no backend das nossas aplicações, vamos aprender sobre a base do banco de dados e como utilizá-los de maneira prática nos projetos. Para isso começaremos aprendendo modelagem de dados, essencial para a construção de bancos organizados e funcionais:",
                'link' => "https://www.youtube.com/watch?v=SEnnucNP1h0",
                'image' => 'https://img.youtube.com/vi/SEnnucNP1h0/0.jpg',
            ],
            [
                'course_id' => 1,
                'name' => 'SQL e MySQL',
                'description' => "Com nossos banco construídos precisamos criar consultas para utilizar dentro das nossas aplicações, e por meio desse curso introdutório de SQL e MySql, podemos realizar nossas consultas ao banco de maneira relacional! ",
                'link' => "https://www.youtube.com/watch?v=XQkf-6Yl3WM",
                'image' => 'https://img.youtube.com/vi/XQkf-6Yl3WM/0.jpg',
            ],
            [
                'course_id' => 1,
                'name' => 'Banco de Dados Orientado a Documentos',
                'description' => "Aprendemos a utilizar bancos de dados relacionais, dessa vez vamos aprender sobre banco de dados orientados a documentos, o MongoDB, no qual armazena dados por meio de documentos flexíveis.",
                'link' => "https://www.youtube.com/watch?v=x9tC0eK0GtA&t=21s",
                'image' => 'https://img.youtube.com/vi/x9tC0eK0GtA/0.jpg',
            ],
            [
                'course_id' => 1,
                'name' => "API Rest",
                'description' => "Para completar nosso aprendizado para a construção de sistemas backend, iremos aprender sobre API, que é nada mais do que um conjunto de regras e protocolos que possibilitam a interação de sistemas e serviços diversos. Através dela iremos conseguir construir projetos completos, porém com o Frontend e Backend separados. Os desenvolvedores back end utilizam muito de API, já que são os responsáveis por criá-las e oferecer para o frontend! ",
                'link' => 'https://img.youtube.com/vi/9SbUPqKEWcY/0.jpg',
                'image' => "https://www.youtube.com/watch?v=9SbUPqKEWcY",
            ],
            [
                'course_id' => 1,
                'name' => "Node JS",
                'description' => "Chegou o momento de aprender sobre frameworks, que são um conjunto de ferramentas e bibliotecas que possibilitam um desenvolvimento ágil e rápido aos desenvolvedores. Assim, iremos iniciar o aprendizado do Node Js que utiliza o Javascript fora do navegador interagindo com os banco de dados. Vamos nessa?",
                'link' => 'https://img.youtube.com/vi/IOfDoyP1Aq0/0.jpg',
                'image' => "https://www.youtube.com/watch?v=IOfDoyP1Aq0"
            ],
            [
                'course_id' => 1,
                'name' => "PHP",
                'description' => "Um bom desenvolvedor backend sabe muito bem uma linguagem e framework, porém nunca fica refém a ela! Por isso, nessa trilhagem de backend vamos aprender sobre o PHP, uma das principais linguagens para o desenvolvimento web no lado do servidor. Neste curso, você irá aprender sobre tudo o que é essencial para dominar essa linguagem.",
                'link' => 'https://img.youtube.com/vi/TfsO0BGvGn0/0.jpg',
                'image' => "https://www.youtube.com/watch?v=TfsO0BGvGn0&list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_",
            ],
            [
                'course_id' => 1,
                'name' => "Laravel",
                'description' => "Os frameworks buscam dar agilidade à vida de um desenvolvedor, assim o Laravel surge como uma ferramenta para os desenvolvedores backend. Disponibilizando recursos e organizações favoráveis para um sistema do lado do servidor excepcional! ",
                'link' => 'https://img.youtube.com/vi/qH7rsZBENJo/0.jpg',
                'image' => "https://www.youtube.com/watch?v=qH7rsZBENJo&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG",
            ],
            [
                'course_id' => 1,
                'name' => "Segurança da Informação",
                'description' => "Finalizando nosso trajeto para ser uma ótima desenvolvedora backend, necessitamos compreender sobre segurança da informação, e como isso implica em formulações adequadas e seguras de sistemas e sites. Chegou a hora de terminarmos essa etapa! ",
                'link' => 'https://img.youtube.com/vi/KvPtIl-Gz2E/0.jpg',
                'image' => "https://www.youtube.com/watch?v=KvPtIl-Gz2E&list=PLHz_AreHm4dlaTyjolzCFC6IjLzO8O0XV",
            ],

            // Frontend
            [
                'course_id' => 2,
                'name' => "Bases da Internet: ",
                'description' => "Antes de se tornar um ótimo desenvolvedor frontend é preciso aprender as principais bases da tecnologia, e por meio desse curso você irá aprender o essencial sobre a internet, como fundamentos de redes de computadores e internet:",
                'link' => 'https://img.youtube.com/vi/YbRHeRFYyCQ/0.jpg',
                'image' => "https://www.youtube.com/playlist?list=PLAp37wMSBouDdpuuYhZfEK9oH0qk0IANb",
            ],
            [
                "course_id" => 2,
                'name' => "HTML",
                'description' => "Continuando nosso aprendizado para uma carreira de sucesso, iremos aprender sobre as duas principais linguagens do desenvolvimento web. Sendo o HTML, uma linguagem de marcação para construção do esqueleto das páginas, e o CSS, o estilo necessário para dar um visual interessante para os sites. Vamos lá? Esse é um curso introdutório das duas linguagens! ",
                'link' => "https://www.youtube.com/watch?v=PuyZAUyZYDI",
                'image' => 'https://img.youtube.com/vi/PuyZAUyZYDI/0.jpg',
            ],
            [
                "course_id" => 2,
                'name' => "HTML Semântico",
                'description' => "Fundamentar nossas bases no HTML é o principal diferencial em um desenvolvedor. Conhecer e explorar bem o HTML Semântico, facilita para construção de um desenvolvimento ágil! Vamos nessa?",
                'link' => "https://www.youtube.com/watch?v=tAFRHcEH-Pc",
                'image' => 'https://img.youtube.com/vi/tAFRHcEH-Pc/0.jpg',
            ],
            [
                "course_id" => 2,
                'name' => "Flex Box",
                'description' => "Programar pensando no mobile é sempre essencial para qualquer desenvolvedor, e para isso precisamos conhecer bem nossa ferramenta de estilização, o CSS. E por meio do Flex Box e Grid, iremos conseguir fazer aplicações incríveis! ",
                'link' => "https://www.youtube.com/watch?v=P9TrFDNwor4&t=21s",
                'image' => 'https://img.youtube.com/vi/P9TrFDNwor4/0.jpg',
            ],
            [
                "course_id" => 2,
                'name' => "Grid",
                'description' => '',
                'link' => "https://www.youtube.com/watch?v=8VapN6x897U",
                'image' => 'https://img.youtube.com/vi/8VapN6x897U/0.jpg',
            ],
            [
                "course_id" => 2,
                'name' => "Lógica de Programação",
                'description' => "Antes de iniciar o aprendizado de uma linguagem de programação é necessário pensar como um programador, através da lógica de programação! Por meio dela, você irá conseguir explorar qualquer nova linguagem. Até porque, ela é universal! ",
                'link' => "https://img-c.udemycdn.com/course/240x135/4278258_d5da_2.jpg",
                'image' => "https://www.udemy.com/share/105att3@zWEtvp76ydc2nlSDKFSkBij4oGDwq-wLUBo906yN6Bl0RO51W1i-CXSD0KRmVdTLhw==/",
            ],
            [
                "course_id" => 2,
                'name' => "Javascript",
                'description' => "Agora sim iremos explorar uma linguagem de programação. O javascript é a principal linguagem para desenvolvedores webs tornarem suas aplicações dinâmicas, e por meio do aprendizado dessa linguagem você irá conseguir dar vida aos seus sites! ",
                'link' => 'https://img.youtube.com/vi/TkD0QMyBa28/0.jpg',
                'image' => "https://www.youtube.com/playlist?list=PLnDvRpP8BneysKU8KivhnrVaKpILD3gZ6",
            ],
            [
                "course_id" => 2,
                'name' => "Versionamento",
                'description' => "Quando se trabalha em equipe é essencial trabalhar com ferramentas de versionamento de código, podendo organizar o seu trabalho em versões. Esse é um curso rápido para aprender sobre a ferramenta Git e plataformas como GitHub e GitLab: ",
                'link' => 'https://img.youtube.com/vi/iQn5vZt0iWI/0.jpg',
                'image' => "https://www.youtube.com/watch?v=iQn5vZt0iWI&list=PLpaKFn4Q4GMOhOuffvi7VagNib0P325AV",
            ],
            [
                "course_id" => 2,
                'name' => "API Rest",
                'description' => "Antes de finalizar nosso aprendizado para a construção de sistemas completos, ou full : ), iremos aprender sobre API, que é nada mais do que um conjunto de regras e protocolos que possibilitam a interação de sistemas e serviços diversos. Através dela iremos conseguir construir projetos completos, porém com o Frontend e Backend separados. Vamos lá?",
                'link' => 'https://img.youtube.com/vi/9SbUPqKEWcY/0.jpg',
                'image' => "https://www.youtube.com/watch?v=9SbUPqKEWcY",
            ],
            [
                "course_id" => 2,
                'name' => "Metodologia CSS",
                'description' => "Quando se fala em uma ótima desenvolvedora front end, logo podemos pensar nas suas habilidades de organizações dentro de um CSS escalável e de fácil utilização.Para a construção de um ótimo código front utilizamos metodologias CSS, importantes para se tornar uma desenvolvedora com skills diferentes do mercado e que consiga se adaptar às necessidades de cada ambiente de trabalho. Nessa trilha iremos aprender sobre as três principais metodologias, o BEM CSS, OOCSS e SMACSS! ",
                'link' => "",
                'image' => "",
            ],
            [
                "course_id" => 2,
                'name' => "BEM CSS",
                'description' => "",
                'link' => "https://www.youtube.com/watch?v=rltjnLyjFZk",
                'image' => 'https://img.youtube.com/vi/rltjnLyjFZk/0.jpg',
            ],
            [
                "course_id" => 2,
                'name' => "OOCSS",
                'description' => "",
                'link' => "https://www.youtube.com/watch?v=LOGsjV2y_4U",
                'image' => 'https://img.youtube.com/vi/LOGsjV2y_4U/0.jpg',
            ],
            [
                "course_id" => 2,
                'name' => "SMACSS",
                'description' => "",
                'link' => "https://www.youtube.com/watch?v=aPycJaf4ERg",
                'image' => 'https://img.youtube.com/vi/aPycJaf4ERg/0.jpg',
            ],
            [
                "course_id" => 2,
                'name' => "Bootstrap ",
                'description' => "Conhecer a base do desenvolvimento frontend web é a parte principal para se utilizar de maneira sábia bons frameworks! O bootstrap surge como um ferramenta para se escrever o CSS inline nas suas aplicações, sendo uma das mais utilizadas do mercado!",
                'link' => 'https://img.youtube.com/vi/jJUpJA1GJHw/0.jpg',
                'image' => "https://www.youtube.com/watch?v=jJUpJA1GJHw&t=1190s",
            ],
            [
                "course_id" => 2,
                'name' => "Tailwinds CSS",
                'description' => "O Tailwinds CSS nasce com o intuito de ser um facilitador das escritas css, porém diferentemente do Bootstrap, possui a característica de ser mais adaptável a mudanças e estilizações. Ele possui uma gama de ferramentas que possibilitam um desenvolvedor a criar aplicações amigáveis ao usuário e responsivas. Vamos nessa?",
                'link' => 'https://img.youtube.com/vi/1eLaBow7Zbo/0.jpg',
                'image' => "https://www.youtube.com/playlist?list=PLcoYAcR89n-r1m-tMfV4qndrRWpT_rb9u",
            ],

            [
                "course_id" => 2,
                'name' => "Frameworks e Bibliotecas JS",
                'description' => "Para finalizar nossa trilha para ser uma incrível desenvolvedora front-end, não poderíamos deixar de lado os frameworks e bibliotecas JS, amplamente utilizados nas soluções de aplicações web. Nota-se que, atualmente, novos frameworks e bibliotecas surgem no mercado todos os dias e isso pode deixar as desenvolvedoras com uma dúvida constante: ‘Por qual deveria começar?’. Infelizmente, não há uma resposta exata para essa pergunta, visto que tudo depende da necessidade do seu projeto. Porém uma dica, é aprender os mais utilizados do mercado, e se manter atenta às novas ferramentas que poderão surgir, migrando caso necessário de tecnologia. Assim, quando se aprende muito bem um framework ou biblioteca, as adaptações para os próximos serão fáceis, e o seu caminho como uma dev front será com certeza excepcional! ",
                'link' => "",
                'image' => "",
            ],
            [
                "course_id" => 2,
                'name' => "Qual o melhor?",
                'description' => "",
                'link' => "https://www.youtube.com/watch?v=8-3ZOdp_ZDo",
                'image' => 'https://img.youtube.com/vi/8-3ZOdp_ZDo/0.jpg',
            ],
            [
                "course_id" => 2,
                'name' => "React JS",
                'description' => "",
                'link' => "https://www.youtube.com/playlist?list=PLnDvRpP8BneyVA0SZ2okm-QBojomniQVO",
                'image' => 'https://img.youtube.com/vi/FXqX7oof0I4/0.jpg',
            ],
            [
                "course_id" => 2,
                'name' => "Vue JS",
                'description' => "",
                'link' => "https://www.youtube.com/watch?v=wsAQQioPIJs&list=PLnDvRpP8BnezDglaAvtWgQXzsOmXUuRHL",
                'image' => 'https://img.youtube.com/vi/wsAQQioPIJs/0.jpg',
            ],
            [
                "course_id" => 2,
                'name' => "Angular JS",
                'description' => "",
                'link' => 'https://img.youtube.com/vi/vJt_K1bFUeA/0.jpg',
                'image' => "https://www.youtube.com/watch?v=vJt_K1bFUeA&list=PLnDvRpP8Bnex2GQEN0768_AxZg_RaIGmw",
            ],

            // Full Stack
            [
                'course_id' => 3,
                'name' => "Bases da Internet: ",
                'description' => "Antes de se tornar um ótimo desenvolvedor fullstack é preciso aprender as principais bases da tecnologia, e por meio desse curso você irá aprender o essencial sobre a internet, como fundamentos de redes de computadores e internet:",
                'link' => 'https://img.youtube.com/vi/YbRHeRFYyCQ/0.jpg',
                'image' => "https://www.youtube.com/playlist?list=PLAp37wMSBouDdpuuYhZfEK9oH0qk0IANb",
            ],
            [
                "course_id" => 3,
                'name' => "HTML",
                'description' => "Continuando nosso aprendizado para uma carreira de sucesso, iremos aprender sobre as duas principais linguagens do desenvolvimento web. Sendo o HTML, uma linguagem de marcação para construção do esqueleto das páginas, e o CSS, o estilo necessário para dar um visual interessante para os sites. Vamos lá? Esse é um curso introdutório das duas linguagens! ",
                'link' => "https://www.youtube.com/watch?v=PuyZAUyZYDI",
                'image' => 'https://img.youtube.com/vi/PuyZAUyZYDI/0.jpg',
            ],
            [
                "course_id" => 3,
                'name' => "HTML Semântico",
                'description' => "Fundamentar nossas bases no HTML é o principal diferencial em um desenvolvedor. Conhecer e explorar bem o HTML Semântico, facilita para construção de um desenvolvimento ágil! Vamos nessa?",
                'link' => "https://www.youtube.com/watch?v=tAFRHcEH-Pc",
                'image' => 'https://img.youtube.com/vi/tAFRHcEH-Pc/0.jpg',
            ],
            [
                "course_id" => 3,
                'name' => "Flex Box",
                'description' => "Programar pensando no mobile é sempre essencial para qualquer desenvolvedor, e para isso precisamos conhecer bem nossa ferramenta de estilização, o CSS. E por meio do Flex Box e Grid, iremos conseguir fazer aplicações incríveis! ",
                'link' => "https://www.youtube.com/watch?v=P9TrFDNwor4&t=21s",
                'image' => 'https://img.youtube.com/vi/P9TrFDNwor4/0.jpg',
            ],
            [
                "course_id" => 3,
                'name' => "Grid",
                'description' => '',
                'link' => "https://www.youtube.com/watch?v=8VapN6x897U",
                'image' => 'https://img.youtube.com/vi/8VapN6x897U/0.jpg',
            ],
            [
                "course_id" => 3,
                'name' => "Lógica de Programação",
                'description' => "Antes de iniciar o aprendizado de uma linguagem de programação é necessário pensar como um programador, através da lógica de programação! Por meio dela, você irá conseguir explorar qualquer nova linguagem. Até porque, ela é universal! ",
                'link' => "https://img-c.udemycdn.com/course/240x135/4278258_d5da_2.jpg",
                'image' => "https://www.udemy.com/share/105att3@zWEtvp76ydc2nlSDKFSkBij4oGDwq-wLUBo906yN6Bl0RO51W1i-CXSD0KRmVdTLhw==/",
            ],
            [
                "course_id" => 3,
                'name' => "Javascript",
                'description' => "Agora sim iremos explorar uma linguagem de programação. O javascript é a principal linguagem para desenvolvedores webs tornarem suas aplicações dinâmicas, e por meio do aprendizado dessa linguagem você irá conseguir dar vida aos seus sites! ",
                'link' => 'https://img.youtube.com/vi/TkD0QMyBa28/0.jpg',
                'image' => "https://www.youtube.com/playlist?list=PLnDvRpP8BneysKU8KivhnrVaKpILD3gZ6",
            ],
            [
                "course_id" => 3,
                'name' => "Versionamento",
                'description' => "Quando se trabalha em equipe é essencial trabalhar com ferramentas de versionamento de código, podendo organizar o seu trabalho em versões. Esse é um curso rápido para aprender sobre a ferramenta Git e plataformas como GitHub e GitLab: ",
                'link' => 'https://img.youtube.com/vi/iQn5vZt0iWI/0.jpg',
                'image' => "https://www.youtube.com/watch?v=iQn5vZt0iWI&list=PLpaKFn4Q4GMOhOuffvi7VagNib0P325AV",
            ],
            [
                "course_id" => 3,
                'name' => "React JS",
                'description' => "Com a nossa base formada no desenvolvimento web, podemos iniciar o aprendizado de frameworks que são um conjunto de ferramentas para facilitar a vida de uma desenvolvedora. Nesse curso, iremos aprender sobre o framework React, o principal no mercado quando se refere ao desenvolvimento de aplicações para o FrontEnd:",
                'link' => "https://www.youtube.com/playlist?list=PLnDvRpP8BneyVA0SZ2okm-QBojomniQVO",
                'image' => 'https://img.youtube.com/vi/FXqX7oof0I4/0.jpg',
            ],
            [
                'course_id' => 3,
                'name' => "Banco de Dados",
                'description' => "Iniciando nosso trajeto no backend das nossas aplicações, vamos aprender sobre a base do banco de dados e como utilizá-los de maneira prática nos projetos. Para isso começaremos aprendendo modelagem de dados, essencial para a construção de bancos organizados e funcionais:",
                'link' => "https://www.youtube.com/watch?v=SEnnucNP1h0",
                'image' => 'https://img.youtube.com/vi/SEnnucNP1h0/0.jpg',
            ],
            [
                'course_id' => 3,
                'name' => 'SQL e MySQL',
                'description' => "Com nossos banco construídos precisamos criar consultas para utilizar dentro das nossas aplicações, e por meio desse curso introdutório de SQL e MySql, podemos realizar nossas consultas ao banco de maneira relacional! ",
                'link' => "https://www.youtube.com/watch?v=XQkf-6Yl3WM",
                'image' => 'https://img.youtube.com/vi/XQkf-6Yl3WM/0.jpg',
            ],
            [
                'course_id' => 3,
                'name' => 'Banco de Dados Orientado a Documentos',
                'description' => "Aprendemos a utilizar bancos de dados relacionais, dessa vez vamos aprender sobre banco de dados orientados a documentos, o MongoDB, no qual armazena dados por meio de documentos flexíveis.",
                'link' => "https://www.youtube.com/watch?v=x9tC0eK0GtA&t=21s",
                'image' => 'https://img.youtube.com/vi/x9tC0eK0GtA/0.jpg',
            ],
            [
                'course_id' => 3,
                'name' => "API Rest",
                'description' => "Antes de finalizar nosso aprendizado para a construção de sistemas completos, ou full : ), iremos aprender sobre API, que é nada mais do que um conjunto de regras e protocolos que possibilitam a interação de sistemas e serviços diversos. Através dela iremos conseguir construir projetos completos, porém com o Frontend e Backend separados. Vamos lá?",
                'link' => 'https://img.youtube.com/vi/9SbUPqKEWcY/0.jpg',
                'image' => "https://www.youtube.com/watch?v=9SbUPqKEWcY",
            ],
            [
                'course_id' => 3,
                'name' => "Node JS",
                'description' => "Finalizando nossa trilha iremos aprender sobre o desenvolvimento backend a partir do framework Node Js. Por meio dele utilizaremos o Javascript fora do navegador, podendo utilizar aquilo que foi aprendido nos cursos de Javascript e React. Vamos finalizar essa trilha?",
                'link' => 'https://img.youtube.com/vi/IOfDoyP1Aq0/0.jpg',
                'image' => "https://www.youtube.com/watch?v=IOfDoyP1Aq0"
            ],

            // Mobile 
            [
                "course_id" => 4,
                "name" => "Lógica de Programação ",
                "description" => "Antes de iniciar o aprendizado de uma linguagem de programação é necessário pensar como um programador, através da lógica de programação! Por meio dela, você irá conseguir explorar qualquer nova linguagem. Até porque, ela é universal! Por meio desse curso você irá aprender mais sobre a lógica de programação através da linguagem Dart, utilizada para a criação de soluções mobile!",
                "link" => 'https://baltaio.blob.core.windows.net/static/images/courses/logica-de-programacao-com-dart_banner.jpg',
                "image" => "https://balta.io/cursos/logica-de-programacao-com-dart",
            ],
            [
                "course_id" => 4,
                "name" => "Versionamento",
                "description" => "Quando se trabalha em equipe é essencial trabalhar com ferramentas de versionamento de código, podendo organizar o seu trabalho em versões. Esse é um curso rápido para aprender sobre a ferramenta Git e plataformas como GitHub e GitLab: ",
                "link" => 'https://img.youtube.com/vi/iQn5vZt0iWI/0.jpg',
                "image" => "https://www.youtube.com/watch?v=iQn5vZt0iWI&list=PLpaKFn4Q4GMOhOuffvi7VagNib0P325AV",
            ],
            [
                "course_id" => 4,
                "name" => "Bases do Flutter",
                "description" => "Para se tornar uma grande desenvolvedora mobile é importante aprender sobre ferramentas atuais e utilizadas em grande escala no mercado, e o Flutter é uma delas! Flutter é um framework na linguagem Dart, que possibilita criar aplicativos híbridos, ou seja, tanto para IOs quanto para Android, a partir de um mesmo código. Neste curso você irá aprender sobre as bases do Flutter!  ",
                "link" => 'https://i.vimeocdn.com/video/800486830-78ad318eae66d360eafdc48c08cb996d1248797f141ec82881040f1c11b14f20-d?mw=1000&mh=562',
                "image" => "https://balta.io/cursos/criando-seu-primeiro-app-com-flutter",
            ],
            [
                "course_id" => 4,
                "name" => "Layouts",
                "description" => "A diagramação e estilo de uma página em um aplicativo são partes muito importantes para o seu sucesso! A partir do curso você irá aprender sobre o essencial para se tornar uma grande desenvolvedora! ",
                "link" => 'https://i.vimeocdn.com/video/792452348-a364791217a099005ede2381bc45375d226898bad6578d7269b71b3c6ff1a7e5-d?mw=1000&mh=562',
                "image" => "https://balta.io/cursos/dominando-layouts-no-flutter",
            ],
            [
                "course_id" => 4,
                "name" => "Android e IOs",
                "description" => "A diferenciação e criação de um código adaptável aos sistemas operacionais Android e IOs é de muita importância para um desenvolvedor mobile, já que assim, o mesmo código poderá ser utilizado em ambas as situações! Exigindo menor manutenção e tempo do programador! ",
                "link" => 'https://i.vimeocdn.com/video/875590860-e3dda7709fc9e30e52ffd3474628f6e642f093ba21fcb5db999ba8294e2623e5-d?mw=1000&mh=562',
                "image" => "https://balta.io/cursos/flutter-layouts-contact-app",
            ],
            [
                "course_id" => 4,
                "name" => "Animações",
                "description" => "Para completar sua formação no front end mobile, iremos aprender sobre animações! Ferramentas importantes para criar aplicativos bonitos e dinâmicos!",
                "link" => 'https://i.vimeocdn.com/video/838211967-5a25ea6c412f336f9ae62f828f91ac7683848b9a8cf80f199e720aa46804bf6b-d?mw=1000&mh=562',
                "image" => "https://balta.io/cursos/flutter-apps-perfect-eggs",
            ],
            [
                'course_id' => 4,
                'name' => "Banco de Dados",
                'description' => "Iniciando nosso trajeto no backend das nossas aplicações, vamos aprender sobre a base do banco de dados e como utilizá-los de maneira prática nos projetos. Para isso começaremos aprendendo modelagem de dados, essencial para a construção de bancos organizados e funcionais:",
                'link' => "https://www.youtube.com/watch?v=SEnnucNP1h0",
                'image' => 'https://img.youtube.com/vi/SEnnucNP1h0/0.jpg',
            ],
            [
                'course_id' => 4,
                'name' => 'SQL e MySQL',
                'description' => "Com nossos banco construídos precisamos criar consultas para utilizar dentro das nossas aplicações, e por meio desse curso introdutório de SQL e MySql, podemos realizar nossas consultas ao banco de maneira relacional! ",
                'link' => "https://www.youtube.com/watch?v=XQkf-6Yl3WM",
                'image' => 'https://img.youtube.com/vi/XQkf-6Yl3WM/0.jpg',
            ],
            [
                'course_id' => 4,
                'name' => 'Banco de Dados Orientado a Documentos',
                'description' => "Aprendemos a utilizar bancos de dados relacionais, dessa vez vamos aprender sobre banco de dados orientados a documentos, o MongoDB, no qual armazena dados por meio de documentos flexíveis.",
                'link' => "https://www.youtube.com/watch?v=x9tC0eK0GtA&t=21s",
                'image' => 'https://img.youtube.com/vi/x9tC0eK0GtA/0.jpg',
            ],
            [
                "course_id" => 4,
                "name" => "API Rest",
                "description" => "Antes de finalizar nosso aprendizado para a construção de aplicações completas, iremos aprender sobre API, que é nada mais do que um conjunto de regras e protocolos que possibilitam a interação de sistemas e serviços diversos. Através dela iremos conseguir construir projetos completos, porém com o Frontend e Backend separados. Vamos lá?",
                "link" => 'https://img.youtube.com/vi/9SbUPqKEWcY/0.jpg',
                "image" => "https://www.youtube.com/watch?v=9SbUPqKEWcY",
            ],
            [
                "course_id" => 4,
                "name" => "Backend",
                "description" => "Antes de finalizar nosso aprendizado para a construção de aplicações completas, iremos aprender sobre API, que é nada mais do que um conjunto de regras e protocolos que possibilitam a interação de sistemas e serviços diversos. Através dela iremos conseguir construir projetos completos, porém com o Frontend e Backend separados. Vamos lá?",
                "link" => 'https://img.youtube.com/vi/kj1owVJWqSw/0.jpg',
                "image" => "https://www.youtube.com/playlist?list=PLRpTFz5_57csByx34C_98wPn3PAxnUDFr",
            ],
            [
                "course_id" => 4,
                "name" => "Full Stack",
                "description" => "Para recapitular tudo o que foi estudado nessa trilhagem vamos relembrar nesse curso tudo sobre frontend e backend em aplicações mobile, criando assim um aplicativos full stack, e nos tornando também desenvolvedoras mobile full stack! Vamos finalizar essa trilhagem? ",
                "link" => 'https://img.youtube.com/vi/CowjMR7yU9w/0.jpg',
                "image" => "https://www.youtube.com/playlist?list=PLRpTFz5_57cvJyGFOD-Jx_cYqc1t2Wjk1",
            ],
        ];


        DB::table('lessons')->insert($lessons);
    }
}
