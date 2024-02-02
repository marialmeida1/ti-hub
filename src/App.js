import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';
import Home from './components/pages/Home';
import Footer from './components/layout/Footer';
import Navbar from './components/layout/Navbar';

function App() {

  return (
    <Router>
      <Navbar />
      <Routes>
        <Route exact path="/" Component={Home} />
      </Routes>
      <Footer />
    </Router>
  );
}

export default App;