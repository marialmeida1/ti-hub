import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';

import Login from '../components/pages/auth/Login';
import Register from '../components/pages/auth/Register';

function AuthRoutes() {
    return (
        <Router>
            <Routes>
                <Route path="/login" Component={Login} />
                <Route path="/register" Component={Register} />
            </Routes>
        </Router>
    );
}

export default AuthRoutes;