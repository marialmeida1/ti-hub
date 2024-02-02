import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';

import Home from './components/pages/Home';
import Courses from './components/pages/Courses';
import Community from './components/pages/Community';

import Footer from './components/layout/Footer';
import Navbar from './components/layout/Navbar';
import News from './components/pages/News';

function App() {

  return (
    <Router>
      <Navbar />
      <Routes>
        <Route exact path="/" Component={Home} />
        <Route exact path="/courses" Component={Courses} />
        <Route exact path="/news" Component={News} />
        <Route exact path="/community" Component={Community} />
      </Routes>
      <Footer />
    </Router>
  );
}

export default App;