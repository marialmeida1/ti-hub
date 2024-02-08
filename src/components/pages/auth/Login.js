import Container from "../../layout/Container";
import Form from "../../layout/Form";
import Start from "../../layout/Start";

function Login() {
    return (
        <>
            <Start />
            <Container customClass="items-center w-full" align="center">
                <Form />
            </Container>
        </>
    );
}

export default Login;