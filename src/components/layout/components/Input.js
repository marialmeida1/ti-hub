function Input({ type, size, width }) {

    const sizes = (value) => {
        if (value.toString() === 'sm') {
            return 'h-5 text-sm'
        }

        else if (value.toString() === 'lg') {
            return 'h-10 text-lg'
        }
    }

    const sizeStyles = sizes(size);

    const defaultStyles = "m-6 h-8 font-medium bg-gray-200 border border-zinc-400 text-gray-200 rounded-md p-2.5 focus:outline-none focus:ring-1 focus:ring-emerald-400"
    const defaultStylesDark = 'dark:bg-gray-800 dark:text-gray-100 dark:border-gray-700'

    return (
        <input className={`${defaultStyles} ${defaultStylesDark} ${sizeStyles} ${width}`} type={type} placeholder="Your text..." />
    );
}

export default Input;