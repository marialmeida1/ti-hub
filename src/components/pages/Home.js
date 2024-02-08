import Container from "../layout/Container";
import Start from "../layout/Start";
import Button from "../layout/components/Button";
import Input from "../layout/components/Input";

function Home() {

    const align = 'flex flex-col justify-center items-center py-32'

    return (
        <>
            <Start align={align}>
                <h1 className="text-5xl font-black text-zinc-50 pb-2.5">TI - HUB</h1>
                <p className="text-2xl font-medium text-zinc-50 pb-6">Yout favorite hub!</p>
                <Button color='secondary' rounded="full" text="Associate" to='/register' />
            </Start>
            <Container>
                <Input type='text' size="sm"></Input>
            </Container>
        </>
    );
}

export default Home;