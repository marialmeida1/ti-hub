import { useState } from "react";
import { Link } from 'react-router-dom';

import Dropdown from "./components/Dropdown";
import ThemeSwitcher from "../../theme/ThemeSwitcher";
import Button from "./components/Button";

import { TbHexagonLetterT } from "react-icons/tb";
import { FaBars } from "react-icons/fa";


function Navbar() {

    const [open, setOpen] = useState(true);

    const handleOpen = () => {
        setOpen(!open)
    }

    return (
        <nav>
            <div className='max-w-full mx-auto'>

                {/* Componentes NavBar */}
                <div className='bg-inherit flex justify-between items-center h-16 px-4 sm:px-6 lg:px-8 shadow-sm '>

                    {/* Logo  */}
                    <Link to='/' className='flex flex-nowrap cursor-pointer text-zinc-100' >
                        <TbHexagonLetterT className="h-6 w-6" />
                        <p className='font-bold ps-2'>TI - HUB</p>
                    </Link>

                    {/* Links */}
                    <div className='space-x-6 font-medium text-zinc-100 hidden md:block'>
                        <Link className="link" to="/">Home</Link>
                        <Link className="link" to="/courses">Cursos</Link>
                        <Link className="link" to="/news">Notícias</Link>
                        <Link className="link" to="/community">Comunidade</Link>
                    </div>

                    <div className="flex flex-nowrap">

                        {/* Option Mobile */}
                        <button onClick={handleOpen} className='md:hidden transition h-8 w-8 flex justify-center items-center hover:rounded-lg hover:bg-zinc-600 hover:opacity-70'>
                            <FaBars className="h-6 w-6  text-zinc-100" />
                        </button>

                        {/* Option Web */}
                        <div className='hidden md:block'>
                            <div className='space-x-6'>
                                <Button color='primary' text='Login' />
                                <Button color='secondary' text='Register' />
                            </div>
                        </div>

                        {/* Theme Switcher */}
                        <div className="h-100 ps-2 md:ps-10 text-zinc-100 flex justify-center items-center">
                            <ThemeSwitcher />
                        </div>
                    </div>
                </div>
                {/* Option Menu */}
                {open ? (
                    null
                ) : <Dropdown />
                }
            </div>
        </nav >
    );
}

export default Navbar;