import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';
import Navbar from './components/layout/Navbar';
import Home from './components/pages/Home';

function App() {

  return (
    <div>
      <Router>
        <Navbar />
        <div>
          <Routes>
            <Route exact path="/" Component={Home} />
          </Routes>
        </div>
      </Router>
    </div>
  );
}

export default App;