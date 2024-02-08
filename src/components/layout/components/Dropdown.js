import { Link } from "react-router-dom";

function Dropdown({ items }) {
    return (
        <div className="flex justify-end md:hidden absolute w-full font-semibold">
            <div className="flex flex-wrap w-32 me-12 z-10 space-y-3 bg-gray-50 dark:bg-gray-900 shadow-sm border border-gray-200 dark:border-gray-700 text-gray-500 rounded p-3 -mt-2 py-5 ">
                {items && items.map((item, index) =>
                    <div key={index}>
                        <button className="hover:text-gray-700"><Link to={item.to}>{item.label}</Link></button>
                    </div>
                )}
            </div>
        </div>
    );


}

export default Dropdown;