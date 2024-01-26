import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';
import Navbar from './components/layout/Navbar';
import Home from './components/pages/Home';
import Container from './components/layout/Container';
import Footer from './components/layout/Footer';

function App() {

  return (
    <Router>
      <Navbar />
      <Container>
        <Routes>
          <Route exact path="/" Component={Home} />
        </Routes>
      </Container>
      <Footer />
    </Router>
  );
}

export default App;