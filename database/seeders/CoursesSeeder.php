<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'name' => 'Backend',
                'description' => 'O papel do desenvolvedor backend é crucial para a operação eficiente e segura de uma aplicação ou site. Responsáveis por gerenciar os bastidores do sistema, esses profissionais garantem o armazenamento e recuperação precisos dos dados, além de desenvolver e implementar as regras de negócio essenciais para o funcionamento adequado da aplicação. A jornada de um desenvolvedor backend é desafiadora, mas oferece oportunidades significativas de crescimento profissional, permitindo o aprimoramento de habilidades técnicas avançadas e uma compreensão profunda dos sistemas que gerenciam. Ao enfrentar desafios complexos, esses profissionais destacam-se por criar soluções robustas e contribuir para a estabilidade e desempenho dos projetos, promovendo um ambiente profissional gratificante e dinâmico.'
            ],
            [
                'name' => 'Frontend',
                'description' => 'Um profissional de front-end é responsável por criar interfaces visuais atrativas e interativas para os usuários, utilizando tecnologias essenciais como HTML, CSS e JavaScript. A trilha desse desenvolvedor é marcada por desafios estimulantes, exigindo conhecimento técnico e uma abordagem inovadora. Este campo oferece uma jornada profissional recompensadora, com a oportunidade de contribuir para a experiência do usuário em uma variedade de aplicações e projetos.  Os desenvolvedores front-end desempenham um papel crucial na criação de soluções esteticamente agradáveis e funcionais, desenhando interfaces que elevam a usabilidade e a experiência do usuário. A combinação de habilidades técnicas, criatividade e a busca constante por atualizações nas tecnologias mais recentes define a trajetória desse profissional, essencial na construção de aplicações modernas e intuitivas. Sua contribuição, por meio da implementação eficaz de design responsivo e interativo, destaca-se como uma peça-chave no desenvolvimento de produtos digitais bem-sucedidos.',
            ],
            [
                'name' => 'Fullstack',
                'description' => 'Um profissional full stack desempenha um papel integral em todas as fases do desenvolvimento de sistemas ou websites, abrangendo tanto o frontend quanto o backend. Desenvolver habilidades como full stack é uma jornada emocionante e desafiadora, que promete resultados significativos para a carreira profissional. Nesta trilha abrangente, oferecemos um caminho sólido para se tornar um desenvolvedor de sucesso. Este percurso aborda os aspectos essenciais do desenvolvimento web, proporcionando uma base sólida para enfrentar os desafios do mundo da tecnologia de maneira proativa e competente.',
            ],
            [
                'mobile' => 'Mobile',
                'description' => 'A preeminência dos aplicativos nas soluções tecnológicas destaca a importância das desenvolvedoras mobile, profissionais especializados na criação de aplicativos nativos ou híbridos para iOS e Android. Por meio do domínio de linguagens de programação e frameworks específicos, esses especialistas desempenham um papel fundamental na tradução de conceitos em soluções práticas, contribuindo significativamente para a evolução do cenário tecnológico. O desenvolvimento de aplicativos requer expertise técnica, habilidades especializadas e uma compreensão aprofundada das complexidades das plataformas móveis, desafiando constantemente esses profissionais a se adaptarem às demandas dinâmicas do mercado. A jornada no desenvolvimento mobile, portanto, é uma trilha que exige dedicação, atualização constante e a capacidade de transformar ideias em soluções tangíveis, moldando assim o futuro da tecnologia móvel.',
            ],
        ];

        DB::table('courses')->insert($courses);
    }
}
