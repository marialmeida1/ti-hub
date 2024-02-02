
import { FaBehance, FaHome, FaInstagram, FaLaravel, FaLinkedin, FaPhone, FaReact } from "react-icons/fa";
import { SiGmail, SiTailwindcss } from "react-icons/si";


function Footer() {
    return (
        <div className="max-w-full mx-auto my-auto min-h-32 bg-gray-200 text-gray-700 dark:bg-zinc-800 dark:text-zinc-500 shadow-sm ">
            {/* Social Media */}
            <div className="border-gray-400 border-b space-y-4 md:space-y-0 md:flex md:items-center p-4 sm:p-6 lg:p-8 md:justify-around">
                <p className="font-semibold text-center ">Entre em contato pelas redes sociais: </p>
                <div className="flex flex-nowrap space-x-14 justify-center">
                    < FaInstagram className="w-5 h-5 icon-link" />
                    < FaLinkedin className="w-5 h-5 icon-link" />
                    < FaBehance className="w-5 h-5 icon-link" />
                </div>
            </div>

            {/* About */}
            <div className="p-4 sm:p-6 lg:p-8 md:grid md:grid-cols-3 md:items-start flex flex-col items-center justify-center">
                <div className="flex justify-center">
                    {/* About */}
                    <div className=" md:max-w-56 max-w-64">
                        <h1 className="text-lg font-bold w-full pb-6 pt-4 dark:text-gray-300">Projeto</h1>
                        <p className="font-medium text-justify">O projeto foi realizado como uma forma de estudo, envolvendo o uso de ferramentas importantes para o desenvolvimento front-end.</p>
                    </div>
                </div>
                <div className="flex justify-center">
                    {/* Ferramentas */}
                    <div className=" md:max-w-56 max-w-64 md:min-w-56 min-w-64">
                        <h1 className="text-lg font-bold w-full pb-6 pt-4 dark:text-gray-300">Ferramentas</h1>
                        <ul className="space-y-3">
                            <li className="flex flex-row link"><FaReact className="h-6 w-6 pe-2" />React</li>
                            <li className="flex flex-row link"><SiTailwindcss className="h-6 w-6 pe-2" />Tailwind CSS</li>
                            <li className="flex flex-row link"><FaLaravel className="h-6 w-6 pe-2" />Laravel</li>
                        </ul>
                    </div>
                </div>
                <div className="flex justify-center">
                    {/* Contact */}
                    <div className=" md:max-w-56 max-w-64">
                        <h1 className="text-lg font-bold w-full pb-6 pt-4 dark:text-gray-300">Contato</h1>
                        <ul className="space-y-3">
                            <li className="flex flex-row"><FaHome className="h-6 w-6 pe-2" />Formiga, Minas Gerais</li>
                            <li className="flex flex-row link"><FaPhone className="h-6 w-6 pe-2" />+55 (37) 98802-3839</li>
                            <li className="flex flex-row link"><SiGmail className="h-6 w-6 pe-2" />marianaalmeidafga@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Footer;