
import { FaBehance, FaGithub, FaHome, FaInstagram, FaLaravel, FaLinkedin, FaPhone, FaReact } from "react-icons/fa";
import { SiGmail, SiTailwindcss } from "react-icons/si";
import developer from '../../img/me.jpeg'


function Footer() {
    return (
        <div className="max-w-full mx-auto my-auto min-h-32 bg-emerald-950 dark:bg-gray-950 text-gray-100 shadow-sm divide-y divide-emerald-900 ">

            <div className="p-4 sm:p-6 lg:p-8 md:grid md:grid-cols-3 md:items-start flex flex-col items-center justify-center md:space-y-0 space-y-8">
                <div className="flex justify-center">
                    {/* About */}
                    <div className=" md:max-w-56 max-w-64 md:min-w-56 min-w-64">
                        <div className="flex flex-row justify-center items-center pb-6 pt-4">
                            <img src={developer} alt="Developer" className="rounded-full h-8 w-8 object-cover" />
                            <h1 className="text-lg font-bold w-full  ms-2.5">Mariana Almeida</h1>
                        </div>
                        <div className="flex flex-row space-x-3">
                            <FaInstagram className="h-7 w-7 bg-gray-400 text-emerald-950 p-1.5 rounded-md" />
                            <FaBehance className="h-7 w-7 bg-gray-400 text-emerald-950 p-1.5 rounded-md" />
                            <FaLinkedin className="h-7 w-7 bg-gray-400 text-emerald-950 p-1.5 rounded-md" />
                            <FaGithub className="h-7 w-7 bg-gray-400 text-emerald-950 p-1.5 rounded-md" />
                        </div>
                    </div>
                </div>
                <div className="flex justify-center">
                    {/* Ferramentas */}
                    <div className=" md:max-w-56 max-w-64 md:min-w-56 min-w-64">
                        <h1 className="text-lg font-bold w-full pb-6 pt-4">Tools</h1>
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
                        <h1 className="text-lg font-bold w-full pb-6 pt-4 ">Contact</h1>
                        <ul className="space-y-3">
                            <li className="flex flex-row"><FaHome className="h-6 w-6 pe-2" />Formiga, Minas Gerais</li>
                            <li className="flex flex-row link"><FaPhone className="h-6 w-6 pe-2" />+55 (37) 98802-3839</li>
                            <li className="flex flex-row link"><SiGmail className="h-6 w-6 pe-2" />marianaalmeidafga@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div className="p-4 sm:p-6 lg:p-8 flex justify-center items-center" >
                <span className="font-bold">TI - HUB</span> &copy; 2023
            </div>
        </div>
    );
}

export default Footer;