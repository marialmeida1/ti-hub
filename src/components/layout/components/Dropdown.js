function Dropdown() {
    return (
        <div className="flex justify-end md:hidden absolute w-full font-semibold">
            <div className="flex flex-wrap w-32 me-12 z-10 space-y-3 bg-zinc-50 dark:bg-zinc-900 shadow-sm border border-zinc-200 dark:border-zinc-700 text-zinc-500 rounded p-3 -mt-2 py-5 ">
                <div><button className="hover:text-gray-700">Cadastrar</button></div>
                <div><button className="hover:text-gray-700">Entrar</button></div>
            </div>
        </div>
    );


}

export default Dropdown;