import React, { useState, useEffect } from 'react';
import { FaMoon } from 'react-icons/fa';
import { LuSun } from "react-icons/lu";


const ThemeSwitcher = () => {
    const [darkMode, setDarkMode] = useState(false);

    useEffect(() => {
        const isDarkMode = localStorage.getItem('darkMode') === 'true';
        setDarkMode(isDarkMode);
    }, []);

    useEffect(() => {
        document.documentElement.classList.toggle('dark', darkMode);
        localStorage.setItem('darkMode', darkMode);
    }, [darkMode]);

    const toggleDarkMode = () => {
        setDarkMode((prevMode) => !prevMode);
    };

    return (
        <button
            onClick={toggleDarkMode}>
            {darkMode ?
                <FaMoon className="h-5 w-5" />
                :
                <LuSun className="h-5 w-5" />
            }
        </button>
    );
};

export default ThemeSwitcher;