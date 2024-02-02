import { useState } from "react";

import Dropdown from "./components/Dropdown";
import ThemeSwitcher from "../../theme/ThemeSwitcher";

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
                    <div className='flex flex-nowrap cursor-pointer text-zinc-100'>
                        <TbHexagonLetterT className="h-6 w-6" />
                        <p className='font-bold ps-2'>TI - HUB</p>
                    </div>

                    {/* Links */}
                    <div className='space-x-16 font-medium text-zinc-100 hidden md:block'>
                        <button className='link'>Cursos</button>
                        <button className='link'>Notícias</button>
                        <button className='link'>Comunidade</button>
                    </div>

                    <div className="flex flex-nowrap">

                        {/* Option Mobile */}
                        <button onClick={handleOpen} className='md:hidden transition h-8 w-8 flex justify-center items-center hover:rounded-lg hover:bg-zinc-200'>
                            <FaBars className="h-6 w-6  text-zinc-10" />
                        </button>

                        {/* Option Web */}
                        <div className='hidden md:block'>
                            <div className='space-x-6'>
                                <button className='btn btn-secondary'>Entrar</button>
                                <button className='btn btn-primary'>Cadastrar</button>
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
        </nav>
    );
}

export default Navbar;