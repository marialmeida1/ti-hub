function Dropdown() {
    return (
        <div className="flex justify-end me-6 z-10 md:hidden">
            <div className="flex flex-wrap w-32 space-y-3 bg-white shadow-sm border border-gray-100 text-gray-500 rounded p-3 -mt-2 py-5 ">
                <div><button className="hover:text-gray-700">Cadastrar</button></div>
                <div><button className="hover:text-gray-700">Entrar</button></div>
            </div>
        </div>
    );
}

export default Dropdown;