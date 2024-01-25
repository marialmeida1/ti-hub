function Navbar() {
    return (
        <nav>
            <div className='max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 shadow-md'>
                <div className='flex justify-between items-center h-16'>

                    {/* Logo  */}
                    <div className='flex flex-nowrap text-gray-800'>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hexagon-letter-t" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M19.875 6.27a2.225 2.225 0 0 1 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z" /><path d="M10 8h4" /><path d="M12 8v8" /></svg>
                        <p className='font-bold ps-2'>TI - HUB</p>
                    </div>

                    {/* Links */}
                    <div className='space-x-16 font-medium text-gray-500 hidden md:block'>
                        <a href="#" className='link'>Cursos</a>
                        <a href="#" className='link'>Notícias</a>
                        <a href="#" className='link'>Comunidade</a>
                    </div>

                    {/* Options User */}
                    <div>
                        <button className='md:hidden text-gray-700 transition h-8 w-8 flex justify-center items-center hover:bg-gray-100 hover:text-gray-600 hover:rounded-full '>
                            <svg className='' xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M4 6l16 0" /><path d="M4 12l16 0" /><path d="M4 18l16 0" /></svg>
                        </button>

                        <div className='hidden md:block'>
                            <div className='space-x-6'>
                                <a href="#" className='btn btn-secondary'>Entrar</a>
                                <a href="#" className='btn btn-primary'>Cadastrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    );
}

export default Navbar;