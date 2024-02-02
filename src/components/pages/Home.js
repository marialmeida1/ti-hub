import Container from "../layout/Container";
import Start from "../layout/Start";

function Home() {

    const align = 'flex flex-col justify-center items-center pt-24 pb-20'

    return (
        <>
            <Start align={align}>
                <h1 className="text-5xl font-black text-zinc-50 pb-2.5">TI - HUB</h1>
                <p className="text-2xl font-medium text-zinc-50">Yout favorite hub!</p>
            </Start>
            <Container>
                Conteúdo
            </Container>
        </>
    );
}

export default Home;