import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';

import Home from './components/pages/Home';
import Courses from './components/pages/Courses';
import Community from './components/pages/Community';
import News from './components/pages/News';

import Footer from './components/layout/Footer';
import Navbar from './components/layout/Navbar';

function App() {

  return (
    <Router>
      <Navbar />
      <Routes>
        <Route exact path="/" Component={Home} />
        <Route path="/courses" Component={Courses} />
        <Route path="/news" Component={News} />
        <Route path="/community" Component={Community} />
      </Routes>
      <Footer />
    </Router>
  );
}

export default App;