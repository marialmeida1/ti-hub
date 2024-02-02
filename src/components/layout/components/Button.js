function Button({ color, rounded, text }) {

    const colors = (value) => {
        if (value == 'primary') {
            return 'bg-emerald-800 text-gray-50 hover:bg-emerald-500'
        }
        else if (value == 'secondary') {
            return 'bg-emerald-50 text-gray-800 hover:bg-gray-600 hover:text-gray-50'
        }
        else {
            return 'bg-white text-black'
        }
    }

    const roundeds = (value) => {
        if (value == 'full') {
            return 'rounded-full'
        }

        else {
            return 'rounded-md'
        }
    }

    const roundedStyles = roundeds(rounded)
    const colorStyles = colors(color);
    const defaultStyles = 'py-1.5 px-3.5 font-medium cursor-pointer'

    return (
        <button className={`${defaultStyles} ${colorStyles} ${roundedStyles}`}>{text}</button>
    );
}

export default Button;